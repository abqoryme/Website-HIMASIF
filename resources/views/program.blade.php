@extends('layouts.app')

@section('title', 'HIMASIF - Program Kerja')

@section('content')
@php
    // TODO: pindahkan data ini ke database (tabel programs + relasi divisi) saat modul CRUD admin sudah tersedia
    $divisions = [
        'semua'    => 'Semua',
        'psdm'     => 'PSDM',
        'kader'    => 'Kaderisasi',
        'litbang'  => 'Litbang',
        'humas'    => 'Humas',
        'mediatek' => 'Mediatek',
    ];

    $statusStyles = [
        'Sedang Berjalan' => 'bg-emerald-100 text-emerald-700',
        'Segera Datang'   => 'bg-amber-100 text-amber-700',
        'Selesai'         => 'bg-border text-body/60',
    ];

    $eventPrograms = [
        ['title' => 'SSI', 'division' => 'psdm', 'date' => 'Feb - Nov 2026', 'status' => 'Sedang Berjalan'],
        ['title' => 'ISIC', 'division' => 'psdm', 'date' => 'Sep - Nov 2026', 'status' => 'Segera Datang'],
        ['title' => 'ITC', 'division' => 'psdm', 'date' => 'Jul - Okt 2026', 'status' => 'Segera Datang'],
        ['title' => 'Gathering Sistem Informasi', 'division' => 'kader', 'date' => 'Agustus 2026', 'status' => 'Segera Datang'],
        ['title' => 'Welcoming Session', 'division' => 'kader', 'date' => 'Agustus 2026', 'status' => 'Segera Datang'],
        ['title' => 'HighST.', 'division' => 'litbang', 'date' => 'Jan - Nov 2026', 'status' => 'Sedang Berjalan'],
        ['title' => 'HIMASIF Peduli', 'division' => 'humas', 'date' => 'Februari 2026', 'status' => 'Selesai'],
        ['title' => 'Temu Alumni', 'division' => 'humas', 'date' => 'Agustus 2026', 'status' => 'Segera Datang'],
        ['title' => 'Inhofis', 'division' => 'humas', 'date' => 'Mei 2026', 'status' => 'Segera Datang'],
        ['title' => 'Sarasehan', 'division' => 'humas', 'date' => 'September 2026', 'status' => 'Segera Datang'],
        ['title' => 'Hi-Cussion', 'division' => 'mediatek', 'date' => 'April 2026', 'status' => 'Segera Datang'],
    ];

    $nonEventPrograms = [
        ['title' => 'Pengucapan Ultah Anggota HIMASIF', 'division' => 'kader', 'date' => 'Jan - Des 2026', 'status' => 'Sedang Berjalan'],
        ['title' => 'Love Letter', 'division' => 'kader', 'date' => 'Jan - Des 2026', 'status' => 'Sedang Berjalan'],
        ['title' => 'Controlling', 'division' => 'litbang', 'date' => 'Jan - Des 2026', 'status' => 'Sedang Berjalan'],
        ['title' => 'Penelitian', 'division' => 'litbang', 'date' => 'Jan - Des 2026', 'status' => 'Sedang Berjalan'],
        ['title' => 'Pengelolaan Konten Web & Sosmed', 'division' => 'humas', 'date' => 'Jan - Des 2026', 'status' => 'Sedang Berjalan'],
        ['title' => 'HIMASIF Wisuda', 'division' => 'humas', 'date' => 'Jan - Des 2026', 'status' => 'Sedang Berjalan'],
        ['title' => 'HIMASIF Mengajar', 'division' => 'humas', 'date' => 'September 2026', 'status' => 'Segera Datang'],
        ['title' => 'Video Profil', 'division' => 'mediatek', 'date' => 'Maret 2026', 'status' => 'Selesai'],
        ['title' => 'Maintenance Web', 'division' => 'mediatek', 'date' => 'Jan - Des 2026', 'status' => 'Sedang Berjalan'],
        ['title' => 'Penyedia Media', 'division' => 'mediatek', 'date' => 'Jan - Des 2026', 'status' => 'Sedang Berjalan'],
    ];
@endphp

<section class="gradient-hero relative overflow-hidden py-16">
    <div class="container-himasif relative flex flex-col items-start gap-3">
        <span class="badge-pill">Program Kami</span>
        <h1 class="text-3xl font-extrabold text-white sm:text-4xl">Program Kerja HIMASIF</h1>
        <p class="max-w-xl text-sm text-white/70 sm:text-base">Berbagai program kerja yang diselenggarakan oleh setiap divisi HIMASIF untuk mengembangkan potensi mahasiswa Sistem Informasi.</p>
    </div>
</section>

<section class="bg-white py-20">
    <div class="container-himasif">
        <div class="mb-10 flex flex-wrap items-center gap-3">
            @foreach ($divisions as $key => $label)
                <button
                    type="button"
                    data-filter="{{ $key }}"
                    class="filter-btn rounded-full border px-5 py-2 text-sm font-medium transition-all duration-200 {{ $key === 'semua' ? 'is-active border-primary bg-primary text-white' : 'border-border bg-white text-body/70 hover:border-primary hover:text-primary' }}"
                >
                    {{ $label }}
                </button>
            @endforeach
        </div>

        {{-- Event --}}
        <div class="mb-6 flex flex-col gap-2">
            <h2 class="text-2xl font-bold text-dark">Event</h2>
            <p class="max-w-2xl text-sm text-body/70">Program Event dapat diikuti oleh seluruh anggota HIMASIF, baik sebagai panitia, peserta, maupun bentuk partisipasi lainnya.</p>
        </div>
        <div class="mb-16 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($eventPrograms as $program)
                <article data-division="{{ $program['division'] }}" class="card-base card-hover flex flex-col overflow-hidden !p-0">
                    <div class="relative h-40 w-full overflow-hidden">
                        <img src="https://placehold.co/400x260/E2E8F0/1E293B?text={{ urlencode($program['title']) }}" alt="{{ $program['title'] }}" class="h-full w-full object-cover">
                        <span class="absolute right-3 top-3 rounded-full px-3 py-1 text-[11px] font-semibold {{ $statusStyles[$program['status']] }}">
                            {{ $program['status'] }}
                        </span>
                    </div>
                    <div class="flex flex-1 flex-col gap-1 p-5">
                        <h3 class="text-base font-semibold text-dark">{{ $program['title'] }}</h3>
                        <p class="text-xs font-medium uppercase tracking-wide text-primary">oleh {{ $divisions[$program['division']] }}</p>
                        <p class="mt-1 text-sm text-body/60">{{ $program['date'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

        {{-- Non-Event --}}
        <div class="mb-6 flex flex-col gap-2">
            <h2 class="text-2xl font-bold text-dark">Non-Event</h2>
            <p class="max-w-2xl text-sm text-body/70">Program Non-event diselenggarakan oleh masing-masing divisi sebagai program kerja internal untuk pengembangan organisasi HIMASIF.</p>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($nonEventPrograms as $program)
                <article data-division="{{ $program['division'] }}" class="card-base flex flex-col gap-1 !p-5">
                    <div class="flex items-start justify-between gap-3">
                        <h3 class="text-base font-semibold text-dark">{{ $program['title'] }}</h3>
                        <span class="shrink-0 rounded-full px-3 py-1 text-[11px] font-semibold {{ $statusStyles[$program['status']] }}">
                            {{ $program['status'] }}
                        </span>
                    </div>
                    <p class="text-xs font-medium uppercase tracking-wide text-primary">oleh {{ $divisions[$program['division']] }}</p>
                    <p class="text-sm text-body/60">{{ $program['date'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-surface py-16">
    <div class="container-himasif flex flex-col items-center gap-4 rounded-2xl bg-white p-10 text-center shadow-soft">
        <h2 class="text-2xl font-bold text-dark">Ingin Terlibat di Program Kami?</h2>
        <p class="max-w-lg text-sm text-body/70">Bergabunglah bersama HIMASIF dan ambil bagian dalam setiap program kerja yang kami selenggarakan.</p>
        <a href="{{ url('/contact') }}" class="btn-primary">
            Gabung Sekarang
            <i data-lucide="arrow-right" class="h-4 w-4"></i>
        </a>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterButtons = document.querySelectorAll('[data-filter]');
        const cards = document.querySelectorAll('[data-division]');

        filterButtons.forEach((btn) => {
            btn.addEventListener('click', () => {
                filterButtons.forEach((b) => {
                    b.classList.remove('is-active', 'border-primary', 'bg-primary', 'text-white');
                    b.classList.add('border-border', 'bg-white', 'text-body/70');
                });

                btn.classList.add('is-active', 'border-primary', 'bg-primary', 'text-white');
                btn.classList.remove('border-border', 'bg-white', 'text-body/70');

                const filter = btn.dataset.filter;
                cards.forEach((card) => {
                    const show = filter === 'semua' || card.dataset.division === filter;
                    card.classList.toggle('hidden', !show);
                });
            });
        });
    });
</script>
@endpush