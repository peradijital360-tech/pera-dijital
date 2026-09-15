<?php
$page = [
    'title'       => "Lead Generation — Pera Dijital",
    'description' => "İnşaat, gayrimenkul ve hizmet işletmeleri için potansiyel müşteri kaydı kampanyaları: landing page, form, arama ve WhatsApp takibi, CRM aktarımı. Nitelikli kayıt başına maliyetle ölçülür.",
    'canonical'   => '/cozumlerimiz/lead-generation/',
    'nav'         => 'svc:lead-generation',
    'css'         => ['page.css'],
    'js'          => ['section-nav.js'],
    'og_type'     => 'article',
    'home'        => '/',
    'cta'         => '#iletisim',
    'body_class'  => "page-service",
    'og_desc'     => "İnşaat, gayrimenkul ve hizmet işletmeleri için potansiyel müşteri kaydı. Sayfayı da biz kodluyoruz; kayıt sayısını değil nitelikli kaydı ölçüyoruz.",
    'tw_desc'     => "Form, telefon ve WhatsApp kaydı toplayan kampanyalar ve landing page’ler.",
];

/* Summary panels, one per text band, keyed by the band's id. Rendered by
   assets/inc/summary.php. Facts only from this page's own copy; anything
   the page does not state is a REPLACE marker. */
$summaries = [
    'nedir' => [
        'label'  => 'Hizmet özeti',
        'blocks' => [
            ['title' => 'Kapsam', 'items' => [
                'Kampanya kurulumu',
                'Landing page tasarımı ve testi',
                'Form ve arama takibi',
                'WhatsApp ve telefon yönlendirmesi',
                'Kayıt kalitesinin ölçülmesi',
                'CRM’e veya e-postaya aktarım',
                'Dönemsel raporlama',
            ]],
            ['title' => 'Kimler için', 'items' => [
                'İnşaat ve gayrimenkul firmaları',
                'Klinikler, hukuk büroları ve eğitim kurumları',
                'Danışmanlar ve B2B hizmet sağlayıcıları',
            ]],
            ['title' => 'Nasıl ölçülür', 'items' => [
                'Nitelikli kayıt başına maliyet',
                'Nitelik, satış ekibinin işaretlemesiyle belirlenir',
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
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Lead Generation</span></li>
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
          { "@type": "ListItem", "position": 2, "name": "Lead Generation", "item": "https://www.peradijital.com.tr/cozumlerimiz/lead-generation/" }
        ]
      }
      </script>

      <div class="service-hero__content">
        <h1 class="service-hero__title" id="hero-title">
          <span class="service-hero__title-main">Lead Generation</span>
          <span class="service-hero__title-sub">Satış ekibinizin arayabileceği potansiyel müşteri kayıtları</span>
        </h1>
        <p class="service-hero__lede">Form, telefon ve WhatsApp üzerinden kayıt toplayan kampanyaları ve bu kampanyaların yönlendirdiği sayfayı birlikte kuruyoruz. Saydığımız şey gelen kayıt değil, görüşmeye dönen kayıt.</p>
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
      <a class="section-nav__link" href="#nedir" data-spy>Nedir?</a>
      <a class="section-nav__link" href="#insaat-gayrimenkul" data-spy>İnşaat ve gayrimenkul</a>
      <a class="section-nav__link" href="#hizmet-sektoru" data-spy>Hizmet sektörü</a>
      <a class="section-nav__link" href="#kalite" data-spy>Kayıt kalitesi</a>
      <a class="section-nav__link" href="#surec" data-spy>Süreç</a>
      <a class="section-nav__link" href="#sss" data-spy>S.S.S.</a>
      <a class="section-nav__link section-nav__link--accent" href="#iletisim">İletişime Geçin</a>
    </div>
  </nav>

  <!-- ============================================================
       BAND A — the definition block. Factual, no adjectives, 40-60 words.
       The boundary with Performans Reklam Yönetimi is drawn HERE and the
       page links to it exactly once, from this block.
       ============================================================ -->
  <section class="band" id="nedir" aria-labelledby="nedir-title">
    <div class="band__inner with-summary">
      <div class="prose">
        <h2 class="section-title" id="nedir-title">Lead generation nedir?</h2>
        <p class="section-lede">Lead generation, reklam kampanyalarıyla potansiyel müşteri kaydı toplamaktır: form, telefon araması veya WhatsApp mesajı. Uzun karar süreçli, yüksek bedelli işler için kurulur ve nitelikli kayıt başına maliyetle ölçülür. Satın alma ve ciro hedefleyen, ROAS ile ölçülen kampanyalar <a href="<?= e(service_url_by_slug('performans-reklam-yonetimi')) ?>">performans reklam yönetimi</a> hizmetinin konusudur.</p>
        <p>Bu hizmet iki grup için kuruldu. Birincisi konut ve ticari proje satan inşaat ve gayrimenkul firmaları. İkincisi satışı bir görüşmeyle başlayan hizmet işletmeleri: klinikler, hukuk büroları, eğitim kurumları, danışmanlar ve B2B hizmet sağlayıcıları. Ortak noktaları, reklamı gören kişinin o gün satın almaması. Önce bilgi istiyor, sonra biriyle konuşuyor, kararı daha sonra veriyor.</p>
        <p>Kampanyanın yönlendirdiği sayfayı da biz yapıyoruz. Trafiği markanın zaten var olan sitesine göndermiyoruz; her kampanya için ayrı bir landing page tasarlayıp elde kodluyoruz. Kurumsal bir site markayı bütünüyle anlatmak için kurulur, landing page ise ziyaretçiden tek bir şey istemek için: formu doldurması, araması ya da yazması. Siteyi bütünüyle yeniden kurmak gerekiyorsa o iş <a href="<?= e(service_url_by_slug('kurumsal-web-tasarim')) ?>">kurumsal web tasarım hizmetinin</a> kapsamında.</p>
        <p>Kapsamda kampanya kurulumu, landing page tasarımı ve testi, form ve arama takibi, WhatsApp ve telefon yönlendirmesi, kayıt kalitesinin ölçülmesi, kayıtların CRM’e veya e-postaya aktarılması ve dönemsel raporlama var.</p>
      </div>
      <?php $summary = $summaries['nedir']; require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/summary.php'; ?>
    </div>
  </section>

  <!-- ============================================================
       BAND B — construction and real estate. Written as its own funnel:
       months-long, off-plan, the sale closes in a sales office. The table
       is the funnel, not a feature list. Must NOT read like Band C.
       ============================================================ -->
  <section class="band" id="insaat-gayrimenkul" aria-labelledby="insaat-gayrimenkul-title">
    <div class="band__inner">
      <div class="prose">
        <h2 class="section-title" id="insaat-gayrimenkul-title">İnşaat ve gayrimenkul projelerinde nasıl çalışıyor?</h2>
        <p class="section-lede">Konut projesinde kampanyanın işi daire satmak değil, satış ofisine ziyaret getirmek. Karar aylar sürebildiği için kampanya satışla değil, ziyarete dönen kayıtla değerlendiriliyor.</p>
        <p>Topraktan satışta alıcı henüz var olmayan bir daireyi alıyor. İlk sorusu çoğu zaman fiyat olsa da asıl itirazları başka yerde: firma bu projeyi zamanında teslim edecek mi, daha önce ne teslim etti, ödeme planı nasıl, konut kredisi kullanılabiliyor mu, tapu ne zaman veriliyor. Landing page bu soruları formdan önce yanıtlamıyorsa kayıt gelir ama ilk telefonda kapanır.</p>
        <p>Bu yüzden sayfa proje bazında kuruluyor: daire tipleri ve kat planları, konum ve ulaşım, teslim takvimi, firmanın tamamlanmış projeleri ve ödeme seçenekleri aynı sayfada. Fiyatın yazılıp yazılmayacağı ayrı bir karar. Fiyat aralığı yazan sayfa daha az ama daha hazır kayıt getirir; fiyatı gizleyen sayfa daha çok kayıt getirir ve ayıklamayı satış ekibine bırakır. Hangisinin seçileceğini satış ekibinizin kaç kayda dönebildiği belirliyor.</p>
        <p>Aynı projede tek bir alıcı da yok. Oturmak için ev arayan aile ile yatırım için bakan kişi aynı cümleye ikna olmuyor; ikisi ayrı kampanya ve çoğu zaman ayrı sayfa demek. Karar uzun sürdüğü için sayfayı bir kez görüp çıkan kişiye aylar boyunca yeniden ulaşmak da kampanyanın parçası: şantiyedeki ilerleme, açılan örnek daire, yeni blok satışı.</p>
      </div>

      <div class="compare" tabindex="0" role="region" aria-labelledby="insaat-tablo">
        <table class="compare__table">
          <caption id="insaat-tablo">Konut projesinde alıcının aşamaları ve her aşamada sayfanın ile kampanyanın yapması gereken iş.</caption>
          <thead>
            <tr>
              <th scope="col">Aşama</th>
              <th scope="col">Alıcının sorusu</th>
              <th scope="col">Sayfanın ve kampanyanın işi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">İlk temas</th>
              <td>Proje ne, nerede, kime göre?</td>
              <td>Konumu, daire tiplerini ve projenin kimin için olduğunu ilk ekranda göstermek.</td>
            </tr>
            <tr>
              <th scope="row">Bilgi talebi</th>
              <td>Fiyat ne, hangi daire tipi bana uyar, ödeme planı var mı?</td>
              <td>Formda daire tipini ve alım amacını sormak; kaydı satış ekibine bu bilgiyle ulaştırmak.</td>
            </tr>
            <tr>
              <th scope="row">Güven</th>
              <td>Bu firma teslim eder mi?</td>
              <td>Tamamlanmış projeleri, teslim takvimini ve şantiyenin güncel durumunu sayfada göstermek.</td>
            </tr>
            <tr>
              <th scope="row">Ziyaret</th>
              <td>Örnek daireyi, şantiyeyi görebilir miyim?</td>
              <td>Satış ofisi randevusunu kolaylaştırmak; telefon ve WhatsApp’ı doğrudan satış ekibine bağlamak.</td>
            </tr>
            <tr>
              <th scope="row">Karar</th>
              <td>Kredi çıkar mı, şimdi mi almalıyım?</td>
              <td>Kayıt satış ekibinde; kampanya ziyaret etmiş ama karar vermemiş kişiye yeni gelişmeleri hatırlatır.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="compare__note">Kayıttan satışa geçen süre ve kayıtların ziyarete dönüşme oranı projeye, fiyat bandına ve bölgeye göre çok değişiyor: <strong>[REPLACE &mdash; kendi projelerinizden ölçülen aralık]</strong>. Bu alanı ilk kampanyaların verisiyle doldurun; başka projeden taşınan oran bu projeyi anlatmaz.</p>
    </div>
  </section>

  <!-- ============================================================
       BAND C — service businesses. Short cycle, the person IS the product,
       response speed decides. One card per sub-sector because their
       constraints genuinely differ (health ad rules, the bar's advertising
       ban, enrolment seasons, multi-person B2B decisions).
       ============================================================ -->
  <section class="band" id="hizmet-sektoru" aria-labelledby="hizmet-sektoru-title">
    <div class="band__inner split">
      <div class="band__aside band__aside--sticky">
        <p class="eyebrow">Hizmet işletmeleri</p>
        <h2 class="section-title" id="hizmet-sektoru-title">Hizmet sektöründe nasıl çalışıyor?</h2>
        <p class="section-lede">Hizmet işletmesinde kampanyanın getirdiği şey bir görüşme talebi. Satışı bir kişi yapıyor: doktor, eğitim danışmanı, şirket ortağı. Bu yüzden kayda ne kadar hızlı dönüldüğü, reklamın kendisi kadar sonucu belirliyor.</p>
        <a class="btn btn--accent" href="#iletisim">Sektörünüzü Konuşalım</a>
      </div>
      <ul class="card-grid-2" role="list">
        <li class="card">
          <h3 class="card__title">Klinikler</h3>
          <p class="card__note">Kayıt bir muayene ya da ön görüşme randevusu. İtiraz fiyattan çok güvenle ilgili: hangi doktor, süreç nasıl, sonrasında ne oluyor. Aynı gün dönülmeyen kayıt başka bir kliniğe gidebildiği için WhatsApp ve telefon yönlendirmesi formdan önce kuruluyor. Sağlık hizmeti reklamları yasal düzenlemelere ve platform kurallarına tabi; metinler buna göre yazılıyor.</p>
        </li>
        <li class="card">
          <h3 class="card__title">Hukuk büroları</h3>
          <!-- İÇERİK: Avukatlık mesleğinde reklam yasağı var. Bu kartın
               kapsamı yayından önce bir hukukçuyla doğrulanmalı. -->
          <p class="card__note">Avukatlık mesleğinde reklam, Avukatlık Kanunu ve Türkiye Barolar Birliği meslek kurallarıyla sınırlandırılmış. Bu yüzden hukuk büroları için ücretli kampanya önermiyoruz. Çalışma meslek kurallarına uygun bilgilendirici sayfalar ve başvuruyu kolaylaştıran iletişim kanalları üzerine kuruluyor; kapsamın sınırı işe başlamadan netleştiriliyor.</p>
        </li>
        <li class="card">
          <h3 class="card__title">Eğitim kurumları</h3>
          <p class="card__note">Talep dönemsel: kayıt dönemi yaklaştıkça artıyor, dönem kapanınca düşüyor. Kararı çoğu zaman öğrenci değil veli veriyor ve kayıt bir tanıtım günü, deneme dersi ya da kurum ziyaretiyle kesinleşiyor. Kampanya takvimi kayıt dönemine göre kuruluyor; dönem dışında bütçe küçülüyor ama sayfa yayında kalıyor.</p>
        </li>
        <li class="card">
          <h3 class="card__title">Danışmanlar ve B2B hizmet sağlayıcıları</h3>
          <p class="card__note">Karar tek kişinin değil. Formu dolduran çoğu zaman araştırmayı yapan çalışan, onayı veren başka biri. Formda şirket adı, sektör ve ölçek soruluyor: her yeni alan kayıt sayısını düşürüyor ama satış ekibinin uygun olmayan bir şirketle görüşmeye harcayacağı saati de.</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- ============================================================
       BAND D — lead quality. The honest part: volume is easy, quality is
       hard. No rates, no cost-per-lead figures, no sector averages.
       ============================================================ -->
  <section class="band" id="kalite" aria-labelledby="kalite-title">
    <div class="band__inner">
      <div class="centered-head">
        <p class="eyebrow">Kayıt kalitesi</p>
        <h2 class="section-title section-title--centre" id="kalite-title">Gelen kayıtların kalitesini nasıl ölçüyoruz?</h2>
        <p class="section-lede">Kayıt başına maliyetle değil, nitelikli kayıt başına maliyetle. Nitelikli kaydın tanımını kampanya başlamadan sizinle birlikte yazıyor, her dönem satış ekibinizin işaretlemesiyle sayıyoruz.</p>
      </div>

      <div class="prose prose--centered">
        <p>Neredeyse her müşterinin ilk yanlış anladığı şey şu: kayıt sayısını artırmak kolay. Formu kısaltırsınız, fiyatı gizlersiniz, platformun hazır formunu açarsınız ve kayıt sayısı artar. Zor olan, gelen kişinin telefonu açması, konuştuğunuz hizmetle gerçekten ilgilenmesi ve karar verebilecek durumda olması.</p>
        <p>Ucuz ama telefonu hiç açmayan bir kayıt, pahalı ama görüşmeye gelen bir kayıttan daha pahalıya mal olur. Ödediğiniz yalnızca reklam bedeli değil; satış ekibinizin o numarayı aradığı, mesaj attığı ve yeniden aradığı saatler de. Kayıt başına maliyeti düşüren her değişikliği bu yüzden nitelikli kayıt oranıyla birlikte okuyoruz. Biri düşerken diğeri de düşüyorsa bu bir iyileşme değil.</p>
        <p>Ölçüm üç yerden besleniyor. Form, arama ve WhatsApp kayıtları hangi kampanyadan ve hangi sayfadan geldiği bilgisiyle kaydediliyor. Satış ekibiniz her kaydı basit bir durumla işaretliyor: ulaşılamadı, ilgisiz, görüşüldü, teklif verildi, satışa döndü. Bu işaretler, platformun izin verdiği yerlerde reklam hesabına geri gönderiliyor; böylece kampanya kayıt sayısına göre değil, görüşmeye dönen kayda göre öğreniyor.</p>
      </div>

      <div class="card pillars">
        <div class="pillars__grid">
          <div class="pillar">
            <h3 class="card__title">Tanım baştan yazılı</h3>
            <p class="card__note">Hangi kaydın nitelikli sayılacağı sektöre göre değişiyor. Bütçe, bölge, zamanlama gibi ölçütler kampanyadan önce birlikte yazılıyor ve dönem ortasında değiştirilmiyor.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Her kaydın kaynağı belli</h3>
            <p class="card__note">Kayıt formdan, aramadan ya da WhatsApp’tan gelmiş olsun, hangi kampanyadan ve hangi sayfadan geldiği kayıtla birlikte saklanıyor.</p>
          </div>
          <div class="pillar">
            <h3 class="card__title">Son söz satış ekibinde</h3>
            <p class="card__note">Kaydın iyi olup olmadığına reklam paneli değil, o kişiyle konuşan satış ekibi karar veriyor. Rapor bu işaretlemeden çıkıyor.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       BAND E — process (dark, light cards)
       ============================================================ -->
  <section class="band band--dark" id="surec" aria-labelledby="surec-title">
    <div class="band__inner split split--wide-right">
      <div class="band__aside">
        <p class="eyebrow eyebrow--invert">Süreç</p>
        <h2 class="section-title" id="surec-title">Süreç nasıl işliyor?</h2>
        <p class="section-lede">Altı adım, sırayla. Kampanya dördüncü adımda açılıyor; ilk üçü tamamlanmadan gelen kayıtların hangisinin işe yaradığını bilmenin yolu yok.</p>
      </div>
      <ul class="work-grid" role="list">
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-people"></use></svg></span>
            <h3 class="card__title">Nitelik tanımı</h3>
            <p class="card__note">Satış ekibinizle bir görüşme: kimi arıyorsunuz, kimi aramak istemiyorsunuz, bir kayda ne kadar sürede dönebiliyorsunuz. Çıktı, yazılı nitelikli kayıt tanımı.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-layers"></use></svg></span>
            <h3 class="card__title">Landing page</h3>
            <p class="card__note">Tek bir teklif için tek bir sayfa tasarlanıp kodlanıyor. Form alanları nitelik tanımına göre seçiliyor; telefon ve WhatsApp düğmeleri aynı sayfada.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-data"></use></svg></span>
            <h3 class="card__title">Takip kurulumu</h3>
            <p class="card__note">Form gönderimi, arama ve WhatsApp tıklaması ayrı ayrı ölçülüyor. Yayından önce her kanaldan test kaydı gönderilip doğru yere düştüğü kontrol ediliyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-strategy"></use></svg></span>
            <h3 class="card__title">Kampanya kurulumu</h3>
            <p class="card__note">Hedef kitle, bölge, bütçe ve reklam metinleri nitelik tanımına göre kuruluyor. Farklı alıcı grupları ayrı kampanyada tutuluyor ki hangisinin işe yaradığı görülebilsin.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-copy"></use></svg></span>
            <h3 class="card__title">Kayıtların aktarımı</h3>
            <p class="card__note">Kayıtlar CRM’inize ya da e-postanıza anında aktarılıyor. Kaydın kime ve hangi sırayla düşeceği satış ekibinizin çalışma düzenine göre ayarlanıyor.</p>
          </div>
        </li>
        <li class="card work-card">
          <div class="work-card__body">
            <span class="work-card__icon"><svg width="22" height="22" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chart"></use></svg></span>
            <h3 class="card__title">Test ve dönemsel rapor</h3>
            <p class="card__note">Sayfa başlığı, form uzunluğu ve teklif birer birer test ediliyor. Rapor, satış ekibinin işaretlemesinden çıkan nitelikli kayıt sayısını ve maliyetini gösteriyor.</p>
          </div>
        </li>
      </ul>
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
          <summary class="faq__summary">Ne kadar sürede kayıt gelmeye başlar?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Kampanya yayına girip platform onayını aldıktan sonra kayıt gelmeye başlayabilir; asıl süre ondan önceki hazırlıkta. Nitelik tanımı, landing page ve takip kurulumu tamamlanmadan kampanya açmıyoruz. Hazırlığın süresi sayfanın kapsamına ve içerik onayının hızına bağlı: [REPLACE — gerçek projelerden ölçülen hazırlık süresi]. İlk günlerin kayıt sayısı sonraki dönemin göstergesi değil; kaliteyi okuyabilmek için satış ekibinin yeterli sayıda kaydı işaretlemiş olması gerekiyor.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Gelen kayıtların kalitesi nasıl ölçülür?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Satış ekibinizin işaretlemesiyle. Her kayıt ulaşılamadı, ilgisiz, görüşüldü, teklif verildi veya satışa döndü olarak işaretleniyor ve rapor bu işaretlerden çıkıyor. Hangi kaydın nitelikli sayılacağı kampanyadan önce birlikte yazılıyor. Ölçtüğümüz rakam kayıt başına maliyet değil, nitelikli kayıt başına maliyet; çünkü telefonu açmayan ucuz bir kayıt, görüşmeye gelen pahalı bir kayıttan daha pahalıya mal oluyor.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Landing page olmadan olur mu?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Olur, ama önermiyoruz. Reklam platformlarının kendi hazır formlarıyla, kişi hiçbir sayfaya gelmeden kayıt toplamak mümkün. Bu yöntemde formu doldurmak çok kolay olduğu için kayıt sayısı artabilir, ama kişi neyi talep ettiğini daha az bilerek kayıt bırakır. Hazır form kullanılacaksa bu kayıtları ayrı etiketliyor ve kalitelerini sayfadan gelen kayıtlarla yan yana ölçüyoruz; karar o veriye göre veriliyor.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Mevcut sitemizi kullanabilir miyiz?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Sitenizde tek bir teklifi anlatan, hızlı açılan ve form, arama, WhatsApp takibinin kurulabildiği bir sayfa varsa evet. Önce o sayfaya bakıyor, eksikleri yazılı olarak iletiyoruz. Çoğu kurumsal sitenin ana sayfası ya da hizmet sayfası birden fazla şey anlatır ve ziyaretçiye birçok çıkış bırakır; bu durumda sitenize dokunmadan, kampanyaya özel ayrı bir sayfa kurmayı öneriyoruz.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Reklam bütçesi nasıl belirlenir?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">İki sınır arasında. Alt sınır, platformun öğrenebilmesi ve sonuçların okunabilmesi için gereken kayıt sayısı; bunun altındaki bütçeyle hiçbir karar güvenle alınamıyor. Üst sınır, satış ekibinizin gerçekten dönebileceği kayıt sayısı; ekibin arayamadığı her kayıt boşa harcanmış bütçe. Rakamı sektörünüze, bölgenize ve teklifinize bakmadan veremiyoruz: [REPLACE — bütçe aralığı yaklaşımı]. Reklam bütçesi ile hizmet bedeli teklifte ayrı kalemler olarak yazılıyor.</p>
        </details>
        <details class="card faq">
          <summary class="faq__summary">Kayıtlar bize nasıl ulaşır?<svg class="faq__chevron" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></summary>
          <p class="faq__answer">Form kayıtları anında e-postanıza ve kullanıyorsanız CRM’inize aktarılıyor. Arama doğrudan satış hattınıza, WhatsApp mesajı sizin numaranıza düşüyor; hangisinin hangi kampanyadan geldiği ayrıca kaydediliyor. Kaydın ekipte kime ve hangi sırayla düşeceğini birlikte belirliyoruz. CRM kullanmıyorsanız kayıtlar ve satış ekibinin işaretlemeleri ortak bir tabloda tutuluyor.</p>
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
          { "@type": "Question", "name": "Ne kadar sürede kayıt gelmeye başlar?", "acceptedAnswer": { "@type": "Answer", "text": "Kampanya yayına girip platform onayını aldıktan sonra kayıt gelmeye başlayabilir; asıl süre ondan önceki hazırlıkta. Nitelik tanımı, landing page ve takip kurulumu tamamlanmadan kampanya açmıyoruz. Hazırlığın süresi sayfanın kapsamına ve içerik onayının hızına bağlı: [REPLACE — gerçek projelerden ölçülen hazırlık süresi]. İlk günlerin kayıt sayısı sonraki dönemin göstergesi değil; kaliteyi okuyabilmek için satış ekibinin yeterli sayıda kaydı işaretlemiş olması gerekiyor." } },
          { "@type": "Question", "name": "Gelen kayıtların kalitesi nasıl ölçülür?", "acceptedAnswer": { "@type": "Answer", "text": "Satış ekibinizin işaretlemesiyle. Her kayıt ulaşılamadı, ilgisiz, görüşüldü, teklif verildi veya satışa döndü olarak işaretleniyor ve rapor bu işaretlerden çıkıyor. Hangi kaydın nitelikli sayılacağı kampanyadan önce birlikte yazılıyor. Ölçtüğümüz rakam kayıt başına maliyet değil, nitelikli kayıt başına maliyet; çünkü telefonu açmayan ucuz bir kayıt, görüşmeye gelen pahalı bir kayıttan daha pahalıya mal oluyor." } },
          { "@type": "Question", "name": "Landing page olmadan olur mu?", "acceptedAnswer": { "@type": "Answer", "text": "Olur, ama önermiyoruz. Reklam platformlarının kendi hazır formlarıyla, kişi hiçbir sayfaya gelmeden kayıt toplamak mümkün. Bu yöntemde formu doldurmak çok kolay olduğu için kayıt sayısı artabilir, ama kişi neyi talep ettiğini daha az bilerek kayıt bırakır. Hazır form kullanılacaksa bu kayıtları ayrı etiketliyor ve kalitelerini sayfadan gelen kayıtlarla yan yana ölçüyoruz; karar o veriye göre veriliyor." } },
          { "@type": "Question", "name": "Mevcut sitemizi kullanabilir miyiz?", "acceptedAnswer": { "@type": "Answer", "text": "Sitenizde tek bir teklifi anlatan, hızlı açılan ve form, arama, WhatsApp takibinin kurulabildiği bir sayfa varsa evet. Önce o sayfaya bakıyor, eksikleri yazılı olarak iletiyoruz. Çoğu kurumsal sitenin ana sayfası ya da hizmet sayfası birden fazla şey anlatır ve ziyaretçiye birçok çıkış bırakır; bu durumda sitenize dokunmadan, kampanyaya özel ayrı bir sayfa kurmayı öneriyoruz." } },
          { "@type": "Question", "name": "Reklam bütçesi nasıl belirlenir?", "acceptedAnswer": { "@type": "Answer", "text": "İki sınır arasında. Alt sınır, platformun öğrenebilmesi ve sonuçların okunabilmesi için gereken kayıt sayısı; bunun altındaki bütçeyle hiçbir karar güvenle alınamıyor. Üst sınır, satış ekibinizin gerçekten dönebileceği kayıt sayısı; ekibin arayamadığı her kayıt boşa harcanmış bütçe. Rakamı sektörünüze, bölgenize ve teklifinize bakmadan veremiyoruz: [REPLACE — bütçe aralığı yaklaşımı]. Reklam bütçesi ile hizmet bedeli teklifte ayrı kalemler olarak yazılıyor." } },
          { "@type": "Question", "name": "Kayıtlar bize nasıl ulaşır?", "acceptedAnswer": { "@type": "Answer", "text": "Form kayıtları anında e-postanıza ve kullanıyorsanız CRM’inize aktarılıyor. Arama doğrudan satış hattınıza, WhatsApp mesajı sizin numaranıza düşüyor; hangisinin hangi kampanyadan geldiği ayrıca kaydediliyor. Kaydın ekipte kime ve hangi sırayla düşeceğini birlikte belirliyoruz. CRM kullanmıyorsanız kayıtlar ve satış ekibinin işaretlemeleri ortak bir tabloda tutuluyor." } }
        ]
      }
      </script>

      <!-- Service schema. No offers, no priceRange, no lead-count claims. -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.peradijital.com.tr/cozumlerimiz/lead-generation/#service",
        "name": "Lead Generation",
        "serviceType": "Potansiyel müşteri kazanımı",
        "description": "İnşaat, gayrimenkul ve hizmet işletmeleri için form, telefon ve WhatsApp üzerinden potansiyel müşteri kaydı toplayan kampanyalar; landing page tasarımı, kayıt takibi, kalite ölçümü ve CRM aktarımı dahil.",
        "url": "https://www.peradijital.com.tr/cozumlerimiz/lead-generation/",
        "inLanguage": "tr-TR",
        "provider": { "@id": "https://www.peradijital.com.tr/#organization" },
        "areaServed": { "@type": "Country", "name": "Türkiye" },
        "audience": { "@type": "BusinessAudience", "audienceType": "İnşaat ve gayrimenkul firmaları, klinikler, hukuk büroları, eğitim kurumları, danışmanlar ve B2B hizmet sağlayıcıları" },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Lead generation kapsamı",
          "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Kampanya kurulumu" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Landing page tasarımı ve testi" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Form, arama ve WhatsApp takibi" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Kayıt kalitesi ölçümü" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "CRM ve e-posta aktarımı" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Dönemsel raporlama" } }
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
        <h2 class="section-title" id="iletisim-title">Satış sürecinizi birlikte konuşalım</h2>
        <div class="contact-blocks">
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-phone"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Doğrudan arayın</h3>
              <p class="contact-block__note">Hafta içi 09:00&ndash;18:00 arası <a href="tel:<?= e(CONTACT_PHONE_HREF) ?>"><?= e(CONTACT_PHONE) ?></a>. Görüşmedeysek aynı gün içinde size döneriz.</p>
            </div>
          </div>
          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-people"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Satış ekibinizi de getirin</h3>
              <p class="contact-block__note">İlk görüşmede kayıtlara kimin döndüğünü ve hangi kaydı iyi saydığını konuşuyoruz. Satış tarafından biri katılırsa nitelik tanımı ilk görüşmede çıkıyor.</p>
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
            <legend class="tile-options__legend">Hangi sektördesiniz?</legend>
            <div class="tile-options__grid">
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="insaat-gayrimenkul" checked><span>İnşaat ve gayrimenkul</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="klinik-saglik"><span>Klinik ve sağlık</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="egitim"><span>Eğitim kurumu</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="danismanlik-b2b"><span>Danışmanlık ve B2B hizmet</span></label>
              <label class="tile-option"><input class="tile-option__input" type="radio" name="service_interest" value="hukuk"><span>Hukuk bürosu</span></label>
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
          <input type="hidden" name="form_source" value="lead-generation">

          <button class="btn btn--accent form__submit" type="submit">Talebi Gönder</button>

          <p class="form__legal">Gerçek bir adresten yanıt veriyoruz. Otomasyon yok, bülten yok.</p>
        </form>
      </div>

    </div>
  </section>

</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
