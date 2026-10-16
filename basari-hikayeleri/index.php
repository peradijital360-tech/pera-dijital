<?php
$page = [
  'title' => 'Başarı Hikayeleri | Pera Dijital',
  'description' => 'Pera Dijital müşteri projeleri: reklam danışmanlığı, kreatif strateji ve gerçek raporlarla e-ticaret çalışmalarımızı inceleyin.',
  'canonical' => '/basari-hikayeleri/',
  'nav' => '', 'css' => ['page.css', 'success-stories.css'], 'cta' => '/iletisim/#form',
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main" class="stories">
  <nav class="stories-crumb" aria-label="Sayfa yolu"><a href="/">Pera Dijital</a><span aria-hidden="true">/</span><span aria-current="page">Başarı Hikayeleri</span></nav>
  <header class="stories-intro">
    <p class="stories-eyebrow">Markalarla yaptığımız çalışmalar</p>
    <h1>Başarı hikayeleri.</h1>
    <p>Başlangıçtaki ihtiyaç, üstlendiğimiz çalışmalar ve verilerin gösterdiği sonuçlar. Müşteri projelerimizi yakından inceleyin.</p>
  </header>
  <section class="stories-list" aria-label="Müşteri başarı hikayeleri">
    <article class="story-card" aria-labelledby="ltc-story-title">
      <div class="story-card__visual">
        <div class="story-card__brand"><img src="/assets/img/clients/ltc.webp" alt="LTC Jeans" width="600" height="150"></div>
        <p class="story-card__period">Eylül 2026 · Web siparişleri</p>
        <p class="story-card__amount">1,36 milyon TL<span>üzerinde sipariş tutarı</span></p>
        <p class="story-card__orders"><strong>627</strong> sipariş</p>
        <p class="story-card__source">Kaynak: Faprika</p>
      </div>
      <div class="story-card__body">
        <p class="stories-eyebrow">Giyim e-ticareti</p>
        <h2 id="ltc-story-title">LTC Jeans</h2>
        <p class="story-card__service">Google &amp; Meta reklam danışmanlığı</p>
        <p>Kışlık üst giyim markası LTC Jeans ile iki çalışma dönemini kapsayan iş birliğimiz. Reklam danışmanlığı, kreatif strateji ve mağazanın web sipariş verileri.</p>
        <ul class="story-card__tags" aria-label="Çalışma alanları"><li>Google Ads</li><li>Meta Ads</li><li>Kreatif strateji</li></ul>
        <p class="story-card__note">Sonuçlar sezon ve stok koşullarıyla birlikte ele alınmıştır.</p>
        <a class="btn btn--accent" href="/basari-hikayeleri/ltc-jeans/">Hikayeyi incele <span aria-hidden="true">→</span></a>
      </div>
    </article>
  </section>
  <aside class="stories-contact" aria-labelledby="stories-contact-title"><div><h2 id="stories-contact-title">Sizin markanız için konuşalım.</h2><p>Mağazanızı ve hedeflerinizi paylaşın; çalışma kapsamını birlikte belirleyelim.</p></div><a class="btn btn--dark" href="/iletisim/#form">Tanışalım</a></aside>
</main>
<script type="application/ld+json">
{"@context":"https://schema.org","@graph":[{"@type":"CollectionPage","@id":"https://www.peradijital.com.tr/basari-hikayeleri/","url":"https://www.peradijital.com.tr/basari-hikayeleri/","name":"Başarı Hikayeleri | Pera Dijital","inLanguage":"tr-TR","isPartOf":{"@id":"https://www.peradijital.com.tr/#website"},"mainEntity":{"@type":"ItemList","numberOfItems":1,"itemListElement":[{"@type":"ListItem","position":1,"name":"LTC Jeans: Google ve Meta Reklam Danışmanlığı","url":"https://www.peradijital.com.tr/basari-hikayeleri/ltc-jeans/"}]}},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Pera Dijital","item":"https://www.peradijital.com.tr/"},{"@type":"ListItem","position":2,"name":"Başarı Hikayeleri","item":"https://www.peradijital.com.tr/basari-hikayeleri/"}]}]}
</script>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php'; ?>
