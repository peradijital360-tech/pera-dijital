<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/blog.php';
$page = [
    'title' => 'Dijital Pazarlama ve E-Ticaret Blogu | Pera Dijital',
    'description' => 'Meta reklam yönetimi, e-ticaret ve web tasarım üzerine Pera Dijital yazıları. İşletmeniz için kapsam, bütçe ve ajans seçimi rehberlerini inceleyin.',
    'canonical' => '/blog/',
    'css' => ['page.css', 'blog.css'],
    'body_class' => 'page-blog',
    'cta' => '/iletisim/#form',
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main" class="blog-shell">
  <nav class="breadcrumb" aria-label="Sayfa yolu"><ol class="breadcrumb__list">
    <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">Pera Dijital</a><span aria-hidden="true"> / </span></li>
    <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Blog</span></li>
  </ol></nav>
  <header class="blog-heading">
    <p class="eyebrow">Pera Dijital Blog</p>
    <h1>Dijital pazarlama ve e-ticaret üzerine</h1>
    <p class="blog-intro">Reklam yönetimi, mağaza kurulumu ve web tasarım kararlarınız için rehberler.</p>
  </header>
  <div class="blog-list">
<?php foreach (BLOG_POSTS as $blogEntry): ?>
    <article class="card blog-card">
      <p class="eyebrow"><?= e($blogEntry['category']) ?></p>
      <h2><a href="<?= e($blogEntry['path']) ?>"><?= e($blogEntry['title']) ?></a></h2>
      <p><?= e($blogEntry['description']) ?></p>
      <p class="blog-meta">Pera Dijital · <time datetime="<?= e($blogEntry['date']) ?>"><?= e($blogEntry['date_label']) ?></time></p>
      <a class="blog-read" href="<?= e($blogEntry['path']) ?>">Yazıyı okuyun <span aria-hidden="true">→</span></a>
    </article>
<?php endforeach; ?>
  </div>
</main>
<?php
$blogItems = [];
foreach (BLOG_POSTS as $blogEntry) {
    $blogItems[] = ['@type' => 'BlogPosting', '@id' => SITE_URL . $blogEntry['path'] . '#article', 'headline' => $blogEntry['title'], 'url' => SITE_URL . $blogEntry['path']];
}
$blogSchema = ['@context' => 'https://schema.org', '@type' => 'Blog', '@id' => SITE_URL . '/blog/#blog', 'name' => 'Pera Dijital Blog', 'url' => SITE_URL . '/blog/', 'inLanguage' => 'tr-TR', 'publisher' => ['@id' => SITE_URL . '/#organization'], 'blogPost' => $blogItems];
?>
<script type="application/ld+json"><?= json_encode($blogSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?></script>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php'; ?>
