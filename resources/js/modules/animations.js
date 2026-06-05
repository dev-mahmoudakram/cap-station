// =============================================================
// CapStation — Animations (GSAP + ScrollTrigger)
// Signature motion, performant (transform/opacity), reduced-motion
// and mobile aware.
// =============================================================

export function initAnimations({ gsap, ScrollTrigger, prefersReducedMotion }) {
    // Header glass state + nav scroll-spy are style toggles, not motion — always on.
    initHeaderState();
    initScrollSpy();

    const animated = gsap.utils.toArray('[data-animate]');

    if (prefersReducedMotion) {
        // Show everything immediately, no transforms.
        if (animated.length) gsap.set(animated, { clearProps: 'all', opacity: 1 });
        revealJourneyInstant();
        return;
    }

    initReveals(animated);
    initRouteFlow();
    initParallax();
    initJourneyProgress();

    // Recalculate once fonts/images settle.
    window.addEventListener('load', () => ScrollTrigger.refresh());

    // --- helpers ---------------------------------------------------

    function initReveals(els) {
        els.forEach((el) => {
            gsap.set(el, { opacity: 0, y: 24 });
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: 0.7,
                ease: 'power2.out',
                scrollTrigger: { trigger: el, start: 'top 88%', once: true },
            });
        });
    }

    // Gold route dashes flow along the hero path.
    function initRouteFlow() {
        const dash = document.querySelector('#heroRoadDash');
        if (! dash) return;
        gsap.to(dash, { strokeDashoffset: -160, duration: 5, ease: 'none', repeat: -1 });
    }

    // Subtle scroll parallax on hero chips (desktop only).
    function initParallax() {
        const mm = gsap.matchMedia();
        mm.add('(min-width: 992px)', () => {
            gsap.utils.toArray('[data-parallax]').forEach((el) => {
                const depth = parseFloat(el.dataset.depth) || 0.1;
                gsap.to(el, {
                    y: () => depth * 140,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: '.hero',
                        start: 'top top',
                        end: 'bottom top',
                        scrub: true,
                    },
                });
            });
        });
    }

    // Journey timeline progress fills as the section scrolls through.
    function initJourneyProgress() {
        const track = document.querySelector('[data-journey]');
        const progress = document.querySelector('[data-journey-progress]');
        if (! track || ! progress) return;

        const mm = gsap.matchMedia();
        const trigger = { trigger: track, start: 'top 70%', end: 'bottom 70%', scrub: true };

        mm.add('(min-width: 992px)', () => {
            gsap.fromTo(progress, { width: '0%' }, { width: '100%', ease: 'none', scrollTrigger: trigger });
        });
        mm.add('(max-width: 991.98px)', () => {
            gsap.fromTo(progress, { height: '0%' }, { height: '100%', ease: 'none', scrollTrigger: trigger });
        });
    }

    function revealJourneyInstant() {
        const progress = document.querySelector('[data-journey-progress]');
        if (progress) {
            progress.style.width = '100%';
            progress.style.height = '100%';
        }
    }
}

function initHeaderState() {
    const nav = document.querySelector('.cap-navbar');
    if (! nav) return;
    const onScroll = () => nav.classList.toggle('is-scrolled', window.scrollY > 8);
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
}

// Highlight the nav link of the section currently in view (current/active).
function initScrollSpy() {
    const links = Array.from(document.querySelectorAll('.cap-navbar .nav-link'));
    if (! links.length) return;

    const sections = links
        .map((link) => {
            const href = link.getAttribute('href') || '';
            const hash = href.slice(href.indexOf('#') + 1);
            const section = href.includes('#') && hash ? document.getElementById(hash) : null;
            return section ? { link, section } : null;
        })
        .filter(Boolean);

    const homeLink = links.find((l) => ! (l.getAttribute('href') || '').includes('#'));
    if (! sections.length) return;

    const setActive = (activeLink) => {
        links.forEach((l) => {
            const on = l === activeLink;
            l.classList.toggle('active', on);
            if (on) l.setAttribute('aria-current', 'true');
            else l.removeAttribute('aria-current');
        });
    };

    const onScroll = () => {
        const probe = window.innerHeight * 0.3;
        let current = null;
        sections.forEach((item) => {
            if (item.section.getBoundingClientRect().top <= probe) current = item;
        });

        if (window.scrollY < 80 && homeLink) setActive(homeLink);
        else setActive(current ? current.link : homeLink);
    };

    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
}
