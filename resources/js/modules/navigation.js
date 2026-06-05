// =============================================================
// CapStation — In-page navigation
// Smooth-scrolls anchor links WITHOUT writing the hash to the URL,
// closes the mobile offcanvas, and moves focus for accessibility.
// =============================================================

export function initSmoothScroll({ prefersReducedMotion, bootstrap }) {
    document.addEventListener('click', (event) => {
        const link = event.target.closest('a[href^="#"]');
        if (! link) return;

        const href = link.getAttribute('href');

        // Bare "#" (placeholder links) — swallow so it doesn't dirty the URL.
        if (href === '#') {
            event.preventDefault();
            return;
        }

        const id = decodeURIComponent(href.slice(1));
        const target = document.getElementById(id);
        if (! target) return; // let the browser handle unknown anchors

        event.preventDefault();

        // Close the mobile offcanvas menu if the link lives inside it.
        const offcanvasEl = link.closest('.offcanvas');
        if (offcanvasEl && bootstrap?.Offcanvas) {
            bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl).hide();
        }

        target.scrollIntoView({
            behavior: prefersReducedMotion ? 'auto' : 'smooth',
            block: 'start',
        });

        // Move focus to the section (a11y) without re-scrolling.
        if (! target.hasAttribute('tabindex')) {
            target.setAttribute('tabindex', '-1');
        }
        target.focus({ preventScroll: true });
    });
}
