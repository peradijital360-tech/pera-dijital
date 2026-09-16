<?php
/* Contact form endpoint for both forms on the site.
   Which form posted is declared by the hidden form_source field, and that key
   selects the field set, the validation rules and the mail subject below.
   ADDING A THIRD FORM IS ONE ENTRY IN $SOURCES plus a matching hidden field. */

declare(strict_types=1);

require_once __DIR__ . '/assets/inc/config.php';

/* A human cannot complete the form faster than this. Only enforced when the
   browser actually stamped submitted_at, i.e. when JS ran. */
const FORM_MIN_SECONDS = 3;
/* Older than this and the token is a stale tab or a replayed capture. */
const FORM_MAX_SECONDS = 43200;

/* ---------------------------------------------------------------- sources -*/

$BUDGETS = [
    'under-50k'  => '50.000 TL altı',
    '50k-150k'   => '50.000 – 150.000 TL',
    '150k-400k'  => '150.000 – 400.000 TL',
    'over-400k'  => '400.000 TL üzeri',
    'not-yet'    => 'Henüz reklam vermiyor',
];

$INTERESTS = [
    'performans-reklam' => 'Performans reklamları',
    'seo'               => 'SEO',
    'sosyal-medya'      => 'Sosyal medya',
    'email'             => 'E-posta pazarlama',
    'analitik'          => 'Analitik ve ölçümleme',
    'diger'             => 'Diğer',
];

/* The radio options on the web-tasarim form. Kept beside $INTERESTS so the
   two never drift from the markup they validate. */
$PROJECTS = [
    'kurumsal-site'   => 'Kurumsal web sitesi',
    'landing-page'    => 'Landing page',
    'yenileme'        => 'Mevcut sitenin yenilenmesi',
    'hiz-teknik-seo'  => 'Hız ve teknik SEO',
    'diger'           => 'Diğer',
];

/* Radio options on the e-ticaret-site-kurulumu form. */
$STORES = [
    'yeni-magaza'     => 'Yeni mağaza kurulumu',
    'yenileme'        => 'Mevcut mağazanın yenilenmesi',
    'platform-tasima' => 'Platform taşıma',
    'entegrasyon'     => 'Entegrasyon işleri',
    'icerik'          => 'Ürün ve içerik girişi',
    'diger'           => 'Diğer',
];

/* Radio options on the grafik-tasarim form. */
$DESIGNS = [
    'logo'             => 'Logo tasarımı',
    'kurumsal-kimlik'  => 'Kurumsal kimlik',
    'sosyal-medya'     => 'Sosyal medya tasarımları',
    'ambalaj'          => 'Ambalaj ve basılı işler',
    'sunum-katalog'    => 'Sunum ve katalog',
    'diger'            => 'Diğer',
];

/* Radio options on the GEO form. */
$GEO = [
    'geo-baslangic'   => 'GEO başlangıç çalışması',
    'icerik'          => 'İçerik yapısı düzenlemesi',
    'structured-data' => 'Yapılandırılmış veri',
    'olcum'           => 'Görünürlük ölçümü ve raporlama',
    'seo-ile'         => 'SEO ile birlikte',
    'diger'           => 'Diğer',
];

/* Radio options on the SEO form. */
$SEO = [
    'teknik-denetim' => 'Teknik SEO denetimi',
    'surekli-seo'    => 'Sürekli SEO çalışması',
    'icerik'         => 'İçerik stratejisi ve üretimi',
    'site-hizi'      => 'Site hızı',
    'geo-ile'        => 'GEO ile birlikte',
    'diger'          => 'Diğer',
];

/* Radio options on the lead-generation form. Sector, not service: the
   first call is shaped by the funnel, and the funnel is shaped by the sector. */
$LEADS = [
    'insaat-gayrimenkul' => 'İnşaat ve gayrimenkul',
    'klinik-saglik'      => 'Klinik ve sağlık',
    'egitim'             => 'Eğitim kurumu',
    'danismanlik-b2b'    => 'Danışmanlık ve B2B hizmet',
    'hukuk'              => 'Hukuk bürosu',
    'diger'              => 'Diğer',
];

$SOURCES = [
    'anasayfa' => [
        'subject' => 'Anasayfa formu',
        'back'    => '/#contact',
        'fields'  => [
            'name'    => ['label' => 'Ad Soyad',              'type' => 'text',   'required' => true,  'max' => 120],
            'phone'   => ['label' => 'Telefon',               'type' => 'phone',  'required' => true,  'max' => 40],
            'email'   => ['label' => 'E-posta',               'type' => 'email',  'required' => false, 'max' => 190],
            'website' => ['label' => 'Web sitesi',            'type' => 'url',    'required' => false, 'max' => 190],
            'budget'  => ['label' => 'Aylık reklam bütçesi',  'type' => 'choice', 'required' => true,  'options' => $BUDGETS],
            'message' => ['label' => 'Mesaj',                 'type' => 'long',   'required' => false, 'max' => 4000],
        ],
    ],
    'iletisim' => [
        'subject' => 'İletişim sayfası formu',
        'back'    => '/iletisim/#form',
        'fields'  => [
            'name'    => ['label' => 'Ad Soyad',              'type' => 'text',   'required' => true,  'max' => 120],
            'phone'   => ['label' => 'Telefon',               'type' => 'phone',  'required' => true,  'max' => 40],
            'email'   => ['label' => 'E-posta',               'type' => 'email',  'required' => false, 'max' => 190],
            'website' => ['label' => 'Web sitesi',            'type' => 'url',    'required' => false, 'max' => 190],
            'budget'  => ['label' => 'Aylık reklam bütçesi',  'type' => 'choice', 'required' => true,  'options' => $BUDGETS],
            'message' => ['label' => 'Mesaj',                 'type' => 'long',   'required' => false, 'max' => 4000],
        ],
    ],
    'lead-generation' => [
        'subject' => 'Lead Generation',
        'back'    => '/cozumlerimiz/lead-generation/#iletisim',
        'fields'  => [
            'name'             => ['label' => 'Ad Soyad',    'type' => 'text',   'required' => true,  'max' => 120],
            'phone'            => ['label' => 'Telefon',     'type' => 'phone',  'required' => true,  'max' => 40],
            'email'            => ['label' => 'E-posta',     'type' => 'email',  'required' => false,  'max' => 190],
            'service_interest' => ['label' => 'Sektör',      'type' => 'choice', 'required' => true, 'options' => $LEADS],
            'message'          => ['label' => 'Mesaj',       'type' => 'long',   'required' => false, 'max' => 4000],
        ],
    ],
    'seo' => [
        'subject' => 'Arama Motoru Optimizasyonu (SEO)',
        'back'    => '/cozumlerimiz/seo/#iletisim',
        'fields'  => [
            'name'             => ['label' => 'Ad Soyad',    'type' => 'text',   'required' => true,  'max' => 120],
            'phone'            => ['label' => 'Telefon',     'type' => 'phone',  'required' => true,  'max' => 40],
            'email'            => ['label' => 'E-posta',     'type' => 'email',  'required' => false,  'max' => 190],
            'service_interest' => ['label' => 'İlgilendiği çalışma', 'type' => 'choice', 'required' => true, 'options' => $SEO],
            'message'          => ['label' => 'Mesaj',       'type' => 'long',   'required' => false, 'max' => 4000],
        ],
    ],
    'geo-yapay-zeka-gorunurlugu' => [
        'subject' => 'Yapay Zekada Görünürlük (GEO)',
        'back'    => '/cozumlerimiz/geo-yapay-zeka-gorunurlugu/#iletisim',
        'fields'  => [
            'name'             => ['label' => 'Ad Soyad',    'type' => 'text',   'required' => true,  'max' => 120],
            'phone'            => ['label' => 'Telefon',     'type' => 'phone',  'required' => true,  'max' => 40],
            'email'            => ['label' => 'E-posta',     'type' => 'email',  'required' => false,  'max' => 190],
            'service_interest' => ['label' => 'İlgilendiği çalışma', 'type' => 'choice', 'required' => true, 'options' => $GEO],
            'message'          => ['label' => 'Mesaj',       'type' => 'long',   'required' => false, 'max' => 4000],
        ],
    ],
    'grafik-tasarim' => [
        'subject' => 'Grafik Tasarım',
        'back'    => '/cozumlerimiz/grafik-tasarim/#iletisim',
        'fields'  => [
            'name'             => ['label' => 'Ad Soyad',    'type' => 'text',   'required' => true,  'max' => 120],
            'phone'            => ['label' => 'Telefon',     'type' => 'phone',  'required' => true,  'max' => 40],
            'email'            => ['label' => 'E-posta',     'type' => 'email',  'required' => false,  'max' => 190],
            'service_interest' => ['label' => 'İlgilendiği iş', 'type' => 'choice', 'required' => true, 'options' => $DESIGNS],
            'message'          => ['label' => 'Mesaj',       'type' => 'long',   'required' => false, 'max' => 4000],
        ],
    ],
    'e-ticaret-site-kurulumu' => [
        'subject' => 'E-ticaret Site Kurulumu',
        'back'    => '/cozumlerimiz/e-ticaret-site-kurulumu/#iletisim',
        'fields'  => [
            'name'             => ['label' => 'Ad Soyad',    'type' => 'text',   'required' => true,  'max' => 120],
            'phone'            => ['label' => 'Telefon',     'type' => 'phone',  'required' => true,  'max' => 40],
            'email'            => ['label' => 'E-posta',     'type' => 'email',  'required' => false,  'max' => 190],
            'service_interest' => ['label' => 'İlgilendiği iş', 'type' => 'choice', 'required' => true, 'options' => $STORES],
            'message'          => ['label' => 'Mesaj',       'type' => 'long',   'required' => false, 'max' => 4000],
        ],
    ],
    'kurumsal-web-tasarim' => [
        'subject' => 'Kurumsal Web Tasarım',
        'back'    => '/cozumlerimiz/kurumsal-web-tasarim/#iletisim',
        'fields'  => [
            'name'             => ['label' => 'Ad Soyad',    'type' => 'text',   'required' => true,  'max' => 120],
            'phone'            => ['label' => 'Telefon',     'type' => 'phone',  'required' => true,  'max' => 40],
            'email'            => ['label' => 'E-posta',     'type' => 'email',  'required' => false,  'max' => 190],
            'service_interest' => ['label' => 'İlgilendiği iş', 'type' => 'choice', 'required' => true, 'options' => $PROJECTS],
            'message'          => ['label' => 'Mesaj',       'type' => 'long',   'required' => false, 'max' => 4000],
        ],
    ],
    'performans-reklam-yonetimi' => [
        'subject' => 'Performans Reklam Yönetimi',
        'back'    => '/cozumlerimiz/performans-reklam-yonetimi/#contact',
        'fields'  => [
            'name'             => ['label' => 'Ad Soyad',    'type' => 'text',   'required' => true,  'max' => 120],
            'phone'            => ['label' => 'Telefon',     'type' => 'phone',  'required' => true,  'max' => 40],
            'email'            => ['label' => 'E-posta',     'type' => 'email',  'required' => false,  'max' => 190],
            'service_interest' => ['label' => 'İlgilendiği hizmet', 'type' => 'choice', 'required' => true, 'options' => $INTERESTS],
            'message'          => ['label' => 'Mesaj',       'type' => 'long',   'required' => false, 'max' => 4000],
        ],
    ],
];

/* ---------------------------------------------------------------- helpers -*/

/* CR and LF in a header value let an attacker append headers of their own,
   which is how a contact form becomes an open relay. Anything containing them
   is rejected outright rather than stripped. */
function has_header_injection(string $value): bool
{
    return preg_match('/[\r\n]/', $value) === 1;
}

function clean(string $value, int $max): string
{
    /* Strip control characters except tab and newline, then collapse the
       Unicode whitespace that pastes from Word bring along. */
    $value = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', $value) ?? '';
    $value = trim($value);
    if (function_exists('mb_substr')) {
        return mb_substr($value, 0, $max, 'UTF-8');
    }
    return substr($value, 0, $max);
}

function text_length(string $value): int
{
    return function_exists('mb_strlen') ? mb_strlen($value, 'UTF-8') : strlen($value);
}

/* SMTP, not mail(). This host has mail() in disable_functions, so calling it
   is a fatal error, not a false return — the form died silently for exactly
   that reason until 16 Sep 2026. The mailbox in SMTP_USER sends on the site's
   behalf; see the SMTP block in config.php for where the password lives.

   Returns true only when the server accepted the message for delivery. */
function send_mail(string $subject, string $body, string $replyTo, string $replyName): bool
{
    if (SMTP_PASS === '') {
        /* No password on this server yet. Nothing to do but fail honestly. */
        return false;
    }

    require_once __DIR__ . '/assets/lib/phpmailer/Exception.php';
    require_once __DIR__ . '/assets/lib/phpmailer/PHPMailer.php';
    require_once __DIR__ . '/assets/lib/phpmailer/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->Port       = SMTP_PORT;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASS;
        if (SMTP_SECURE !== '') {
            $mail->SMTPSecure = SMTP_SECURE;
        }
        /* A visitor waiting on a form is not waiting on a mail server: fail
           fast enough that the page still answers. */
        $mail->Timeout  = 12;
        $mail->CharSet  = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->XMailer  = 'peradijital-form';

        $mail->setFrom(FORM_FROM, SITE_NAME);
        $mail->addAddress(FORM_TO);
        /* The visitor's own address, so hitting Reply in the mailbox goes to
           them. Never the From: that would fail SPF and land in spam. */
        if ($replyTo !== '' && filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
            $mail->addReplyTo($replyTo, $replyName);
        }

        $mail->Subject = $subject;
        $mail->Body    = $body;

        return $mail->send();
    } catch (Throwable $e) {
        /* Never let a mail-server problem surface as a blank 500. The caller
           turns this into the "write to us directly" message. */
        error_log('send.php SMTP: ' . $e->getMessage());
        return false;
    }
}

function wants_json(): bool
{
    $accept = $_SERVER['HTTP_ACCEPT'] ?? '';
    $xhr    = $_SERVER['HTTP_X_REQUESTED_WITH'] ?? '';
    return stripos($accept, 'application/json') !== false || strcasecmp($xhr, 'fetch') === 0;
}

/* --------------------------------------------------------------- validate -*/

$errors = [];
$values = [];
$fatal  = '';

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    $fatal = 'Bu adres yalnızca form gönderimlerini karşılar.';
    http_response_code(405);
    header('Allow: POST');
} else {
    $source = clean((string) ($_POST['form_source'] ?? ''), 60);

    if (!isset($SOURCES[$source])) {
        /* Unknown source means the field was tampered with or a bot posted
           blind. Do not guess a field set. */
        $fatal = 'Form kaynağı tanınmadı. Lütfen sayfayı yenileyip tekrar deneyin.';
        http_response_code(400);
    } else {
        $spec = $SOURCES[$source];

        /* Honeypot: visible to bots, hidden from people. Anything in it is a
           bot, and a bot gets the success page so it does not retry. */
        if (clean((string) ($_POST['reference_code'] ?? ''), 200) !== '') {
            $spec['silent_drop'] = true;
        }

        /* Timing. Empty means JS never ran, and a visitor without JS is not a
           reason to reject a lead, so the check is skipped rather than failed. */
        $stamp = clean((string) ($_POST['submitted_at'] ?? ''), 20);
        if ($stamp !== '' && ctype_digit($stamp)) {
            $elapsed = time() - (int) ((int) $stamp / 1000);
            if ($elapsed < FORM_MIN_SECONDS || $elapsed > FORM_MAX_SECONDS) {
                $spec['silent_drop'] = true;
            }
        }

        foreach ($spec['fields'] as $key => $field) {
            $raw = clean((string) ($_POST[$key] ?? ''), $field['max'] ?? 200);

            if ($raw === '') {
                if (!empty($field['required'])) {
                    $errors[$key] = $field['label'] . ' alanı zorunlu.';
                }
                $values[$key] = '';
                continue;
            }

            switch ($field['type']) {
                case 'email':
                    if (has_header_injection($raw) || !filter_var($raw, FILTER_VALIDATE_EMAIL)) {
                        $errors[$key] = 'Geçerli bir e-posta adresi girin.';
                    }
                    break;

                case 'url':
                    if (!preg_match('~^https?://~i', $raw)) {
                        $raw = 'https://' . $raw;
                    }
                    if (!filter_var($raw, FILTER_VALIDATE_URL)) {
                        $errors[$key] = 'Geçerli bir adres girin, örneğin https://ornek.com';
                    }
                    break;

                case 'phone':
                    if (!preg_match('/^[0-9+()\s.-]{7,40}$/u', $raw)) {
                        $errors[$key] = 'Geçerli bir telefon numarası girin.';
                    }
                    break;

                case 'choice':
                    if (!isset($field['options'][$raw])) {
                        $errors[$key] = 'Listeden bir seçenek seçin.';
                    }
                    break;

                case 'text':
                    if (has_header_injection($raw)) {
                        $errors[$key] = 'Bu alanda satır sonu kullanılamaz.';
                    } elseif (text_length($raw) < 2) {
                        $errors[$key] = $field['label'] . ' çok kısa.';
                    }
                    break;
            }

            $values[$key] = $raw;
        }
    }
}

/* ------------------------------------------------------------------- send -*/

$sent = false;

if ($fatal === '' && !$errors) {
    if (!empty($spec['silent_drop'])) {
        /* Looked automated. Report success, deliver nothing. */
        $sent = true;
    } else {
        $lines = [];
        foreach ($spec['fields'] as $key => $field) {
            $value = $values[$key] ?? '';
            if ($value === '') {
                continue;
            }
            if ($field['type'] === 'choice') {
                $value = $field['options'][$value];
            }
            $lines[] = $field['label'] . ': ' . $value;
        }
        $lines[] = '';
        $lines[] = '---';
        $lines[] = 'Form: ' . $spec['subject'];
        $lines[] = 'Sayfa: ' . SITE_URL . $spec['back'];
        $lines[] = 'Tarih: ' . date('d.m.Y H:i');
        $lines[] = 'IP: ' . ($_SERVER['REMOTE_ADDR'] ?? 'bilinmiyor');

        $body = implode("\r\n", $lines);
        $name = $values['name'] ?? '';

        $sent = send_mail($spec['subject'] . ' — ' . $name, $body, $values['email'] ?? '', $name);

        if (!$sent) {
            /* The lead is worth more than a tidy error. Tell them exactly where
               to send it instead of swallowing the failure.

               The status stays 200 on purpose: this host replaces the body of
               any 5xx with its own empty error document, so a truthful 500
               reaches the visitor as a blank page and the address below is
               lost. The failure is carried by ok:false in the JSON and by the
               page itself, both of which survive. */
            $fatal = 'Mesajınızı gönderemedik. Lütfen doğrudan ' . CONTACT_EMAIL . ' adresine yazın, hemen dönüş yapalım.';
        }
    }
}

/* --------------------------------------------------------------- response -*/

if (wants_json()) {
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode([
        'ok'      => $sent,
        'message' => $sent
            ? 'Teşekkürler. Mesajınız bize ulaştı, bir iş günü içinde dönüş yapıyoruz.'
            : ($fatal ?: 'Lütfen işaretli alanları düzeltin.'),
        'errors'  => $errors,
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

/* No-JS path: a real page in the site chrome, kept out of the index. */
$page = [
    'title'       => ($sent ? 'Mesajınız ulaştı' : 'Mesaj gönderilemedi') . ' — ' . SITE_NAME,
    'description' => '',
    'canonical'   => '',
    'robots'      => 'noindex, nofollow',
    'nav'         => '',
    'css'         => ['page.css'],
    'js'          => [],
    'og_type'     => 'website',
    'home'        => '/',
    'cta'         => '/#contact',
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main">
  <section class="band band--intro" aria-labelledby="send-title">
    <div class="band__inner">
      <p class="eyebrow"><?= $sent ? 'Gönderildi' : 'Bir sorun çıktı' ?></p>
      <h1 class="section-title" id="send-title"><?= $sent ? 'Teşekkürler, mesajınız bize ulaştı.' : 'Mesajınızı gönderemedik.' ?></h1>

      <?php if ($sent): ?>
        <p class="intro__lede">Bir iş günü içinde gerçek bir adresten dönüş yapıyoruz. Acele bir konuysa <a href="tel:<?= e(CONTACT_PHONE_HREF) ?>"><?= e(CONTACT_PHONE) ?></a> numarasından arayabilirsiniz.</p>
      <?php elseif ($fatal !== ''): ?>
        <p class="intro__lede"><?= e($fatal) ?></p>
      <?php else: ?>
        <p class="intro__lede">Formu gönderemedik. Aşağıdaki alanları düzeltip tekrar deneyin.</p>
        <ul class="form-errors" role="list">
          <?php foreach ($errors as $message): ?>
            <li><?= e($message) ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <ul class="nf-links" role="list">
        <li><a class="btn btn--dark" href="<?= e(isset($spec) ? $spec['back'] : '/#contact') ?>">Forma dön</a></li>
        <li><a class="btn btn--accent" href="mailto:<?= e(CONTACT_EMAIL) ?>">E-posta ile yazın</a></li>
      </ul>
    </div>
  </section>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
