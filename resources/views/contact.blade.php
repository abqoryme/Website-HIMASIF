@extends('layouts.app')

@section('title', 'HIMASIF - Kontak')

@section('content')
    <section class="gradient-hero relative overflow-hidden py-16">
        <div class="container-himasif relative flex flex-col items-start gap-3">
            <span class="badge-pill">Kontak</span>
            <h1 class="text-3xl font-extrabold text-white sm:text-4xl">Hubungi Kami</h1>
            <p class="max-w-xl text-sm text-white/70 sm:text-base">Ada pertanyaan atau ingin berkolaborasi? Sampaikan pesan Anda kepada kami.</p>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="container-himasif grid grid-cols-1 gap-10 lg:grid-cols-5">
            <div class="flex flex-col gap-5 lg:col-span-2">
                <div class="card-base flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary">
                        <i data-lucide="map-pin" class="h-6 w-6"></i>
                    </div>
                    <div>
                        <h3 class="mb-1 text-sm font-semibold text-dark">Alamat</h3>
                        <p class="text-sm leading-relaxed text-body/70">Fakultas Ilmu Komputer, Universitas XXX, Jl. Raya Kampus No.123, Kota</p>
                    </div>
                </div>
                <div class="card-base flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary">
                        <i data-lucide="mail" class="h-6 w-6"></i>
                    </div>
                    <div>
                        <h3 class="mb-1 text-sm font-semibold text-dark">Email</h3>
                        <p class="text-sm leading-relaxed text-body/70">himasif@xxx.ac.id</p>
                    </div>
                </div>
                <div class="card-base flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary">
                        <i data-lucide="phone" class="h-6 w-6"></i>
                    </div>
                    <div>
                        <h3 class="mb-1 text-sm font-semibold text-dark">Telepon</h3>
                        <p class="text-sm leading-relaxed text-body/70">0812-3456-7890</p>
                    </div>
                </div>
            </div>

            <div class="card-base lg:col-span-3">
                <h2 class="mb-6 text-xl font-bold text-dark">Kirim Pesan</h2>
                <form class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div class="flex flex-col gap-2">
                        <label for="name" class="text-sm font-medium text-dark">Nama Lengkap</label>
                        <input id="name" type="text" placeholder="Masukkan nama Anda" class="rounded-xl border border-border px-4 py-3 text-sm outline-none transition-colors duration-200 focus:border-primary">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="email" class="text-sm font-medium text-dark">Email</label>
                        <input id="email" type="email" placeholder="nama@email.com" class="rounded-xl border border-border px-4 py-3 text-sm outline-none transition-colors duration-200 focus:border-primary">
                    </div>
                    <div class="flex flex-col gap-2 sm:col-span-2">
                        <label for="subject" class="text-sm font-medium text-dark">Subjek</label>
                        <input id="subject" type="text" placeholder="Subjek pesan" class="rounded-xl border border-border px-4 py-3 text-sm outline-none transition-colors duration-200 focus:border-primary">
                    </div>
                    <div class="flex flex-col gap-2 sm:col-span-2">
                        <label for="message" class="text-sm font-medium text-dark">Pesan</label>
                        <textarea id="message" rows="5" placeholder="Tulis pesan Anda" class="resize-none rounded-xl border border-border px-4 py-3 text-sm outline-none transition-colors duration-200 focus:border-primary"></textarea>
                    </div>
                    <button type="submit" class="btn-primary w-fit sm:col-span-2">
                        Kirim Pesan
                        <i data-lucide="send" class="h-4 w-4"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
