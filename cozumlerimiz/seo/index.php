<?php
$page = [
    'title'       => "Arama Motoru Optimizasyonu (SEO) — Pera Dijital",
    'description' => "Teknik SEO denetimi, site hızı, bilgi mimarisi ve iç linkleme, anahtar kelime ve içerik stratejisi, on-page optimizasyon, yapılandırılmış veri, ölçümleme ve raporlama.",
    'canonical'   => '/cozumlerimiz/seo/',
    'nav'         => 'svc:seo',
    'css'         => ['page.css'],
    'js'          => ['section-nav.js', 'form.js'],
    'og_type'     => 'article',
    'home'        => '/',
    'cta'         => '#iletisim',
    'body_class'  => "page-service",
    'og_desc'     => "Teknik denetim, site hızı, içerik stratejisi ve ölçümleme. Sıralama garantisi vermeden, yapılan işi raporlayarak.",
    'tw_desc'     => "Teknik SEO denetimi, site hızı, içerik stratejisi, ölçümleme ve raporlama.",
];

/* Summary panels, one per text band, keyed by the band's id. Rendered by
   assets/inc/summary.php. Facts only from this page's own copy; anything
   the page does not state is a REPLACE marker. */
$summaries = [
    'nedir' => [
        'label'  => 'Hizmet özeti',
        'blocks' => [
            ['title' => 'Kapsam', 'items' => [
                'Teknik SEO denetimi',
                'Site hızı',
                'Bilgi mimarisi ve iç linkleme',
                'Anahtar kelime ve içerik stratejisi',
                'On-page optimizasyon',
                'Yapılandırılmış veri',
                'Ölçümleme ve raporlama',
            ]],
            ['title' => 'Kimler için', 'items' => [
                'Yayında bir sitesi olan markalar; yeni site şartı yok',
            ]],
            ['title' => 'Nasıl ölçülür', 'items' => [
                'Seçilen sorgulardaki sıralama',
                'Search Console gösterim ve tıklama verisi',
                'GA4’te organik trafik ve dönüşüm',
            ]],
        ],
    ],
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main">

  <!-- ============================================================
       HERO on the tinted surface, breadcrumb inside
       ============================================================ -->
  <section class="service-hero" aria-labelledby="hero-title">
    <div class="service-hero__inner">

      <nav class="breadcrumb" aria-label="Sayfa yolu">
        <ol class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">Pera Dijital</a><svg class="breadcrumb__sep" width="14" height="14" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></li>
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Arama Motoru Optimizasyonu (SEO)</span></li>
        </ol>
      </nav>
      <!-- ▸ Keep this JSON-LD in step with the breadcrumb above. -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "inLanguage": "tr-TR",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Pera Dijital", "item": "https://www.peradijital.com.tr/" },
          { "@type": "ListItem", "position": 2, "name": "Arama Motoru Optimizasyonu (SEO)", "item": "https://www.peradijital.com.tr/cozumlerimiz/seo/" }
        ]
      }
      </script>

      <div class="service-hero__grid">
        <div class="service-hero__content">
          <h1 class="service-hero__title" id="hero-title">
            <span class="service-hero__title-main">Arama Motoru Optimizasyonu (SEO)</span>
            <span class="service-hero__title-sub">Önce teknik zemin, sonra içerik, sonra otorite</span>
          </h1>
          <p class="service-hero__lede">Sitenin arama sonuçlarındaki konumunu iyileştiriyoruz. Sıralama taahhüdü vermeden: yapılan işi ve ölçümün gösterdiğini raporluyoruz.</p>
          <div class="service-hero__actions">
            <a class="btn btn--dark btn--lg" href="#iletisim">Bize Ulaşın</a>
          </div>
        </div>
        <div class="service-hero__media service-hero__media--seo">
          <!-- SEO in the order the page's own subtitle gives it: crawl and
               index, then the technical ground, then content, then authority,
               measured throughout. Technical SEO is the widest card, at the
               centre, because everything after it depends on it.

               HTML, CSS and inline SVG; no screenshot and no copy of Search
               Console or PageSpeed. NO SCORES OR NUMBERS: vitals are bars
               without values, the site-health card says it is watched, not
               how healthy, and the chart has no axis. Card titles are spans
               and the connectors sit inside the aria-hidden stage, so screen
               readers get the one description on the figure and the H1 stays
               the hero's only heading.

               Layout follows the width of this box (container query in
               page.css): a flowing board when there is room, a vertical
               sequence when there is not. -->
          <figure class="seo" role="img" aria-label="SEO çalışma akışı: arama motoru siteyi tarar ve sayfaları sitemap ve robots kurallarıyla indeksler; teknik SEO site hızını, Core Web Vitals değerlerini, mobil uyumu, canonical ve schema yapısını düzenler; içerik arama niyetine, başlık yapısına ve iç linklemeye göre kurulur; backlink, referans ve anılmalarla otorite oluşur; sonuçlar Search Console ve GA4 üzerinden sıralama ve organik trafik olarak ölçülür.">
            <div class="seo__stage" aria-hidden="true">

              <!-- Connectors, in board units: x across 24 columns, y down
                   one-rem rows. The first one is the crawl and moves. -->
              <svg class="seo__links" viewBox="0 0 24 38" preserveAspectRatio="none" focusable="false">
                <g class="seo__wide">
                  <path class="seo__link seo__link--crawl" d="M12 4.4 H16.9 C17.7 4.4 17.7 5 17.7 5.8 V8"/>
                  <path class="seo__link" d="M20 13 H21.5 C22.3 13 22.3 13.6 22.3 14.4 V19"/>
                  <path class="seo__link" d="M12 23.5 H10"/>
                  <path class="seo__link" d="M1 27.7 V33.5 C1 34.2 1.4 34.5 2 34.5"/>
                </g>
              </svg>
              <!-- The same four connectors for the narrow board, where wrapped
                   tag rows push every card after the first further down. -->
              <svg class="seo__links seo__links--narrow" viewBox="0 0 24 45" preserveAspectRatio="none" focusable="false">
                <path class="seo__link seo__link--crawl" d="M12 4.4 H16.9 C17.7 4.4 17.7 5 17.7 5.8 V11"/>
                <path class="seo__link" d="M20 16 H21.5 C22.3 16 22.3 16.6 22.3 17.4 V22"/>
                <path class="seo__link" d="M12 27 H10"/>
                <path class="seo__link" d="M1 32 V37.2 C1 37.9 1.4 38.2 2 38.2"/>
              </svg>

              <!-- Site health: watched, never scored -->
              <div class="seo-card seo-card--health">
                <span class="seo-card__icon"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M3 12h4l2-5 4 10 2-5h6"/></svg></span>
                <span class="seo-card__title">Site Sağlığı</span>
                <span class="seo-watch"><span class="seo-watch__dot"></span>İzleniyor</span>
              </div>

              <!-- 1 · Crawl and index: a site tree being walked -->
              <div class="seo-card seo-card--crawl">
                <span class="seo-card__head"><span class="seo-card__title">Tarama ve İndeksleme</span></span>
                <svg class="seo-tree" viewBox="0 0 220 56" preserveAspectRatio="xMinYMid meet" focusable="false">
                  <path class="seo-tree__line" d="M26 28 H56 M56 28 V10 H92 M56 28 H92 M56 28 V46 H92 M112 10 H140 V4 H162 M140 10 V16 H162 M112 28 H162 M112 46 H140 V40 H162 M140 46 V52 H162"/>
                  <rect class="seo-tree__root" x="6" y="18" width="20" height="20" rx="4"/>
                  <rect class="seo-tree__page" x="92" y="3" width="20" height="14" rx="3"/>
                  <rect class="seo-tree__page seo-tree__page--on" x="92" y="21" width="20" height="14" rx="3"/>
                  <rect class="seo-tree__page" x="92" y="39" width="20" height="14" rx="3"/>
                  <rect class="seo-tree__leaf" x="162" y="0" width="14" height="8" rx="2"/>
                  <rect class="seo-tree__leaf" x="162" y="12" width="14" height="8" rx="2"/>
                  <rect class="seo-tree__leaf seo-tree__leaf--on" x="162" y="24" width="14" height="8" rx="2"/>
                  <rect class="seo-tree__leaf" x="162" y="36" width="14" height="8" rx="2"/>
                  <rect class="seo-tree__leaf" x="162" y="48" width="14" height="8" rx="2"/>
                </svg>
                <span class="seo-tags"><span class="seo-tag">Crawl</span><span class="seo-tag seo-tag--index"><span class="seo-tag__dot"></span>Index</span><span class="seo-tag">Sitemap</span><span class="seo-tag">Robots</span></span>
              </div>

              <!-- 2 · Technical SEO: the hub. Vitals as bars, no values. -->
              <div class="seo-card seo-card--tech">
                <span class="seo-card__head">
                  <span class="seo-card__icon seo-card__icon--solid"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M8 7l-5 5 5 5M16 7l5 5-5 5M13.5 4l-3 16"/></svg></span>
                  <span class="seo-card__title seo-card__title--lg">Teknik SEO</span>
                </span>
                <span class="seo-vitals">
                  <span class="seo-vital"><span class="seo-vital__name">LCP</span><span class="seo-vital__bar"><span></span></span></span>
                  <span class="seo-vital"><span class="seo-vital__name">INP</span><span class="seo-vital__bar"><span></span></span></span>
                  <span class="seo-vital"><span class="seo-vital__name">CLS</span><span class="seo-vital__bar"><span></span></span></span>
                </span>
                <span class="seo-tags"><span class="seo-tag">Site Hızı</span><span class="seo-tag">Core Web Vitals</span><span class="seo-tag">Mobil Uyumluluk</span><span class="seo-tag">Canonical</span><span class="seo-tag">Schema</span></span>
              </div>

              <!-- 3 · Content: a page's heading outline and a link -->
              <div class="seo-card seo-card--content">
                <span class="seo-card__head"><span class="seo-card__title">İçerik ve Sayfa Yapısı</span></span>
                <span class="seo-outline">
                  <span class="seo-outline__h1"></span>
                  <span class="seo-outline__h2"></span>
                  <span class="seo-outline__p"></span>
                  <span class="seo-outline__h2 seo-outline__h2--short"></span>
                  <span class="seo-outline__p seo-outline__p--link"></span>
                </span>
                <span class="seo-tags"><span class="seo-tag">Search Intent</span><span class="seo-tag">İç Linkleme</span><span class="seo-tag">Başlık Yapısı</span><span class="seo-tag">İçerik Kapsamı</span><span class="seo-tag">On-page SEO</span></span>
              </div>

              <!-- 4 · Authority: other sites pointing at this one -->
              <div class="seo-card seo-card--authority">
                <span class="seo-card__head"><span class="seo-card__title">Otorite</span></span>
                <svg class="seo-refs" viewBox="0 0 160 40" preserveAspectRatio="xMinYMid meet" focusable="false">
                  <path class="seo-refs__line" d="M18 8 C60 8 80 20 118 20 M18 20 H118 M18 32 C60 32 80 20 118 20"/>
                  <circle class="seo-refs__site" cx="12" cy="8" r="6"/>
                  <circle class="seo-refs__site" cx="12" cy="20" r="6"/>
                  <circle class="seo-refs__site" cx="12" cy="32" r="6"/>
                  <rect class="seo-refs__home" x="118" y="8" width="28" height="24" rx="5"/>
                </svg>
                <span class="seo-tags"><span class="seo-tag">Backlink</span><span class="seo-tag">Referans</span><span class="seo-tag">Mention</span></span>
              </div>

              <!-- 5 · Measurement: a trend shape, no axis, no values -->
              <div class="seo-card seo-card--measure">
                <span class="seo-card__head"><span class="seo-card__title">Ölçümleme</span></span>
                <svg class="seo-chart" viewBox="0 0 200 40" preserveAspectRatio="none" focusable="false">
                  <path class="seo-chart__grid" d="M0 13 H200 M0 27 H200"/>
                  <path class="seo-chart__line" d="M2 34 C24 32 34 26 52 27 S80 30 96 22 S126 12 144 15 S178 8 198 4"/>
                </svg>
                <span class="seo-tags"><span class="seo-tag">Search Console</span><span class="seo-tag">GA4</span><span class="seo-tag">Sıralama</span><span class="seo-tag">Organik Trafik</span></span>
              </div>

            </div>
          </figure>
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================
       STICKY SECTION NAV — labels must match the h2 ids below
       ============================================================ -->
  <nav class="section-nav" aria-label="Sayfa içi gezinme" data-section-nav>
    <div class="section-nav__inner">
      <a class="section-nav__link" href="#nedir" data-spy>Nedir?</a>
      <a class="section-nav__link" href="#teknik" data-spy>Teknik SEO</a>
      <a class="section-nav__link" href="#sure" data-spy>Süre</a>
      <a class="section-nav__link" href="#raporlama" data-spy>Raporlama</a>
      <a class="section-nav__link" href="#neden-biz" data-spy>Neden biz?</a>
      <a class="section-nav__link" href="#sss" data-spy>S.S.S.</a>
      <a class="section-nav__link section-nav__link--accent" href="#iletisim">İletişime Geçin</a>
    </div>
  </nav>

  <!-- ============================================================
       BAND A — the definition block. Factual, no adjectives, 40-60 words.
       GEO is referenced once and linked; its framing is NOT repeated here.
       ============================================================ -->
  <section class="band" id="nedir" aria-labelledby="nedir-title">
    <div class="band__inner with-summary">
      <div class="prose">
        <h2 class="section-title" id="nedir-title">SEO hizmeti neleri kapsıyor?</h2>
        <p class="section-lede">Pera Dijital, sitenin arama sonuçlarındaki konumunu iyileştirmek için teknik SEO denetimi, site hızı, bilgi mimarisi ve iç linkleme, anahtar kelime ve içerik stratejisi, on-page optimizasyon, yapılandırılmış veri ile ölçümleme ve raporlama yapar. Çalışma mevcut site üzerinde yürütülür; yeni site şartı yoktur.</p>
        <p>Çalışma üç katman hâlinde ilerliyor. Teknik katman sayfanın taranabilir, indekslenebilir ve hızlı olmasını sağlıyor. İçerik katmanı hangi sorgular için hangi sayfanın var olacağını belirliyor ve o sayfaları üretiyor. Otorite katmanı ise sitenin kendi alanında referans verilebilir hâle gelmesiyle ilgili ve en yavaş ilerleyen kısım burası.</p>
        <p>İç linkleme çoğu zaman atlanıyor ama en ucuz kazanç genellikle burada. Sitede zaten var olan sayfalar birbirine doğru şekilde bağlanmadığında, arama motoru hangi sayfanın hangi konuda asıl sayfa olduğunu anlamıyor ve site kendi içinde rekabet ediyor. Bilgi mimarisi bu yüzden içerik üretiminden önce geliyor.</p>
        <p>Yapılandırılmış veri bu sayfada arama motorunun sayfayı doğru yorumlaması ve zengin sonuç biçimlerine uygun hâle gelmesi için kullanılıyor: ürün, hizmet, SSS ve kurumsal bilgi işaretlemeleri.</p>
        <p>Kapsam dışındaki iki işten biri yapay zeka araçlarının yanıtlarında kaynak olarak anılmak; bu ayrı bir çalışma ve <a href="<?= e(service_url_by_slug('geo-yapay-zeka-gorunurlugu')) ?>">yapay zekada görünürlük sayfasında</a> anlatılıyor. Diğeri sitenin kendisinin kurulması: teknik denetim siteyi yenilemeyi gerektiriyorsa bu iş <a href="<?= e(service_url_by_slug('kurumsal-web-tasarim')) ?>">kurumsal web tasarım hizmetinin</a> konusu.</p>
      </div>
      <?php $summary = $summaries['nedir']; require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/summary.php'; ?>
    </div>
  </section>

  <!-- ============================================================
       BAND B — why technical comes first
       ============================================================ -->
  <section class="band" id="teknik" aria-labelledby="teknik-title">
    <div class="band__inner split">
      <div class="band__aside band__aside--sticky">
        <p class="eyebrow">Sıralama</p>
        <h2 class="section-title" id="teknik-title">Teknik SEO neden önce gelir?</h2>
        <p class="section-lede">Çünkü teknik katman bozuksa üstüne yapılan her çalışmanın etkisi ölçülemez hâle gelir. Dört başlık, bu sırayla ele alınır.</p>
        <a class="btn btn--accent" href="#iletisim">Denetim İsteyin</a>
      </div>
      <ul class="card-grid-2" role="list">
        <li class="card">
          <h3 class="card__title">Tarama ve indeksleme</h3>
          <p class="card__note">Arama motoru sayfayı tarayamıyor veya indeksleyemiyorsa, içerik ne kadar iyi olursa olsun sıralamaya giremez. Denetim buradan başlar: robots kuralları, yönlendirme zincirleri, kopya adresler, canonical hataları.</p>
        </li>
        <li class="card">
          <h3 class="card__title">Site hızı ve kararlılık</h3>
          <p class="card__note">Yavaş açılan ve yüklenirken yerinden oynayan sayfalar hem ziyaretçiyi hem de değerlendirmeyi olumsuz etkiler. Görsel boyutları, önbellekleme ve gereksiz betikler bu aşamada ele alınır.</p>
        </li>
        <li class="card">
          <h3 class="card__title">Sayfa yapısı</h3>
          <p class="card__note">Başlık hiyerarşisi, sayfa başlıkları ve açıklamalar sayfanın ne hakkında olduğunu belirsiz bırakıyorsa, içerik doğru sorgularla eşleşmez. Yapı düzeltilmeden içerik üretmek, zemini olmayan bir binaya kat çıkmaktır.</p>
        </li>
        <li class="card">
          <h3 class="card__title">Ölçümün doğruluğu</h3>
          <p class="card__note">Ölçümleme yanlış kurulmuşsa hangi çalışmanın işe yaradığı bilinemez. Search Console ve GA4 kurulumu, çalışmanın ilk haftasında doğrulanır; sonraki her karar bu veriye dayanır.</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- ============================================================
       BAND C — how long it takes. Answer is a table of variables, not
       a number: the honest answer here is "these are the factors".
       ============================================================ -->
  <section class="band" id="sure" aria-labelledby="sure-title">
    <div class="band__inner">
      <div class="prose">
        <h2 class="section-title" id="sure-title">Ne kadar sürede sonuç alınır?</h2>
        <p class="section-lede">Tek bir süre veremeyiz, çünkü süreyi belirleyen altı değişken var ve bunların hiçbiri her sitede aynı değil. Aşağıdaki tablo, teklif aşamasında sizin sitenizde hangisinin ne durumda olduğunu birlikte doldurduğumuz liste.</p>
        <p>Belirli bir ay sayısı veren teklifler genellikle bu değişkenlere bakmadan veriliyor. Biz bunun yerine tarihli bir iş planı veriyoruz: hangi işin hangi ayda teslim edileceği yazılı. Sıralamanın ne zaman hareket edeceğini değil, işin ne zaman biteceğini taahhüt ediyoruz.</p>
      </div>

      <div class="compare" tabindex="0" role="region" aria-labelledby="sure-tablo">
        <table class="compare__table">
          <caption id="sure-tablo">Süreyi belirleyen değişkenler. Teklif aşamasında her satır sizin siteniz için ayrı ayrı değerlendirilir.</caption>
          <thead>
            <tr>
              <th scope="col">Değişken</th>
              <th scope="col">Süreyi nasıl etkiler</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Sitenin mevcut teknik durumu</th>
              <td>Tarama ve indeksleme sorunu olan bir sitede ilk aylar düzeltmeyle geçer; sorunsuz bir sitede içerik çalışmasına doğrudan başlanır.</td>
            </tr>
            <tr>
              <th scope="row">Rekabetin yoğunluğu</th>
              <td>Az sayıda güçlü sitenin bulunduğu bir alanla, yüzlerce sitenin yıllardır çalıştığı bir alan aynı sürede hareket etmez.</td>
            </tr>
            <tr>
              <th scope="row">Alan adının geçmişi</th>
              <td>Uzun süredir yayında olan ve bağlantı almış bir site, yeni yayına alınmış bir siteye göre daha erken hareket eder.</td>
            </tr>
            <tr>
              <th scope="row">İçerik üretim hızı</th>
              <td>Ayda kaç sayfa yayına alınabildiği doğrudan etkiler. Bu, çoğu zaman ajansın değil içeriği onaylayan tarafın hızıdır.</td>
            </tr>
            <tr>
              <th scope="row">Hedeflenen sorguların türü</th>
              <td>Dar ve niyeti net sorgular daha erken hareket eder; geniş ve rekabetli sorgular uzun sürer.</td>
            </tr>
            <tr>
              <th scope="row">Arama motorunun güncelleme döngüsü</th>
              <td>Yapılan düzeltmenin değerlendirmeye yansıması tarama ve yeniden değerlendirme döngüsüne bağlıdır; bu döngü bizim kontrolümüzde değildir.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ============================================================
       BAND D — reporting (dark, light cards)
       ============================================================ -->
  <section class="band band--dark" id="raporlama" aria-labelledby="raporlama-title">
    <div class="band__inner split split--wide-right">
      <div class="band__aside">
        <p class="eyebrow eyebrow--invert">Raporlama</p>
        <h2 class="section-title" id="raporlama-title">Nasıl raporluyoruz?</h2>
        <p class="section-lede">Altı başlık, her dönem aynı biçimde. Verinin kaynağına kendiniz erişebiliyorsunuz; rapor bizim panelimizden okunan bir özet değil.</p>
      </div>
      <ul class="work-grid" role="list">
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-gauge"></use></svg></span>
            <h3 class="card__title">Aylık teknik kontrol</h3>
            <p class="card__note">Tarama hataları, kırık bağlantılar, hız ölçümleri ve indeksleme durumu her ay yeniden kontrol edilir; değişen ne varsa raporda yer alır.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chart"></use></svg></span>
            <h3 class="card__title">Sıralama takibi</h3>
            <p class="card__note">Hangi sorguların izleneceği çalışmanın başında birlikte seçilir ve her dönem aynı liste üzerinden ölçülür. Araya yeni sorgu girdiğinde karşılaştırma bozulmasın diye eski liste ayrıca korunur.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-data"></use></svg></span>
            <h3 class="card__title">Search Console okuması</h3>
            <p class="card__note">Gösterim, tıklama ve ortalama konum verisi sorgu ve sayfa kırılımında okunur. Hangi sayfanın hangi sorguda hareket ettiği buradan görülür.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-globe"></use></svg></span>
            <h3 class="card__title">Trafik ve dönüşüm</h3>
            <p class="card__note">GA4 üzerinden organik trafiğin hacmi ve sitede ne yaptığı izlenir. Trafik artıp dönüşüm artmıyorsa bu da bir bulgudur ve raporda yazılır.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-copy"></use></svg></span>
            <h3 class="card__title">Yapılan işler listesi</h3>
            <p class="card__note">Dönem içinde hangi sayfaların düzenlendiği, hangi içeriğin yayına alındığı ve hangi teknik düzeltmenin yapıldığı tek tek listelenir.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-calendar"></use></svg></span>
            <h3 class="card__title">Sonraki dönem planı</h3>
            <p class="card__note">Bir sonraki dönemde neyin yapılacağı ve gerekçesi yazılır. Plan, ölçümün gösterdiğine göre değişir; baştan yazılıp sonuna kadar aynı kalmaz.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- ============================================================
       BAND E — why us (centred)
       ============================================================ -->
  <section class="band" id="neden-biz" aria-labelledby="neden-biz-title">
    <div class="band__inner">
      <div class="centered-head">
        <p class="eyebrow">Neden biz?</p>
        <h2 class="section-title section-title--centre" id="neden-biz-title">Bu işi neden bize veriyorlar?</h2>
        <p class="section-lede">En sık duyduğumuz üç gerekçe.</p>
      </div>

      <div class="card pillars">
        <div class="pillars__grid">
          <div class="pillar">
            <h3 class="card__title">Sıralama taahhüdü vermiyoruz</h3>
            <p class="card__note">Taahhüt ettiğimiz şey tarihli iş planı ve raporun doğruluğu. Garanti veren teklifleri karşılaştırırken neye dayandığını sorun.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Hesaplar sizin adınıza</h3>
            <p class="card__note">Search Console ve GA4 sizin adınıza açılıyor, yönetici erişimi sizde kalıyor. Çalışma biterse veri geçmişiniz sizde kalıyor.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Düzeltmeyi de biz yapıyoruz</h3>
            <p class="card__note">Denetim raporu verip uygulamayı size bırakmıyoruz. Teknik düzeltmeler aynı ekipte yazıldığı için rapor rafta kalmıyor.</p>
          </div>
        </div>
      </div>

      <div class="duo">
        <div class="card duo__wide">
          <h3 class="card__title">Kapsama dahil olanlar</h3>
          <p class="tool-row">
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-gauge"></use></svg>Teknik denetim</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-clock"></use></svg>Site hızı</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-layers"></use></svg>Bilgi mimarisi</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-copy"></use></svg>İçerik stratejisi</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-data"></use></svg>Yapılandırılmış veri</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chart"></use></svg>Ölçümleme</span>
          </p>
        </div>
        <div class="card duo__narrow">
          <h3 class="card__title">Yapay zeka tarafı</h3>
          <p class="card__note">Arama sonuçları dışında, yapay zeka yanıtlarında anılmak ayrı bir çalışma.</p>
          <a class="text-link" href="<?= e(service_url_by_slug('geo-yapay-zeka-gorunurlugu')) ?>">GEO sayfasına bakın</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       BAND F — FAQ. The six <details> below and the FAQPage JSON-LD
       under them are one unit: change both or neither.
       ============================================================ -->
  <section class="band" id="sss" aria-labelledby="sss-title">
    <div class="band__inner">
      <div class="centered-head">
        <p class="eyebrow">S.S.S.</p>
        <h2 class="section-title section-title--centre" id="sss-title">Teklif öncesinde en çok sorulanlar</h2>
        <p class="section-lede">Sizinki burada yoksa aşağıdaki formdan sorun, doğrudan yanıtlayalım.</p>
      </div>

      <div class="faq-grid">
        <details class="card faq">
          <summary class="faq__summary">Ne kadar sürede sonuç alınır?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Tek bir sayı veremeyiz; süreyi belirleyen değişkenler yukarıdaki bölümde tablo hâlinde duruyor. Taahhüt ettiğimiz şey sıralama değil, iş planı: hangi işin hangi ayda yapılacağı tarihli olarak yazılıyor ve o takvime uyuluyor. Sıralamanın ne zaman hareket edeceği rekabetin ve sitenin mevcut durumunun işi; iş planının ne zaman teslim edileceği bizim işimiz. İkisini karıştırmayan bir teklif alın.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">SEO çalışmasında garanti veriyor musunuz?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Hayır. Sıralama satın alınabilir bir şey değil ve bu konuda garanti veren teklifler ya belirli bir sıralamayı ölçmeyi imkânsız kılacak kadar niş bir kelimeyi seçiyor ya da hiç ölçülemeyecek bir vaat veriyor. Sıralamayı belirleyen üçüncü bir taraf var, rakipleriniz de aynı anda çalışıyor ve algoritma yılda birkaç kez değişiyor. Garanti edebileceğimiz tek şey yapılan iş ve raporun doğruluğu.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Mevcut sitemde mi çalışıyorsunuz, yoksa yeni site mi gerekiyor?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Varsayılan olarak mevcut sitede çalışıyoruz; SEO çalışması başlatmak için siteyi yenilemek şart değil. Yalnızca teknik denetim, sorunların site yenilenmeden çözülemeyecek kadar yapısal olduğunu gösterirse bunu gerekçesiyle birlikte söylüyoruz: örneğin sayfa yapısı arama motorunun okuyamayacağı şekilde kuruluysa ya da altyapı temel teknik düzeltmelere izin vermiyorsa. Böyle bir durumda yenileme ayrı bir iş olarak konuşuluyor, SEO paketinin içine gizlenmiyor.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">İçeriği kim yazıyor?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">İki şekilde yürüyor. Birincisinde içerik brief&rsquo;ini biz hazırlıyoruz &mdash; hangi soruyu yanıtlayacak, hangi başlıklar olacak, hangi sayfalara bağlanacak &mdash; metni sizin ekibiniz yazıyor. İkincisinde metni de biz yazıyoruz. Ürününüzü en iyi bilen kişi sizin ekibinizdeyse birinci yol daha iyi sonuç veriyor; kimsenin yazacak vakti yoksa ikincisi. Hangisi olduğu teklifte yazıyor, çünkü ikisinin kapsamı ve ücreti farklı.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Backlink çalışması yapıyor musunuz?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Link satın almıyoruz. Satın alınan linkler arama motorunun kurallarına aykırı ve riski siteye ait; ceza gelirse bedelini siz ödersiniz, ajans ödemez. Yaptığımız iş, bağlantının kendiliğinden gelmesini sağlayacak sebepler üretmek: sektör kaynaklarında yer almak, referans verilebilir içerik çıkarmak, dizin ve kurumsal profillerdeki bilgiyi güncel tutmak. Bu daha yavaş ilerliyor ve bunu baştan söylüyoruz.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Raporlamada hangi verilere erişiyoruz?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Search Console ve GA4 hesapları sizin adınıza açılıyor ve yönetici erişimi sizde kalıyor; raporda gördüğünüz her rakamı kendi girip doğrulayabiliyorsunuz. Bizim panelimizden okunan, kaynağına inemediğiniz bir veri yok. Çalışma biterse bu hesaplar sizde kalmaya devam ediyor, veri geçmişiniz bizimle gitmiyor.</p>
        </details>
      </div>

      <!-- ▸ Keep this JSON-LD in step with the six questions above.
             Update both together, always. -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "inLanguage": "tr-TR",
        "mainEntity": [
          { "@type": "Question", "name": "Ne kadar sürede sonuç alınır?", "acceptedAnswer": { "@type": "Answer", "text": "Tek bir sayı veremeyiz; süreyi belirleyen değişkenler yukarıdaki bölümde tablo hâlinde duruyor. Taahhüt ettiğimiz şey sıralama değil, iş planı: hangi işin hangi ayda yapılacağı tarihli olarak yazılıyor ve o takvime uyuluyor. Sıralamanın ne zaman hareket edeceği rekabetin ve sitenin mevcut durumunun işi; iş planının ne zaman teslim edileceği bizim işimiz. İkisini karıştırmayan bir teklif alın." } },
          { "@type": "Question", "name": "SEO çalışmasında garanti veriyor musunuz?", "acceptedAnswer": { "@type": "Answer", "text": "Hayır. Sıralama satın alınabilir bir şey değil ve bu konuda garanti veren teklifler ya belirli bir sıralamayı ölçmeyi imkânsız kılacak kadar niş bir kelimeyi seçiyor ya da hiç ölçülemeyecek bir vaat veriyor. Sıralamayı belirleyen üçüncü bir taraf var, rakipleriniz de aynı anda çalışıyor ve algoritma yılda birkaç kez değişiyor. Garanti edebileceğimiz tek şey yapılan iş ve raporun doğruluğu." } },
          { "@type": "Question", "name": "Mevcut sitemde mi çalışıyorsunuz, yoksa yeni site mi gerekiyor?", "acceptedAnswer": { "@type": "Answer", "text": "Varsayılan olarak mevcut sitede çalışıyoruz; SEO çalışması başlatmak için siteyi yenilemek şart değil. Yalnızca teknik denetim, sorunların site yenilenmeden çözülemeyecek kadar yapısal olduğunu gösterirse bunu gerekçesiyle birlikte söylüyoruz: örneğin sayfa yapısı arama motorunun okuyamayacağı şekilde kuruluysa ya da altyapı temel teknik düzeltmelere izin vermiyorsa. Böyle bir durumda yenileme ayrı bir iş olarak konuşuluyor, SEO paketinin içine gizlenmiyor." } },
          { "@type": "Question", "name": "İçeriği kim yazıyor?", "acceptedAnswer": { "@type": "Answer", "text": "İki şekilde yürüyor. Birincisinde içerik brief’ini biz hazırlıyoruz — hangi soruyu yanıtlayacak, hangi başlıklar olacak, hangi sayfalara bağlanacak — metni sizin ekibiniz yazıyor. İkincisinde metni de biz yazıyoruz. Ürününüzü en iyi bilen kişi sizin ekibinizdeyse birinci yol daha iyi sonuç veriyor; kimsenin yazacak vakti yoksa ikincisi. Hangisi olduğu teklifte yazıyor, çünkü ikisinin kapsamı ve ücreti farklı." } },
          { "@type": "Question", "name": "Backlink çalışması yapıyor musunuz?", "acceptedAnswer": { "@type": "Answer", "text": "Link satın almıyoruz. Satın alınan linkler arama motorunun kurallarına aykırı ve riski siteye ait; ceza gelirse bedelini siz ödersiniz, ajans ödemez. Yaptığımız iş, bağlantının kendiliğinden gelmesini sağlayacak sebepler üretmek: sektör kaynaklarında yer almak, referans verilebilir içerik çıkarmak, dizin ve kurumsal profillerdeki bilgiyi güncel tutmak. Bu daha yavaş ilerliyor ve bunu baştan söylüyoruz." } },
          { "@type": "Question", "name": "Raporlamada hangi verilere erişiyoruz?", "acceptedAnswer": { "@type": "Answer", "text": "Search Console ve GA4 hesapları sizin adınıza açılıyor ve yönetici erişimi sizde kalıyor; raporda gördüğünüz her rakamı kendi girip doğrulayabiliyorsunuz. Bizim panelimizden okunan, kaynağına inemediğiniz bir veri yok. Çalışma biterse bu hesaplar sizde kalmaya devam ediyor, veri geçmişiniz bizimle gitmiyor." } }
        ]
      }
      </script>

      <!-- Service schema. No offers, no priceRange, no ranking claims. -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.peradijital.com.tr/cozumlerimiz/seo/#service",
        "name": "Arama Motoru Optimizasyonu (SEO)",
        "serviceType": "Arama motoru optimizasyonu",
        "description": "Teknik SEO denetimi, site hızı, bilgi mimarisi ve iç linkleme, anahtar kelime ve içerik stratejisi, on-page optimizasyon, yapılandırılmış veri, ölçümleme ve raporlama.",
        "url": "https://www.peradijital.com.tr/cozumlerimiz/seo/",
        "inLanguage": "tr-TR",
        "provider": { "@id": "https://www.peradijital.com.tr/#organization" },
        "areaServed": { "@type": "Country", "name": "Türkiye" },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "SEO kapsamı",
          "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Teknik SEO denetimi" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Site hızı iyileştirmesi" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Bilgi mimarisi ve iç linkleme" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Anahtar kelime ve içerik stratejisi" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Ölçümleme ve raporlama" } }
          ]
        }
      }
      </script>
    </div>
  </section>

  <!-- ============================================================
       BAND G — CONTACT (dark)
       ============================================================ -->
  <section class="band band--dark" id="iletisim" aria-labelledby="iletisim-title">
    <div class="band__inner split split--narrow-left">

      <div class="band__aside">
        <p class="eyebrow eyebrow--invert">İletişim</p>
        <h2 class="section-title" id="iletisim-title">Sitenizi birlikte inceleyelim</h2>
        <div class="contact-blocks">
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-phone"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Doğrudan arayın</h3>
              <p class="contact-block__note">Hafta içi 09:00&ndash;18:00 arası <a href="tel:<?= e(CONTACT_PHONE_HREF) ?>"><?= e(CONTACT_PHONE) ?></a>. Görüşmedeysek aynı gün içinde size döneriz.</p>
            </div>
          </div>
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-gauge"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Teknik ön bakış isteyin</h3>
              <p class="contact-block__note">Site adresini formda paylaşın; tarama, indeksleme ve hız tarafında göze çarpan sorunları yazılı olarak ileteriz.</p>
            </div>
          </div>
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chat"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Sonrasında ne oluyor?</h3>
              <p class="contact-block__note">Bir iş günü içinde sizi arıyoruz. Otomasyon yok, bülten yok ve izniniz olmadan hiçbir şey paylaşılmıyor.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="form-card">
        <h3 class="form__title" id="form-title">Bilgilerinizi gönderin</h3>
        <form class="form form--light" action="/send.php" method="post" novalidate aria-labelledby="form-title" data-form>

          <p class="form__status" role="status" aria-live="polite" data-form-status></p>

          <div class="field">
            <label class="field__label" for="f-name">Ad Soyad <span class="field__required">(zorunlu)</span></label>
            <input class="field__input" id="f-name" name="name" type="text" autocomplete="name" required aria-describedby="f-name-error">
            <p class="field__error" id="f-name-error" data-error-for="f-name"></p>
          </div>

          <div class="field">
            <label class="field__label" for="f-phone">Telefon <span class="field__required">(zorunlu)</span></label>
            <input class="field__input" id="f-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" required aria-describedby="f-phone-error">
            <p class="field__error" id="f-phone-error" data-error-for="f-phone"></p>
          </div>

          <div class="field">
            <label class="field__label" for="f-email">E-posta <span class="field__optional">(opsiyonel)</span></label>
            <input class="field__input" id="f-email" name="email" type="email" autocomplete="email" aria-describedby="f-email-error">
            <p class="field__error" id="f-email-error" data-error-for="f-email"></p>
          </div>

          <fieldset class="tile-options">
            <legend class="tile-options__legend">Nasıl bir çalışma düşünüyorsunuz?</legend>
            <div class="tile-options__grid">
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="teknik-denetim" checked><span>Teknik SEO denetimi</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="surekli-seo"><span>Sürekli SEO çalışması</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="icerik"><span>İçerik stratejisi ve üretimi</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="site-hizi"><span>Site hızı</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="geo-ile"><span>GEO ile birlikte</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="diger"><span>Diğer</span></label>
            </div>
          </fieldset>

          <div class="field">
            <label class="field__label" for="f-message">Eklemek istedikleriniz <span class="field__optional">(opsiyonel)</span></label>
            <textarea class="field__input field__input--textarea" id="f-message" name="message" rows="4" aria-describedby="f-message-error"></textarea>
            <p class="field__error" id="f-message-error" data-error-for="f-message"></p>
          </div>

          <!-- Spam trap. Real people never see it; bots fill everything. -->
          <div class="field field--trap" aria-hidden="true">
            <label class="field__label" for="f-reference">Referans kodu — bu alanı boş bırakın</label>
            <input class="field__input" id="f-reference" name="reference_code" type="text" tabindex="-1" autocomplete="off">
          </div>
          <!-- Written by form.js on first interaction. Empty means JS is off,
               and send.php then skips the timing check rather than rejecting. -->
          <input type="hidden" name="submitted_at" value="" data-timestamp>
          <input type="hidden" name="form_source" value="seo">

          <button class="btn btn--accent form__submit" type="submit">Talebi Gönder</button>

          <p class="form__legal">Gerçek bir adresten yanıt veriyoruz. Otomasyon yok, bülten yok.</p>
        </form>
      </div>

    </div>
  </section>

</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
