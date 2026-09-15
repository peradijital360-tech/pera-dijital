<?php
/* ▸ THE ONE LINE TO CHANGE AT LAUNCH.

   'staging'  every page sends noindex, nofollow (meta tag and X-Robots-Tag
              header) and /robots.txt disallows all crawling.
   'live'     normal indexing: pages keep their own robots value only where
              they set one (the switched-off İşlerimiz pages), and
              /robots.txt allows crawling and lists the sitemap.

   Anything other than exactly 'live' counts as staging, and so does a
   missing file. Follow README → "Going live" when you flip it. */

const SITE_ENV = 'staging';
