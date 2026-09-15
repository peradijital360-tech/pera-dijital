#!/usr/bin/env bash
# Yayın sonrası kontrol. Yalnızca herkese açık adresleri okur, hiçbir şey değiştirmez.
# Kullanım (Mac Terminal):  bash _tools/yayin_kontrol.sh
# Her satır: GEÇTİ / KALDI, beklenen ve gelen değer. En sonda özet.

SITE="https://www.peradijital.com.tr"
APEX="peradijital.com.tr"
pass=0; fail=0

ok()   { printf "  \033[32mGEÇTİ\033[0m  %s\n" "$1"; pass=$((pass+1)); }
bad()  { printf "  \033[31mKALDI\033[0m  %s\n         beklenen: %s\n         gelen:    %s\n" "$1" "$2" "$3"; fail=$((fail+1)); }

# redirect URL -> beklenen hedef (tek adımda 301)
redir() {
  local url="$1" want="$2" got
  got=$(curl -s -o /dev/null -m 20 -w "%{http_code} %{redirect_url}" "$url")
  if [ "$got" = "301 $want" ]; then ok "$url → $want"; else bad "$url" "301 $want" "$got"; fi
}

# redirect zinciri: en fazla N adımda beklenen son adrese varmalı
lands() {
  local url="$1" want="$2" max="$3" got
  got=$(curl -sL -o /dev/null -m 30 -w "%{num_redirects} %{url_effective}" "$url")
  local n="${got%% *}" final="${got#* }"
  if [ "$final" = "$want" ] && [ "$n" -ge 1 ] && [ "$n" -le "$max" ]; then ok "$url → $want ($n adım)"
  else bad "$url" "en fazla $max adımda $want" "$n adım, son: $final"; fi
}

# status URL -> beklenen kod
status() {
  local url="$1" want="$2" got
  got=$(curl -s -o /dev/null -m 20 -w "%{http_code}" "$url")
  if [ "$got" = "$want" ]; then ok "$url → $want"; else bad "$url" "$want" "$got"; fi
}

# sayfa 200 dönmeli ve noindex taşımamalı (ne meta etiketi ne başlık)
indexable() {
  local url="$1" code hdr body
  code=$(curl -s -o /dev/null -m 20 -w "%{http_code}" "$url")
  hdr=$(curl -sI -m 20 "$url" | grep -i '^x-robots-tag' | tr -d '\r')
  body=$(curl -s -m 20 "$url" | grep -io '<meta name="robots"[^>]*>')
  if [ "$code" = "200" ] && [ -z "$hdr" ] && [ -z "$body" ]; then ok "$url → 200, noindex yok"
  else bad "$url" "200, X-Robots-Tag yok, robots meta yok" "$code | ${hdr:-başlık yok} | ${body:-meta yok}"; fi
}

echo; echo "1) Alan adı ve HTTPS yönlendirmeleri"
# http + www'siz: önce HTTPS, sonra www kuralı çalışır; iki adım normal.
lands "http://$APEX/"              "$SITE/" 2
redir "https://$APEX/"             "$SITE/"
redir "http://www.$APEX/"          "$SITE/"

echo; echo "2) Eski WordPress adresleri (tek adımda yeni sayfaya)"
for base in "https://$APEX" "$SITE" "http://$APEX"; do
  redir "$base/web-tasarim/"                                             "$SITE/cozumlerimiz/kurumsal-web-tasarim/"
  redir "$base/e-ticaret/"                                               "$SITE/cozumlerimiz/e-ticaret-site-kurulumu/"
  redir "$base/e-ticaret-sitesi/"                                        "$SITE/cozumlerimiz/e-ticaret-site-kurulumu/"
  redir "$base/e-ticaret-web-sitesi-demo-talep-formu/"                   "$SITE/cozumlerimiz/e-ticaret-site-kurulumu/"
  redir "$base/google-reklamlari/"                                       "$SITE/cozumlerimiz/performans-reklam-yonetimi/"
  redir "$base/sosyal-medya-reklamlari/"                                 "$SITE/cozumlerimiz/performans-reklam-yonetimi/"
  redir "$base/referanslar/"                                             "$SITE/referanslarimiz/"
  redir "$base/case-studies/"                                            "$SITE/referanslarimiz/"
  redir "$base/teklif-al/"                                               "$SITE/"
  redir "$base/blog/"                                                    "$SITE/"
  redir "$base/yapay-zeka-ve-dijital-pazarlamanin-gelecegi-2025-ve-sonrasi/" "$SITE/"
  redir "$base/category/yapay-zeka/"                                     "$SITE/"
done
redir "https://$APEX/web-tasarim"            "$SITE/cozumlerimiz/kurumsal-web-tasarim/"
redir "https://$APEX/blog/page/2/"           "$SITE/"
redir "https://$APEX/category/yapay-zeka/x/" "$SITE/"
redir "https://$APEX/referanslar/?utm_source=mail" "$SITE/referanslarimiz/"
redir "https://$APEX/hakkimizda/"            "$SITE/hakkimizda/"

echo; echo "3) Yeni sayfalar açılıyor ve indekslenebilir"
for p in / /hakkimizda/ /referanslarimiz/ \
         /cozumlerimiz/performans-reklam-yonetimi/ /cozumlerimiz/lead-generation/ \
         /cozumlerimiz/kurumsal-web-tasarim/ /cozumlerimiz/e-ticaret-site-kurulumu/ \
         /cozumlerimiz/grafik-tasarim/ /cozumlerimiz/geo-yapay-zeka-gorunurlugu/ /cozumlerimiz/seo/; do
  indexable "$SITE$p"
done
status "$SITE/cozumlerimiz/" 200

echo; echo "4) robots.txt ve sitemap"
robots=$(curl -s -m 20 "$SITE/robots.txt")
if echo "$robots" | grep -q '^Allow: /$' && echo "$robots" | grep -q "^Sitemap: $SITE/sitemap.xml$" && ! echo "$robots" | grep -q '^Disallow: /$'; then
  ok "$SITE/robots.txt → Allow + Sitemap, Disallow yok"
else
  bad "$SITE/robots.txt" "Allow: / ve Sitemap satırı, Disallow: / yok" "$(echo "$robots" | tr '\n' '|')"
fi
status "$SITE/sitemap.xml" 200

echo; echo "5) Kapalı kalması gerekenler"
status "$SITE/olmayan-bir-sayfa-$RANDOM/" 404
status "$SITE/wp-login.php" 404
status "$SITE/wp-admin/" 404
status "$SITE/assets/inc/config.php" 403
status "$SITE/assets/inc/config.local.php" 403
status "$SITE/_tools/render.py" 404
status "$SITE/README.md" 404
status "$SITE/YAYINA-ALMA.md" 404
status "$SITE/.github/workflows/deploy.yml" 404
status "$SITE/assets/inc/config.example.php" 403
status "$SITE/.ftp-deploy-sync-state.json" 403

echo; echo "Özet: $pass geçti, $fail kaldı."
[ "$fail" -eq 0 ]
