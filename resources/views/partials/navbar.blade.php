<header id="site-navbar" class="fixed inset-x-0 top-0 z-50 bg-dark transition-all duration-300">
    <div class="container-himasif flex h-20 items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center gap-3">
            <img src="https://placehold.co/48x48/2563EB/FFFFFF?text=HS" alt="Logo HIMASIF" class="h-11 w-11 rounded-xl">
            <span class="flex flex-col leading-none">
                <span class="text-lg font-extrabold tracking-wide text-white">HIMASIF</span>
                <span class="text-[10px] uppercase tracking-[0.18em] text-white/50">Himpunan Sistem Informasi</span>
            </span>
        </a>

    <nav class="hidden items-center gap-8 lg:flex">
    <a href="{{ url('/') }}" class="nav-link !text-white/90 {{ request()->is('/') ? 'is-active' : '' }}">Beranda</a>

    <div class="group relative">
        <button type="button" data-dropdown-trigger class="nav-link flex items-center gap-1 !text-white/90 {{ request()->is('about*') ? 'is-active' : '' }}">
            Tentang Kami
            <i data-lucide="chevron-down" class="h-4 w-4 transition-transform duration-200 group-hover:rotate-180"></i>
        </button>
        <div class="invisible absolute left-0 top-full w-56 translate-y-2 rounded-xl border border-border bg-white p-2 opacity-0 shadow-soft-lg transition-all duration-200 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
            <a href="{{ url('/about') }}" class="block rounded-lg px-4 py-2.5 text-sm text-body hover:bg-surface hover:text-primary">Profil Organisasi</a>
            <a href="{{ url('/about') }}#visi-misi" class="block rounded-lg px-4 py-2.5 text-sm text-body hover:bg-surface hover:text-primary">Visi &amp; Misi</a>
        </div>
    </div>

    <div class="group relative">
        <button type="button" data-dropdown-trigger class="nav-link flex items-center gap-1 !text-white/90">
            Struktur Kepengurusan
            <i data-lucide="chevron-down" class="h-4 w-4 transition-transform duration-200 group-hover:rotate-180"></i>
        </button>
        <div class="invisible absolute left-0 top-full w-64 translate-y-2 rounded-xl border border-border bg-white p-2 opacity-0 shadow-soft-lg transition-all duration-200 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
            {{-- TODO: ganti href placeholder ini setelah halaman/data Struktur Kepengurusan tersedia (fase CRUD admin) --}}
            <a href="#" class="block rounded-lg px-4 py-2.5 text-sm text-body hover:bg-surface hover:text-primary">Struktur 1</a>
            <a href="#" class="block rounded-lg px-4 py-2.5 text-sm text-body hover:bg-surface hover:text-primary">Struktur 2</a>
            <a href="#" class="block rounded-lg px-4 py-2.5 text-sm text-body hover:bg-surface hover:text-primary">Struktur 3</a>
            <a href="#" class="block rounded-lg px-4 py-2.5 text-sm text-body hover:bg-surface hover:text-primary">Struktur 4</a>
            <a href="#" class="block rounded-lg px-4 py-2.5 text-sm text-body hover:bg-surface hover:text-primary">Struktur 5</a>
            <a href="#" class="block rounded-lg px-4 py-2.5 text-sm text-body hover:bg-surface hover:text-primary">Struktur 6</a>
        </div>
    </div>

    <a href="{{ url('/program') }}" class="nav-link !text-white/90 {{ request()->is('program') ? 'is-active' : '' }}">Program</a>
    <a href="{{ url('/news') }}" class="nav-link !text-white/90 {{ request()->is('news') ? 'is-active' : '' }}">Berita</a>
    <a href="{{ url('/gallery') }}" class="nav-link !text-white/90 {{ request()->is('gallery') ? 'is-active' : '' }}">Galeri</a>
    <a href="{{ url('/contact') }}" class="nav-link !text-white/90 {{ request()->is('contact') ? 'is-active' : '' }}">Kontak</a>
</nav>

        <div class="hidden items-center gap-4 lg:flex">
            <button type="button" aria-label="Cari" class="flex h-9 w-9 items-center justify-center rounded-full text-white/80 transition-colors duration-200 hover:bg-white/10 hover:text-white">
                <i data-lucide="search" class="h-4 w-4"></i>
            </button>
            <a href="{{ url('/contact') }}" class="btn-primary">Gabung Sekarang</a>
        </div>

        <button id="mobile-menu-toggle" type="button" aria-label="Buka menu" aria-expanded="false" aria-controls="mobile-menu" class="flex h-10 w-10 items-center justify-center rounded-lg text-white/90 lg:hidden">
            <i data-lucide="menu" class="h-6 w-6"></i>
        </button>
    </div>

    <div id="mobile-menu" class="max-h-0 overflow-hidden border-t border-white/10 bg-dark transition-all duration-300 lg:hidden">
        <div class="container-himasif flex flex-col gap-1 py-4">
            <a href="{{ url('/') }}" class="rounded-lg px-3 py-3 text-sm font-medium text-white/90 hover:bg-white/5">Beranda</a>

            <button type="button" data-dropdown-trigger class="flex items-center justify-between rounded-lg px-3 py-3 text-left text-sm font-medium text-white/90 hover:bg-white/5">
                Tentang Kami
                <i data-lucide="chevron-down" class="h-4 w-4"></i>
            </button>
            <div class="hidden flex-col gap-1 pl-6">
                <a href="{{ url('/about') }}" class="rounded-lg px-3 py-2.5 text-sm text-white/70 hover:bg-white/5">Profil Organisasi</a>
                <a href="{{ url('/about') }}#visi-misi" class="rounded-lg px-3 py-2.5 text-sm text-white/70 hover:bg-white/5">Visi &amp; Misi</a>
            </div>

            <button type="button" data-dropdown-trigger class="flex items-center justify-between rounded-lg px-3 py-3 text-left text-sm font-medium text-white/90 hover:bg-white/5">
                Struktur Kepengurusan
                <i data-lucide="chevron-down" class="h-4 w-4"></i>
            </button>
            <div class="hidden flex-col gap-1 pl-6">
                <a href="#" class="rounded-lg px-3 py-2.5 text-sm text-white/70 hover:bg-white/5">Struktur 1</a>
                <a href="#" class="rounded-lg px-3 py-2.5 text-sm text-white/70 hover:bg-white/5">Struktur 2</a>
                <a href="#" class="rounded-lg px-3 py-2.5 text-sm text-white/70 hover:bg-white/5">Struktur 3</a>
                <a href="#" class="rounded-lg px-3 py-2.5 text-sm text-white/70 hover:bg-white/5">Struktur 4</a>
                <a href="#" class="rounded-lg px-3 py-2.5 text-sm text-white/70 hover:bg-white/5">Struktur 5</a>
                <a href="#" class="rounded-lg px-3 py-2.5 text-sm text-white/70 hover:bg-white/5">Struktur 6</a>
            </div>

            <a href="{{ url('/program') }}" class="rounded-lg px-3 py-3 text-sm font-medium text-white/90 hover:bg-white/5">Program</a>
            <a href="{{ url('/news') }}" class="rounded-lg px-3 py-3 text-sm font-medium text-white/90 hover:bg-white/5">Berita</a>
            <a href="{{ url('/gallery') }}" class="rounded-lg px-3 py-3 text-sm font-medium text-white/90 hover:bg-white/5">Galeri</a>
            <a href="{{ url('/contact') }}" class="rounded-lg px-3 py-3 text-sm font-medium text-white/90 hover:bg-white/5">Kontak</a>

            <a href="{{ url('/contact') }}" class="btn-primary mt-3 w-full">Gabung Sekarang</a>
        </div>
    </div>
</header>
<div class="h-20"></div>
