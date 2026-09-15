<?php
$page = [
    'title'       => "Atölye No:30 marka kimliği — Pera Dijital",
    'description' => "[REPLACE — Atölye No:30 marka kimliği çalışmasının 40-60 kelimelik özeti.]",
    'canonical'   => '/islerimiz/marka-01/',
    'nav'         => '',
    'css'         => ['page.css', 'case.css'],
    'js'          => [],
    'og_type'     => 'article',
    'home'        => '/',
    'cta'         => '/#contact',
    'body_class'  => "page-inner",
    'og_title'    => "Atölye No:30 için marka kimliği",
    'og_desc'     => "[REPLACE — paylaşım için kısa özet.]",
    'tw_desc'     => "[REPLACE — paylaşım için tek cümlelik özet.]",
];
/* Out of the live site while SHOW_WORK is false. noindex keeps it out of
   the index; nofollow stops it passing signals to the other work pages. */
$page['robots'] = SHOW_WORK ? '' : 'noindex, nofollow';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main">

  <!-- ============================================================
       HEADER BAND — breadcrumb, h1, extractable summary, meta strip
       ============================================================ -->
  <section class="band band--intro" aria-labelledby="case-title">
    <div class="band__inner">

      <nav class="breadcrumb" aria-label="Sayfa yolu">
        <ol class="breadcrumb__list">
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">Pera Dijital</a><svg class="breadcrumb__sep" width="14" height="14" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></li>
          <li class="breadcrumb__item"><a class="breadcrumb__link" href="/islerimiz/">İşlerimiz</a><svg class="breadcrumb__sep" width="14" height="14" aria-hidden="true" focusable="false"><use href="/assets/icons/sprite.svg#icon-chevron"></use></svg></li>
          <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Atölye No:30</span></li>
        </ol>
      </nav>

      <!-- Brand and work are confirmed. Shape is "<Marka> için <yapılan iş>",
             which reads and ranks better than the brand name alone. -->
      <h1 class="section-title" id="case-title">Atölye No:30 için marka kimliği</h1>

      <!-- ▸▸▸ REPLACE — the single most extractable block on this page.
           Self-contained: who the client is, what they needed, what we
           built. 40-60 words, plain and factual, no adjectives, no figures.
           The previous text described a web project and was not real. -->
      <p class="intro__lede">[REPLACE — Atölye No:30'un kim olduğu, neye ihtiyaç duyduğu ve marka kimliği kapsamında ne teslim ettiğimiz. 40-60 kelime.]</p>

      <!-- Müşteri and Hizmetler are confirmed. The rest are placeholders.
             ▸▸▸ REPLACE Sektör, Yıl and Site before this page ships. -->
      <dl class="case-meta">
        <div class="case-meta__row"><dt class="case-meta__term">Müşteri</dt><dd class="case-meta__value">Atölye No:30</dd></div>
        <div class="case-meta__row"><dt class="case-meta__term">Sektör</dt><dd class="case-meta__value" data-placeholder>[REPLACE — sektör]</dd></div>
        <div class="case-meta__row"><dt class="case-meta__term">Hizmetler</dt><dd class="case-meta__value">Marka Kimliği</dd></div>
        <div class="case-meta__row"><dt class="case-meta__term">Yıl</dt><dd class="case-meta__value" data-placeholder>[REPLACE — yıl]</dd></div>
        <!-- Plain text, not a link, until the real address is known: a live
             href="#" here would be a dead link on a production page.
             Delete this row entirely if the client has no public site. -->
        <div class="case-meta__row"><dt class="case-meta__term">Site</dt><dd class="case-meta__value" data-placeholder>[REPLACE — site adresi]</dd></div>
      </dl>

    </div>
  </section>

  <!-- ============================================================
       HERO IMAGE — LCP element: never lazy, explicit dimensions
       ============================================================ -->
  <section class="band band--hero" aria-labelledby="hero-cap">
    <div class="band__inner">
      <h2 class="u-visually-hidden" id="hero-cap">Proje kapak görseli</h2>
      <figure class="case-figure">
        <img class="case-hero" src="/assets/img/case/atolye-no30/hero.webp" alt="Atölye No:30 logosu, koyu renkli bir dükkân vitrininin camına altın rengiyle uygulanmış. Dairesel amblemin içinde terazi, ekmek, kakao çekirdeği, havan ve kâse gibi ince çizgili mutfak simgeleri, yanında &ldquo;Atölye no:30&rdquo; yazısı yer alıyor. Camın ardında aydınlatılmış raflar, cam kavanozlar ve saksıda bir zeytin ağacı; solda aynı logoyu taşıyan yuvarlak siyah bir tabela asılı." width="1536" height="1024" fetchpriority="high" decoding="async">
        <figcaption class="case-figure__caption">Vitrin uygulaması görseli</figcaption>
      </figure>
    </div>
  </section>

  <!-- ============================================================
       NARRATIVE — three questions side by side, answer-first.
       One section, one grid: three separate <section> bands could not be
       placed in a row without nesting them, and the grid stacks back to
       one column below 60rem where three columns would be unreadable.
       ▸ REPLACE all three with the real project story.
         Contains no figures, percentages or timeframes on purpose.
       ============================================================ -->
  <section class="band band--prose" aria-label="Proje hikâyesi">
    <div class="band__inner">
      <div class="case-questions">

        <article class="case-question" aria-labelledby="brief-title">
          <h2 class="case-question__title" id="brief-title">Marka ne istedi?</h2>
          <p>[REPLACE — Atölye No:30 ne istedi? Sütun düzeninde kısa tutun, 60-90 kelime. Gerçek brief'ten yazılacak.]</p>
        </article>

        <article class="case-question" aria-labelledby="approach-title">
          <h2 class="case-question__title" id="approach-title">Nasıl çözdük?</h2>
          <p>[REPLACE — marka kimliğini nasıl kurduk? Sütun düzeninde kısa tutun, 60-90 kelime.]</p>
        </article>

        <!-- ▸▸▸ REPLACE — THIS COLUMN MAKES CLAIMS ABOUT A REAL CLIENT.
               Write it only from outcomes the client has confirmed. -->
        <article class="case-question" aria-labelledby="outcome-title">
          <h2 class="case-question__title" id="outcome-title">Ne oldu?</h2>
          <p>[REPLACE — ne oldu? Yalnızca müşterinin doğruladığı sonuçlardan yazılacak. Rakam eklemeyin.]</p>
        </article>

      </div>
    </div>
  </section>

  <!-- ============================================================
       GALLERY — uniform 2 columns, no lightbox, no carousel
       ▸ REPLACE every image, and rewrite each alt from the real picture.
       ============================================================ -->
  <section class="band band--gallery" aria-labelledby="gallery-title">
    <div class="band__inner">
      <h2 class="section-title" id="gallery-title">Kimlik Uygulamaları</h2>
      <div class="gallery">
        <figure class="gallery__item">
          <img class="gallery__img" src="/assets/img/case/marka-01/gallery-01.webp" alt="Ana sayfa üst bölümü: ürün kategorileri ve arama alanı" width="1200" height="800" loading="lazy" decoding="async">
          <figcaption class="gallery__caption">Ana sayfa, masaüstü görünüm</figcaption>
        </figure>
        <figure class="gallery__item">
          <img class="gallery__img" src="/assets/img/case/marka-01/gallery-02.webp" alt="Ürün listeleme sayfası: filtre sütunu ve ürün kartları ızgarası" width="1200" height="800" loading="lazy" decoding="async">
          <figcaption class="gallery__caption">Kategori sayfası ve filtreler</figcaption>
        </figure>
        <figure class="gallery__item">
          <img class="gallery__img" src="/assets/img/case/marka-01/gallery-03.webp" alt="Ürün detay sayfası: görsel galerisi, fiyat ve sepete ekle alanı" width="1200" height="800" loading="lazy" decoding="async">
          <figcaption class="gallery__caption">Ürün detay sayfası</figcaption>
        </figure>
        <figure class="gallery__item">
          <img class="gallery__img" src="/assets/img/case/marka-01/gallery-04.webp" alt="Mobil görünüm: menü açık hâlde ana sayfa" width="1200" height="800" loading="lazy" decoding="async">
          <figcaption class="gallery__caption">Mobil menü durumu</figcaption>
        </figure>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CASE NAVIGATION
       "Tüm işler" always shows. Prev/next are absent from the DOM until a
       sibling case study exists — see the comment inside for the exact edit.
       ============================================================ -->
  <nav class="band band--casenav case-nav" aria-label="Vaka çalışmaları arasında gezinme">
    <div class="band__inner case-nav__inner">
      <!-- ▸ TO ADD A PREVIOUS CASE: uncomment and point href at its folder.
      <a class="case-nav__link case-nav__link--prev" href="/islerimiz/marka-00/" rel="prev">
        <span class="case-nav__label">Önceki iş</span>
        <span class="case-nav__title">MARKA 00</span>
      </a>
      -->
      <a class="case-nav__all" href="/islerimiz/">Tüm işler</a>
      <!-- ▸ TO ADD A NEXT CASE: uncomment and point href at its folder.
      <a class="case-nav__link case-nav__link--next" href="/islerimiz/marka-02/" rel="next">
        <span class="case-nav__label">Sonraki iş</span>
        <span class="case-nav__title">MARKA 02</span>
      </a>
      -->
    </div>
  </nav>

  <!-- ============================================================
       CTA — existing dark band, no second form
       ============================================================ -->
  <section class="band band--dark" aria-labelledby="cta-title">
    <div class="band__inner centered-head">
      <p class="eyebrow eyebrow--invert">İletişim</p>
      <h2 class="section-title section-title--centre" id="cta-title">Benzer bir iş mi var?</h2>
      <p class="section-lede">Şu an neye ihtiyacınız olduğunu anlatın; genellikle iki iş günü içinde sabit bir teklifle dönelim.</p>
      <p class="cta-band__action"><a class="btn btn--accent btn--lg" href="/#contact">Teklif Alın</a></p>
    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://www.peradijital.com.tr/islerimiz/marka-01/",
  "url": "https://www.peradijital.com.tr/islerimiz/marka-01/",
  "name": "Atölye No:30 için marka kimliği",
  "inLanguage": "tr-TR",
  "isPartOf": { "@type": "WebSite", "@id": "https://www.peradijital.com.tr/#website" }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "inLanguage": "tr-TR",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Pera Dijital", "item": "https://www.peradijital.com.tr/" },
    { "@type": "ListItem", "position": 2, "name": "İşlerimiz", "item": "https://www.peradijital.com.tr/islerimiz/" },
    { "@type": "ListItem", "position": 3, "name": "Atölye No:30", "item": "https://www.peradijital.com.tr/islerimiz/marka-01/" }
  ]
}
</script>

<!-- ============================================================================
     ▸▸▸ REPLACE BEFORE PRODUCTION — PLACEHOLDER PROJECT DATA ▸▸▸
     ============================================================================
     name, description, about and dateCreated below all describe a placeholder
     project. Update them in lockstep with the page, or delete this block.
     Deliberately absent: Review, AggregateRating, any rating, and every figure
     from the results section. Unverified numbers are never emitted as
     structured data.
     ============================================================================ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "@id": "https://www.peradijital.com.tr/islerimiz/marka-01/#project",
  "name": "Atölye No:30 için marka kimliği",
  "inLanguage": "tr-TR",
  "about": { "@type": "Organization", "name": "Atölye No:30" },
  "creator": { "@id": "https://www.peradijital.com.tr/#organization" }
}
</script>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
