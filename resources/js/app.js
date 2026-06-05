// =============================================================
// CapStation — main JS entry
// =============================================================

// --- Self-hosted fonts (arabic + latin subsets only) ---------
import '@fontsource/tajawal/arabic-400.css';
import '@fontsource/tajawal/arabic-500.css';
import '@fontsource/tajawal/arabic-700.css';
import '@fontsource/tajawal/arabic-800.css';
import '@fontsource/tajawal/latin-400.css';
import '@fontsource/tajawal/latin-500.css';
import '@fontsource/tajawal/latin-700.css';
import '@fontsource/tajawal/latin-800.css';
import '@fontsource/inter/latin-400.css';
import '@fontsource/inter/latin-500.css';
import '@fontsource/inter/latin-600.css';
import '@fontsource/inter/latin-700.css';

// --- Bootstrap JS (dropdowns, offcanvas, collapse, accordion) ---
import 'bootstrap';

// --- GSAP (registered once; used by modules in Phase 5) ---------
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

// --- App modules ------------------------------------------------
import { initAnimations } from './modules/animations.js';
import { initCounters } from './modules/counters.js';

const prefersReducedMotion = window.matchMedia(
    '(prefers-reduced-motion: reduce)'
).matches;

document.addEventListener('DOMContentLoaded', () => {
    document.documentElement.classList.add('js-ready');

    initAnimations({ gsap, ScrollTrigger, prefersReducedMotion });
    initCounters({ gsap, ScrollTrigger, prefersReducedMotion });
});
