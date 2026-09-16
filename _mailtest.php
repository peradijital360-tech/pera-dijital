<?php
/* TEMPORARY — mail() diagnosis, 16 Sep 2026. Delete once the form sends.
   Reachable only with the key below; anything else gets a plain 404. */

declare(strict_types=1);
require_once __DIR__ . '/assets/inc/config.php';

if (($_GET['key'] ?? '') !== '2c3084246409cad9') {
    http_response_code(404);
    exit('Not found');
}

header('Content-Type: text/plain; charset=UTF-8');

echo 'PHP: ' . PHP_VERSION . "\n";
echo 'mail() var mı: ' . (function_exists('mail') ? 'evet' : 'HAYIR') . "\n";
echo 'sendmail_path: ' . (ini_get('sendmail_path') ?: '(boş)') . "\n";
echo 'disable_functions: ' . (ini_get('disable_functions') ?: '(boş)') . "\n";
echo 'SMTP ini: ' . (ini_get('SMTP') ?: '(boş)') . "\n\n";

$body   = "Bu bir test mesajıdır. Form teşhisi için gönderildi.\n" . date('d.m.Y H:i');
$common = "Content-Type: text/plain; charset=UTF-8\r\nMIME-Version: 1.0";

$tries = [
    'A: From website@, -f website@' => [
        'From: ' . FORM_FROM,
        '-f' . FORM_FROM,
    ],
    'B: From website@, -f yok' => [
        'From: ' . FORM_FROM,
        null,
    ],
    'C: From hello@, -f yok' => [
        'From: ' . CONTACT_EMAIL,
        null,
    ],
];

foreach ($tries as $label => [$from, $params]) {
    error_clear_last();
    $ok = $params === null
        ? @mail(FORM_TO, 'MAILTEST ' . $label, $body, $from . "\r\n" . $common)
        : @mail(FORM_TO, 'MAILTEST ' . $label, $body, $from . "\r\n" . $common, $params);
    $err = error_get_last();
    echo $label . ' => ' . ($ok ? 'TRUE (kabul edildi)' : 'FALSE') . "\n";
    if ($err) {
        echo '    hata: ' . $err['message'] . "\n";
    }
}

echo "\nTRUE demek 'sunucu kuyruğa aldı' demek; kutuya düşmesi ayrı bir konu.\n";
