<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/blog.php';
$blogPost = BLOG_POSTS['butik-meta-reklam-ajansi-secimi'];
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
      <li class="breadcrumb__item"><span class="breadcrumb__current" aria-current="page">Butikler için ajans seçimi</span></li>
    </ol></nav>
    <header class="blog-heading">
      <p class="eyebrow"><?= e($blogPost['category']) ?></p>
      <h1 id="article-title"><?= e($blogPost['title']) ?></h1>
      <p class="blog-meta"><a href="/hakkimizda/" rel="author">Pera Dijital</a> <span aria-hidden="true">·</span> <time datetime="<?= e($blogPost['date']) ?>"><?= e($blogPost['date_label']) ?></time></p>
    </header>
    <div class="blog-prose">
      <p>Bir butik için Meta reklam ajansı seçerken yalnızca aylık hizmet ücretini karşılaştırmak yeterli olmaz. Ürünlerinizi kimin inceleyeceği, reklam içeriklerini kimin hazırlayacağı, satışların nasıl ölçüleceği ve kampanyadan gelen ziyaretçinin neyle karşılaşacağı da sonucu etkiler.</p>
      <p>İlk görüşmeye mağaza adresiniz, öne çıkarmak istediğiniz ürünler ve mevcut reklam durumunuzla katılın. Aşağıdaki sorular, iki farklı ajansın teklifini aynı kapsam üzerinden değerlendirmenize yardımcı olur.</p>
      <h2 id="soru-1">1. Aylık hizmetin içinde hangi işler var?</h2>
      <p>“Reklam yönetimi” tek başına yeterli bir kapsam açıklaması değildir. Kampanya kurulumu, ürün kataloğu kontrolü, reklam metni, görsel tasarım, video düzenleme ve raporlama farklı işlerdir.</p>
      <p>Teklifte hangi işin kim tarafından yapılacağını görmek isteyin. Örneğin ajans video düzenleyebilir ama ürün çekimi yapmıyor olabilir. Elinizde kullanılabilir görüntü yoksa bu ayrım, kampanya başlamadan önce çözülmelidir.</p>
      <p>Soruyu somutlaştırın: “İlk ay için benden hangi materyalleri bekliyorsunuz ve siz hangi teslimleri hazırlayacaksınız?”</p>
      <h2 id="soru-2">2. Ajans bedeli ile reklam bütçesi ayrı mı?</h2>
      <p>Ajansa ödenen hizmet bedeli, Instagram ve Facebook reklamlarını yayımlamak için platforma ayrılan bütçeden farklıdır. Ürün çekimi, model, stüdyo veya ek tasarım çalışmaları da teklife göre ayrı maliyet oluşturabilir.</p>
      <p>İki teklif arasında karşılaştırma yaparken aynı kalemleri yan yana koyun. Düşük görünen bir hizmet bedelinin hangi işleri dışarıda bıraktığını; daha yüksek bir bedelin hangi somut teslimleri kapsadığını inceleyin.</p>
      <p>Görüşmede sorulacak soru şu: “Toplam aylık harcamam hangi kalemlerden oluşacak ve ek ücret gerektiren işler nasıl onaylanacak?”</p>
      <h2 id="soru-3">3. Reklama çıkacak ürünleri nasıl seçeceğiz?</h2>
      <p>Bir ürünün fotoğrafı iyi olabilir; ancak ilgi gören bedenlerinin çoğu tükenmişse reklamdan gelen ziyaretçi satın alma yapamayabilir. İndirim, ürün maliyeti ve iade durumu da değerlendirmenin parçasıdır.</p>
      <p>Ajansın yalnızca reklam hesabını değil, ürün ve mağaza tarafını da anlamaya çalışıp çalışmadığına bakın. Yeni sezon ürünü ile elde kalan stoğu eritme hedefi aynı mesajı gerektirmeyebilir.</p>
      <p>Örneğin bir pantolonun yalnızca tek bedeni kaldığında kampanyanın nasıl ele alınacağını sorun. Bu, gerçek bir müşteri sonucu değil; ajansın stok ile reklam arasındaki ilişkiye nasıl yaklaştığını anlamak için kullanabileceğiniz bir görüşme senaryosudur.</p>
      <h2 id="soru-4">4. Yeni reklam içerikleri nasıl hazırlanacak?</h2>
      <p>“Düzenli kreatif testleri” ifadesinin nasıl bir çalışma anlamına geldiğini öğrenin. Hangi ürün için hangi mesajın deneneceği, içeriğin kimden beklendiği ve tasarımın kim tarafından onaylanacağı netleşmeli.</p>
      <p>Ürün detayını gösteren bir video ile kombini anlatan bir görsel farklı müşteri sorularına cevap verebilir. Bir testin amacı yalnızca renk değiştirmek değil, öğrenmek istediğiniz şeyi açıkça belirlemek olmalı.</p>
      <p>“Bu ay hangi soruya cevap arayan içerikleri deneyeceğiz?” sorusu, teslim sayısı kadar değerlidir.</p>
      <h2 id="soru-5">5. Satışları hangi kaynaklardan değerlendireceğiz?</h2>
      <p>Reklam platformunun ilişkilendirdiği satışlar ile mağazanızdaki toplam siparişler aynı rapor değildir. Kaynak, tarih aralığı, iptal ve iade durumu karşılaştırmayı etkileyebilir.</p>
      <p>Ajanstan her rakamın nereden geldiğini açıklamasını isteyin. ROAS, reklamla ilişkilendirilen gelirin reklam harcamasına oranıdır; ürün maliyeti, kargo, iadeler ve diğer giderler bu oranın içinde yer almaz.</p>
      <p>Raporun yalnızca “ciro arttı” demesi yerine, neyin değiştiğini ve bir sonraki kararı nasıl etkilediğini anlatmasını bekleyin.</p>
      <h2 id="soru-6">6. Mağazadaki sorunlar nasıl ele alınacak?</h2>
      <p>Reklamın doğru ürüne gitmesi, beden seçeneklerinin anlaşılması, teslimat bilgisinin bulunması ve mobil satın alma adımlarının çalışması aynı yolculuğun parçalarıdır.</p>
      <p>Ajans siteye teknik müdahale etmese bile gördüğü sorunu size açıklayabilmeli. Düzeltmeyi kimin yapacağı ve bunun reklam yönetimi kapsamına dahil olup olmadığı baştan belirlenmeli.</p>
      <p>Mağazanız henüz hazır değilse önce <a href="/cozumlerimiz/shopify-site-kurulumu/">Shopify web tasarım ve mağaza kurulumu</a> kapsamını inceleyebilirsiniz.</p>
      <h2 id="soru-7">7. Hesaplar, erişimler ve çalışma bittiğinde devir nasıl olacak?</h2>
      <p>İşletmenizin hesaplarına kimin erişeceğini ve kimlerin yönetici olacağını öğrenin. Erişim verme yöntemi kadar, çalışma sona erdiğinde erişimlerin kaldırılması ve hazırlanan materyallerin teslimi de konuşulmalı.</p>
      <p>Teklifte reklam hesabının, kullanılan materyallerin ve raporların durumu açıkça yazsın. “Çalışmayı bitirirsek elimde hangi dosyalar ve hangi erişimler kalacak?” sorusunun cevabını başlamadan alın.</p>
      <h2 id="soru-8">8. İlk ayın sonunda neyi değerlendireceğiz?</h2>
      <p>Her mağaza için aynı satış sonucu veya aynı süre gerçekçi olmayabilir. Yeni bir mağazada ölçüm ve içerik hazırlığı gerekirken, aktif reklam hesabında geçmiş verinin incelenmesi daha öncelikli olabilir.</p>
      <p>Ajansın ilk ay için yapılacak işleri, ihtiyaç duyduğu bilgileri ve değerlendirme toplantısının kapsamını açıklamasını isteyin. Sadece sonuç hedefini değil, o hedefe yaklaşmak için hangi işlerin yürütüleceğini de konuşun.</p>
      <h2 id="kontrol-listesi">Teklifleri karşılaştırmak için kısa kontrol listesi</h2>
      <div class="blog-table-wrap" tabindex="0" role="region" aria-label="Teklif karşılaştırma tablosu"><table><thead><tr><th scope="col">Konu</th><th scope="col">Teklifte bulunması gereken açıklama</th></tr></thead><tbody><tr><th scope="row">Aylık kapsam</th><td>Kampanya yönetimi, katalog, kreatif ve raporlama sorumlulukları</td></tr><tr><th scope="row">Bütçe</th><td>Hizmet bedeli, reklam bütçesi ve olası ek işler</td></tr><tr><th scope="row">İçerikler</th><td>Sizden beklenecek materyaller, teslimler ve onay süreci</td></tr><tr><th scope="row">Ölçüm</th><td>Kullanılacak veri kaynakları ve raporun açıklaması</td></tr><tr><th scope="row">Mağaza</th><td>Tespit edilen site sorunlarının kime iletileceği</td></tr><tr><th scope="row">Erişim ve devir</th><td>Hesap yönetimi, materyaller ve iş bitimindeki teslim</td></tr><tr><th scope="row">Çalışma düzeni</th><td>İletişim sorumlusu ve değerlendirme sıklığı</td></tr></tbody></table></div>
      <h2 id="kapsami-konusalim">Pera Dijital ile kapsamı konuşun</h2>
      <p>Pera Dijital, e-ticaret markaları ve butiklere aylık Instagram ve Facebook reklam yönetimi sunar. Mağaza adresinizi, ürün grubunuzu ve mevcut reklam durumunuzu paylaşarak çalışma kapsamını görüşebilirsiniz.</p>
      <p><a href="/cozumlerimiz/meta-reklam-yonetimi/">Aylık Meta reklam yönetimi hizmetini inceleyin</a> veya <a href="/iletisim/#form">iletişim formundan mağazanızı anlatın</a>.</p>
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
