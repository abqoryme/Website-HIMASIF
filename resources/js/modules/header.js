// Perilaku header saat scroll:
//   <= 200px      : transparan (absolute)
//   200px - 350px : menghilang ke atas
//   > 350px       : melayang (fixed, glassy)
const HIDE_FROM = 200;
const FIXED_FROM = 350;

export function initHeader() {
    const header = document.getElementById('main-header');

    if (!header) {
        return;
    }

    const update = () => {
        const y = window.scrollY;

        if (y <= HIDE_FROM) {
            header.classList.remove('header-fixed', 'header-hidden');
            header.classList.add('header-absolute');
        } else if (y <= FIXED_FROM) {
            header.classList.add('header-hidden');
        } else {
            header.classList.remove('header-hidden', 'header-absolute');
            header.classList.add('header-fixed');
        }
    };

    let ticking = false;

    window.addEventListener('scroll', () => {
        if (ticking) {
            return;
        }

        ticking = true;
        requestAnimationFrame(() => {
            update();
            ticking = false;
        });
    }, { passive: true });

    update();
}
