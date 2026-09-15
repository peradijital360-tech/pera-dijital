<?php
/* Served at /robots.txt through the rewrite in .htaccess. The content
   follows SITE_ENV (assets/inc/config.php): staging closes the whole site,
   live opens it, names the AI crawlers explicitly and lists the sitemap. */

declare(strict_types=1);

require_once __DIR__ . '/assets/inc/config.php';

header('Content-Type: text/plain; charset=utf-8');

if (SITE_ENV !== 'live') {
    header('X-Robots-Tag: noindex, nofollow');
    echo "# Staging. Crawling is closed until SITE_ENV is 'live'.\n";
    echo "User-agent: *\n";
    echo "Disallow: /\n";
    exit;
}

/* A crawler that finds a group with its own name ignores the * group, so
   every named group repeats Allow: /. Listed explicitly so the intent is
   unambiguous to AI search and answer engines:
     OAI-SearchBot, ChatGPT-User  ChatGPT search and browsing
     GPTBot                       OpenAI crawling
     PerplexityBot                Perplexity
     ClaudeBot, Claude-SearchBot  Anthropic
     Google-Extended              Gemini / Google AI use of the content
     Applebot, Applebot-Extended  Apple Intelligence, Siri, Spotlight
     Bingbot                      Bing, which Copilot and ChatGPT search use */
$aiCrawlers = [
    'OAI-SearchBot',
    'ChatGPT-User',
    'GPTBot',
    'PerplexityBot',
    'ClaudeBot',
    'Claude-SearchBot',
    'Google-Extended',
    'Applebot',
    'Applebot-Extended',
    'Bingbot',
];

echo "User-agent: *\n";
echo "Allow: /\n\n";

foreach ($aiCrawlers as $bot) {
    echo 'User-agent: ' . $bot . "\n";
    echo "Allow: /\n\n";
}

echo 'Sitemap: ' . SITE_URL . "/sitemap.xml\n";
