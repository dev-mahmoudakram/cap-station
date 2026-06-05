@props([])

{{--
    Signature hero scene. Phase 5 animates:
      • #heroRoadDash  — route line draws in (stroke-dashoffset)
      • #heroCar       — moves along #heroRoadPath (MotionPathPlugin) on scroll
      • [data-parallax]— subtle parallax by data-depth
    The scene is decorative; it carries aria-hidden.
--}}
<div class="hero-visual" aria-hidden="true">
    <div class="hero-visual__glow"></div>

    <svg class="hero-visual__svg" viewBox="0 0 560 470" fill="none"
         xmlns="http://www.w3.org/2000/svg" role="img">

        {{-- Map grid backdrop --}}
        <defs>
            <pattern id="heroGrid" width="40" height="40" patternUnits="userSpaceOnUse">
                <path d="M40 0H0V40" fill="none" stroke="rgba(0,112,56,0.08)" stroke-width="1"/>
            </pattern>
            <linearGradient id="heroRoadFill" x1="0" y1="1" x2="1" y2="0">
                <stop offset="0" stop-color="#0d3b24"/>
                <stop offset="1" stop-color="#0a2c1b"/>
            </linearGradient>
        </defs>
        <rect x="0" y="0" width="560" height="470" fill="url(#heroGrid)" rx="28"/>

        {{-- City skyline (parallax, far) --}}
        <g class="hero-visual__city" data-parallax data-depth="0.06">
            <rect x="392" y="150" width="34" height="96" rx="4" fill="#0d4f2c"/>
            <rect x="430" y="118" width="40" height="128" rx="4" fill="#0a6037"/>
            <rect x="474" y="160" width="30" height="86" rx="4" fill="#0d4f2c"/>
            <rect x="508" y="186" width="26" height="60" rx="4" fill="#0a3c23"/>
            <g fill="rgba(216,163,1,0.55)">
                <rect x="438" y="132" width="6" height="6" rx="1"/>
                <rect x="450" y="132" width="6" height="6" rx="1"/>
                <rect x="438" y="148" width="6" height="6" rx="1"/>
                <rect x="450" y="148" width="6" height="6" rx="1"/>
                <rect x="400" y="166" width="5" height="5" rx="1"/>
                <rect x="412" y="166" width="5" height="5" rx="1"/>
            </g>
        </g>

        {{-- Destination flag --}}
        <g class="hero-visual__flag" data-parallax data-depth="0.1">
            <line x1="498" y1="118" x2="498" y2="150" stroke="#063b22" stroke-width="3" stroke-linecap="round"/>
            <path d="M498 120 H520 l-5 6 5 6 H498 Z" fill="var(--brand-secondary)"/>
        </g>

        {{-- The road --}}
        <path id="heroRoadPath"
              d="M40 432 C 120 402, 120 300, 232 292 S 430 250, 524 132"
              fill="none" stroke="url(#heroRoadFill)" stroke-width="30" stroke-linecap="round"/>
        {{-- Static centre line --}}
        <path d="M40 432 C 120 402, 120 300, 232 292 S 430 250, 524 132"
              fill="none" stroke="rgba(255,248,230,0.35)" stroke-width="3"
              stroke-dasharray="1 18" stroke-linecap="round"/>
        {{-- Animated gold progress line (drawn in on load) --}}
        <path id="heroRoadDash"
              d="M40 432 C 120 402, 120 300, 232 292 S 430 250, 524 132"
              fill="none" stroke="var(--brand-secondary)" stroke-width="3"
              stroke-dasharray="2 16" stroke-linecap="round"/>

        {{-- Start pin --}}
        <g class="hero-visual__start" data-parallax data-depth="0.12">
            <circle cx="40" cy="432" r="9" fill="#fff" stroke="var(--brand-primary)" stroke-width="3"/>
            <circle cx="40" cy="432" r="3" fill="var(--brand-primary)"/>
        </g>

        {{-- Route dots --}}
        <g fill="var(--brand-primary-light)">
            <circle cx="120" cy="350" r="3.5"/>
            <circle cx="232" cy="292" r="3.5"/>
            <circle cx="360" cy="276" r="3.5"/>
        </g>

        {{-- The captain's car (moves along the road in Phase 5) --}}
        <g id="heroCar" transform="translate(40,432)">
            <g transform="rotate(-32)">
                <ellipse cx="0" cy="12" rx="22" ry="3.5" fill="rgba(5,8,7,0.18)"/>
                <rect x="-20" y="-3" width="40" height="11" rx="5" fill="var(--brand-primary)"/>
                <path d="M-11 -3 L-6 -11 Q-5 -12 -3 -12 H6 Q8 -12 9 -10 L13 -3 Z" fill="var(--brand-primary-light)"/>
                <path d="M-8 -4 L-4.5 -10 H-1 V-4 Z" fill="#eafff3"/>
                <path d="M1 -4 V-10 H5.5 L9 -4 Z" fill="#eafff3"/>
                <circle cx="18" cy="2" r="2" fill="var(--brand-secondary)"/>
                <circle cx="-11" cy="9" r="5" fill="#0a1f14"/>
                <circle cx="-11" cy="9" r="1.8" fill="var(--brand-secondary)"/>
                <circle cx="11" cy="9" r="5" fill="#0a1f14"/>
                <circle cx="11" cy="9" r="1.8" fill="var(--brand-secondary)"/>
            </g>
        </g>
    </svg>

    {{-- Floating glass mini-cards (parallax) --}}
    <div class="hero-chip hero-chip--route" data-parallax data-depth="0.18">
        <span class="hero-chip__icon"><x-icon name="route" :size="18" /></span>
        <span class="hero-chip__body">
            <span class="hero-chip__label">{{ __('site.hero.chip_route_label') }}</span>
            <span class="hero-chip__value">{{ __('site.hero.chip_route_value') }}</span>
        </span>
    </div>
    <div class="hero-chip hero-chip--wallet" data-parallax data-depth="0.24">
        <span class="hero-chip__icon hero-chip__icon--gold"><x-icon name="wallet" :size="18" /></span>
        <span class="hero-chip__body">
            <span class="hero-chip__label">{{ __('site.hero.chip_wallet_label') }}</span>
            <span class="hero-chip__value">{{ __('site.hero.chip_wallet_value') }}</span>
        </span>
    </div>
</div>
