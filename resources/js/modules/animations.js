// =============================================================
// CapStation — Animations module
// Full GSAP/ScrollTrigger choreography lands in Phase 5.
// Phase 1: safe no-op so the entry compiles and runs.
// =============================================================

export function initAnimations({ gsap, ScrollTrigger, prefersReducedMotion }) {
    if (prefersReducedMotion) {
        return; // motion disabled by user preference
    }
    // Phase 5: header state, fade-up reveals, hero car-on-road, timeline progress.
}
