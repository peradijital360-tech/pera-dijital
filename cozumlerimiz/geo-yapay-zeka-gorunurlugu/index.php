<?php
$page = [
    'title'       => "Yapay Zekada Görünürlük (GEO) — Pera Dijital",
    'description' => "Markanızın ChatGPT, Perplexity, Google AI Overviews ve Gemini yanıtlarında kaynak olarak anılması için içerik yapısı, yapılandırılmış veri, tarayıcı erişimi ve görünürlük ölçümü.",
    'canonical'   => '/cozumlerimiz/geo-yapay-zeka-gorunurlugu/',
    'nav'         => 'svc:geo-yapay-zeka-gorunurlugu',
    'css'         => ['page.css'],
    'js'          => ['section-nav.js', 'form.js'],
    'og_type'     => 'article',
    'home'        => '/',
    'cta'         => '#iletisim',
    'body_class'  => "page-service",
    'og_desc'     => "Yapay zeka yanıtlarında kaynak olarak anılmak için içerik yapısı, yapılandırılmış veri, tarayıcı erişimi ve ölçüm.",
    'tw_desc'     => "Yapay zeka yanıtlarında görünürlük: içerik yapısı, yapılandırılmış veri ve ölçüm.",
];

/* Summary panels, one per text band, keyed by the band's id. Rendered by
   assets/inc/summary.php. Facts only from this page's own copy; anything
   the page does not state is a REPLACE marker. */
$summaries = [
    'nedir' => [
        'label'  => 'Hizmet özeti',
        'blocks' => [
            ['title' => 'Kapsam', 'items' => [
                'İçeriğin alıntılanabilir hâle getirilmesi',
                'Yapılandırılmış veri',
                'Yapay zeka tarayıcılarına erişim',
                'Üçüncü taraf kaynaklarda marka varlığı',
                'Görünürlük ölçümü ve raporlama',
            ]],
            ['title' => 'Kimler için', 'items' => [
                '[REPLACE — hizmetin uygun olduğu marka ve sektörler]',
            ]],
            ['title' => 'Nasıl ölçülür', 'items' => [
                'Gerçek sorularda yanıtlarda anılma sıklığı ve bağlamı',
                'Başlangıç ölçümüne göre dönemsel eğilim',
            ]],
        ],
    ],
    'olcum' => [
        'label'  => 'Ölçüm özeti',
        'blocks' => [
            ['title' => 'Ne ölçülür', 'items' => [
                'Markanın yanıtta anılıp anılmadığı',
                'Hangi bağlamda anıldığı',
                'Hangi kaynağa atıfla anıldığı',
            ]],
            ['title' => 'Nasıl ölçülür', 'items' => [
                'Gerçek soru listesi, düzenli aralıklarla',
                'Tek ölçüm değil, eğilim okunur',
            ]],
            ['title' => 'Kapsamdaki araçlar', 'items' => [
                'ChatGPT, Perplexity, Google AI Overviews, Gemini',
                '[REPLACE — ölçüm aracı, sıklık ve soru adedi]',
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
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Yapay Zekada Görünürlük (GEO)</span></li>
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
          { "@type": "ListItem", "position": 2, "name": "Yapay Zekada Görünürlük (GEO)", "item": "https://www.peradijital.com.tr/cozumlerimiz/geo-yapay-zeka-gorunurlugu/" }
        ]
      }
      </script>

      <div class="service-hero__content">
        <h1 class="service-hero__title" id="hero-title">
          <span class="service-hero__title-main">Yapay Zekada Görünürlük (GEO)</span>
          <span class="service-hero__title-sub">Yanıtın içinde anılmak, listenin başında olmak değil</span>
        </h1>
        <p class="service-hero__lede">Yapay zeka araçları soruları yanıtlarken belirli kaynakları anıyor. Bu çalışma, markanızın o kaynaklardan biri olma olasılığını artırmak için yapılıyor.</p>
        <div class="service-hero__actions">
          <a class="btn btn--dark btn--lg" href="#iletisim">Bize Ulaşın</a>
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================
       STICKY SECTION NAV — labels must match the h2 ids below
       ============================================================ -->
  <nav class="section-nav" aria-label="Sayfa içi gezinme" data-section-nav>
    <div class="section-nav__inner">
      <a class="section-nav__link" href="#nedir" data-spy>GEO nedir?</a>
      <a class="section-nav__link" href="#seo-farki" data-spy>SEO&rsquo;dan farkı</a>
      <a class="section-nav__link" href="#calismalar" data-spy>Çalışmalar</a>
      <a class="section-nav__link" href="#olcum" data-spy>Ölçüm</a>
      <a class="section-nav__link" href="#neden-biz" data-spy>Neden biz?</a>
      <a class="section-nav__link" href="#sss" data-spy>S.S.S.</a>
      <a class="section-nav__link section-nav__link--accent" href="#iletisim">İletişime Geçin</a>
    </div>
  </nav>

  <!-- ============================================================
       BAND A — the definition block. The most extractable text on the
       page: factual, no adjectives, 40-60 words. It also draws the SEO
       boundary in its own second sentence, on purpose.
       ============================================================ -->
  <section class="band" id="nedir" aria-labelledby="nedir-title">
    <div class="band__inner with-summary">
      <div class="prose">
        <h2 class="section-title" id="nedir-title">GEO nedir?</h2>
        <p class="section-lede">GEO, bir markanın yapay zeka araçlarının ürettiği yanıtların içinde kaynak olarak anılmasını hedefleyen çalışmadır. SEO arama sonuçlarında sıralamayı hedefler; GEO ise yanıtın içinde alıntılanmayı. Altyapı büyük ölçüde ortaktır, amaç ve ölçüm farklıdır. Kapsam içerik yapısı, yapılandırılmış veri, yapay zeka tarayıcılarının erişimi ve üçüncü taraf kaynaklardaki marka varlığıdır.</p>
        <p>Kullanıcı bir soruyu arama motoruna değil doğrudan bir sohbet aracına sorduğunda, önüne on mavi bağlantı değil tek bir yanıt geliyor. O yanıt birkaç kaynağa dayanıyor ve çoğu zaman bu kaynaklar isimleriyle anılıyor. Anılan taraf olmak ile olmamak arasındaki fark, sıralamada birinci ile ikinci olmak arasındaki farktan büyük.</p>
        <p>Bu sayfa SEO&rsquo;nun yerini almıyor ve SEO temellerini burada tekrar anlatmıyoruz. İkisi aynı zemine dayanıyor ama farklı şeyi hedefliyor ve farklı ölçülüyor; ayrıntısı için <a href="<?= e(service_url_by_slug('seo')) ?>">arama motoru optimizasyonu sayfamıza</a> bakın. Aşağıdaki tablo iki çalışmanın nerede ayrıştığını madde madde gösteriyor.</p>
        <p>Alanın genç olduğunu baştan söylemek gerekiyor. Yapay zeka araçlarının kaynak seçme mantığı kamuya açık değil, zaman içinde değişiyor ve araçtan araca farklılık gösteriyor. Bu yüzden burada sayısal vaat vermiyoruz; ne yaptığımızı, neyi ölçtüğümüzü ve ölçümün ne gösterdiğini paylaşıyoruz.</p>
      </div>
      <?php $summary = $summaries['nedir']; require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/summary.php'; ?>
    </div>
  </section>

  <!-- ============================================================
       BAND B — the SEO boundary, as a real table element. This is the
       page's job: drawing the line before the SEO page exists.
       ============================================================ -->
  <section class="band" id="seo-farki" aria-labelledby="seo-farki-title">
    <div class="band__inner">
      <div class="prose">
        <h2 class="section-title" id="seo-farki-title">SEO&rsquo;dan farkı ne?</h2>
        <p class="section-lede">İkisi de aynı teknik zemine dayanır: erişilebilir sayfalar, düzgün içerik yapısı ve yapılandırılmış veri. Ayrıştıkları yer hedef ve ölçüm. SEO sayfayı listede yukarı taşır, GEO içeriği yanıtın içine sokmayı hedefler.</p>
        <p>Pratikte bu, içeriğin farklı biçimlenmesi demek. Sıralama için yazılan bir sayfa uzun ve kapsayıcı olabilir; alıntılanmak için yazılan bir sayfanın ise tek tek blokları kendi başına anlaşılır olmak zorundadır, çünkü model sayfanın tamamını değil bir parçasını alır.</p>
      </div>

      <div class="compare" tabindex="0" role="region" aria-labelledby="seo-geo-tablo">
        <table class="compare__table">
          <caption id="seo-geo-tablo">SEO ve GEO karşılaştırması. Yapay zeka araçlarının davranışı ve ölçüm yöntemleri hızla değişiyor; tablo <strong>[REPLACE &mdash; son güncelleme tarihi]</strong> itibarıyla geçerlidir.</caption>
          <thead>
            <tr>
              <th scope="col">Kriter</th>
              <th scope="col">SEO</th>
              <th scope="col">GEO</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Amaç</th>
              <td>Arama sonuç sayfasında üst sıralarda yer almak.</td>
              <td>Yapay zekanın ürettiği yanıtın içinde kaynak olarak anılmak.</td>
            </tr>
            <tr>
              <th scope="row">Yüzey</th>
              <td>Google ve Bing sonuç sayfaları.</td>
              <td>ChatGPT, Perplexity, Google AI Overviews, Gemini.</td>
            </tr>
            <tr>
              <th scope="row">Ölçüm</th>
              <td>Sıralama, tıklama ve organik trafik; araçları yerleşik.</td>
              <td>Yanıtlarda anılma sıklığı ve bağlamı; standart bir araç henüz yok.</td>
            </tr>
            <tr>
              <th scope="row">Tıklama</th>
              <td>Tıklama beklenir; trafik sitede ölçülür.</td>
              <td>Tıklama olmayabilir; görünürlük yanıtın içinde kalır.</td>
            </tr>
            <tr>
              <th scope="row">Ortak zemin</th>
              <td>Erişilebilir sayfalar, içerik kalitesi, yapılandırılmış veri.</td>
              <td>Aynı zemin; üzerine alıntılanabilir biçimlendirme eklenir.</td>
            </tr>
            <tr>
              <th scope="row">Olgunluk</th>
              <td>Yerleşik alan; yöntemleri ve araçları oturmuş.</td>
              <td>Genç alan; platform davranışları ve ölçüm yöntemleri değişiyor.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="compare__note">İki çalışma birbirinin alternatifi değil. SEO çalışması olan bir sitede GEO sıfırdan başlamaz; mevcut zeminin üzerine alıntılanabilirlik ve ölçüm katmanı eklenir.</p>
    </div>
  </section>

  <!-- ============================================================
       BAND C — what we actually do (dark, light cards)
       ============================================================ -->
  <section class="band band--dark" id="calismalar" aria-labelledby="calismalar-title">
    <div class="band__inner split split--wide-right">
      <div class="band__aside">
        <p class="eyebrow eyebrow--invert">Çalışmalar</p>
        <h2 class="section-title" id="calismalar-title">Hangi çalışmaları yapıyoruz?</h2>
        <p class="section-lede">Altı iş kolu. Hiçbiri modelin kararını garanti etmiyor; hepsi alıntılanmanın önündeki yapısal engelleri kaldırmaya çalışıyor.</p>
      </div>
      <ul class="work-grid" role="list">
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-copy"></use></svg></span>
            <h3 class="card__title">İçeriğin alıntılanabilir hâle getirilmesi</h3>
            <p class="card__note">Tanımlar kendi başına anlaşılır hâle getiriliyor, sorular doğrudan yanıtlanıyor ve karşılaştırmalar tabloya dökülüyor. Bir model, sayfanın tamamını okumadan tek bir bloğu alıntılayabilmeli.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-data"></use></svg></span>
            <h3 class="card__title">Yapılandırılmış veri</h3>
            <p class="card__note">Organization, Service, FAQPage ve Article şemaları sayfanın gerçek içeriğiyle birebir tutarlı şekilde kuruluyor. Şema ile görünen metin ayrıştığında ikisi de güvenilirliğini kaybediyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-globe"></use></svg></span>
            <h3 class="card__title">Yapay zeka tarayıcılarına erişim</h3>
            <p class="card__note">robots.txt ve sunucu kuralları, hangi yapay zeka tarayıcısının siteye erişebildiği açısından gözden geçiriliyor. Erişimi kapalı bir site, alıntılanma ihtimalini baştan kapatıyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-people"></use></svg></span>
            <h3 class="card__title">Üçüncü taraf kaynaklarda marka varlığı</h3>
            <p class="card__note">Modeller yalnızca sizin sitenizi okumuyor. Sektör dizinleri, kurumsal profiller ve bağımsız kaynaklardaki marka bilgisinin güncel ve tutarlı olması sağlanıyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chat"></use></svg></span>
            <h3 class="card__title">Soru listesi ve ölçüm kurulumu</h3>
            <p class="card__note">Markayla ilgili gerçek sorular çıkarılıyor ve bir başlangıç ölçümü alınıyor. Sonraki her ölçüm bu başlangıca göre okunuyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chart"></use></svg></span>
            <h3 class="card__title">Raporlama</h3>
            <p class="card__note">Hangi soruda, hangi araçta, hangi bağlamda anıldığınız dönemsel olarak raporlanıyor. Rapor, yapılan işi ve ölçümün gösterdiğini birlikte veriyor.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- ============================================================
       BAND D — measurement
       ============================================================ -->
  <section class="band" id="olcum" aria-labelledby="olcum-title">
    <div class="band__inner with-summary">
      <div class="prose">
        <h2 class="section-title" id="olcum-title">Sonuç nasıl ölçülür?</h2>
        <p class="section-lede">Markayla ilgili gerçek soruların listesi çıkarılır, bu sorular kapsamdaki araçlara düzenli aralıklarla sorulur ve yanıtlarda markanın anılıp anılmadığı, hangi bağlamda ve hangi kaynağa atıfla anıldığı kaydedilir. Ölçüm bir başlangıç fotoğrafıyla açılır; sonraki her dönem ona göre okunur.</p>
        <p>Bu alanın sıralama takibine denk bir standart aracı henüz yok. Dolayısıyla ölçüm, tek bir panelden okunan bir sayı değil, dönemsel olarak tekrarlanan bir gözlem. Aynı soruya verilen yanıtlar her seferinde birebir aynı gelmiyor; bu yüzden tek bir ölçümden sonuç çıkarmıyor, eğilime bakıyoruz.</p>
        <p>Raporda üç şey bulunuyor: dönem içinde yapılan işler, ölçüm tablosunun önceki dönemle karşılaştırması ve bir sonraki dönemde ne yapılacağı. Ölçümün gösterdiği şey olumsuzsa bu da raporda yazıyor; ölçüm yöntemimizin amacı iyi görünmek değil, karar verebilmek.</p>
        <p>Kullanılan araçlar, ölçüm sıklığı ve takip edilen soru sayısı teklifte yazılı olarak belirlenir: <strong>[REPLACE &mdash; ölçüm aracı, sıklık ve soru adedi]</strong>.</p>
      </div>
      <?php $summary = $summaries['olcum']; require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/summary.php'; ?>
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
        <p class="section-lede">Genç bir alanda çalışırken en çok sorulan şey, neyin bilindiği ve neyin bilinmediği.</p>
      </div>

      <div class="card pillars">
        <div class="pillars__grid">
          <div class="pillar">
            <h3 class="card__title">Bilmediğimizi söylüyoruz</h3>
            <p class="card__note">Modellerin kaynak seçim mantığı kamuya açık değil. Vaat ettiğimiz şey yapılan iş ve ölçüm; alıntılanma değil.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Ölçüm yöntemi yazılı</h3>
            <p class="card__note">Hangi sorular, hangi araçlarda, hangi sıklıkta soruluyor; hepsi teklifte yazıyor. Ölçemediğimiz bir şeyi raporlamıyoruz.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Zemini zaten biz kuruyoruz</h3>
            <p class="card__note">Yapılandırılmış veri ve içerik yapısı, site projelerinde de bizim işimiz. GEO bunun üzerine eklenen katman.</p>
          </div>
        </div>
      </div>

      <div class="duo">
        <div class="card duo__wide">
          <h3 class="card__title">Kapsama dahil olanlar</h3>
          <p class="tool-row">
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-copy"></use></svg>İçerik yapısı</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-data"></use></svg>Yapılandırılmış veri</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-globe"></use></svg>Tarayıcı erişimi</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-people"></use></svg>Üçüncü taraf kaynaklar</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chart"></use></svg>Görünürlük ölçümü</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-gauge"></use></svg>Raporlama</span>
          </p>
        </div>
        <div class="card duo__narrow">
          <h3 class="card__title">Kapsamdaki araçlar</h3>
          <p class="card__note">ChatGPT, Perplexity, Google AI Overviews ve Gemini. Liste sabit değil; teklifte yazılı olarak belirleniyor.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       BAND F — FAQ. The five <details> below and the FAQPage JSON-LD
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
          <p class="faq__answer">Dürüst yanıt: bunu taahhüt edebilecek bir veri setimiz yok. Yapay zeka araçlarının kaynak seçimi, modelin eğitim ve tarama döngüsüne bağlı ve bu döngüler platformdan platforma değişiyor; bir içerik bazı araçlarda günler içinde alıntılanırken bazılarında hiç görünmeyebiliyor. Yaptığımız iş, alıntılanma olasılığını artıran yapısal koşulları kurmak: net tanımlar, yapılandırılmış veri, erişilebilir sayfalar ve üçüncü taraf kaynaklarda tutarlı bilgi. Süre taahhüdü veren bir ajans varsa, ölçemediği bir şeyi taahhüt ediyordur. Gözlemlediğimiz aralık: <strong>[REPLACE &mdash; kaynaklı süre aralığı]</strong>.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Sonuç nasıl ölçülür?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Bu alanın standartlaşmış bir ölçüm aracı henüz yok; sıralama takibinin SEO&rsquo;daki karşılığı GEO&rsquo;da mevcut değil. Bizim yöntemimiz şu: markanızla ilgili gerçek soruların listesini çıkarıyoruz, bu soruları kapsamdaki araçlara düzenli aralıklarla soruyoruz ve yanıtlarda markanın anılıp anılmadığını, hangi bağlamda ve hangi kaynağa atıfla anıldığını kaydediyoruz. Çıktı, dönem dönem karşılaştırılabilir bir tablo. Yanıtlar aynı soruya her seferinde birebir aynı gelmediği için tek bir ölçüm değil, eğilim okunuyor. Ölçüm sıklığı ve kullanılan araçlar: <strong>[REPLACE &mdash; ölçüm aracı ve sıklığı]</strong>.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">SEO yaptırıyorum, buna ayrıca gerek var mı?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Büyük ölçüde aynı zemine dayanıyorlar: erişilebilir sayfalar, düzgün başlık yapısı, yapılandırılmış veri ve doğru içerik. İyi bir SEO çalışması GEO tarafına da yarar. Ayrışma amaç ve biçimde: SEO sayfayı sonuç listesinde yukarı taşımayı hedefler, GEO ise içeriğin bir yanıtın içine alıntı olarak girebilmesini hedefler. Bunun için içeriğin farklı biçimlenmesi gerekir; tanımların net ve kendi başına anlaşılır olması, sorulara doğrudan cevap veren bloklar, tablolarla verilen karşılaştırmalar. SEO çalışmanız varsa GEO tarafı sıfırdan başlamaz; üzerine eklenir.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Garanti veriyor musunuz?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Hayır. Ne alıntılanma garantisi veriyoruz ne de belirli bir araçta görüneceğinizi taahhüt ediyoruz. Yanıtları üreten modeller kendi kaynak seçim mantıklarıyla çalışıyor, bu mantık kamuya açık değil ve zaman içinde değişiyor. Taahhüt edebileceğimiz şey yapılan iş: hangi çalışmaların yapıldığı, hangi sayfaların düzenlendiği, hangi kaynaklarda marka bilgisinin güncellendiği ve ölçümün ne gösterdiği. Sonucu garanti eden bir teklif görürseniz, o teklifin neye dayandığını sorun.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Hangi platformlar kapsamda?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Şu an ChatGPT, Perplexity, Google AI Overviews ve Gemini üzerinde çalışıyoruz. Bu liste sabit değil: yeni araçlar çıkıyor, mevcut araçların kaynak gösterme biçimi değişiyor ve bazıları belirli bölgelerde farklı davranıyor. Kapsamı teklif aşamasında yazılı olarak belirliyoruz ve dönem içinde değişiklik olursa raporda belirtiyoruz. Platformların tamamını kapsadığını söyleyen bir kapsam tanımı gerçekçi değil.</p>
        </details>
      </div>

      <!-- ▸ Keep this JSON-LD in step with the five questions above.
             Update both together, always. -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "inLanguage": "tr-TR",
        "mainEntity": [
          { "@type": "Question", "name": "Ne kadar sürede sonuç alınır?", "acceptedAnswer": { "@type": "Answer", "text": "Dürüst yanıt: bunu taahhüt edebilecek bir veri setimiz yok. Yapay zeka araçlarının kaynak seçimi, modelin eğitim ve tarama döngüsüne bağlı ve bu döngüler platformdan platforma değişiyor; bir içerik bazı araçlarda günler içinde alıntılanırken bazılarında hiç görünmeyebiliyor. Yaptığımız iş, alıntılanma olasılığını artıran yapısal koşulları kurmak: net tanımlar, yapılandırılmış veri, erişilebilir sayfalar ve üçüncü taraf kaynaklarda tutarlı bilgi. Süre taahhüdü veren bir ajans varsa, ölçemediği bir şeyi taahhüt ediyordur. Gözlemlediğimiz aralık: [REPLACE — kaynaklı süre aralığı]." } },
          { "@type": "Question", "name": "Sonuç nasıl ölçülür?", "acceptedAnswer": { "@type": "Answer", "text": "Bu alanın standartlaşmış bir ölçüm aracı henüz yok; sıralama takibinin SEO’daki karşılığı GEO’da mevcut değil. Bizim yöntemimiz şu: markanızla ilgili gerçek soruların listesini çıkarıyoruz, bu soruları kapsamdaki araçlara düzenli aralıklarla soruyoruz ve yanıtlarda markanın anılıp anılmadığını, hangi bağlamda ve hangi kaynağa atıfla anıldığını kaydediyoruz. Çıktı, dönem dönem karşılaştırılabilir bir tablo. Yanıtlar aynı soruya her seferinde birebir aynı gelmediği için tek bir ölçüm değil, eğilim okunuyor. Ölçüm sıklığı ve kullanılan araçlar: [REPLACE — ölçüm aracı ve sıklığı]." } },
          { "@type": "Question", "name": "SEO yaptırıyorum, buna ayrıca gerek var mı?", "acceptedAnswer": { "@type": "Answer", "text": "Büyük ölçüde aynı zemine dayanıyorlar: erişilebilir sayfalar, düzgün başlık yapısı, yapılandırılmış veri ve doğru içerik. İyi bir SEO çalışması GEO tarafına da yarar. Ayrışma amaç ve biçimde: SEO sayfayı sonuç listesinde yukarı taşımayı hedefler, GEO ise içeriğin bir yanıtın içine alıntı olarak girebilmesini hedefler. Bunun için içeriğin farklı biçimlenmesi gerekir; tanımların net ve kendi başına anlaşılır olması, sorulara doğrudan cevap veren bloklar, tablolarla verilen karşılaştırmalar. SEO çalışmanız varsa GEO tarafı sıfırdan başlamaz; üzerine eklenir." } },
          { "@type": "Question", "name": "Garanti veriyor musunuz?", "acceptedAnswer": { "@type": "Answer", "text": "Hayır. Ne alıntılanma garantisi veriyoruz ne de belirli bir araçta görüneceğinizi taahhüt ediyoruz. Yanıtları üreten modeller kendi kaynak seçim mantıklarıyla çalışıyor, bu mantık kamuya açık değil ve zaman içinde değişiyor. Taahhüt edebileceğimiz şey yapılan iş: hangi çalışmaların yapıldığı, hangi sayfaların düzenlendiği, hangi kaynaklarda marka bilgisinin güncellendiği ve ölçümün ne gösterdiği. Sonucu garanti eden bir teklif görürseniz, o teklifin neye dayandığını sorun." } },
          { "@type": "Question", "name": "Hangi platformlar kapsamda?", "acceptedAnswer": { "@type": "Answer", "text": "Şu an ChatGPT, Perplexity, Google AI Overviews ve Gemini üzerinde çalışıyoruz. Bu liste sabit değil: yeni araçlar çıkıyor, mevcut araçların kaynak gösterme biçimi değişiyor ve bazıları belirli bölgelerde farklı davranıyor. Kapsamı teklif aşamasında yazılı olarak belirliyoruz ve dönem içinde değişiklik olursa raporda belirtiyoruz. Platformların tamamını kapsadığını söyleyen bir kapsam tanımı gerçekçi değil." } }
        ]
      }
      </script>

      <!-- Service schema. No offers, no priceRange, no claims: nothing
           verified has been supplied and this field does not support any. -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.peradijital.com.tr/cozumlerimiz/geo-yapay-zeka-gorunurlugu/#service",
        "name": "Yapay Zekada Görünürlük (GEO)",
        "serviceType": "Üretken yapay zeka görünürlüğü (GEO)",
        "description": "Markanın yapay zeka araçlarının ürettiği yanıtlarda kaynak olarak anılabilmesi için içerik yapısının alıntılanabilir hâle getirilmesi, yapılandırılmış veri, yapay zeka tarayıcılarına erişim, üçüncü taraf kaynaklarda marka varlığı ve görünürlük ölçümü.",
        "url": "https://www.peradijital.com.tr/cozumlerimiz/geo-yapay-zeka-gorunurlugu/",
        "inLanguage": "tr-TR",
        "provider": { "@id": "https://www.peradijital.com.tr/#organization" },
        "areaServed": { "@type": "Country", "name": "Türkiye" },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "GEO kapsamı",
          "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "İçerik yapısının alıntılanabilir hâle getirilmesi" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Yapılandırılmış veri kurulumu" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Yapay zeka tarayıcılarına erişim düzenlemesi" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Üçüncü taraf kaynaklarda marka varlığı" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Görünürlük ölçümü ve raporlama" } }
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
        <h2 class="section-title" id="iletisim-title">Görünürlüğünüzü birlikte ölçelim</h2>
        <div class="contact-blocks">
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-phone"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Doğrudan arayın</h3>
              <p class="contact-block__note">Hafta içi 09:00&ndash;18:00 arası <a href="tel:<?= e(CONTACT_PHONE_HREF) ?>"><?= e(CONTACT_PHONE) ?></a>. Görüşmedeysek aynı gün içinde size döneriz.</p>
            </div>
          </div>
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chart"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Başlangıç ölçümü isteyin</h3>
              <p class="contact-block__note">Markanızla ilgili birkaç soruyu kapsamdaki araçlara sorup şu an nasıl göründüğünüzü çıkarıyoruz. Sonucu olduğu gibi paylaşıyoruz.</p>
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
            <label class="field__label" for="f-email">E-posta <span class="field__required">(zorunlu)</span></label>
            <input class="field__input" id="f-email" name="email" type="email" autocomplete="email" required aria-describedby="f-email-error">
            <p class="field__error" id="f-email-error" data-error-for="f-email"></p>
          </div>

          <fieldset class="tile-options">
            <legend class="tile-options__legend">Nasıl bir çalışma düşünüyorsunuz?</legend>
            <div class="tile-options__grid">
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="geo-baslangic" checked><span>GEO başlangıç çalışması</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="icerik"><span>İçerik yapısı düzenlemesi</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="structured-data"><span>Yapılandırılmış veri</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="olcum"><span>Görünürlük ölçümü ve raporlama</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="seo-ile"><span>SEO ile birlikte</span></label>
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
          <input type="hidden" name="form_source" value="geo-yapay-zeka-gorunurlugu">

          <button class="btn btn--accent form__submit" type="submit">Talebi Gönder</button>

          <p class="form__legal">Gerçek bir adresten yanıt veriyoruz. Otomasyon yok, bülten yok.</p>
        </form>
      </div>

    </div>
  </section>

</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
