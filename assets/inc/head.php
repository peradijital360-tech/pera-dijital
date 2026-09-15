<?php
/* Opens the document: meta block, stylesheets, body, skip link.
   Every page sets $page before requiring this. Keys:
     title, description, canonical, nav, css[], js[], og_type, body_class,
     home (wordmark target), cta (header button target)  */

require_once __DIR__ . '/config.php';

/* Staging: the header form of noindex as well, for crawlers that read
   headers but not the markup. Sent before any output. */
if (SITE_ENV !== 'live' && !headers_sent()) {
    header('X-Robots-Tag: noindex, nofollow', true);
}

$page += [
    'title'       => SITE_NAME,
    'description' => '',
    'canonical'   => '/',
    'nav'         => '',
    'css'         => [],
    'js'          => [],
    'og_type'     => 'website',
    'body_class'  => 'page-inner',
    /* Social copy is written shorter than the meta description on purpose.
       Leave these empty and they fall back to the title/description. */
    'og_title'    => '',
    'og_desc'     => '',
    'tw_title'    => '',
    'tw_desc'     => '',
    'home'        => u(''),
    'cta'         => u('#contact'),
    'robots'      => '',
];

$page['og_title'] = $page['og_title'] !== '' ? $page['og_title'] : $page['title'];
$page['og_desc']  = $page['og_desc']  !== '' ? $page['og_desc']  : $page['description'];
$page['tw_title'] = $page['tw_title'] !== '' ? $page['tw_title'] : $page['og_title'];
$page['tw_desc']  = $page['tw_desc']  !== '' ? $page['tw_desc']  : $page['og_desc'];
?><!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The only inline script on the site: marks that JS is available so CSS can
     reveal JS-dependent controls without a layout shift. Nothing else here. -->
<script>document.documentElement.classList.add('js')</script>
<?php if ($page['canonical']): ?>
<link rel="canonical" href="<?= e(SITE_URL . $page['canonical']) ?>">
<?php endif; ?>
<title><?= e($page['title']) ?></title>
<meta name="description" content="<?= e($page['description']) ?>">
<?php if (SITE_ENV !== 'live'): ?>
<meta name="robots" content="noindex, nofollow">
<?php endif; ?>
<?php if (SITE_ENV === 'live'): ?>
<?php if ($page['robots']): ?>
<meta name="robots" content="<?= e($page['robots']) ?>">
<?php endif; ?>
<?php endif; ?>
<meta name="theme-color" content="#ffffff">
<meta property="og:locale" content="tr_TR">
<meta property="og:type" content="<?= e($page['og_type']) ?>">
<meta property="og:title" content="<?= e($page['og_title']) ?>">
<meta property="og:description" content="<?= e($page['og_desc']) ?>">
<?php if ($page['canonical']): ?>
<meta property="og:url" content="<?= e(SITE_URL . $page['canonical']) ?>">
<?php endif; ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($page['tw_title']) ?>">
<meta name="twitter:description" content="<?= e($page['tw_desc']) ?>">
<link rel="preload" href="<?= u('assets/fonts/figtree-var.woff2') ?>" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="<?= u('assets/css/reset.css') ?>">
<link rel="stylesheet" href="<?= u('assets/css/tokens.css') ?>">
<link rel="stylesheet" href="<?= u('assets/css/main.css') ?>">
<?php foreach ($page['css'] as $sheet): ?>
<link rel="stylesheet" href="<?= u('assets/css/' . $sheet) ?>">
<?php endforeach; ?>
</head>
<body<?= $page['body_class'] ? ' class="' . e($page['body_class']) . '"' : '' ?>>

<a class="skip-link" href="#main">İçeriğe geç</a>
