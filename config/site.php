<?php

/*
|--------------------------------------------------------------------------
| Konten & identitas situs HIMASIF
|--------------------------------------------------------------------------
| Semua teks/tautan yang dulu ditulis langsung di index.html dikumpulkan di
| sini supaya mudah diubah tanpa menyentuh Blade. Akses: config('site.xxx').
| Tidak ada pemanggilan env()/closure -> aman untuk `php artisan config:cache`.
*/

$instagram = 'https://www.instagram.com/himasifuikabogor';
$about = [
    ['label' => 'Sejarah', 'route' => 'pages.sejarah'],
    ['label' => 'Logo', 'route' => 'pages.logo'],
    ['label' => 'Visi Misi', 'route' => 'pages.visi-misi'],
    ['label' => 'Kontak Kami', 'route' => 'pages.kontak'],
];

return [

    'name' => 'HIMASIF',
    'full_name' => 'Himpunan Mahasiswa Sistem Informasi UIKA',
    'description' => 'Himpunan Mahasiswa Sistem Informasi UIKA (HIMASIF) adalah wadah bagi mahasiswa agar dapat berkembang dan berprestasi.',
    'period' => '2025-2026',
    'address' => 'Jl. Sholeh Iskandar, Jawa Barat, Kota Bogor',
    'video_url' => 'https://www.youtube-nocookie.com/embed/8n_rJsYLnaM?autoplay=1&rel=0',

    'social' => [
        'instagram' => $instagram,
        'tiktok' => 'https://www.tiktok.com/@masifuika',
        'email' => 'https://mail.google.com/mail/?view=cm&fs=1&to=himasifuikabogor@gmail.com',
    ],

    /*
    | Halaman statis. Setiap entri otomatis menjadi route bernama "pages.{kunci}"
    | (lihat routes/web.php). Slug lama dipertahankan agar URL/SEO tidak berubah.
    */
    'pages' => [
        'sejarah' => ['uri' => 'sejarah-himasif-malvin', 'title' => 'Sejarah'],
        'logo' => ['uri' => 'logo-himasif', 'title' => 'Logo'],
        'visi-misi' => ['uri' => 'visi-misi', 'title' => 'Visi Misi'],
        'kontak' => ['uri' => 'kontak-kami', 'title' => 'Kontak Kami'],
        'galeri' => ['uri' => 'galeri-himasif', 'title' => 'Galeri HIMASIF'],
        'struktur' => ['uri' => 'struktur-organisasi', 'title' => 'Struktur Kepengurusan'],
    ],

    /*
    | Menu header (desktop + mobile memakai data yang sama).
    | Item: label + ('route' | 'url'), atau 'children' untuk dropdown.
    */
    'menu' => [
        'left' => [
            ['label' => 'Tentang Kami', 'children' => $about],
            ['label' => 'Galeri HIMASIF', 'route' => 'pages.galeri'],
        ],
        'right' => [
            ['label' => 'Sorotan', 'url' => $instagram],
            ['label' => 'Struktur Kepengurusan', 'route' => 'pages.struktur'],
        ],
    ],

    'footer_links' => [
        ['title' => 'Tentang Kami', 'class' => 'tentang-kami', 'links' => $about],
        ['title' => 'Media', 'class' => 'align-right-lg media-hp-footer', 'links' => [
            ['label' => 'Sorotan', 'url' => $instagram],
            ['label' => 'Galeri', 'route' => 'pages.galeri'],
        ]],
    ],

    'hero_slides' => [
        'hero_slide/bg-hero-1.webp',
        'hero_slide/bg-hero-2.webp',
        'hero_slide/bg-hero-3.webp',
        'hero_slide/bg-hero-4.webp',
        'hero_slide/bg-hero-5.webp',
    ],

    'hero_logos' => [
        ['file' => 'hero_logo/logo-uika.webp', 'alt' => 'Logo UIKA'],
        ['file' => 'hero_logo/Fts.webp', 'alt' => 'Logo FTS'],
        ['file' => 'hero_logo/SI.webp', 'alt' => 'Logo Sistem Informasi'],
        ['file' => 'hero_logo/HIMASIF.webp', 'alt' => 'Logo HIMASIF'],
    ],

    // 'class' = kelas posisi/warna per nilai (dipakai CSS), jangan diubah sembarangan.
    'nilai_kabinet' => [
        'desktop' => [
            ['class' => 'nilai-sistematis', 'label' => 'Sistematis'],
            ['class' => 'nilai-efisiensi', 'label' => 'Efisiensi'],
            ['class' => 'nilai-lestari', 'label' => 'Kolaboratif'],
            ['class' => 'nilai-aktualisasi', 'label' => 'Inovatif'],
            ['class' => 'nilai-reformasi', 'label' => 'Reformasi'],
            ['class' => 'nilai-aktif', 'label' => 'Aktif'],
            ['class' => 'nilai-sinergi', 'label' => 'Berdampak'],
        ],
        'mobile' => [
            ['class' => 'nilai-reformasi-mobile', 'label' => 'Reformasi'],
            ['class' => 'nilai-aktif-mobile', 'label' => 'Aktif'],
            ['class' => 'nilai-sinergi-mobile', 'label' => 'Berdampak'],
        ],
    ],

    'ketua' => [
        'jabatan' => 'Ketua Himpunan',
        'nama_depan' => 'Muhammad',
        'nama_belakang' => 'Irham',
    ],

    // 'count' => angka yang dianimasikan; null = tampilkan teks 'title' saja.
    'statistik' => [
        [
            'count' => 16, 'title' => 'Proker',
            'icon' => 'hero_icon/gambar-tanggal.svg', 'icon_class' => 'icon-proker',
            'label' => 'Program Kerja', 'label_class' => 'label-proker',
            'wrapper_class' => 'label-wrapper', 'card_class' => '',
        ],
        [
            'count' => null, 'title' => 'Departemen',
            'icon' => 'hero_icon/department.svg', 'icon_class' => 'icon-event',
            'label' => 'Seluruh departemen HIMASIF', 'label_class' => 'label-event',
            'wrapper_class' => 'label-wrapper-2', 'card_class' => 'marginl-auto',
        ],
        [
            'count' => 45, 'title' => 'Anggota',
            'icon' => 'hero_icon/gambar-orang.svg', 'icon_class' => 'icon-pengurus',
            'label' => 'Pengurus Aktif', 'label_class' => 'label-pengurus',
            'wrapper_class' => 'label-wrapper', 'card_class' => '',
        ],
    ],

    // Placeholder sorotan (9 kartu). Ganti dengan data asli: title, description, image, url.
    'sorotan' => array_map(static fn (int $n): array => [
        'title' => "Sorotan {$n}",
        'description' => 'Informasi dan Sorotan terbaru seputar kegiatan HIMASIF.',
        'image' => 'HIMASIF.webp',
        'url' => '#',
    ], range(1, 9)),

];
