@extends('layouts.app')

@section('title', 'HIMASIF - Program')

@section('content')
    <section class="gradient-hero relative overflow-hidden py-16">
        <div class="container-himasif relative flex flex-col items-start gap-3">
            <span class="badge-pill">Program Kami</span>
            <h1 class="text-3xl font-extrabold text-white sm:text-4xl">Program Kerja HIMASIF</h1>
            <p class="max-w-xl text-sm text-white/70 sm:text-base">Berbagai program unggulan untuk mengembangkan potensi mahasiswa Sistem Informasi.</p>
        </div>
    </section>

    @include('components.program')

    <section class="bg-white py-16">
        <div class="container-himasif flex flex-col items-center gap-4 rounded-2xl bg-surface p-10 text-center">
            <h2 class="text-2xl font-bold text-dark">Ingin Terlibat di Program Kami?</h2>
            <p class="max-w-lg text-sm text-body/70">Bergabunglah bersama HIMASIF dan ambil bagian dalam setiap program kerja yang kami selenggarakan.</p>
            <a href="{{ url('/contact') }}" class="btn-primary">
                Gabung Sekarang
                <i data-lucide="arrow-right" class="h-4 w-4"></i>
            </a>
        </div>
    </section>
@endsection
