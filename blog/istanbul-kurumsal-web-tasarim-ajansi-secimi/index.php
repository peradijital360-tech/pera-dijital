<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/blog.php';
$blogPost = BLOG_POSTS['istanbul-kurumsal-web-tasarim-ajansi-secimi'];
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
      <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">İstanbul’da web tasarım ajansı seçimi</span></li>
    </ol></nav>
    <header class="blog-heading">
      <p class="eyebrow"><?= e($blogPost['category']) ?></p>
      <h1 id="article-title"><?= e($blogPost['title']) ?></h1>
      <p class="blog-meta"><a href="/hakkimizda/" rel="author">Pera Dijital</a> <span aria-hidden="true">·</span> <time datetime="<?= e($blogPost['date']) ?>"><?= e($blogPost['date_label']) ?></time></p>
    </header>
    <div class="blog-prose">
      <p>İstanbul’da kurumsal web tasarım ajansı ararken yalnızca tasarım örneklerine ve toplam fiyata bakmak, projenin önemli ayrıntılarını gözden kaçırmanıza yol açabilir. Sitenin hangi müşteriye hitap edeceği, hizmetlerin nasıl anlatılacağı ve ziyaretçinin nasıl teklif isteyeceği en az görünüm kadar önemlidir.</p>
      <p>Kurumsal web sitesi tasarımı için doğru başlangıç, “Kaç sayfa olacak?” sorusundan önce “Bu site işletmemiz için hangi işi yapacak?” sorusunu yanıtlamaktır. Firmanızı tanıtmak, ürün kataloğunu sunmak, bayi başvurusu almak veya proje taleplerini toplamak farklı sayfa ve içerik ihtiyaçları doğurur.</p>
      <h2>1. Web sitesinin hedefini ajansla birlikte netleştirin</h2>
      <p>Üretici bir firma için teknik ürün bilgisine ulaşmak ve teklif istemek öne çıkabilir. Bir danışmanlık şirketinde ise uzmanlık alanları, çalışma yöntemi ve görüşme talebi daha belirleyici olabilir. Aynı sayfa yapısını her işletmeye uygulamak yerine ziyaretçinin karar vermek için neye ihtiyaç duyduğunu konuşun.</p>
      <p>Ajansa ilk görüşmede müşterilerinizi, en çok satmak istediğiniz hizmeti ve mevcut sitenizde karşılaştığınız sorunları anlatın. Örneğin “Ziyaretçiler ürünleri görüyor ama teklif isterken hangi ürünü sorduğu anlaşılmıyor” ifadesi, yalnızca “modern bir site istiyoruz” demekten daha somut bir başlangıç sağlar.</p>
      <h2>2. İstanbul’daki işletmeniz için sektör deneyimini nasıl değerlendirmelisiniz?</h2>
      <p>Başakşehir, İkitelli OSB veya Hadımköy çevresinde faaliyet gösteren bir üreticiyseniz ürün grupları, teknik dokümanlar ve kurumsal satın alma süreci projenizin parçası olabilir. Bu bölgelerde bulunmak, bütün firmaların aynı siteye ihtiyaç duyduğu anlamına gelmez; kendi satış sürecinizi esas alın.</p>
      <p>Örneğin endüstriyel ekipman üreten bir işletmenin ziyaretçisi ölçü, malzeme, kullanım alanı veya teknik dosya arayabilir. Ajansın bu bilgileri nasıl düzenleyeceğini ve ilgili ürün üzerinden teklif talebini nasıl alacağını sorun. Bu bir müşteri başarı hikâyesi değil, proje kapsamını konuşurken kullanabileceğiniz örnek bir senaryodur.</p>
      <p>İstanbul’da bir ajansla çalışırken yüz yüze toplantı tercihinizi de belirtin. Bunun yanında iletişim sorumlusu, onay yöntemi ve teslim takvimini netleştirin. İşletmenizin başka şehirlerdeki müşterilerine veya yurt dışına da ulaşması gerekiyorsa sayfa yapısı ve dil seçenekleri bu hedefe göre planlanmalıdır.</p>
      <h2>3. Kurumsal web tasarım teklifinde hangi işler yer almalı?</h2>
      <p>İki ajansın aynı tutardaki teklifi farklı hizmetler içerebilir. Birinde metin yazımı ve içerik girişi bulunurken diğerinde tüm metinleri sizin sağlamanız beklenebilir. Karşılaştırmayı yalnızca sayfa sayısına göre yapmayın.</p>
      <div class="blog-table-wrap" tabindex="0" role="region" aria-label="Kurumsal web tasarım teklifi kontrol listesi">
        <table><thead><tr><th scope="col">Konu</th><th scope="col">Teklifte netleştirilecek ayrıntı</th></tr></thead><tbody>
          <tr><th scope="row">Sayfa ve içerik kapsamı</th><td>Hizmet, ürün, hakkımızda ve iletişim sayfaları; içerikleri kimin hazırlayacağı</td></tr>
          <tr><th scope="row">Tasarım ve revizyon</th><td>Onaylanacak ekranlar, revizyon kapsamı ve mobil görünüm</td></tr>
          <tr><th scope="row">Teklif ve başvuru formları</th><td>İstenecek bilgiler, taleplerin ulaşacağı adres ve gönderim kontrolü</td></tr>
          <tr><th scope="row">Ürün veya proje kataloğu</th><td>İlk içerik girişinin kapsamı, filtreleme ve teknik dosya ihtiyaçları</td></tr>
          <tr><th scope="row">Dil seçenekleri</th><td>Çeviriyi kimin sağlayacağı ve hangi sayfaların çevrileceği</td></tr>
          <tr><th scope="row">SEO ve site geçişi</th><td>Sayfa başlıkları, açıklamalar, site haritası ve değişen adreslerin yönlendirilmesi</td></tr>
          <tr><th scope="row">Teslim ve devam eden giderler</th><td>Alan adı, barındırma, varsa lisanslar, bakım kapsamı ve erişimlerin teslimi</td></tr>
        </tbody></table>
      </div>
      <h2>4. Mobilde yalnızca görünümü değil, işlemleri de kontrol edin</h2>
      <p>Telefon ekranında bir ürünün teknik bilgisine ulaşmayı, iletişim numarasını aramayı ve form doldurmayı deneyin. Menü açılıyor olsa bile uzun formlar, okunamayan tablolar veya yanlış sayfaya giden düğmeler talep oluşturmayı zorlaştırabilir.</p>
      <p>Tasarım önizlemesinde gerçek metin ve görselleri görmek isteyin. Kısa örnek başlıklarla düzgün görünen bir alan, uzun ürün adı veya gerçek hizmet açıklaması eklendiğinde farklı davranabilir. Teslim kontrolünü işletmenizin kullanacağı içerikle yapın.</p>
      <h2>5. SEO hazırlığını ve mevcut sitenin taşınmasını konuşun</h2>
      <p>Hizmetlerinizin ayrı ve anlaşılır sayfalarda anlatılması, sayfa başlıklarının içeriği açıklaması ve ilgili sayfaların birbirine bağlanması proje kapsamına alınmalıdır. Ajansa hangi SEO işlerini teslim edeceğini sorun; “SEO uyumlu” ifadesini somut bir kontrol listesine dönüştürün.</p>
      <p>Mevcut siteniz yenileniyorsa eski sayfa adreslerini de değerlendirin. Değişen adreslerin uygun yeni sayfalara yönlendirilmesi ve önemli içeriklerin geçişte kaybolmaması için bir plan isteyin. Yayına çıkmak veya site haritası göndermek tek başına hedef kelimelerde üst sıralara çıkma garantisi değildir.</p>
      <h2>6. İçerik güncellemelerini kim yapacak?</h2>
      <p>Her kurumsal site için aynı yönetim yapısı gerekmez. Ekibiniz sık sık ürün, proje veya haber ekleyecekse bunu yapabileceği bir yönetim alanı önemli olabilir. İçeriği daha seyrek değişen bir sitede güncellemeler teknik destek üzerinden yürütülebilir.</p>
      <p>Seçilen yöntemin günlük işinize uygun olduğundan emin olun. “Yeni bir hizmet eklemek istediğimizde kim yapacak, nasıl talep edeceğiz ve ek ücret olacak mı?” sorusunu teslimden önce yanıtlayın. Alan adı, barındırma, kaynak dosyaları ve varsa yönetim paneli erişimlerinin durumunu da yazılı olarak netleştirin.</p>
      <h2>Ajans görüşmesine hangi bilgilerle gitmelisiniz?</h2>
      <ul><li>En çok talep almak istediğiniz ürün veya hizmetler</li><li>Hedef müşterileriniz ve onların karar verirken sorduğu sorular</li><li>Mevcut site adresiniz ve değiştirmek istediğiniz noktalar</li><li>Logo, kurumsal görseller, ürün bilgileri ve kullanma izniniz olan proje örnekleri</li><li>Gerekli diller, form ihtiyaçları ve içerik güncelleme sıklığı</li><li>Planladığınız bütçe ve yayına çıkmak istediğiniz dönem</li></ul>
      <p>Bu bilgilerle alınan teklif, ihtiyacı belirsiz bir fiyat teklifinden daha kolay karşılaştırılır. Teslim tarihini de içeriklerin hazırlanması ve onayların verilmesiyle birlikte değerlendirin.</p>
      <h2>Pera Dijital ile kurumsal web sitesi projenizi konuşun</h2>
      <p>Pera Dijital’in ofisi İstanbul Başakşehir’dedir. İstanbul’daki işletmelerin yanı sıra farklı şehirlerden gelen kurumsal web sitesi projelerini de görüşüyoruz. Önce işletmenizi, öncelikli hizmetlerinizi ve siteden beklediğiniz talebi anlamayı hedefliyoruz.</p>
      <p><a href="/cozumlerimiz/kurumsal-web-tasarim/">Kurumsal web tasarım ajansı hizmetimizin kapsamını inceleyin</a> veya <a href="/iletisim/#form">mevcut sitenizi ve proje ihtiyacınızı bize iletin</a>. Doğrudan internetten ürün satmak istiyorsanız <a href="/cozumlerimiz/e-ticaret-site-kurulumu/">e-ticaret sitesi kurulumu</a> ihtiyacınızı ayrıca değerlendirebilirsiniz.</p>
    </div>
    <aside class="blog-next" aria-label="İlgili hizmet">
      <p class="eyebrow">Kurumsal web tasarım</p>
      <h2>İşletmeniz için web sitesi tasarımı</h2>
      <p>Hizmetlerinizi anlatan ve ziyaretçinin size ulaşmasını kolaylaştıran web sitesi projenizin kapsamını konuşalım.</p>
      <a class="btn btn--dark" href="/cozumlerimiz/kurumsal-web-tasarim/">Kurumsal Web Tasarım</a>
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
