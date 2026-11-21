/* =========================================================
   HALAMAN LOGO HIMASIF
   Dimigrasikan dari js/tentang-kami.js (hanya bagian yang dipakai halaman Logo):
   judul per kata, marquee, penjelajah makna logo (hotspot + slider), salin kode warna.
   AOS dan Font Awesome sudah dimuat app.js/app.css, jadi cadangan CDN-nya dibuang.
   ========================================================= */
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const $ = (sel, root = document) => root.querySelector(sel);
const $$ = (sel, root = document) => Array.from(root.querySelectorAll(sel));

/* Menjalankan callback sekali saat elemen terlihat */
function onVisible(elements, callback, options = { threshold: 0.35 }) {
    if (!('IntersectionObserver' in window)) {
        elements.forEach(callback);
        return;
    }
    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                callback(entry.target);
                io.unobserve(entry.target);
            }
        });
    }, options);
    elements.forEach((el) => io.observe(el));
}

/* ---------- Toast ---------- */
let toastTimer;
function toast(message) {
    let el = $('.tk-toast');
    if (!el) {
        el = document.createElement('div');
        el.className = 'tk-toast';
        el.setAttribute('role', 'status');
        el.setAttribute('aria-live', 'polite');
        document.body.appendChild(el);
    }
    el.textContent = message;
    requestAnimationFrame(() => el.classList.add('is-show'));
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => el.classList.remove('is-show'), 2600);
}

/* ---------- Judul hero muncul per kata ---------- */
function heroWords() {
    $$('[data-tk-words]').forEach((el) => {
        let i = 0;
        const wrap = (node) => {
            const span = document.createElement('span');
            span.className = 'tk-hero-word';
            span.style.animationDelay = (0.15 + i++ * 0.09).toFixed(2) + 's';
            span.appendChild(node);
            return span;
        };
        Array.from(el.childNodes).forEach((node) => {
            if (node.nodeType === Node.TEXT_NODE) {
                const frag = document.createDocumentFragment();
                node.textContent.split(/(\s+)/).forEach((part) => {
                    if (!part) return;
                    if (/^\s+$/.test(part)) frag.appendChild(document.createTextNode(' '));
                    else frag.appendChild(wrap(document.createTextNode(part)));
                });
                el.replaceChild(frag, node);
            } else if (node.nodeType === Node.ELEMENT_NODE && node.tagName !== 'BR') {
                // elemen seperti <span class="tk-text-gold"> dianggap satu kata
                const placeholder = document.createTextNode('');
                el.replaceChild(placeholder, node);
                el.replaceChild(wrap(node), placeholder);
            }
        });
    });
}

/* ---------- Marquee: gandakan isi supaya berputar mulus ---------- */
function marquee() {
    $$('.tk-marquee__track').forEach((track) => {
        track.innerHTML += track.innerHTML;
        track.lastElementChild && $$('.tk-marquee__item', track).slice(track.children.length / 2)
            .forEach((item) => item.setAttribute('aria-hidden', 'true'));
    });
}

function logoExplorer() {
    const stage = $('.tk-explorer__stage');
    const viewport = $('.tk-meaning-viewport');
    const track = $('.tk-meaning-track');
    if (!stage || !viewport || !track) return;

    const logoSrc = stage.querySelector('img').getAttribute('src');
    document.documentElement.style.setProperty('--tk-logo-src', `url("${logoSrc}")`);

    const lens = $('.tk-explorer__lens', stage);
    const hotspots = $$('.tk-hotspot', stage);
    const cards = $$('.tk-meaning-card', track);

    /* Posisi background agar titik (x%, y%) logo tepat di TENGAH lingkaran zoom.
       zoom = ukuran gambar dibanding ukuran lingkaran (sama dengan background-size). */
    const LENS_ZOOM = 4.5;  // .tk-explorer__lens  -> background-size: 450%
    const CARD_ZOOM = 4;    // .tk-meaning-card__crop -> background-size: 400%
    function centerPos(x, y, zoom) {
        const f = (v) => (((0.5 - (v / 100) * zoom) / (1 - zoom)) * 100).toFixed(2) + '%';
        return `${f(x)} ${f(y)}`;
    }

    // Potongan zoom tiap kartu mengikuti titik hotspot-nya
    cards.forEach((card, i) => {
        const spot = hotspots[i];
        const crop = $('.tk-meaning-card__crop', card);
        if (spot && crop) crop.style.backgroundPosition = centerPos(spot.dataset.x, spot.dataset.y, CARD_ZOOM);
    });

    hotspots.forEach((spot) => {
        spot.style.left = spot.dataset.x + '%';
        spot.style.top = spot.dataset.y + '%';
    });

    function focusSpot(index) {
        const spot = hotspots[index];
        if (!spot) return;
        hotspots.forEach((s) => s.classList.toggle('is-active', s === spot));
        cards.forEach((c, i) => c.classList.toggle('is-active', i === index));
        stage.classList.add('has-focus');
        lens.style.left = spot.dataset.x + '%';
        lens.style.top = spot.dataset.y + '%';
        lens.style.backgroundPosition = centerPos(spot.dataset.x, spot.dataset.y, LENS_ZOOM);
    }

    const counterNow = $('[data-tk-count-now]');
    const counterAll = $('[data-tk-count-all]');
    const btnPrev = $('.tk-meaning-prev');
    const btnNext = $('.tk-meaning-next');
    if (counterAll) counterAll.textContent = String(cards.length).padStart(2, '0');

    /* Slider buatan sendiri (tanpa Swiper) supaya hasilnya sama di versi
       mandiri maupun web asli. Kartu yang DIPILIH disimpan terpisah dari posisi
       geser, sehingga kartu terakhir (09) tetap bisa dipilih walau slider sudah mentok. */
    let selected = 0;
    let offset = 0;

    function maxOffset() {
        return Math.max(0, track.scrollWidth - viewport.clientWidth + 8);
    }
    function moveTo(px) {
        offset = Math.max(0, Math.min(maxOffset(), px));
        track.style.transform = `translate3d(${-offset}px, 0, 0)`;
    }
    function select(index) {
        selected = Math.max(0, Math.min(cards.length - 1, index));
        focusSpot(selected);
        if (counterNow) counterNow.textContent = String(selected + 1).padStart(2, '0');
        if (btnPrev) btnPrev.disabled = selected === 0;
        if (btnNext) btnNext.disabled = selected === cards.length - 1;
        moveTo(cards[selected].offsetLeft);
    }

    // Geser dengan jari / mouse
    let startX = 0, startOffset = 0, dragging = false, moved = false;
    viewport.addEventListener('pointerdown', (e) => {
        if (e.pointerType === 'mouse' && e.button !== 0) return;
        if (e.pointerType === 'mouse') e.preventDefault(); // cegah seret gambar bawaan browser
        dragging = true; moved = false;
        startX = e.clientX; startOffset = offset;
        try { viewport.setPointerCapture(e.pointerId); } catch (err) { /* abaikan */ }
    });
    viewport.addEventListener('pointermove', (e) => {
        if (!dragging) return;
        const dx = e.clientX - startX;
        if (!moved && Math.abs(dx) > 6) { moved = true; viewport.classList.add('is-dragging'); }
        if (moved) moveTo(startOffset - dx);
    });
    function endDrag(e) {
        if (!dragging) return;
        dragging = false;
        viewport.classList.remove('is-dragging');
        if (!moved) return; // klik biasa: ditangani listener klik kartu
        const dx = e.clientX - startX;
        if (Math.abs(dx) > 50) select(selected + (dx < 0 ? 1 : -1));
        else select(selected); // kembali ke posisi semula
        setTimeout(() => { moved = false; }, 0);
    }
    viewport.addEventListener('pointerup', endDrag);
    viewport.addEventListener('pointercancel', endDrag);
    // cegah klik kartu ikut terpicu setelah menggeser
    viewport.addEventListener('click', (e) => { if (moved) { e.stopPropagation(); e.preventDefault(); } }, true);
    window.addEventListener('resize', () => select(selected));

    if (btnPrev) btnPrev.addEventListener('click', () => select(selected - 1));
    if (btnNext) btnNext.addEventListener('click', () => select(selected + 1));
    hotspots.forEach((spot, i) => spot.addEventListener('click', () => select(i)));
    cards.forEach((card, i) => card.addEventListener('click', () => select(i)));

    // panah kiri/kanan keyboard saat penjelajah terlihat di layar
    document.addEventListener('keydown', (e) => {
        if (e.key !== 'ArrowLeft' && e.key !== 'ArrowRight') return;
        if (/input|textarea|select/i.test(document.activeElement.tagName)) return;
        const r = stage.getBoundingClientRect();
        if (r.bottom < 0 || r.top > window.innerHeight) return;
        select(selected + (e.key === 'ArrowRight' ? 1 : -1));
    });

    // Fokus pertama saat penjelajah terlihat
    select(0);
    stage.classList.remove('has-focus'); // lensa baru muncul saat terlihat
    onVisible([stage], () => focusSpot(selected), { threshold: 0.5 });
}

function paletteCopy() {
    $$('.tk-swatch').forEach((sw) => {
        sw.addEventListener('click', async () => {
            const hex = sw.dataset.hex;
            sw.classList.remove('is-copied');
            void sw.offsetWidth; // restart animasi
            sw.classList.add('is-copied');
            try {
                await navigator.clipboard.writeText(hex);
                toast(`Kode warna ${hex} disalin`);
            } catch (e) {
                toast(`Kode warna: ${hex}`);
            }
        });
    });
}

export function initLogo() {
    heroWords();
    marquee();
    logoExplorer();
    paletteCopy();
}
