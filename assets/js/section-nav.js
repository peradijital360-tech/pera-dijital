/* Scroll spy for the service page section nav. One IntersectionObserver,
   no scroll listeners, no layout reads, no frame callbacks — so nothing
   here registers with the shared rAF loop.
   Self-initialises for now; when main.js arrives in Phase 8 it becomes the
   page-level owner and this module keeps only the export. */

const ACTIVE_CLASS = 'is-active';

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

  const setActive = (id) => {
    links.forEach((link, key) => {
      link.classList.toggle(ACTIVE_CLASS, key === id);
      if (key === id) link.setAttribute('aria-current', 'true');
      else link.removeAttribute('aria-current');
    });
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) setActive(entry.target.id);
    });
  }, { rootMargin: OBSERVER_MARGIN });

  sections.forEach((section) => observer.observe(section));
}

initSectionNav();
