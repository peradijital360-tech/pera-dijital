# Pera Dijital — yayına alma

Bu dosya depoda durur, sunucuya kopyalanmaz (`.cpanel.yml` yalnızca site
dosyalarını kopyalar). Üç bölüm var:

- **A. Bugün:** cPanel ile GitHub bağlantısı. Yayına almadan.
- **B. Geçiş günü:** tek seferde yayına alma, sırayla.
- **C. Yayın sonrası:** kontrol listesi, form testi, Search Console.

`KULLANICI` gördüğünüz yere cPanel kullanıcı adınızı yazın (cPanel sağ üstte
ve *General Information* kutusunda yazar).

---

## A. Bugün: cPanel ↔ GitHub bağlantısı (yayına ALMADAN)

> **UYARI:** Bu bölümün sonunda cPanel'de **Deploy HEAD Commit** düğmesine
> **basmayın.** Basarsanız yeni sitenin `index.php` ve `.htaccess` dosyaları
> eski WordPress'in üstüne yazılır ve eski site bozulur.

### A1. cPanel'de SSH anahtarı üret

cPanel'de **Terminal** varsa (Advanced → Terminal) en kısa yol budur. Sırayla
yapıştırın:

```
ssh-keygen -t ed25519 -C "cpanel-deploy" -f ~/.ssh/id_ed25519 -N ""
cat ~/.ssh/id_ed25519.pub
```

İkinci komutun çıktısını (`ssh-ed25519 AAAA... cpanel-deploy`) kopyalayın.

Terminal yoksa: **SSH Access → Manage SSH Keys → Generate a New Key**
- Key Name: `id_rsa` olarak bırakın
- Key Password: **boş** bırakın (cPanel şifreli anahtarla çekemez)
- Key Type: RSA, 4096 → **Generate Key**
- Sonra listede anahtarın yanında **Manage → Authorize**
- **View/Download** → *Public key* kutusundakini kopyalayın.

### A2. Anahtarı GitHub'a deploy key olarak ekle

1. <https://github.com/peradijital360-tech/pera-dijital/settings/keys>
2. **Add deploy key**
3. Title: `cPanel peradijital.com.tr`
4. Key: A1'de kopyaladığınız satır
5. **Allow write access: işaretlemeyin**
6. **Add key**

### A3. Bağlantıyı test et (Terminal varsa)

```
ssh -T git@github.com
```

İlk seferde `Are you sure you want to continue connecting` sorusuna `yes`
yazın. Beklenen cevap:
`Hi peradijital360-tech/pera-dijital! You've successfully authenticated...`

### A4. Depoyu cPanel'e klonla

**Git™ Version Control → Create**

| Alan | Değer |
|---|---|
| Clone a Repository | açık |
| Clone URL | `git@github.com:peradijital360-tech/pera-dijital.git` |
| Repository Path | `repositories/pera-dijital` |
| Repository Name | `pera-dijital` |

**Create** → birkaç saniye sürer. Listede `pera-dijital` görünür.

> Repository Path kesinlikle `public_html` içinde olmasın.

### A5. Hazır olduğunu doğrula (deploy etmeden)

**Manage → Pull or Deploy** sekmesi:
- *HEAD Commit* GitHub'daki son commit mesajıyla aynı olmalı.
- **Deploy HEAD Commit düğmesine basmayın.** Bugünlük iş bitti.

Hata alırsanız (`Permission denied (publickey)` / `Host key verification
failed`): A3'teki testi çalıştırıp `yes` deyin, sonra A4'ü tekrarlayın.

---

## B. Geçiş günü: tek seferde yayına alma

Toplam ~15 dakika. Kesinti yalnızca B3 ile B4 arasındaki birkaç saniye; B4'ü B3'ün hemen ardından yapın.

### B0. Ön koşullar (hepsi evet olmadan başlamayın)

- [ ] Gerçek hero görselleri commit'lendi ve GitHub'a push edildi.
- [ ] Eski sitenin **dosya yedeği** ve **veritabanı yedeği** bilgisayarınızda.
      (cPanel → *Backup* → *Download a MySQL Database Backup*, WordPress
      veritabanının adına tıklayın.)
- [ ] cPanel → *Email Accounts*: `hello@peradijital.com.tr` ve
      `website@peradijital.com.tr` var.
- [ ] cPanel → *SSL/TLS Status*: `peradijital.com.tr` **ve**
      `www.peradijital.com.tr` yeşil (geçerli). Değilse *Run AutoSSL*,
      bitmesini bekleyin.
      (15 Eylül 2026 kontrolü: mevcut Let's Encrypt sertifikası
      `*.peradijital.com.tr` ve `peradijital.com.tr` adlarını kapsıyor, www dahil;
      bitiş 18 Kasım 2026. AutoSSL açıksa kendisi yeniler.)

### B1. Bayrağı live yap (Mac Terminal)

```
cd ~/Desktop/pera-dijital-comtr/2
sed -i '' "s/const SITE_ENV = 'staging';/const SITE_ENV = 'live';/" assets/inc/config.local.php
grep "const SITE_ENV" assets/inc/config.local.php
```

Son satır tam olarak `const SITE_ENV = 'live';` yazmalı. Sonra:

```
git add assets/inc/config.local.php
git commit -m "Go live: SITE_ENV live"
git push
```

> Bayrak, eski dosyalar taşınmadan **önce** live yapılır. Böylece yeni site
> ana alan adında bir an bile staging (noindex) olarak görünmez.

### B2. cPanel'e son hâli çek

**Git™ Version Control → pera-dijital → Manage → Pull or Deploy →
Update from Remote**

*HEAD Commit* mesajı `Go live: SITE_ENV live` olmalı. **Henüz Deploy'a
basmayın.**

### B3. Eski dosyaları web kökünden taşı (silmeden)

**Terminal varsa** — tek blok, olduğu gibi yapıştırın:

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
2. `/home/KULLANICI` içinde **+ Folder** → `eski-site-wordpress`.
3. `public_html` klasörüne gir → **Select All**.
4. `.well-known` ve `cgi-bin` işaretini **kaldır**.
5. **Move** → `/eski-site-wordpress` → Move Files.

### B4. Deploy

**Git™ Version Control → pera-dijital → Manage → Pull or Deploy →
Deploy HEAD Commit**

Son deploy saati güncellenir. (Bu adım B3'ten hemen sonra, bekletmeden.)

### B5. İlk bakış (tarayıcı, gizli pencere)

- <https://www.peradijital.com.tr/> açılıyor, yeni site görünüyor.
- <https://www.peradijital.com.tr/robots.txt> → `Allow: /` ve `Sitemap:`
  satırı var, `Disallow: /` **yok**.

### B6. PHP sürümü

cPanel → *MultiPHP Manager* → `peradijital.com.tr` → **PHP 8.1 veya üstü**
seçili olsun (eski WordPress için farklı ayarlanmış olabilir).

### B7. Tam kontrol

C1'e geçin.

### Geri alma (bir şey ters giderse)

Terminal'e yapıştırın — yeni siteyi kenara alır, WordPress'i geri koyar:

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

**Kapalı kalması gerekenler** — olmayan sayfa 404, `/wp-login.php` ve
`/wp-admin/` 404, `/assets/inc/config.php` ve `config.local.php` 403,
`/_tools/`, `README.md`, `.cpanel.yml` 404.

### C2. noindex'i elle de doğrula (1 dakika)

1. Gizli pencerede <https://www.peradijital.com.tr/> → sağ tık →
   *Sayfa kaynağını görüntüle* → `Cmd+F` → `noindex` → **sonuç yok** olmalı.
2. Aynısını bir hizmet sayfasında yapın.
3. Search Console (C4 bittikten sonra) → üstteki arama kutusuna ana sayfa
   adresini yazın → **Canlı URL'yi test et** → *Dizine eklemeye izin verilir
   mi?* → **Evet**.

Hâlâ `noindex` görüyorsanız: B2'deki commit mesajını kontrol edin, sonra
cPanel'de önbellek varsa (LiteSpeed Cache / Cloudflare) temizleyin.

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
4. DNS kaydını ekleyin. 15 Eylül 2026 kontrolü: alan adının ad sunucuları
   `ns1.peradijital360.net` / `ns2.peradijital360.net`, sitenin çalıştığı
   sunucuyla aynı yerde — yani büyük olasılıkla **cPanel Zone Editor**.
   Zone Editor'da `peradijital.com.tr` görünmüyorsa DNS başka bir panelde
   yönetiliyordur, ikinci seçeneği uygulayın.
   - **cPanel'de ise:** cPanel → **Zone Editor** → `peradijital.com.tr`
     satırında **Manage** → **Add Record** → **Add TXT Record**
     - Name: `peradijital.com.tr.` (sonunda nokta; cPanel kendisi doldurur)
     - TTL: `14400`
     - Record: kopyaladığınız `google-site-verification=...` değeri
     - **Save Record**
   - **Başka yerde ise** (Cloudflare, alan adı firması): o panelde
     *DNS* → yeni **TXT** kaydı, Ad/Host: `@`, Değer: aynı metin.
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
