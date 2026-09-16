<?php
/* Single source of truth for site-wide values and the services list.
   Included by every page through head.php. */

declare(strict_types=1);

/* Environment: 'live' or 'staging'. The site launched on 15 Sep 2026, so a
   missing config.local.php now means LIVE. To take the site out of the
   index again (maintenance, a staging copy), put a server-only
   assets/inc/config.local.php containing: const SITE_ENV = 'staging';
   Any value other than exactly 'live' in that file is staging. */
if (is_file(__DIR__ . '/config.local.php')) {
    require __DIR__ . '/config.local.php';
}
if (!defined('SITE_ENV')) {
    define('SITE_ENV', 'live');
}

/* Change only if the site ever moves into a subdirectory. */
const BASE = '/';

const SITE_NAME = 'Pera Dijital';
const SITE_URL  = 'https://www.peradijital.com.tr';

/* ▸ REPLACE: the email is still unconfirmed. Phone and address are real.
   CONTACT_ADDRESS is printed as raw HTML in the footer so it can carry the
   line break — keep it authored here, never built from user input. */
const CONTACT_EMAIL      = 'hello@peradijital.com.tr';
const CONTACT_PHONE      = '+90 501 559 24 19';
const CONTACT_PHONE_HREF = '+905015592419';
const CONTACT_ADDRESS    = 'Bahçeşehir 2. Kısım Mah. Mercedes Bulv. No:30Bag<br>Başakşehir / İstanbul';

/* ▸ REPLACE — THE WHATSAPP NUMBER.
   International format, digits only: no +, no spaces, no leading 00.
   This is currently the same line as CONTACT_PHONE. Confirm it is actually
   the WhatsApp business number before launch — a wrong number here sends
   every enquiry into a dead chat. THIS CONSTANT IS THE ONLY PLACE IT IS SET. */
const WHATSAPP_NUMBER = '905015592419';

/* Prefilled first message. Keep it short; the visitor can edit it. */
const WHATSAPP_TEXT = 'Merhaba, Pera Dijital ile görüşmek istiyorum.';

/* ▸ THE İŞLERİMİZ SWITCH.
   false takes the portfolio and case studies out of the live site without
   deleting anything: no header link, no footer link, and both pages send
   noindex,nofollow. The files stay exactly where they are.
   Flipping this to true is step 1 of 3 in "Re-enabling İşlerimiz" in README. */
const SHOW_WORK = false;

/* ▸ THE SECTOR FILTER SWITCH.
   false hides the filter row on referanslarimiz/ without touching the data:
   SECTORS, the per-brand sector values and the counting logic all stay live.
   Set it back to true — that is the whole step — once enough sectors have
   SECTOR_MIN brands. The row still refuses to render unless at least two
   sectors qualify, so turning this on early cannot produce a one-button row. */
const SHOW_SECTOR_FILTER = false;

/* Where form submissions are delivered. */
const FORM_TO = 'hello@peradijital.com.tr';

/* The sender. On Google Workspace this MUST be the account the form logs in
   as (SMTP_USER) or an alias Gmail has been told to "send mail as" — anything
   else is rejected outright, and the SPF and DMARC records that make the mail
   deliverable are written for this domain, not the visitor's. The visitor's
   own address goes in Reply-To, which is what "Reply" actually uses. */
const FORM_FROM = 'hello@peradijital.com.tr';

/* ▸ SMTP — HOW THE FORM ACTUALLY SENDS.
   This host disables PHP's mail() outright (it is in disable_functions), so
   calling it is a fatal error rather than a failed send. The form logs in to
   the Google Workspace mailbox instead and sends as itself.

   THE PASSWORD LIVES ONLY IN assets/inc/config.local.php ON THE SERVER. That
   file is not in git and no deploy uploads or overwrites it, which is the
   whole reason the secret is read from there and not from a constant here:

     const SMTP_PASS = '<16-character app password>';

   Google Workspace refuses the account's ordinary password over SMTP. The
   value has to be an App Password, generated at myaccount.google.com with
   2-Step Verification already on.

   With SMTP_PASS empty the form sends nothing and tells the visitor to write
   to CONTACT_EMAIL instead, which is the honest failure. Everything below can
   also be overridden from config.local.php if the mailbox ever moves. */
if (!defined('SMTP_HOST')) {
    define('SMTP_HOST', 'smtp.gmail.com');
}
if (!defined('SMTP_PORT')) {
    define('SMTP_PORT', 587);
}
/* 'tls' is STARTTLS on 587: the connection opens in the clear and is upgraded
   before the login. 'ssl' is the implicit-TLS form on 465. */
if (!defined('SMTP_SECURE')) {
    define('SMTP_SECURE', 'tls');
}
/* The account the form authenticates as. Kept equal to FORM_FROM so Gmail
   never has to be asked to send as somebody else. */
if (!defined('SMTP_USER')) {
    define('SMTP_USER', FORM_FROM);
}
if (!defined('SMTP_PASS')) {
    define('SMTP_PASS', '');
}

/* ADDING A SERVICE IS ONE ROW HERE.
   'desc' is the one-line description shown under the name in the header mega
   menu; the index number beside it is generated from the row's position.
   It appears in the header dropdown and the footer column automatically.
   'slug' empty + 'built' false means the page does not exist yet, so the
   link falls back to the solutions index instead of 404ing. */
const SERVICES = [
    ['slug' => 'performans-reklam-yonetimi', 'label' => 'Performans Reklam Yönetimi', 'desc' => 'Meta, Google ve TikTok’ta kampanya kurulumu, kreatif ve günlük optimizasyon', 'built' => true],
    ['slug' => 'lead-generation',            'label' => 'Lead Generation',             'desc' => 'İnşaat, gayrimenkul ve hizmet işletmeleri için nitelikli müşteri kaydı', 'built' => true],
    ['slug' => 'kurumsal-web-tasarim',      'label' => 'Kurumsal Web Tasarım',        'desc' => 'Hazır tema kullanmadan kodlanan kurumsal siteler ve landing page’ler', 'built' => true],
    ['slug' => 'e-ticaret-site-kurulumu',    'label' => 'E-ticaret Site Kurulumu',     'desc' => 'ikas, Shopify, Ticimax ve T-Soft üzerinde satışa hazır mağaza kurulumu', 'built' => true],
    ['slug' => 'grafik-tasarim',             'label' => 'Grafik Tasarım',              'desc' => 'Logo, kurumsal kimlik, sosyal medya tasarımları, ambalaj ve basılı işler', 'built' => true],
    ['slug' => 'geo-yapay-zeka-gorunurlugu','label' => 'Yapay Zekada Görünürlük (GEO)', 'desc' => 'ChatGPT, Perplexity ve Google AI yanıtlarında kaynak olarak anılmak', 'built' => true],
    ['slug' => 'seo',                       'label' => 'Arama Motoru Optimizasyonu (SEO)', 'desc' => 'Teknik denetim, site hızı, içerik stratejisi, ölçümleme ve raporlama', 'built' => true],
    ['slug' => 'sosyal-medya-reklamlari',    'label' => 'Sosyal Medya Reklamları',    'desc' => 'Sosyal medya platformlarında reklam kurgusu ve hesap yönetimi', 'built' => false],
    ['slug' => 'analitik-ve-olculeme',       'label' => 'Analitik ve Ölçümleme',      'desc' => 'Doğru kurulmuş ölçümleme ve karar verdiren raporlama', 'built' => false],
];

/* Escape for HTML text and attributes. Every dynamic value goes through this. */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/* Absolute-from-root URL for an asset or page. */
function u(string $path): string
{
    return BASE . ltrim($path, '/');
}

/* Look a service up by slug and return its URL, so a cross-link written on
   one page upgrades itself the moment that service's page is built. */
function service_url_by_slug(string $slug): string
{
    foreach (SERVICES as $service) {
        if ($service['slug'] === $slug) {
            return service_url($service);
        }
    }
    return u('cozumlerimiz/');
}

/* wa.me deep link. rawurlencode so Turkish characters survive the query. */
function whatsapp_url(): string
{
    return 'https://wa.me/' . WHATSAPP_NUMBER . '?text=' . rawurlencode(WHATSAPP_TEXT);
}

/* The URL for a service row, falling back to the solutions index. */
function service_url(array $service): string
{
    return $service['built']
        ? u('cozumlerimiz/' . $service['slug'] . '/')
        : u('cozumlerimiz/');
}
