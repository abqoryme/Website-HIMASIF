import AOS from 'aos';

import { initLoader } from './modules/loader';
import { initHeader } from './modules/header';
import { initMobileMenu } from './modules/mobile-menu';
import { initBackToTop } from './modules/back-to-top';
import { initCounters } from './modules/counters';
import { initEventsSlider } from './modules/events-slider';
import { initSeeMore } from './modules/see-more';
import { initVideoModal } from './modules/video-modal';
import { initKenaliSlider } from './modules/kenali-slider';
import { initContentProtection } from './modules/content-protection';

initLoader();
AOS.init();

initHeader();
initMobileMenu();
initBackToTop();
initCounters();
initEventsSlider();
initSeeMore();
initVideoModal();
initKenaliSlider();

// Opsional: hapus baris ini (dan modulnya) untuk mengaktifkan kembali klik kanan/inspect.
initContentProtection();
