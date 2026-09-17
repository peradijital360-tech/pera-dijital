/* Scroll spy for the service page section nav. One IntersectionObserver,
   no scroll listeners, no layout reads, no frame callbacks — so nothing
   here registers with the shared rAF loop.
   Self-initialises for now; when main.js arrives in Phase 8 it becomes the
   page-level owner and this module keeps only the export. */

const ACTIVE_CLASS = 'is-active';

/* Same breakpoint as page.css, where the bar becomes a horizontal scroller.
   Above it the links all fit and the bar never moves. */
const SCROLLING_BAR = '(max-width: 59.99rem)';

/* A band counts as current while it crosses the slice of the viewport
   between 40% from the top and 55% from the bottom. */
const OBSERVER_MARGIN = '-40% 0px -55% 0px';

export function initSectionNav(doc = document) {
  const nav = doc.querySelector('[data-section-nav]');
  if (!nav || !('IntersectionObserver' in window)) return;

  const links = new Map();
  nav.querySelectorAll('a[data-spy]').forEach((link) => {
    links.set(link.hash.slice(1), link);
  });

  const sections = [...links.keys()]
    .map((id) => doc.getElementById(id))
    .filter(Boolean);

  const bar = nav.querySelector('.section-nav__inner');
  const scrolling = window.matchMedia(SCROLLING_BAR);
  const calm = window.matchMedia('(prefers-reduced-motion: reduce)');
  let current = null;

  /* On a phone the bar is wider than the screen, so the tab that just became
     active can sit off to the right, and the tabs after it are never seen.
     Bring it to the middle of the bar. This scrolls the bar itself and
     nothing else: scrollIntoView would also nudge the page, and on a tap
     that would cut short the page's own smooth scroll to the section.
     Layout is read here only, once per change of tab, never while scrolling. */
  const reveal = (link) => {
    if (!bar || !scrolling.matches || bar.scrollWidth <= bar.clientWidth) return;
    const barBox = bar.getBoundingClientRect();
    const linkBox = link.getBoundingClientRect();
    const left = bar.scrollLeft + (linkBox.left - barBox.left) - (barBox.width - linkBox.width) / 2;
    bar.scrollTo({ left, behavior: calm.matches ? 'auto' : 'smooth' });
  };

  const setActive = (id) => {
    links.forEach((link, key) => {
      link.classList.toggle(ACTIVE_CLASS, key === id);
      if (key === id) link.setAttribute('aria-current', 'true');
      else link.removeAttribute('aria-current');
    });
    /* Only when the tab actually changes, so a visitor swiping the bar by
       hand is not pulled back while the same section stays in view. */
    if (id !== current && links.has(id)) reveal(links.get(id));
    current = id;
  };

  /* A tap answers at once, before the page has scrolled far enough for the
     spy to notice. */
  nav.addEventListener('click', (event) => {
    const link = event.target.closest('a[data-spy]');
    if (link) reveal(link);
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) setActive(entry.target.id);
    });
  }, { rootMargin: OBSERVER_MARGIN });

  sections.forEach((section) => observer.observe(section));
}

initSectionNav();
