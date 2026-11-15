<section id="kenali-section" class="kenali-section margin-x-section">
    <div class="kenali-glow"></div>

    <div class="section-container kenali-container">
        <div class="video-card-wrapper" data-aos="fade-right" data-aos-duration="800">
            <button type="button" id="open-video" class="video-link-group" data-video-url="{{ config('site.video_url') }}" aria-label="Putar video profil HIMASIF">
                <div class="video-footage-bg glow-desc-div">
                    <img src="{{ img_asset('hero_card/Kenali.jpg') }}" alt="Footage CP" class="video-bg-image" loading="lazy">
                </div>
            </button>
        </div>

        <div class="exploration-container" data-aos="fade-left" data-aos-duration="800">
            <div class="title-wrapper">
                <h2>Kenali</h2>
                <h1>Eksplorasi Lebih Dalam Tentang HIMASIF</h1>
            </div>

            {{-- Slider digerakkan oleh resources/js/modules/kenali-slider.js.
                 Untuk menambah slide, duplikasi satu <div class="kenali-slide"> di dalam track. --}}
            <div class="kenali-slider">
                <div class="kenali-slider-navigation">
                    <button type="button" id="kenali-prev" class="kenali-slider-button" aria-label="Tampilkan card Kenali sebelumnya">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>

                    <div class="kenali-slider-counter" aria-live="polite">
                        <span id="kenali-current-slide">01</span>
                        <span class="kenali-counter-divider">/</span>
                        <span id="kenali-total-slide">01</span>
                    </div>

                    <button type="button" id="kenali-next" class="kenali-slider-button" aria-label="Tampilkan card Kenali berikutnya">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>

                <div class="kenali-slider-viewport" tabindex="0">
                    <div id="kenali-slider-track" class="kenali-slider-track">
                        <div class="kenali-slide">
                            <div class="exploration-grid">
                                <a href="{{ route('pages.visi-misi') }}" class="card-visi-misi">
                                    <div class="visi-misi-title-wrapper">
                                        <h3 class="title-text-shadow">Visi &amp; Misi</h3>
                                        <p>Mengarahkan langkah HIMASIF ke masa depan yang lebih terstruktur dan berdampak.</p>
                                    </div>
                                    <img src="{{ img_asset('hero_card/target.png') }}" alt="Ilustrasi target Visi dan Misi" loading="lazy">
                                    <x-icon.arrow-up-right class="arrow-icon-top" />
                                </a>

                                <a href="{{ route('pages.struktur') }}" class="kenali-card card-struktur-pengurus">
                                    <div class="kenali-card-title-wrapper">
                                        <h3 class="title-text-shadow">Struktur Pengurus</h3>
                                        <p class="kenali-card-deskripsi-strukorg">Kenali susunan kepengurusan yang menjalankan roda organisasi HIMASIF.</p>
                                    </div>
                                    <img class="kenali-card-asset asset-bottom-right asset-bottom-strukorg" src="{{ img_asset('hero_card/strukorg-asset.png') }}" alt="Ilustrasi Struktur Pengurus" loading="lazy">
                                    <x-icon.arrow-up-right class="kenali-card-arrow" />
                                </a>

                                <a href="{{ route('pages.logo') }}" class="card-logo">
                                    <div class="logo-title-wrapper">
                                        <h3 class="title-text-shadow">Filosofi Logo</h3>
                                        <p>Makna di balik setiap elemen logo sebagai identitas dan nilai HIMASIF.</p>
                                    </div>
                                    <img src="{{ img_asset('hero_card/logoabout.png') }}" alt="Ilustrasi Filosofi Logo" loading="lazy">
                                    <x-icon.arrow-up-right class="arrow-icon-top-3" />
                                </a>

                                <a href="{{ route('pages.sejarah') }}" class="card-sejarah">
                                    <div class="sejarah-title-wrapper">
                                        <h3 class="title-text-shadow">Sejarah HIMASIF</h3>
                                        <p>Perjalanan HIMASIF dari awal berdiri hingga menjadi organisasi saat ini.</p>
                                    </div>
                                    <img src="{{ img_asset('hero_card/sejarah.png') }}" alt="Logo HIMASIF" loading="lazy">
                                    <x-icon.arrow-up-right class="arrow-icon-top-4" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
