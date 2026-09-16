/* Contact forms, on every page that has one.

   Without this module the form still works: it posts to send.php the normal
   way and send.php answers with a full page. With it, nothing navigates —
   mistakes are named under the field they belong to and the send happens in
   the background, so a half-filled form is never lost to a page load.

   The rules here mirror send.php on purpose. The server stays the authority;
   this only saves the visitor a round trip. */

const PHONE = /^[0-9+()\s.-]{7,40}$/;
const OK_CLASS = 'is-ok';
const ERROR_CLASS = 'is-error';

/* The label without its "(zorunlu)" / "(opsiyonel)" tail, so a message can
   name the field the way the visitor sees it. */
function fieldName(form, input) {
  const label = input.id ? form.querySelector(`label[for="${input.id}"]`) : null;
  if (!label) return '';
  const copy = label.cloneNode(true);
  copy.querySelectorAll('.field__required, .field__optional').forEach((el) => el.remove());
  return copy.textContent.trim().replace(/\s+/g, ' ');
}

/* Returns a Turkish message, or '' when the value passes. Mirrors the
   switch in send.php field for field. */
function problem(form, input) {
  const value = input.value.trim();
  const label = fieldName(form, input);

  /* Some labels are whole questions ("Şu an neler yapıyorsunuz?"), and those
     cannot carry a suffix without reading as nonsense. */
  const named = label !== '' && !label.endsWith('?');

  if (value === '') {
    if (!input.required) return '';
    if (input.tagName === 'SELECT') return 'Listeden bir seçenek seçin.';
    return named ? `${label} alanı zorunlu.` : 'Bu alan zorunlu.';
  }
  if (input.type === 'email' && !input.checkValidity()) {
    return 'Geçerli bir e-posta adresi girin.';
  }
  if (input.type === 'tel' && !PHONE.test(value)) {
    return 'Geçerli bir telefon numarası girin.';
  }
  if (input.type === 'url') {
    const full = /^https?:\/\//i.test(value) ? value : `https://${value}`;
    try {
      const url = new URL(full);
      if (!url.hostname.includes('.')) throw new Error('no dot');
    } catch {
      return 'Geçerli bir adres girin, örneğin https://ornek.com';
    }
  }
  if (input.type === 'text' && value.length < 2) {
    return named ? `${label} çok kısa.` : 'Bu alan çok kısa.';
  }
  return '';
}

/* Every control the visitor can see and fill. The honeypot and the two
   hidden inputs are left out. */
function fields(form) {
  return [...form.querySelectorAll('input, select, textarea')].filter(
    (el) => el.type !== 'hidden' && el.type !== 'radio' && !el.closest('.field--trap')
  );
}

function setError(form, input, message) {
  const node = input.id ? form.querySelector(`[data-error-for="${input.id}"]`) : null;
  if (node) node.textContent = message;
  if (message) {
    input.setAttribute('aria-invalid', 'true');
  } else {
    input.removeAttribute('aria-invalid');
  }
  return Boolean(node);
}

function clearErrors(form) {
  form.querySelectorAll('[data-error-for]').forEach((node) => { node.textContent = ''; });
  form.querySelectorAll('[aria-invalid]').forEach((el) => el.removeAttribute('aria-invalid'));
}

function setStatus(form, message, state) {
  const status = form.querySelector('[data-form-status]');
  if (!status) return;
  status.textContent = message;
  status.classList.toggle(OK_CLASS, state === 'ok');
  status.classList.toggle(ERROR_CLASS, state === 'error');
}

export function initForms(doc = document) {
  doc.querySelectorAll('[data-form]').forEach((form) => {
    const stamp = form.querySelector('[data-timestamp]');
    const submit = form.querySelector('[type="submit"]');
    const submitLabel = submit ? submit.textContent : '';

    /* send.php rejects a form filled impossibly fast, and reads the clock
       from here. Stamped on first contact, not on load, so a tab left open
       overnight is not treated as a stale token. */
    if (stamp) {
      form.addEventListener('focusin', () => {
        if (stamp.value === '') stamp.value = String(Date.now());
      }, { once: true });
    }

    /* Re-check a field once it has been marked, so a correction clears the
       message as it is typed rather than at the next send. */
    form.addEventListener('input', (event) => {
      const input = event.target;
      if (input.getAttribute('aria-invalid') === 'true') {
        setError(form, input, problem(form, input));
      }
    });

    form.addEventListener('submit', async (event) => {
      event.preventDefault();

      clearErrors(form);
      let first = null;
      fields(form).forEach((input) => {
        const message = problem(form, input);
        if (message) {
          setError(form, input, message);
          if (!first) first = input;
        }
      });

      if (first) {
        setStatus(form, 'Lütfen işaretli alanları düzeltin.', 'error');
        first.focus();
        return;
      }

      if (submit) {
        submit.disabled = true;
        submit.textContent = 'Gönderiliyor…';
      }
      setStatus(form, '', '');

      try {
        const response = await fetch(form.action, {
          method: 'POST',
          body: new FormData(form),
          headers: { Accept: 'application/json', 'X-Requested-With': 'fetch' },
        });
        const result = await response.json();

        if (result.ok) {
          form.reset();
          if (stamp) stamp.value = '';
          setStatus(form, result.message, 'ok');
        } else {
          /* A field the server named but this page has no slot for — a radio
             group, say — still has to reach the visitor, so it goes into the
             status line instead of being dropped. */
          const loose = [];
          Object.entries(result.errors || {}).forEach(([name, message]) => {
            const input = form.querySelector(`[name="${name}"]`);
            if (!input || !setError(form, input, message)) loose.push(message);
            if (input && !first) first = input;
          });
          setStatus(form, [result.message, ...loose].filter(Boolean).join(' '), 'error');
          if (first) first.focus();
        }
      } catch {
        /* Offline, or the request never landed. The form keeps everything
           typed, so trying again costs one click. */
        setStatus(form, 'Bağlantı kurulamadı. Lütfen tekrar deneyin.', 'error');
      } finally {
        if (submit) {
          submit.disabled = false;
          submit.textContent = submitLabel;
        }
      }
    });
  });
}

initForms();
