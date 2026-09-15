<?php
$page = [
    'title'       => "Sayfa bulunamadı — Pera Dijital",
    'description' => "Aradığınız sayfa bulunamadı. Ana sayfaya dönebilir veya çözümlerimize göz atabilirsiniz.",
    'canonical'   => '',
    'nav'         => '',
    'css'         => ['page.css'],
    'js'          => [],
    'og_type'     => 'website',
    'home'        => '/',
    'cta'         => '/#contact',
    'robots'      => 'noindex, follow',
    'body_class'  => "page-inner",
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main">
  <section class="band band--intro" aria-labelledby="nf-title">
    <div class="band__inner">
      <p class="eyebrow">404</p>
      <h1 class="section-title" id="nf-title">Bu sayfayı bulamadık</h1>
      <p class="intro__lede">Aradığınız adres taşınmış veya hiç var olmamış olabilir. Aşağıdaki bağlantılardan devam edebilir ya da <a href="/#contact">bize doğrudan yazabilirsiniz</a>.</p>
      <ul class="nf-links" role="list">
        <li><a class="btn btn--dark" href="/">Ana sayfa</a></li>
        <li><a class="btn btn--accent" href="/cozumlerimiz/">Çözümlerimiz</a></li>
      </ul>
    </div>
  </section>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
