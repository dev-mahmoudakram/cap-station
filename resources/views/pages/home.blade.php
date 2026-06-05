@extends('layouts.app')

@section('title', __('site.brand'))

@php
    $ar = app()->getLocale() === 'ar';
    // Throwaway sample content — Phase 4 replaces this with real localized copy.
    $features = [
        ['icon' => 'target',  'title' => $ar ? 'فرص أنسب' : 'Better opportunities', 'text' => $ar ? 'فرص تشغيل تناسب موقعك ووقتك.' : 'Trips matched to your area and time.'],
        ['icon' => 'compass', 'title' => $ar ? 'مسارات ذكية' : 'Smart routes',         'text' => $ar ? 'اعرف أفضل طريق قبل ما تتحرك.' : 'Know the best route before you move.'],
        ['icon' => 'wallet',  'title' => $ar ? 'متابعة الدخل' : 'Earnings tracking',    'text' => $ar ? 'دخلك وأرباحك واضحة أمامك.' : 'Your income, always visible.'],
    ];
    $faqs = [
        ['q' => $ar ? 'ما هي كاب ستيشن؟' : 'What is CapStation?', 'a' => $ar ? 'منصة تشغيل ذكية للكباتن تجمع الفرص والخدمات في مكان واحد.' : 'A smart operations platform that brings captain opportunities and services together.'],
        ['q' => $ar ? 'كيف أبدأ ككابتن؟' : 'How do I start as a captain?', 'a' => $ar ? 'سجّل، فعّل حسابك، واستقبل الفرص المناسبة.' : 'Register, activate your account, and start receiving suitable opportunities.'],
    ];
@endphp

@section('content')
    {{-- Component showcase (temporary, Phase 3 checkpoint) --}}
    <section class="section">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-6">
                    <x-section-heading
                        align="start"
                        :eyebrow="__('site.tagline')"
                        :title="__('site.brand')"
                        :lead="__('site.footer.description')" />
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <a href="#join" class="btn btn-primary btn-lg">{{ __('site.nav.cta') }}</a>
                        <a href="#how-it-works" class="btn btn-outline-primary btn-lg">{{ __('site.nav.how_it_works') }}</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <x-hero-visual />
                </div>
            </div>
        </div>
    </section>

    {{-- Feature cards --}}
    <section class="section section--cream" id="features">
        <div class="container">
            <x-section-heading
                :eyebrow="$ar ? 'المزايا' : 'Features'"
                :title="$ar ? 'كل ما يحتاجه الكابتن في مكان واحد' : 'Everything a captain needs, in one place'" />
            <div class="row g-3 g-lg-4 mt-2">
                @foreach ($features as $f)
                    <div class="col-12 col-md-4">
                        <x-feature-card :icon="$f['icon']" :title="$f['title']" :text="$f['text']" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Stats on dark --}}
    <section class="section section--dark">
        <div class="container">
            <div class="row g-3 g-lg-4">
                <div class="col-6 col-lg-3"><x-stat-card :value="10"  prefix="+" suffix="K" icon="users"    :label="$ar ? 'كابتن' : 'Captains'" /></div>
                <div class="col-6 col-lg-3"><x-stat-card :value="250" prefix="+" suffix="K" icon="inbox"    :label="$ar ? 'فرصة' : 'Opportunities'" /></div>
                <div class="col-6 col-lg-3"><x-stat-card display="24/7"            icon="clock"    :label="$ar ? 'دعم' : 'Support'" /></div>
                <div class="col-6 col-lg-3"><x-stat-card :value="15"  prefix="+"            icon="building" :label="$ar ? 'مدينة' : 'Cities'" /></div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="section" id="faq">
        <div class="container">
            <x-section-heading :title="$ar ? 'الأسئلة الشائعة' : 'Frequently asked questions'" />
            <div class="mt-4">
                <x-faq-accordion :items="$faqs" id="homeFaq" />
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <x-cta-section
        id="join"
        :title="$ar ? 'جاهز تبدأ رحلتك مع كاب ستيشن؟' : 'Ready to start your journey with CapStation?'"
        :text="$ar ? 'انضم اليوم وابدأ تستقبل فرص أنسب لدخل أفضل.' : 'Join today and start receiving better-matched opportunities.'"
        :primary="['label' => __('site.nav.cta'), 'href' => '#']"
        :secondary="['label' => __('site.footer.contact'), 'href' => '#']" />
@endsection
