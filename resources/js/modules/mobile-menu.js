const OPEN_CLASS = 'mobile-menu-visible';
const SLIDE_MS = 500;

// Pengganti jQuery slideToggle().
function slideToggle(el) {
    if (el.getAnimations().length > 0) {
        return;
    }

    const opening = getComputedStyle(el).display === 'none';

    if (opening) {
        el.style.display = 'block';
    }

    const height = `${el.scrollHeight}px`;
    el.style.overflow = 'hidden';

    el.animate(
        { height: opening ? ['0px', height] : [height, '0px'] },
        { duration: SLIDE_MS, easing: 'ease' },
    ).onfinish = () => {
        el.style.overflow = '';

        if (!opening) {
            el.style.display = 'none';
        }
    };
}

export function initMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    const toggler = document.querySelector('.mobile-nav-toggler');

    if (!menu || !toggler) {
        return;
    }

    const setOpen = (open) => {
        document.body.classList.toggle(OPEN_CLASS, open);
        toggler.setAttribute('aria-expanded', String(open));
    };

    toggler.addEventListener('click', () => setOpen(true));

    menu.addEventListener('click', (event) => {
        if (event.target.closest('.menu-backdrop, .close-btn')) {
            setOpen(false);

            return;
        }

        const button = event.target.closest('.dropdown-btn');

        if (button) {
            button.classList.toggle('open');
            button.setAttribute('aria-expanded', String(button.classList.contains('open')));
            slideToggle(button.previousElementSibling);
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            setOpen(false);
        }
    });
}
