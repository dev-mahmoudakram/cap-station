// =============================================================
// CapStation — Animations module
// Phase 3 needs the scroll reveal so [data-animate] content shows.
// (Hero car-on-road, header state, parallax & timeline land in Phase 5.)
// =============================================================

export function initAnimations({ gsap, ScrollTrigger, prefersReducedMotion }) {
    const animated = gsap.utils.toArray('[data-animate]');
    if (! animated.length) return;

    // Reduced motion: show everything immediately, no transforms.
    if (prefersReducedMotion) {
        gsap.set(animated, { clearProps: 'all', opacity: 1 });
        return;
    }

    // Fade/slide each element in. Attaching the tween to a scrollTrigger
    // (rather than a bare onEnter) means elements already in the viewport
    // on load also reveal — so above-the-fold content is never stuck hidden.
    animated.forEach((el) => {
        gsap.set(el, { opacity: 0, y: 24 });

        gsap.to(el, {
            opacity: 1,
            y: 0,
            duration: 0.7,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 88%',
                once: true,
            },
        });
    });

    // Recalculate once fonts/images settle so triggers use final positions.
    window.addEventListener('load', () => ScrollTrigger.refresh());
}
