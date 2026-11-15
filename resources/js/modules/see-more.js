const LABEL_MORE = 'Lihat selengkapnya...';
const LABEL_LESS = 'Lihat lebih sedikit...';

// Event delegation: tetap jalan pada slide hasil kloning Swiper (loop).
export function initSeeMore() {
    document.addEventListener('click', (event) => {
        const button = event.target.closest('.btn-seemore');

        if (!button) {
            return;
        }

        // Tombol berada di dalam <a> kartu; jangan ikut berpindah halaman.
        event.preventDefault();
        event.stopPropagation();

        const clamped = button.previousElementSibling.classList.toggle('line-clamp-1');
        button.textContent = clamped ? LABEL_MORE : LABEL_LESS;
    });
}
