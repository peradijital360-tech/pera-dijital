<?php
$page = [
    'title'       => "Grafik Tasarım — Pera Dijital",
    'description' => "Logo tasarımı, kurumsal kimlik, sosyal medya ve web banner tasarımları, ambalaj, basılı işler, sunum ve katalog. Vektörel kaynak dosyalar ve kullanım kılavuzu teslim dahil.",
    'canonical'   => '/cozumlerimiz/grafik-tasarim/',
    'nav'         => 'svc:grafik-tasarim',
    'css'         => ['page.css'],
    'js'          => ['section-nav.js'],
    'og_type'     => 'article',
    'home'        => '/',
    'cta'         => '#iletisim',
    'body_class'  => "page-service",
    'og_desc'     => "Logo, kurumsal kimlik, sosyal medya, ambalaj ve basılı işler. Kaynak dosyalar ve kullanım kılavuzu teslim dahil.",
    'tw_desc'     => "Logo, kurumsal kimlik, sosyal medya, ambalaj ve basılı iş tasarımı.",
];

/* Summary panels, one per text band, keyed by the band's id. Rendered by
   assets/inc/summary.php. Facts only from this page's own copy; anything
   the page does not state is a REPLACE marker. */
$summaries = [
    'nedir' => [
        'label'  => 'Hizmet özeti',
        'blocks' => [
            ['title' => 'Kapsam', 'items' => [
                'Logo tasarımı',
                'Kurumsal kimlik',
                'Web banner ve sosyal medya tasarımları',
                'Ambalaj ve basılı işler',
                'Sunum ve katalog tasarımı',
            ]],
            ['title' => 'Kimler için', 'items' => [
                'Kimliğini sıfırdan kuracak markalar',
                'Mevcut kılavuza uygun uygulama işi isteyen markalar',
            ]],
            ['title' => 'Teslimde hazır olanlar', 'items' => [
                'Baskıya ve ekrana uygun formatlar',
                'Kaynak dosyalar',
                'Kullanım kılavuzu',
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
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Grafik Tasarım</span></li>
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
          { "@type": "ListItem", "position": 2, "name": "Grafik Tasarım", "item": "https://www.peradijital.com.tr/cozumlerimiz/grafik-tasarim/" }
        ]
      }
      </script>

      <div class="service-hero__grid">
        <div class="service-hero__content">
          <h1 class="service-hero__title" id="hero-title">
            <span class="service-hero__title-main">Grafik Tasarım</span>
            <span class="service-hero__title-sub">Logodan ambalaja, aynı elden çıkmış bir görsel dil</span>
          </h1>
          <p class="service-hero__lede">Logo ve kurumsal kimlikten sosyal medya, ambalaj ve basılı işlere kadar markanın görsel dilini kuruyoruz. Kaynak dosyalar ve kullanım kılavuzu teslimin parçası.</p>
          <div class="service-hero__actions">
            <a class="btn btn--dark btn--lg" href="#iletisim">Bize Ulaşın</a>
          </div>
        </div>
        <div class="service-hero__media">
          <!-- LCP element: never lazy-loaded. -->
          <img src="/assets/img/service/grafik-tasarim/hero.webp" alt="Yer tutucu: logo ve kurumsal kimlik uygulamaları" width="1000" height="750" fetchpriority="high" decoding="async">
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
      <a class="section-nav__link" href="#logo-sureci" data-spy>Logo süreci</a>
      <a class="section-nav__link" href="#teslim" data-spy>Teslim dosyaları</a>
      <a class="section-nav__link" href="#neden-biz" data-spy>Neden biz?</a>
      <a class="section-nav__link" href="#sss" data-spy>S.S.S.</a>
      <a class="section-nav__link section-nav__link--accent" href="#iletisim">İletişime Geçin</a>
    </div>
  </nav>

  <!-- ============================================================
       BAND A — the definition block. The most extractable text on the
       page: factual, no adjectives, 40-60 words.
       ============================================================ -->
  <section class="band" id="nedir" aria-labelledby="nedir-title">
    <div class="band__inner with-summary">
      <div class="prose">
        <h2 class="section-title" id="nedir-title">Grafik tasarım hizmeti neleri kapsıyor?</h2>
        <p class="section-lede">Pera Dijital logo tasarımı, kurumsal kimlik, web banner, sosyal medya tasarımları, ambalaj ve basılı işler ile sunum ve katalog tasarımı yapar. İşler baskıya ve ekrana uygun formatlarda teslim edilir; kaynak dosyalar ve kullanım kılavuzu da teslim kapsamındadır. Web arayüz tasarımı bu hizmetin dışında, site projelerinin içinde yürütülür.</p>
        <p>İşler iki grupta topluyor. Birincisi kimlik işleri: logo, renk ve tipografi sistemi, kullanım kuralları. Bunlar bir kez kurulur ve sonraki her işin zeminini oluşturur. İkincisi uygulama işleri: sosyal medya görselleri, banner, ambalaj, katalog, sunum şablonu. Bunlar süreklidir ve kimlik kurulduktan sonra hızlanır.</p>
        <p>Kimlik kurulmadan uygulamaya başlandığında her iş sıfırdan karar gerektirir; renk, yazı tipi ve ton her seferinde yeniden tartışılır. Bu yüzden markanın kimliği yoksa önce onu kurmayı, varsa mevcut kılavuza uymayı tercih ediyoruz.</p>
        <p>Bu sayfanın kapsamı dışında üç iş var. Web sitesi arayüz tasarımı ayrı yürüyor: site projelerinde tasarım, <a href="<?= e(service_url_by_slug('kurumsal-web-tasarim')) ?>">kurumsal web tasarım hizmetinin</a> içinde yapılıyor. Reklam kampanyalarının yönetimi ve video prodüksiyon da bu sayfanın konusu değil; kampanya kreatifi üretiyorsak bu, reklam işinin parçası olarak yürütülüyor.</p>
      </div>
      <?php $summary = $summaries['nedir']; require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/summary.php'; ?>
    </div>
  </section>

  <!-- ============================================================
       BAND B — logo process (dark, light cards)
       ============================================================ -->
  <section class="band band--dark" id="logo-sureci" aria-labelledby="logo-sureci-title">
    <div class="band__inner split split--wide-right">
      <div class="band__aside">
        <p class="eyebrow eyebrow--invert">Süreç</p>
        <h2 class="section-title" id="logo-sureci-title">Logo tasarım süreci nasıl işliyor?</h2>
        <p class="section-lede">Altı adım, sırayla. İlk turda tek öneri değil, birbirinden farklı yönler sunuluyor; önce yön seçiliyor, detay sonra çalışılıyor.</p>
      </div>
      <ul class="work-grid" role="list">
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chat"></use></svg></span>
            <h3 class="card__title">Brief ve keşif</h3>
            <p class="card__note">Markanın ne yaptığını, kime seslendiğini ve hangi rakiplerin yanında duracağını konuşuyoruz. Çıktı: yazılı brief ve üzerinde anlaşılmış kriterler.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-globe"></use></svg></span>
            <h3 class="card__title">Araştırma ve yön belirleme</h3>
            <p class="card__note">Sektördeki görsel dili ve rakip işaretleri tarıyoruz. Amaç ilham panosu değil, hangi yönlerin zaten dolu olduğunu görmek.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-design"></use></svg></span>
            <h3 class="card__title">Taslak yönler</h3>
            <p class="card__note">Birbirinden farklı yönler çiziliyor ve gerekçesiyle birlikte sunuluyor. Bu turda amaç bir tanesini beğenmek değil, yönü seçmek.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-layers"></use></svg></span>
            <h3 class="card__title">Seçilen yönün geliştirilmesi</h3>
            <p class="card__note">Seçilen yön üzerinde oran, boşluk, tipografi ve renk çalışılıyor. Logo bu aşamada küçük ölçekte ve tek renkte de test ediliyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-media"></use></svg></span>
            <h3 class="card__title">Uygulama ve kimlik</h3>
            <p class="card__note">İşaret gerçek kullanımlara uygulanıyor: kartvizit, sosyal medya profili, ambalaj, sunum şablonu. Kullanım kuralları bu aşamada yazılıyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-copy"></use></svg></span>
            <h3 class="card__title">Dosya teslimi</h3>
            <p class="card__note">Vektörel kaynaklar, baskı ve ekran formatları, renk kodları ve yazı tipi bilgisi bir arada teslim ediliyor. Kullanım kılavuzu da pakete dahil.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- ============================================================
       BAND C — deliverables. A real table element: what you get and
       what each format is for, in a form answer engines can extract.
       ============================================================ -->
  <section class="band" id="teslim" aria-labelledby="teslim-title">
    <div class="band__inner">
      <div class="prose">
        <h2 class="section-title" id="teslim-title">Hangi dosyaları teslim ediyoruz?</h2>
        <p class="section-lede">Vektörel kaynak dosyalar, baskı ve ekran formatları, renk kodları ve kullanım kılavuzu bir arada teslim edilir. Kaynak dosyalar sizde kalır; sonradan talep etmeniz gereken bir şey değil.</p>
        <p>Teslim paketinin amacı, işi bizden bağımsız kullanabilmeniz. Matbaaya gidildiğinde istenen dosya, sosyal medya ekibinin ihtiyaç duyduğu şeffaf zeminli görsel ve ofiste kullanılacak basit format aynı pakette çıkar.</p>
      </div>

      <div class="compare" tabindex="0" role="region" aria-labelledby="teslim-tablo">
        <table class="compare__table">
          <caption id="teslim-tablo">Teslim paketinin içeriği. İşin türüne göre bazı satırlar kapsam dışı kalabilir; teklifte hangilerinin dahil olduğu yazılı olarak belirtilir.</caption>
          <thead>
            <tr>
              <th scope="col">Ne için</th>
              <th scope="col">Format</th>
              <th scope="col">Açıklama</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Vektörel kaynak</th>
              <td>AI, SVG</td>
              <td>Her türlü yeniden kullanım ve ölçeklendirme. Çalışılabilir ana dosya.</td>
            </tr>
            <tr>
              <th scope="row">Baskı</th>
              <td>PDF, EPS</td>
              <td>Matbaa, ambalaj, açık hava. Kesim ve taşma payları dahil hazırlanır.</td>
            </tr>
            <tr>
              <th scope="row">Ekran</th>
              <td>PNG (şeffaf), SVG</td>
              <td>Web sitesi, sosyal medya profili, sunum. Şeffaf zeminli ve boyutlandırılmış.</td>
            </tr>
            <tr>
              <th scope="row">Ofis kullanımı</th>
              <td>PNG, JPG</td>
              <td>Word, PowerPoint ve e-posta imzası gibi günlük kullanımlar.</td>
            </tr>
            <tr>
              <th scope="row">Renk kodları</th>
              <td>CMYK, Pantone, RGB, HEX</td>
              <td>Baskı ve ekran karşılıkları ayrı ayrı; matbaaya ve yazılıma birebir verilir.</td>
            </tr>
            <tr>
              <th scope="row">Kullanım kılavuzu</th>
              <td>PDF</td>
              <td>Boşluk, en küçük kullanım ölçüsü, doğru ve yanlış kullanımlar, renk ve tipografi.</td>
            </tr>
            <tr>
              <th scope="row">Yazı tipleri</th>
              <td>Liste + lisans notu</td>
              <td>Kullanılan yazı tiplerinin adı, ağırlıkları ve lisans durumu.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ============================================================
       BAND D — why us (centred)
       ============================================================ -->
  <section class="band" id="neden-biz" aria-labelledby="neden-biz-title">
    <div class="band__inner">
      <div class="centered-head">
        <p class="eyebrow">Neden biz?</p>
        <h2 class="section-title section-title--centre" id="neden-biz-title">Tasarımı neden bize veriyorlar?</h2>
        <p class="section-lede">En sık duyduğumuz üç gerekçe.</p>
      </div>

      <div class="card pillars">
        <div class="pillars__grid">
          <div class="pillar">
            <h3 class="card__title">Kaynak dosya tartışması yok</h3>
            <p class="card__note">Katmanlı kaynaklar teslimin standart parçası. Sonradan istemek, ek ücret konuşmak ya da pazarlık etmek gerekmiyor.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Baskıyı bilerek tasarlıyoruz</h3>
            <p class="card__note">Kesim payı, taşma, Pantone karşılığı ve en küçük kullanım ölçüsü baştan hesaplanıyor; matbaada çıkan sürprizler azalıyor.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Aynı ekip dijitali de kuruyor</h3>
            <p class="card__note">Kimlik, sitede ve reklamda nasıl görüneceği bilinerek tasarlanıyor. Kılavuz kâğıt üzerinde kalmıyor.</p>
          </div>
        </div>
      </div>

      <div class="duo">
        <div class="card duo__wide">
          <h3 class="card__title">Kapsama dahil olanlar</h3>
          <p class="tool-row">
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-star"></use></svg>Logo tasarımı</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-design"></use></svg>Kurumsal kimlik</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-media"></use></svg>Sosyal medya</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-layers"></use></svg>Web banner</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-cart"></use></svg>Ambalaj</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-book"></use></svg>Sunum ve katalog</span>
          </p>
        </div>
        <div class="card duo__narrow">
          <h3 class="card__title">Yayına aldığımız işler</h3>
          <p class="card__note">Tamamlanan projelerden seçtiklerimizi referanslar sayfasında topluyoruz.</p>
          <a class="text-link" href="/referanslarimiz/">Referanslara göz atın</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       BAND E — FAQ. The six <details> below and the FAQPage JSON-LD
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
          <summary class="faq__summary">Grafik tasarım işinin fiyatı neye göre belirlenir?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Fiyatı üç şey belirliyor: işin türü, üretilecek adet ve kullanım genişliği. Tek bir logo ile logo artı kurumsal kimlik kılavuzu farklı işlerdir; sosyal medya tasarımında ise fiyat adet üzerinden kurgulanır. Üçüncü etken kullanım hakkı: iş yalnızca dijitalde mi kullanılacak, yoksa ambalaj ve açık hava gibi basılı mecralarda da mı. Teklif, kapsam yazıya döküldükten sonra tek kalem veriliyor. Güncel aralık: <strong>[REPLACE &mdash; fiyat aralığı]</strong>.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Kaç revizyon hakkı var?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Revizyon sayısı teklifte yazılı olarak belirtiliyor ve aşama bazında ilerliyor: önce yön seçimi, sonra seçilen yön üzerinde detay revizyonları. Yön seçildikten sonra baştan farklı bir yön istenmesi revizyon değil, yeni bir tur sayılıyor; bunu baştan söylüyoruz ki sürpriz olmasın. Uygulama aşamasındaki küçük düzeltmeler (renk kodu, ölçü, dosya formatı) revizyon hakkından düşmüyor. Teklifteki hak: <strong>[REPLACE &mdash; revizyon adedi]</strong>.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Hangi dosya formatlarını teslim ediyorsunuz?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Logo ve kimlik işlerinde vektörel kaynak (AI veya SVG), baskı için PDF ve EPS, ekran için PNG ve SVG teslim ediliyor. Renk kodları hem baskı hem ekran için ayrı ayrı veriliyor: CMYK ve Pantone karşılıkları ile RGB ve HEX. Sosyal medya işlerinde platform ölçülerine göre dışa aktarılmış PNG veya JPG, ambalaj işlerinde ise matbaanın istediği kesim ve taşma paylı baskı dosyası hazırlanıyor. Tüm liste aşağıdaki tabloda.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Kaynak dosyalar bizde mi kalıyor?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Evet. Katmanlı kaynak dosyalar, kullanılan yazı tiplerinin listesi ve lisans bilgisiyle birlikte teslim ediliyor; sonradan istemeniz gereken bir şey değil, teslimin standart parçası. Başka bir ajansla devam etmeye karar verirseniz elinizde çalışılabilir dosya oluyor. Tek istisna, ticari lisansla satın alınmış yazı tipleri: lisans devredilemiyorsa dosyayı teslim ediyor, lisansı kendi adınıza almanız gerektiğini yazılı olarak bildiriyoruz.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Bir logo veya kimlik işi ne kadar sürer?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Süreyi belirleyen şey çizim değil, geri bildirim hızı. İlk yön sunumundan sonra kaç günde dönüş aldığımız takvimi doğrudan etkiliyor. Karar verici sayısı da etken: tek kişi onaylıyorsa süreç kısalıyor, kurul onayı varsa uzuyor. Ambalaj ve basılı işlerde matbaa prova aşaması da takvime ekleniyor. Kapsam netleştiğinde takvimi tarih vererek yazıyoruz. Tipik süre: <strong>[REPLACE &mdash; süre aralığı]</strong>.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">İlk tur beğenilmezse ne oluyor?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">İlk turda tek bir öneri değil, birbirinden farklı yönler sunuyoruz; amaç beğendiğiniz bir tanesini bulmak değil, hangi yönde ilerleyeceğimizi netleştirmek. Hiçbiri tutmazsa bu genellikle brief aşamasında eksik kalan bir şeyin işareti oluyor; o yüzden ikinci tura geçmeden önce brief&rsquo;i birlikte yeniden gözden geçiriyoruz. İkinci tur, teklifte yazan revizyon hakkının içinde. Bu noktadan sonra da anlaşamazsak, o ana kadar yapılan iş için ödenen tutar dışında bir bağlayıcılık kalmıyor.</p>
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
          { "@type": "Question", "name": "Grafik tasarım işinin fiyatı neye göre belirlenir?", "acceptedAnswer": { "@type": "Answer", "text": "Fiyatı üç şey belirliyor: işin türü, üretilecek adet ve kullanım genişliği. Tek bir logo ile logo artı kurumsal kimlik kılavuzu farklı işlerdir; sosyal medya tasarımında ise fiyat adet üzerinden kurgulanır. Üçüncü etken kullanım hakkı: iş yalnızca dijitalde mi kullanılacak, yoksa ambalaj ve açık hava gibi basılı mecralarda da mı. Teklif, kapsam yazıya döküldükten sonra tek kalem veriliyor. Güncel aralık: [REPLACE — fiyat aralığı]." } },
          { "@type": "Question", "name": "Kaç revizyon hakkı var?", "acceptedAnswer": { "@type": "Answer", "text": "Revizyon sayısı teklifte yazılı olarak belirtiliyor ve aşama bazında ilerliyor: önce yön seçimi, sonra seçilen yön üzerinde detay revizyonları. Yön seçildikten sonra baştan farklı bir yön istenmesi revizyon değil, yeni bir tur sayılıyor; bunu baştan söylüyoruz ki sürpriz olmasın. Uygulama aşamasındaki küçük düzeltmeler (renk kodu, ölçü, dosya formatı) revizyon hakkından düşmüyor. Teklifteki hak: [REPLACE — revizyon adedi]." } },
          { "@type": "Question", "name": "Hangi dosya formatlarını teslim ediyorsunuz?", "acceptedAnswer": { "@type": "Answer", "text": "Logo ve kimlik işlerinde vektörel kaynak (AI veya SVG), baskı için PDF ve EPS, ekran için PNG ve SVG teslim ediliyor. Renk kodları hem baskı hem ekran için ayrı ayrı veriliyor: CMYK ve Pantone karşılıkları ile RGB ve HEX. Sosyal medya işlerinde platform ölçülerine göre dışa aktarılmış PNG veya JPG, ambalaj işlerinde ise matbaanın istediği kesim ve taşma paylı baskı dosyası hazırlanıyor. Tüm liste aşağıdaki tabloda." } },
          { "@type": "Question", "name": "Kaynak dosyalar bizde mi kalıyor?", "acceptedAnswer": { "@type": "Answer", "text": "Evet. Katmanlı kaynak dosyalar, kullanılan yazı tiplerinin listesi ve lisans bilgisiyle birlikte teslim ediliyor; sonradan istemeniz gereken bir şey değil, teslimin standart parçası. Başka bir ajansla devam etmeye karar verirseniz elinizde çalışılabilir dosya oluyor. Tek istisna, ticari lisansla satın alınmış yazı tipleri: lisans devredilemiyorsa dosyayı teslim ediyor, lisansı kendi adınıza almanız gerektiğini yazılı olarak bildiriyoruz." } },
          { "@type": "Question", "name": "Bir logo veya kimlik işi ne kadar sürer?", "acceptedAnswer": { "@type": "Answer", "text": "Süreyi belirleyen şey çizim değil, geri bildirim hızı. İlk yön sunumundan sonra kaç günde dönüş aldığımız takvimi doğrudan etkiliyor. Karar verici sayısı da etken: tek kişi onaylıyorsa süreç kısalıyor, kurul onayı varsa uzuyor. Ambalaj ve basılı işlerde matbaa prova aşaması da takvime ekleniyor. Kapsam netleştiğinde takvimi tarih vererek yazıyoruz. Tipik süre: [REPLACE — süre aralığı]." } },
          { "@type": "Question", "name": "İlk tur beğenilmezse ne oluyor?", "acceptedAnswer": { "@type": "Answer", "text": "İlk turda tek bir öneri değil, birbirinden farklı yönler sunuyoruz; amaç beğendiğiniz bir tanesini bulmak değil, hangi yönde ilerleyeceğimizi netleştirmek. Hiçbiri tutmazsa bu genellikle brief aşamasında eksik kalan bir şeyin işareti oluyor; o yüzden ikinci tura geçmeden önce brief’i birlikte yeniden gözden geçiriyoruz. İkinci tur, teklifte yazan revizyon hakkının içinde. Bu noktadan sonra da anlaşamazsak, o ana kadar yapılan iş için ödenen tutar dışında bir bağlayıcılık kalmıyor." } }
        ]
      }
      </script>

      <!-- Service schema. No offers/priceRange: nothing verified supplied. -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.peradijital.com.tr/cozumlerimiz/grafik-tasarim/#service",
        "name": "Grafik Tasarım",
        "serviceType": "Grafik tasarım ve kurumsal kimlik",
        "description": "Logo tasarımı, kurumsal kimlik, web banner ve sosyal medya tasarımları, ambalaj ve basılı işler, sunum ve katalog tasarımı; vektörel kaynak dosyalar, baskı ve ekran formatları ile kullanım kılavuzu teslim dahil.",
        "url": "https://www.peradijital.com.tr/cozumlerimiz/grafik-tasarim/",
        "inLanguage": "tr-TR",
        "provider": { "@id": "https://www.peradijital.com.tr/#organization" },
        "areaServed": { "@type": "Country", "name": "Türkiye" },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Grafik tasarım kapsamı",
          "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Logo tasarımı" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Kurumsal kimlik ve kullanım kılavuzu" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Sosyal medya ve web banner tasarımı" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Ambalaj ve basılı iş tasarımı" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Sunum ve katalog tasarımı" } }
          ]
        }
      }
      </script>
    </div>
  </section>

  <!-- ============================================================
       BAND F — CONTACT (dark)
       ============================================================ -->
  <section class="band band--dark" id="iletisim" aria-labelledby="iletisim-title">
    <div class="band__inner split split--narrow-left">

      <div class="band__aside">
        <p class="eyebrow eyebrow--invert">İletişim</p>
        <h2 class="section-title" id="iletisim-title">Tasarım işinizi birlikte konuşalım</h2>
        <div class="contact-blocks">
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-phone"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Doğrudan arayın</h3>
              <p class="contact-block__note">Hafta içi 09:00&ndash;18:00 arası <a href="tel:<?= e(CONTACT_PHONE_HREF) ?>"><?= e(CONTACT_PHONE) ?></a>. Görüşmedeysek aynı gün içinde size döneriz.</p>
            </div>
          </div>
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-design"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Mevcut kimliğinizi inceleyelim</h3>
              <p class="contact-block__note">Elinizde logo veya kılavuz varsa formda paylaşın; yenileme mi yoksa sıfırdan kurulum mu gerektiğini yazılı olarak ileteriz.</p>
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
            <legend class="tile-options__legend">Nasıl bir iş düşünüyorsunuz?</legend>
            <div class="tile-options__grid">
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="logo" checked><span>Logo tasarımı</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="kurumsal-kimlik"><span>Kurumsal kimlik</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="sosyal-medya"><span>Sosyal medya tasarımları</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="ambalaj"><span>Ambalaj ve basılı işler</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="sunum-katalog"><span>Sunum ve katalog</span></label>
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
          <input type="hidden" name="form_source" value="grafik-tasarim">

          <button class="btn btn--accent form__submit" type="submit">Talebi Gönder</button>

          <p class="form__legal">Gerçek bir adresten yanıt veriyoruz. Otomasyon yok, bülten yok.</p>
        </form>
      </div>

    </div>
  </section>

</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
