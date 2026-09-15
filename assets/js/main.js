/* Site-wide behaviours, loaded on every page.

   Everything here degrades: with the module absent the nav still wraps and
   stays usable, the header simply never gains its scrolled state, and the
   copyright year falls back to the static one in the markup. */

const HEADER_SCROLLED_AT = 80;
const OPEN_CLASS = 'is-open';
const SCROLLED_CLASS = 'is-scrolled';
const DESKTOP_NAV = '(min-width: 64rem)';
const FOCUSABLE =
  'a[href], button:not([disabled]), input:not([type="hidden"]), select, textarea, [tabindex]:not([tabindex="-1"])';

const visible = (el) => el.getClientRects().length > 0;

/* The year is rendered from JS with a static fallback already in the HTML,
   so a stale year is impossible whether or not this runs. */
export function initYear(doc = document) {
  const now = String(new Date().getFullYear());
  doc.querySelectorAll('[data-year]').forEach((el) => { el.textContent = now; });
}

/* Scroll is read at most once per frame, and only while scrolling — no
   permanent rAF loop, and no layout read inside the listener itself. */
export function initHeader(doc = document) {
  const header = doc.querySelector('[data-header]');
  if (!header) return;

  let queued = false;
  const update = () => {
    queued = false;
    header.classList.toggle(SCROLLED_CLASS, window.scrollY > HEADER_SCROLLED_AT);
  };

  window.addEventListener('scroll', () => {
    if (queued) return;
    queued = true;
    requestAnimationFrame(update);
  }, { passive: true });

  update();
}

/* Mobile overlay menu. Focus is trapped inside the header while open —
   the wordmark and the toggle sit above the overlay, so they are part of
   the cycle and the close control is always reachable. */
export function initMenu(doc = document) {
  const header = doc.querySelector('[data-header]');
  const toggle = doc.querySelector('[data-menu-toggle]');
  const menu = doc.querySelector('[data-menu]');
  if (!header || !toggle || !menu) return;

  const isOpen = () => toggle.getAttribute('aria-expanded') === 'true';

  const setOpen = (open) => {
    toggle.setAttribute('aria-expanded', String(open));
    menu.classList.toggle(OPEN_CLASS, open);
    doc.body.style.overflow = open ? 'hidden' : '';
  };

  toggle.addEventListener('click', () => {
    const next = !isOpen();
    setOpen(next);
    if (!next) { toggle.focus(); return; }
    const first = [...menu.querySelectorAll(FOCUSABLE)].find(visible);
    if (first) first.focus();
  });

  // Following a link closes the overlay; the destination takes focus itself.
  menu.addEventListener('click', (event) => {
    if (isOpen() && event.target.closest('a')) setOpen(false);
  });

  doc.addEventListener('keydown', (event) => {
    if (!isOpen()) return;

    if (event.key === 'Escape') {
      setOpen(false);
      toggle.focus();
      return;
    }
    if (event.key !== 'Tab') return;

    const items = [...header.querySelectorAll(FOCUSABLE)].filter(visible);
    if (!items.length) return;

    const first = items[0];
    const last = items[items.length - 1];
    if (event.shiftKey && doc.activeElement === first) {
      event.preventDefault();
      last.focus();
    } else if (!event.shiftKey && doc.activeElement === last) {
      event.preventDefault();
      first.focus();
    }
  });

  // Crossing into the desktop tier closes it, so the body scroll lock can
  // never survive into a layout that has no way to release it.
  const desktop = window.matchMedia(DESKTOP_NAV);
  desktop.addEventListener('change', () => { if (desktop.matches && isOpen()) setOpen(false); });
}

/* The only JS this component has: one dataLayer push. No auto-open bubble,
   no greeting popup, no delayed attention animation. */
export function initWhatsApp(doc = document) {
  const link = doc.querySelector('[data-wa]');
  if (!link) return;
  link.addEventListener('click', () => {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: 'whatsapp_click', link_url: link.href });
  });
}

initYear();
initHeader();
initMenu();
initWhatsApp();
