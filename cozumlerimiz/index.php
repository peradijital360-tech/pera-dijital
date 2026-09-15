<?php
$page = [
    'title'       => "Çözümlerimiz — Pera Dijital",
    'description' => "Pera Dijital’in tek bir kıdemli ekiple yürüttüğü hizmetler: performans reklamları, SEO, sosyal medya, e-posta pazarlama ve analitik; her biri sabit aylık ücretle.",
    'canonical'   => '/cozumlerimiz/',
    'nav'         => 'sol',
    'css'         => ['page.css'],
    'js'          => [],
    'og_type'     => 'website',
    'home'        => '/',
    'cta'         => '/#contact',
    'body_class'  => "page-service",
    'og_desc'     => "Pera Dijital’in tek bir kıdemli ekiple yürüttüğü hizmetler: performans reklamları, SEO, sosyal medya, e-posta pazarlama ve analitik.",
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main">
  <!-- STUB: the solutions overview is built in a later task. -->
  <section class="band" aria-labelledby="overview-title">
    <div class="band__inner">
      <h1 class="section-title" id="overview-title">Çözümlerimiz</h1>
    </div>
  </section>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php';
