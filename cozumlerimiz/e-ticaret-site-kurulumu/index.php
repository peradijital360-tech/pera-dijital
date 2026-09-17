<?php
$page = [
    'title'       => "E-ticaret Site Kurulumu — Pera Dijital",
    'description' => "ikas, Shopify, Ticimax ve T-Soft üzerinde e-ticaret mağazası kuruyoruz. Tema özelleştirme, ürün ve kategori yapısı, ödeme, kargo ve e-fatura entegrasyonları, içerik hazırlığı ve canlıya alma dahil.",
    'canonical'   => '/cozumlerimiz/e-ticaret-site-kurulumu/',
    'nav'         => 'svc:e-ticaret-site-kurulumu',
    'css'         => ['page.css'],
    'js'          => ['section-nav.js', 'form.js'],
    'og_type'     => 'article',
    'home'        => '/',
    'cta'         => '#iletisim',
    'body_class'  => "page-service",
    'og_desc'     => "ikas, Shopify, Ticimax ve T-Soft üzerinde mağaza kurulumu; entegrasyonlar, içerik hazırlığı ve canlıya alma dahil.",
    'tw_desc'     => "ikas, Shopify, Ticimax ve T-Soft üzerinde e-ticaret mağazası kurulumu.",
];

/* Summary panels, one per text band, keyed by the band's id. Rendered by
   assets/inc/summary.php. Facts only from this page's own copy; anything
   the page does not state is a REPLACE marker. */
$summaries = [
    'nedir' => [
        'label'  => 'Hizmet özeti',
        'blocks' => [
            ['title' => 'Kapsam', 'items' => [
                'ikas, Shopify, Ticimax veya T-Soft',
                'Tema ve arayüz özelleştirme',
                'Ürün ve kategori yapısı',
                'Ödeme, kargo ve e-fatura entegrasyonları',
                'Ürün görseli ve içerik hazırlığı',
                'Canlıya alma',
            ]],
            ['title' => 'Kimler için', 'items' => [
                'Yeni e-ticaret mağazası kuracak markalar',
                'Mağazasını yenileyecek veya platform değiştirecek markalar',
            ]],
            ['title' => 'Teslimde hazır olanlar', 'items' => [
                'Ödeme alınabiliyor',
                'Kargo etiketi basılabiliyor',
                'Fatura kesilebiliyor',
                'Akış test siparişiyle doğrulanmış',
            ]],
        ],
    ],
    'tasima' => [
        'label'  => 'Taşıma özeti',
        'blocks' => [
            ['title' => 'Taşınabilenler', 'items' => [
                'Ürünler, kategoriler ve varyantlar',
                'Fiyatlar',
                'Müşteri kayıtları',
                'Sipariş geçmişi, genellikle arşiv olarak',
            ]],
            ['title' => 'Nasıl yapılır', 'items' => [
                'Önce hedef yapı kurulur',
                'Veri o yapıya eşleştirilir',
            ]],
            ['title' => 'Standart olarak dahil', 'items' => [
                'Eski adreslerin 301 yönlendirme haritası',
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
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">E-ticaret Site Kurulumu</span></li>
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
          { "@type": "ListItem", "position": 2, "name": "E-ticaret Site Kurulumu", "item": "https://www.peradijital.com.tr/cozumlerimiz/e-ticaret-site-kurulumu/" }
        ]
      }
      </script>

      <div class="service-hero__grid">
        <div class="service-hero__content">
          <h1 class="service-hero__title" id="hero-title">
            <span class="service-hero__title-main">E-ticaret Site Kurulumu</span>
            <span class="service-hero__title-sub">Satışa hazır mağaza, entegrasyonları kurulmuş hâlde</span>
          </h1>
          <p class="service-hero__lede">Mağazayı kuruyor, temayı markaya göre özelleştiriyor, ödeme, kargo ve e-fatura tarafını bağlıyoruz. Teslimde mağaza sipariş almaya hazır oluyor.</p>
          <div class="service-hero__actions">
            <a class="btn btn--dark btn--lg" href="#iletisim">Bize Ulaşın</a>
          </div>
        </div>
        <div class="service-hero__media service-hero__media--shop">
          <!-- Store setup timeline: the five pieces of work that stand between
               an idea and a shop that can take an order — platform, product
               structure, payment, shipping, e-invoicing — pinned in order to a
               single order-flow spine that ends at the live store.

               HTML, CSS and inline SVG; no image, no script, no platform or
               bank logos (platform names are plain text), no device frame.
               NO NUMBERS: no orders, revenue or counts, and product and price
               are shapes, not values. One described image to assistive
               technology; card titles are spans, so the H1 stays the hero's
               only heading.

               Layout follows the width of this box (container query in
               page.css): cards zigzag left and right of a central spine when
               there is room, and line up down a left-hand timeline when there
               is not. -->
          <figure class="shop" role="img" aria-label="E-ticaret mağaza kurulum süreci: Shopify, ikas, Ticimax veya T-Soft üzerinde mağaza kurulur; kategori, varyant, stok, görsel ve filtreyle ürün yapısı hazırlanır; sanal POS, kart ve taksitle güvenli ödeme bağlanır; kargo entegrasyonu, kargo etiketi ve sipariş durumu kurulur; e-fatura ve e-arşiv otomatikleştirilir; mağaza responsive ve SEO’ya hazır olarak yayına alınır ve sipariş almaya başlar.">
            <div class="shop__stage" aria-hidden="true">

              <span class="shop__spine"></span>

              <!-- 1 · Store setup -->
              <div class="shop-card shop-card--1">
                <span class="shop-node"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span>
                <span class="shop-card__head">
                  <span class="shop-card__icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M4 9.5L5.5 4h13L20 9.5"/><path d="M4 9.5a2.7 2.7 0 005.3 0 2.7 2.7 0 005.4 0 2.7 2.7 0 005.3 0"/><path d="M5.5 12v8h13v-8M10 20v-4.5h4V20"/></svg></span>
                  <span class="shop-card__title">Mağaza Kurulumu</span>
                </span>
                <span class="shop-tags"><span class="shop-tag">Shopify</span><span class="shop-tag">ikas</span><span class="shop-tag">Ticimax</span><span class="shop-tag">T-Soft</span></span>
              </div>

              <!-- 2 · Product structure: one product row as shapes, then the parts -->
              <div class="shop-card shop-card--2">
                <span class="shop-node"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span>
                <span class="shop-card__head">
                  <span class="shop-card__icon"><svg width="16" height="16" focusable="false"><use href="/assets/icons/sprite.svg#icon-layers"></use></svg></span>
                  <span class="shop-card__title">Ürün Yapısı</span>
                </span>
                <span class="shop-product">
                  <span class="shop-product__img"></span>
                  <span class="shop-product__info"><span class="shop-product__name"></span><span class="shop-product__meta"></span></span>
                  <span class="shop-swatches"><span></span><span></span><span></span></span>
                </span>
                <span class="shop-tags"><span class="shop-tag">Kategori</span><span class="shop-tag">Varyant</span><span class="shop-tag">Stok</span><span class="shop-tag">Filtre</span></span>
              </div>

              <!-- 3 · Payment -->
              <div class="shop-card shop-card--3">
                <span class="shop-node"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span>
                <span class="shop-card__head">
                  <span class="shop-card__icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" focusable="false"><rect x="3" y="5.5" width="18" height="13" rx="2"/><path d="M3 10h18M7 14.5h3"/></svg></span>
                  <span class="shop-card__title">Ödeme</span>
                  <span class="shop-secure"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" focusable="false"><rect x="5" y="11" width="14" height="10" rx="2"/><path d="M8 11V8a4 4 0 018 0v3"/></svg>Güvenli</span>
                </span>
                <span class="shop-tags"><span class="shop-tag">Sanal POS</span><span class="shop-tag">Kart</span><span class="shop-tag">Taksit</span></span>
              </div>

              <!-- 4 · Shipping: an order-status line, no dates, no counts -->
              <div class="shop-card shop-card--4">
                <span class="shop-node"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span>
                <span class="shop-card__head">
                  <span class="shop-card__icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M2.5 6.5h11v10h-11zM13.5 10h4l3 3.5v3h-7"/><circle cx="6.5" cy="17.5" r="1.75"/><circle cx="17" cy="17.5" r="1.75"/></svg></span>
                  <span class="shop-card__title">Kargo</span>
                </span>
                <span class="shop-status">
                  <span class="shop-status__step is-done">Hazırlanıyor</span>
                  <span class="shop-status__step is-done">Kargoda</span>
                  <span class="shop-status__step">Teslim</span>
                </span>
                <span class="shop-tags"><span class="shop-tag">Entegrasyon</span><span class="shop-tag">Kargo etiketi</span></span>
              </div>

              <!-- 5 · E-invoice -->
              <div class="shop-card shop-card--5">
                <span class="shop-node"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span>
                <span class="shop-card__head">
                  <span class="shop-card__icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M6 3h9l4 4v14H6z"/><path d="M14.5 3v4.5H19M9 12h7M9 15.5h7M9 19h4"/></svg></span>
                  <span class="shop-card__title">E-Fatura</span>
                </span>
                <span class="shop-tags"><span class="shop-tag">Fatura</span><span class="shop-tag">E-arşiv</span><span class="shop-tag shop-tag--auto">Otomatik</span></span>
              </div>

              <!-- 6 · The end of the spine: the store is live -->
              <div class="shop-card shop-card--live">
                <span class="shop-node shop-node--live"></span>
                <span class="shop-card__head">
                  <span class="shop-live"><span class="shop-live__dot"></span>Satışa Hazır</span>
                </span>
                <span class="shop-tags"><span class="shop-tag">Sipariş Alabilir</span><span class="shop-tag">Responsive</span><span class="shop-tag">SEO Ready</span></span>
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
      <a class="section-nav__link" href="#altyapi-secimi" data-spy>Altyapı seçimi</a>
      <a class="section-nav__link" href="#tasima" data-spy>Taşıma</a>
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
        <h2 class="section-title" id="nedir-title">E-ticaret site kurulumu neleri kapsıyor?</h2>
        <p class="section-lede">Pera Dijital, ikas, Shopify, Ticimax ve T-Soft altyapılarında e-ticaret mağazası kurar. Kapsam tema ve arayüz özelleştirme, ürün ve kategori yapısının kurulması, ödeme, kargo ve e-fatura entegrasyonları, ürün görseli ve içerik hazırlığı ile canlıya almadır. Mevcut bir mağazanın yenilenmesi ve başka bir platforma taşınması da aynı kapsamda yürütülür.</p>
        <p>Kurulum, panelde birkaç ayar açmaktan ibaret değil. İşin büyük kısmı ürün yapısında: kategoriler, varyantlar ve filtreler mağaza büyüdükçe bozulmayacak şekilde kurulmazsa, sonradan düzeltmek ilk kurulumdan pahalıya geliyor. Bu yüzden ürün yapısını tasarımdan önce onaylıyoruz.</p>
        <p>Entegrasyonlar da teslimin parçası. Sanal POS, kargo firmaları ve e-fatura bağlanıyor, test siparişiyle uçtan uca doğrulanıyor. Mağaza teslim edildiğinde ödeme alınabiliyor, kargo etiketi basılabiliyor ve fatura kesilebiliyor; bunlar sonradan halledilecek işler olarak bırakılmıyor.</p>
        <p>Bu sayfanın kapsamı dışında üç iş var. Satış yapmayan kurumsal siteler ve landing page&rsquo;ler için <a href="<?= e(service_url_by_slug('kurumsal-web-tasarim')) ?>">kurumsal web tasarım hizmetimize</a> bakın. Mağaza yayına alındıktan sonra trafiği biz getiriyorsak <a href="/cozumlerimiz/performans-reklam-yonetimi/">performans reklam yönetimi sayfasında</a> anlattığımız şekilde çalışıyoruz. Logo ve kurumsal kimlik gibi bağımsız tasarım işleri ise <a href="<?= e(service_url_by_slug('grafik-tasarim')) ?>">grafik tasarım hizmetimizin</a> konusu.</p>
      </div>
      <?php $summary = $summaries['nedir']; require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/summary.php'; ?>
    </div>
  </section>

  <!-- ============================================================
       BAND B — platform selection. The comparison table sits here,
       under the heading someone comparing platforms actually lands on.
       Table moved unchanged from the corporate page.
       ============================================================ -->
  <section class="band" id="altyapi-secimi" aria-labelledby="altyapi-secimi-title">
    <div class="band__inner">
      <div class="prose">
        <h2 class="section-title" id="altyapi-secimi-title">Hangi altyapıyı seçmeliyim?</h2>
        <p class="section-lede">Seçim markanın satış modeline göre yapılır, elimizdeki alışkanlığa göre değil. Nereye sattığınız, ürün sayınız ve bayi yapınız olup olmaması kararı belirleyen üç şey.</p>
        <p>Hazır altyapılar ödeme, kargo, stok ve faturalama gibi çözülmüş işleri hazır getirir; buna karşılık tasarım ve davranış, platformun izin verdiği sınırlar içinde kalır. Aşağıdaki tablo dört altyapıyı ve elde yazılmış kod seçeneğini aynı kriterlerle karşılaştırıyor.</p>
      </div>

      <div class="compare" tabindex="0" role="region" aria-labelledby="altyapilar-tablo">
        <table class="compare__table">
          <caption id="altyapilar-tablo">E-ticaret altyapısı karşılaştırması. Platformların özellikleri ve paketleri değişebilir.</caption>
          <thead>
            <tr>
              <th scope="col">Altyapı</th>
              <th scope="col">Tasarım özgürlüğü</th>
              <th scope="col">Kod ve veri sahipliği</th>
              <th scope="col">Türkiye entegrasyonları</th>
              <th scope="col">Maliyet modeli</th>
              <th scope="col">En uygun olduğu durum</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">ikas</th>
              <td>Tema sistemi içinde özelleştirme.</td>
              <td>Ürün ve müşteri verisi dışa aktarılabilir; platform kodu sizde olmaz.</td>
              <td>Yerel ödeme, kargo ve e-fatura bağlantıları hazır gelir.</td>
              <td>Abonelik</td>
              <td>Türkiye pazarına satan, hızlı açılış isteyen mağazalar.</td>
            </tr>
            <tr>
              <th scope="row">Shopify</th>
              <td>Tema ve şablon diliyle geniş özelleştirme.</td>
              <td>Veri dışa aktarılabilir; platform kodu sizde olmaz.</td>
              <td>Yerel entegrasyonlar uygulama veya özel geliştirme ile kurulur.</td>
              <td>Abonelik + işlem payı</td>
              <td>Yurt dışına da satan, geniş uygulama ekosistemi isteyen mağazalar.</td>
            </tr>
            <tr>
              <th scope="row">Ticimax</th>
              <td>Panel ve tema ayarlarıyla özelleştirme.</td>
              <td>Veri dışa aktarılabilir; platform kodu sizde olmaz.</td>
              <td>Yerel ödeme, kargo ve e-fatura bağlantıları hazır gelir.</td>
              <td>Paket aboneliği</td>
              <td>Türkiye pazarına odaklı, paket çözüm tercih eden mağazalar.</td>
            </tr>
            <tr>
              <th scope="row">T-Soft</th>
              <td>Panel ve tema ayarlarıyla özelleştirme.</td>
              <td>Veri dışa aktarılabilir; platform kodu sizde olmaz.</td>
              <td>Yerel ödeme, kargo ve e-fatura bağlantıları hazır gelir.</td>
              <td>Paket aboneliği</td>
              <td>Bayi ve B2B senaryosu olan mağazalar.</td>
            </tr>
            <tr>
              <th scope="row">Elde yazılmış kod</th>
              <td>Sınır yok; yerleşim markanın ihtiyacına göre kurulur.</td>
              <td>Kodun tamamı sizde olur, depo devredilir.</td>
              <td>Projeye göre yazılır veya mevcut servislere bağlanır.</td>
              <td>Tek seferlik proje + hosting</td>
              <td>Tasarımın ve hızın belirleyici olduğu kurumsal siteler, landing page&rsquo;ler.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="compare__note">Platformların özellikleri, paketleri ve fiyatları zaman içinde değişiyor. Tabloyu teklif aşamasında güncel paket bilgileriyle birlikte doğruluyoruz; buradaki bilgiyi tek başına karar dayanağı olarak kullanmayın.</p>
    </div>
  </section>

  <!-- ============================================================
       BAND C — migration
       ============================================================ -->
  <section class="band" id="tasima" aria-labelledby="tasima-title">
    <div class="band__inner with-summary">
      <div class="prose">
        <h2 class="section-title" id="tasima-title">Mevcut mağazamı taşıyabilir miyim?</h2>
        <p class="section-lede">Evet. Ürünler, kategoriler, varyantlar, fiyatlar ve müşteri kayıtları çoğu platformdan dışa aktarılıp yeni altyapıya aktarılabiliyor. Taşımanın zor kısmı veriyi almak değil, eşleştirmek.</p>
        <p>Eski kategori yapısı yeni platforma birebir oturmaz; varyant mantığı da platformdan platforma değişir. Bu yüzden taşıma, kopyalama işi değil yeniden kurma işidir: önce hedef yapıyı kuruyor, sonra veriyi o yapıya eşleştiriyoruz. Sipariş geçmişi genellikle arşiv olarak taşınır.</p>
        <p>Taşımanın en kolay atlanan parçası yönlendirmeler. Eski ürün ve kategori adresleri yeni adreslere 301 ile yönlendirilmezse, arama sonuçlarında o zamana kadar kazanılmış konum kaybedilir. Yönlendirme haritası taşımanın standart parçası; ayrıca istenen bir iş değil.</p>
      </div>
      <?php $summary = $summaries['tasima']; require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/summary.php'; ?>
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
        <p class="section-lede">Altı adım, sırayla. Ürün yapısı tasarımdan önce onaylanıyor; sonradan değiştirilmesi en pahalı olan parça o.</p>
      </div>
      <ul class="work-grid" role="list">
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chat"></use></svg></span>
            <h3 class="card__title">Keşif ve platform seçimi</h3>
            <p class="card__note">Ne sattığınızı, nereye sattığınızı ve ürün yapınızı konuşuyoruz. Çıktı: seçilen altyapı, entegrasyon listesi ve yazılı kapsam.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-layers"></use></svg></span>
            <h3 class="card__title">Ürün ve kategori yapısı</h3>
            <p class="card__note">Kategoriler, varyantlar ve filtreler kuruluyor. Bu yapı sonradan değiştirilmesi en pahalı olan parça, bu yüzden tasarımdan önce onaylanıyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-design"></use></svg></span>
            <h3 class="card__title">Tema ve arayüz özelleştirme</h3>
            <p class="card__note">Seçilen altyapının teması markaya göre özelleştiriliyor; ana sayfa, kategori, ürün detay ve sepet akışı tek tek düzenleniyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-cash"></use></svg></span>
            <h3 class="card__title">Entegrasyonlar</h3>
            <p class="card__note">Sanal POS, kargo firmaları ve e-fatura bağlanıyor; varsa ERP veya muhasebe entegrasyonu bu aşamada kuruluyor ve test ediliyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-copy"></use></svg></span>
            <h3 class="card__title">İçerik ve ürün girişi</h3>
            <p class="card__note">Ürün görselleri, açıklamalar ve kategori metinleri hazırlanıp giriliyor. Veri taşınıyorsa eşleştirme bu adımda yapılıyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-cart"></use></svg></span>
            <h3 class="card__title">Test ve canlıya alma</h3>
            <p class="card__note">Test siparişiyle ödeme, kargo ve fatura akışı baştan sona doğrulanıyor. Alan adı, SSL, yönlendirmeler ve analitik kuruluyor, panel eğitimi veriliyor.</p>
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
        <h2 class="section-title section-title--centre" id="neden-biz-title">Kurulumu neden bize veriyorlar?</h2>
        <p class="section-lede">En sık duyduğumuz üç gerekçe.</p>
      </div>

      <div class="card pillars">
        <div class="pillars__grid">
          <div class="pillar">
            <h3 class="card__title">Platform bağımsız öneri</h3>
            <p class="card__note">Tek bir altyapının bayisi değiliz. Hangi platformu önerdiğimiz sizin satış modelinize göre değişiyor, aldığımız komisyona göre değil.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Entegrasyonlar teslimde çalışır</h3>
            <p class="card__note">Ödeme, kargo ve e-fatura test siparişiyle uçtan uca doğrulanıyor. Mağaza, sipariş alabilir hâlde teslim ediliyor.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Hesaplar sizin adınıza</h3>
            <p class="card__note">Platform aboneliği, alan adı, sanal POS ve kargo sözleşmeleri baştan sizin adınıza açılıyor. Veriniz ve hesaplarınız size bağlı kalıyor.</p>
          </div>
        </div>
      </div>

      <div class="duo">
        <div class="card duo__wide">
          <h3 class="card__title">Kapsama dahil olanlar</h3>
          <p class="tool-row">
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-cart"></use></svg>Mağaza kurulumu</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-design"></use></svg>Tema özelleştirme</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-layers"></use></svg>Ürün ve kategori yapısı</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-cash"></use></svg>Ödeme ve kargo</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-copy"></use></svg>İçerik hazırlığı</span>
            <span class="tool"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-globe"></use></svg>Canlıya alma</span>
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
          <summary class="faq__summary">Hangi platform hangi işletmeye uygun?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Kararı üç şey belirliyor: nereye sattığınız, ürün sayınız ve ekibinizin mağazayı ne kadar kendi yönetmek istediği. Yalnızca Türkiye’ye satıyorsanız yerel ödeme, kargo ve e-fatura bağlantılarının hazır geldiği altyapılar kurulumu kısaltır. Yurt dışına da satıyorsanız çok para birimi ve geniş uygulama ekosistemi öne çıkar. Bayi veya B2B fiyatlandırması varsa bunu modülle çözen altyapılar avantajlı. Yukarıdaki tablo bu dört seçeneği aynı kriterlerle karşılaştırıyor.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Platformun aylık ücreti ile kurulum ücreti aynı şey mi?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Hayır, iki ayrı kalem. Platform ücreti doğrudan platforma ödediğiniz abonelik; paket ve işlem payına göre değişir ve bize uğramaz. Kurulum ücreti bizim işimiz: tema ve arayüz özelleştirme, ürün ve kategori yapısı, entegrasyonlar, içerik hazırlığı ve canlıya alma. Platform ücreti mağaza yaşadığı sürece devam eder, kurulum ücreti tek seferliktir.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Mağaza ne kadar sürede yayına girer?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Süreyi kodlama değil, ürün verisi belirliyor. Ürün görselleri, açıklamaları, varyantları ve fiyatları hazırsa kurulum tahmin edilebilir ilerler. Hazır değilse en uzun aşama içerik hazırlığıdır ve bunu birlikte yaparız. Entegrasyon sayısı da etkiler: ödeme ve kargo standarttır, ERP veya muhasebe bağlantısı süreyi uzatır. Kapsam netleştiğinde takvimi tarih vererek yazarız.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Mevcut mağazamdaki ürünleri taşıyabilir miyiz?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Evet. Ürünler, kategoriler, varyantlar, fiyatlar ve müşteri kayıtları çoğu platformdan dışa aktarılıp yenisine aktarılabiliyor. Taşımada asıl iş veriyi almak değil, eşleştirmek: eski kategori yapısı yenisine birebir oturmaz ve varyant mantığı platformdan platforma değişir. Sipariş geçmişi genellikle arşiv olarak taşınır. Eski adreslerin yeni ürün sayfalarına 301 ile yönlendirilmesi de kapsamda; bu yapılmazsa arama sonuçlarındaki mevcut konum kaybedilir.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Mağazadaki verilerin sahibi kim olur?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Ürün, müşteri ve sipariş verisi size ait ve platformdan dışa aktarılabilir; ileride başka bir altyapıya geçmek isterseniz veriniz sizinle gelir. Platformun kendi yazılımı platformun lisansında kalır, sizin için yazdığımız tema ve özel geliştirmeler ise sizin. Platform hesabı, alan adı, ödeme ve kargo sözleşmeleri en baştan sizin adınıza açılır, bizim adımıza değil.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Mağaza yayına alındıktan sonra ne oluyor?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Yayına almadan sonra bir garanti dönemi var; bu süre içinde çıkan hatalar ücretsiz düzeltiliyor. Garanti, yeni özellik eklemeyi değil, teslim edilen kurulumun düzgün çalışmasını kapsıyor. Sonrasında mağazayı kendi ekibiyle yürüten müşteriler de var, aylık bakım alanlar da. Panel eğitimi teslimin parçası: ürün eklemek, kampanya tanımlamak ve sipariş yönetmek için bize dönmeniz gerekmiyor.</p>
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
          { "@type": "Question", "name": "Hangi platform hangi işletmeye uygun?", "acceptedAnswer": { "@type": "Answer", "text": "Kararı üç şey belirliyor: nereye sattığınız, ürün sayınız ve ekibinizin mağazayı ne kadar kendi yönetmek istediği. Yalnızca Türkiye’ye satıyorsanız yerel ödeme, kargo ve e-fatura bağlantılarının hazır geldiği altyapılar kurulumu kısaltır. Yurt dışına da satıyorsanız çok para birimi ve geniş uygulama ekosistemi öne çıkar. Bayi veya B2B fiyatlandırması varsa bunu modülle çözen altyapılar avantajlı. Yukarıdaki tablo bu dört seçeneği aynı kriterlerle karşılaştırıyor." } },
          { "@type": "Question", "name": "Platformun aylık ücreti ile kurulum ücreti aynı şey mi?", "acceptedAnswer": { "@type": "Answer", "text": "Hayır, iki ayrı kalem. Platform ücreti doğrudan platforma ödediğiniz abonelik; paket ve işlem payına göre değişir ve bize uğramaz. Kurulum ücreti bizim işimiz: tema ve arayüz özelleştirme, ürün ve kategori yapısı, entegrasyonlar, içerik hazırlığı ve canlıya alma. Platform ücreti mağaza yaşadığı sürece devam eder, kurulum ücreti tek seferliktir." } },
          { "@type": "Question", "name": "Mağaza ne kadar sürede yayına girer?", "acceptedAnswer": { "@type": "Answer", "text": "Süreyi kodlama değil, ürün verisi belirliyor. Ürün görselleri, açıklamaları, varyantları ve fiyatları hazırsa kurulum tahmin edilebilir ilerler. Hazır değilse en uzun aşama içerik hazırlığıdır ve bunu birlikte yaparız. Entegrasyon sayısı da etkiler: ödeme ve kargo standarttır, ERP veya muhasebe bağlantısı süreyi uzatır. Kapsam netleştiğinde takvimi tarih vererek yazarız." } },
          { "@type": "Question", "name": "Mevcut mağazamdaki ürünleri taşıyabilir miyiz?", "acceptedAnswer": { "@type": "Answer", "text": "Evet. Ürünler, kategoriler, varyantlar, fiyatlar ve müşteri kayıtları çoğu platformdan dışa aktarılıp yenisine aktarılabiliyor. Taşımada asıl iş veriyi almak değil, eşleştirmek: eski kategori yapısı yenisine birebir oturmaz ve varyant mantığı platformdan platforma değişir. Sipariş geçmişi genellikle arşiv olarak taşınır. Eski adreslerin yeni ürün sayfalarına 301 ile yönlendirilmesi de kapsamda; bu yapılmazsa arama sonuçlarındaki mevcut konum kaybedilir." } },
          { "@type": "Question", "name": "Mağazadaki verilerin sahibi kim olur?", "acceptedAnswer": { "@type": "Answer", "text": "Ürün, müşteri ve sipariş verisi size ait ve platformdan dışa aktarılabilir; ileride başka bir altyapıya geçmek isterseniz veriniz sizinle gelir. Platformun kendi yazılımı platformun lisansında kalır, sizin için yazdığımız tema ve özel geliştirmeler ise sizin. Platform hesabı, alan adı, ödeme ve kargo sözleşmeleri en baştan sizin adınıza açılır, bizim adımıza değil." } },
          { "@type": "Question", "name": "Mağaza yayına alındıktan sonra ne oluyor?", "acceptedAnswer": { "@type": "Answer", "text": "Yayına almadan sonra bir garanti dönemi var; bu süre içinde çıkan hatalar ücretsiz düzeltiliyor. Garanti, yeni özellik eklemeyi değil, teslim edilen kurulumun düzgün çalışmasını kapsıyor. Sonrasında mağazayı kendi ekibiyle yürüten müşteriler de var, aylık bakım alanlar da. Panel eğitimi teslimin parçası: ürün eklemek, kampanya tanımlamak ve sipariş yönetmek için bize dönmeniz gerekmiyor." } }
        ]
      }
      </script>

      <!-- Service schema. No offers/priceRange: nothing verified supplied. -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.peradijital.com.tr/cozumlerimiz/e-ticaret-site-kurulumu/#service",
        "name": "E-ticaret Site Kurulumu",
        "serviceType": "E-ticaret sitesi kurulumu",
        "description": "ikas, Shopify, Ticimax ve T-Soft altyapılarında e-ticaret mağazası kurulumu: tema ve arayüz özelleştirme, ürün ve kategori yapısı, ödeme, kargo ve e-fatura entegrasyonları, içerik hazırlığı, canlıya alma ve mevcut mağazanın taşınması.",
        "url": "https://www.peradijital.com.tr/cozumlerimiz/e-ticaret-site-kurulumu/",
        "inLanguage": "tr-TR",
        "provider": { "@id": "https://www.peradijital.com.tr/#organization" },
        "areaServed": { "@type": "Country", "name": "Türkiye" },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "E-ticaret site kurulumu kapsamı",
          "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "E-ticaret mağazası kurulumu" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Tema ve arayüz özelleştirme" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Ürün ve kategori yapısı kurulumu" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Ödeme, kargo ve e-fatura entegrasyonları" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Mağaza taşıma ve yenileme" } }
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
        <h2 class="section-title" id="iletisim-title">Mağazanızı birlikte konuşalım</h2>
        <div class="contact-blocks">
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-phone"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Doğrudan arayın</h3>
              <p class="contact-block__note">Hafta içi 09:00&ndash;18:00 arası <a href="tel:<?= e(CONTACT_PHONE_HREF) ?>"><?= e(CONTACT_PHONE) ?></a>. Görüşmedeysek aynı gün içinde size döneriz.</p>
            </div>
          </div>
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-cart"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Mevcut mağazanızı inceleyelim</h3>
              <p class="contact-block__note">Taşıma veya yenileme düşünüyorsanız mağaza adresini formda paylaşın; ürün yapısı ve entegrasyonlar tarafında ne durumda olduğunu yazılı olarak ileteriz.</p>
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
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="yeni-magaza" checked><span>Yeni mağaza kurulumu</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="yenileme"><span>Mevcut mağazanın yenilenmesi</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="platform-tasima"><span>Platform taşıma</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="entegrasyon"><span>Entegrasyon işleri</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="icerik"><span>Ürün ve içerik girişi</span></label>
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
          <input type="hidden" name="form_source" value="e-ticaret-site-kurulumu">

          <button class="btn btn--accent form__submit" type="submit">Talebi Gönder</button>

          <p class="form__legal">Gerçek bir adresten yanıt veriyoruz. Otomasyon yok, bülten yok.</p>
        </form>
      </div>

    </div>
  </section>

</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
