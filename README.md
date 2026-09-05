<div align="center">

# 🎓 HIMASIF Website

**Himpunan Sistem Informasi (HIMASIF)**

Website resmi HIMASIF — dibangun dengan Laravel Blade, Vite, dan Tailwind CSS.

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=flat&logo=vite&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=flat&logo=tailwind-css&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)
![License](https://img.shields.io/badge/license-MIT-blue.svg)

</div>

---

## 📖 Tentang Project

Project ini dibangun menggunakan **Laravel Blade**, **Vite**, **Tailwind CSS**, **Vanilla JavaScript**, dan **Lucide Icons**.

> Fokus pengembangan saat ini adalah **frontend/tampilan**. Fitur backend seperti *authentication*, *database*, *controller*, *API*, dan *business logic* akan diimplementasikan oleh tim/role backend.

---

## 📑 Daftar Isi

- [Tech Stack](#-tech-stack)
- [Struktur Project](#-struktur-project)
- [Instalasi](#-instalasi)
- [Konfigurasi Environment](#️-konfigurasi-environment)
- [Menjalankan Project](#-menjalankan-project)
- [Development Workflow](#️-development-workflow)
- [Frontend Architecture](#-frontend-architecture)
- [Routing](#-routing)
- [Design System](#-design-system)
- [Assets & Images](#️-assets--images)
- [Responsive Design](#-responsive-design)
- [Navbar](#-navbar)
- [JavaScript](#-javascript)
- [Aturan Component](#-aturan-component)
- [Backend Integration](#-backend-integration)
- [Production Build](#-production-build)
- [Testing Frontend](#-testing-frontend)
- [Git Workflow](#-git-workflow)
- [Troubleshooting](#-troubleshooting)
- [Contribution](#-contribution)
- [Security](#-security)
- [Pembagian Role](#-pembagian-role)
- [Status Project](#-status-project)
- [Lisensi](#-lisensi)

---

## 📌 Tech Stack

| Teknologi | Keterangan |
|---|---|
| **Laravel** | Framework utama dan Blade templating |
| **Blade** | Template engine untuk halaman frontend |
| **Vite** | Asset bundler dan development server |
| **Tailwind CSS** | Utility-first CSS framework |
| **Vanilla JavaScript** | Interaksi frontend |
| **Lucide Icons** | Icon library |
| **Git & GitHub** | Version control dan kolaborasi |

---

## 📂 Struktur Project

Struktur utama frontend:

```text
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php
│   │
│   ├── partials/
│   │   ├── navbar.blade.php
│   │   └── footer.blade.php
│   │
│   ├── components/
│   │   ├── hero.blade.php
│   │   ├── about.blade.php
│   │   ├── program.blade.php
│   │   └── news.blade.php
│   │
│   ├── home.blade.php
│   ├── about.blade.php
│   ├── program.blade.php
│   ├── news.blade.php
│   ├── gallery.blade.php
│   ├── document.blade.php
│   └── contact.blade.php
│
├── css/
│   └── app.css
│
└── js/
    ├── app.js
    └── navbar.js

routes/
└── web.php

public/
└── assets/

tailwind.config.js
vite.config.js
postcss.config.js
package.json
package-lock.json
```

> ℹ️ Struktur dapat berkembang sesuai kebutuhan project. Jika menambahkan component baru, usahakan tetap mengikuti struktur yang sudah ada agar project mudah dipelihara.

---

## 🚀 Instalasi

### 1. Requirements

Sebelum menjalankan project, pastikan perangkat sudah memiliki:

- PHP sesuai requirement versi Laravel yang digunakan
- Composer
- Node.js
- npm
- Git

Cek instalasi:

```bash
php -v
composer -V
node -v
npm -v
git --version
```

Jika salah satu command belum tersedia, install terlebih dahulu sesuai sistem operasi yang digunakan.

### 2. Clone Repository

Fork repository terlebih dahulu jika ingin melakukan pengembangan melalui repository pribadi, lalu clone:

```bash
git clone https://github.com/USERNAME/REPOSITORY.git
```

Masuk ke folder project:

```bash
cd Website-HIMASIF
```

### 3. Install Dependency PHP

```bash
composer install
```

Command ini akan menginstall dependency Laravel yang terdapat pada `composer.json`.

### 4. Install Dependency Frontend

```bash
npm install
```

Command ini akan menginstall seluruh dependency yang terdapat pada `package.json`.

---

## ⚙️ Konfigurasi Environment

Copy file `.env.example` menjadi `.env`.

**Linux/macOS:**

```bash
cp .env.example .env
```

**Windows:**

```bash
copy .env.example .env
```

Kemudian generate application key:

```bash
php artisan key:generate
```

> ℹ️ Untuk frontend development, konfigurasi database mungkin belum diperlukan selama fitur yang digunakan tidak membutuhkan backend/database.

⚠️ **Jangan commit file `.env` ke repository.**

---

## 💻 Menjalankan Project

Project membutuhkan **Laravel development server** dan **Vite development server** berjalan bersamaan.

**Terminal 1 — Laravel**

```bash
php artisan serve
```

Biasanya aplikasi dapat diakses melalui: `http://127.0.0.1:8000`

**Terminal 2 — Vite**

```bash
npm run dev
```

Vite akan menangani proses development asset seperti:

- CSS
- JavaScript
- Hot Module Replacement (HMR)

Selama proses development, biarkan Vite tetap berjalan.

---

## 🛠️ Development Workflow

Setiap kali mulai mengerjakan project:

```bash
git pull
npm install
npm run dev
```

Jika dependency PHP berubah:

```bash
composer install
```

Jika ada perubahan pada package frontend:

```bash
npm install
```

Kemudian jalankan Laravel:

```bash
php artisan serve
```

---

## 🎨 Frontend Architecture

Frontend menggunakan pendekatan **Blade Component + Partial**.

### Layout

File: `resources/views/layouts/app.blade.php`

Digunakan sebagai layout utama website. Contoh struktur:

```blade
@include('partials.navbar')

<main>
    @yield('content')
</main>

@include('partials.footer')
```

Halaman lain dapat menggunakan layout tersebut:

```blade
@extends('layouts.app')

@section('content')
    {{-- Content halaman --}}
@endsection
```

### Partials

Partial digunakan untuk bagian website yang digunakan berulang kali, contoh:

- `resources/views/partials/navbar.blade.php`
- `resources/views/partials/footer.blade.php`

Navbar dan footer tidak perlu dibuat ulang di setiap halaman.

### Components

Component digunakan untuk bagian UI yang reusable, contoh:

- `resources/views/components/hero.blade.php`
- `resources/views/components/about.blade.php`
- `resources/views/components/program.blade.php`
- `resources/views/components/news.blade.php`

**Component harus sebisa mungkin tidak bergantung pada database atau backend.** Data yang nantinya berasal dari backend dapat disiapkan menggunakan variable/props.

Contoh:

```blade
<x-news :news="$news" />
```

Dengan begitu component frontend tetap dapat digunakan ketika backend sudah selesai dibuat.

---

## 🧭 Routing

Routing frontend berada di `routes/web.php`. Contoh:

```php
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/document', function () {
    return view('document');
});

Route::get('/contact', function () {
    return view('contact');
});
```

> ℹ️ Routing di atas hanya untuk kebutuhan frontend sementara. Ketika backend mulai dikerjakan, route dapat dipindahkan atau diubah agar menggunakan Controller.

---

## 🎨 Design System

Project menggunakan design token berikut:

| Token | Value | Penggunaan |
|---|---|---|
| Primary | `#2563EB` | Warna utama |
| Secondary | `#1D4ED8` | Hover/dark primary |
| Dark | `#0F172A` | Heading/dark section |
| Background | `#F8FAFC` | Background utama |
| Text | `#1E293B` | Text utama |
| Border | `#E2E8F0` | Border/divider |

Gunakan token yang sudah ditentukan agar tampilan antar halaman tetap konsisten. Hindari menggunakan warna baru secara sembarangan jika tidak diperlukan.

---

## 🖼️ Assets & Images

Saat ini gambar pada frontend menggunakan placeholder dari [placehold.co](https://placehold.co/).

⚠️ **Placeholder WAJIB diganti dengan aset asli sebelum website masuk production.**

Aset frontend dapat diletakkan pada `public/assets/`, contoh:

```text
public/
└── assets/
    ├── images/
    │   ├── logo.png
    │   ├── hero.jpg
    │   └── news/
    │
    └── icons/
```

Kemudian digunakan pada Blade:

```blade
<img
    src="{{ asset('assets/images/logo.png') }}"
    alt="Logo HIMASIF"
>
```

Gunakan `alt` yang sesuai untuk gambar.

---

## 📱 Responsive Design

Semua halaman harus mendukung minimal:

- 📱 Mobile
- 📟 Tablet
- 🖥️ Desktop

Tailwind breakpoint dapat digunakan untuk membuat responsive layout. Contoh:

```blade
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    ...
</div>
```

Pastikan setiap halaman diuji pada ukuran layar yang berbeda.

---

## 🧭 Navbar

- Markup: `resources/views/partials/navbar.blade.php`
- Interaksi: `resources/js/navbar.js`

**Fitur navbar:**

- Sticky navbar
- Shadow ketika scrolling
- Dropdown menu
- Hamburger menu
- Mobile navigation
- Responsive behavior

Jika melakukan perubahan pada navbar, pastikan tampilan desktop dan mobile tetap berfungsi.

---

## ⚡ JavaScript

- JavaScript utama: `resources/js/app.js`
- JavaScript khusus navbar: `resources/js/navbar.js`

Gunakan Vanilla JavaScript untuk interaksi sederhana. Hindari menambahkan library JavaScript tambahan jika belum diperlukan.

---

## 🧩 Aturan Component

Ketika membuat component baru:

1. Gunakan nama yang jelas.
2. Hindari duplikasi kode.
3. Buat component reusable.
4. Jangan menambahkan logic backend ke component frontend.
5. Gunakan Tailwind untuk styling.
6. Pastikan responsive.
7. Gunakan semantic HTML jika memungkinkan.
8. Pastikan accessibility dasar seperti `alt`, `aria-label`, dan keyboard interaction diperhatikan.

Contoh:

```text
components/
├── hero.blade.php
├── section-title.blade.php
├── news-card.blade.php
└── program-card.blade.php
```

---

## 🔌 Backend Integration

Frontend repository ini **belum bertanggung jawab terhadap backend**.

Backend nantinya dapat mengintegrasikan:

- Authentication
- Database
- Controller
- Model
- API
- CRUD
- Admin dashboard
- Dynamic content

Contoh data yang nantinya dapat diberikan backend:

```php
return view('news', [
    'news' => $news
]);
```

Frontend kemudian menampilkan:

```blade
@foreach ($news as $item)
    <x-news-card :news="$item" />
@endforeach
```

Dengan pendekatan ini, struktur UI tidak perlu dirombak ketika data mulai berasal dari database.

---

## 📦 Production Build

Sebelum deployment, jalankan:

```bash
npm run build
```

Command tersebut akan membuat asset production pada `public/build/`. Setelah build berhasil, pastikan file berikut tersedia:

```text
public/build/
├── assets/
└── manifest.json
```

⚠️ **Jangan menghapus `public/build`** jika environment production membutuhkan asset hasil build.

---

## 🧪 Testing Frontend

Sebelum melakukan commit, periksa:

**UI**

- [ ] Homepage tampil dengan benar
- [ ] Navbar berfungsi
- [ ] Dropdown berfungsi
- [ ] Mobile menu berfungsi
- [ ] Footer tampil
- [ ] Semua halaman dapat dibuka
- [ ] Tidak ada layout yang rusak
- [ ] Responsive mobile
- [ ] Responsive tablet
- [ ] Responsive desktop

**Assets**

- [ ] Tidak ada placeholder yang tertinggal
- [ ] Semua gambar memiliki `alt`
- [ ] Tidak ada broken image
- [ ] Icon tampil dengan benar

**Code**

- [ ] Tidak ada error di browser console
- [ ] Tidak ada error Blade
- [ ] Tidak ada duplicate component
- [ ] Tidak ada kode yang tidak digunakan
- [ ] `npm run build` berhasil

---

## 🌿 Git Workflow

Gunakan branch sesuai jenis pekerjaan. Contoh:

```text
main
├── develop
├── feature/navbar
├── feature/homepage
├── feature/news
├── feature/gallery
└── fix/responsive-navbar
```

### Membuat Branch

```bash
git checkout -b feature/homepage
```

### Commit

Gunakan commit message yang jelas dengan prefix berikut:

| Prefix | Keterangan |
|---|---|
| `feat:` | Fitur baru |
| `fix:` | Memperbaiki bug |
| `style:` | Perubahan tampilan |
| `refactor:` | Perubahan struktur kode |
| `docs:` | Dokumentasi |
| `chore:` | Konfigurasi/dependency |

Contoh:

```bash
git add .
git commit -m "feat: add news section"
git commit -m "fix: fix mobile navbar"
git commit -m "style: update homepage spacing"
git commit -m "refactor: improve reusable components"
git commit -m "docs: update frontend README"
```

### Push ke Repository

```bash
git push origin feature/homepage
```

Kemudian buat Pull Request ke branch development yang digunakan oleh tim.

Sebelum membuat Pull Request:

```bash
npm run build
```

Pastikan tidak terdapat error.

### Sinkronisasi dengan Repository

Sebelum mulai mengerjakan fitur baru:

```bash
git checkout develop
git pull origin develop
git checkout -b feature/nama-fitur
```

⚠️ Hindari langsung mengerjakan perubahan pada branch `main`.

---

## 🚨 Troubleshooting

<details>
<summary><b>"npm" tidak ditemukan</b></summary>

Pastikan Node.js dan npm sudah terinstall:

```bash
node -v
npm -v
```

Jika command tidak ditemukan, install Node.js terlebih dahulu.
</details>

<details>
<summary><b>Dependency tidak ditemukan</b></summary>

Coba hapus dependency kemudian install ulang.

**Linux/macOS:**

```bash
rm -rf node_modules
npm install
```

**Windows:**

```bash
rmdir /s /q node_modules
npm install
```
</details>

<details>
<summary><b>Vite tidak berjalan</b></summary>

Pastikan:

```bash
npm install
npm run dev
```

Jika masih bermasalah, periksa `package.json` dan `vite.config.js`.
</details>

<details>
<summary><b>Manifest Vite tidak ditemukan</b></summary>

Jika muncul error seperti `Vite manifest not found`, jalankan:

```bash
npm run build
```

Pastikan file `public/build/manifest.json` tersedia. Untuk development, pastikan Vite berjalan dengan `npm run dev`.
</details>

<details>
<summary><b>Laravel tidak dapat dijalankan</b></summary>

Pastikan dependency PHP sudah terinstall:

```bash
composer install
php artisan key:generate
php artisan serve
```
</details>

---

## 🤝 Contribution

Kontribusi dari anggota tim sangat diperbolehkan.

**Workflow yang digunakan:**

```text
Pull latest code
      ↓
Create feature branch
      ↓
Develop
      ↓
Test
      ↓
npm run build
      ↓
Commit
      ↓
Push
      ↓
Pull Request
      ↓
Code Review
      ↓
Merge
```

Sebelum melakukan Pull Request, pastikan perubahan:

- Tidak merusak halaman lain.
- Mengikuti design system.
- Responsive.
- Tidak menambahkan dependency yang tidak diperlukan.
- Tidak memasukkan file `.env`.
- Tidak memasukkan credential atau API key.
- Sudah diuji secara lokal.

---

## 🔐 Security

Jangan pernah commit informasi sensitif seperti:

- `.env`
- API key
- Database password
- Access token
- Private key
- Credential

Pastikan file `.env` tetap masuk dalam `.gitignore`.

---

## 👥 Pembagian Role

Repository ini difokuskan pada **Frontend**.

### 🎨 Frontend

Bertanggung jawab terhadap:

- UI/UX implementation
- Blade
- Tailwind CSS
- Responsive design
- JavaScript frontend
- Components
- Navbar
- Footer
- Asset integration

### ⚙️ Backend

Bertanggung jawab terhadap:

- Database
- Model
- Migration
- Controller
- Authentication
- Authorization
- API
- CRUD
- Business logic

### 🔗 Integration

Ketika backend sudah tersedia, frontend dan backend dapat diintegrasikan melalui:

```text
Blade → Controller → Model → Database
```

Frontend component tetap dipertahankan reusable agar integrasi dapat dilakukan tanpa mengubah keseluruhan UI.

---

## 📋 Status Project

**Status:** 🚧 Frontend Development

### ✅ Sudah tersedia

- [x] Laravel Blade structure
- [x] Main layout
- [x] Navbar
- [x] Footer
- [x] Hero section
- [x] About section
- [x] Program section
- [x] News section
- [x] Gallery page
- [x] Document page
- [x] Contact page
- [x] Responsive navigation
- [x] Vite configuration
- [x] Tailwind CSS
- [x] Vanilla JavaScript

### ⏳ Belum tersedia / akan dikerjakan

- [ ] UI/UX
- [ ] Authentication
- [ ] Database
- [ ] Dynamic news
- [ ] Dynamic programs
- [ ] Dynamic gallery
- [ ] Document management
- [ ] Contact form processing
- [ ] Admin dashboard
- [ ] CRUD
- [ ] API/backend integration

---

## 📞 HIMASIF

Website ini dikembangkan untuk mendukung kebutuhan digital **Himpunan Sistem Informasi (HIMASIF)**.

> Repository ini merupakan bagian frontend/UI dan dapat dikembangkan lebih lanjut sesuai kebutuhan tim HIMASIF.

---

## 📄 Lisensi

Project ini menggunakan lisensi [MIT](https://github.com/abqoryme/License/blob/main/LICENSE).

<div align="center">

Made with 💙 by **HIMASIF**

</div>
