<?php
$page = [
    'title'       => "Hakkımızda — Pera Dijital",
    'description' => "Pera Dijital, 2017’den beri İstanbul Bahçeşehir’de markalar için tasarım, yazılım ve dijital pazarlama çalışmaları yürütüyor.",
    'canonical'   => '/hakkimizda/',
    'nav'         => 'about',
    'css'         => ['page.css'],
    'js'          => [],
    'og_type'     => 'website',
    'home'        => '/',
    'cta'         => '/#contact',
    'body_class'  => "page-inner",
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main">

  <section class="band band--intro" aria-labelledby="about-title">
    <div class="band__inner">

      <div class="intro--centered">
      <nav class="breadcrumb" aria-label="Sayfa yolu">
        <ol class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">Pera Dijital</a><svg class="breadcrumb__sep" width="14" height="14" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></li>
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Hakkımızda</span></li>
        </ol>
      </nav>

      <h1 class="section-title" id="about-title">Hakkımızda</h1>
      <p class="intro__lede">Pera Dijital, 2017’den beri İstanbul Bahçeşehir’de markalar için tasarım, yazılım ve dijital pazarlama çalışmaları yürütüyor. Her projede önce markanın nasıl göründüğünü, dijitalde nasıl bir deneyim sunduğunu ve doğru insanlara nasıl ulaşacağını birlikte ele alıyoruz.</p>
      </div>

      <div class="split__media about__photo">
        <img src="/assets/img/about/hakkimizda.webp" alt="Taş bir kaide üzerinde duran, mor ışıkla aydınlanan iç içe geçmiş cam halka heykeli; arkada grafik ve arayüz panellerini andıran saydam levhalar" width="1672" height="941" fetchpriority="high" decoding="async">
      </div>

      <div class="prose prose--centered">
        <p>Bize gelen markaların çoğuyla ilk konuşmamız tasarım üzerine oluyor. Konuşmanın bir yerinde ise benzer bir cümle duyuyoruz: “Daha önce ajanslarla çalıştık, reklam verdik ama beklediğimiz dönüşü alamadık.” Böyle durumlarda reklam hesabıyla birlikte reklamın yönlendirdiği sayfaya da bakıyoruz. Yavaş açılan, ürünü yeterince anlatmayan veya ziyaretçiye bir sonraki adımı göstermeyen bir sayfa, reklamın etkisini sınırlayabiliyor.</p>
        <p>Bu yüzden işe dijital deneyimin temelinden başlıyoruz. Web sitelerini markanın ihtiyaçlarına göre tasarlıyor, projeye özel kodla geliştiriyoruz. Sayfa yapısından kullanım kolaylığına, hızdan içerik akışına kadar her ayrıntıyı birlikte düşünüyoruz. Amacımız, markanın kimliğini yansıtan ve ziyaretçinin karar vermesini kolaylaştıran bir site oluşturmak. Reklam çalışmalarını da bu temelin üzerine kuruyoruz.</p>
        <p>Tasarım, yazılım ve reklam aynı ekipten çıkıyor. Marka kimliği, web sitesi, e-ticaret altyapısı, Google ve Meta reklamları, SEO ve GEO çalışmalarını birbiriyle bağlantılı yürütüyoruz. Böylece markanın hedefleri ekipler arasında aktarılırken kaybolmuyor; tasarım kararları teknik ihtiyaçlarla, reklam çalışmaları da sitenin sunduğu deneyimle birlikte değerlendiriliyor.</p>
        <p>Bizim için iyi bir iş birliği, ortak bir vizyonla başlıyor. Markanızın bugün nerede olduğunu, nereye ulaşmak istediğini ve nasıl bir iz bırakmayı hedeflediğini anlamak istiyoruz. Bu yönü birlikte netleştiriyor; tasarımı, yazılımı ve pazarlamayı aynı hedefe hizmet edecek şekilde geliştiriyoruz. Siz markanızın geleceğini anlatın, biz o vizyonu hayata geçirmek için çalışalım.</p>
      </div>

    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "@id": "https://www.peradijital.com.tr/hakkimizda/",
  "url": "https://www.peradijital.com.tr/hakkimizda/",
  "name": "Hakkımızda — Pera Dijital",
  "inLanguage": "tr-TR",
  "isPartOf": { "@id": "https://www.peradijital.com.tr/#website" },
  "about": { "@id": "https://www.peradijital.com.tr/#organization" }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Pera Dijital", "item": "https://www.peradijital.com.tr/" },
    { "@type": "ListItem", "position": 2, "name": "Hakkımızda", "item": "https://www.peradijital.com.tr/hakkimizda/" }
  ]
}
</script>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
