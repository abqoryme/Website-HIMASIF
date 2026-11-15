import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // Entry per halaman (CSS-nya ikut lewat import di dalam JS).
                'resources/js/struktur.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        // 127.0.0.1 (bukan "localhost") menghindari masalah IPv6 di Termux/Android.
        host: '127.0.0.1',
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
