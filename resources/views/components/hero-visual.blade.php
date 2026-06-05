@props([])

{{--
    Hero scene built around the product illustration (public/images/8.png).
    Phase 5 animates:
      • #heroRoadDash  — route line draws in
      • .hero-visual__img + chips — parallax / idle float
--}}
<div class="hero-visual">
    <div class="hero-visual__glow" aria-hidden="true"></div>

    <img src="{{ asset('images/8.png') }}"
         alt="{{ __('site.hero.image_alt') }}"
         width="884" height="1096"
         class="hero-visual__img" fetchpriority="high">

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
