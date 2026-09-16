<?php
/* TEMPORARY — SMTP diagnosis, 16 Sep 2026. Delete once the form sends.
   Reachable only with the key below; anything else gets a plain 404. */

declare(strict_types=1);
require_once __DIR__ . '/assets/inc/config.php';

if (($_GET['key'] ?? '') !== '2c3084246409cad9') {
    http_response_code(404);
    exit('Not found');
}

header('Content-Type: text/plain; charset=UTF-8');

echo 'PHP: ' . PHP_VERSION . "\n";
echo 'mail(): ' . (function_exists('mail') ? 'açık' : 'KAPALI (disable_functions)') . "\n";
echo 'SMTP_HOST: ' . SMTP_HOST . ' | port ' . SMTP_PORT . ' | ' . (SMTP_SECURE ?: 'şifresiz') . "\n";
echo 'SMTP_USER: ' . SMTP_USER . "\n";
echo 'SMTP_PASS: ' . (SMTP_PASS === '' ? 'YOK — config.local.php içine eklenmeli' : 'tanımlı (' . strlen(SMTP_PASS) . ' karakter)') . "\n\n";

/* Which ports this server can actually reach. Plenty of shared hosts block
   outbound SMTP, and from the outside that looks exactly like a wrong
   password, so it is worth ruling out first. */
echo "--- Bağlantı denemeleri ---\n";
foreach ([[SMTP_HOST, 587], [SMTP_HOST, 465]] as [$host, $port]) {
    $err = 0;
    $msg = '';
    $fp  = @fsockopen(($port === 465 ? 'ssl://' : '') . $host, $port, $err, $msg, 6);
    if ($fp) {
        $greeting = trim((string) fgets($fp, 512));
        fclose($fp);
        echo sprintf("%-32s AÇIK  %s\n", $host . ':' . $port, $greeting);
    } else {
        echo sprintf("%-32s kapalı (%s)\n", $host . ':' . $port, $msg ?: 'yanıt yok');
    }
}

if (SMTP_PASS === '') {
    echo "\nŞifre olmadan gerçek gönderim denenemez.\n";
    exit;
}

echo "\n--- Gerçek gönderim denemesi ---\n";
require_once __DIR__ . '/assets/lib/phpmailer/Exception.php';
require_once __DIR__ . '/assets/lib/phpmailer/PHPMailer.php';
require_once __DIR__ . '/assets/lib/phpmailer/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer(true);
$mail->SMTPDebug   = 2;
$mail->Debugoutput = static function ($str) { echo '  ' . rtrim($str) . "\n"; };

try {
    $mail->isSMTP();
    $mail->Host     = SMTP_HOST;
    $mail->Port     = SMTP_PORT;
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USER;
    $mail->Password = SMTP_PASS;
    if (SMTP_SECURE !== '') {
        $mail->SMTPSecure = SMTP_SECURE;
    }
    $mail->Timeout = 12;
    $mail->CharSet = 'UTF-8';
    $mail->setFrom(FORM_FROM, SITE_NAME);
    $mail->addAddress(FORM_TO);
    $mail->Subject = 'MAILTEST — form teşhisi';
    $mail->Body    = "Bu bir testtir. Form teşhisi için gönderildi.\n" . date('d.m.Y H:i');
    $mail->send();
    echo "\nSONUÇ: GÖNDERİLDİ. " . FORM_TO . " kutusuna bakın.\n";
} catch (Throwable $e) {
    echo "\nSONUÇ: BAŞARISIZ — " . $e->getMessage() . "\n";
}
