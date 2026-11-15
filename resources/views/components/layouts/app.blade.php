@props([
    'title' => config('site.name').' ー '.config('site.full_name'),
    'description' => config('site.description'),
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <link rel="icon" href="{{ img_asset('hero_logo/HIMASIF.webp') }}" type="image/webp">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- CSS/JS khusus halaman (mis. struktur). Diletakkan setelah app.css agar override menang. --}}
    @stack('head')
</head>
<body>
    {{-- Page loader: disembunyikan oleh resources/js/modules/loader.js --}}
    <div id="himasif-loader">
        <div class="loader-content">
            <div class="loader-logo">
                <div class="loader-ring"></div>
                <img src="{{ img_asset('hero_logo/HIMASIF.webp') }}" alt="Logo HIMASIF">
            </div>

            <h2>HIMASIF</h2>
            <p>HIMPUNAN MAHASISWA SISTEM INFORMASI</p>

            <div class="loader-progress"><span></span></div>

            <small>MEMUAT WEBSITE</small>
        </div>
    </div>

    <div class="page-wrapper">
        @include('partials.header')

        <main class="main-section">
            {{ $slot }}
        </main>

        <button type="button" class="button-back-to-top back-to-top" id="backToTop" aria-label="Kembali ke atas">
            <x-icon.arrow-up class="svg-back-to-top" />
        </button>

        @include('partials.footer')
    </div>
</body>
</html>
