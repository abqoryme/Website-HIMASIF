@extends('layouts.app')

@section('title', 'HIMASIF - Tentang Kami')

@section('content')
    <section class="gradient-hero relative overflow-hidden py-16">
        <div class="container-himasif relative flex flex-col items-start gap-3">
            <span class="badge-pill">Tentang Kami</span>
            <h1 class="text-3xl font-extrabold text-white sm:text-4xl">Mengenal HIMASIF Lebih Dekat</h1>
            <p class="max-w-xl text-sm text-white/70 sm:text-base">Profil, dan visi misi Himpunan Sistem Informasi.</p>
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
@endsection
