<x-layouts.app
    title="Logo HIMASIF ー Himpunan Mahasiswa Sistem Informasi UIKA"
    description="Filosofi dan makna setiap elemen logo HIMASIF."
>
    {{-- CSS + JS halaman ini (resources/js/logo.js) dimuat lewat @stack('head') di layout. --}}
    @push('head')
        @vite('resources/js/logo.js')
    @endpush

    <div class="tk-page">
        {{-- ===== HERO ===== --}}
        <section class="tk-hero">
            <div class="tk-glow" style="top:120px; right:12%;"></div>
            <div class="tk-glow tk-glow--blue" style="bottom:80px; left:8%;"></div>
            <div class="tk-container tk-hero__grid">
                <div class="tk-hero__text">
                    <span class="tk-eyebrow" data-aos="fade-right" data-aos-duration="800">Logo HIMASIF</span>
                    <h1 class="tk-title" data-tk-words>Cerita di Balik Setiap <span class="tk-text-gold">Simbol</span></h1>
                    <p class="tk-desc" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                        Setiap garis, warna, dan bentuk pada logo HIMASIF dirancang untuk menyampaikan
                        siapa kami dan ke mana kami ingin melangkah sebagai Himpunan Mahasiswa Sistem Informasi UIKA.
                    </p>
                    <div class="tk-btn-row" data-aos="fade-up" data-aos-delay="550" data-aos-duration="800">
                        <a href="#makna-logo" class="tk-btn">Jelajahi Makna <i class="fa-solid fa-arrow-right"></i></a>
                        <a href="#warna-logo" class="tk-btn tk-btn--ghost">Warna Identitas</a>
                    </div>
                </div>
                <div class="tk-logo-frame" data-aos="zoom-in" data-aos-duration="1000">
                    <span class="tk-logo-frame__dash"></span>
                    <span class="tk-logo-frame__orbit"></span>
                    <span class="tk-logo-frame__ring"></span>
                    <img class="tk-logo-frame__img" src="{{ img_asset('hero_logo/HIMASIF.webp') }}" alt="Logo HIMASIF">
                    <span class="tk-spark" style="top:-6%; left:6%;">&#10022;</span>
                    <span class="tk-spark" style="top:12%; right:-8%;">&#10022;</span>
                    <span class="tk-spark" style="bottom:2%; left:-6%;">&#10022;</span>
                    <span class="tk-spark" style="bottom:-8%; right:12%;">&#10022;</span>
                </div>
            </div>
        </section>

        {{-- ===== MARQUEE ===== --}}
        <div class="tk-marquee tk-marquee--tilt" aria-label="HIMASIF">
            <div class="tk-marquee__track">
                <span class="tk-marquee__item"><img src="{{ img_asset('hero_logo/HIMASIF.webp') }}" alt="">HIMASIF <span class="tk-text-gold">&#10022;</span></span>
                <span class="tk-marquee__item">SISTEM INFORMASI <span class="tk-text-gold">&#10022;</span></span>
                <span class="tk-marquee__item"><img src="{{ img_asset('hero_logo/HIMASIF.webp') }}" alt="">HIMASIF <span class="tk-text-gold">&#10022;</span></span>
                <span class="tk-marquee__item">UIKA BOGOR <span class="tk-text-gold">&#10022;</span></span>
                <span class="tk-marquee__item"><img src="{{ img_asset('hero_logo/HIMASIF.webp') }}" alt="">HIMASIF <span class="tk-text-gold">&#10022;</span></span>
                <span class="tk-marquee__item">SISTEMATIS &middot; KOLABORATIF &middot; BERDAMPAK <span class="tk-text-gold">&#10022;</span></span>
            </div>
        </div>

        {{-- ===== MAKNA LOGO (hotspot + slider) =====
             CATATAN TIM: teks makna di bawah adalah DRAF. Ganti dengan filosofi logo resmi HIMASIF.
             Posisi titik (data-x / data-y, dalam persen) bisa digeser agar pas dengan logo. --}}
        <section class="tk-section" id="makna-logo">
            <div class="tk-glow" style="top:200px; left:5%;"></div>
            <div class="tk-container">
                <div class="tk-section-head tk-center" data-aos="fade-up" data-aos-duration="800">
                    <span class="tk-eyebrow tk-eyebrow--center">Filosofi</span>
                    <h2 class="tk-title">Makna di Balik Logo Kami</h2>
                    <p class="tk-desc">Klik titik pada logo atau geser kartu untuk melihat arti setiap elemen.</p>
                </div>

                <div class="tk-explorer">
                    <div class="tk-explorer__stage" data-aos="zoom-in" data-aos-duration="900">
                        <img src="{{ img_asset('hero_logo/HIMASIF.webp') }}" alt="Logo HIMASIF dengan penanda elemen">
                        <span class="tk-explorer__lens" aria-hidden="true"></span>
                        <button class="tk-hotspot" data-x="5" data-y="30" aria-label="Lingkaran biru">1</button>
                        <button class="tk-hotspot" data-x="83" data-y="50" aria-label="Garis kuning">2</button>
                        <button class="tk-hotspot" data-x="50" data-y="9" aria-label="Cincin hitam dan nama himpunan">3</button>
                        <button class="tk-hotspot" data-x="40" data-y="42" aria-label="Microchip">4</button>
                        <button class="tk-hotspot" data-x="52" data-y="49" aria-label="Inisial SI">5</button>
                        <button class="tk-hotspot" data-x="32" data-y="30" aria-label="Jalur sirkuit">6</button>
                        <button class="tk-hotspot" data-x="70" data-y="68" aria-label="Lingkaran putih">7</button>
                        <button class="tk-hotspot" data-x="50" data-y="76" aria-label="Tulisan HIMASIF">8</button>
                        <button class="tk-hotspot" data-x="50" data-y="88" aria-label="Tulisan UIKA Bogor">9</button>
                    </div>

                    <div data-aos="fade-left" data-aos-duration="900">
                        <div class="tk-meaning-viewport">
                            <div class="tk-meaning-track">
                                <article class="tk-card tk-meaning-card">
                                    <div class="tk-meaning-card__crop"></div>
                                    <span class="tk-meaning-card__num">ELEMEN 01</span>
                                    <h3>Lingkaran Biru</h3>
                                    <p>Biru melambangkan kepercayaan, ketenangan berpikir, dan profesionalisme, sikap yang ingin ditanamkan HIMASIF dalam setiap langkah organisasi.</p>
                                </article>
                                <article class="tk-card tk-meaning-card">
                                    <div class="tk-meaning-card__crop"></div>
                                    <span class="tk-meaning-card__num">ELEMEN 02</span>
                                    <h3>Garis Kuning</h3>
                                    <p>Kuning keemasan melambangkan semangat, optimisme, dan harapan agar setiap anggota HIMASIF bersinar lewat prestasi.</p>
                                </article>
                                <article class="tk-card tk-meaning-card">
                                    <div class="tk-meaning-card__crop"></div>
                                    <span class="tk-meaning-card__num">ELEMEN 03</span>
                                    <h3>Cincin Hitam &amp; Nama Himpunan</h3>
                                    <p>Hitam melambangkan keteguhan. Nama himpunan yang melingkar utuh menggambarkan kesatuan seluruh mahasiswa Sistem Informasi dalam satu wadah.</p>
                                </article>
                                <article class="tk-card tk-meaning-card">
                                    <div class="tk-meaning-card__crop"></div>
                                    <span class="tk-meaning-card__num">ELEMEN 04</span>
                                    <h3>Microchip</h3>
                                    <p>Microchip adalah pusat pemrosesan. HIMASIF hadir sebagai pusat penggerak yang mengolah ide dan potensi anggotanya menjadi karya.</p>
                                </article>
                                <article class="tk-card tk-meaning-card">
                                    <div class="tk-meaning-card__crop"></div>
                                    <span class="tk-meaning-card__num">ELEMEN 05</span>
                                    <h3>Inisial &ldquo;SI&rdquo;</h3>
                                    <p>Inisial Sistem Informasi di tengah chip menegaskan bahwa program studi adalah inti dari identitas dan seluruh kegiatan HIMASIF.</p>
                                </article>
                                <article class="tk-card tk-meaning-card">
                                    <div class="tk-meaning-card__crop"></div>
                                    <span class="tk-meaning-card__num">ELEMEN 06</span>
                                    <h3>Jalur Sirkuit</h3>
                                    <p>Jalur yang bercabang ke segala arah melambangkan koneksi dan alur informasi: HIMASIF menghubungkan mahasiswa dengan ilmu, relasi, dan dunia industri.</p>
                                </article>
                                <article class="tk-card tk-meaning-card">
                                    <div class="tk-meaning-card__crop"></div>
                                    <span class="tk-meaning-card__num">ELEMEN 07</span>
                                    <h3>Lingkaran Putih</h3>
                                    <p>Putih melambangkan ketulusan serta ruang yang selalu terbuka bagi setiap ide dan gagasan baru.</p>
                                </article>
                                <article class="tk-card tk-meaning-card">
                                    <div class="tk-meaning-card__crop"></div>
                                    <span class="tk-meaning-card__num">ELEMEN 08</span>
                                    <h3>Tulisan HIMASIF</h3>
                                    <p>Nama singkat himpunan sebagai identitas yang mudah dikenali dan menjadi kebanggaan bersama seluruh anggota.</p>
                                </article>
                                <article class="tk-card tk-meaning-card">
                                    <div class="tk-meaning-card__crop"></div>
                                    <span class="tk-meaning-card__num">ELEMEN 09</span>
                                    <h3>UIKA Bogor</h3>
                                    <p>Penanda asal: HIMASIF tumbuh dan berkarya di Universitas Ibn Khaldun Bogor.</p>
                                </article>
                            </div>
                        </div>
                        <div class="tk-slider-nav">
                            <button class="tk-slider-btn tk-meaning-prev" aria-label="Elemen sebelumnya"><i class="fa-solid fa-chevron-left"></i></button>
                            <span class="tk-slider-counter"><b data-tk-count-now>01</b> / <span data-tk-count-all>09</span></span>
                            <button class="tk-slider-btn tk-meaning-next" aria-label="Elemen berikutnya"><i class="fa-solid fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===== WARNA IDENTITAS =====
             Kode warna diambil dari file logo (images/himasif-logo.webp). Makna warna = DRAF. --}}
        <section class="tk-section" id="warna-logo">
            <div class="tk-glow tk-glow--gold" style="top:40%; right:10%;"></div>
            <div class="tk-container">
                <div class="tk-section-head" data-aos="fade-up" data-aos-duration="800">
                    <span class="tk-eyebrow">Warna Identitas</span>
                    <h2 class="tk-title">Empat Warna, Satu Identitas</h2>
                    <p class="tk-desc">Klik kartu untuk menyalin kode warnanya.</p>
                </div>
                <div class="tk-palette">
                    <button class="tk-card tk-swatch" data-hex="#0747B1" data-aos="fade-up" data-aos-duration="800">
                        <div class="tk-swatch__color" style="background:#0747B1;"></div>
                        <div class="tk-swatch__body">
                            <h3>Biru</h3>
                            <span class="tk-swatch__hex">#0747B1</span>
                            <p>Kepercayaan dan profesionalisme.</p>
                        </div>
                    </button>
                    <button class="tk-card tk-swatch" data-hex="#FEDC51" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        <div class="tk-swatch__color" style="background:#FEDC51;"></div>
                        <div class="tk-swatch__body">
                            <h3>Kuning</h3>
                            <span class="tk-swatch__hex">#FEDC51</span>
                            <p>Semangat dan optimisme.</p>
                        </div>
                    </button>
                    <button class="tk-card tk-swatch" data-hex="#02010A" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                        <div class="tk-swatch__color" style="background:#02010A; box-shadow: inset 0 0 0 1px rgba(255,255,255,.12);"></div>
                        <div class="tk-swatch__body">
                            <h3>Hitam</h3>
                            <span class="tk-swatch__hex">#02010A</span>
                            <p>Keteguhan dan ketegasan.</p>
                        </div>
                    </button>
                    <button class="tk-card tk-swatch" data-hex="#FFFFFF" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                        <div class="tk-swatch__color" style="background:#FFFFFF;"></div>
                        <div class="tk-swatch__body">
                            <h3>Putih</h3>
                            <span class="tk-swatch__hex">#FFFFFF</span>
                            <p>Ketulusan dan keterbukaan.</p>
                        </div>
                    </button>
                </div>
            </div>
        </section>

        {{-- ===== PENUTUP ===== --}}
        <section class="tk-section tk-section--tight">
            <div class="tk-container">
                <div class="tk-card tk-quote tk-shine tk-center" data-aos="zoom-in" data-aos-duration="900">
                    <p>Logo bukan sekadar gambar. Ia adalah janji bahwa setiap anggota HIMASIF bergerak <span class="tk-text-gold">sistematis</span>, <span class="tk-text-gold">kolaboratif</span>, dan <span class="tk-text-gold">berdampak</span>.</p>
                    <div class="tk-btn-row">
                        <a href="{{ route('pages.visi-misi') }}" class="tk-btn">Lihat Visi &amp; Misi <i class="fa-solid fa-arrow-right"></i></a>
                        <a href="{{ route('pages.galeri') }}" class="tk-btn tk-btn--ghost">Buka Galeri</a>
                    </div>
                </div>
            </div>
        </section>
    
    </div>
</x-layouts.app>
