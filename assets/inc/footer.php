<?php
/* Shared site footer, plus the closing scripts and document. Single copy.

   Every link list below is data, not markup, so the columns, the legal row
   and _tools/render.py all read the same arrays. An empty 'href' means the
   page does not exist yet: the item renders as plain, muted text rather than
   a link to "#", so nothing here is a dead end. Give it a path the day the
   page ships and it becomes a link. Paths are relative to BASE, as u() wants. */

require_once __DIR__ . '/config.php';
$social = [
    ['icon' => 'linkedin',  'label' => 'LinkedIn&rsquo;de',  'href' => 'https://www.linkedin.com/company/peradijital/'],
    ['icon' => 'instagram', 'label' => 'Instagram&rsquo;da', 'href' => 'https://www.instagram.com/peradijital/'],
];
$footerNav = [
    ['title' => 'Hizmetler', 'links' => [
        ['label' => 'Performans Pazarlama',    'href' => 'cozumlerimiz/performans-reklam-yonetimi/'],
        ['label' => 'Web Tasarım',             'href' => 'cozumlerimiz/kurumsal-web-tasarim/'],
        ['label' => 'E-Ticaret Danışmanlığı',  'href' => 'cozumlerimiz/e-ticaret-site-kurulumu/'],
        ['label' => 'SEO',                     'href' => 'cozumlerimiz/seo/'],
        ['label' => 'Lead Generation',         'href' => 'cozumlerimiz/lead-generation/'],
    ]],
    ['title' => 'Kurumsal', 'links' => [
        ['label' => 'Hakkımızda',          'href' => 'hakkimizda/'],
        ['label' => 'Referanslar',         'href' => 'referanslarimiz/'],
        ['label' => 'Başarı Hikayeleri',   'href' => ''],
        ['label' => 'Blog',                'href' => ''],
        ['label' => 'İletişim',            'href' => 'iletisim/'],
        ['label' => 'Site Haritası',       'href' => 'site-haritasi/'],
    ]],
];
$legalLinks = [
    ['label' => 'Blog',                'href' => ''],
    ['label' => 'Gizlilik Politikası', 'href' => ''],
    ['label' => 'KVKK',                'href' => ''],
    ['label' => 'Çerez Politikası',    'href' => ''],
    ['label' => 'Site Haritası',       'href' => 'site-haritasi/'],
];
$aiLinks = [
    ['key' => 'chatgpt',    'name' => 'ChatGPT'],
    ['key' => 'gemini',     'name' => 'Gemini'],
    ['key' => 'claude',     'name' => 'Claude'],
    ['key' => 'perplexity', 'name' => 'Perplexity'],
];
?>
<footer class="site-footer">
  <div class="site-footer__inner">

    <div class="site-footer__brand">
      <a class="wordmark" href="<?= e($page['home']) ?>" aria-label="Pera Dijital, <?= $nav === 'home' ? 'başa dön' : 'ana sayfa' ?>">
        <svg class="wordmark__logo wordmark__logo--sm" width="156" height="30" viewBox="0 0 1175 226.6" aria-hidden="true" focusable="false"><use href="<?= u('assets/icons/sprite.svg') ?>#logo-pera-dijital"></use></svg>
      </a>
      <address class="site-footer__address"><?= CONTACT_ADDRESS ?></address>
      <ul class="site-footer__contact" role="list">
        <li><a href="tel:<?= e(CONTACT_PHONE_HREF) ?>"><?= e(CONTACT_PHONE) ?></a></li>
        <li><a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a></li>
      </ul>
      <nav class="site-footer__social" aria-label="Sosyal medya">
        <ul role="list">
<?php foreach ($social as $s): ?>
          <li><a href="<?= e($s['href']) ?>" target="_blank" rel="me noopener"><svg width="20" height="20" aria-hidden="true" focusable="false"><use href="<?= u('assets/icons/sprite.svg') ?>#icon-<?= e($s['icon']) ?>"></use></svg><span class="u-visually-hidden">Pera Dijital <?= $s['label'] ?></span></a></li>
<?php endforeach; ?>
        </ul>
      </nav>

      <!-- Ask an assistant about us. The question travels in the link for the
           three platforms that accept one; Gemini does not, so main.js copies
           it on the click instead. nofollow: these are query URLs, not
           endorsements, and there is nothing for a crawler to follow. -->
      <section class="site-footer__ai" aria-labelledby="footer-ai-title" data-ai-prompt="<?= e(AI_PROMPT) ?>">
        <p class="site-footer__ai-title" id="footer-ai-title">AI&rsquo;da Pera Dijital&rsquo;i Araştırın</p>
        <p class="site-footer__ai-note">Pera Dijital hakkında yapay zekâ destekli hızlı bir özet alın.</p>
        <ul class="site-footer__ai-list" role="list">
<?php foreach ($aiLinks as $ai): ?>
          <li><a class="site-footer__ai-btn" href="<?= e(ai_url($ai['key'])) ?>" target="_blank" rel="nofollow noopener" data-ai="<?= e($ai['key']) ?>"><?= e($ai['name']) ?><span class="u-visually-hidden"> (yeni sekmede açılır)</span></a></li>
<?php endforeach; ?>
        </ul>
        <p class="site-footer__ai-status" role="status" aria-live="polite" data-ai-status></p>
      </section>
    </div>

<?php foreach ($footerNav as $group): ?>
    <nav class="site-footer__col" aria-label="<?= e($group['title']) ?>">
      <p class="site-footer__heading"><?= e($group['title']) ?></p>
      <ul role="list">
<?php foreach ($group['links'] as $link): ?>
<?php if ($link['href'] !== ''): ?>
        <li><a href="<?= e(u($link['href'])) ?>"><?= e($link['label']) ?></a></li>
<?php endif; ?>
<?php if ($link['href'] === ''): ?>
        <li><span class="site-footer__soon"><?= e($link['label']) ?></span></li>
<?php endif; ?>
<?php endforeach; ?>
      </ul>
    </nav>
<?php endforeach; ?>

    <div class="site-footer__bottom">
      <p class="site-footer__copyright">&copy; <span data-year><?= date('Y') ?></span> Pera Dijital. Tüm hakları saklıdır.</p>
      <nav aria-label="Yasal bağlantılar">
        <ul class="site-footer__legal-list" role="list">
<?php foreach ($legalLinks as $link): ?>
<?php if ($link['href'] !== ''): ?>
          <li><a href="<?= e(u($link['href'])) ?>"><?= e($link['label']) ?></a></li>
<?php endif; ?>
<?php if ($link['href'] === ''): ?>
          <li><span class="site-footer__soon"><?= e($link['label']) ?></span></li>
<?php endif; ?>
<?php endforeach; ?>
        </ul>
      </nav>
    </div>

  </div>
</footer>

<!-- The organisation and the website, on every page, defined once here.
     Pages point at these through "@id" (provider, publisher, isPartOf).
     Facts only from the site itself. sameAs lists exactly the profiles in
     $social above and nothing else; an empty or placeholder sameAs is worse
     than none. Keep in step with CONTACT_* in config.php. -->
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
      "sameAs": [
        "https://www.linkedin.com/company/peradijital/",
        "https://www.instagram.com/peradijital/"
      ],
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
<script type="module" src="<?= u('assets/js/consent.js') ?>"></script>
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

<!-- Cookie notice. Hidden in the markup and revealed by consent.js only for a
     visitor who has not chosen yet, so it never flashes for a returning one
     and never appears at all without JS. Not modal: the page stays usable
     behind it. The choice is recorded and announced to dataLayer; it does not
     switch anything on or off by itself (see consent.js). -->
<div class="consent" role="region" aria-labelledby="consent-title" data-consent hidden>
  <p class="consent__title" id="consent-title">Çerez tercihiniz</p>
  <p class="consent__text">Sitemizin nasıl kullanıldığını anlamak ve deneyimi iyileştirmek için çerezler kullanıyoruz.</p>
  <div class="consent__actions">
    <button class="btn btn--dark consent__btn" type="button" data-consent-choice="accepted">Kabul et</button>
    <button class="btn consent__btn consent__btn--reject" type="button" data-consent-choice="rejected">Reddet</button>
  </div>
</div>

</body>
</html>
