<div class="mobile-menu" id="mobile-menu">
    <div class="menu-backdrop"></div>
    <button type="button" class="close-btn" aria-label="Tutup menu navigasi">
        <span class="icon fa-solid fa-xmark"></span>
    </button>

    <nav class="menu-box" aria-label="Navigasi mobile">
        <div class="nav-logo">
            <a href="{{ route('home') }}">
                <img width="120" height="120" src="{{ img_asset('hero_logo/HIMASIF.webp') }}" alt="Logo HIMASIF">
            </a>
        </div>

        <div class="menu-outer">
            <div class="navbar-collapse">
                @include('partials.nav-lists', ['mobile' => true])
            </div>
        </div>

        <div class="social-links">
            <ul>
                <li>
                    <a href="{{ config('site.social.instagram') }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram HIMASIF"><i class="fa-brands fa-instagram"></i></a>
                    <a href="{{ config('site.social.tiktok') }}" target="_blank" rel="noopener noreferrer" aria-label="TikTok HIMASIF"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="{{ config('site.social.email') }}" target="_blank" rel="noopener noreferrer" aria-label="Email HIMASIF"><i class="fa-regular fa-envelope"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
