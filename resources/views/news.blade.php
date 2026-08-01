@extends('layouts.app')

@section('title', 'HIMASIF - Berita')

@section('content')
    <section class="gradient-hero relative overflow-hidden py-16">
        <div class="container-himasif relative flex flex-col items-start gap-3">
            <span class="badge-pill">Berita &amp; Kegiatan</span>
            <h1 class="text-3xl font-extrabold text-white sm:text-4xl">Informasi Terbaru HIMASIF</h1>
            <p class="max-w-xl text-sm text-white/70 sm:text-base">Ikuti kabar terbaru seputar kegiatan dan program kerja HIMASIF.</p>
        </div>
    </section>

    @include('components.news')

    <section class="bg-white py-12">
        <div class="container-himasif flex items-center justify-center gap-2">
            <button type="button" class="flex h-10 w-10 items-center justify-center rounded-lg border border-border text-body/60 hover:border-primary hover:text-primary">
                <i data-lucide="chevron-left" class="h-4 w-4"></i>
            </button>
            <button type="button" class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-sm font-semibold text-white">1</button>
            <button type="button" class="flex h-10 w-10 items-center justify-center rounded-lg border border-border text-sm font-semibold text-body/60 hover:border-primary hover:text-primary">2</button>
            <button type="button" class="flex h-10 w-10 items-center justify-center rounded-lg border border-border text-sm font-semibold text-body/60 hover:border-primary hover:text-primary">3</button>
            <button type="button" class="flex h-10 w-10 items-center justify-center rounded-lg border border-border text-body/60 hover:border-primary hover:text-primary">
                <i data-lucide="chevron-right" class="h-4 w-4"></i>
            </button>
        </div>
    </section>
@endsection
