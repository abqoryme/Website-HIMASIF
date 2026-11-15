const SHOW_AFTER = 300;

export function initBackToTop() {
    const button = document.getElementById('backToTop');

    if (!button) {
        return;
    }

    window.addEventListener('scroll', () => {
        button.classList.toggle('show', window.scrollY > SHOW_AFTER);
    }, { passive: true });

    button.addEventListener('click', (event) => {
        event.preventDefault();
        window.scrollTo({ top: 0 });
    });
}
