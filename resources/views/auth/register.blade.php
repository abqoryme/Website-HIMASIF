<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register HIMASIF</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full font-sans antialiased bg-[#061e4a] text-white">

    <div class="min-h-screen w-full flex items-center justify-center p-4 lg:p-8">
        <div
            class="w-full max-w-6xl grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-[#072559]/60 backdrop-blur-xl border border-white/10 rounded-3xl p-6 lg:p-12 shadow-2xl">

            <!-- Sisi Kiri: Informasi Branding & Fitur -->
            <div class="lg:col-span-6 space-y-8 pr-0 lg:pr-6">
                <!-- Logo & Title -->
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-blue-600 to-indigo-500 flex items-center justify-center shadow-lg shadow-blue-500/30 text-white font-bold text-xl">
                        HS
                    </div>
                    <div>
                        <h2 class="font-bold text-lg tracking-wide">HIMASIF</h2>
                        <p class="text-xs text-blue-200/70">Himpunan Mahasiswa Sistem Informasi</p>
                    </div>
                </div>

                <!-- Hero Text -->
                <div class="space-y-3">
                    <h1 class="text-3xl lg:text-4xl font-extrabold tracking-tight leading-tight">
                        Selamat Datang di <br><span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-300">HIMASIF
                        </span>
                    </h1>
                    <p class="text-sm text-blue-200/80 leading-relaxed">
                        Masuk untuk menikmati berbagai informasi dan layanan yang tersedia di HIMASIF.

                    </p>
                </div>

                <!-- Copyright Kiri -->
                <div class="text-xs text-blue-200/50 pt-2">
                    HIMASIF &copy; {{ date('Y') }} | Sistem Informasi Himpunan Mahasiswa
                </div>
            </div>

            <!-- Sisi Kanan: Card Form Login -->
            <div class="lg:col-span-6 bg-[#041635]/80 border border-white/10 rounded-2xl p-6 lg:p-8 shadow-xl relative">

                <!-- Ikon Gembok Atas Form -->
                <div class="flex justify-center mb-4">
                    <div
                        class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center shadow-lg shadow-blue-500/20 text-white">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002-2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                </div>

                <div class="text-center mb-6">
                    <h3 class="text-xl font-bold text-white">Sign up</h3>
                    <p class="text-xs text-blue-200/70 mt-1">Silakan daftar akun untuk melanjutkan ke HIMASIF.

                    </p>
                </div>

                <!-- Notifikasi Error -->
                @if ($errors->any())
                    <div
                        class="mb-5 bg-red-500/10 border border-red-500/30 text-red-300 px-4 py-3 rounded-xl text-xs space-y-1">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <!-- Form Login -->
                <form action="{{ route('login') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Email / Username -->
                    <div>
                        <label for="email" class="block text-xs font-medium text-blue-200 mb-1.5">Email /
                            Username</label>
                        <div class="relative">
                            <span
                                class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-blue-300/60">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                autofocus placeholder="Masukkan email atau username"
                                class="w-full pl-10 pr-4 py-3 bg-[#072559]/50 border border-white/10 rounded-xl text-sm text-white placeholder-blue-300/40 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-xs font-medium text-blue-200 mb-1.5">Password</label>
                        <div class="relative">
                            <span
                                class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-blue-300/60">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002-2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                            <input type="password" id="password" name="password" required
                                placeholder="Masukkan password"
                                class="w-full pl-10 pr-10 py-3 bg-[#072559]/50 border border-white/10 rounded-xl text-sm text-white placeholder-blue-300/40 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                        </div>
                    </div>

                    <!-- Ingat Saya & Lupa Password -->
                    <!--
                    <div class="flex items-center justify-between text-xs pt-1">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" id="remember" name="remember"
                                class="w-4 h-4 text-blue-600 bg-[#072559] rounded border-white/20 focus:ring-blue-500">
                            <span class="text-blue-200">Ingat saya</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-blue-300 hover:text-white transition">Lupa password?</a>
                        @endif
                    </div> -->

                    <!-- Tombol Masuk Admin -->
                    <button type="submit"
                        class="w-full mt-2 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-semibold py-3 rounded-xl shadow-lg shadow-blue-600/30 transition duration-200 flex items-center justify-center gap-2 text-sm">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        Lanjutkan
                    </button>
                </form>

                <!-- Divider -->
                <div class="flex items-center gap-4 my-5">
                    <div class="flex-1 h-px bg-white/10"></div>
                    <span class="text-[10px] tracking-widest text-blue-300/50 uppercase">atau</span>
                    <div class="flex-1 h-px bg-white/10"></div>
                </div>

                <!-- Tombol Guest & Kembali ke Website -->
                <div class="space-y-3">
                    <!-- Tombol Guest (Opsional, arahkan ke route beranda/tamu jika ada) -->
                    <a href="{{ route('home') }}"
                        class="w-full flex items-center justify-center gap-2 bg-white/5 border border-white/10 hover:bg-white/10 hover:border-blue-400/40 text-blue-100 font-medium py-2.5 rounded-xl transition duration-200 text-xs">
                        <svg class="w-4 h-4 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Lanjut sebagai Guest
                    </a>

                    <!-- Login -->
                    <a href="{{ route('login') }}"
                        class="w-full flex items-center justify-center gap-2 bg-white/5 border border-white/10 hover:bg-white/10 hover:border-blue-400/40 text-blue-100 font-medium py-2.5 rounded-xl transition duration-200 text-xs">
                        <svg class="w-4 h-4 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Login akun
                    </a>

                    <!-- Kembali ke Website -->
                    <div class="text-center pt-2">
                        <a href="{{ route('home') }}"
                            class="text-xs text-blue-300/70 hover:text-white transition flex items-center justify-center gap-1.5">
                            <span>&larr;</span> Kembali ke Website
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>
