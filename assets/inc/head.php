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
<!-- Marks that JS is available so CSS can reveal JS-dependent controls
     without a layout shift. -->
<script>document.documentElement.classList.add('js')</script>
<?php if (SITE_ENV === 'live'): ?>
<!-- Microsoft Clarity. Live only, so staging and local visits stay out of the data. -->
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "yiudct6u8f");
</script>
<?php endif; ?>
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
<!-- Icons. favicon.ico and apple-touch-icon.png sit at the site root because
     crawlers and iOS ask for those exact paths even without a link. Google
     shows the favicon beside search results from these links on the home
     page: square, at least 48px, and not blocked by robots.txt. -->
<link rel="icon" href="/favicon.ico" sizes="48x48">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="icon" href="<?= u('assets/img/favicon/favicon-192.png') ?>" type="image/png" sizes="192x192">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
<meta property="og:locale" content="tr_TR">
<meta property="og:type" content="<?= e($page['og_type']) ?>">
<meta property="og:title" content="<?= e($page['og_title']) ?>">
<meta property="og:description" content="<?= e($page['og_desc']) ?>">
<?php if ($page['canonical']): ?>
<meta property="og:url" content="<?= e(SITE_URL . $page['canonical']) ?>">
<?php endif; ?>
<meta property="og:image" content="<?= e(SITE_URL . OG_IMAGE) ?>">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?= e(OG_IMAGE_ALT) ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($page['tw_title']) ?>">
<meta name="twitter:description" content="<?= e($page['tw_desc']) ?>">
<meta name="twitter:image" content="<?= e(SITE_URL . OG_IMAGE) ?>">
<meta name="twitter:image:alt" content="<?= e(OG_IMAGE_ALT) ?>">
<link rel="preload" href="<?= u('assets/fonts/figtree-var.woff2') ?>" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="<?= e(asset('assets/css/reset.css')) ?>">
<link rel="stylesheet" href="<?= e(asset('assets/css/tokens.css')) ?>">
<link rel="stylesheet" href="<?= e(asset('assets/css/main.css')) ?>">
<?php foreach ($page['css'] as $sheet): ?>
<link rel="stylesheet" href="<?= e(asset('assets/css/' . $sheet)) ?>">
<?php endforeach; ?>
</head>
<body<?= $page['body_class'] ? ' class="' . e($page['body_class']) . '"' : '' ?>>

<a class="skip-link" href="#main">İçeriğe geç</a>
