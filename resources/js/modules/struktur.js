/* =========================================================
   HALAMAN STRUKTUR KEPENGURUSAN HIMASIF — file khusus Struktur
   - Carousel 3D unit (BPH + departemen): tombol, titik, geser, otomatis
   - Tombol "Pilih Angkatan": ganti periode kepengurusan
   - Detail unit: pemimpin, anggota, program kerja
   Data: window.HIMASIF_STRUKTUR_PERIODE, diisi oleh view pages/struktur.blade.php
   dari config/struktur.php (lewat StrukturController).
   ========================================================= */
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const $ = (sel, root = document) => root.querySelector(sel);
const $$ = (sel, root = document) => Array.from(root.querySelectorAll(sel));

/* =====================================================
   HALAMAN STRUKTUR KEPENGURUSAN
   Data: config/struktur.php
   - window.HIMASIF_STRUKTUR_PERIODE = [{ id, label, unit: [...] }, ...]  (per angkatan/periode)
   - (format lama window.HIMASIF_STRUKTUR = [...] tetap didukung)
   ===================================================== */
function initStrukturPage() {
    const stageEl = $('.tk-so-stage');
    const detail = $('.tk-so-detail');
    if (!stageEl || !detail) return;

    let periods = window.HIMASIF_STRUKTUR_PERIODE;
    if (!Array.isArray(periods) || !periods.length) {
        periods = Array.isArray(window.HIMASIF_STRUKTUR) ? [{ id: 'sekarang', label: 'Sekarang', unit: window.HIMASIF_STRUKTUR }] : [];
    }
    periods = periods.filter((p) => Array.isArray(p.unit) && p.unit.length);
    if (!periods.length) return;

    const esc = (v) => String(v == null ? '' : v).replace(/[&<>"']/g, (c) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]));
    const initials = (n) => String(n || '?').trim().split(/\s+/).slice(0, 2).map((w) => w[0]).join('').toUpperCase();
    // kata pertama nama diwarnai emas (gaya HIMASIF)
    const goldFirst = (n) => {
        const parts = String(n || '').trim().split(/\s+/);
        return `<b>${esc(parts[0] || '')}</b> ${esc(parts.slice(1).join(' '))}`;
    };
    const avatar = (p, cls = '') =>
        `<div class="tk-so-avatar ${cls}" data-initials="${esc(initials(p.nama))}"><span>${esc(initials(p.nama))}</span>` +
        (p.foto ? `<img src="${esc(p.foto)}" alt="${esc(p.nama)}" loading="lazy">` : '') + '</div>';
    const checks = (list, two) => list && list.length
        ? `<ul class="tk-so-checks${two ? ' is-2col' : ''}">` + list.map((r) => {
            const w = String(r).split(' ');
            return `<li><i class="fa-regular fa-circle-check" aria-hidden="true"></i><span><b>${esc(w[0])}</b> ${esc(w.slice(1).join(' '))}</span></li>`;
        }).join('') + '</ul>'
        : '';
    const countOf = (u) => (u.pemimpin || []).length + (u.kelompok || []).reduce((n, g) => n + (g.anggota || []).length, 0);

    const dotsWrap = $('.tk-so-dots');
    const periodWrap = $('.tk-so-period');
    const periodLabel = $('.tk-so-periode');
    let pIdx = 0;
    let data = periods[0].unit;
    let N = data.length;
    let cardEls = [];
    let dotEls = [];
    let current = -1;

    /* ---------- Kartu carousel ---------- */
    function buildCarousel() {
        stageEl.innerHTML = data.map((u, i) => `
        <button type="button" class="tk-so-card" role="option" data-i="${i}" style="--tk-unit:${esc(u.warna || '#5358DD')}" aria-label="${esc(u.nama)}">
            <div class="tk-so-card__bg">${u.foto ? `<img src="${esc(u.foto)}" alt="" loading="lazy">` : ''}</div>
            ${u.foto ? '' : `<i class="fas ${esc(u.icon || 'fa-users')} tk-so-card__icon" aria-hidden="true"></i>`}
            <div class="tk-so-card__shade"></div>
            <span class="tk-so-card__chip">${esc(u.label)}</span>
            <span class="tk-so-card__count"><i class="fas fa-user-group" aria-hidden="true"></i>${countOf(u)}</span>
            <div class="tk-so-card__body"><h3>${esc(u.nama)}</h3><p>${esc(u.tagline)}</p></div>
        </button>`).join('');
        dotsWrap.innerHTML = data.map((u, i) => `<button type="button" class="tk-so-dot" role="tab" data-i="${i}" aria-label="${esc(u.nama)}"></button>`).join('');
        cardEls = $$('.tk-so-card', stageEl);
        dotEls = $$('.tk-so-dot', dotsWrap);
        N = data.length;
        $$('.tk-so-card__bg img', stageEl).forEach((img) => img.addEventListener('error', () => img.remove()));
    }

    function layout() {
        if (!cardEls.length) return;
        const w = cardEls[0].offsetWidth;
        const small = window.innerWidth < 768;
        const gap = small ? w * 0.62 : w * 0.78;
        cardEls.forEach((el, i) => {
            let d = i - current;
            if (d > N / 2) d -= N;          // putaran melingkar
            if (d < -N / 2) d += N;
            const a = Math.abs(d);
            const x = d * gap;
            const z = -a * 160;
            const rot = -d * 28;
            const sc = a === 0 ? 1 : 0.84;
            el.style.transform = `translateX(${x}px) translateZ(${z}px) rotateY(${rot}deg) scale(${sc})`;
            el.style.opacity = a > 2 ? 0 : a === 2 ? 0.35 : a === 1 ? 0.75 : 1;
            el.style.zIndex = 10 - a;
            el.style.filter = a === 0 ? 'none' : 'brightness(0.8)';
            el.style.pointerEvents = a > 1 ? 'none' : '';
            el.classList.toggle('is-active', a === 0);
            el.setAttribute('aria-selected', a === 0 ? 'true' : 'false');
            el.tabIndex = a === 0 ? 0 : -1;
        });
        dotEls.forEach((d, i) => {
            d.classList.toggle('is-active', i === current);
            d.setAttribute('aria-selected', i === current ? 'true' : 'false');
        });
    }

    /* ---------- Detail ---------- */
    const titleEl = $('.tk-so-title');
    function renderDetail(u) {
        let k = 0;
        const idx = () => `style="--i:${k++}"`;
        let html = '';
        (u.pemimpin || []).forEach((p, j) => {
            html += `
            <article class="tk-card tk-so-lead tk-so-in${j % 2 ? ' is-reverse' : ''}" style="--tk-unit:${esc(u.warna)};--i:${k++}" data-tk-tilt-soft>
                <div class="tk-so-lead__photo">
                    ${avatar(p)}
                    <div class="tk-so-tag"><strong>${goldFirst(p.nama)}</strong><span>${esc(p.jabatan)}</span></div>
                </div>
                <div class="tk-so-lead__body">
                    <h3>${esc(p.jabatan)}</h3>
                    <p>${esc(p.deskripsi)}</p>
                    ${p.peran && p.peran.length ? `<h4>Peran ${esc(p.jabatan)}, yaitu:</h4>` : ''}
                    ${checks(p.peran, true)}
                </div>
            </article>`;
        });
        (u.kelompok || []).forEach((g) => {
            html += `
            <div class="tk-so-group">
                <span class="tk-so-group__label tk-so-in" ${idx()}>${esc(g.label)}</span>
                <h3 class="tk-so-in" ${idx()}>${esc(g.judul)}</h3>
                <div class="tk-so-members">
                    ${(g.anggota || []).map((m) => `
                    <div class="tk-card tk-so-member tk-so-in" style="--tk-unit:${esc(u.warna)};--i:${k++}">
                        ${avatar(m)}
                        <div class="tk-so-member__info"><h4>${goldFirst(m.nama)}</h4><p>${esc(m.jabatan)}</p></div>
                    </div>`).join('')}
                </div>
                ${g.deskripsi ? `<p class="tk-so-group__desc tk-so-in" ${idx()}>${esc(g.deskripsi)}</p>` : ''}
                ${g.peran && g.peran.length ? `<div class="tk-so-in" ${idx()}><h4 class="tk-so-group__peran">Peran ${esc(g.judul)}, yaitu:</h4>${checks(g.peran)}</div>` : ''}
            </div>`;
        });
        if (u.proker && u.proker.length) {
            const total = u.proker.length;
            html += `
            <div class="tk-so-proker">
                <div class="tk-so-proker__head tk-so-in" ${idx()}>
                    <span class="tk-so-group__label">Program Kerja</span>
                    <h3>${esc(u.nama)}</h3>
                </div>
                <div class="tk-so-pk-grid">
                    ${u.proker.map((pk, j) => `
                    <article class="tk-card tk-so-pk tk-so-in" ${idx()}>
                        <div class="tk-so-pk__top"><span class="tk-so-pk__num">PROGRAM KERJA ${j + 1}/${total}</span><span class="tk-so-pk__chip">${esc(u.label === 'BPH' ? 'BPH' : u.nama.replace(/^Departemen\s+/i, 'Dept. '))}</span></div>
                        <h4>${esc(pk.nama)}</h4>
                        <p class="tk-so-pk__pj">Penanggung Jawab: <b>${esc(pk.pj || '-')}</b></p>
                        <p class="tk-so-pk__desc">${esc(pk.deskripsi)}</p>
                        <button type="button" class="tk-so-pk__more" aria-expanded="false">Lihat selengkapnya<i class="fas fa-chevron-down" aria-hidden="true"></i></button>
                    </article>`).join('')}
                </div>
            </div>`;
        }
        // Banner saat melihat periode lama
        if (pIdx > 0) {
            html = `
            <div class="tk-so-past tk-so-in" style="--i:0">
                <i class="fas fa-clock-rotate-left" aria-hidden="true"></i>
                <span>Kamu sedang melihat kepengurusan <b>periode ${esc(periods[pIdx].label)}</b>.</span>
                <button type="button" class="tk-so-past__btn">Lihat periode terbaru</button>
            </div>` + html;
        }
        detail.innerHTML = html;
        const back = $('.tk-so-past__btn', detail);
        if (back) back.addEventListener('click', () => setPeriod(0, { scroll: true }));

        // foto gagal dimuat → tampilkan inisial
        $$('.tk-so-avatar img', detail).forEach((img) => {
            img.addEventListener('error', () => img.remove());
        });
        // tombol "Lihat selengkapnya" hanya bila teks memang terpotong
        $$('.tk-so-pk', detail).forEach((card) => {
            const d = $('.tk-so-pk__desc', card);
            const btn = $('.tk-so-pk__more', card);
            requestAnimationFrame(() => { if (d.scrollHeight <= d.clientHeight + 2) btn.style.display = 'none'; });
            btn.addEventListener('click', () => {
                const open = card.classList.toggle('is-open');
                btn.setAttribute('aria-expanded', open ? 'true' : 'false');
                btn.firstChild.textContent = open ? 'Tutup' : 'Lihat selengkapnya';
            });
        });
        bindTilt(detail);
    }


    function updateUrl() {
        if (!history.replaceState) return;
        const url = new URL(location.href);
        if (pIdx > 0) url.searchParams.set('periode', periods[pIdx].id);
        else url.searchParams.delete('periode');
        url.hash = data[current] ? data[current].id : '';
        history.replaceState(null, '', url.toString());
    }

    function swapDetail(u, instant) {
        if (titleEl) titleEl.textContent = u.nama;
        if (instant || reduceMotion) {
            renderDetail(u);
            detail.classList.remove('is-leaving', 'is-entering');
            void detail.offsetWidth;
            detail.classList.add('is-entering');
            return;
        }
        detail.classList.remove('is-entering');
        detail.classList.add('is-leaving');
        setTimeout(() => {
            renderDetail(u);
            detail.classList.remove('is-leaving');
            void detail.offsetWidth;
            detail.classList.add('is-entering');
        }, 320);
    }

    function select(i, opts = {}) {
        i = ((i % N) + N) % N;
        if (i === current && !opts.force) return;
        const first = current === -1;
        current = i;
        layout();
        if (!opts.keepUrl) updateUrl();
        swapDetail(data[i], first);
    }

    /* ---------- Pilih Angkatan / Periode ---------- */
    function renderPeriodUI() {
        if (periodLabel) periodLabel.textContent = 'Periode ' + periods[pIdx].label;
        if (!periodWrap) return;
        if (periods.length < 2) { periodWrap.hidden = true; return; }
        periodWrap.hidden = false;
        const btnText = $('.tk-so-period__value', periodWrap);
        if (btnText) btnText.textContent = periods[pIdx].label;
        const menu = $('.tk-so-period__menu', periodWrap);
        menu.innerHTML = periods.map((p, i) => `
            <li role="option" aria-selected="${i === pIdx}">
                <button type="button" data-p="${i}" class="${i === pIdx ? 'is-active' : ''}">
                    <span>Periode ${esc(p.label)}</span>
                    ${i === 0 ? '<em>Terbaru</em>' : ''}
                </button>
            </li>`).join('');
    }

    function setPeriod(i, opts = {}) {
        if (i < 0 || i >= periods.length) return;
        const keepId = data[current] ? data[current].id : null;
        pIdx = i;
        data = periods[i].unit;
        buildCarousel();
        const same = keepId ? data.findIndex((u) => u.id === keepId) : -1;
        current = -1;
        renderPeriodUI();
        stageEl.classList.remove('is-swapping');
        void stageEl.offsetWidth;
        stageEl.classList.add('is-swapping');
        select(same >= 0 ? same : 0, { force: true, keepUrl: opts.keepUrl });
        if (opts.scroll) $('.tk-so-hero').scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth' });
    }

    if (periodWrap) {
        const btn = $('.tk-so-period__btn', periodWrap);
        const closeMenu = () => { periodWrap.classList.remove('is-open'); btn.setAttribute('aria-expanded', 'false'); };
        btn.addEventListener('click', () => {
            const open = periodWrap.classList.toggle('is-open');
            btn.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
        periodWrap.addEventListener('click', (e) => {
            const b = e.target.closest('[data-p]');
            if (!b) return;
            closeMenu();
            stopAuto();
            setPeriod(+b.dataset.p);
        });
        document.addEventListener('click', (e) => { if (!periodWrap.contains(e.target)) closeMenu(); });
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeMenu(); });
    }

    // klik kartu / titik / tombol (event delegation: tetap jalan setelah ganti periode)
    stageEl.addEventListener('click', (e) => {
        const card = e.target.closest('.tk-so-card');
        if (!card || dragMoved) return;
        const i = +card.dataset.i;
        if (i === current) $('#kenali').scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth' });
        else { select(i); stopAuto(); }
    });
    dotsWrap.addEventListener('click', (e) => {
        const d = e.target.closest('.tk-so-dot');
        if (d) { select(+d.dataset.i); stopAuto(); }
    });
    $('.tk-so-prev').addEventListener('click', () => { select(current - 1); stopAuto(); });
    $('.tk-so-next').addEventListener('click', () => { select(current + 1); stopAuto(); });
    stageEl.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') { select(current - 1); stopAuto(); cardEls[current].focus(); }
        if (e.key === 'ArrowRight') { select(current + 1); stopAuto(); cardEls[current].focus(); }
    });

    // geser (swipe / drag)
    let sx = 0, dragging = false, dragMoved = false;
    stageEl.addEventListener('pointerdown', (e) => {
        if (e.pointerType === 'mouse' && e.button !== 0) return;
        dragging = true; dragMoved = false; sx = e.clientX;
    });
    stageEl.addEventListener('pointermove', (e) => {
        if (dragging && Math.abs(e.clientX - sx) > 8) dragMoved = true;
    });
    const endDrag = (e) => {
        if (!dragging) return;
        dragging = false;
        const dx = e.clientX - sx;
        if (dragMoved && Math.abs(dx) > 40) { select(current + (dx < 0 ? 1 : -1)); stopAuto(); }
        setTimeout(() => { dragMoved = false; }, 0);
    };
    stageEl.addEventListener('pointerup', endDrag);
    stageEl.addEventListener('pointercancel', endDrag);
    stageEl.addEventListener('pointerleave', endDrag);

    // putar otomatis tiap 6 detik, berhenti saat disentuh/diarahkan kursor
    let timer = null;
    function startAuto() {
        if (reduceMotion || timer) return;
        timer = setInterval(() => select(current + 1, { keepUrl: true }), 6000);
    }
    function stopAuto() { clearInterval(timer); timer = null; autoOff = true; }
    let autoOff = false;
    const carousel = $('.tk-so-carousel');
    carousel.addEventListener('mouseenter', () => { clearInterval(timer); timer = null; });
    carousel.addEventListener('mouseleave', () => { if (!autoOff) startAuto(); });
    // hanya berputar saat hero terlihat
    if ('IntersectionObserver' in window) {
        new IntersectionObserver(([en]) => {
            if (en.isIntersecting && !autoOff) startAuto(); else { clearInterval(timer); timer = null; }
        }, { threshold: 0.4 }).observe(carousel);
    }

    window.addEventListener('resize', layout);

    // Buka dari alamat, mis. struktur-organisasi/?periode=2023-2024#medkraf
    const params = new URLSearchParams(location.search);
    const pFromUrl = periods.findIndex((p) => p.id === params.get('periode'));
    pIdx = pFromUrl >= 0 ? pFromUrl : 0;
    data = periods[pIdx].unit;
    buildCarousel();
    renderPeriodUI();
    const fromHash = data.findIndex((u) => '#' + u.id === location.hash);
    select(fromHash >= 0 ? fromHash : 0, { keepUrl: true });
    if (fromHash >= 0 || pFromUrl > 0) autoOff = true;
    window.addEventListener('hashchange', () => {
        const i = data.findIndex((u) => '#' + u.id === location.hash);
        if (i >= 0) { select(i, { keepUrl: true }); stopAuto(); }
    });
}

/* Kartu miring halus untuk elemen yang dibuat lewat JS */
function bindTilt(root) {
    if (reduceMotion || !window.matchMedia('(pointer: fine)').matches) return;
    $$('[data-tk-tilt-soft]', root).forEach((card) => {
        card.addEventListener('mousemove', (e) => {
            const r = card.getBoundingClientRect();
            const x = (e.clientX - r.left) / r.width - 0.5;
            const y = (e.clientY - r.top) / r.height - 0.5;
            card.style.transform = `perspective(1000px) rotateX(${(-y * 4).toFixed(2)}deg) rotateY(${(x * 4).toFixed(2)}deg)`;
        });
        card.addEventListener('mouseleave', () => { card.style.transform = ''; });
    });
}

/* Judul hero muncul per kata (dulu ada di js/tentang-kami.js).
   Teks biasa dipecah per kata; elemen anak (mis. <span class="tk-text-gold">) dihitung satu kata. */
function splitHeroWords() {
    $$('[data-tk-words]').forEach((el) => {
        if (el.dataset.tkWordsDone) return;
        el.dataset.tkWordsDone = '1';
        let i = 0;
        const frag = document.createDocumentFragment();
        Array.from(el.childNodes).forEach((node) => {
            if (node.nodeType === Node.TEXT_NODE) {
                node.textContent.split(/\s+/).filter(Boolean).forEach((w) => {
                    const s = document.createElement('span');
                    s.className = 'tk-hero-word';
                    s.style.animationDelay = `${i++ * 120}ms`;
                    s.textContent = w;
                    frag.append(s, ' ');
                });
            } else if (node.nodeType === Node.ELEMENT_NODE) {
                node.classList.add('tk-hero-word');
                node.style.animationDelay = `${i++ * 120}ms`;
                frag.append(node, ' ');
            }
        });
        el.replaceChildren(frag);
    });
}

export function initStruktur() {
    splitHeroWords();
    initStrukturPage();
}
