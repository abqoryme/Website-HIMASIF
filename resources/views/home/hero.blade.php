<section id="hero-section" class="hero-section margin-x-section" data-aos="fade-up">
    <div class="hero-glow floating-glow-2"></div>

    <div class="section-container">
        <div class="hero-content">
            <h1 class="hero-title">Selamat Datang <span class="block-title animated-text">Di <span></span></span></h1>
        </div>

        <div class="hero-desc-wrapper">
            <p class="hero-desc">Himpunan Mahasiswa Sistem Informasi UIKA (HIMASIF) merupakan wadah bagi mahasiswa agar dapat berkembang dan berprestasi.</p>
        </div>

        <div class="hero-cta-wrapper">
            <a href="#about-section" class="btnleft hero-btn-left">
                <span>Learn More</span>
                <x-icon.circle-arrow-down class="btn-icon-top" />
            </a>
            <a href="{{ route('pages.kontak') }}" class="hero-btn-right">
                <span>Hubungi Kami!</span>
            </a>
        </div>

        <div class="hero-image-container">
            <div class="hero-slider-wrapper">
                @foreach (config('site.hero_slides') as $slide)
    <img src="{{ img_asset($slide) }}" alt="Divisi HIMASIF {{ $loop->iteration }}">
                @endforeach
                {{-- Salinan slide pertama agar animasi slider (lihat animations.css) berputar mulus. --}}
                <img src="{{ img_asset(config('site.hero_slides.0')) }}" alt="" aria-hidden="true">
            </div>

            <div class="image-overlay-container">
                <div class="overlay-top">
                    <div class="hero-logo-container">
                        <div class="logo-bar-blur">
                            @foreach (config('site.hero_logos') as $logo)
    <img src="{{ img_asset($logo['file']) }}" alt="{{ $logo['alt'] }}">
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="overlay-bottom">
                    <div class="image-description-container">
                        <div class="image-description-title">
                            <span class="image-title-line"></span>
                            <h3 class="image-title">Sistem Informasi</h3>
                            <span class="image-title-line"></span>
                        </div>
                        <p class="image-description-subtitle">HIMASIF 2026</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="nilai-kabinet-container">
            <div class="nilai-kabinet-desktop">
                @foreach (config('site.nilai_kabinet.desktop') as $nilai)
                    <p class="{{ $nilai['class'] }}">
                        <x-icon.sparkle />
                        <span class="nilai-title-pc"> {{ $nilai['label'] }}</span>
                    </p>
                @endforeach
            </div>

            <div class="nilai-kabinet-mobile">
                @foreach (config('site.nilai_kabinet.mobile') as $nilai)
                    <p class="{{ $nilai['class'] }}">
                        <x-icon.sparkle />
                        <span class="nilai-title-mobile"> {{ $nilai['label'] }}</span>
                    </p>
                @endforeach
            </div>
        </div>
    </div>

    <div class="hero-glow-2 floating-glow"></div>
</section>
