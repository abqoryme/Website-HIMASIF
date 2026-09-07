    document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('site-navbar');
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const dropdownTriggers = document.querySelectorAll('[data-dropdown-trigger]');

    const handleScroll = () => {
        if (window.scrollY > 12) {
            navbar.classList.add('shadow-soft', 'backdrop-blur-glass');
        } else {
            navbar.classList.remove('shadow-soft', 'backdrop-blur-glass');
        }
    };

    window.addEventListener('scroll', handleScroll);
    handleScroll();

    if (toggleBtn && mobileMenu) {
        toggleBtn.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.toggle('max-h-[640px]');
            mobileMenu.classList.toggle('max-h-0');
            toggleBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            toggleBtn.classList.toggle('is-active');
            toggleBtn.setAttribute('aria-label', isOpen ? 'Tutup menu' : 'Buka menu');

            const icon = toggleBtn.querySelector('[data-lucide]');
            if (icon) {
                icon.setAttribute('data-lucide', isOpen ? 'x' : 'menu');
                if (window.lucide) {
                    window.lucide.createIcons();
                }
            }
        });
    }

    dropdownTriggers.forEach((trigger) => {
        const panel = trigger.nextElementSibling;
        trigger.addEventListener('click', (event) => {
            if (window.innerWidth >= 1024) return;
            event.preventDefault();
            panel.classList.toggle('hidden');
        });
    });
});
