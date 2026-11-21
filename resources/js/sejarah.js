// Entry khusus halaman Sejarah (dimuat lewat @push('head') di view).
// app.js (loader, header, AOS, dst.) tetap dimuat oleh layout.
import '../css/tentang-kami.css';
import '../css/sejarah.css';

import { initSejarah } from './modules/sejarah';

initSejarah();
