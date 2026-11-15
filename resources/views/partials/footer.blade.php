<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-main-row">
            <div class="footer-brand-col">
                <div class="brand-content">
                    <div class="logo-address-group">
                        <img src="{{ img_asset('hero_logo/himasif-header.svg') }}" alt="Logo HIMASIF" class="footer-logo">
                        <p class="footer-address">{{ config('site.address') }}</p>
                    </div>

                    <div class="footer-social-wrapper">
                        <a href="{{ config('site.social.instagram') }}" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="Instagram HIMASIF">
                            <x-icon.instagram />
                        </a>
                        <a href="{{ config('site.social.tiktok') }}" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="TikTok HIMASIF">
                            <x-icon.tiktok />
                        </a>
                        <a href="{{ config('site.social.email') }}" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="Email HIMASIF">
                            <x-icon.mail />
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-grid-col">
                <div class="footer-links-grid">
                    @foreach (config('site.footer_links') as $group)
                        <div class="link-group {{ $group['class'] }}">
                            <div>
                                <h3 class="group-title">{{ $group['title'] }}</h3>
                                <ul class="group-list">
                                    @foreach ($group['links'] as $link)
                                        <li><a href="{{ isset($link['route']) ? route($link['route']) : $link['url'] }}">{{ $link['label'] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>
