document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('site-navbar');
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const dropdownTriggers = document.querySelectorAll('[data-dropdown-trigger]');

    const handleScroll = () => {
        if (window.scrollY > 12) {
            navbar.classList.add('shadow-soft', 'bg-dark/95', 'backdrop-blur-glass');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.remove('shadow-soft', 'bg-dark/95', 'backdrop-blur-glass');
            navbar.classList.add('bg-transparent');
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
