<?php
$page = [
    'title'       => "Pera Dijital — Kâra dönüşen performans reklamları",
    'description' => "Sabit aylık ücretle kıdemli bir performans pazarlama ekibi. Strateji, kreatif, medya satın alma ve raporlama tek elden; kampanyalar yedi iş gününde yayında.",
    'canonical'   => '/',
    'nav'         => 'home',
    'css'         => [],
    'js'          => ['form.js'],
    'og_type'     => 'website',
    'home'        => '#top',
    'cta'         => '#contact',
    'body_class'  => "",
    'og_desc'     => "Sabit aylık ücretle kıdemli bir performans pazarlama ekibi. Strateji, kreatif, medya satın alma ve raporlama tek elden.",
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main">

  <!-- ============================================================
       HERO — signature section
       ============================================================ -->
  <section class="hero" id="top" aria-labelledby="hero-title">
    <div class="hero__inner">

      <div class="hero__content">
        <h1 class="hero__title" id="hero-title">Kâr Getiren Performans Reklamları.</h1>
        <p class="hero__lede">Pera Dijital, büyüyen markalara sabit aylık ücretle kıdemli bir performans pazarlama ekibi verir. Strateji, kreatif, medya satın alma ve raporlama; baştan sona tek elden.</p>
        <div class="hero__actions">
          <a class="btn btn--dark btn--lg" href="#contact" data-hero-cta>Projeyi Başlatalım</a>
          <a class="btn btn--accent btn--lg" href="#process">Nasıl Çalışıyoruz?</a>
        </div>
      </div>

      <!-- Ships in the HTML so the hero is never empty, with or without JS.
           Removed by main.js only once a WebGL context is confirmed. -->
      <div class="hero-collage" data-collage aria-hidden="true">
        <div class="hero-collage__col">
          <img class="hero-collage__card" src="/assets/img/cards/card-01.webp" alt="" width="800" height="1000" decoding="async">
          <img class="hero-collage__card" src="/assets/img/cards/card-03.webp" alt="" width="800" height="1000" decoding="async">
          <img class="hero-collage__card" src="/assets/img/cards/card-05.webp" alt="" width="800" height="1000" decoding="async">
          <img class="hero-collage__card" src="/assets/img/cards/card-07.webp" alt="" width="800" height="1000" decoding="async">
          <img class="hero-collage__card" src="/assets/img/cards/card-09.webp" alt="" width="800" height="1000" decoding="async">
          <img class="hero-collage__card" src="/assets/img/cards/card-11.webp" alt="" width="800" height="1000" decoding="async">
        </div>
        <div class="hero-collage__col">
          <img class="hero-collage__card" src="/assets/img/cards/card-02.webp" alt="" width="800" height="1000" decoding="async">
          <img class="hero-collage__card" src="/assets/img/cards/card-04.webp" alt="" width="800" height="1000" decoding="async">
          <img class="hero-collage__card" src="/assets/img/cards/card-06.webp" alt="" width="800" height="1000" decoding="async">
          <img class="hero-collage__card" src="/assets/img/cards/card-08.webp" alt="" width="800" height="1000" decoding="async">
          <img class="hero-collage__card" src="/assets/img/cards/card-10.webp" alt="" width="800" height="1000" decoding="async">
          <img class="hero-collage__card" src="/assets/img/cards/card-12.webp" alt="" width="800" height="1000" decoding="async">
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================
       CAPABILITIES — sticky left column, stacked card column right
       ============================================================ -->
  <section class="capabilities" id="capabilities" aria-labelledby="capabilities-title" data-reveal>
    <div class="capabilities__inner">

      <div class="capabilities__aside">
        <h2 class="section-title" id="capabilities-title">Performans pazarlamada uzman ekip</h2>
        <p class="section-lede">Uzmanlarımız farklı disiplinlerden geliyor. Bir araya geldiklerinde, öngörebileceğiniz ve her ay tekrarlayabileceğiniz kâr üreten performans stratejileri kuruyorlar.</p>
        <a class="btn btn--dark" href="#contact">Teklif Alın</a>
      </div>

      <ul class="card-stack" role="list">
        <li class="card capability-card" style="--i:0">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-strategy"></use></svg>
          <h3 class="card__title">Stratejist</h3>
          <p class="card__note">Her şeyi bir araya getirir. Test edilecek yeni açılar için ekiple çalışır, landing page&rsquo;leri sürekli geliştirir ve herkesi rakamdan sorumlu tutar.</p>
        </li>
        <li class="card capability-card" style="--i:1">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-copy"></use></svg>
          <h3 class="card__title">Metin Yazarı</h3>
          <p class="card__note">Landing page&rsquo;ler, ürün sayfaları, video senaryoları, ek satış akışları ve yayına giren her kreatif için teklif metinlerini yazar.</p>
        </li>
        <li class="card capability-card" style="--i:2">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-media"></use></svg>
          <h3 class="card__title">Medya Alım Uzmanı</h3>
          <p class="card__note">Meta, Google Arama, YouTube, TikTok ve display kanallarını yönetir. Günlük rakamların sahibidir ve bütçeyi kazandıran tarafa kaydırır.</p>
        </li>
        <li class="card capability-card" style="--i:3">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-design"></use></svg>
          <h3 class="card__title">Kreatif Tasarımcı</h3>
          <p class="card__note">Tüm kanallar için statik ve video reklamları, her yerleşimin gerçekten ihtiyaç duyduğu formatta üretir.</p>
        </li>
        <li class="card capability-card" style="--i:4">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-data"></use></svg>
          <h3 class="card__title">Veri ve Analitik</h3>
          <p class="card__note">Raporlama, dönüşüm takibi, script ve etiket yönetiminin sahibidir. Mevcut kurulumunuzla çalışır ya da sıfırdan yenisini kurar.</p>
        </li>
      </ul>

    </div>
  </section>

  <!-- ============================================================
       VALUE PROPOSITIONS — centred heading, three by three
       ============================================================ -->
  <section class="benefits" id="benefits" aria-labelledby="benefits-title" data-reveal>
    <div class="benefits__inner">
      <h2 class="section-title section-title--centre" id="benefits-title">Bir ajanstan beklediğiniz her şey</h2>

      <ul class="benefits__grid" role="list">
        <li class="card" style="--i:0">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-cash"></use></svg>
          <h3 class="card__title">Sabit Aylık Ücret</h3>
          <p class="card__note">Tek bir kişiyi bünyenize almanın maliyetinin yarısından azına, tam kadro bir reklam ekibi.</p>
        </li>
        <li class="card" style="--i:1">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chart"></use></svg>
          <h3 class="card__title">Doğru Raporlama</h3>
          <p class="card__note">Kendi girip doğrulayabileceğiniz tek bir kaynaktan, her kanalın nasıl performans gösterdiğini net görün.</p>
        </li>
        <li class="card" style="--i:2">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-star"></use></svg>
          <h3 class="card__title">Yalnızca Kıdemli Kadro</h3>
          <p class="card__note">Hesabınızdaki herkesin performans pazarlamada en az sekiz yılı var. İlk günden etki.</p>
        </li>
        <li class="card" style="--i:3">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-people"></use></svg>
          <h3 class="card__title">Tam Kadro Ekip</h3>
          <p class="card__note">Tek bir uzmanla da tüm ekiple de çalışabilirsiniz. Sizi bulunduğunuz yerde karşılarız.</p>
        </li>
        <li class="card" style="--i:4">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-clock"></use></svg>
          <h3 class="card__title">Hızlı Kurulum</h3>
          <p class="card__note">Saatlik faturalanan bir keşif süreci olmadan, yedi iş günü veya daha kısa sürede reklamlar yayında.</p>
        </li>
        <li class="card" style="--i:5">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-layers"></use></svg>
          <h3 class="card__title">Her Ay Yeni Sayfalar</h3>
          <p class="card__note">Her ay test edilen en az iki yeni landing page. Önceki kazananları da geliştirmeye devam ederiz.</p>
        </li>
        <li class="card" style="--i:6">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-gauge"></use></svg>
          <h3 class="card__title">Bütçe Alt Sınırı Yok</h3>
          <p class="card__note">Aylık dört haneli de harcayın yedi haneli de; ücret bütçeyle birlikte değişmez.</p>
        </li>
        <li class="card" style="--i:7">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chat"></use></svg>
          <h3 class="card__title">Doğrudan Slack Erişimi</h3>
          <p class="card__note">İşi yapan kişilerle ortak bir kanal; sorular aynı gün içinde yanıtlanır.</p>
        </li>
        <li class="card" style="--i:8">
          <svg class="card__icon" width="26" height="26" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-globe"></use></svg>
          <h3 class="card__title">Tüm Büyük Kanallar</h3>
          <p class="card__note">Meta, Google, YouTube ve TikTok. Hangi ikisinin işinize gerçekten yaradığını açıkça söyleriz.</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- ============================================================
       PROCESS — sequential, so numbered
       ============================================================ -->
  <section class="process" id="process" aria-labelledby="process-title" data-reveal>
    <div class="process__inner">
      <h2 class="section-title section-title--centre" id="process-title">İlk altı hafta nasıl ilerliyor?</h2>

      <ol class="process__list">
        <li class="card step-card" style="--i:0">
          <span class="step-card__number" aria-hidden="true">01</span>
          <h3 class="card__title">Denetim ve Erişim</h3>
          <p class="card__note">Herhangi bir öneride bulunmadan önce reklam hesaplarına, analitiğe ve CRM&rsquo;e gireriz. Neyin çalıştığını ve nerede kayıp olduğunu yazılı olarak alırsınız.</p>
        </li>
        <li class="card step-card" style="--i:1">
          <span class="step-card__number" aria-hidden="true">02</span>
          <h3 class="card__title">Strateji ve Teklif</h3>
          <p class="card__note">Teklifi ve satıldığı açıları yeniden yazarız. Tek bir reklam üretilmeden önce bir sayfalık konumlandırmayı siz onaylarsınız.</p>
        </li>
        <li class="card step-card" style="--i:2">
          <span class="step-card__number" aria-hidden="true">03</span>
          <h3 class="card__title">Yayına Alma</h3>
          <p class="card__note">İlk kampanyalar yedi iş günü içinde yayına girer. En büyük kitleden değil, geri bildirim döngüsü en kısa olan kanaldan başlarız.</p>
        </li>
        <li class="card step-card" style="--i:3">
          <span class="step-card__number" aria-hidden="true">04</span>
          <h3 class="card__title">Haftalık İyileştirme</h3>
          <p class="card__note">Her hafta kaybedeni keser, kazananı büyütürüz. Gerekçeyi aylık bir sunumda değil, karar alındığı anda Slack&rsquo;te görürsünüz.</p>
        </li>
      </ol>
    </div>
  </section>

  <!-- ============================================================
       PROOF
       ============================================================ -->
  <section class="proof" id="proof" aria-labelledby="proof-title" data-reveal>
    <div class="proof__inner">
      <h2 class="section-title section-title--centre" id="proof-title">Bunun getirdiği sonuçlar</h2>

      <!-- ▸ REPLACE EVERY FIGURE BELOW WITH A REAL, VERIFIABLE RESULT.
             These four are illustrative placeholders only. Keep the qualifier
             format: client type, then time window. Do not ship them as-is. -->
      <dl class="proof__grid">
        <div class="card metric-card" style="--i:0">
          <dt class="metric-card__figure"><span class="metric-card__value" data-placeholder>118</span><span class="metric-card__unit">% ROAS</span></dt>
          <dd class="metric-card__note">Harmanlanmış reklam getirisi, DTC ev tekstili hesabı, ilk iki çeyrek</dd>
        </div>
        <div class="card metric-card" style="--i:1">
          <dt class="metric-card__figure"><span class="metric-card__value" data-placeholder>34</span><span class="metric-card__unit">% düşüş</span></dt>
          <dd class="metric-card__note">Nitelikli potansiyel müşteri maliyeti, B2B hizmet hesabı, altı ay</dd>
        </div>
        <div class="card metric-card" style="--i:2">
          <dt class="metric-card__figure"><span class="metric-card__value" data-placeholder>7</span><span class="metric-card__unit">gün</span></dt>
          <dd class="metric-card__note">Başlangıçtan ilk kampanyanın yayınına kadar ortanca süre, son on iki müşteri</dd>
        </div>
        <div class="card metric-card" style="--i:3">
          <dt class="metric-card__figure"><span class="metric-card__value" data-placeholder>41</span><span class="metric-card__unit">içerik</span></dt>
          <dd class="metric-card__note">Ayda üretilen yeni kreatif, aktif hesaplar ortalaması</dd>
        </div>
      </dl>
    </div>
  </section>

  <!-- ============================================================
       OFFER + CONTACT — dark panel
       ============================================================ -->
  <section class="offer" id="contact" aria-labelledby="offer-title" data-reveal>
    <div class="offer__inner">
      <div class="offer__panel">

        <div class="offer__pitch">
          <p class="offer__eyebrow">Başlamaya hazır mısınız?</p>
          <h2 class="offer__title" id="offer-title">Pera Dijital ile Çalışın</h2>
          <p class="offer__lede">Tek bir aylık ücret, ekibin tamamını ve aşağıdaki her şeyi kapsar. Şu an neler yaptığınızı anlatın; genellikle iki iş günü içinde sabit bir rakamla dönelim.</p>

          <h3 class="offer__subtitle">Neler dahil:</h3>
          <ul class="checklist" role="list">
            <li class="checklist__item"><svg class="checklist__icon" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-star"></use></svg><span>Her ay kurulan ve test edilen iki yeni landing page</span></li>
            <li class="checklist__item"><svg class="checklist__icon" width="20" height="20" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-star"></use></svg><span>Kurulan ve sürekli bakımı yapılan ölçümleme ve atıf</span></li>
          </ul>
        </div>

        <div class="offer__form">
          <h3 class="form__title" id="form-title">Hesabınızı anlatın</h3>

          <form class="form" action="/send.php" method="post" novalidate aria-labelledby="form-title" data-form>

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

            <div class="field">
              <label class="field__label" for="f-website">Web siteniz <span class="field__optional">(opsiyonel)</span></label>
              <input class="field__input" id="f-website" name="website" type="url" inputmode="url" autocomplete="url" placeholder="https://" aria-describedby="f-website-error">
              <p class="field__error" id="f-website-error" data-error-for="f-website"></p>
            </div>

            <div class="field">
              <label class="field__label" for="f-budget">Aylık reklam bütçeniz <span class="field__required">(zorunlu)</span></label>
              <select class="field__input field__input--select" id="f-budget" name="budget" required aria-describedby="f-budget-error">
                <option value="">Bir aralık seçin</option>
                <option value="under-50k">50.000 TL altı</option>
                <option value="50k-150k">50.000 &ndash; 150.000 TL</option>
                <option value="150k-400k">150.000 &ndash; 400.000 TL</option>
                <option value="over-400k">400.000 TL üzeri</option>
                <option value="not-yet">Henüz reklam vermiyorum</option>
              </select>
              <p class="field__error" id="f-budget-error" data-error-for="f-budget"></p>
            </div>

            <div class="field">
              <label class="field__label" for="f-message">Şu an neler yapıyorsunuz? <span class="field__optional">(opsiyonel)</span></label>
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
            <input type="hidden" name="form_source" value="anasayfa">

            <button class="btn btn--accent form__submit" type="submit">Talebi Gönder</button>

            <p class="form__legal">Gerçek bir adresten yanıt veriyoruz. Otomasyon yok, bülten yok.</p>
          </form>
        </div>

      </div>
    </div>
  </section>

</main>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
