@extends('layouts.app')

@section('title', __('site.meta.title'))

@php
    // Statistics — placeholder figures; replace with real business data.
    $stats = [
        ['value' => 10,  'prefix' => '+', 'suffix' => 'K', 'icon' => 'users',    'label' => __('site.stats.labels.captains')],
        ['value' => 250, 'prefix' => '+', 'suffix' => 'K', 'icon' => 'inbox',    'label' => __('site.stats.labels.opportunities')],
        ['display' => '24/7',                               'icon' => 'clock',    'label' => __('site.stats.labels.support')],
        ['value' => 15,  'prefix' => '+',                   'icon' => 'building', 'label' => __('site.stats.labels.cities')],
    ];
@endphp

@section('content')

    {{-- 1. Hero ------------------------------------------------------ --}}
    <section class="hero section" id="top">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-6 hero__content">
                    <span class="text-eyebrow d-inline-block mb-3" data-animate="fade-up">{{ __('site.hero.eyebrow') }}</span>
                    <h1 class="hero__title" data-animate="fade-up">{{ __('site.hero.title') }}</h1>
                    <p class="lead mt-3" data-animate="fade-up">{{ __('site.hero.text') }}</p>
                    <div class="hero__actions d-flex flex-wrap gap-2 mt-4" data-animate="fade-up">
                        <a href="#join" class="btn btn-premium btn-lg">{{ __('site.hero.cta_primary') }}</a>
                        <a href="#how-it-works" class="btn btn-ghost btn-lg">
                            {{ __('site.hero.cta_secondary') }}
                            <x-icon name="arrow-right" :size="18" class="flip-rtl" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <x-hero-visual />
                </div>
            </div>
        </div>
    </section>

    {{-- 2. Problem --------------------------------------------------- --}}
    <section class="section section--cream" id="problem">
        <div class="container">
            <x-section-heading
                :eyebrow="__('site.problem.eyebrow')"
                :title="__('site.problem.title')"
                :lead="__('site.problem.lead')" />
            <div class="row g-3 g-lg-4 mt-2">
                @foreach (__('site.problem.items') as $item)
                    <div class="col-12 col-sm-6 col-lg-3">
                        <x-feature-card :icon="$item['icon']" :title="$item['title']" :text="$item['text']" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 3. Solution -------------------------------------------------- --}}
    <section class="section" id="solution">
        <div class="container">
            <x-section-heading
                :eyebrow="__('site.solution.eyebrow')"
                :title="__('site.solution.title')"
                :lead="__('site.solution.lead')" />
            <div class="row g-3 g-lg-4 mt-2 justify-content-center">
                @foreach (__('site.solution.items') as $item)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <x-feature-card class="cap-card--solution" :icon="$item['icon']" :title="$item['title']" :text="$item['text']" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 4. How it works ---------------------------------------------- --}}
    <section class="section section--cream" id="how-it-works">
        <div class="container">
            <x-section-heading
                :eyebrow="__('site.how.eyebrow')"
                :title="__('site.how.title')"
                :lead="__('site.how.lead')" />
            <div class="how-steps row g-4 mt-2">
                @foreach (__('site.how.steps') as $i => $step)
                    <div class="col-md-6 col-lg-3">
                        <div class="step-card" data-animate="fade-up">
                            <span class="step-card__num">{{ $i + 1 }}</span>
                            <span class="step-card__icon"><x-icon :name="$step['icon']" :size="24" /></span>
                            <h3 class="step-card__title">{{ $step['title'] }}</h3>
                            <p class="step-card__text">{{ $step['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 5. Captain features ------------------------------------------ --}}
    <section class="section" id="features">
        <div class="container">
            <x-section-heading
                :eyebrow="__('site.features.eyebrow')"
                :title="__('site.features.title')"
                :lead="__('site.features.lead')" />
            <div class="row g-3 g-lg-4 mt-2">
                @foreach (__('site.features.items') as $item)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <x-feature-card :icon="$item['icon']" :title="$item['title']" :text="$item['text']" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 6. Partner / company features -------------------------------- --}}
    <section class="section section--cream" id="partners">
        <div class="container">
            <x-section-heading
                :eyebrow="__('site.partners.eyebrow')"
                :title="__('site.partners.title')"
                :lead="__('site.partners.lead')" />
            <div class="row g-3 g-lg-4 mt-2">
                @foreach (__('site.partners.items') as $item)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <x-feature-card :icon="$item['icon']" :title="$item['title']" :text="$item['text']" accent="gold" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 7. Journey timeline ------------------------------------------ --}}
    <section class="section" id="journey">
        <div class="container">
            <x-section-heading
                :eyebrow="__('site.journey.eyebrow')"
                :title="__('site.journey.title')"
                :lead="__('site.journey.lead')" />

            <div class="journey mt-5" data-journey>
                <div class="journey__track">
                    <span class="journey__progress" data-journey-progress></span>
                </div>
                <ol class="journey__steps">
                    @foreach (__('site.journey.steps') as $i => $step)
                        <li class="journey__step" data-animate="fade-up">
                            <span class="journey__dot">{{ $i + 1 }}</span>
                            <span class="journey__title">{{ $step['title'] }}</span>
                            <span class="journey__text">{{ $step['text'] }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    {{-- 8. App / dashboard mockup ------------------------------------ --}}
    <section class="section section--dark" id="app">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-6">
                    <x-section-heading
                        align="start" light
                        :eyebrow="__('site.app.eyebrow')"
                        :title="__('site.app.title')"
                        :lead="__('site.app.lead')" />
                    <ul class="app-points list-unstyled mt-4">
                        @foreach (__('site.app.points') as $point)
                            <li class="app-points__item" data-animate="fade-up">
                                <span class="app-points__icon"><x-icon :name="$point['icon']" :size="20" /></span>
                                <span>{{ $point['text'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6">
                    @php $mock = __('site.app.mock'); @endphp
                    <div class="app-mock" data-animate="fade-up">
                        <div class="app-mock__bar">
                            <span class="app-mock__greeting">{{ $mock['greeting'] }}</span>
                            <span class="app-mock__status"><span class="app-mock__dot"></span>{{ $mock['status'] }}</span>
                        </div>

                        <div class="app-mock__route">
                            <span class="app-mock__route-icon"><x-icon name="route" :size="20" /></span>
                            <span class="app-mock__route-body">
                                <span class="app-mock__label">{{ $mock['active_label'] }}</span>
                                <span class="app-mock__route-value">{{ $mock['active_route'] }}</span>
                            </span>
                        </div>

                        <div class="app-mock__grid">
                            <div class="app-mock__tile">
                                <span class="app-mock__label">{{ $mock['wallet_label'] }}</span>
                                <span class="app-mock__value">{{ $mock['wallet_value'] }}</span>
                            </div>
                            <div class="app-mock__tile">
                                <span class="app-mock__label">{{ $mock['trips_label'] }}</span>
                                <span class="app-mock__value">{{ $mock['trips_value'] }}</span>
                            </div>
                            <div class="app-mock__tile">
                                <span class="app-mock__label">{{ $mock['rating_label'] }}</span>
                                <span class="app-mock__value">★ {{ $mock['rating_value'] }}</span>
                            </div>
                        </div>

                        <div class="app-mock__accept" aria-hidden="true">{{ $mock['cta'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 9. Statistics ------------------------------------------------ --}}
    <section class="section" id="stats">
        <div class="container">
            <x-section-heading
                :eyebrow="__('site.stats.eyebrow')"
                :title="__('site.stats.title')" />
            <div class="stats-panel mt-4" data-animate="fade-up">
                <div class="row g-3 g-lg-4">
                    @foreach ($stats as $s)
                        <div class="col-6 col-lg-3">
                            <x-stat-card
                                :value="$s['value'] ?? null"
                                :display="$s['display'] ?? null"
                                :prefix="$s['prefix'] ?? ''"
                                :suffix="$s['suffix'] ?? ''"
                                :icon="$s['icon']"
                                :label="$s['label']" />
                        </div>
                    @endforeach
                </div>
            </div>
            <p class="text-center small text-body-secondary mt-3 mb-0">{{ __('site.stats.note') }}</p>
        </div>
    </section>

    {{-- 10. Testimonials -------------------------------------------- --}}
    <section class="section section--cream" id="testimonials">
        <div class="container">
            <x-section-heading
                :eyebrow="__('site.testimonials.eyebrow')"
                :title="__('site.testimonials.title')"
                :lead="__('site.testimonials.lead')" />
            <div class="row g-3 g-lg-4 mt-2">
                @foreach (__('site.testimonials.items') as $t)
                    <div class="col-12 col-md-4">
                        <figure class="testimonial" data-animate="fade-up">
                            <div class="testimonial__stars" aria-hidden="true">★★★★★</div>
                            <blockquote class="testimonial__quote">{{ $t['quote'] }}</blockquote>
                            <figcaption class="testimonial__person">
                                <span class="testimonial__avatar" aria-hidden="true">{{ mb_substr($t['name'], 0, 1) }}</span>
                                <span class="testimonial__meta">
                                    <span class="testimonial__name">{{ $t['name'] }}</span>
                                    <span class="testimonial__role">{{ $t['role'] }}</span>
                                </span>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 11. FAQ ----------------------------------------------------- --}}
    <section class="section" id="faq">
        <div class="container">
            <x-section-heading
                :eyebrow="__('site.faq.eyebrow')"
                :title="__('site.faq.title')"
                :lead="__('site.faq.lead')" />
            <div class="mt-4">
                <x-faq-accordion :items="__('site.faq.items')" id="siteFaq" />
            </div>
        </div>
    </section>

    {{-- 12. Final CTA ----------------------------------------------- --}}
    <x-cta-section
        id="join"
        :title="__('site.cta.title')"
        :text="__('site.cta.text')"
        :primary="['label' => __('site.cta.primary'), 'href' => '#']"
        :secondary="['label' => __('site.cta.secondary'), 'href' => 'mailto:'.__('site.footer.email')]" />

@endsection
