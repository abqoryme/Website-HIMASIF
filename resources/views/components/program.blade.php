@php
    $programs = [
        [
            'icon' => 'users',
            'title' => 'HIMASIF Insight',
            'description' => 'Seminar & talkshow bersama praktisi dan profesional di bidang Sistem Informasi.',
        ],
        [
            'icon' => 'code-2',
            'title' => 'HIMASIF CodeLab',
            'description' => 'Pelatihan dan workshop untuk meningkatkan skill teknologi dan pengembangan diri.',
        ],
        [
            'icon' => 'heart-handshake',
            'title' => 'HIMASIF Care',
            'description' => 'Kegiatan sosial dan pengabdian kepada masyarakat sebagai bentuk kepedulian.',
        ],
        [
            'icon' => 'calendar-days',
            'title' => 'HIMASIF Event',
            'description' => 'Menyelenggarakan berbagai acara untuk mempererat hubungan dan menambah pengalaman.',
        ],
    ];
@endphp

<section id="program-kerja" class="bg-white py-20">
    <div class="container-himasif">
        <div class="mb-10 flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-end">
            <div class="flex flex-col gap-3">
                <span class="section-eyebrow">Program Kami</span>
                <h2 class="text-3xl font-extrabold text-dark sm:text-4xl">Program Kerja Unggulan</h2>
            </div>
            <a href="{{ url('/program') }}" class="nav-link flex items-center gap-1 text-primary">
                Lihat Semua Program
                <i data-lucide="arrow-right" class="h-4 w-4"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($programs as $program)
                <article class="card-base card-hover flex flex-col overflow-hidden !p-0">
                    <div class="relative h-40 w-full overflow-hidden">
                        <img src="https://placehold.co/400x260/E2E8F0/1E293B?text={{ urlencode($program['title']) }}" alt="{{ $program['title'] }}" class="h-full w-full object-cover">
                        <span class="absolute left-4 top-4 flex h-9 w-9 items-center justify-center rounded-xl bg-primary text-white shadow-soft">
                            <i data-lucide="{{ $program['icon'] }}" class="h-4 w-4"></i>
                        </span>
                    </div>
                    <div class="flex flex-1 flex-col gap-3 p-6">
                        <h3 class="text-base font-semibold text-dark">{{ $program['title'] }}</h3>
                        <p class="flex-1 text-sm leading-relaxed text-body/70">{{ $program['description'] }}</p>
                        <a href="{{ url('/program') }}" class="flex w-fit items-center gap-1 text-sm font-semibold text-primary hover:text-primary-dark">
                            Selengkapnya
                            <i data-lucide="arrow-right" class="h-3.5 w-3.5"></i>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
