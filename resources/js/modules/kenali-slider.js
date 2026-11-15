const DRAG_RESISTANCE = 0.25; // redaman saat ditarik melewati slide pertama/terakhir
const DRAG_THRESHOLD_RATIO = 0.18;
const DRAG_THRESHOLD_MAX = 120;

const pad = (n) => String(n).padStart(2, '0');

export function initKenaliSlider() {
    const viewport = document.querySelector('.kenali-slider-viewport');
    const track = document.getElementById('kenali-slider-track');
    const prev = document.getElementById('kenali-prev');
    const next = document.getElementById('kenali-next');
    const current = document.getElementById('kenali-current-slide');
    const total = document.getElementById('kenali-total-slide');

    if (!viewport || !track || !prev || !next || !current || !total) {
        return;
    }

    const lastIndex = track.querySelectorAll('.kenali-slide').length - 1;

    let index = 0;
    let dragging = false;
    let startX = 0;
    let currentX = 0;

    const slideDistance = () => {
        const gap = Number.parseFloat(getComputedStyle(track).columnGap) || 0;

        return viewport.clientWidth + gap;
    };

    const baseOffset = () => -(index * slideDistance());

    const setOffset = (x, animate = true) => {
        track.classList.toggle('is-dragging', !animate);
        track.style.transform = `translate3d(${x}px, 0, 0)`;
    };

    const render = (animate = true) => {
        setOffset(baseOffset(), animate);
        current.textContent = pad(index + 1);
        total.textContent = pad(lastIndex + 1);
        prev.disabled = index === 0;
        next.disabled = index === lastIndex;
    };

    const go = (step) => {
        index = Math.min(Math.max(index + step, 0), lastIndex);
        render();
    };

    prev.addEventListener('click', () => go(-1));
    next.addEventListener('click', () => go(1));

    viewport.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowLeft') {
            go(-1);
        } else if (event.key === 'ArrowRight') {
            go(1);
        }
    });

    viewport.addEventListener('touchstart', (event) => {
        dragging = true;
        startX = currentX = event.touches[0].clientX;
        track.classList.add('is-dragging');
    }, { passive: true });

    viewport.addEventListener('touchmove', (event) => {
        if (!dragging) {
            return;
        }

        currentX = event.touches[0].clientX;
        let distance = currentX - startX;

        if ((index === 0 && distance > 0) || (index === lastIndex && distance < 0)) {
            distance *= DRAG_RESISTANCE;
        }

        setOffset(baseOffset() + distance, false);
    }, { passive: true });

    const endDrag = () => {
        if (!dragging) {
            return;
        }

        dragging = false;

        const distance = currentX - startX;
        const threshold = Math.min(slideDistance() * DRAG_THRESHOLD_RATIO, DRAG_THRESHOLD_MAX);

        if (distance < -threshold) {
            index = Math.min(index + 1, lastIndex);
        } else if (distance > threshold) {
            index = Math.max(index - 1, 0);
        }

        render();
    };

    viewport.addEventListener('touchend', endDrag);
    viewport.addEventListener('touchcancel', endDrag);

    window.addEventListener('resize', () => render(false));

    render(false);
}
