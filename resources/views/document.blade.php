@extends('layouts.app')

@section('title', 'HIMASIF - Dokumen')

@section('content')
    <section class="gradient-hero relative overflow-hidden py-16">
        <div class="container-himasif relative flex flex-col items-start gap-3">
            <span class="badge-pill">Dokumen</span>
            <h1 class="text-3xl font-extrabold text-white sm:text-4xl">Dokumen Organisasi</h1>
            <p class="max-w-xl text-sm text-white/70 sm:text-base">Akses dokumen resmi terkait organisasi dan kegiatan HIMASIF.</p>
        </div>
    </section>

    <section class="bg-surface py-20">
        <div class="container-himasif grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @php
                $documents = [
                    ['title' => 'AD/ART', 'desc' => 'Anggaran Dasar dan Anggaran Rumah Tangga HIMASIF.'],
                    ['title' => 'GBHO', 'desc' => 'Garis Besar Haluan Organisasi HIMASIF.'],
                    ['title' => 'Panduan Organisasi', 'desc' => 'Panduan umum keorganisasian HIMASIF.'],
                    ['title' => 'LPJ Kegiatan', 'desc' => 'Laporan pertanggungjawaban setiap kegiatan.'],
                    ['title' => 'Proposal Kegiatan', 'desc' => 'Contoh dan format proposal kegiatan.'],
                    ['title' => 'Formulir Anggota', 'desc' => 'Formulir pendaftaran anggota baru HIMASIF.'],
                ];
            @endphp

            @foreach ($documents as $document)
                <div class="card-base card-hover flex flex-col gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                        <i data-lucide="file-text" class="h-6 w-6"></i>
                    </div>
                    <div>
                        <h3 class="mb-1 text-base font-semibold text-dark">{{ $document['title'] }}</h3>
                        <p class="text-sm leading-relaxed text-body/70">{{ $document['desc'] }}</p>
                    </div>
                    <a href="#" class="flex w-fit items-center gap-2 text-sm font-semibold text-primary hover:text-primary-dark">
                        <i data-lucide="download" class="h-4 w-4"></i>
                        Unduh Dokumen
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
