<?php
$page = [
    'title' => 'Dijital Pazarlama ve Web Tasarım Hizmetleri | Pera Dijital',
    'description' => 'E-ticaret için aylık Meta reklam yönetimi, kurumsal web tasarım, Shopify kurulumu, logo ve kurumsal kimlik. İstanbul Pera Dijital’in hizmetlerini inceleyin.',
    'canonical' => '/cozumlerimiz/',
    'nav' => 'sol',
    'css' => ['page.css', 'services.css'],
    'js' => [],
    'body_class' => 'page-inner',
    'cta' => '/iletisim/#form',
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
$items = [];
foreach ($built as $index => $entry) {
    $items[] = ['@type' => 'ListItem', 'position' => $index + 1, 'name' => $entry['label'], 'url' => SITE_URL . service_url($entry)];
}
$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'CollectionPage',
    '@id' => SITE_URL . '/cozumlerimiz/#webpage',
    'url' => SITE_URL . '/cozumlerimiz/',
    'name' => $page['title'],
    'inLanguage' => 'tr-TR',
    'isPartOf' => ['@id' => SITE_URL . '/#website'],
    'mainEntity' => ['@type' => 'ItemList', 'itemListElement' => $items],
];
?>
<main id="main">
  <section class="band band--intro" aria-labelledby="overview-title">
    <div class="band__inner">
      <nav class="breadcrumb" aria-label="Sayfa yolu"><ol class="breadcrumb__list"><li class="breadcrumb__item"><a class="breadcrumb__link" href="/">Pera Dijital</a><span aria-hidden="true"> / </span></li><li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Çözümlerimiz</span></li></ol></nav>
      <p class="eyebrow">İstanbul merkezli dijital pazarlama ajansı</p>
      <h1 class="section-title" id="overview-title">Reklam, web tasarım ve e-ticaret hizmetleri</h1>
      <p class="intro__lede">E-ticaret markalarına aylık Meta reklam yönetimi; işletmelere kurumsal web tasarım, Shopify mağaza kurulumu ve marka tasarımı sunuyoruz. İhtiyacınıza uygun hizmeti seçin, kapsamını birlikte belirleyelim.</p>
      <div class="services-overview">
        <ul class="service-paths__grid" role="list">
<?php foreach ($built as $entry): ?>
          <li class="card service-path">
            <h2 class="card__title"><?= e($entry['label']) ?></h2>
            <p class="card__note"><?= e($entry['desc']) ?></p>
            <a class="service-path__link" href="<?= e(service_url($entry)) ?>"><?= e($entry['label']) ?> hizmetini inceleyin</a>
          </li>
<?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>
  <section class="band band--dark" aria-labelledby="choose-title">
    <div class="band__inner">
      <h2 class="section-title" id="choose-title">Hangi hizmetle başlamalısınız?</h2>
      <p class="section-lede">Mağazanız hazırsa reklam yönetimini, yeni satışa başlayacaksanız e-ticaret kurulumunu konuşalım. Üretici veya hizmet işletmesi olarak ürünlerinizi tanıtıp teklif toplamak istiyorsanız kurumsal web tasarım üzerinden ilerleyelim.</p>
      <div class="service-hero__actions"><a class="btn btn--accent" href="/iletisim/#form">İhtiyacınızı Anlatın</a><a class="btn btn--accent" href="/referanslarimiz/">Referanslarımızı Görün</a></div>
    </div>
  </section>
</main>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?></script>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php'; ?>
