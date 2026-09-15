# Pera Dijital — static site

Work in progress; the full deployment and editing guide lands at Phase 9.

## Running it locally

The pages are PHP now, so `python -m http.server` will serve you the source
instead of the page. Use PHP's own server, from this directory:

```
php -S localhost:8080
```

Then open <http://localhost:8080/>. It resolves `/cozumlerimiz/` to
`cozumlerimiz/index.php` the same way Apache does, and it runs `send.php`.

If `php` is not installed: `brew install php` (Homebrew), or use MAMP/Herd.

## Deploying: GitHub → cPanel

**Step-by-step go-live runbook (Turkish), rollback, post-launch checks and
Search Console setup: [`YAYINA-ALMA.md`](YAYINA-ALMA.md).** Post-launch
automated check: `bash _tools/yayin_kontrol.sh`.

The site lives at **https://www.peradijital.com.tr**. The code is in a private
GitHub repository; cPanel's **Git™ Version Control** pulls it and
`.cpanel.yml` copies only the public site into the web root. `_tools/`,
`_drafts/`, `README.md` and `.git` never reach the server.

Server requirement: **PHP 7.1 or newer** (8.1+ recommended), with `mbstring`.
Set it in cPanel → *MultiPHP Manager* for the domain.

### One-time setup

1. **cPanel SSH key.** cPanel → *SSH Access* → *Manage SSH Keys* → *Generate a
   New Key* (no passphrase — cPanel cannot enter one), then *Manage* →
   *Authorize*. Open *View/Download* and copy the **public** key.
2. **Deploy key on GitHub.** Repository → *Settings* → *Deploy keys* →
   *Add deploy key*. Paste the public key. Leave *Allow write access* off.
3. **Clone in cPanel.** cPanel → *Git™ Version Control* → *Create*.
   Clone URL: the SSH form, `git@github.com:<account>/<repo>.git`.
   Repository path: something outside the web root, e.g.
   `/home/<cpanel-user>/repositories/pera-dijital`. Do **not** clone into
   `public_html`.
4. **Document root.** `.cpanel.yml` deploys to `$HOME/public_html/`, which is
   the primary domain's root. If `peradijital.com.tr` is an addon domain with
   its own folder (cPanel → *Domains* shows it), change `DEPLOYPATH` in
   `.cpanel.yml` to that folder and push.
5. **Mail.** Create `hello@peradijital.com.tr` and
   `website@peradijital.com.tr` in cPanel → *Email Accounts* (or change
   `FORM_TO` / `FORM_FROM` in `config.php`), and make sure SPF and DKIM are
   valid in cPanel → *Email Deliverability*. `FORM_FROM` must be on this
   domain or form mail lands in spam.
6. **HTTPS.** cPanel → *SSL/TLS Status* → run AutoSSL for both
   `peradijital.com.tr` and `www.peradijital.com.tr` **before** the first
   deploy: `.htaccess` forces HTTPS and the www host, so without a certificate
   the site redirects into a browser warning.

### Every update

1. Commit and `git push` to `main`.
2. cPanel → *Git™ Version Control* → *Manage* → *Pull or Deploy* →
   **Update from Remote**, then **Deploy HEAD Commit**.

Deploy copies over existing files but never deletes: a file removed from the
repository stays on the server until you delete it in *File Manager*.

### Staging and live — one flag

`assets/inc/config.local.php` holds the only switch:

```php
const SITE_ENV = 'staging';   // or 'live'
```

| | `staging` | `live` |
|---|---|---|
| every page | `<meta name="robots" content="noindex, nofollow">` and an `X-Robots-Tag: noindex, nofollow` header | no robots tag, except the switched-off İşlerimiz pages |
| `/robots.txt` | `User-agent: *` / `Disallow: /` | `User-agent: *` / `Allow: /` / `Sitemap: https://www.peradijital.com.tr/sitemap.xml` |

`/robots.txt` is produced by `robots.php` (rewrite in `.htaccess`); there is
no static `robots.txt`, and none should be uploaded — it would be ignored by
the rewrite but would confuse anyone reading File Manager. A missing
`config.local.php`, or any value other than exactly `'live'`, is staging.

### Going live — checklist

Do these in order, the day the real hero images are in.

1. **Flip the flag.** In `assets/inc/config.local.php` change
   `'staging'` to `'live'`. Commit, push, then in cPanel *Update from Remote*
   and *Deploy HEAD Commit*.
2. **Verify robots.txt.** Open `https://www.peradijital.com.tr/robots.txt`
   in a private window. It must read `Allow: /` and end with the `Sitemap:`
   line. If it still says `Disallow: /`, the deploy did not run or the flag is
   misspelled (it must be lowercase `live`, in single quotes).
3. **Verify noindex is really gone.** On the homepage and one service page:
   - *View source* and search for `robots`: there must be **no**
     `noindex` meta tag.
   - Check the header too — Terminal:
     `curl -sI https://www.peradijital.com.tr/ | grep -i x-robots`
     must print **nothing**.
   - Search Console → *URL Inspection* → *Test live URL*: "Indexing
     allowed? Yes".
   If any page still shows `noindex`, a server or CDN cache is serving the
   staging copy: purge it (cPanel cache / Cloudflare) and re-check.
4. **Submit the sitemap.** Search Console → add the property for
   `https://www.peradijital.com.tr` (Domain property via DNS, or URL-prefix)
   → *Sitemaps* → submit `sitemap.xml`. Status should become *Success*.
5. **Ask for the homepage to be indexed.** *URL Inspection* on the homepage →
   *Request indexing*. The rest follows from the sitemap.
6. **Watch for a week.** Search Console → *Pages*: URLs should move out of
   "Excluded by 'noindex' tag" and "Blocked by robots.txt". Google re-reads
   robots.txt roughly once a day, so the first day can still show the
   staging state.

Only the İşlerimiz pages should keep `noindex` after launch — that is
`SHOW_WORK`, a separate switch.

## URL convention

Every page is directory-based and extensionless. A page lives at
`<slug>/index.php` and is served at `/<slug>/`.

```
/                                             index.php
/cozumlerimiz/                                cozumlerimiz/index.php
/cozumlerimiz/performans-reklam-yonetimi/     cozumlerimiz/performans-reklam-yonetimi/index.php
/referanslarimiz/                             referanslarimiz/index.php
/islerimiz/                                   islerimiz/index.php          (SWITCHED OFF)
/islerimiz/<marka-slug>/                      islerimiz/<marka-slug>/index.php  (SWITCHED OFF)
```

Adding a page means creating a new directory with an `index.php`, never a
loose file at the top level. `.htaccess` 301s `/path/index.php` and any stray
`/path.html` or `/path.php` to the canonical `/path/` form, so nothing is
reachable at two addresses. Update `sitemap.xml` at the same time.

**All asset and page paths are root-relative** (`/assets/...`, not
`../assets/...`). A page can then be moved to another depth without rewriting
its links, which is what used to break.

## Shared markup — there is now exactly one copy of each

The header, footer and `<head>` block live in `assets/inc/` and are included
by every page. **Edit the include, never a page.**

| file | holds |
|---|---|
| `assets/inc/config.php` | site constants, contact details, `SERVICES`, the `e()`/`u()`/`service_url()` helpers |
| `assets/inc/head.php` | doctype, meta, Open Graph, stylesheet links, `<body>`, skip link |
| `assets/inc/header.php` | site header, nav, solutions dropdown |
| `assets/inc/footer.php` | site footer, closing script tags, `</body></html>` |

A page is a `$page` array plus its `<main>`:

```php
<?php
$page = [
    'title'       => "...",
    'description' => "...",
    'canonical'   => '/islerimiz/',   // '' omits canonical and og:url
    'nav'         => 'work',          // marks the current nav item
    'css'         => ['page.css', 'work.css'],
    'js'          => ['sector-filter.js'],
    'body_class'  => 'page-inner',
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
... <main> ...
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
```

Optional `$page` keys: `og_title`, `og_desc`, `tw_title`, `tw_desc`. Social
copy is deliberately written shorter than the meta description; leave these
out and they fall back to `title` / `description`.

**Adding a service is one row** in `SERVICES` in `config.php`. It appears in
the header dropdown and the footer column automatically. `'built' => false`
points the link at the solutions index instead of a 404.

`assets/inc/` is blocked from direct HTTP access by its own `.htaccess`.

### Summary panels on text-led service pages

Service pages without imagery (Lead Generation, SEO, GEO) put a sticky
reference panel beside a text band. The content is data, set at the top of
the page file right after `$page`:

```php
$summaries = [
    'nedir' => [                       // the band's section id
        'label'  => 'Hizmet özeti',    // aria-label of the <aside>
        'blocks' => [
            ['title' => 'Kapsam',        'items' => ['...', '...']],
            ['title' => 'Kimler için',   'items' => ['...']],
            ['title' => 'Nasıl ölçülür', 'items' => ['...']],
        ],
    ],
];
```

In the band, give the inner `with-summary` and require the partial after the
prose:

```php
<div class="band__inner with-summary">
  <div class="prose">...</div>
  <?php $summary = $summaries['nedir']; require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/summary.php'; ?>
</div>
```

Every block is a list. Only facts the page itself states; otherwise a
`[REPLACE — ...]` item. Side by side from 64rem, sticky only when the viewport
is at least 46rem tall — that floor is the tallest panel plus the section nav,
so re-measure it if a panel grows.

## The contact form

Both forms post to `/send.php`. Which form posted is declared by the hidden
`form_source` field, and that key selects the field set, the validation rules
and the mail subject in `$SOURCES` at the top of `send.php`:

| `form_source` | page |
|---|---|
| `anasayfa` | `/#contact` |
| `performans-reklam-yonetimi` | the service page |

Adding a third form is one entry in `$SOURCES` plus a matching hidden field.

Spam handling is two-layer and neither rejects a real person: `reference_code`
is a honeypot, and `submitted_at` is a timestamp the (not yet written) form JS
stamps on first interaction. **An empty `submitted_at` means JS is off, and the
timing check is skipped rather than failed.** Submissions that look automated
get the success page and are silently dropped.

Before launch, set `FORM_TO` and `FORM_FROM` in `config.php`. `FORM_FROM` must
be an address at your own domain or the mail fails SPF and lands in spam; the
visitor's address goes in `Reply-To`.

If `mail()` fails, the visitor is shown the real email address rather than a
dead end.

## İşlerimiz is switched off

`SHOW_WORK` in `assets/inc/config.php` is `false`. The portfolio and the case
studies are **not deleted** — every file is where it was. While the flag is off:

- no header nav link, no footer link
- both pages send `<meta name="robots" content="noindex, nofollow">`
- neither URL is in `sitemap.xml`
- Referanslarımız no longer links across to them

The pages still answer on their URLs. That is deliberate: they are unlisted,
not blocked, so you can send someone the link. **Do not add a `Disallow` for
them in `robots.txt`** — a blocked crawler cannot read the `noindex`, and the
URL can then get indexed anyway from an external link. `noindex` only works if
the crawler is allowed in.

### Re-enabling İşlerimiz — three steps

1. `assets/inc/config.php` → `const SHOW_WORK = true;`
   This alone restores the header link, the footer link and both `robots` tags.
2. `sitemap.xml` → add the two `<url>` blocks back:
   `https://www.peradijital.com.tr/islerimiz/` and `/islerimiz/marka-01/`
   (`changefreq`/`priority` copied from any neighbouring entry).
3. `referanslarimiz/index.php` → optionally re-add the closing sentence of
   `.intro__lede` linking to `/islerimiz/`. It was removed rather than gated
   because it is prose, not markup.

Nothing else is needed. Do not re-enable until the case studies carry real
brands and real mockups — the ItemList on `/islerimiz/` still emits sixteen
placeholder work items as structured data.

## The sector filter is switched off

`SHOW_SECTOR_FILTER` in `assets/inc/config.php` is `false`. The row does not
render. Nothing else changed: `SECTORS`, every brand's `sector` value and the
counting logic are all still live, and every logo still renders.

### Bringing it back — one step

`assets/inc/config.php` → `const SHOW_SECTOR_FILTER = true;`

That is the whole change. The row still refuses to render unless at least two
sectors have `SECTOR_MIN` brands, so turning it on early cannot produce a
one-button row — it will simply stay hidden until the data earns it.

As of the current roster three sectors qualify (Gastronomi 3, E-ticaret 3,
Moda 3) and eleven have a single brand.

## The sector filter builds itself

`referanslarimiz/` renders **both** the filter row and the logo grid from
`CLIENTS` in `assets/inc/clients.php`, so the two can never disagree.

- A sector earns a button once it has **`SECTOR_MIN` (3)** brands.
- If fewer than **two** sectors qualify, the whole filter row is omitted —
  one button plus "Tümü" is a label, not a filter.
- **Every brand always renders**, including brands in sectors that have not
  earned a button. The filter never removes a logo from the document; only
  JS hides cells, and only after a click. With JS off the row never appears.

Both rules are computed, not configured. Adding brands turns sectors on by
itself. To add a brand: one row in `CLIENTS`. To add a sector: one row in
`SECTORS` — it stays buttonless until three brands reference it.

## Logo intake checklist

Follow this per logo and the grid stays optically even.

**1. Format**
- **Preferred: SVG**, when the client's brand pack has vector. Convert all
  text to outlines, and no embedded raster images inside the SVG.
- **Fallback: WebP with an alpha channel** (lossless, or quality 90).
- If all you receive is PNG/JPG, convert to WebP. Never ship a JPG: it has
  no transparency and will show a white box on the cell.

**2. Pixel dimensions — export to fit a box, not to a fixed width**

The CSS sizes logos by *height* (`--logo-h`), and width follows. Aspect ratios
vary wildly, so one fixed width would be wrong for almost every logo.

> **Scale the logo to fit inside 700 × 150 px**, touching at least one edge.

That single rule covers every shape at up to 3× pixel density. The arithmetic:
the widest a logo ever renders is ~225 CSS px (4-column grid just under
1440px) and the tallest is 48 CSS px (`--logo-h` ceiling of 3rem); 225 × 3 =
675 and 48 × 3 = 144, rounded to 700 × 150. A square mark lands at 150 × 150,
a 10:1 wordmark at 700 × 70 — both correct.

Put the **real exported pixel dimensions** in the row's `width` and `height`.
They set the intrinsic aspect ratio and prevent layout shift; they are not the
display size.

**3. Transparent background, tight crop, zero padding**

Crop to the ink. No baked-in margin, no drop shadow, no rounded plate behind
the mark. Padding inside the file makes that logo render visually smaller than
its neighbours, and `--logo-h` can no longer correct it — the value would be
tuning the whitespace, not the logo.

**4. File naming — ASCII only**

`assets/img/clients/<brand-slug>.webp`, lowercase, hyphens between words,
no spaces, no Turkish characters. Transliterate: ö→o, ü→u, ş→s, ç→c, ğ→g,
ı→i, İ→i. `Atölye No:30` → `atolye-no30.webp`.

**5. The optical height value**

Goes in the brand's row in `assets/inc/clients.php`:

```php
['file' => 'atolye-no30.webp', 'name' => 'Atölye No:30', 'sector' => 'moda',
 'logo_h' => '2rem', 'width' => 700, 'height' => 150, 'href' => ''],
```

`logo_h` is **optical**, not measured — it exists because a circular badge and
a long wordmark set to the same pixel height do not look the same size. Set it
by eye against the cells beside it:

| shape | start at |
|---|---|
| long wordmark, low letterforms | `1.75rem` |
| wordmark with a mark beside it | `2rem` |
| square, circular or stacked badge | `2.75rem` |

Usable range `1.5rem`–`3rem`. If a logo needs more than `3rem` it is almost
always padded — recrop it instead.

**6. Light-on-dark logos — what I need from you**

Cells are white and logos render `grayscale(1) opacity(0.72)` at rest, so a
white or pale logo disappears completely.

Send **the dark or single-colour version** for light backgrounds. Most brand
packs have one, usually labelled "mono", "black" or "positive"; that is the
asset the grid wants, not the reversed/knockout one.

If the brand genuinely has no dark version, tell me and I will need your
decision on one of two things, because both change the design: give that one
cell a dark background (breaks the uniform white grid, needs a per-cell
background field), or use the client's wordmark set in type instead of their
logo (needs their written permission). Do not send the light version expecting
it to be inverted automatically — inverting a colour logo produces a colour
nothing in their brand pack contains.

## Stylesheets

| file | loaded on | holds |
|---|---|---|
| `reset.css` | every page | minimal reset |
| `tokens.css` | every page | `:root` custom properties only |
| `main.css` | every page | base, layout, shared components, homepage sections |
| `page.css` | every page below the root, and `send.php` | inner-page chrome: breadcrumb, band, eyebrow, split, contact band, form, form error summary |
| `references.css` | `referanslarimiz/` | sector filter and client logo grid |
| `work.css` | `islerimiz/` | work grid and card |
| `case.css` | `islerimiz/<slug>/` | case study meta strip, hero, prose, gallery, case nav |

## Scripts

One inline script is allowed, and only one: a single line in `<head>` that
adds a `js` class to `<html>`. It exists so CSS can reveal JS-dependent
controls without a layout shift. Everything else is an ES module in
`assets/js/`.

## The two client-facing list pages

They must not converge. `referanslarimiz/` is a flat trust wall: logo only,
sector filter, no per-brand detail. `islerimiz/` is the portfolio: brand plus
the service performed, structured to become `/islerimiz/<marka>/` case study
pages. Referanslarımız must never gain service labels; İşlerimiz must never
gain the sector filter. If either grows the other's feature, merge them.

## Nav breakpoint

The site nav collapses to the overlay below **64rem**, not 60rem: a fifth item
no longer fits beside the logo and CTA at 960px. Every *layout* breakpoint is
still 60rem. Adding a sixth nav item will need this raised again — measure
`.site-header__inner` slack before adding one.

## Case studies

One instance exists: `islerimiz/marka-01/`. To add another, copy that folder,
rename it to the new slug, and replace every block marked `▸ REPLACE`.

**Linking a card on /islerimiz/.** Each card ships as an optional link. To turn
card *NN* into a case study link, change one line:

```html
<div class="portfolio-card__inner">          <!-- from -->
<a class="portfolio-card__inner" href="marka-NN/">   <!-- to -->
```

and close it with `</a>` instead of `</div>`. Nothing else changes: all card
chrome lives on `__inner`, and `:focus-within` starts working automatically
because the card now contains something focusable.

**Previous / next.** There is no build step, so nothing derives siblings. The
prev and next links ship commented out in `islerimiz/<slug>/index.html`; when a
sibling exists, uncomment the block and point its `href` at that folder. "Tüm
işler" always shows and centres itself while it is the only control.

**Results block.** Ships as visible placeholders under a loud REPLACE banner.
If real measured data is not supplied, delete the whole section rather than
publishing it. No figure from it is ever emitted as structured data.

## Mega menu promo card

The dark card on the right of the Çözümlerimiz mega menu lives in
`assets/inc/header.php`. It is aimed at the visitor who opened the menu because
they do not know which service they need, and links to the contact section.

Copy limits, measured at 1024, 1280 and 1440: heading 37–42 characters, body
60–69 characters. Inside those ranges both stay two lines; shorter collapses
to one line above 1280, longer wraps to a third line at 1024.

**Revisit when İşlerimiz goes live.** Once real case studies exist, replace
this card with a real piece of work: brand, what was done, a link to the case
study. A real project in that slot will do more than any line of copy.
