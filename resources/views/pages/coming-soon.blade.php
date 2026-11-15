<x-layouts.app :title="$pageTitle.' ー '.config('site.name')">
    <section class="margin-x-section" style="min-height: 70vh; display: grid; place-items: center; text-align: center; padding: 160px 24px 80px;">
        <div>
            <h1 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">{{ $pageTitle }}</h1>
            <p style="margin-bottom: 24px; opacity: .8;">Halaman ini sedang dalam proses migrasi.</p>
            <a href="{{ route('home') }}" class="hero-btn-left btnleft"><span>Kembali ke Beranda</span></a>
        </div>
    </section>
</x-layouts.app>
