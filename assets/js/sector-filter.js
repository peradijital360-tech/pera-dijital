/* Sector filter for the client grid.

   The filter row is revealed by CSS keyed to the .js class (set by the inline
   head script), not by this module, so its appearance costs no layout shift.
   Hiding a logo is something this module can do and nothing else can: with JS
   off the control never renders and every cell stays in the document.

   aria-pressed on the buttons is the single source of truth for state. */

const GROUP  = '[data-filter-group]';
const GRID   = '[data-client-grid]';
const STATUS = '[data-filter-status]';
const ALL    = 'tumu';

function apply(cells, sector) {
  let shown = 0;
  cells.forEach((cell) => {
    const match = sector === ALL || cell.dataset.sector === sector;
    cell.hidden = !match;
    if (match) shown += 1;
  });
  return shown;
}

export function initSectorFilter(doc = document) {
  const group = doc.querySelector(GROUP);
  const grid = doc.querySelector(GRID);
  if (!group || !grid) return;

  const buttons = [...group.querySelectorAll('button[data-filter]')];
  const cells = [...grid.children];
  const status = doc.querySelector(STATUS);
  if (!buttons.length || !cells.length) return;

  group.addEventListener('click', (event) => {
    const button = event.target.closest('button[data-filter]');
    if (!button) return;

    buttons.forEach((b) => b.setAttribute('aria-pressed', String(b === button)));
    const shown = apply(cells, button.dataset.filter);
    if (status) status.textContent = `${shown} marka gösteriliyor.`;
  });
}

initSectorFilter();
