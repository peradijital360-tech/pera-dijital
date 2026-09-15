<?php
$page = [
    'title'       => "Performans Reklam Yönetimi — Pera Dijital",
    'description' => "Kıdemli bir ekip, tüm büyük kanallarda kampanyalarınızı planlıyor, yayına alıyor ve iyileştiriyor. Sabit ücret, doğru kurulmuş ölçümleme ve güvenebileceğiniz raporlama.",
    'canonical'   => '/cozumlerimiz/performans-reklam-yonetimi/',
    'nav'         => 'svc:performans-reklam-yonetimi',
    'css'         => ['page.css'],
    'js'          => ['section-nav.js'],
    'og_type'     => 'article',
    'home'        => '/',
    'cta'         => '#iletisim',
    'body_class'  => "page-service",
    'og_desc'     => "Kıdemli bir ekip, tüm büyük kanallarda kampanyalarınızı planlıyor, yayına alıyor ve iyileştiriyor. Sabit ücret, güvenebileceğiniz raporlama.",
    'tw_desc'     => "Kıdemli bir ekip, tüm büyük kanallarda kampanyalarınızı planlıyor, yayına alıyor ve iyileştiriyor.",
];

/* Summary panels, one per text band, keyed by the band's id. Rendered by
   assets/inc/summary.php. Facts only from this page's own copy; anything
   the page does not state is a REPLACE marker. */
$summaries = [
    'nedir' => [
        'label'  => 'Hizmet özeti',
        'blocks' => [
            ['title' => 'Kapsam', 'items' => [
                'Kampanya stratejisi',
                'Kreatif üretim',
                'Landing page üretimi',
                'Medya satın alma: Meta, Google, YouTube, TikTok',
                'Ölçümleme kurulumu',
                'Raporlama ve değerlendirme',
            ]],
            ['title' => 'Kimler için', 'items' => [
                'Online satış yapan ekipler',
            ]],
            ['title' => 'Nasıl ölçülür', 'items' => [
                'Reklam harcamasına karşılık getiri (ROAS)',
                'Anlaşılan bir bant içinde edinme başına maliyet',
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
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Performans Reklam Yönetimi</span></li>
        </ol>
      </nav>
      <!-- ▸ Keep this JSON-LD in step with the breadcrumb above.
             REPLACE the domain before launch. -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "inLanguage": "tr-TR",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Pera Dijital", "item": "https://www.peradijital.com.tr/" },
          { "@type": "ListItem", "position": 2, "name": "Performans Reklam Yönetimi", "item": "https://www.peradijital.com.tr/cozumlerimiz/performans-reklam-yonetimi/" }
        ]
      }
      </script>

      <div class="service-hero__grid">
        <div class="service-hero__content">
          <h1 class="service-hero__title" id="hero-title">
            <span class="service-hero__title-main">Performans Reklam Yönetimi</span>
            <span class="service-hero__title-sub">Ölçülebilir getiri için kurgulanan kampanyalar</span>
          </h1>
          <p class="service-hero__lede">Tüm büyük kanallarda kampanyaları planlıyor, yayına alıyor ve iyileştiriyoruz. Tek bir kıdemli ekip, önemli olan tek rakamdan sorumlu: her reklamın harcamasına karşılık getirdiği.</p>
          <div class="service-hero__actions">
            <a class="btn btn--dark btn--lg" href="#iletisim">Bize Ulaşın</a>
          </div>
        </div>
        <div class="service-hero__media">
          <!-- LCP element: never lazy-loaded. -->
          <img src="/assets/img/service/hero.webp" alt="Yer tutucu: kampanya panosu görünümü" width="1000" height="750" fetchpriority="high" decoding="async">
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================
       STICKY SECTION NAV — 6 spied links + 1 accent contact link
       ============================================================ -->
  <nav class="section-nav" aria-label="Sayfa içi gezinme" data-section-nav>
    <div class="section-nav__inner">
      <a class="section-nav__link" href="#nedir" data-spy>Nedir?</a>
      <a class="section-nav__link" href="#faydalari" data-spy>Faydaları</a>
      <a class="section-nav__link" href="#kimler-icin" data-spy>Kimler için?</a>
      <a class="section-nav__link" href="#neler-yapiyoruz" data-spy>Neler yapıyoruz?</a>
      <a class="section-nav__link" href="#neden-biz" data-spy>Neden biz?</a>
      <a class="section-nav__link" href="#sss" data-spy>S.S.S.</a>
      <a class="section-nav__link section-nav__link--accent" href="#iletisim">İletişime Geçin</a>
    </div>
  </nav>

  <!-- ============================================================
       BAND A — what it is (deliberately the plainest band: no eyebrow)
       ============================================================ -->
  <section class="band" id="nedir" aria-labelledby="nedir-title">
    <div class="band__inner with-summary">
      <div class="prose">
        <h2 class="section-title" id="nedir-title">Performans reklam yönetimi neleri kapsar?</h2>
        <p class="section-lede">Yalnızca medya satın alma değil, döngünün tamamı: teklif, kreatif, bütçe, ölçümleme ve bunlardan çıkan kararlar; hepsi tek bir sorumlu ekipte.</p>
        <p>Çoğu hesap teklif verme katmanında başarısız olmaz. Bir adım öncesinde, teklif net olmadığında, kreatif eskidiğinde ya da gelen rakamlara aksiyon alacak kadar güvenilemediğinde başarısız olur. Performansı yönetmek, bunların hepsine birlikte sahip çıkmaktır.</p>
        <p>Pratikte bu haftalık bir döngü demek: yeni bir şey yayına girer, sonuçlar gelir, kaybedenler kapatılır, kazananlar daha fazla bütçe alır ve sıradaki test çoktan kuyruktadır. Plan, hesap bize neyin işe yaradığını öğrettikçe değişir.</p>
      </div>
      <?php $summary = $summaries['nedir']; require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/summary.php'; ?>
    </div>
  </section>

  <!-- ============================================================
       BAND B — benefits: sticky aside + 2x2 cards
       ============================================================ -->
  <section class="band" id="faydalari" aria-labelledby="faydalari-title">
    <div class="band__inner split">
      <div class="band__aside band__aside--sticky">
        <p class="eyebrow">Faydaları</p>
        <h2 class="section-title" id="faydalari-title">Rakamın sahibi tek ekip olunca ne değişir?</h2>
        <p class="section-lede">İlk çeyrek içinde dört şey iyileşir ve hepsi ölçülebilir.</p>
        <a class="btn btn--accent" href="#iletisim">Teklif İsteyin</a>
      </div>
      <ul class="card-grid-2" role="list">
        <li class="card">
          <h3 class="card__title">Öngörülebilir edinme maliyeti</h3>
          <p class="card__note">Haftalık testler, edinme başına maliyeti platformun insafına bırakmak yerine anlaşılan bir bandın içinde tutar; böylece finans ekibi gelecek çeyreği tutan rakamlarla planlar.</p>
        </li>
        <li class="card">
          <h3 class="card__title">Daha hızlı kreatif döngüsü</h3>
          <!-- Stress-test slot: body written at ~1.4x the 25-35 word target. -->
          <p class="card__note">Yeni hook&rsquo;lar, statik görseller ve video varyasyonları hesaba çeyrekte bir değil her hafta girer; bu da kaybeden bir açının size aylarca değil yalnızca günlerce bütçeye mal olması, kazanan bir açının ise hâlâ tazeyken bulunup doğrulanması ve büyütülmesi anlamına gelir.</p>
        </li>
        <li class="card">
          <h3 class="card__title">Aksiyon alınabilir ölçümleme</h3>
          <p class="card__note">Ölçekleme başlamadan önce ölçümleme kurulur ve doğrulanır; böylece her bütçe kararı, hem sizin hem platformun gerçek kabul ettiği bir rakama dayanır.</p>
        </li>
        <li class="card">
          <h3 class="card__title">Kıdemli sorumluluk</h3>
          <p class="card__note">Sonuçtan tek bir isimli ekip sorumludur. Departmanlar arası devir yok, bütçenizle mesleği öğrenen junior yok, iki hafta beklenen strateji toplantısı yok.</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- ============================================================
       BAND C — who it's for: 12 industry tiles
       ============================================================ -->
  <section class="band" id="kimler-icin" aria-labelledby="kimler-icin-title">
    <div class="band__inner split split--wide-right">
      <div class="band__aside">
        <p class="eyebrow">Kimler için?</p>
        <h2 class="section-title" id="kimler-icin-title">Online satış yapan ekipler için kurgulandı</h2>
        <p class="section-lede">Oyun kitabı huniye uyum sağlar, tersi değil. En sık çalıştığımız sektörler bunlar.</p>
      </div>
      <ul class="industry-list" role="list">
        <li class="industry"><span class="industry__tile"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-cart"></use></svg></span><span class="industry__label">E-ticaret</span></li>
        <li class="industry"><span class="industry__tile"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-building"></use></svg></span><span class="industry__label">B2B Hizmetler</span></li>
        <li class="industry"><span class="industry__tile"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-data"></use></svg></span><span class="industry__label">SaaS ve Teknoloji</span></li>
        <li class="industry"><span class="industry__tile"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-heart"></use></svg></span><span class="industry__label">Sağlık ve Klinikler</span></li>
        <li class="industry"><span class="industry__tile"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-book"></use></svg></span><span class="industry__label">Eğitim ve Kurslar</span></li>
        <li class="industry"><span class="industry__tile"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-cash"></use></svg></span><span class="industry__label">Finans ve Sigorta</span></li>
        <li class="industry"><span class="industry__tile"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-globe"></use></svg></span><span class="industry__label">Turizm ve Konaklama</span></li>
        <li class="industry"><span class="industry__tile"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chart"></use></svg></span><span class="industry__label">Gayrimenkul</span></li>
        <li class="industry"><span class="industry__tile"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-gauge"></use></svg></span><span class="industry__label">Otomotiv</span></li>
        <li class="industry"><span class="industry__tile"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-layers"></use></svg></span><span class="industry__label">Ev ve Mobilya</span></li>
        <li class="industry"><span class="industry__tile"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-star"></use></svg></span><span class="industry__label">Kozmetik ve Bakım</span></li>
        <li class="industry"><span class="industry__tile"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-people"></use></svg></span><span class="industry__label">Yerel Hizmetler</span></li>
      </ul>
    </div>
  </section>

  <!-- ============================================================
       BAND D — what we do (dark, light cards)
       ============================================================ -->
  <section class="band band--dark" id="neler-yapiyoruz" aria-labelledby="neler-yapiyoruz-title">
    <div class="band__inner split split--wide-right">
      <div class="band__aside">
        <p class="eyebrow eyebrow--invert">Neler yapıyoruz?</p>
        <h2 class="section-title" id="neler-yapiyoruz-title">Her ay teslim edilen işler</h2>
        <p class="section-lede">Her hesapta altı iş kolu paralel ilerler. Hiçbiri opsiyonel değil, çünkü her biri diğerini besler.</p>
      </div>
      <ul class="work-grid" role="list">
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-strategy"></use></svg></span>
            <h3 class="card__title">Kampanya stratejisi</h3>
            <p class="card__note">Çeyreklik yazılı bir plan: hangi teklif, hangi kanalda, ne kadar bütçeyle yayınlanacak ve her birinden ne bekleniyor. Plan, hesaptan gelen veri gösterdikçe güncellenir.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-design"></use></svg></span>
            <h3 class="card__title">Kreatif üretim</h3>
            <p class="card__note">Statik görsel, video ve metin varyasyonları her hafta üretilir. Tek bir ana görsel küçültülmez; her yerleşim kendi formatına göre kurgulanır, eskiyen kreatif kapatılır.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-layers"></use></svg></span>
            <h3 class="card__title">Landing page üretimi</h3>
            <p class="card__note">Reklamın yönlendirdiği sayfalar, mevcut sayfaya karşı test edilerek kurulur. Reklam ilgiyi başlatır, kararı sayfa verdirir; sayfa iyileştiğinde bütün kanalların sonucu birlikte iyileşir.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-media"></use></svg></span>
            <h3 class="card__title">Medya satın alma</h3>
            <p class="card__note">Meta, Google, YouTube ve TikTok hesaplarının günlük yönetimi: kampanya yapısı, teklifler ve bütçe dağılımı. Çalışmayan reklam beklenmeden kapatılır, bütçe çalışana aktarılır.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-data"></use></svg></span>
            <h3 class="card__title">Ölçümleme kurulumu</h3>
            <p class="card__note">Pixel, Conversions API ve analitik, ölçekleme başlamadan kurulur ve kendi sipariş kayıtlarınızla karşılaştırılır. Böylece bütçe kararları gerçek satışla örtüşen rakamlara dayanır.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chart"></use></svg></span>
            <h3 class="card__title">Raporlama ve değerlendirme</h3>
            <p class="card__note">Neyin neden değiştiğini ve sırada ne olduğunu anlatan haftalık yazılı özet. Kararların gerekçesi alındığı gün paylaşılır; her rakam kaynağındaki platformda doğrulanabilir.</p>
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
        <h2 class="section-title section-title--centre" id="neden-biz-title">Büyüyen markalar bütçeyi neden bize emanet ediyor?</h2>
        <p class="section-lede">Her müşterinin kendi gerekçesi var. En sık duyduğumuz üçü, arkasındaki araçlar ve sonuçlar bunlar.</p>
      </div>

      <div class="card pillars">
        <div class="pillars__grid">
          <div class="pillar">
            <h3 class="card__title">Yalnızca kıdemli kadro</h3>
            <p class="card__note">Hesaptaki herkes en az sekiz yıldır performans pazarlama yapıyor. Kimse bütçenizle mesleği öğrenmiyor.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Sabit aylık ücret</h3>
            <p class="card__note">Ücret ekibi kapsar, harcamadan pay almaz; dolayısıyla burada kimse siz daha çok harcayın diye fayda görmez.</p>
          </div>
          <div class="pillar">
            <!-- Stress-test slot: h3 written at ~1.4x the 2-5 word target. -->
            <h3 class="card__title">İşi yapan kişilerden aynı gün içinde yanıt</h3>
            <p class="card__note">Sorular ortak bir kanala düşer ve kararı veren kişi tarafından yanıtlanır; müşteri temsilcisi üzerinden aktarılmaz.</p>
          </div>
        </div>
      </div>

      <div class="duo">
        <div class="card duo__wide">
          <h3 class="card__title">Kullandığımız araçlar</h3>
          <!-- ▸ REPLACE with real tool logos when chosen; marks are placeholders. -->
          <p class="tool-row">
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chart"></use></svg>Ads Manager</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-data"></use></svg>GA4</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-gauge"></use></svg>Looker Studio</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chat"></use></svg>Slack</span>
          </p>
        </div>
        <div class="card duo__narrow">
          <h3 class="card__title">Yayındaki hesaplardan sonuçlar</h3>
          <p class="card__note">Ana sayfadaki sonuç şeridi, bugün yönettiğimiz hesaplardan ölçüldü.</p>
          <a class="text-link" href="/#proof">Sonuçlara göz atın</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       BAND F — FAQ (native details/summary)
       ============================================================ -->
  <section class="band" id="sss" aria-labelledby="sss-title">
    <div class="band__inner">
      <div class="centered-head">
        <p class="eyebrow">S.S.S.</p>
        <h2 class="section-title section-title--centre" id="sss-title">Her iş öncesinde en çok duyduğumuz sorular</h2>
        <p class="section-lede">Sizinki burada yoksa aşağıdaki formdan sorun, doğrudan yanıtlayalım.</p>
      </div>

      <div class="faq-grid">
        <details class="card faq">
          <summary class="faq__summary">Kampanyalar gerçekte ne kadar sürede yayına girer?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Çoğu hesapta, erişim verildikten sonra yedi iş günü. İlk gün hesaplar ve ölçümleme, ikinci ile beşinci gün arası teklif ve kreatif üretimi; ilk kampanyalar ikinci hafta bitmeden harcamaya başlar. Onay süreçleri alışılmadık olan hesaplarda bu süre uzayabilir ve bunu baştan söyleriz.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Aylık minimum reklam bütçesi şartınız var mı?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Hayır. Ücret ekibi kapsar ve dört haneli de harcasanız yedi haneli de aynı kalır. Tek beklentimiz, bütçenin birkaç hafta içinde okunabilir sonuç üretecek kadar olması; yeterli değilse bunu açıkça söyleriz.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Hesabımızda gerçekte kimler çalışacak?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">İsimleriyle bilinen beş kıdemli uzman: bir stratejist, bir metin yazarı, bir medya alım uzmanı, bir kreatif tasarımcı ve bir analist. Hepsiyle ilk hafta tanışırsınız ve hesapta kalırlar. Konuştuğunuz kişilerin arkasında ayrı bir uygulama ekibi yoktur.</p>
        </details>
        <details class="card faq">
          <!-- Stress-test slot: question written at ~1.4x the 6-12 word target. -->
          <summary class="faq__summary">Reklamları hâlihazırda kendi ekibimizle yönetiyoruz; sizi dahil edersek ne değişir?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Genellikle kanallar değil, tempo değişir. İç ekipler her işe birden yetişmeye çalıştığı için test hızı düşer. Kreatif, sayfa ve bütçe hamlelerinden oluşan haftalık döngüyü biz devralırız; marka, ürün ve onaylar sizin ekibinizde kalır. Bazı müşterilerimiz bir kanalı süresiz olarak kendi bünyesinde tutar.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Nasıl ve hangi sıklıkta raporluyorsunuz?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Çalıştığımız canlı panonun kendisini, neyin neden değiştiğini anlatan haftalık yazılı özeti ve kararların alındığı gün Slack&rsquo;teki gerekçeyi alırsınız. Her rakam, kendi girip doğrulayabileceğiniz bir platforma kadar izlenebilir.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Maliyeti nedir ve sözleşme nasıl işliyor?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Hesabı gördükten sonra verilen tek bir sabit aylık ücret; harcamadan pay yok, uzun süreli bağlayıcılık yok. İlk üç aylık dönemin ardından çalışma aydan aya devam eder; üç ay, düzgün bir test döngüsünün kendini kanıtlaması için gereken asgari süredir.</p>
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
          { "@type": "Question", "name": "Kampanyalar gerçekte ne kadar sürede yayına girer?", "acceptedAnswer": { "@type": "Answer", "text": "Çoğu hesapta, erişim verildikten sonra yedi iş günü. İlk gün hesaplar ve ölçümleme, ikinci ile beşinci gün arası teklif ve kreatif üretimi; ilk kampanyalar ikinci hafta bitmeden harcamaya başlar. Onay süreçleri alışılmadık olan hesaplarda bu süre uzayabilir ve bunu baştan söyleriz." } },
          { "@type": "Question", "name": "Aylık minimum reklam bütçesi şartınız var mı?", "acceptedAnswer": { "@type": "Answer", "text": "Hayır. Ücret ekibi kapsar ve dört haneli de harcasanız yedi haneli de aynı kalır. Tek beklentimiz, bütçenin birkaç hafta içinde okunabilir sonuç üretecek kadar olması; yeterli değilse bunu açıkça söyleriz." } },
          { "@type": "Question", "name": "Hesabımızda gerçekte kimler çalışacak?", "acceptedAnswer": { "@type": "Answer", "text": "İsimleriyle bilinen beş kıdemli uzman: bir stratejist, bir metin yazarı, bir medya alım uzmanı, bir kreatif tasarımcı ve bir analist. Hepsiyle ilk hafta tanışırsınız ve hesapta kalırlar. Konuştuğunuz kişilerin arkasında ayrı bir uygulama ekibi yoktur." } },
          { "@type": "Question", "name": "Reklamları hâlihazırda kendi ekibimizle yönetiyoruz; sizi dahil edersek ne değişir?", "acceptedAnswer": { "@type": "Answer", "text": "Genellikle kanallar değil, tempo değişir. İç ekipler her işe birden yetişmeye çalıştığı için test hızı düşer. Kreatif, sayfa ve bütçe hamlelerinden oluşan haftalık döngüyü biz devralırız; marka, ürün ve onaylar sizin ekibinizde kalır. Bazı müşterilerimiz bir kanalı süresiz olarak kendi bünyesinde tutar." } },
          { "@type": "Question", "name": "Nasıl ve hangi sıklıkta raporluyorsunuz?", "acceptedAnswer": { "@type": "Answer", "text": "Çalıştığımız canlı panonun kendisini, neyin neden değiştiğini anlatan haftalık yazılı özeti ve kararların alındığı gün Slack&rsquo;teki gerekçeyi alırsınız. Her rakam, kendi girip doğrulayabileceğiniz bir platforma kadar izlenebilir." } },
          { "@type": "Question", "name": "Maliyeti nedir ve sözleşme nasıl işliyor?", "acceptedAnswer": { "@type": "Answer", "text": "Hesabı gördükten sonra verilen tek bir sabit aylık ücret; harcamadan pay yok, uzun süreli bağlayıcılık yok. İlk üç aylık dönemin ardından çalışma aydan aya devam eder; üç ay, düzgün bir test döngüsünün kendini kanıtlaması için gereken asgari süredir." } }
        ]
      }
      </script>

      <!-- Service schema. No offers, no priceRange, no result claims. -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.peradijital.com.tr/cozumlerimiz/performans-reklam-yonetimi/#service",
        "name": "Performans Reklam Yönetimi",
        "serviceType": "Dijital reklam yönetimi",
        "description": "Meta, Google, YouTube ve TikTok’ta kampanya stratejisi, kreatif üretim, landing page üretimi, medya satın alma, ölçümleme kurulumu ve raporlama.",
        "url": "https://www.peradijital.com.tr/cozumlerimiz/performans-reklam-yonetimi/",
        "inLanguage": "tr-TR",
        "provider": { "@id": "https://www.peradijital.com.tr/#organization" },
        "areaServed": { "@type": "Country", "name": "Türkiye" },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Performans reklam yönetimi kapsamı",
          "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Kampanya stratejisi" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Kreatif üretim" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Landing page üretimi" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Medya satın alma" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Ölçümleme kurulumu" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Raporlama ve değerlendirme" } }
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
        <h2 class="section-title" id="iletisim-title">Hesabınızı birlikte konuşalım</h2>
        <div class="contact-blocks">
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-phone"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Doğrudan arayın</h3>
              <p class="contact-block__note">Hafta içi 09:00&ndash;18:00 arası <a href="tel:<?= e(CONTACT_PHONE_HREF) ?>"><?= e(CONTACT_PHONE) ?></a>. Görüşmedeysek aynı gün içinde size döneriz.</p>
            </div>
          </div>
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-calendar"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Toplantı ayarlayın</h3>
              <p class="contact-block__note">Takvim mi tercih edersiniz? Formu gönderin, ekibin tamamının müsaitliğiyle senkron bir randevu bağlantısıyla dönelim.</p>
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
            <legend class="tile-options__legend">Hangi hizmetle ilgileniyorsunuz?</legend>
            <div class="tile-options__grid">
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="performans-reklam" checked><span>Performans reklamları</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="seo"><span>SEO</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="sosyal-medya"><span>Sosyal medya</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="email"><span>E-posta pazarlama</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="analitik"><span>Analitik ve ölçümleme</span></label>
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
          <!-- Written by main.js on first interaction. Empty means JS is off,
               and send.php then skips the timing check rather than rejecting. -->
          <input type="hidden" name="submitted_at" value="" data-timestamp>
          <input type="hidden" name="form_source" value="performans-reklam-yonetimi">

          <button class="btn btn--accent form__submit" type="submit">Talebi Gönder</button>

          <p class="form__legal">Gerçek bir adresten yanıt veriyoruz. Otomasyon yok, bülten yok.</p>
        </form>
      </div>

    </div>
  </section>

</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
