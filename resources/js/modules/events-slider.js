import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

export function initEventsSlider() {
    const root = document.getElementById('event-card-wrapper');

    if (!root) {
        return;
    }

    new Swiper(root, {
        modules: [Navigation, Pagination],
        loop: true,
        spaceBetween: 40,
        pagination: {
            el: root.querySelector('.swiper-pagination'),
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: root.querySelector('.swiper-button-next'),
            prevEl: root.querySelector('.swiper-button-prev'),
        },
        breakpoints: {
            0: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1280: { slidesPerView: 3 },
        },
    });
}
