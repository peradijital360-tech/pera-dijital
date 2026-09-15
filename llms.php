<?php
/* Served at /llms.txt through the rewrite in .htaccess.

   A plain-text map of the site for language models and AI search tools
   (llmstxt.org format): who Pera Dijital is, what it offers and where each
   answer lives. Built from config.php so it can never drift from the real
   pages: a service appears here the moment its 'built' flag is true.
   Only facts the site itself states. No claims, no prices, no results. */

declare(strict_types=1);

require_once __DIR__ . '/assets/inc/config.php';

header('Content-Type: text/plain; charset=utf-8');

$address = trim(preg_replace('/\s+/', ' ', str_replace(['<br>', '<br/>', '<br />'], ', ', CONTACT_ADDRESS)));

$lines = [];
$lines[] = '# ' . SITE_NAME;
$lines[] = '';
$lines[] = '> Pera Dijital, 2017’den beri İstanbul Bahçeşehir’de markalar için tasarım, yazılım ve dijital pazarlama çalışmaları yürüten bir dijital ajanstır. Web sitelerini hazır tema kullanmadan elde kodlar; reklam, SEO ve yapay zeka görünürlüğü çalışmalarını aynı ekipte yürütür.';
$lines[] = '';
$lines[] = 'Site dili Türkçedir. Hizmet bölgesi Türkiye. Fiyat bilgisi sitede yayınlanmaz; teklif, projenin kapsamı görüşüldükten sonra verilir.';
$lines[] = '';
$lines[] = '## Hizmetler';
$lines[] = '';
foreach (SERVICES as $service) {
    if (!$service['built']) {
        continue;
    }
    $lines[] = '- [' . $service['label'] . '](' . SITE_URL . service_url($service) . '): ' . $service['desc'];
}
$lines[] = '';
$lines[] = '## Kurumsal';
$lines[] = '';
$lines[] = '- [Hakkımızda](' . SITE_URL . '/hakkimizda/): Pera Dijital’in nasıl çalıştığı ve hangi işleri aynı ekipte yürüttüğü';
$lines[] = '- [Referanslarımız](' . SITE_URL . '/referanslarimiz/): Birlikte çalışılan markalar';
$lines[] = '';
$lines[] = '## İletişim';
$lines[] = '';
$lines[] = '- Telefon: ' . CONTACT_PHONE;
$lines[] = '- WhatsApp: ' . whatsapp_url();
$lines[] = '- E-posta: ' . CONTACT_EMAIL;
$lines[] = '- Adres: ' . $address;
$lines[] = '- İletişim formu: ' . SITE_URL . '/#contact';
$lines[] = '';
$lines[] = '## Optional';
$lines[] = '';
$lines[] = '- [Site haritası](' . SITE_URL . '/sitemap.xml)';

echo implode("\n", $lines) . "\n";
