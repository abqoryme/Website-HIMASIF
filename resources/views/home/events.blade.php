<section id="events-section" class="event-section margin-x-section">
    <div class="event-glow floating-glow-2"></div>

    <div class="event-header" data-aos="fade-up" data-aos-duration="800">
        <h2>Apa Yang Baru!?</h2>
        <h1>Jelajahi Sorotan Terbaru HIMASIF</h1>
    </div>

    <div class="section-container swiper" data-aos="fade-up" data-aos-duration="800">
        <div id="event-card-wrapper" class="card-wrapper">
            <ul class="swiper-wrapper">
                @foreach (config('site.sorotan') as $sorotan)
                    <li class="swiper-slide card-slide glow-desc-div">
   <a href="{{ $sorotan['url'] }}" class="card-event-1" style="background-image: url('{{ img_asset($sorotan['image']) }}')">
    <div class="card-event-header">
        <div class="header-left">
            <span>{{ $sorotan['title'] }}</span>
            <img src="{{ img_asset($sorotan['image']) }}" alt="Logo HIMASIF" class="image-shadow" loading="lazy">
                            </div>
                                <div class="header-right">
                                    <x-icon.arrow-up-right class="arrow-icon" />
                                </div>
                            </div>
                            <div class="card-event-footer">
                                <h3 class="title-text-shadow">{{ $sorotan['title'] }}</h3>
                                <p class="line-clamp-1">{{ $sorotan['description'] }}</p>
                                <button type="button" class="btn-seemore">Lihat selengkapnya...</button>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="swiper-pagination"></div>
            <div class="swiper-slide-button swiper-button-prev"></div>
            <div class="swiper-slide-button swiper-button-next"></div>
        </div>
    </div>
</section>
