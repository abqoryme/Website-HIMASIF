{{-- Daftar menu dari config('site.menu'). $mobile = true menambahkan tombol buka/tutup submenu. --}}
@foreach (['left' => 'pull-left', 'right' => 'pull-right'] as $side => $float)
    <ul class="navigation {{ $float }}">
        @foreach (config("site.menu.{$side}") as $item)
            @if (! empty($item['children']))
                <li class="dropdown">
                    <a href="#">{{ $item['label'] }}<i class="fa-solid fa-chevron-down arrow"></i></a>
                    <ul>
                        @foreach ($item['children'] as $child)
                            <li><a href="{{ isset($child['route']) ? route($child['route']) : $child['url'] }}">{{ $child['label'] }}</a></li>
                        @endforeach
                    </ul>
                    @if ($mobile)
                        <button type="button" class="dropdown-btn" aria-label="Buka submenu {{ $item['label'] }}" aria-expanded="false">
                            <span class="fa-solid fa-angle-right"></span>
                        </button>
                    @endif
                </li>
            @else
                <li><a href="{{ isset($item['route']) ? route($item['route']) : $item['url'] }}">{{ $item['label'] }}</a></li>
            @endif
        @endforeach
    </ul>
@endforeach
