// =============================================================
// CapStation — In-page navigation
// Smooth-scrolls anchor links WITHOUT writing the hash to the URL,
// closes the mobile offcanvas first (so the scroll-lock is released
// before we scroll), keeps the scroll position when the menu closes,
// and moves focus for accessibility.
// =============================================================

export function initSmoothScroll({ prefersReducedMotion, bootstrap }) {
    const offcanvasEl = document.querySelector('.cap-navbar__panel');
    let pendingTarget = null;

    const scrollToTarget = (target) => {
        target.scrollIntoView({
            behavior: prefersReducedMotion ? 'auto' : 'smooth',
            block: 'start',
        });
        if (! target.hasAttribute('tabindex')) {
            target.setAttribute('tabindex', '-1');
        }
        target.focus({ preventScroll: true });
    };

    if (offcanvasEl) {
        // Closing the offcanvas returns focus to the toggler, which sits in the
        // sticky header — and .focus() would scroll the page up to it. Capture
        // the position and restore it on the next frame to cancel that jump.
        offcanvasEl.addEventListener('hide.bs.offcanvas', () => {
            const y = window.scrollY;
            requestAnimationFrame(() => window.scrollTo({ top: y, left: 0, behavior: 'instant' }));
        });

        // If a nav link triggered the close, scroll to its target afterwards.
        offcanvasEl.addEventListener('hidden.bs.offcanvas', () => {
            if (! pendingTarget) return;
            const target = pendingTarget;
            pendingTarget = null;
            scrollToTarget(target);
        });
    }

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

        // Inside an OPEN offcanvas (mobile menu): close it, then scroll once
        // the panel is fully hidden (the body scroll-lock is released by then).
        const isOpenPanel = offcanvasEl && offcanvasEl.classList.contains('show');
        if (isOpenPanel && bootstrap?.Offcanvas) {
            pendingTarget = target;
            bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl).hide();
        } else {
            scrollToTarget(target);
        }
    });
}
