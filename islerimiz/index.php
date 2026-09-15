<?php
$page = [
    'title'       => "İşlerimiz — Pera Dijital",
    'description' => "Kurumsal web siteleri, e-ticaret altyapıları, marka kimlikleri ve Meta reklam kampanyaları. Yayına aldığımız seçili işler ve her biri için ne yaptığımız.",
    'canonical'   => '/islerimiz/',
    'nav'         => 'work',
    'css'         => ['page.css', 'work.css'],
    'js'          => [],
    'og_type'     => 'website',
    'home'        => '/',
    'cta'         => '/#contact',
    'body_class'  => "page-inner",
    'og_desc'     => "Kurumsal web siteleri, e-ticaret altyapıları, marka kimlikleri ve Meta reklam kampanyaları. Yayına aldığımız seçili işler.",
    'tw_desc'     => "Kurumsal web siteleri, e-ticaret altyapıları, marka kimlikleri ve Meta reklam kampanyaları.",
];
/* Out of the live site while SHOW_WORK is false. noindex keeps it out of
   the index; nofollow stops it passing signals to the other work pages. */
$page['robots'] = SHOW_WORK ? '' : 'noindex, nofollow';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main">

  <!-- ============================================================
       INTRO
       ============================================================ -->
  <section class="band band--intro" aria-labelledby="intro-title">
    <div class="band__inner">

      <nav class="breadcrumb" aria-label="Sayfa yolu">
        <ol class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">Pera Dijital</a><svg class="breadcrumb__sep" width="14" height="14" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></li>
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">İşlerimiz</span></li>
        </ol>
      </nav>

      <!-- İÇERİK — h1 chosen from the three options offered; one string to swap. -->
      <h1 class="section-title" id="intro-title">Yayına aldığımız işler</h1>

      <!-- Self-contained summary: what kinds of work, for whom. Carries the
           single cross-link to referanslarimiz with a descriptive anchor. -->
      <p class="intro__lede">Kurumsal web siteleri, e-ticaret altyapıları, marka kimlikleri ve Meta reklam kampanyaları kuruyoruz. Bu sayfada gösterebildiğimiz seçili projeler var; her biri için ne yaptığımızı da yazdık. Birlikte çalıştığımız <a href="/referanslarimiz/">markaların tam listesini referanslarımız sayfasında</a> bulabilirsiniz. Her işte aynı beş kişilik kıdemli ekip görev alıyor.</p>

    </div>
  </section>

  <!-- ============================================================
       WORK GRID — uniform, CSS-only hover, no filter, no masonry
       ============================================================ -->
  <section class="band band--work" id="isler" aria-labelledby="isler-title">
    <div class="band__inner">
      <h2 class="section-title" id="isler-title">Seçili projeler</h2>

      <ul class="portfolio-grid" role="list">
        <li class="portfolio-card">
          <!-- LINKED. To link any other card, change its one line from
               <div class="portfolio-card__inner">
               to
               <a class="portfolio-card__inner" href="marka-NN/">
               and close it with </a> instead of </div>. Nothing else changes. -->
          <a class="portfolio-card__inner" href="/islerimiz/marka-01/">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-01.webp" alt="MARKA 01" width="400" height="160" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 01<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">Kurumsal Web Tasarım</p>
          </a>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-02.webp" alt="MARKA 02" width="400" height="160" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 02<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">Meta Reklam Yönetimi</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-03.webp" alt="MARKA 03" width="400" height="160" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 03<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">E-ticaret Sitesi</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-04.webp" alt="MARKA 04" width="400" height="160" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 04<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">Marka Kimliği</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-05.webp" alt="MARKA 05" width="400" height="160" loading="lazy" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 05<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">Kurumsal Web Tasarım</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-06.webp" alt="MARKA 06" width="400" height="160" loading="lazy" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 06<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">Meta Reklam Yönetimi</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-07.webp" alt="MARKA 07" width="400" height="160" loading="lazy" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 07<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">E-ticaret Sitesi</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-08.webp" alt="MARKA 08" width="400" height="160" loading="lazy" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 08<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">Marka Kimliği</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-09.webp" alt="MARKA 09" width="400" height="160" loading="lazy" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 09<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">Kurumsal Web Tasarım</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-10.webp" alt="MARKA 10" width="400" height="160" loading="lazy" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 10<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">Meta Reklam Yönetimi</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-11.webp" alt="MARKA 11" width="400" height="160" loading="lazy" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 11<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">E-ticaret Sitesi</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-12.webp" alt="MARKA 12" width="400" height="160" loading="lazy" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 12<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">Marka Kimliği</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-13.webp" alt="MARKA 13" width="400" height="160" loading="lazy" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 13<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">Kurumsal Web Tasarım</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-14.webp" alt="MARKA 14" width="400" height="160" loading="lazy" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 14<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">Meta Reklam Yönetimi</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-15.webp" alt="MARKA 15" width="400" height="160" loading="lazy" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 15<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">E-ticaret Sitesi</p>
          </div>
        </li>
        <li class="portfolio-card">
          <!-- Swap this div for an anchor to make the card a case study page.
               All card chrome lives on __inner, so nothing needs restyling. -->
          <div class="portfolio-card__inner">
            <span class="portfolio-card__media">
              <img class="portfolio-card__logo" src="/assets/img/work/marka-16.webp" alt="MARKA 16" width="400" height="160" loading="lazy" decoding="async">
            </span>
            <h3 class="portfolio-card__brand">MARKA 16<svg class="portfolio-card__eye" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><g class="portfolio-card__lid"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle class="portfolio-card__pupil" cx="12" cy="12" r="3"/></g></svg></h3>
            <p class="portfolio-card__service">Marka Kimliği</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- ============================================================
       CTA — reuses the inverted band; no second form on this page
       ============================================================ -->
  <section class="band band--dark" aria-labelledby="cta-title">
    <div class="band__inner centered-head">
      <p class="eyebrow eyebrow--invert">İletişim</p>
      <h2 class="section-title section-title--centre" id="cta-title">Sıradaki iş sizinki olsun</h2>
      <p class="section-lede">Şu an neler yaptığınızı anlatın; genellikle iki iş günü içinde sabit bir teklifle dönelim.</p>
      <p class="cta-band__action"><a class="btn btn--accent btn--lg" href="/#contact">Teklif Alın</a></p>
    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://www.peradijital.com.tr/islerimiz/",
  "url": "https://www.peradijital.com.tr/islerimiz/",
  "name": "İşlerimiz — Pera Dijital",
  "inLanguage": "tr-TR",
  "description": "Kurumsal web siteleri, e-ticaret altyapıları, marka kimlikleri ve Meta reklam kampanyaları.",
  "isPartOf": { "@type": "WebSite", "url": "https://www.peradijital.com.tr/", "name": "Pera Dijital" }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "inLanguage": "tr-TR",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Pera Dijital", "item": "https://www.peradijital.com.tr/" },
    { "@type": "ListItem", "position": 2, "name": "İşlerimiz", "item": "https://www.peradijital.com.tr/islerimiz/" }
  ]
}
</script>

<!-- ============================================================================
     ▸▸▸ REPLACE BEFORE PRODUCTION — DO NOT SHIP MARKA PLACEHOLDERS ▸▸▸
     ============================================================================
     THIS ItemList MUST BE UPDATED IN LOCKSTEP WITH THE CARDS ABOVE.
     EVERY name AND description BELOW IS A PLACEHOLDER. PUBLISHING THIS AS-IS
     EMITS SIXTEEN FABRICATED WORK ITEMS AS STRUCTURED DATA.
     Same rule as the FAQPage JSON-LD on the service page: markup and schema
     change together, or neither changes.
     Add "url" per item once the case study pages exist.
     No Review, no AggregateRating, no dates, no results.
     ============================================================================ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Pera Dijital — Yayına aldığımız işler",
  "inLanguage": "tr-TR",
  "itemListOrder": "https://schema.org/ItemListUnordered",
  "numberOfItems": 16,
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 01",
        "description": "Kurumsal Web Tasarım"
      }
    },
    {
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 02",
        "description": "Meta Reklam Yönetimi"
      }
    },
    {
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 03",
        "description": "E-ticaret Sitesi"
      }
    },
    {
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 04",
        "description": "Marka Kimliği"
      }
    },
    {
      "@type": "ListItem",
      "position": 5,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 05",
        "description": "Kurumsal Web Tasarım"
      }
    },
    {
      "@type": "ListItem",
      "position": 6,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 06",
        "description": "Meta Reklam Yönetimi"
      }
    },
    {
      "@type": "ListItem",
      "position": 7,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 07",
        "description": "E-ticaret Sitesi"
      }
    },
    {
      "@type": "ListItem",
      "position": 8,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 08",
        "description": "Marka Kimliği"
      }
    },
    {
      "@type": "ListItem",
      "position": 9,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 09",
        "description": "Kurumsal Web Tasarım"
      }
    },
    {
      "@type": "ListItem",
      "position": 10,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 10",
        "description": "Meta Reklam Yönetimi"
      }
    },
    {
      "@type": "ListItem",
      "position": 11,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 11",
        "description": "E-ticaret Sitesi"
      }
    },
    {
      "@type": "ListItem",
      "position": 12,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 12",
        "description": "Marka Kimliği"
      }
    },
    {
      "@type": "ListItem",
      "position": 13,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 13",
        "description": "Kurumsal Web Tasarım"
      }
    },
    {
      "@type": "ListItem",
      "position": 14,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 14",
        "description": "Meta Reklam Yönetimi"
      }
    },
    {
      "@type": "ListItem",
      "position": 15,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 15",
        "description": "E-ticaret Sitesi"
      }
    },
    {
      "@type": "ListItem",
      "position": 16,
      "item": {
        "@type": "CreativeWork",
        "name": "MARKA 16",
        "description": "Marka Kimliği"
      }
    }
  ]
}
</script>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
