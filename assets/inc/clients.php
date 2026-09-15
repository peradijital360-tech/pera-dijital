<?php
/* Client roster for referanslarimiz/. Data, not markup: the logo grid AND the
   sector filter row are both rendered from this one list, so they can never
   disagree.

   ADDING A BRAND IS ONE ROW. The filter row rebuilds itself from the data:
   a sector earns a button once it has SECTOR_MIN brands, and the whole row
   disappears while fewer than two sectors qualify. Nothing here is hardcoded
   in the page.

   'logo_h' is the OPTICAL height (see the logo intake checklist in README).
   These values were computed from each file's measured ink box, because the
   source exports letterbox the logo inside a fixed 4:1 frame by differing
   amounts. They are a correction for that padding, not a design choice; once
   a logo is re-cropped tight its value should be reset toward 2rem.
   'href'   is optional; a non-empty value turns the cell into a link. */

declare(strict_types=1);

/* A sector needs at least this many brands before it earns a filter button. */
const SECTOR_MIN = 3;

/* Slug => visible label. Declaration order is the button order. A sector may
   sit here with too few brands; it simply will not render a button yet. */
const SECTORS = [
    'insaat' => 'İnşaat',
    'turizm' => 'Turizm',
    'lojistik' => 'Lojistik',
    'gastronomi' => 'Gastronomi',
    'banyo' => 'Banyo',
    'e-ticaret' => 'E-ticaret',
    'egitim' => 'Eğitim',
    'ev-yasam' => 'Ev ve Yaşam',
    'mucevher' => 'Mücevher',
    'spor-fitness' => 'Spor ve Fitness',
    'yapi' => 'Yapı',
    'moda' => 'Moda',
    'kozmetik' => 'Kozmetik',
    'spa-wellness' => 'Spa ve Wellness',
];

const CLIENTS = [
    ['file' => 'baof.webp', 'name' => 'BAOF', 'sector' => 'insaat', 'logo_h' => '3.4375rem', 'width' => 600, 'height' => 150, 'href' => ''],  /* CAPPED: wants to be bigger but the letterboxed frame will not allow it — re-crop */

    ['file' => 'theobahotel.webp', 'name' => 'The Oba Hotel', 'sector' => 'turizm', 'logo_h' => '3.4375rem', 'width' => 600, 'height' => 150, 'href' => ''],  /* CAPPED: wants to be bigger but the letterboxed frame will not allow it — re-crop */

    /* ▸ The only tight-cropped file in the set (327x94, no letterboxing).
       Its logo_h is therefore on a different basis to the rest — it is the
       value the others should converge on once re-exported tight. */
    ['file' => 'birgundekargo.webp', 'name' => 'Bir Günde Kargo', 'sector' => 'lojistik', 'logo_h' => '2.25rem', 'width' => 327, 'height' => 94, 'href' => ''],

    ['file' => 'fikoocakbasi.webp', 'name' => 'Fiko Ocakbaşı', 'sector' => 'gastronomi', 'logo_h' => '3.4375rem', 'width' => 600, 'height' => 150, 'href' => ''],  /* CAPPED: wants to be bigger but the letterboxed frame will not allow it — re-crop */

    ['file' => 'orka.webp', 'name' => 'Orka', 'sector' => 'banyo', 'logo_h' => '2.375rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'banyomarka.webp', 'name' => 'Banyomarka', 'sector' => 'e-ticaret', 'logo_h' => '2.0625rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'bricks4kidz.webp', 'name' => 'Bricks 4 Kidz', 'sector' => 'egitim', 'logo_h' => '3.4375rem', 'width' => 600, 'height' => 150, 'href' => ''],  /* CAPPED: wants to be bigger but the letterboxed frame will not allow it — re-crop */

    ['file' => 'armisyatak.webp', 'name' => 'Armis Yatak', 'sector' => 'ev-yasam', 'logo_h' => '2rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'milamore.webp', 'name' => 'Milamore', 'sector' => 'mucevher', 'logo_h' => '2.9375rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'ifc.webp', 'name' => 'İstanbul Fitness Center', 'sector' => 'spor-fitness', 'logo_h' => '2.375rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'axxion.webp', 'name' => 'Axxion', 'sector' => 'e-ticaret', 'logo_h' => '3rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'zafoni.webp', 'name' => 'Zafoni', 'sector' => 'e-ticaret', 'logo_h' => '2.5rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'sinax.webp', 'name' => 'Sinax', 'sector' => 'yapi', 'logo_h' => '3.125rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'baltacimilano.webp', 'name' => 'Baltacı Milano', 'sector' => 'moda', 'logo_h' => '2.375rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'eveline.webp', 'name' => 'Eveline Cosmetics', 'sector' => 'kozmetik', 'logo_h' => '2.125rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'atolyeno30.webp', 'name' => 'Atölye No:30', 'sector' => 'gastronomi', 'logo_h' => '2.6875rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'fame.webp', 'name' => 'Fame', 'sector' => 'moda', 'logo_h' => '3rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'saunadekor.webp', 'name' => 'Saunadekor', 'sector' => 'spa-wellness', 'logo_h' => '2.875rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'usba.webp', 'name' => 'Usba Baklava', 'sector' => 'gastronomi', 'logo_h' => '2.5rem', 'width' => 600, 'height' => 150, 'href' => ''],

    ['file' => 'ltc.webp', 'name' => 'LTC Jeans', 'sector' => 'moda', 'logo_h' => '3.1875rem', 'width' => 600, 'height' => 150, 'href' => ''],
];

/* How many brands each sector actually has. */
function client_sector_counts(): array
{
    $counts = [];
    foreach (CLIENTS as $client) {
        $slug = $client['sector'];
        $counts[$slug] = ($counts[$slug] ?? 0) + 1;
    }
    return $counts;
}

/* The sectors that have earned a filter button, in SECTORS order. */
function client_filter_sectors(int $min = SECTOR_MIN): array
{
    $counts = client_sector_counts();
    $out = [];
    foreach (SECTORS as $slug => $label) {
        if (($counts[$slug] ?? 0) >= $min) {
            $out[$slug] = $label;
        }
    }
    return $out;
}

/* One button plus one sector is not a filter, it is a label. Two qualifying
   sectors is the minimum that gives the visitor a real choice. */
function client_filter_is_useful(array $sectors): bool
{
    return count($sectors) >= 2;
}
