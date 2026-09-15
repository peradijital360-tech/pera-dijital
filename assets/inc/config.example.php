<?php
/* TEMPLATE for assets/inc/config.local.php — that file is NOT in git.

   It lives only on the server (and optionally on your own machine), so a
   deploy never overwrites it. Create it next to this file, same folder:
     public_html/assets/inc/config.local.php

   'staging'  every page sends noindex, nofollow (meta tag and X-Robots-Tag
              header) and /robots.txt disallows all crawling.
   'live'     normal indexing; /robots.txt allows crawling and lists the
              sitemap.

   Since launch (15 Sep 2026) a MISSING config.local.php means live. Create
   the file only to switch the site to staging. Inside the file, any value
   other than exactly 'live' is staging. This template is not read by the
   site and is not deployed. */

const SITE_ENV = 'staging';
