<?php
$page = [
    'title'       => "İletişim — Pera Dijital",
    'description' => "Pera Dijital’e ulaşın: Bahçeşehir’deki ofisimizin adresi, telefon numaramız ve doğrudan bize gelen iletişim formu. Bir iş günü içinde dönüş yapıyoruz.",
    'canonical'   => '/iletisim/',
    'nav'         => 'contact',
    'css'         => ['page.css'],
    'js'          => ['form.js'],
    'og_type'     => 'website',
    'home'        => '/',
    'cta'         => '/iletisim/#form',
    'body_class'  => "page-inner",
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main">

  <section class="band band--intro" aria-labelledby="contact-title">
    <div class="band__inner">

      <div class="intro--centered">
      <nav class="breadcrumb" aria-label="Sayfa yolu">
        <ol class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">Pera Dijital</a><svg class="breadcrumb__sep" width="14" height="14" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></li>
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">İletişim</span></li>
        </ol>
      </nav>

      <h1 class="section-title" id="contact-title">İletişim</h1>
      <p class="intro__lede">Telefonla arayın, yazın ya da aşağıdaki formu doldurun. Hangisini seçerseniz seçin karşınıza işi yapan ekip çıkar; bir iş günü içinde gerçek bir adresten dönüş yapıyoruz.</p>
      </div>

    </div>
  </section>

  <!-- ============================================================
       CONTACT DETAILS + FORM — dark band, the same pair the service
       pages use. The form is the site's general one; only form_source
       changes, which is what tells send.php where it came from.
       ============================================================ -->
  <section class="band band--dark" id="form" aria-labelledby="form-band-title">
    <div class="band__inner split split--narrow-left">

      <div class="band__aside">
        <p class="eyebrow eyebrow--invert">Bize ulaşın</p>
        <h2 class="section-title" id="form-band-title">Nasıl isterseniz</h2>
        <div class="contact-blocks">

          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-phone"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Telefon</h3>
              <p class="contact-block__note">Hafta içi 09:00&ndash;18:00 arası <a href="tel:<?= e(CONTACT_PHONE_HREF) ?>"><?= e(CONTACT_PHONE) ?></a>. Görüşmedeysek aynı gün içinde size döneriz.</p>
            </div>
          </div>

          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chat"></use></svg></span>
            <div>
              <h3 class="contact-block__title">E-posta ve WhatsApp</h3>
              <p class="contact-block__note"><a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a> adresine yazabilir ya da <a href="<?= e(whatsapp_url()) ?>" target="_blank" rel="noopener">WhatsApp&rsquo;tan mesaj</a> gönderebilirsiniz.</p>
            </div>
          </div>

          <div class="contact-block">
            <span class="contact-block__tile"><svg width="24" height="24" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-building"></use></svg></span>
            <div>
              <h3 class="contact-block__title">Adres</h3>
              <p class="contact-block__note"><?= CONTACT_ADDRESS ?><br><a href="<?= e(map_directions_url()) ?>" target="_blank" rel="noopener">Yol tarifi alın</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="form-card">
        <h3 class="form__title" id="form-title">Hesabınızı anlatın</h3>

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
          <input type="hidden" name="form_source" value="iletisim">

          <button class="btn btn--accent form__submit" type="submit">Talebi Gönder</button>

          <p class="form__legal">Gerçek bir adresten yanıt veriyoruz. Otomasyon yok, bülten yok.</p>
        </form>
      </div>

    </div>
  </section>

  <!-- ============================================================
       MAP — only with real coordinates behind it. The frame is centred
       on the office and carries no marker of its own; the pin drawn on
       top is the logo's mark. Dragging the frame would slide the map out
       from under that pin, so the whole surface is one link to
       directions instead — which is what the visitor came for anyway.
       ============================================================ -->
  <?php if (has_map()): ?>
  <section class="band" aria-labelledby="map-title">
    <div class="band__inner">
      <h2 class="section-title" id="map-title">Ofisimiz</h2>
      <p class="intro__lede"><?= CONTACT_ADDRESS ?></p>

      <div class="map">
        <iframe class="map__frame" src="<?= e(map_embed_url()) ?>" title="Pera Dijital ofisinin haritadaki yeri" loading="lazy" referrerpolicy="no-referrer-when-downgrade" tabindex="-1"></iframe>
        <span class="map__pin" aria-hidden="true">
          <svg class="map__mark" width="30" height="30" viewBox="11 1 222 221" focusable="false"><use href="/assets/icons/sprite.svg#mark-pera"></use></svg>
        </span>
        <a class="map__cover" href="<?= e(map_directions_url()) ?>" target="_blank" rel="noopener">
          <span class="map__cta">Yol tarifi alın</span>
        </a>
      </div>
    </div>
  </section>
  <?php endif; ?>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "@id": "<?= e(SITE_URL) ?>/iletisim/",
  "url": "<?= e(SITE_URL) ?>/iletisim/",
  "name": "İletişim — Pera Dijital",
  "inLanguage": "tr-TR",
  "isPartOf": { "@id": "<?= e(SITE_URL) ?>/#website" },
  "about": { "@id": "<?= e(SITE_URL) ?>/#organization" }<?php if (has_map()): ?>,
  "mainEntity": {
    "@id": "<?= e(SITE_URL) ?>/#organization",
    "geo": { "@type": "GeoCoordinates", "latitude": "<?= e(MAP_LAT) ?>", "longitude": "<?= e(MAP_LNG) ?>" },
    "hasMap": "<?= e(map_directions_url()) ?>"
  }<?php endif; ?>

}
</script>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
