@extends('layouts.app')

@section('title', __('site.brand'))

@section('content')
    {{-- Phase 2 placeholder: shows the layout shell + design system.
         Real landing sections are composed in Phase 4. --}}
    <section class="section text-center">
        <div class="container">
            <img src="{{ asset('images/capstation-logo.png') }}"
                 alt="{{ __('site.brand') }}" width="160" height="160"
                 class="mb-3" style="width:140px;height:auto;">

            <span class="text-eyebrow d-block mb-2">{{ __('site.tagline') }}</span>

            <h1 class="section-title mb-3">{{ __('site.brand') }}</h1>

            <p class="lead mx-auto mb-4" style="max-width:42rem;">
                {{ __('site.footer.description') }}
            </p>

            <div class="d-flex flex-wrap gap-2 justify-content-center">
                <a href="#join" class="btn btn-primary btn-lg">{{ __('site.nav.cta') }}</a>
                <a href="#how-it-works" class="btn btn-gold btn-lg">{{ __('site.nav.how_it_works') }}</a>
            </div>
        </div>
    </section>

    {{-- Premium dark band to preview the section variant + footer transition --}}
    <section class="section section--dark text-center" id="join">
        <div class="container">
            <h2 class="mb-3">{{ __('site.tagline') }}</h2>
            <a href="#" class="btn btn-premium btn-lg">{{ __('site.nav.cta') }}</a>
        </div>
    </section>
@endsection
