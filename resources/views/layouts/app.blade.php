<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HIMASIF - Himpunan Sistem Informasi')</title>
    <meta name="description" content="@yield('description', 'Wadah pengembangan potensi mahasiswa Sistem Informasi melalui kolaborasi, inovasi, dan aksi nyata untuk masa depan digital.')">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface text-body antialiased">
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide) {
                window.lucide.createIcons();
            }
        });
    </script>
</body>
</html>
