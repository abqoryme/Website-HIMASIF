const SHOW_DELAY_MS = 500;
const REMOVE_DELAY_MS = 750; // samakan dengan durasi transisi #himasif-loader.loader-hidden

export function initLoader() {
    const loader = document.getElementById('himasif-loader');

    if (!loader) {
        return;
    }

    const hide = () => {
        setTimeout(() => {
            loader.classList.add('loader-hidden');
            setTimeout(() => loader.remove(), REMOVE_DELAY_MS);
        }, SHOW_DELAY_MS);
    };

    if (document.readyState === 'complete') {
        hide();
    } else {
        window.addEventListener('load', hide, { once: true });
    }
}
