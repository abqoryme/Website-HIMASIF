# HIMASIF Website — Frontend

Frontend (UI only) untuk website Himpunan Sistem Informasi (HIMASIF), dibangun dengan Laravel Blade, Vite, dan Tailwind CSS. Backend (auth, database, controller, dsb.) belum diimplementasikan dan akan dikerjakan oleh role lain.

## Tech Stack

- Laravel (Blade templating)
- Vite
- Tailwind CSS
- Vanilla JavaScript
- Lucide Icons

## Struktur Project

```
resources/
├── views/
│   ├── layouts/app.blade.php
│   ├── partials/navbar.blade.php
│   ├── partials/footer.blade.php
│   ├── components/hero.blade.php
│   ├── components/about.blade.php
│   ├── components/program.blade.php
│   ├── components/news.blade.php
│   ├── home.blade.php
│   ├── about.blade.php
│   ├── program.blade.php
│   ├── news.blade.php
│   ├── gallery.blade.php
│   ├── document.blade.php
│   └── contact.blade.php
├── css/app.css
└── js/app.js, navbar.js

routes/web.php
tailwind.config.js
vite.config.js
postcss.config.js
package.json
```

## Instalasi

Kalau mau melanjutkan silahkan clone repository ini dulu dan jalankan git clone https://github.com/usergithub/nama_repo_yang_udah_diclone. Untuk yang belum ada git di PC atau laptopnya silahkan download dahulu di https://git-scm.com/install silahkan pilih sesuai OS yang dimiliki, atau download langsung zipnya dan exstrak projek ini di komputer.

Jalankan perintah ini saat mengembangkan projek:

```bash
npm install
npm run dev
```

Untuk build production:

```bash
npm run build
```

## Catatan

- Semua gambar menggunakan placeholder (`placehold.co`) dan wajib diganti dengan aset asli.
- Semua Blade component bersifat reusable dan tidak memiliki dependency terhadap backend.
- Desain menggunakan design token: primary `#2563EB`, secondary `#1D4ED8`, dark `#0F172A`, background `#F8FAFC`, text `#1E293B`, border `#E2E8F0`.
- Navbar sticky dengan shadow saat scroll, dropdown menu, dan hamburger menu mobile diatur pada `resources/js/navbar.js`.
