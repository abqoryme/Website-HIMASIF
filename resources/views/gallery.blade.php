@extends('layouts.app')

@section('title', 'HIMASIF - Galeri')

@section('content')
    <section class="gradient-hero relative overflow-hidden py-16">
        <div class="container-himasif relative flex flex-col items-start gap-3">
            <span class="badge-pill">Galeri</span>
            <h1 class="text-3xl font-extrabold text-white sm:text-4xl">Dokumentasi Kegiatan HIMASIF</h1>
            <p class="max-w-xl text-sm text-white/70 sm:text-base">Kumpulan momen dan dokumentasi dari berbagai kegiatan HIMASIF.</p>
        </div>
    </section>

    <section class="bg-surface py-20">
        <div class="container-himasif">
            <div class="mb-10 flex flex-wrap items-center gap-3">
                @foreach (['Semua', 'Seminar', 'Workshop', 'Sosial', 'Internal'] as $index => $filter)
                    <button type="button" class="rounded-full border px-5 py-2 text-sm font-medium transition-all duration-200 {{ $index === 0 ? 'border-primary bg-primary text-white' : 'border-border bg-white text-body/70 hover:border-primary hover:text-primary' }}">
                        {{ $filter }}
                    </button>
                @endforeach
            </div>

            <div class="columns-1 gap-5 sm:columns-2 lg:columns-3 [&>*]:mb-5">
                @for ($i = 1; $i <= 9; $i++)
                    <div class="group relative overflow-hidden rounded-2xl shadow-soft">
                        <img src="https://placehold.co/500x{{ 350 + ($i % 3) * 60 }}/1D4ED8/FFFFFF?text=Galeri+{{ $i }}" alt="Galeri kegiatan {{ $i }}" class="w-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 flex items-end bg-gradient-to-t from-dark/70 via-transparent to-transparent p-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <p class="text-sm font-semibold text-white">Kegiatan HIMASIF #{{ $i }}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
