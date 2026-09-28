<?php
/* Service content is authored in the calling page. No request data is used. */
require_once __DIR__ . '/config.php';
$path = '/cozumlerimiz/' . $serviceContent['slug'] . '/';
$page = [
    'title' => $serviceContent['title'],
    'description' => $serviceContent['description'],
    'canonical' => $path,
    'nav' => 'svc:' . $serviceContent['slug'],
    'css' => ['page.css', 'services.css'],
    'js' => ['section-nav.js'],
    'body_class' => 'page-service',
    'cta' => '#teklif',
];
require __DIR__ . '/head.php';
require __DIR__ . '/header.php';
$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service', '@id' => SITE_URL . $path . '#service',
            'name' => $serviceContent['heading'], 'serviceType' => $serviceContent['heading'],
            'description' => $serviceContent['intro'], 'url' => SITE_URL . $path,
            'provider' => ['@id' => SITE_URL . '/#organization'],
            'areaServed' => ['@type' => 'Country', 'name' => 'Türkiye'],
        ],
        [
            '@type' => 'WebPage', '@id' => SITE_URL . $path . '#webpage',
            'url' => SITE_URL . $path, 'name' => $serviceContent['title'], 'inLanguage' => 'tr-TR',
            'isPartOf' => ['@id' => SITE_URL . '/#website'],
            'mainEntity' => ['@id' => SITE_URL . $path . '#service'],
            'breadcrumb' => ['@id' => SITE_URL . $path . '#breadcrumb'],
        ],
        [
            '@type' => 'BreadcrumbList', '@id' => SITE_URL . $path . '#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => SITE_NAME, 'item' => SITE_URL . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Çözümlerimiz', 'item' => SITE_URL . '/cozumlerimiz/'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => $serviceContent['short_name'], 'item' => SITE_URL . $path],
            ],
        ],
    ],
];
?>
<main id="main">
  <section class="service-hero" aria-labelledby="hero-title">
    <div class="service-hero__inner">
      <nav class="breadcrumb" aria-label="Sayfa yolu">
        <ol class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">Pera Dijital</a><span aria-hidden="true"> / </span></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="/cozumlerimiz/">Çözümlerimiz</a><span aria-hidden="true"> / </span></li>
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page"><?= e($serviceContent['short_name']) ?></span></li>
        </ol>
      </nav>
      <div class="service-hero__grid">
        <div class="service-hero__content">
          <p class="eyebrow"><?= e($serviceContent['eyebrow']) ?></p>
          <h1 class="service-hero__title" id="hero-title"><span class="service-hero__title-main"><?= e($serviceContent['heading']) ?></span></h1>
          <p class="service-hero__lede"><?= e($serviceContent['intro']) ?></p>
          <div class="service-hero__actions">
            <a class="btn btn--dark btn--lg" href="#teklif"><?= e($serviceContent['cta']) ?></a>
            <a class="btn btn--accent" href="#kapsam">Kapsamı İnceleyin</a>
          </div>
        </div>
        <?php $summary = $serviceContent['summary']; require __DIR__ . '/summary.php'; ?>
      </div>
    </div>
  </section>
  <nav class="section-nav" aria-label="Sayfa içi gezinme" data-section-nav>
    <div class="section-nav__inner">
<?php foreach ($serviceContent['sections'] as $section): ?>
      <a class="section-nav__link" href="#<?= e($section['id']) ?>" data-spy><?= e($section['nav']) ?></a>
<?php endforeach; ?>
      <a class="section-nav__link" href="#sss" data-spy>Sık Sorular</a>
      <a class="section-nav__link section-nav__link--accent" href="#teklif">Teklif Alın</a>
    </div>
  </nav>
<?php foreach ($serviceContent['sections'] as $section): ?>
  <section class="band" id="<?= e($section['id']) ?>" aria-labelledby="<?= e($section['id']) ?>-title">
    <div class="band__inner focus-section">
      <h2 class="section-title" id="<?= e($section['id']) ?>-title"><?= e($section['title']) ?></h2>
      <div class="prose focus-section__prose">
<?php foreach ($section['paragraphs'] as $paragraph): ?>
        <p><?= e($paragraph) ?></p>
<?php endforeach; ?>
      </div>
<?php if (!empty($section['cards'])): ?>
      <ul class="card-grid-2 focus-section__cards" role="list">
<?php foreach ($section['cards'] as $card): ?>
        <li class="card"><h3 class="card__title"><?= e($card['title']) ?></h3><p class="card__note"><?= e($card['body']) ?></p></li>
<?php endforeach; ?>
      </ul>
<?php endif; ?>
<?php if (!empty($section['links'])): ?>
      <ul class="focus-links" role="list">
<?php foreach ($section['links'] as $link): ?>
        <li><a href="<?= e($link['href']) ?>"><?= e($link['label']) ?></a></li>
<?php endforeach; ?>
      </ul>
<?php endif; ?>
    </div>
  </section>
<?php endforeach; ?>
  <section class="band" id="sss" aria-labelledby="sss-title">
    <div class="band__inner">
      <h2 class="section-title" id="sss-title">Sık sorulan sorular</h2>
      <div class="faq-grid">
<?php foreach ($serviceContent['faqs'] as $faq): ?>
        <details class="card faq">
          <summary class="faq__summary"><?= e($faq['question']) ?><svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer"><?= e($faq['answer']) ?></p>
        </details>
<?php endforeach; ?>
      </div>
    </div>
  </section>
  <section class="band band--dark" id="teklif" aria-labelledby="teklif-title">
    <div class="band__inner">
      <p class="eyebrow eyebrow--invert">Projenizi konuşalım</p>
      <h2 class="section-title" id="teklif-title"><?= e($serviceContent['contact_title']) ?></h2>
      <p class="section-lede"><?= e($serviceContent['contact_text']) ?></p>
      <div class="service-hero__actions">
        <a class="btn btn--accent btn--lg" href="/iletisim/#form"><?= e($serviceContent['cta']) ?></a>
        <a class="btn btn--accent" href="<?= e('https://wa.me/' . WHATSAPP_NUMBER . '?text=' . rawurlencode($serviceContent['whatsapp'])) ?>" target="_blank" rel="noopener">WhatsApp’tan Yazın</a>
      </div>
      <p class="focus-contact"><a href="tel:<?= e(CONTACT_PHONE_HREF) ?>"><?= e(CONTACT_PHONE) ?></a> · Başakşehir / İstanbul</p>
    </div>
  </section>
</main>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?></script>
<?php require __DIR__ . '/footer.php'; ?>
