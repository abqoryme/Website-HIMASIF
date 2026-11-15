<div id="video-modal" class="custom-modal-overlay" role="dialog" aria-modal="true" aria-label="Video profil HIMASIF" aria-hidden="true">
    <div class="custom-modal-content">
        <button type="button" id="close-video" class="custom-modal-close-btn" aria-label="Tutup video">
            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="custom-modal-video-container">
            {{-- src diisi oleh resources/js/modules/video-modal.js saat modal dibuka --}}
            <iframe id="youtube-player" title="Video profil HIMASIF" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
    </div>
</div>
