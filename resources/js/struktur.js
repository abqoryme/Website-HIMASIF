// Entry khusus halaman Struktur Kepengurusan (dimuat lewat @push('head') di view).
// app.js (loader, header, AOS, dst.) tetap dimuat oleh layout.
import '../css/tentang-kami.css';
import '../css/struktur.css';

import { initStruktur } from './modules/struktur';

initStruktur();
