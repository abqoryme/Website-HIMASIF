/* =========================================================
   HALAMAN SEJARAH HIMASIF (dimigrasikan dari js/sejarah.js + bagian js/tentang-kami.js yang dipakai halaman ini)
   - Pohon sirkuit di hero "tumbuh" (garis tergambar) saat terlihat
   - Timeline perjalanan muncul berurutan
   - Slider "Jejak Kepengurusan": tombol, seret mouse, progress bar
   ========================================================= */
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const $ = (sel, root = document) => root.querySelector(sel);
const $$ = (sel, root = document) => Array.from(root.querySelectorAll(sel));

/* ---------- Helper (disalin dari tentang-kami.js lama; modul ini mandiri) ---------- */
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

function tilt() {
    if (reduceMotion || !window.matchMedia('(pointer: fine)').matches) return;
    $$('[data-tk-tilt]').forEach((card) => {
        card.addEventListener('mousemove', (e) => {
            const r = card.getBoundingClientRect();
            const x = (e.clientX - r.left) / r.width - 0.5;
            const y = (e.clientY - r.top) / r.height - 0.5;
            card.style.transform = `perspective(800px) rotateX(${(-y * 8).toFixed(2)}deg) rotateY(${(x * 8).toFixed(2)}deg) translateY(-4px)`;
        });
        card.addEventListener('mouseleave', () => { card.style.transform = ''; });
    });
}

/* ---------- Halaman Sejarah ---------- */
function initSejarahPage() {
    // Pohon sirkuit: hitung panjang tiap garis agar animasi "menggambar" pas
    const tree = $('.tk-sj-tree');
    if (tree) {
        $$('.tk-sj-trace', tree).forEach((path) => {
            try { path.style.setProperty('--len', Math.ceil(path.getTotalLength()) + 1); } catch (e) { /* abaikan */ }
        });
        onVisible([tree], (el) => el.classList.add('is-drawn'), { threshold: 0.2 });
    }

    // Timeline perjalanan
    const road = $('.tk-sj-road');
    if (road) {
        $$('.tk-sj-step', road).forEach((st, i) => st.style.setProperty('--i', i));
        onVisible([road], (el) => el.classList.add('is-visible'), { threshold: 0.25 });
    }

    // Slider kepengurusan (scroll native + tombol + seret mouse + progress bar)
    const track = $('.tk-sj-cab__track');
    if (!track) return;
    const bar = $('.tk-sj-cab__bar span');
    const prev = $('.tk-sj-cab__prev');
    const next = $('.tk-sj-cab__next');
    const step = () => {
        const card = $('.tk-sj-cab__card', track);
        return card ? card.offsetWidth + 18 : 280;
    };
    function update() {
        const max = track.scrollWidth - track.clientWidth;
        const ratio = track.clientWidth / track.scrollWidth;
        const pos = max > 0 ? track.scrollLeft / max : 0;
        if (bar) {
            bar.style.width = Math.max(12, ratio * 100) + '%';
            bar.style.transform = `translateX(${pos * (100 / Math.max(ratio, 0.12) - 100)}%)`;
        }
        if (prev) prev.disabled = track.scrollLeft <= 2;
        if (next) next.disabled = track.scrollLeft >= max - 2;
    }
    track.addEventListener('scroll', () => requestAnimationFrame(update), { passive: true });
    window.addEventListener('resize', update);
    if (prev) prev.addEventListener('click', () => track.scrollBy({ left: -step(), behavior: reduceMotion ? 'auto' : 'smooth' }));
    if (next) next.addEventListener('click', () => track.scrollBy({ left: step(), behavior: reduceMotion ? 'auto' : 'smooth' }));

    // seret dengan mouse (di HP sudah bisa digeser dengan jari)
    let down = false, sx = 0, sl = 0, moved = false;
    track.addEventListener('pointerdown', (e) => {
        if (e.pointerType !== 'mouse' || e.button !== 0) return;
        down = true; moved = false; sx = e.clientX; sl = track.scrollLeft;
    });
    window.addEventListener('pointermove', (e) => {
        if (!down) return;
        const dx = e.clientX - sx;
        if (!moved && Math.abs(dx) > 5) { moved = true; track.classList.add('is-dragging'); }
        if (moved) { e.preventDefault(); track.scrollLeft = sl - dx; }
    });
    window.addEventListener('pointerup', () => {
        if (!down) return;
        down = false;
        track.classList.remove('is-dragging');
    });
    track.addEventListener('click', (e) => { if (moved) { e.preventDefault(); e.stopPropagation(); moved = false; } }, true);
    track.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight') { e.preventDefault(); track.scrollBy({ left: step(), behavior: 'smooth' }); }
        if (e.key === 'ArrowLeft') { e.preventDefault(); track.scrollBy({ left: -step(), behavior: 'smooth' }); }
    });
    update();
}

export function initSejarah() {
    heroWords();
    marquee();
    tilt();
    initSejarahPage();
}
