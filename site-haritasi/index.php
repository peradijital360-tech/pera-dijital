<?php
$page = [
    'title'       => "Site Haritası — Pera Dijital",
    'description' => "Pera Dijital web sitesindeki tüm sayfalar tek listede: hizmetlerimiz, kurumsal sayfalar ve iletişim bilgileri.",
    'canonical'   => '/site-haritasi/',
    'nav'         => '',
    'css'         => ['page.css'],
    'js'          => [],
    'og_type'     => 'website',
    'home'        => '/',
    'cta'         => '/iletisim/#form',
    'body_class'  => "page-inner",
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main">

  <section class="band band--intro" aria-labelledby="sitemap-title">
    <div class="band__inner">

      <div class="intro--centered">
      <nav class="breadcrumb" aria-label="Sayfa yolu">
        <ol class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">Pera Dijital</a><svg class="breadcrumb__sep" width="14" height="14" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></li>
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Site Haritası</span></li>
        </ol>
      </nav>

      <h1 class="section-title" id="sitemap-title">Site Haritası</h1>
      <p class="intro__lede">Sitedeki bütün sayfalar, konularına göre gruplanmış olarak burada.</p>
      </div>

      <!-- Only pages that exist. The service list is read from SERVICES, so a
           service page appears here the moment it is marked built — nothing
           to remember. Pages still to come (blog, sectors, legal) are left
           out entirely rather than listed as dead ends. -->
      <div class="sitemap">

        <nav class="sitemap__group" aria-labelledby="sm-genel">
          <h2 class="sitemap__title" id="sm-genel">Genel</h2>
          <ul class="sitemap__list" role="list">
            <li><a href="<?= u('') ?>">Ana sayfa</a></li>
            <li><a href="<?= u('iletisim/') ?>">İletişim</a></li>
          </ul>
        </nav>

        <nav class="sitemap__group" aria-labelledby="sm-hizmetler">
          <h2 class="sitemap__title" id="sm-hizmetler">Hizmetler</h2>
          <ul class="sitemap__list" role="list">
            <li><a href="<?= u('cozumlerimiz/') ?>">Tüm çözümlerimiz</a></li>
<?php foreach (SERVICES as $service): ?>
<?php if ($service['built']): ?>
            <li><a href="<?= e(service_url($service)) ?>"><?= e($service['label']) ?></a></li>
<?php endif; ?>
<?php endforeach; ?>
          </ul>
        </nav>

        <nav class="sitemap__group" aria-labelledby="sm-kurumsal">
          <h2 class="sitemap__title" id="sm-kurumsal">Kurumsal</h2>
          <ul class="sitemap__list" role="list">
            <li><a href="<?= u('hakkimizda/') ?>">Hakkımızda</a></li>
            <li><a href="<?= u('referanslarimiz/') ?>">Referanslarımız</a></li>
<?php if (SHOW_WORK): ?>
            <li><a href="<?= u('islerimiz/') ?>">İşlerimiz</a></li>
<?php endif; ?>
          </ul>
        </nav>

      </div>

    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://www.peradijital.com.tr/site-haritasi/",
  "url": "https://www.peradijital.com.tr/site-haritasi/",
  "name": "Site Haritası — Pera Dijital",
  "inLanguage": "tr-TR",
  "isPartOf": { "@id": "https://www.peradijital.com.tr/#website" }
}
</script>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
