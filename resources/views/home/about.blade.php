<section id="about-section" class="about-section margin-x-section">
    <div class="about-glow floating-glow-2"></div>

    <div class="about-container section-container">
        <div class="about-title-container" data-aos="fade-left" data-aos-duration="800">
            <h2>About Us</h2>
            <h1>Tak Kenal Maka Tak Sayang</h1>
            <p>
                Selamat Datang di HIMASIF, tempat di mana kreativitas, inovasi, dan kolaborasi bertemu untuk menciptakan masa depan yang lebih cerdas!
            </p>
            <a href="{{ route('pages.struktur') }}" class="about-button">Kenalan Yuk!</a>
        </div>

        <div class="kahim-wahim-container" data-aos="fade-right" data-aos-duration="800">
            <div class="inner-container">
                <div class="kahim-container">
                    <div class="kahim-card glow-desc-div shine-effect">
                        <img src="{{ img_asset('hero_team/Kahim.svg') }}" alt="Ketua" class="animate-floating" loading="lazy">
                        <div class="kahim-overlay">
                            <h2 class="glow-text">{{ config('site.ketua.jabatan') }}</h2>
                            <h3>{{ config('site.ketua.nama_depan') }} <span class="text-gold">{{ config('site.ketua.nama_belakang') }}</span></h3>
                        </div>
                    </div>
                    <p class="himtika-periode">HIMASIF <span class="text-gold">{{ config('site.period') }}</span></p>
                </div>
            </div>
        </div>
    </div>

    {{-- Angka pada [data-count] dianimasikan oleh resources/js/modules/counters.js --}}
    <div id="counters" data-aos="fade-up" class="statistik-container section-container">
        <div class="statistik-glow floating-glow"></div>

        @foreach (config('site.statistik') as $stat)
            <div class="{{ trim($stat['card_class'].' bg-glow-statistik stats-card') }}">
                <h2 class="stats-number">
                    @if ($stat['count'] !== null)<span data-count="{{ $stat['count'] }}">0</span> @endif{{ $stat['title'] }}
                </h2>
                <div class="stats-label-container">
                    <div class="{{ $stat['wrapper_class'] }}">
                        <img src="{{ img_asset($stat['icon']) }}" alt="" class="{{ $stat['icon_class'] }}" loading="lazy">
                        <p class="{{ $stat['label_class'] }}">{{ $stat['label'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
