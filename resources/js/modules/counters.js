// =============================================================
// CapStation — Counters
// Counts [data-counter] up to data-target on first view.
// Final value is pre-rendered in HTML (no-JS / reduced-motion safe).
// =============================================================

export function initCounters({ gsap, prefersReducedMotion }) {
    const counters = gsap.utils.toArray('[data-counter]');
    if (! counters.length) return;

    // Reduced motion: leave the pre-rendered final values untouched.
    if (prefersReducedMotion) return;

    const format = (n) => Math.round(n).toLocaleString('en-US');

    counters.forEach((el) => {
        const target = parseFloat(el.dataset.target) || 0;
        const prefix = el.dataset.prefix || '';
        const suffix = el.dataset.suffix || '';
        const obj = { val: 0 };

        el.textContent = `${prefix}0${suffix}`;

        gsap.to(obj, {
            val: target,
            duration: 2,
            ease: 'power2.out',
            scrollTrigger: { trigger: el, start: 'top 90%', once: true },
            onUpdate: () => {
                el.textContent = `${prefix}${format(obj.val)}${suffix}`;
            },
        });
    });
}
