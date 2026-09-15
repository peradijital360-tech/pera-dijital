<?php
/* Served at /robots.txt through the rewrite in .htaccess. The content
   follows SITE_ENV in assets/inc/config.local.php: staging closes the whole
   site, live opens it and lists the sitemap. */

declare(strict_types=1);

require_once __DIR__ . '/assets/inc/config.php';

header('Content-Type: text/plain; charset=utf-8');

if (SITE_ENV === 'live') {
    echo "User-agent: *\n";
    echo "Allow: /\n\n";
    echo 'Sitemap: ' . SITE_URL . "/sitemap.xml\n";
} else {
    header('X-Robots-Tag: noindex, nofollow');
    echo "# Staging. Crawling is closed until SITE_ENV is 'live'.\n";
    echo "User-agent: *\n";
    echo "Disallow: /\n";
}
