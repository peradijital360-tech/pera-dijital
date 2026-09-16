<?php
/* Shared site header. Single copy — this is the file that replaced six
   hand-maintained duplicates. $page['nav'] marks the current item. */

require_once __DIR__ . '/config.php';
$nav = $page['nav'] ?? '';
$built = array_values(array_filter(SERVICES, static function (array $s): bool { return $s['built']; }));
?>
<header class="site-header" data-header>
  <div class="site-header__inner">
    <a class="wordmark" href="<?= e($page['home']) ?>" aria-label="Pera Dijital, <?= $nav === 'home' ? 'başa dön' : 'ana sayfa' ?>">
      <svg class="wordmark__logo" width="187" height="36" viewBox="0 0 1175 226.6" aria-hidden="true" focusable="false"><use href="<?= u('assets/icons/sprite.svg') ?>#logo-pera-dijital"></use></svg>
    </a>

    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-menu" data-menu-toggle>
      <svg class="menu-toggle__icon" width="24" height="24" aria-hidden="true" focusable="false"><use href="<?= u('assets/icons/sprite.svg') ?>#icon-menu"></use></svg>
      <span class="menu-toggle__label">Menü</span>
    </button>

    <nav class="site-nav" id="site-menu" aria-label="Ana menü" data-menu>
      <ul class="site-nav__list" role="list">
        <li><a class="site-nav__link" href="<?= u('#capabilities') ?>">Ekibimiz</a></li>
        <li><a class="site-nav__link" href="<?= u('#process') ?>">Sürecimiz</a></li>
        <!-- Çözümlerimiz mega menu. Replaces the plain dropdown <li> in header.php.
             The panel stays inside [data-menu-item]: nav.js measures focusout and
             outside clicks against this element. Rows come from SERVICES; the
             index is the row position, never typed. -->
        <li class="site-nav__item site-nav__item--has-menu site-nav__item--mega" data-menu-item>
          <button class="site-nav__link site-nav__toggle" type="button" aria-expanded="false" aria-controls="solutions-menu" data-submenu-toggle>Çözümlerimiz<svg class="site-nav__chevron" width="15" height="15" aria-hidden="true" focusable="false"><use href="<?= u('assets/icons/sprite.svg') ?>#icon-chevron"></use></svg></button>
          <div class="site-nav__panel" id="solutions-menu">
            <div class="mega__inner">
              <ul class="mega__list" role="list">
<?php foreach ($built as $i => $service): ?>
                <li class="mega__row<?= $nav === 'svc:' . $service['slug'] ? ' mega__row--current' : '' ?>">
                  <span class="mega__index" aria-hidden="true"><?= sprintf('%02d', $i + 1) ?></span>
                  <a class="mega__link" href="<?= e(service_url($service)) ?>" aria-describedby="mega-desc-<?= e($service['slug']) ?>"<?= $nav === 'svc:' . $service['slug'] ? ' aria-current="page"' : '' ?>><?= e($service['label']) ?></a>
                  <span class="mega__desc" id="mega-desc-<?= e($service['slug']) ?>"><?= e($service['desc']) ?></span>
                </li>
<?php endforeach; ?>
              </ul>
              <!-- Help card, not a pitch: for the visitor who opened the menu without
                   knowing which service they need. Links to the homepage contact form.
                   Two-line budget, measured at 1024, 1280 and 1440: a heading of
                   37-42 characters and a body of 60-69 stay two lines at all three.
                   Revisit when İşlerimiz goes live (see README). -->
              <div class="mega__promo">
                <p class="mega__eyebrow">Yol gösterelim</p>
                <p class="mega__promo-title">Hangi hizmet size uyar, birlikte bakalım</p>
                <p class="mega__promo-body">Durumunuzu anlatın, kısa bir görüşmede neyin gerektiğini söyleyelim.</p>
                <a class="mega__promo-link" href="<?= u('#contact') ?>">Bize yazın<svg width="18" height="18" aria-hidden="true" focusable="false"><use href="<?= u('assets/icons/sprite.svg') ?>#icon-arrow"></use></svg></a>
              </div>
            </div>
          </div>
        </li>
<?php if (SHOW_WORK): ?>
        <li><a class="site-nav__link" href="<?= u('islerimiz/') ?>"<?= $nav === 'work' ? ' aria-current="page"' : '' ?>>İşlerimiz</a></li>
<?php endif; ?>
        <li><a class="site-nav__link" href="<?= u('referanslarimiz/') ?>"<?= $nav === 'ref' ? ' aria-current="page"' : '' ?>>Referanslarımız</a></li>
        <li><a class="site-nav__link" href="<?= u('hakkimizda/') ?>"<?= $nav === 'about' ? ' aria-current="page"' : '' ?>>Hakkımızda</a></li>
        <li><a class="site-nav__link" href="<?= u('iletisim/') ?>"<?= $nav === 'contact' ? ' aria-current="page"' : '' ?>>İletişim</a></li>
      </ul>
      <a class="btn btn--dark site-nav__cta" href="<?= e($page['cta']) ?>" data-nav-cta>Teklif Alın</a>
    </nav>
  </div>
</header>
