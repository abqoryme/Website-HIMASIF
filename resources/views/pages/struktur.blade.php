<x-layouts.app
    title="Struktur Kepengurusan ー Himpunan Mahasiswa Sistem Informasi UIKA"
    description="Struktur kepengurusan HIMASIF: Badan Pengurus Harian dan departemen."
>
    {{-- CSS + JS halaman ini (resources/js/struktur.js) dimuat lewat @stack('head') di layout. --}}
    @push('head')
        @vite('resources/js/struktur.js')
    @endpush

    <div class="tk-page">

        {{-- ===== HERO + CAROUSEL UNIT =====
             Isi kartu, detail, dan daftar angkatan dirender oleh JS dari config/struktur.php. --}}
        <section class="tk-hero tk-so-hero">
            <div class="tk-glow" style="top:160px; left:8%;"></div>
            <div class="tk-glow tk-glow--gold" style="top:45%; right:6%;"></div>

            <div class="tk-container tk-center">
                <span class="tk-eyebrow tk-eyebrow--center" data-aos="fade-down" data-aos-duration="800">Struktur Kepengurusan</span>
                <h1 class="tk-title" data-tk-words>Di Balik <span class="tk-text-gold">HIMASIF</span></h1>
                <p class="tk-desc" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                    Jelajahi Badan Pengurus Harian dan setiap departemen HIMASIF untuk mengenal pengurus,
                    peran, serta program kerja yang dijalankan.
                </p>
            </div>

            <div class="tk-so-carousel" data-aos="fade-up" data-aos-delay="300" data-aos-duration="900">
                <div class="tk-so-stage" role="listbox" aria-label="Pilih unit kepengurusan"></div>
            </div>

            <div class="tk-so-nav">
                <button class="tk-slider-btn tk-so-prev" type="button" aria-label="Unit sebelumnya"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="tk-so-dots" role="tablist" aria-label="Unit kepengurusan"></div>
                <button class="tk-slider-btn tk-so-next" type="button" aria-label="Unit berikutnya"><i class="fa-solid fa-chevron-right"></i></button>
            </div>

            {{-- Pilih Angkatan / Periode (diisi JS) --}}
            <div class="tk-so-period" hidden data-aos="fade-up" data-aos-delay="400">
                <button type="button" class="tk-so-period__btn" aria-haspopup="listbox" aria-expanded="false">
                    <i class="fa-solid fa-users-rectangle" aria-hidden="true"></i>
                    <span>Pilih Angkatan:</span> <b class="tk-so-period__value">-</b>
                    <i class="fa-solid fa-chevron-down tk-so-period__caret" aria-hidden="true"></i>
                </button>
                <ul class="tk-so-period__menu" role="listbox" aria-label="Pilih angkatan kepengurusan"></ul>
            </div>
        </section>

        {{-- ===== DETAIL UNIT (diisi otomatis oleh JS) ===== --}}
        <section class="tk-section" id="kenali">
            <div class="tk-glow" style="top:200px; right:8%;"></div>
            <div class="tk-glow tk-glow--blue" style="top:60%; left:4%;"></div>

            <div class="tk-container">
                <div class="tk-section-head tk-center" data-aos="fade-up" data-aos-duration="800">
                    <span class="tk-eyebrow tk-eyebrow--center">Kenali Lebih Dalam</span>
                    <h2 class="tk-title">Tentang <span class="tk-text-gold tk-so-title">Badan Pengurus Harian</span></h2>
                    <span class="tk-so-periode-chip"><i class="fa-solid fa-calendar" aria-hidden="true"></i> <span class="tk-so-periode">Periode</span></span>
                </div>

                <div class="tk-so-detail" aria-live="polite"></div>
                <noscript><p class="tk-desc tk-center">Aktifkan JavaScript untuk melihat struktur kepengurusan.</p></noscript>
            </div>
        </section>

    </div>

    {{-- Data untuk resources/js/modules/struktur.js. Js::from() meng-escape JSON dengan aman untuk <script>. --}}
    <script>
        window.HIMASIF_STRUKTUR_PERIODE = {{ \Illuminate\Support\Js::from($periode) }};
    </script>
</x-layouts.app>
