# Pera Dijital — yayına alma (GitHub Actions + FTP)

Bu dosya depoda durur, sunucuya yüklenmez (workflow'daki `exclude`
listesinde). Dört bölüm var:

- **A. Bugün:** FTP hesabı, GitHub secret'ları, bağlantı testi. **Deploy yok.**
- **B. Geçiş günü:** tek seferde yayına alma, sırayla.
- **C. Yayın sonrası:** kontrol listesi, form testi, Search Console.
- **D. Deploy çalıştı mı:** nasıl anlaşılır, hata olursa ne yapılır.

Nasıl çalışıyor, tek paragraf: GitHub'daki `main` dalı,
`.github/workflows/deploy.yml` ile FTP üzerinden `public_html` klasörüne
yüklenir. Build adımı yok. Deploy **yalnızca kendi yüklediği dosyaları**
günceller ya da siler; eski WordPress dosyalarına ve sunucudaki
`config.local.php` dosyasına hiç dokunmaz.

> **Güvenlik kilidi:** GitHub'da `DEPLOY_ON_PUSH` adlı değişken **yoksa**,
> push yapmak siteye hiçbir şey yüklemez. Tek deploy yolu Actions ekranındaki
> **Run workflow** düğmesidir. Bu değişkeni **yalnızca geçiş günü, B7'de**
> ekleyeceksiniz. Daha önce eklerseniz bir sonraki push yeni `index.php` ve
> `.htaccess` dosyalarını WordPress'in üstüne yazar ve eski site bozulur.

---

## A. Bugün: hazırlık (deploy YOK)

### A1. cPanel'de sadece bu site için FTP hesabı aç

cPanel → **Files → FTP Accounts** → *Add FTP Account*

| Alan | Değer |
|---|---|
| Log In | `deploy` |
| Domain | `peradijital.com.tr` |
| Password | **Generate** → çıkan şifreyi kopyalayıp bir yere not edin |
| Directory | otomatik `public_html/deploy` yazar → **`/deploy` kısmını silin**, yalnızca `public_html` kalsın |
| Quota | Unlimited |

**Create FTP Account.**

Aşağıdaki listede yeni hesabın yanında **Configure FTP Client**'a tıklayın.
Orada yazan iki bilgiyi not edin:
- **FTP Username:** `deploy@peradijital.com.tr`
- **FTP Server:** `ftp.peradijital.com.tr` (port 21)

> Neden ayrı hesap: bu hesap yalnızca `public_html` içini görür. Ana cPanel
> şifreniz GitHub'a hiç girmez. Şifre sızarsa bu hesabı silmek yeter.

### A2. Bağlantıyı Mac'ten test et (hiçbir şey yüklemez, sadece listeler)

Mac Terminal:

```
curl --user 'deploy@peradijital.com.tr' --list-only ftp://ftp.peradijital.com.tr/
```

Şifreyi sorar, A1'deki şifreyi yapıştırın (ekranda görünmez) → Enter.

- **Doğru:** `wp-admin`, `wp-content`, `index.php`, `wp-config.php` gibi
  WordPress dosyaları listelenir. Bu, hesabın kökünün `public_html` olduğunu
  gösterir → A3'te `FTP_SERVER_DIR` = `./`
- **Liste `public_html`, `mail`, `etc` gibi klasörler gösteriyorsa:** hesabın
  kökü ev klasörü. Ya A1'de Directory'yi düzeltin, ya da A3'te
  `FTP_SERVER_DIR` = `public_html/` yazın.
- **`Login denied` / `530`:** kullanıcı adı `@peradijital.com.tr` ile tam
  yazılmalı; şifreyi kontrol edin.

### A3. GitHub'a secret'ları ekle

<https://github.com/peradijital360-tech/pera-dijital/settings/secrets/actions>
→ **Secrets** sekmesi → **New repository secret** (her biri için ayrı ayrı):

| Name (birebir bu yazımla) | Secret | Nereden |
|---|---|---|
| `FTP_SERVER` | `ftp.peradijital.com.tr` | A1 → Configure FTP Client → *FTP Server*. Başına `ftp://` **yazmayın**. |
| `FTP_USERNAME` | `deploy@peradijital.com.tr` | A1 → Configure FTP Client → *FTP Username* |
| `FTP_PASSWORD` | A1'de ürettiğiniz şifre | A1'de not ettiğiniz şifre. Unuttuysanız FTP Accounts → *Change Password* |
| `FTP_SERVER_DIR` | `./` | A2 sonucuna göre `./` ya da `public_html/`. **Sonu `/` ile bitmeli.** |

**Variables** sekmesine şimdi **hiçbir şey eklemeyin** (güvenlik kilidi).

### A4. Workflow'u GitHub'a gönder ve kilidin çalıştığını gör

Mac Terminal:

```
cd ~/Desktop/pera-dijital-comtr/2
git push
```

Sonra <https://github.com/peradijital360-tech/pera-dijital/actions>:
- **Deploy to cPanel (FTP)** adlı bir çalışma görünür.
- İçine girin: `deploy` işi **gri / Skipped** olmalı. Bu, push'un siteye
  bir şey yüklemediğini gösterir.
- Kırmızı hata varsa ya da iş gerçekten çalıştıysa **durun** ve bana yazın.

Actions sekmesi hiç yoksa: *Settings → Actions → General → Allow all actions*
→ Save.

Bugünlük iş bitti. Eski site olduğu gibi yayında.

---

## B. Geçiş günü: tek seferde yayına alma

Toplam ~20 dakika. **Kesinti B1'den B3 bitene kadar, 2–5 dakika.** Trafiğin
az olduğu bir saatte yapın; B1, B2, B3'ü ara vermeden art arda uygulayın.

### B0. Ön koşullar (hepsi evet olmadan başlamayın)

- [ ] Gerçek hero görselleri commit'lendi ve `git push` yapıldı.
- [ ] Eski sitenin **dosya yedeği** ve **veritabanı yedeği** bilgisayarınızda.
      (cPanel → *Backup* → *Download a MySQL Database Backup* → WordPress
      veritabanının adına tıklayın.)
- [ ] cPanel → *Email Accounts*: `hello@peradijital.com.tr` ve
      `website@peradijital.com.tr` var.
- [ ] cPanel → *SSL/TLS Status*: `peradijital.com.tr` ve
      `www.peradijital.com.tr` geçerli. (15 Eylül 2026 kontrolü: sertifika
      `*.peradijital.com.tr` ve `peradijital.com.tr` adlarını kapsıyor, www
      dahil; bitiş 18 Kasım 2026.)
- [ ] A1–A4 tamam, A4'teki çalışma *Skipped* görünüyordu.

### B1. Eski dosyaları web kökünden taşı (silmeden)

**cPanel Terminal varsa** (Advanced → Terminal) — tek blok, olduğu gibi
yapıştırın:

```
mkdir -p ~/eski-site-wordpress
cd ~/public_html
shopt -s dotglob
for f in *; do
  case "$f" in .well-known|cgi-bin) ;; *) mv -- "$f" ~/eski-site-wordpress/ ;; esac
done
shopt -u dotglob
ls -la ~/public_html
```

`ls` çıktısında yalnızca `.` `..` ve varsa `.well-known`, `cgi-bin` kalmalı.

**Terminal yoksa — File Manager:**
1. Sağ üst **Settings → Show Hidden Files (dotfiles)** işaretle → Save.
2. Ev klasöründe (`/home/KULLANICI`) **+ Folder** → `eski-site-wordpress`.
3. `public_html` klasörüne gir → **Select All**.
4. `.well-known` ve `cgi-bin` işaretini **kaldır**.
5. **Move** → `/eski-site-wordpress` → Move Files.

### B2. Ortam dosyasını sunucuda "live" olarak oluştur

Bu dosya git'te yok, deploy onu hiç yüklemez ve hiç silmez. Deploy'dan
**önce** oluşturulur ki yeni site bir an bile staging (noindex) görünmesin.

cPanel → **File Manager** → `public_html`:
1. **+ Folder** → `assets` → içine gir → **+ Folder** → `inc` → içine gir.
2. **+ File** → adı `config.local.php` → Create.
3. Dosyayı seç → **Edit** → içindekileri silip **tam olarak** şunu yapıştır:

```
<?php
const SITE_ENV = 'live';
```

4. **Save Changes.**

### B3. Deploy'u elle başlat

<https://github.com/peradijital360-tech/pera-dijital/actions> →
soldan **Deploy to cPanel (FTP)** → sağda **Run workflow** → Branch: `main`
→ yeşil **Run workflow**.

Sayfayı yenileyin; yeni çalışma sarı (sürüyor) görünür. Yeşil tik olana kadar
bekleyin (ilk yükleme 2–5 dakika). Kırmızı olursa → D2.

### B4. Deploy'un gerçekten gittiğini doğrula

D1'deki üç kontrolü yapın.

### B5. İlk bakış (tarayıcı, gizli pencere)

- <https://www.peradijital.com.tr/> → yeni site görünüyor.
- <https://www.peradijital.com.tr/robots.txt> → `Allow: /` ve `Sitemap:`
  satırı var, `Disallow: /` **yok**. Varsa B2'deki dosyanın yolu veya
  içeriği yanlış.

### B6. PHP sürümü

cPanel → *MultiPHP Manager* → `peradijital.com.tr` → **PHP 8.1 veya üstü**.
(Eski WordPress için eski bir sürümde bırakılmış olabilir.)

### B7. Push ile otomatik deploy'u aç

<https://github.com/peradijital360-tech/pera-dijital/settings/variables/actions>
→ **Variables** sekmesi → **New repository variable**
- Name: `DEPLOY_ON_PUSH`
- Value: `true`
- **Add variable**

Bundan sonra her `git push` siteyi otomatik günceller.

### B8. Tam kontrol

C bölümüne geçin.

### Geri alma (bir şey ters giderse)

1. **Önce kilidi kapat:** GitHub → Settings → Secrets and variables → Actions
   → **Variables** → `DEPLOY_ON_PUSH` → sil.
2. cPanel Terminal'e yapıştır — yeni siteyi kenara alır, WordPress'i geri
   koyar:

```
mkdir -p ~/yeni-site-geri-alinan
cd ~/public_html
shopt -s dotglob
for f in *; do
  case "$f" in .well-known|cgi-bin) ;; *) mv -- "$f" ~/yeni-site-geri-alinan/ ;; esac
done
mv ~/eski-site-wordpress/* ~/public_html/
shopt -u dotglob
ls -la ~/public_html
```

WordPress veritabanına dokunulmadığı için eski site olduğu gibi geri gelir.
`.ftp-deploy-sync-state.json` da kenara alındığı için bir sonraki deploy
sıfırdan tam yükleme yapar.

### 30 gün sonra

Sorun çıkmadıysa: `~/eski-site-wordpress` klasörünü ve cPanel → *MySQL
Databases* altındaki WordPress veritabanını silin.

---

## C. Yayın sonrası

### C1. Otomatik kontrol (Mac Terminal)

```
cd ~/Desktop/pera-dijital-comtr/2
bash _tools/yayin_kontrol.sh
```

Son satır `Özet: N geçti, 0 kaldı.` olmalı. Betik şunları test eder:

**Alan adı yönlendirmeleri** (hepsi `https://www.peradijital.com.tr/` adresine)
- `http://peradijital.com.tr/` — iki adım (önce https, sonra www); normal
- `https://peradijital.com.tr/` — tek adım
- `http://www.peradijital.com.tr/` — tek adım

**Eski WordPress adresleri** — her biri `https://peradijital.com.tr`,
`https://www.peradijital.com.tr` ve `http://peradijital.com.tr` ile ayrı ayrı:

| Eski adres | Beklenen 301 hedefi |
|---|---|
| `/web-tasarim/` | `/cozumlerimiz/kurumsal-web-tasarim/` |
| `/e-ticaret/` | `/cozumlerimiz/e-ticaret-site-kurulumu/` |
| `/e-ticaret-sitesi/` | `/cozumlerimiz/e-ticaret-site-kurulumu/` |
| `/e-ticaret-web-sitesi-demo-talep-formu/` | `/cozumlerimiz/e-ticaret-site-kurulumu/` |
| `/google-reklamlari/` | `/cozumlerimiz/performans-reklam-yonetimi/` |
| `/sosyal-medya-reklamlari/` | `/cozumlerimiz/performans-reklam-yonetimi/` |
| `/referanslar/` | `/referanslarimiz/` |
| `/case-studies/` | `/referanslarimiz/` |
| `/teklif-al/` | `/` |
| `/blog/` | `/` |
| `/yapay-zeka-ve-dijital-pazarlamanin-gelecegi-2025-ve-sonrasi/` | `/` |
| `/category/yapay-zeka/` | `/` |

Ek olarak: sonda eğik çizgi olmadan (`/web-tasarim`), alt sayfalar
(`/blog/page/2/`, `/category/yapay-zeka/x/`), parametreli adres
(`/referanslar/?utm_source=mail` → parametre atılır) ve
`https://peradijital.com.tr/hakkimizda/` → `https://www.../hakkimizda/`.

**Yeni sayfalar** — 200 döner, `X-Robots-Tag` başlığı yok, `noindex` meta yok:
`/`, `/hakkimizda/`, `/referanslarimiz/` ve 7 hizmet sayfası.

**robots.txt / sitemap** — `Allow: /` + `Sitemap:` satırı, `Disallow: /`
yok; `/sitemap.xml` 200.

**Kapalı kalması gerekenler** — olmayan sayfa 404; `/wp-login.php`,
`/wp-admin/` 404; `/assets/inc/config.php`, `config.local.php`,
`config.example.php` 403; `/.ftp-deploy-sync-state.json` 403;
`/_tools/`, `README.md`, `YAYINA-ALMA.md`, `.github/` 404.

### C2. noindex'i elle de doğrula (1 dakika)

1. Gizli pencerede <https://www.peradijital.com.tr/> → sağ tık →
   *Sayfa kaynağını görüntüle* → `Cmd+F` → `noindex` → **sonuç yok** olmalı.
2. Aynısını bir hizmet sayfasında yapın.
3. Search Console (C4 bittikten sonra) → üstteki arama kutusuna ana sayfa
   adresini yazın → **Canlı URL'yi test et** → *Dizine eklemeye izin verilir
   mi?* → **Evet**.

Hâlâ `noindex` görüyorsanız: File Manager'da
`public_html/assets/inc/config.local.php` dosyasını açın — yol ve içerik B2
ile birebir aynı olmalı (`'live'`, küçük harf, tek tırnak). Sonra varsa
önbelleği (LiteSpeed Cache / Cloudflare) temizleyin.

### C3. Form testi (her form ayrı kaynak, hepsini deneyin)

Her sayfada: formu gerçek bilgilerle doldurun, mesaj alanına sayfanın adını
yazın, gönderin. **En az 5 saniye bekleyip** gönderin (daha hızlı gönderim
spam sayılıp sessizce atılır).

| # | Sayfa | Form |
|---|---|---|
| 1 | <https://www.peradijital.com.tr/#contact> | Ana sayfa |
| 2 | <https://www.peradijital.com.tr/cozumlerimiz/performans-reklam-yonetimi/#iletisim> | Performans |
| 3 | <https://www.peradijital.com.tr/cozumlerimiz/lead-generation/#iletisim> | Lead Generation |
| 4 | <https://www.peradijital.com.tr/cozumlerimiz/kurumsal-web-tasarim/#iletisim> | Kurumsal Web |
| 5 | <https://www.peradijital.com.tr/cozumlerimiz/e-ticaret-site-kurulumu/#iletisim> | E-ticaret |
| 6 | <https://www.peradijital.com.tr/cozumlerimiz/grafik-tasarim/#iletisim> | Grafik Tasarım |
| 7 | <https://www.peradijital.com.tr/cozumlerimiz/geo-yapay-zeka-gorunurlugu/#iletisim> | GEO |
| 8 | <https://www.peradijital.com.tr/cozumlerimiz/seo/#iletisim> | SEO |

Her biri için:
- [ ] Sayfada başarı mesajı çıktı.
- [ ] `hello@peradijital.com.tr` kutusuna mail geldi (gelmediyse **spam**
      klasörüne bakın).
- [ ] Mailin konusu formun sayfasını söylüyor.
- [ ] Maile **Yanıtla** deyince alıcı, formda yazdığınız e-posta adresi.
- [ ] Bir de boş gönderin: zorunlu alanlarda hata mesajı çıkmalı.

Mail spam'e düşüyorsa: cPanel → *Email Deliverability* → `peradijital.com.tr`
→ SPF ve DKIM **Valid** olmalı; değilse *Repair*.

### C4. Search Console — DNS ile Domain mülkü

1. <https://search.google.com/search-console> → sol üst mülk menüsü →
   **Mülk ekle**.
2. Soldaki **Alan adı** kutusu → `peradijital.com.tr` (başında `https://`
   ve `www` olmadan) → **Devam**.
3. Açılan pencerede **TXT kaydı** değerini kopyalayın
   (`google-site-verification=...` ile başlar). Pencereyi kapatmayın.
4. DNS kaydını ekleyin. 15 Eylül 2026 kontrolü: ad sunucuları
   `ns1.peradijital360.net` / `ns2.peradijital360.net`, sitenin çalıştığı
   sunucuyla aynı yerde — yani büyük olasılıkla **cPanel Zone Editor**.
   - **cPanel:** **Zone Editor** → `peradijital.com.tr` satırında **Manage**
     → **Add Record** → **Add TXT Record**
     - Name: `peradijital.com.tr.` (sonunda nokta; cPanel kendisi doldurur)
     - TTL: `14400`
     - Record: kopyaladığınız `google-site-verification=...` değeri
     - **Save Record**
   - **Zone Editor'da alan adı yoksa** DNS başka bir panelde yönetiliyordur
     (Cloudflare, alan adı firması): o panelde *DNS* → yeni **TXT** kaydı,
     Ad/Host: `@`, Değer: aynı metin.
5. 5–10 dakika bekleyin → Search Console penceresinde **Doğrula**.
   "Doğrulanamadı" derse bir saat sonra tekrar deneyin; DNS yayılması
   birkaç saati bulabilir. TXT kaydını **silmeyin**, doğrulama sürekli
   kontrol edilir.
6. **Yalnızca B bittikten sonra:** yeni mülkte **Site haritaları** →
   `https://www.peradijital.com.tr/sitemap.xml` → **Gönder**.
7. **URL denetimi** → `https://www.peradijital.com.tr/` → **Dizine eklenmesini
   iste**.
8. Eski `https://peradijital.com.tr` (URL öneki) mülkünüz varsa silmeyin;
   geçmiş verisi orada kalır. Eski sitemap (`sitemap_index.xml`) orada
   gönderilmişse kaldırın.

### C5. Bir hafta boyunca

Search Console → **Sayfalar** raporu: eski adresler "Yönlendirmeli sayfa"
altına geçer (bu doğru), yeni adresler "Dizine eklendi"ye gelir. Google
robots.txt'yi günde ~1 kez okuduğu için ilk gün eski durum görünebilir.

---

## D. Deploy çalıştı mı?

### D1. Üç kontrol (her deploy'dan sonra)

1. **GitHub Actions:** <https://github.com/peradijital360-tech/pera-dijital/actions>
   → en üstteki çalışma **yeşil tik**. İçine girin → `deploy` → **Deploy over
   FTP** adımını açın → logun sonunda `Sync complete` benzeri bir satır ve
   yüklenen dosya sayısı görünür.
   - Push sonrası iş **gri / Skipped** ise: `DEPLOY_ON_PUSH` değişkeni yok
     ya da `true` değil. Bu, B7'den önce beklenen durumdur.
2. **Sunucu:** cPanel → File Manager → `public_html` (gizli dosyalar açık) →
   `.ftp-deploy-sync-state.json` dosyasının **Last Modified** saati deploy
   saatiyle aynı.
3. **Site:** gizli pencerede değiştirdiğiniz sayfayı açın; değişiklik
   görünüyor. Görünmüyorsa `Cmd+Shift+R` ile önbelleksiz yenileyin.

### D2. Kırmızı hata olursa — logdaki mesaja göre

| Logda | Sebep | Çözüm |
|---|---|---|
| `getaddrinfo ENOTFOUND` | `FTP_SERVER` yanlış | Yalnızca `ftp.peradijital.com.tr`; `ftp://` ve `/` olmadan |
| `530` / `Login authentication failed` | kullanıcı adı veya şifre | `FTP_USERNAME` tam hâliyle `deploy@peradijital.com.tr`; şifreyi cPanel'de değiştirip secret'ı güncelleyin |
| `server-dir should be a folder (must end with /)` | `FTP_SERVER_DIR` sonunda `/` yok | `./` ya da `public_html/` |
| Dosyalar `public_html/public_html/` içine gitti | hem hesap kökü `public_html` hem `FTP_SERVER_DIR` = `public_html/` | `FTP_SERVER_DIR` = `./` yapın, yanlış klasörü File Manager'dan silin |
| `ETIMEDOUT` / `ECONNREFUSED` | hosting güvenlik duvarı GitHub'ı engelliyor | Hosting firmasına "GitHub Actions'tan port 21 FTP erişimi açık mı" diye sorun |
| Hata yok ama sunucuda eksik dosya | sunucudan elle silinmiş; action fark etmez | `.ftp-deploy-sync-state.json` dosyasını silin → **Run workflow** (tam yükleme) |

Secret'ı güncellemek: *Settings → Secrets and variables → Actions → Secrets*
→ ilgili secret → **Update** → yeni değer → **Update secret**. Sonra
Actions'ta başarısız çalışmayı açıp **Re-run all jobs**.
