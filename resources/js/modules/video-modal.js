export function initVideoModal() {
    const trigger = document.getElementById('open-video');
    const modal = document.getElementById('video-modal');
    const closeButton = document.getElementById('close-video');
    const player = document.getElementById('youtube-player');

    if (!trigger || !modal || !closeButton || !player) {
        return;
    }

    const setOpen = (open) => {
        // Kosongkan src saat ditutup agar video berhenti.
        player.src = open ? trigger.dataset.videoUrl : 'about:blank';
        modal.classList.toggle('active', open);
        modal.setAttribute('aria-hidden', String(!open));
        document.body.classList.toggle('modal-open', open);
        document.body.style.overflow = open ? 'hidden' : '';
    };

    trigger.addEventListener('click', () => setOpen(true));
    closeButton.addEventListener('click', () => setOpen(false));

    // Klik di luar area video.
    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            setOpen(false);
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && modal.classList.contains('active')) {
            setOpen(false);
        }
    });
}
