@extends('layouts.app')

@section('title', 'HIMASIF - Tentang Kami')

@section('content')
    <section class="gradient-hero relative overflow-hidden py-16">
        <div class="container-himasif relative flex flex-col items-start gap-3">
            <span class="badge-pill">Tentang Kami</span>
            <h1 class="text-3xl font-extrabold text-white sm:text-4xl">Mengenal HIMASIF Lebih Dekat</h1>
            <p class="max-w-xl text-sm text-white/70 sm:text-base">Profil, visi misi, dan struktur kepengurusan Himpunan Sistem Informasi.</p>
        </div>
    </section>

    @include('components.about')

    <section id="visi-misi" class="bg-white py-20">
        <div class="container-himasif grid grid-cols-1 gap-10 lg:grid-cols-2">
            <div class="card-base">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                    <i data-lucide="eye" class="h-6 w-6"></i>
                </div>
                <h2 class="mb-3 text-xl font-bold text-dark">Visi</h2>
                <p class="text-sm leading-relaxed text-body/70">Menjadi organisasi mahasiswa Sistem Informasi yang unggul, kolaboratif, dan berkontribusi nyata bagi kemajuan teknologi digital.</p>
            </div>
            <div class="card-base">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                    <i data-lucide="target" class="h-6 w-6"></i>
                </div>
                <h2 class="mb-3 text-xl font-bold text-dark">Misi</h2>
                <ul class="flex flex-col gap-2 text-sm leading-relaxed text-body/70">
                    <li class="flex items-start gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 shrink-0 text-primary"></i>Membangun wadah aspirasi dan pengembangan diri mahasiswa.</li>
                    <li class="flex items-start gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 shrink-0 text-primary"></i>Mendorong kolaborasi lintas bidang dan lintas angkatan.</li>
                    <li class="flex items-start gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 shrink-0 text-primary"></i>Menciptakan inovasi dan solusi berbasis teknologi.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="struktur" class="bg-surface py-20">
        <div class="container-himasif">
            <div class="mb-10 flex flex-col gap-3">
                <span class="section-eyebrow">Struktur Kepengurusan</span>
                <h2 class="text-3xl font-extrabold text-dark sm:text-4xl">Pengurus HIMASIF 2024/2025</h2>
            </div>
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-4">
                @foreach (['Ketua Umum', 'Wakil Ketua', 'Sekretaris', 'Bendahara'] as $position)
                    <div class="card-base card-hover flex flex-col items-center gap-3 text-center">
                        <img src="https://placehold.co/160x160/E2E8F0/1E293B?text=Foto" alt="{{ $position }}" class="h-24 w-24 rounded-full object-cover">
                        <h3 class="text-sm font-semibold text-dark">Nama Pengurus</h3>
                        <p class="text-xs text-primary">{{ $position }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
