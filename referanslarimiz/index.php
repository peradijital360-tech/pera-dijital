<?php
$page = [
    'title'       => "Referanslarımız — Pera Dijital",
    'description' => "E-ticaretten otomotive sekiz sektörde markalara performans reklam yönetimi, SEO ve analitik hizmeti veriyoruz. Birlikte çalıştığımız markalar ve sektörler.",
    'canonical'   => '/referanslarimiz/',
    'nav'         => 'ref',
    'css'         => ['page.css', 'references.css'],
    'js'          => ['sector-filter.js'],
    'og_type'     => 'website',
    'home'        => '/',
    'cta'         => '/#contact',
    'body_class'  => "page-inner",
    'og_desc'     => "E-ticaretten otomotive sekiz sektörde markalara performans reklam yönetimi, SEO ve analitik hizmeti veriyoruz.",
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/clients.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main">

  <!-- ============================================================
       INTRO — breadcrumb, h1, the extractable paragraph
       ============================================================ -->
  <!-- Breadcrumb only: the h1 was removed at the client's request and the
       grid heading below is now the page h1. -->
  <section class="band band--intro">
    <div class="band__inner">

      <nav class="breadcrumb" aria-label="Sayfa yolu">
        <ol class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">Pera Dijital</a><svg class="breadcrumb__sep" width="14" height="14" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></li>
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Referanslarımız</span></li>
        </ol>
      </nav>

    </div>
  </section>

  <!-- ============================================================
       LOGO GRID — filter is JS-only; the grid is always complete
       ============================================================ -->
  <section class="band band--grid" id="markalar" aria-labelledby="markalar-title">
    <div class="band__inner">
      <h1 class="section-title" id="markalar-title">Birlikte büyüdüğümüz markalar</h1>

<?php
        /* Both the filter row and the grid come from CLIENTS in
           assets/inc/clients.php, so they cannot drift apart. */
        $sectors    = client_filter_sectors();
        $showFilter = SHOW_SECTOR_FILTER && client_filter_is_useful($sectors);
      ?>
<?php if ($showFilter): ?>
      <!-- Revealed by CSS keyed to the .js class, which the inline head
           script sets before first paint, so this costs no layout shift.
           With JS off it stays display:none and the grid below is untouched
           and complete for crawlers.

           Only sectors with SECTOR_MIN brands get a button, and the whole
           row is omitted while fewer than two sectors qualify. Both rules
           are computed from the data in clients.php. -->
      <div class="filter" role="group" aria-label="Sektöre göre filtrele" data-filter-group>
          <button class="filter__btn" type="button" data-filter="tumu" aria-pressed="true">Tümü</button>
<?php foreach ($sectors as $slug => $label): ?>
          <button class="filter__btn" type="button" data-filter="<?= e($slug) ?>" aria-pressed="false"><?= e($label) ?></button>
<?php endforeach; ?>
      </div>
      <p class="filter__status u-visually-hidden" role="status" aria-live="polite" data-filter-status></p>
<?php endif; ?>

      <!-- Every cell is always in the document. Only JS may hide one, and
           only in response to a click on the filter above. -->
      <ul class="client-grid" role="list" data-client-grid>
<?php foreach (CLIENTS as $client): ?>
        <li class="client-cell" data-sector="<?= e($client['sector']) ?>" style="--logo-h:<?= e($client['logo_h']) ?>">
          <div class="client-cell__inner">
            <img class="client-cell__logo" src="<?= u('assets/img/clients/' . $client['file']) ?>" alt="<?= e($client['name']) ?>" width="<?= (int) $client['width'] ?>" height="<?= (int) $client['height'] ?>" loading="lazy" decoding="async">
          </div>
        </li>
<?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- ============================================================
       TESTIMONIAL — one only
       ============================================================ -->
  <!-- ============================================================
       CTA — reuses the inverted band; no second form on this page
       ============================================================ -->
  <section class="band band--dark" aria-labelledby="cta-title">
    <div class="band__inner centered-head">
      <p class="eyebrow eyebrow--invert">İletişim</p>
      <h2 class="section-title section-title--centre" id="cta-title">Sıradaki marka sizinki olsun</h2>
      <p class="section-lede">Şu an neler yaptığınızı anlatın; genellikle iki iş günü içinde sabit bir teklifle dönelim.</p>
      <p class="cta-band__action"><a class="btn btn--accent btn--lg" href="/#contact">Teklif Alın</a></p>
    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://www.peradijital.com.tr/referanslarimiz/",
  "url": "https://www.peradijital.com.tr/referanslarimiz/",
  "name": "Referanslarımız — Pera Dijital",
  "inLanguage": "tr-TR",
  "description": "E-ticaretten otomotive sekiz sektörde markalara performans reklam yönetimi, SEO ve analitik hizmeti veriyoruz.",
  "isPartOf": { "@type": "WebSite", "url": "https://www.peradijital.com.tr/", "name": "Pera Dijital" }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "inLanguage": "tr-TR",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Pera Dijital", "item": "https://www.peradijital.com.tr/" },
    { "@type": "ListItem", "position": 2, "name": "Referanslarımız", "item": "https://www.peradijital.com.tr/referanslarimiz/" }
  ]
}
</script>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
