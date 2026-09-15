/* Solutions dropdown. aria-expanded on the toggle is the only state; CSS
   reads it. Hover is handled in CSS on pointer devices and deliberately not
   mirrored here, so the attribute always reflects a deliberate open.
   This is a menu, not a modal: focus is never trapped. */

const ITEM = '[data-menu-item]';
const TOGGLE = '[data-submenu-toggle]';
const EXPANDED = 'aria-expanded';

function isOpen(toggle) {
  return toggle.getAttribute(EXPANDED) === 'true';
}

function setOpen(toggle, open) {
  toggle.setAttribute(EXPANDED, open ? 'true' : 'false');
}

export function initNavDropdown(doc = document) {
  const items = [...doc.querySelectorAll(ITEM)];
  if (!items.length) return;

  const toggles = items
    .map((item) => item.querySelector(TOGGLE))
    .filter(Boolean);

  const closeAll = (except) => {
    toggles.forEach((t) => { if (t !== except) setOpen(t, false); });
  };

  items.forEach((item) => {
    const toggle = item.querySelector(TOGGLE);
    if (!toggle) return;

    toggle.addEventListener('click', () => {
      const next = !isOpen(toggle);
      closeAll(toggle);
      setOpen(toggle, next);
    });

    // Tabbing out of the item in either direction closes it. relatedTarget is
    // null when focus leaves the document entirely, which also counts.
    item.addEventListener('focusout', (event) => {
      if (!item.contains(event.relatedTarget)) setOpen(toggle, false);
    });
  });

  doc.addEventListener('click', (event) => {
    if (!event.target.closest(ITEM)) closeAll();
  });

  doc.addEventListener('keydown', (event) => {
    if (event.key !== 'Escape') return;
    const open = toggles.find(isOpen);
    if (!open) return;
    setOpen(open, false);
    open.focus();
  });
}

initNavDropdown();
