@php
    $newsList = [
        [
            'day' => '20',
            'month' => 'Mei',
            'year' => '2024',
            'title' => 'HIMASIF Gelar Seminar Nasional Transformasi Digital 2024',
            'excerpt' => 'Seminar nasional yang membahas peran teknologi informasi dalam transformasi digital.',
        ],
        [
            'day' => '15',
            'month' => 'Mei',
            'year' => '2024',
            'title' => 'CodeLab Series #2: Belajar Web Development dengan React',
            'excerpt' => 'Pelatihan intensif seputar React.js untuk meningkatkan kemampuan pengembangan web.',
        ],
        [
            'day' => '15',
            'month' => 'Mei',
            'year' => '2024',
            'title' => 'HIMASIF Care: Berbagi untuk Sesama',
            'excerpt' => 'Kegiatan bakti sosial dan donasi untuk masyarakat yang membutuhkan.',
        ],
    ];

    $schedules = [
        [
            'day' => '25',
            'month' => 'Mei',
            'title' => 'HIMASIF Gathering',
            'time' => 'Kebersamaan & Fun Games, 08.00 WIB',
        ],
        [
            'day' => '02',
            'month' => 'Jun',
            'title' => 'Workshop UI/UX Design',
            'time' => 'Belajar desain antarmuka, 09.00 WIB',
        ],
        [
            'day' => '15',
            'month' => 'Jun',
            'title' => 'Rapat Kerja HIMASIF 2024',
            'time' => 'Perencanaan program kerja, 13.00 WIB',
        ],
    ];
@endphp

<section id="berita" class="bg-surface py-20">
    <div class="container-himasif">
        <div class="mb-10 flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-end">
            <div class="flex flex-col gap-3">
                <span class="section-eyebrow">Berita &amp; Kegiatan</span>
                <h2 class="text-3xl font-extrabold text-dark sm:text-4xl">Informasi Terbaru</h2>
            </div>
            <a href="{{ url('/news') }}" class="nav-link flex items-center gap-1 text-primary">
                Lihat Semua Berita
                <i data-lucide="arrow-right" class="h-4 w-4"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-4">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-3 lg:grid-cols-3">
                @foreach ($newsList as $news)
                    <article class="card-base card-hover flex flex-col overflow-hidden !p-0">
                        <div class="relative h-36 w-full overflow-hidden">
                            <img src="https://placehold.co/400x220/1D4ED8/FFFFFF?text=Berita" alt="{{ $news['title'] }}" class="h-full w-full object-cover">
                            <span class="absolute left-3 top-3 flex flex-col items-center rounded-lg bg-primary px-3 py-1.5 text-white shadow-soft">
                                <span class="text-base font-bold leading-none">{{ $news['day'] }}</span>
                                <span class="text-[10px] font-medium leading-none">{{ $news['month'] }} {{ $news['year'] }}</span>
                            </span>
                        </div>
                        <div class="flex flex-1 flex-col gap-3 p-5">
                            <h3 class="text-sm font-semibold leading-snug text-dark">{{ $news['title'] }}</h3>
                            <p class="flex-1 text-xs leading-relaxed text-body/70">{{ $news['excerpt'] }}</p>
                            <a href="{{ url('/news') }}" class="flex w-fit items-center gap-1 text-xs font-semibold text-primary hover:text-primary-dark">
                                Baca Selengkapnya
                                <i data-lucide="arrow-right" class="h-3.5 w-3.5"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <aside class="rounded-2xl bg-dark p-6 text-white shadow-soft-lg lg:col-span-1">
                <h3 class="mb-5 text-base font-semibold">Jadwal Terdekat</h3>
                <div class="flex flex-col gap-4">
                    @foreach ($schedules as $schedule)
                        <div class="flex items-start gap-4 border-b border-white/10 pb-4 last:border-0 last:pb-0">
                            <div class="flex flex-col items-center rounded-lg bg-primary px-3 py-2 text-center">
                                <span class="text-base font-bold leading-none">{{ $schedule['day'] }}</span>
                                <span class="text-[10px] font-medium uppercase leading-none">{{ $schedule['month'] }}</span>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-white">{{ $schedule['title'] }}</p>
                                <p class="text-xs leading-relaxed text-white/60">{{ $schedule['time'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{ url('/news') }}" class="mt-5 flex items-center gap-1 text-sm font-semibold text-blue-300 hover:text-blue-200">
                    Lihat Semua Jadwal
                    <i data-lucide="arrow-right" class="h-4 w-4"></i>
                </a>
            </aside>
        </div>
    </div>
</section>
