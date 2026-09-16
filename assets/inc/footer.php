<?php
/* Shared site footer, plus the closing scripts and document. Single copy. */

require_once __DIR__ . '/config.php';
$social = [
    ['icon' => 'linkedin',  'label' => 'LinkedIn&rsquo;de'],
    ['icon' => 'x',         'label' => 'X&rsquo;te'],
    ['icon' => 'instagram', 'label' => 'Instagram&rsquo;da'],
];
?>
<footer class="site-footer">
  <div class="site-footer__inner">

    <div class="site-footer__brand">
      <a class="wordmark" href="<?= e($page['home']) ?>" aria-label="Pera Dijital, <?= $nav === 'home' ? 'başa dön' : 'ana sayfa' ?>">
        <svg class="wordmark__logo wordmark__logo--sm" width="156" height="30" viewBox="0 0 1175 226.6" aria-hidden="true" focusable="false"><use href="<?= u('assets/icons/sprite.svg') ?>#logo-pera-dijital"></use></svg>
      </a>
      <p class="site-footer__line">Reklamları, sayfaları ve ölçümlemeyi biz kuruyoruz. Tek ekip, tek aylık ücret.</p>
      <address class="site-footer__address"><?= CONTACT_ADDRESS ?></address>
      <ul class="site-footer__contact" role="list">
        <li><a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a></li>
        <li><a href="tel:<?= e(CONTACT_PHONE_HREF) ?>"><?= e(CONTACT_PHONE) ?></a></li>
      </ul>
      <nav class="site-footer__social" aria-label="Sosyal medya">
        <ul role="list">
<?php foreach ($social as $s): ?>
          <li><a href="#" rel="me noopener"><svg width="20" height="20" aria-hidden="true" focusable="false"><use href="<?= u('assets/icons/sprite.svg') ?>#icon-<?= e($s['icon']) ?>"></use></svg><span class="u-visually-hidden">Pera Dijital <?= $s['label'] ?></span></a></li>
<?php endforeach; ?>
        </ul>
      </nav>
    </div>

    <nav class="site-footer__col" aria-label="Çözümlerimiz">
      <p class="site-footer__heading">Çözümlerimiz</p>
      <ul role="list">
<?php foreach (SERVICES as $service): ?>
        <li><a href="<?= e(service_url($service)) ?>"><?= e($service['label']) ?></a></li>
<?php endforeach; ?>
      </ul>
    </nav>

    <nav class="site-footer__col" aria-label="Kurumsal">
      <p class="site-footer__heading">Kurumsal</p>
      <ul role="list">
        <li><a href="<?= u('hakkimizda/') ?>">Hakkımızda</a></li>
<?php if (SHOW_WORK): ?>
        <li><a href="<?= u('islerimiz/') ?>">İşlerimiz</a></li>
<?php endif; ?>
        <li><a href="<?= u('referanslarimiz/') ?>">Referanslarımız</a></li>
      </ul>
    </nav>

    <nav class="site-footer__col" aria-label="Kaynaklar">
      <p class="site-footer__heading">Kaynaklar</p>
      <ul role="list">
        <!-- ▸ REPLACE: blog and stories pages do not exist yet. -->
        <li><a href="#">Blog</a></li>
        <li><a href="#">Başarı Hikâyeleri</a></li>
        <li><a href="<?= u('iletisim/') ?>">İletişim</a></li>
      </ul>
    </nav>

    <div class="site-footer__bottom">
      <p class="site-footer__copyright">&copy; <span data-year><?= date('Y') ?></span> Pera Dijital. Tüm hakları saklıdır.</p>
      <ul class="site-footer__legal-list" role="list">
        <!-- ▸ REPLACE: legal pages do not exist yet. -->
        <li><a href="#">Gizlilik</a></li>
        <li><a href="#">Kullanım Koşulları</a></li>
      </ul>
    </div>

  </div>
</footer>

<!-- The organisation and the website, on every page, defined once here.
     Pages point at these through "@id" (provider, publisher, isPartOf).
     Facts only from the site itself. No sameAs until the social profiles in
     the footer have real URLs; an empty or placeholder sameAs is worse than
     none. Keep in step with CONTACT_* in config.php. -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://www.peradijital.com.tr/#organization",
      "name": "Pera Dijital",
      "url": "https://www.peradijital.com.tr/",
      "logo": "https://www.peradijital.com.tr/assets/img/logos/pera-dijital.svg",
      "description": "İstanbul Bahçeşehir’de markalar için tasarım, yazılım ve dijital pazarlama çalışmaları yürüten dijital ajans. Web sitelerini hazır tema kullanmadan elde kodlar; reklam, SEO ve yapay zeka görünürlüğü çalışmalarını aynı ekipte yürütür.",
      "foundingDate": "2017",
      "email": "hello@peradijital.com.tr",
      "telephone": "+90-501-559-24-19",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Bahçeşehir 2. Kısım Mah. Mercedes Bulv. No:30Bag",
        "addressLocality": "Başakşehir",
        "addressRegion": "İstanbul",
        "addressCountry": "TR"
      },
      "areaServed": { "@type": "Country", "name": "Türkiye" },
      "knowsAbout": [
        "Performans reklam yönetimi",
        "Lead generation",
        "Kurumsal web tasarım",
        "E-ticaret site kurulumu",
        "Grafik tasarım",
        "Yapay zekada görünürlük (GEO)",
        "Arama motoru optimizasyonu (SEO)"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "sales",
        "telephone": "+90-501-559-24-19",
        "email": "hello@peradijital.com.tr",
        "areaServed": "TR",
        "availableLanguage": ["tr"]
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://www.peradijital.com.tr/#website",
      "url": "https://www.peradijital.com.tr/",
      "name": "Pera Dijital",
      "inLanguage": "tr-TR",
      "publisher": { "@id": "https://www.peradijital.com.tr/#organization" }
    }
  ]
}
</script>

<script type="module" src="<?= u('assets/js/main.js') ?>"></script>
<script type="module" src="<?= u('assets/js/nav.js') ?>"></script>
<?php foreach ($page['js'] as $module): ?>
<script type="module" src="<?= u('assets/js/' . $module) ?>"></script>
<?php endforeach; ?>

<!-- WhatsApp: one <a>, two shapes. Vertical tab on the right edge from 60rem,
     circular button bottom-right below it. The accessible name is on the <a>;
     everything inside is aria-hidden so the name is never doubled up.
     The number lives in WHATSAPP_NUMBER in config.php — nowhere else. -->
<a class="wa-tab" href="<?= e(whatsapp_url()) ?>" target="_blank" rel="noopener" aria-label="WhatsApp&rsquo;tan yazın" data-wa>
  <svg class="wa-tab__glyph" width="26" height="26" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><use href="<?= u('assets/icons/sprite.svg') ?>#icon-whatsapp"></use></svg>
  <span class="wa-tab__label" aria-hidden="true">WhatsApp Destek</span>
  <span class="wa-tab__dot" aria-hidden="true"></span>
</a>

</body>
</html>
