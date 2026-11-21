// Entry khusus halaman Logo (dimuat lewat @push('head') di view).
// app.js (loader, header, AOS, dst.) tetap dimuat oleh layout.
import '../css/tentang-kami.css';

import { initLogo } from './modules/logo';

initLogo();
