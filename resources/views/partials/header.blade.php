<header class="main-header header-absolute" id="main-header">
    <div class="header-upper">
        <div class="inner-container">
            <div class="auto-container">
                <div class="nav-outer">
                    <div class="logo-outer">
                        <a href="{{ route('home') }}">
                            <img src="{{ img_asset('hero_logo/himasif-header.svg') }}" alt="Logo HIMASIF" title="HIMASIF">
                        </a>
                    </div>

                    <button type="button" class="mobile-nav-toggler" aria-label="Buka menu navigasi" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="icon fa-solid fa-bars"></span>
                    </button>

                    <nav class="main-menu" aria-label="Navigasi utama">
                        <div class="navbar-collapse">
                            @include('partials.nav-lists', ['mobile' => false])
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @include('partials.mobile-menu')
</header>
