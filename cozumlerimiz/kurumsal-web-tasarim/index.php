<?php
$page = [
    'title'       => "Kurumsal Web Tasarım — Pera Dijital",
    'description' => "Kurumsal web sitelerini ve landing page’leri elde kodluyoruz; hazır tema kullanmıyoruz. Bilgi mimarisi, arayüz tasarımı, site hızı, teknik SEO, hosting ve yayına alma dahil.",
    'canonical'   => '/cozumlerimiz/kurumsal-web-tasarim/',
    'nav'         => 'svc:kurumsal-web-tasarim',
    'css'         => ['page.css'],
    'js'          => ['section-nav.js', 'form.js'],
    'og_type'     => 'article',
    'home'        => '/',
    'cta'         => '#iletisim',
    'body_class'  => "page-service",
    'og_desc'     => "Kurumsal siteler ve landing page’ler. Hazır tema yerine elde yazılmış kod; hız, teknik SEO ve yayına alma dahil.",
    'tw_desc'     => "Kurumsal siteler ve landing page’ler. Hazır tema yerine elde yazılmış kod.",
];

/* Summary panels, one per text band, keyed by the band's id. Rendered by
   assets/inc/summary.php. Facts only from this page's own copy; anything
   the page does not state is a REPLACE marker. */
$summaries = [
    'nedir' => [
        'label'  => 'Hizmet özeti',
        'blocks' => [
            ['title' => 'Kapsam', 'items' => [
                'Bilgi mimarisi',
                'Arayüz tasarımı',
                'Elde yazılmış kodla kodlama',
                'Site hızı ve teknik SEO altyapısı',
                'Hosting ve yayına alma',
            ]],
            ['title' => 'Kimler için', 'items' => [
                'Kurumsal web sitesi veya landing page isteyen markalar',
                'Ürün, ödeme ve kargo tarafı olmayan projeler',
            ]],
            ['title' => 'Teslimde hazır olanlar', 'items' => [
                'Alan adı, DNS ve SSL',
                'Hosting kurulumu',
                '301 yönlendirmeleri',
                'Arama motoru doğrulamaları',
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
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Kurumsal Web Tasarım</span></li>
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
          { "@type": "ListItem", "position": 2, "name": "Kurumsal Web Tasarım", "item": "https://www.peradijital.com.tr/cozumlerimiz/kurumsal-web-tasarim/" }
        ]
      }
      </script>

      <div class="service-hero__grid">
        <div class="service-hero__content">
          <h1 class="service-hero__title" id="hero-title">
            <span class="service-hero__title-main">Kurumsal Web Tasarım</span>
            <span class="service-hero__title-sub">Hazır tema değil, markaya göre yazılmış kod</span>
          </h1>
          <p class="service-hero__lede">Kurumsal siteleri ve landing page&rsquo;leri tasarlayıp kodluyoruz. Tasarım markanın kendi ihtiyacından çıkıyor, siteyi hazır bir şablona uydurmaktan değil.</p>
          <div class="service-hero__actions">
            <a class="btn btn--dark btn--lg" href="#iletisim">Bize Ulaşın</a>
          </div>
        </div>
        <div class="service-hero__media">
          <!-- LCP element: never lazy-loaded. -->
          <img src="/assets/img/service/kurumsal-web-tasarim/hero.webp" alt="Yer tutucu: masaüstü ve mobil site tasarımı görünümü" width="1000" height="750" fetchpriority="high" decoding="async">
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
      <a class="section-nav__link" href="#neden-kod" data-spy>Neden kod?</a>
      <a class="section-nav__link" href="#surec" data-spy>Süreç</a>
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
        <h2 class="section-title" id="nedir-title">Web tasarım hizmeti neleri kapsıyor?</h2>
        <p class="section-lede">Pera Dijital kurumsal web sitelerini ve landing page&rsquo;leri tasarlar ve kodlar. Sayfalar hazır tema satın alınmadan, elde yazılmış kodla kurulur. Kapsam bilgi mimarisi, arayüz tasarımı, kodlama, site hızı, teknik SEO altyapısı, hosting ve yayına almadır. WordPress yalnızca proje gerçekten gerektirdiğinde kullanılır; o durumda da tema projeye özel yazılır.</p>
        <p>Bir proje genellikle üç parçadan oluşur: bilgi mimarisi, arayüz tasarımı ve kodlama. Bilgi mimarisi sayfaların hangi sırayla ve hangi başlıklarla kurulacağını belirler. Tasarım bu yapının üzerine gelir. Kodlama aşamasında sayfa, tasarım dosyasından birebir çıkar; araya şablon ara katmanı girmez.</p>
        <p>Yayına alma da işin parçası. Alan adı ve DNS ayarları, SSL, hosting kurulumu, 301 yönlendirmeleri ve arama motoru doğrulamaları teslimden önce tamamlanır. Mevcut bir site yenileniyorsa eski adresler yenilerine yönlendirilir, böylece arama sonuçlarındaki mevcut konum korunur.</p>
        <p>Bu sayfanın kapsamı dışında üç iş var. Ürün, ödeme ve kargo tarafı olan projeler için <a href="<?= e(service_url_by_slug('e-ticaret-site-kurulumu')) ?>">e-ticaret sitesi kurulumu hizmetimize</a> bakın. Reklam yönetimi ayrı bir hizmet: kampanyaları da biz yürütüyorsak <a href="/cozumlerimiz/performans-reklam-yonetimi/">performans reklam yönetimi sayfasında</a> anlattığımız şekilde çalışıyoruz. Logo, kurumsal kimlik ve basılı işler gibi bağımsız tasarım işleri ise <a href="<?= e(service_url_by_slug('grafik-tasarim')) ?>">grafik tasarım hizmetimizin</a> konusu.</p>
      </div>
      <?php $summary = $summaries['nedir']; require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/summary.php'; ?>
    </div>
  </section>

  <!-- ============================================================
       BAND B — the positioning. Answer first, no platform named as
       the villain: the comparison is theme-versus-code, not vendors.
       ============================================================ -->
  <section class="band" id="neden-kod" aria-labelledby="neden-kod-title">
    <div class="band__inner split">
      <div class="band__aside band__aside--sticky">
        <p class="eyebrow">Yaklaşımımız</p>
        <h2 class="section-title" id="neden-kod-title">Hazır tema yerine neden kod yazıyoruz?</h2>
        <p class="section-lede">Satın alınmış bir temayı markaya uydurmak yerine sayfayı baştan yazıyoruz. Fark dört yerde ortaya çıkıyor.</p>
        <a class="btn btn--accent" href="#iletisim">Projenizi Konuşalım</a>
      </div>
      <ul class="card-grid-2" role="list">
        <li class="card">
          <h3 class="card__title">Sayfa daha hızlı açılıyor</h3>
          <p class="card__note">Hazır temalar her müşterinin ihtiyacını karşılamak için kurulur, bu yüzden kullanılmayan kodu da taşırlar. Yalnızca o sayfanın ihtiyaç duyduğu kod yazıldığında indirilen dosya küçülür ve sayfa daha erken etkileşime hazır olur.</p>
        </li>
        <li class="card">
          <h3 class="card__title">Eklenti yığını oluşmuyor</h3>
          <p class="card__note">Temanın yapamadığı her iş için bir eklenti eklendiğinde site, birbirinden habersiz parçaların toplamına dönüşür. Bu parçalar birbirini yavaşlatır ve her güncelleme yeni bir kırılma riski taşır. İhtiyaç doğrudan yazıldığında bu zincir kurulmaz.</p>
        </li>
        <li class="card">
          <h3 class="card__title">Tasarım şablona benzemiyor</h3>
          <p class="card__note">Tema seçilerek başlanan projede tasarım, temanın izin verdiği yerleşimin içine sığdırılır. Kod yazılarak başlandığında sıra tersine döner: önce markanın ihtiyacı olan yerleşim tasarlanır, kod ona göre yazılır.</p>
        </li>
        <li class="card">
          <h3 class="card__title">Bağımlılık azalıyor</h3>
          <p class="card__note">Elde yazılmış bir sitede kodun tamamı sizde olur; lisans yenilenmediği veya bir eklenti geliştirilmeyi bıraktığı için sitenin çalışmaz hâle gelmesi söz konusu olmaz. Bakımı biz yapmasak da site çalışmaya devam eder.</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- ============================================================
       BAND D — process (dark, light cards)
       ============================================================ -->
  <section class="band band--dark" id="surec" aria-labelledby="surec-title">
    <div class="band__inner split split--wide-right">
      <div class="band__aside">
        <p class="eyebrow eyebrow--invert">Süreç</p>
        <h2 class="section-title" id="surec-title">Süreç nasıl işliyor?</h2>
        <p class="section-lede">Altı adım, sırayla. Her adımın sonunda onayınızı alıp bir sonrakine geçiyoruz; böylece tasarım bittikten sonra kapsam sürprizi çıkmıyor.</p>
      </div>
      <ul class="work-grid" role="list">
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chat"></use></svg></span>
            <h3 class="card__title">Keşif ve kapsam</h3>
            <p class="card__note">Ne sattığınızı, kime sattığınızı ve sitenin hangi işi yapması gerektiğini konuşuyoruz. Çıktı: sayfa listesi, teknik gereksinimler ve yazılı kapsam.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-layers"></use></svg></span>
            <h3 class="card__title">Bilgi mimarisi</h3>
            <p class="card__note">Sayfaların sırası, menü yapısı ve her sayfanın hangi soruyu yanıtladığı belirleniyor. Tasarıma başlamadan önce bu yapıyı onaylıyorsunuz.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-design"></use></svg></span>
            <h3 class="card__title">Arayüz tasarımı</h3>
            <p class="card__note">Masaüstü ve mobil tasarımlar çiziliyor. Şablon üzerine renk değiştirmek yerine, tipografi ve yerleşim markanın kendi kimliğinden çıkarılıyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-data"></use></svg></span>
            <h3 class="card__title">Kodlama</h3>
            <p class="card__note">Sayfalar elde yazılıyor. Tasarım dosyasındaki yerleşim birebir koda geçiyor, araya şablon ara katmanı girmiyor. İçerik yönetimi bu aşamada bağlanıyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-gauge"></use></svg></span>
            <h3 class="card__title">Hız ve teknik SEO</h3>
            <p class="card__note">Görsel boyutları, önbellekleme, başlık yapısı, site haritası ve yapılandırılmış veri yayına almadan önce kuruluyor; sonradan eklenen bir düzeltme olarak değil.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-globe"></use></svg></span>
            <h3 class="card__title">Yayına alma ve devir</h3>
            <p class="card__note">Alan adı, SSL, yönlendirmeler ve analitik kuruluyor. Sonrasında panel eğitimi veriliyor ve erişimler size devrediliyor.</p>
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
        <h2 class="section-title section-title--centre" id="neden-biz-title">Projeyi neden bize veriyorlar?</h2>
        <p class="section-lede">En sık duyduğumuz üç gerekçe.</p>
      </div>

      <div class="card pillars">
        <div class="pillars__grid">
          <div class="pillar">
            <h3 class="card__title">Tasarım ve kod aynı ekipte</h3>
            <p class="card__note">Tasarımı yapan ve kodu yazan aynı ekip olduğu için tasarım dosyasıyla yayına giren sayfa arasında fark oluşmuyor.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Kod sizde kalıyor</h3>
            <p class="card__note">Proje bittiğinde kodun tamamı ve tüm erişimler devrediliyor. Devam etmek zorunda olmadığınız bir ilişki kurmuyoruz.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Reklamı da kuran ekip</h3>
            <p class="card__note">Sayfanın hangi trafikle karşılaşacağını bilerek tasarlıyoruz; ölçümleme ilk günden doğru kuruluyor.</p>
          </div>
        </div>
      </div>

      <div class="duo">
        <div class="card duo__wide">
          <h3 class="card__title">Kapsama dahil olanlar</h3>
          <p class="tool-row">
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-strategy"></use></svg>Bilgi mimarisi</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-design"></use></svg>Arayüz tasarımı</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-layers"></use></svg>Kodlama</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-gauge"></use></svg>Site hızı</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-data"></use></svg>Teknik SEO</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-globe"></use></svg>Yayına alma</span>
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
          <summary class="faq__summary">Kurumsal bir web sitesi ne kadara mal olur, fiyatı ne belirler?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Fiyat sayfa sayısıyla değil, özel tasarlanan şablon sayısıyla belirleniyor. On sayfalık bir sitede çoğu zaman dört veya beş farklı şablon vardır; geri kalan sayfalar aynı şablonun içeriği değişmiş hâlidir. Fiyatı belirleyen diğer üç şey: çok dilli olup olmadığı, form ve CRM gibi entegrasyonlar ve metin ile görsellerin hazır olup olmadığı. Teklif, kapsam yazıya döküldükten sonra tek kalem veriliyor; saatlik çalışmıyoruz.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Kurumsal site projesi ne kadar sürede yayına girer?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Süreyi en çok iki şey uzatıyor: metinlerin geç gelmesi ve tasarım onaylarının beklemede kalması. Kodlama tarafı tahmin edilebilir; belirsizlik içerikte. İçerik hazırsa süreç bilgi mimarisi onayından sonra kesintisiz ilerliyor. Kapsam netleştiğinde takvimi tarih vererek yazıyor ve onayınıza sunuyoruz.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Sitenin ve kodun sahibi kim olur?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Kodun tamamı size ait olur ve proje sonunda depo erişimiyle birlikte devredilir. Alan adı, hosting ve panel hesapları en baştan sizin adınıza açılır, bizim adımıza değil. WordPress kullanılan projelerde de tema satın alınmadığı için, size teslim edilen tema sizin mülkünüz; lisans yenilemeye bağlı çalışan bir parça bırakmıyoruz.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Site yayına alındıktan sonra ne oluyor?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Yayına almadan sonra bir garanti dönemi var; bu süre içinde çıkan hatalar ücretsiz düzeltiliyor. Garanti, yeni sayfa veya yeni özellik eklemeyi değil, teslim edilen işin düzgün çalışmasını kapsıyor. Sonrasında bakım isteğe bağlı: aylık bakım alan müşteriler de var, siteyi kendi ekibiyle yürüten müşteriler de.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Sayfaları ve içerikleri kendimiz güncelleyebilir miyiz?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Evet, ve bu varsayılan kurgu. Metin, görsel, blog ve haber içerikleri bir panelden yönetiliyor; her güncelleme için bize dönmeniz gerekmiyor. Teslimde ekibinize panel eğitimi veriyoruz ve sık yapılan işlemleri anlatan bir kılavuz bırakıyoruz. Yalnızca yeni bir şablon gerektiren yerleşim değişiklikleri kod tarafında kalıyor.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Başlamak için sizden ne istememiz gerekiyor?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Dört şey: logo ve varsa marka kılavuzu, sayfa metinleri, kullanılacak görseller, alan adı ve DNS erişimi. Metin ve görsel hazır değilse bu aşamada birlikte çıkarıyoruz; eksik içerikle başlanan projeler tasarım aşamasında değil, yayına alma aşamasında tıkanıyor. Gizlilik ve KVKK metinleri sizin hukuk tarafınızdan geliyor.</p>
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
          { "@type": "Question", "name": "Kurumsal bir web sitesi ne kadara mal olur, fiyatı ne belirler?", "acceptedAnswer": { "@type": "Answer", "text": "Fiyat sayfa sayısıyla değil, özel tasarlanan şablon sayısıyla belirleniyor. On sayfalık bir sitede çoğu zaman dört veya beş farklı şablon vardır; geri kalan sayfalar aynı şablonun içeriği değişmiş hâlidir. Fiyatı belirleyen diğer üç şey: çok dilli olup olmadığı, form ve CRM gibi entegrasyonlar ve metin ile görsellerin hazır olup olmadığı. Teklif, kapsam yazıya döküldükten sonra tek kalem veriliyor; saatlik çalışmıyoruz." } },
          { "@type": "Question", "name": "Kurumsal site projesi ne kadar sürede yayına girer?", "acceptedAnswer": { "@type": "Answer", "text": "Süreyi en çok iki şey uzatıyor: metinlerin geç gelmesi ve tasarım onaylarının beklemede kalması. Kodlama tarafı tahmin edilebilir; belirsizlik içerikte. İçerik hazırsa süreç bilgi mimarisi onayından sonra kesintisiz ilerliyor. Kapsam netleştiğinde takvimi tarih vererek yazıyor ve onayınıza sunuyoruz." } },
          { "@type": "Question", "name": "Sitenin ve kodun sahibi kim olur?", "acceptedAnswer": { "@type": "Answer", "text": "Kodun tamamı size ait olur ve proje sonunda depo erişimiyle birlikte devredilir. Alan adı, hosting ve panel hesapları en baştan sizin adınıza açılır, bizim adımıza değil. WordPress kullanılan projelerde de tema satın alınmadığı için, size teslim edilen tema sizin mülkünüz; lisans yenilemeye bağlı çalışan bir parça bırakmıyoruz." } },
          { "@type": "Question", "name": "Site yayına alındıktan sonra ne oluyor?", "acceptedAnswer": { "@type": "Answer", "text": "Yayına almadan sonra bir garanti dönemi var; bu süre içinde çıkan hatalar ücretsiz düzeltiliyor. Garanti, yeni sayfa veya yeni özellik eklemeyi değil, teslim edilen işin düzgün çalışmasını kapsıyor. Sonrasında bakım isteğe bağlı: aylık bakım alan müşteriler de var, siteyi kendi ekibiyle yürüten müşteriler de." } },
          { "@type": "Question", "name": "Sayfaları ve içerikleri kendimiz güncelleyebilir miyiz?", "acceptedAnswer": { "@type": "Answer", "text": "Evet, ve bu varsayılan kurgu. Metin, görsel, blog ve haber içerikleri bir panelden yönetiliyor; her güncelleme için bize dönmeniz gerekmiyor. Teslimde ekibinize panel eğitimi veriyoruz ve sık yapılan işlemleri anlatan bir kılavuz bırakıyoruz. Yalnızca yeni bir şablon gerektiren yerleşim değişiklikleri kod tarafında kalıyor." } },
          { "@type": "Question", "name": "Başlamak için sizden ne istememiz gerekiyor?", "acceptedAnswer": { "@type": "Answer", "text": "Dört şey: logo ve varsa marka kılavuzu, sayfa metinleri, kullanılacak görseller, alan adı ve DNS erişimi. Metin ve görsel hazır değilse bu aşamada birlikte çıkarıyoruz; eksik içerikle başlanan projeler tasarım aşamasında değil, yayına alma aşamasında tıkanıyor. Gizlilik ve KVKK metinleri sizin hukuk tarafınızdan geliyor." } }
        ]
      }
      </script>

      <!-- Service schema. The performans page has none; this is new here.
           No offers/priceRange: nothing verified has been supplied. -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.peradijital.com.tr/cozumlerimiz/kurumsal-web-tasarim/#service",
        "name": "Kurumsal Web Tasarım",
        "serviceType": "Kurumsal web sitesi tasarımı ve geliştirme",
        "description": "Kurumsal web sitelerinin ve landing page'lerin bilgi mimarisi, arayüz tasarımı ve elde yazılmış kodla geliştirilmesi; site hızı, teknik SEO altyapısı, hosting ve yayına alma kurulumu dahil.",
        "url": "https://www.peradijital.com.tr/cozumlerimiz/kurumsal-web-tasarim/",
        "inLanguage": "tr-TR",
        "provider": { "@id": "https://www.peradijital.com.tr/#organization" },
        "areaServed": { "@type": "Country", "name": "Türkiye" },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Kurumsal web tasarım kapsamı",
          "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Kurumsal web sitesi tasarımı ve kodlaması" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Bilgi mimarisi ve arayüz tasarımı" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Landing page tasarımı" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Site hızı ve teknik SEO altyapısı" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Hosting ve yayına alma kurulumu" } }
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
        <h2 class="section-title" id="iletisim-title">Projenizi birlikte konuşalım</h2>
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
              <h3 class="contact-block__title">Mevcut sitenizi inceleyelim</h3>
              <p class="contact-block__note">Yenileme düşünüyorsanız adresi formda paylaşın; hız, yapı ve teknik SEO tarafında ne durumda olduğunu yazılı olarak ileteriz.</p>
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
            <legend class="tile-options__legend">Nasıl bir iş düşünüyorsunuz?</legend>
            <div class="tile-options__grid">
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="kurumsal-site" checked><span>Kurumsal web sitesi</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="landing-page"><span>Landing page</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="yenileme"><span>Mevcut sitenin yenilenmesi</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="hiz-teknik-seo"><span>Hız ve teknik SEO</span></label>
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
          <input type="hidden" name="form_source" value="kurumsal-web-tasarim">

          <button class="btn btn--accent form__submit" type="submit">Talebi Gönder</button>

          <p class="form__legal">Gerçek bir adresten yanıt veriyoruz. Otomasyon yok, bülten yok.</p>
        </form>
      </div>

    </div>
  </section>

</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
