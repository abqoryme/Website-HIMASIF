<?php

/*
|--------------------------------------------------------------------------
| Data Struktur Kepengurusan HIMASIF
|--------------------------------------------------------------------------
| Pengganti js/struktur-data.js. Edit nama, foto, deskripsi, dan proker di
| sini. Path foto relatif terhadap public/images/ (mis. 'struktur/chindy.png'), dibaca lewat img_asset();
| StrukturController mengubahnya menjadi URL asset() lalu mengirimkannya ke
| JS (resources/js/modules/struktur.js). Foto kosong ('') atau file yang
| tidak ada otomatis tampil sebagai inisial.
|
| Hanya array biasa + closure yang dieksekusi saat file dimuat, jadi aman
| untuk `php artisan config:cache`.
*/

$periode20252026 =
[
    [
        'id' => 'bph',
        'label' => 'BPH',
        'nama' => 'Badan Pengurus Harian',
        'tagline' => 'Pengarah dan penggerak organisasi',
        'icon' => 'fa-crown',
        'warna' => '#D6C26A',
        'foto' => '',
        'pemimpin' => [
            [
                'nama' => 'Muhammad Irham',
                'jabatan' => 'Ketua Himpunan',
                'foto' => 'hero_team/Kahim.svg',
                'deskripsi' => 'Pengambil kebijakan tertinggi di HIMASIF yang menjalankan fungsi kepemimpinan umum dan bertanggung jawab atas seluruh pelaksanaan tugas serta program kerja, baik ke dalam maupun ke luar organisasi.',
                'peran' => [
                    'Memimpin HIMASIF',
                    'Menetapkan kebijakan',
                    'Mengoordinasikan pengurus',
                    'Bertanggung jawab atas kegiatan',
                ],
            ],
        ],
        'kelompok' => [
            [
                'label' => 'Administrasi',
                'judul' => 'Sekretaris',
                'deskripsi' => 'Penanggung jawab dan koordinator bidang administrasi HIMASIF.',
                'peran' => [
                    'Mengelola administrasi dan kearsipan',
                    'Menyiapkan materi rapat dan dokumen organisasi',
                    'Mencatat surat masuk, surat keluar, dan presensi rapat',
                    'Memelihara inventaris kesekretariatan',
                ],
                'anggota' => [
                    [
                        'nama' => 'Nama Sekretaris',
                        'jabatan' => 'Sekretaris Umum',
                        'foto' => '',
                    ],
                    [
                        'nama' => 'Chindy Desita Julia P',
                        'jabatan' => 'Wakil Sekretaris',
                        'foto' => 'struktur/chindy.png',
                    ],
                ],
            ],
            [
                'label' => 'Keuangan',
                'judul' => 'Bendahara',
                'deskripsi' => 'Penanggung jawab dan koordinator bidang keuangan HIMASIF.',
                'peran' => [
                    'Mengelola pemasukan dan pengeluaran',
                    'Menyusun laporan keuangan',
                    'Mengelola kas organisasi',
                    'Melaporkan keuangan kepada Ketua Himpunan',
                ],
                'anggota' => [
                    [
                        'nama' => 'Nama Bendahara',
                        'jabatan' => 'Bendahara Umum',
                        'foto' => '',
                    ],
                    [
                        'nama' => 'M Kevan Dwi Kurnia',
                        'jabatan' => 'Wakil Bendahara',
                        'foto' => 'struktur/bph/kevan.png',
                    ],
                ],
            ],
        ],
        'proker' => [],
    ],
    [
        'id' => 'akaristek',
        'label' => 'Departemen',
        'nama' => 'Departemen Akaristek',
        'tagline' => 'Akademik, riset, dan teknologi',
        'icon' => 'fa-flask',
        'warna' => '#5358DD',
        'foto' => '',
        'pemimpin' => [
            [
                'nama' => 'Nama Kepala Departemen',
                'jabatan' => 'Kepala Departemen Akaristek',
                'foto' => '',
                'deskripsi' => 'Departemen yang berfokus pada pengembangan akademik, riset, dan teknologi anggota HIMASIF melalui kegiatan yang edukatif, inovatif, dan mendukung peningkatan kompetensi mahasiswa Sistem Informasi.',
                'peran' => [
                    'Mengadakan kegiatan belajar bersama',
                    'Mendorong riset dan karya mahasiswa',
                    'Menyebarkan info lomba dan beasiswa',
                    'Mendampingi tim kompetisi IT',
                ],
            ],
        ],
        'kelompok' => [
            [
                'label' => 'Tim',
                'judul' => 'Anggota Departemen',
                'deskripsi' => '',
                'peran' => [],
                'anggota' => [
                    [
                        'nama' => 'Ahmad Abqory',
                        'jabatan' => 'Staf Akaristek',
                        'foto' => 'struktur/akaristek/abqory.png',
                    ],
                    [
                        'nama' => 'Aby Ubaidillah',
                        'jabatan' => 'Staf Akaristek',
                        'foto' => 'struktur/akaristek/aby.png',
                    ],
                    [
                        'nama' => 'Nabila Sahwa',
                        'jabatan' => 'Staf Akaristek',
                        'foto' => 'struktur/akaristek/nabila.png',
                    ],
                    [
                        'nama' => 'Aimy Khalisa',
                        'jabatan' => 'Staf Akaristek',
                        'foto' => 'struktur/akaristek/aimy.png',
                    ],
                    [
                        'nama' => 'Erlin Rahmadhani',
                        'jabatan' => 'Staf Akaristek',
                        'foto' => 'struktur/akaristek/erlin.png',
                    ],
                    [
                        'nama' => 'Agis Nur Khalik',
                        'jabatan' => 'Staf Akaristek',
                        'foto' => 'struktur/akaristek/agis.png',
                    ],
                    [
                        'nama' => 'Fikri Abdillah',
                        'jabatan' => 'Staf Akaristek',
                        'foto' => 'struktur/akaristek/abdillah.png',
                    ],
                    [
                        'nama' => 'M. Yasin',
                        'jabatan' => 'Staf Akaristek',
                        'foto' => 'struktur/akaristek/yasin.png',
                    ],
                ],
            ],
        ],
        'proker' => [
            [
                'nama' => 'Pembuatan Website Himpunan',
                'pj' => 'Ahmad Abqory Mudabighi',
                'deskripsi' => 'Membangun media informasi digital HIMASIF untuk menyampaikan informasi, kegiatan, dan dokumentasi himpunan.',
            ],
            [
                'nama' => 'Bank Soal & Bank Materi',
                'pj' => 'Erlin Rahmadhani',
                'deskripsi' => 'Penyediaan kumpulan soal dan materi perkuliahan sebagai sarana belajar dan membantu mahasiswa dalam mempersiapkan kegiatan akademik.',
            ],
        ],
    ],
    [
        'id' => 'karakter',
        'label' => 'Departemen',
        'nama' => 'Departemen Pengembangan Karakter',
        'tagline' => 'Kaderisasi dan pembentukan karakter',
        'icon' => 'fa-seedling',
        'warna' => '#1F7F78',
        'foto' => '',
        'pemimpin' => [
            [
                'nama' => 'Nama Kepala Departemen',
                'jabatan' => 'Kepala Departemen Pengembangan Karakter',
                'foto' => '',
                'deskripsi' => 'Departemen yang berfokus pada pembangunan karakter, kepedulian, dan kebersamaan anggota HIMASIF melalui kegiatan yang edukatif, positif, dan bermakna.',
                'peran' => [
                    'Menyelenggarakan kaderisasi anggota',
                    'Membina kepemimpinan mahasiswa',
                    'Menjaga kekeluargaan antarangkatan',
                    'Mendampingi mahasiswa baru',
                ],
            ],
        ],
        'kelompok' => [
            [
                'label' => 'Tim',
                'judul' => 'Anggota Departemen',
                'deskripsi' => '',
                'peran' => [],
                'anggota' => [
                    [
                        'nama' => 'M Rangga',
                        'jabatan' => 'Staf Pengembangan Karakter',
                        'foto' => 'struktur/karakter/rangga.png',
                    ],
                    [
                        'nama' => 'Langgeng Trihadi',
                        'jabatan' => 'Staf Pengembangan Karakter',
                        'foto' => 'struktur/karakter/langgeng.png',
                    ],
                    [
                        'nama' => 'M Pasia',
                        'jabatan' => 'Staf Pengembangan Karakter',
                        'foto' => 'struktur/karakter/pasia.png',
                    ],
                    [
                        'nama' => 'Balqis Azzahra',
                        'jabatan' => 'Staf Pengembangan Karakter',
                        'foto' => 'struktur/karakter/balqis.png',
                    ],
                    [
                        'nama' => 'Dennisya Putri R',
                        'jabatan' => 'Staf Pengembangan Karakter',
                        'foto' => 'struktur/karakter/putri.png',
                    ],
                    [
                        'nama' => 'Fikri Akbar',
                        'jabatan' => 'Staf Pengembangan Karakter',
                        'foto' => 'struktur/karakter/akbar.png',
                    ],
                    [
                        'nama' => 'Malviansyah Zulfikar',
                        'jabatan' => 'Staf Pengembangan Karakter',
                        'foto' => 'struktur/karakter/malvin.png',
                    ],
                ],
            ],
        ],
        'proker' => [
            [
                'nama' => 'Pengajian 3 Bulan Sekali',
                'pj' => 'Malviansyah Zulfikar',
                'deskripsi' => 'Kegiatan rutin untuk memperkuat nilai spiritual sekaligus menjadi ruang refleksi dan kebersamaan.',
            ],
            [
                'nama' => 'Bedah Buku',
                'pj' => 'M. Rangga Irawan',
                'deskripsi' => 'Kegiatan diskusi santai dan interaktif untuk menambah wawasan serta membangun budaya membaca.',
            ],
        ],
    ],
    [
        'id' => 'minat-bakat',
        'label' => 'Departemen',
        'nama' => 'Departemen Pengembangan Minat dan Bakat',
        'tagline' => 'Wadah minat, bakat, dan prestasi',
        'icon' => 'fa-trophy',
        'warna' => '#94812d',
        'foto' => '',
        'pemimpin' => [
            [
                'nama' => 'Nama Kepala Departemen',
                'jabatan' => 'Kepala Departemen Pengembangan Minat dan Bakat',
                'foto' => '',
                'deskripsi' => 'Departemen yang berfokus pada pengembangan potensi, kreativitas, dan kemampuan anggota sesuai minat masing-masing.',
                'peran' => [
                    'Mewadahi minat dan bakat mahasiswa',
                    'Menyelenggarakan kegiatan olahraga dan seni',
                    'Mengirim perwakilan ke ajang perlombaan',
                    'Mempererat kebersamaan anggota',
                ],
            ],
        ],
        'kelompok' => [
            [
                'label' => 'Tim',
                'judul' => 'Anggota Departemen',
                'deskripsi' => '',
                'peran' => [],
                'anggota' => [
                    [
                        'nama' => 'M Fadli',
                        'jabatan' => 'Staf Minat dan Bakat',
                        'foto' => 'struktur/minat-bakat/kamal.png',
                    ],
                    [
                        'nama' => 'M Lantang',
                        'jabatan' => 'Staf Minat dan Bakat',
                        'foto' => 'struktur/minat-bakat/lantang.png',
                    ],
                    [
                        'nama' => 'Azka Raadhiatam',
                        'jabatan' => 'Staf Minat dan Bakat',
                        'foto' => 'struktur/minat-bakat/azka.png',
                    ],
                    [
                        'nama' => 'Ade Lisnie Aeni AD',
                        'jabatan' => 'Staf Minat dan Bakat',
                        'foto' => 'struktur/minat-bakat/aeni.png',
                    ],
                    [
                        'nama' => 'Salsya Nurrul Fadla',
                        'jabatan' => 'Staf Minat dan Bakat',
                        'foto' => 'struktur/minat-bakat/salsya.png',
                    ],
                    [
                        'nama' => 'Zhavira Oktavia R',
                        'jabatan' => 'Staf Minat dan Bakat',
                        'foto' => 'struktur/minat-bakat/zhavira.png',
                    ],
                    [
                        'nama' => 'Farsyah Zalvin',
                        'jabatan' => 'Staf Minat dan Bakat',
                        'foto' => 'struktur/minat-bakat/zalvin.png',
                    ],
                    [
                        'nama' => 'Ibnu Mutaqin',
                        'jabatan' => 'Staf Minat dan Bakat',
                        'foto' => 'struktur/minat-bakat/ibnu.png',
                    ],
                    [
                        'nama' => 'M Teggar Ali Saddam B',
                        'jabatan' => 'Staf Minat dan Bakat',
                        'foto' => 'struktur/minat-bakat/tegar.png',
                    ],
                ],
            ],
        ],
        'proker' => [
            [
                'nama' => 'Badminton',
                'pj' => 'Farsyah Zalfin Sulaeman',
                'deskripsi' => 'Badminton merupakan olahraga yang mudah diakses oleh mahasiswa, dapat dimainkan oleh berbagai kalangan, serta melatih sportivitas, konsentrasi, dan ketahanan fisik.',
            ],
            [
                'nama' => 'Berenang',
                'pj' => 'M. Lantang Asyari',
                'deskripsi' => 'Berenang merupakan olahraga yang menggerakkan seluruh tubuh di dalam air sehingga mampu meningkatkan kebugaran, melatih pernapasan, sekaligus menjadi sarana relaksasi untuk melepas penat dan stres.',
            ],
        ],
    ],
    [
        'id' => 'medkraf',
        'label' => 'Departemen',
        'nama' => 'Departemen Media dan Kreatif',
        'tagline' => 'Media, informasi, dan desain',
        'icon' => 'fa-camera-retro',
        'warna' => '#4A173C',
        'foto' => '',
        'pemimpin' => [
            [
                'nama' => 'Nama Kepala Departemen',
                'jabatan' => 'Kepala Departemen Media dan Kreatif',
                'foto' => '',
                'deskripsi' => 'Mengembangkan media publikasi, dokumentasi, dan identitas digital HIMASIF untuk menyampaikan informasi secara efektif serta memperkuat identitas organisasi di lingkungan mahasiswa Sistem Informasi.',
                'peran' => [
                    'Mengelola media sosial HIMASIF',
                    'Membuat desain dan konten publikasi',
                    'Mendokumentasikan setiap kegiatan',
                    'Menyebarkan informasi kepada mahasiswa',
                ],
            ],
        ],
        'kelompok' => [
            [
                'label' => 'Tim',
                'judul' => 'Anggota Departemen',
                'deskripsi' => '',
                'peran' => [],
                'anggota' => [
                    [
                        'nama' => 'Bima Mahardika',
                        'jabatan' => 'Staf Media dan Kreatif',
                        'foto' => 'struktur/medkraf/bima.png',
                    ],
                    [
                        'nama' => 'Marlan Harjadisastra',
                        'jabatan' => 'Staf Media dan Kreatif',
                        'foto' => 'struktur/medkraf/marlan.png',
                    ],
                    [
                        'nama' => 'Salsa Bella',
                        'jabatan' => 'Staf Media dan Kreatif',
                        'foto' => 'struktur/medkraf/salsa.png',
                    ],
                    [
                        'nama' => 'Alika Khairana',
                        'jabatan' => 'Staf Media dan Kreatif',
                        'foto' => 'struktur/medkraf/alika.png',
                    ],
                    [
                        'nama' => 'Marsa Amelia',
                        'jabatan' => 'Staf Media dan Kreatif',
                        'foto' => 'struktur/medkraf/marsya.png',
                    ],
                    [
                        'nama' => 'Siti Hapsoh',
                        'jabatan' => 'Staf Media dan Kreatif',
                        'foto' => 'struktur/medkraf/hapsoh.png',
                    ],
                    [
                        'nama' => 'Ananda Tri',
                        'jabatan' => 'Staf Media dan Kreatif',
                        'foto' => 'struktur/medkraf/tri.png',
                    ],
                ],
            ],
        ],
        'proker' => [
            [
                'nama' => 'Merchandise & Identitas HIMASIF',
                'pj' => 'Bima Mahardika',
                'deskripsi' => 'Program pengembangan atribut dan identitas fisik organisasi sebagai bentuk representasi resmi HIMASIF.',
            ],
            [
                'nama' => 'Aktivasi Media Sosial HIMASIF',
                'pj' => 'Marlan Harjadisastra',
                'deskripsi' => 'Program publikasi konten informatif, edukatif, dan inspiratif secara berkala melalui media sosial resmi HIMASIF.',
            ],
        ],
    ],
];
/*
| Periode sebelumnya (CONTOH). Dibuat otomatis agar tombol "Pilih Angkatan"
| bisa dipakai. Ganti dengan array data asli (seperti di atas) bila sudah ada.
*/
$orang = static fn (string $jabatan): array => [
    'nama' => 'Nama Pengurus',
    'jabatan' => $jabatan,
    'foto' => '',
];

$dept = static fn (string $tahun, string $id, string $nama, string $tagline, string $icon, string $warna): array => [
    'id' => $id,
    'label' => 'Departemen',
    'nama' => $nama,
    'tagline' => $tagline,
    'icon' => $icon,
    'warna' => $warna,
    'foto' => '',
    'pemimpin' => [
        [
            ...$orang('Kepala '.$nama),
            'deskripsi' => "Deskripsi {$nama} pada periode {$tahun}. (Isi dengan data asli.)",
            'peran' => [],
        ],
    ],
    'kelompok' => [
        [
            'label' => 'Tim',
            'judul' => 'Anggota Departemen',
            'deskripsi' => '',
            'peran' => [],
            'anggota' => [$orang('Staf'), $orang('Staf')],
        ],
    ],
    'proker' => [],
];

$contoh = static fn (string $tahun): array => [
    [
        'id' => 'bph',
        'label' => 'BPH',
        'nama' => 'Badan Pengurus Harian',
        'tagline' => 'Kepengurusan '.$tahun,
        'icon' => 'fa-crown',
        'warna' => '#D6C26A',
        'foto' => '',
        'pemimpin' => [
            [
                ...$orang('Ketua Himpunan'),
                'deskripsi' => "Ketua Himpunan periode {$tahun}. (Isi dengan data asli.)",
                'peran' => [],
            ],
            [
                ...$orang('Wakil Ketua Himpunan'),
                'deskripsi' => "Wakil Ketua Himpunan periode {$tahun}. (Isi dengan data asli.)",
                'peran' => [],
            ],
        ],
        'kelompok' => [
            [
                'label' => 'Administrasi',
                'judul' => 'Sekretaris',
                'deskripsi' => '',
                'peran' => [],
                'anggota' => [$orang('Sekretaris Umum'), $orang('Wakil Sekretaris')],
            ],
            [
                'label' => 'Keuangan',
                'judul' => 'Bendahara',
                'deskripsi' => '',
                'peran' => [],
                'anggota' => [$orang('Bendahara Umum'), $orang('Wakil Bendahara')],
            ],
        ],
        'proker' => [],
    ],
    $dept($tahun, 'akaristek', 'Departemen Akaristek', 'Akademik, riset, dan teknologi', 'fa-flask', '#5358DD'),
    $dept($tahun, 'karakter', 'Departemen Pengembangan Karakter', 'Kaderisasi dan pembentukan karakter', 'fa-seedling', '#1F7F78'),
    $dept($tahun, 'minat-bakat', 'Departemen Pengembangan Minat dan Bakat', 'Wadah minat, bakat, dan prestasi', 'fa-trophy', '#94812d'),
    $dept($tahun, 'medkraf', 'Departemen Media dan Kreatif', 'Media, informasi, dan desain', 'fa-camera-retro', '#4A173C'),
];

/*
| Daftar semua periode. Urutan: terbaru paling atas (indeks 0 = default).
*/
return [

    'periode' => [
        ['id' => '2025-2026', 'label' => '2025/2026', 'unit' => $periode20252026],
        ['id' => '2024-2025', 'label' => '2024/2025', 'unit' => $contoh('2024/2025')],
        ['id' => '2023-2024', 'label' => '2023/2024', 'unit' => $contoh('2023/2024')],
    ],

];
