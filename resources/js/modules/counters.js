const STEP_MS = 40; // durasi per angka, sama seperti versi lama (16 -> 0,64 dtk)

// Animasi hitung naik saat #counters terlihat; reset saat container keluar lewat bawah layar.
export function initCounters() {
    const container = document.getElementById('counters');

    if (!container) {
        return;
    }

    const numbers = container.querySelectorAll('[data-count]');
    const frames = new Map();

    const stop = () => {
        frames.forEach((id) => cancelAnimationFrame(id));
        frames.clear();
    };

    const reset = () => {
        stop();
        numbers.forEach((el) => {
            el.textContent = '0';
        });
    };

    const run = () => {
        stop();

        numbers.forEach((el) => {
            const target = Number.parseInt(el.dataset.count, 10) || 0;
            const duration = target * STEP_MS;
            const start = performance.now();

            const tick = (now) => {
                const progress = duration === 0 ? 1 : Math.min((now - start) / duration, 1);
                el.textContent = String(Math.round(progress * target));

                if (progress < 1) {
                    frames.set(el, requestAnimationFrame(tick));
                } else {
                    frames.delete(el);
                }
            };

            frames.set(el, requestAnimationFrame(tick));
        });
    };

    new IntersectionObserver(([entry]) => {
        if (entry.isIntersecting) {
            run();
        } else if (entry.boundingClientRect.top > 0) {
            reset();
        }
    }, { rootMargin: '0px 0px -50px 0px' }).observe(container);
}
