/* Cookie notice, on every page.

   Shows once, until the visitor picks one of the two buttons, then stays out
   of the way on every later page and visit. The choice is stored in this
   browser and pushed to dataLayer as a cookie_consent event.

   What it deliberately does NOT do: switch Microsoft Clarity on or off.
   Clarity is loaded from head.php on every live page regardless of the
   answer — a decision taken on 16 Sep 2026. If that changes, the stored
   choice below is what to gate the loader on. */

const KEY = 'pd-cookie-consent';
const CHOICES = ['accepted', 'rejected'];

/* Storage can be missing or throw (private windows, blocked site data). The
   notice must still work then; it simply asks again on the next page. */
export function readChoice(storage = window.localStorage) {
  try {
    const saved = JSON.parse(storage.getItem(KEY) || 'null');
    return saved && CHOICES.includes(saved.choice) ? saved.choice : null;
  } catch {
    return null;
  }
}

function saveChoice(choice, storage = window.localStorage) {
  try {
    storage.setItem(KEY, JSON.stringify({ choice, at: new Date().toISOString() }));
  } catch {
    /* Nothing to do: the notice closes for this page either way. */
  }
}

export function initConsent(doc = document) {
  const box = doc.querySelector('[data-consent]');
  if (!box || readChoice()) return;

  box.hidden = false;

  box.addEventListener('click', (event) => {
    const button = event.target.closest('[data-consent-choice]');
    if (!button) return;

    const choice = button.getAttribute('data-consent-choice');
    saveChoice(choice);
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: 'cookie_consent', consent_choice: choice });
    box.hidden = true;
  });
}

initConsent();
