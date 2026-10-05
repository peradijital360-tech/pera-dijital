<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/blog.php';
$blogPost = BLOG_POSTS['meta-reklam-yonetimi-ucreti'];
$page = [
    'title' => $blogPost['seo_title'],
    'description' => $blogPost['description'],
    'canonical' => $blogPost['path'],
    'css' => ['page.css', 'blog.css'],
    'og_type' => 'article',
    'body_class' => 'page-blog',
    'cta' => '/iletisim/#form',
];
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/header.php';
?>
<main id="main" class="blog-shell">
  <article class="blog-article" aria-labelledby="article-title">
    <nav class="breadcrumb" aria-label="Sayfa yolu"><ol class="breadcrumb__list">
      <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">Pera Dijital</a><span aria-hidden="true"> / </span></li>
      <li class="breadcrumb__item"><a class="breadcrumb__link" href="/blog/">Blog</a><span aria-hidden="true"> / </span></li>
      <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Aylık ücret ve kapsam</span></li>
    </ol></nav>
    <header class="blog-heading">
      <p class="eyebrow"><?= e($blogPost['category']) ?></p>
      <h1 id="article-title"><?= e($blogPost['title']) ?></h1>
      <p class="blog-meta"><a href="/hakkimizda/" rel="author">Pera Dijital</a> <span aria-hidden="true">·</span> <time datetime="<?= e($blogPost['date']) ?>"><?= e($blogPost['date_label']) ?></time></p>
    </header>
    <div class="blog-prose">
      <p>Meta reklam yönetimi ücreti, ajansın Instagram ve Facebook kampanyaları için sunduğu hizmetin bedelidir. Reklamları yayımlamak için Meta’ya ayrılan bütçe ayrı bir giderdir. E-ticaret mağazanız için aylık danışmanlık teklifi alırken bu iki kalemi ayırarak başlayın.</p>
      <p>Bu rehber bir fiyat listesi değildir. Teklifin neden değiştiğini ve aynı aylık bütçeyle hangi işleri satın aldığınızı anlamanız için hazırlanmıştır. Pera Dijital’in hizmet bedeli, mağazanızın ihtiyacı ve üzerinde anlaşılan kapsam üzerinden teklif edilir.</p>
      <h2>Aylık toplam bütçede hangi kalemler var?</h2>
      <p>Planı üç ayrı başlıkta hazırlayın: yönetim, reklam harcaması ve gerekiyorsa ek üretim veya teknik çalışma. Aynı işin iki kalemde ücretlendirilmediğini; teklif dışında kalan bir işin de ücretsiz varsayılmadığını kontrol edin.</p>
      <div class="blog-table-wrap" tabindex="0" role="region" aria-label="Aylık reklam bütçesi kalemleri">
        <table><thead><tr><th scope="col">Kalem</th><th scope="col">Neyi karşılar?</th><th scope="col">Netleştirilecek soru</th></tr></thead><tbody>
          <tr><th scope="row">Ajans hizmet bedeli</th><td>Kampanya hazırlığı, yönetimi, değerlendirmesi ve üzerinde anlaşılan teslimler</td><td>Hangi işler dahil; hangileri ek teklif gerektiriyor?</td></tr>
          <tr><th scope="row">Reklam bütçesi</th><td>Instagram ve Facebook reklamlarının yayımlanması</td><td>Harcama sınırını ve değişikliklerini kim onaylıyor?</td></tr>
          <tr><th scope="row">İçerik üretimi</th><td>Gerekiyorsa ürün çekimi, model, stüdyo veya ilave video üretimi</td><td>Elimizdeki materyal yeterli mi; kullanım hakkı ve teslimler neler?</td></tr>
          <tr><th scope="row">Teknik çalışma ve araçlar</th><td>Gerekiyorsa mağaza entegrasyonu, katalog düzeltmesi veya ücretli araç</td><td>Tek seferlik mi, düzenli mi; sorumlusu kim?</td></tr>
        </tbody></table>
      </div>
      <h2>Aynı mağaza için iki farklı fiyat neden çıkabilir?</h2>
      <p>Hazır ürün görüntüleriyle tek pazarda çalışmak ile farklı ülkeler için yeni video, metin ve katalog hazırlamak aynı iş yükünü doğurmaz. Ürün sayısı kadar, ürünlerin ne sıklıkla değiştiği ve ölçüm altyapısının durumu da kapsamı etkiler.</p>
      <p>Bir teklif yalnızca kampanya yönetimini, diğeri reklam tasarımı ve video düzenlemeyi de içerebilir. Daha düşük bedelli teklife dışarıdan içerik üretimi eklediğinizde toplam maliyet değişir. Karşılaştırmayı aynı teslimler üzerinden yapın.</p>
      <h2>Ajans tekliflerini karşılaştırma tablosu</h2>
      <p>Aşağıdaki soruları görüşmede doldurun. Cevabı belirsiz kalan kalemleri çalışmaya başlamadan yazılı olarak netleştirin.</p>
      <div class="blog-table-wrap" tabindex="0" role="region" aria-label="Ajans teklifi karşılaştırma soruları">
        <table><thead><tr><th scope="col">Konu</th><th scope="col">Teklifte aranacak cevap</th></tr></thead><tbody>
          <tr><th scope="row">Hizmet bedeli</th><td>Aylık tutar, vergilerin dahil olup olmadığı ve ödeme dönemi</td></tr>
          <tr><th scope="row">Reklam harcaması</th><td>Hizmet bedelinden ayrı tutar ve bütçe onay süreci</td></tr>
          <tr><th scope="row">Görsel ve video</th><td>Materyali kimin sağladığı, teslim türü, adet ve revizyon kapsamı</td></tr>
          <tr><th scope="row">Ölçüm ve katalog</th><td>Mevcut sistemin kontrolü ile yeni kurulumun ayrı kapsamları</td></tr>
          <tr><th scope="row">Raporlama</th><td>Rapor sıklığı, veri kaynakları ve değerlendirme sorumlusu</td></tr>
          <tr><th scope="row">Ek işler</th><td>Önceden fiyat ve onay gerektiren çalışmalar</td></tr>
          <tr><th scope="row">Çalışmanın bitişi</th><td>Bildirim süresi, hesap erişimleri ve dosya teslimi</td></tr>
        </tbody></table>
      </div>
      <h2>Reklam bütçesini belirlemeden önce mağazada neye bakılmalı?</h2>
      <p>Satılacak ürünlerin fiyatını, maliyetini, stok durumunu ve mevcut sipariş verisini hazırlayın. Reklama tıklayan kişinin ulaştığı ürün sayfasında beden, teslimat ve ödeme bilgilerinin anlaşılır olması gerekir. Stok veya ödeme sorunu varken daha fazla ziyaretçi satın almak temel sorunu çözmez.</p>
      <p>Yeni başlayan bir mağaza ile düzenli sipariş alan bir mağaza aynı soruları test etmez. İlkinde ürün ve mesajın talep görüp görmediği araştırılabilir; ikincisinde mevcut kampanyanın hangi ürün veya içerikle geliştirileceğine bakılabilir. Test bütçesini bu soruya göre konuşun; her mağaza için geçerli tek bir tutar varsaymayın.</p>
      <h2>Yalnızca ROAS’a bakarak ajans bedeli değerlendirilir mi?</h2>
      <p>Reklamla ilişkilendirilen gelir, mağazanın net kârı değildir. Ürün maliyeti, iade, kargo, indirim ve hizmet giderleri ayrıca değerlendirilmelidir. Platform raporu ile mağaza siparişlerini karşılaştırırken aynı tarih aralığını ve verinin neyi kapsadığını kontrol edin.</p>
      <p>Ajansın katkısını değerlendirirken yapılan testleri, ölçüm sorunlarının çözümünü ve alınan kararları da inceleyin. Bir rapor, yalnızca rakamları sıralamak yerine sonraki ay hangi işin neden yapılacağını açıklamalıdır.</p>
      <h2>Teklif almak için ne hazırlamalısınız?</h2>
      <ul><li>Mağaza adresiniz ve sattığınız ürün grubu</li><li>Mevcut reklam harcamanız veya henüz reklam vermediğiniz bilgisi</li><li>Varsa mevcut satış ve kampanya verilerinizin özeti</li><li>Kullanılabilecek ürün görselleri ve videoları</li><li>Önceliğiniz: yeni müşteri, yeni koleksiyon veya mevcut kampanyayı geliştirmek</li></ul>
      <p>İlk görüşmede şifre paylaşmanız gerekmez. Hesap incelemesi gerekiyorsa uygun erişim yöntemi ayrıca belirlenir.</p>
      <h2>Pera Dijital’den aylık Meta reklam yönetimi teklifi alın</h2>
      <p>Kendi sitesinden satış yapan e-ticaret markaları ve butiklerle aylık reklam yönetimi kapsamını birlikte belirliyoruz. <a href="/cozumlerimiz/meta-reklam-yonetimi/#ucret">Meta reklam danışmanlığı hizmetini inceleyin</a>; mağaza adresinizi ve mevcut reklam durumunuzu <a href="/iletisim/#form">iletişim formundan paylaşın</a>.</p>
      <p>Ajans görüşmesine hazırlanıyorsanız <a href="/blog/butik-meta-reklam-ajansi-secimi/">butiğiniz için Meta reklam ajansı seçerken sorulacak 8 soruyu</a> da kullanabilirsiniz.</p>
    </div>
    <aside class="blog-next" aria-label="İlgili hizmet">
      <p class="eyebrow">Aylık danışmanlık</p>
      <h2>Mağazanız için reklam yönetimi</h2>
      <p>Kampanya, reklam içerikleri ve satış ölçümünü birlikte ele aldığımız hizmetin kapsamını inceleyin.</p>
      <a class="btn btn--dark" href="/cozumlerimiz/meta-reklam-yonetimi/">Meta Reklam Yönetimi</a>
    </aside>
    <p class="blog-back"><a href="/blog/">Tüm blog yazıları</a></p>
  </article>
</main>
<?php
$blogUrl = SITE_URL . $blogPost['path'];
$blogSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'BlogPosting', '@id' => $blogUrl . '#article',
            'headline' => $blogPost['title'], 'description' => $blogPost['description'],
            'url' => $blogUrl, 'mainEntityOfPage' => ['@id' => $blogUrl . '#webpage'],
            'datePublished' => $blogPost['date'], 'dateModified' => $blogPost['date'],
            'inLanguage' => 'tr-TR', 'articleSection' => $blogPost['category'],
            'author' => ['@type' => 'Organization', '@id' => SITE_URL . '/#organization', 'name' => SITE_NAME, 'url' => SITE_URL . '/hakkimizda/'],
            'publisher' => ['@id' => SITE_URL . '/#organization'],
            'isPartOf' => ['@id' => SITE_URL . '/blog/#blog'],
        ],
        [
            '@type' => 'WebPage', '@id' => $blogUrl . '#webpage',
            'name' => $blogPost['seo_title'], 'url' => $blogUrl, 'inLanguage' => 'tr-TR',
            'isPartOf' => ['@id' => SITE_URL . '/#website'],
            'breadcrumb' => ['@id' => $blogUrl . '#breadcrumb'],
        ],
        [
            '@type' => 'BreadcrumbList', '@id' => $blogUrl . '#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => SITE_NAME, 'item' => SITE_URL . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => SITE_URL . '/blog/'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => $blogPost['title'], 'item' => $blogUrl],
            ],
        ],
    ],
];
?>
<script type="application/ld+json"><?= json_encode($blogSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?></script>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php'; ?>
