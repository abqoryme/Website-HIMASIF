<footer class="bg-dark text-white">
    <div class="container-himasif grid grid-cols-1 gap-10 py-16 sm:grid-cols-2 lg:grid-cols-5">
        <div class="flex flex-col gap-4 lg:col-span-1">
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <img src="https://placehold.co/48x48/2563EB/FFFFFF?text=HS" alt="Logo HIMASIF" class="h-11 w-11 rounded-xl">
                <span class="flex flex-col leading-none">
                    <span class="text-lg font-extrabold tracking-wide">HIMASIF</span>
                    <span class="text-[10px] uppercase tracking-[0.18em] text-white/50">Himpunan Sistem Informasi</span>
                </span>
            </a>
            <p class="text-sm leading-relaxed text-white/70">
                HIMASIF adalah wadah mahasiswa Sistem Informasi untuk berkolaborasi, berinovasi, dan memberikan dampak positif bagi mahasiswa dan masyarakat.
            </p>
            <div class="flex items-center gap-3">
                <a href="#" class="social-icon" aria-label="Instagram"><i data-lucide="instagram" class="h-4 w-4"></i></a>
                <a href="#" class="social-icon" aria-label="Youtube"><i data-lucide="youtube" class="h-4 w-4"></i></a>
                <a href="#" class="social-icon" aria-label="LinkedIn"><i data-lucide="linkedin" class="h-4 w-4"></i></a>
                <a href="#" class="social-icon" aria-label="Medium"><i data-lucide="pen-line" class="h-4 w-4"></i></a>
            </div>
        </div>

        <div class="flex flex-col gap-3">
            <h4 class="text-sm font-semibold uppercase tracking-wide text-white">Navigasi</h4>
            <a href="{{ url('/') }}" class="footer-link">Beranda</a>
            <a href="{{ url('/about') }}" class="footer-link">Tentang Kami</a>
            <a href="{{ url('/program') }}" class="footer-link">Program</a>
            <a href="{{ url('/news') }}" class="footer-link">Berita</a>
            <a href="{{ url('/gallery') }}" class="footer-link">Galeri</a>
            <a href="{{ url('/document') }}" class="footer-link">Dokumen</a>
            <a href="{{ url('/contact') }}" class="footer-link">Kontak</a>
        </div>

        <div class="flex flex-col gap-3">
            <h4 class="text-sm font-semibold uppercase tracking-wide text-white">Program</h4>
            <a href="{{ url('/program') }}" class="footer-link">HIMASIF Insight</a>
            <a href="{{ url('/program') }}" class="footer-link">HIMASIF CodeLab</a>
            <a href="{{ url('/program') }}" class="footer-link">HIMASIF Care</a>
            <a href="{{ url('/program') }}" class="footer-link">HIMASIF Event</a>
        </div>

        <div class="flex flex-col gap-3">
            <h4 class="text-sm font-semibold uppercase tracking-wide text-white">Dokumen</h4>
            <a href="{{ url('/document') }}" class="footer-link">AD/ART</a>
            <a href="{{ url('/document') }}" class="footer-link">GBHO</a>
            <a href="{{ url('/document') }}" class="footer-link">Panduan Organisasi</a>
            <a href="{{ url('/document') }}" class="footer-link">LPJ Kegiatan</a>
            <a href="{{ url('/document') }}" class="footer-link">Proposal Kegiatan</a>
        </div>

        <div class="flex flex-col gap-3">
            <h4 class="text-sm font-semibold uppercase tracking-wide text-white">Kontak Kami</h4>
            <div class="flex items-start gap-3 text-sm text-white/70">
                <i data-lucide="map-pin" class="mt-0.5 h-4 w-4 shrink-0 text-primary"></i>
                <span>Fakultas Ilmu Komputer, Universitas XXX, Jl. Raya Kampus No.123, Kota</span>
            </div>
            <div class="flex items-center gap-3 text-sm text-white/70">
                <i data-lucide="mail" class="h-4 w-4 shrink-0 text-primary"></i>
                <span>himasif@xxx.ac.id</span>
            </div>
            <div class="flex items-center gap-3 text-sm text-white/70">
                <i data-lucide="phone" class="h-4 w-4 shrink-0 text-primary"></i>
                <span>0812-3456-7890</span>
            </div>
        </div>
    </div>

    <div class="border-t border-white/10 py-6">
        <p class="container-himasif text-center text-xs text-white/50">
            &copy; {{ date('Y') }} HIMASIF - Himpunan Sistem Informasi. All rights reserved.
        </p>
    </div>
</footer>
