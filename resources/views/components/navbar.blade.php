@php
    $locale = app()->getLocale();

    // Build the "switch language" URL by swapping the first path segment.
    $other = $locale === 'ar' ? 'en' : 'ar';
    $segments = explode('/', trim(request()->path(), '/'));
    $segments[0] = $other;
    $switchUrl   = url(implode('/', $segments));
    $switchLabel = config("locale.meta.$locale.switch_to");

    // Primary nav: label key => in-page anchor (sections arrive in Phase 4)
    $links = [
        'how_it_works' => '#how-it-works',
        'features'     => '#features',
        'partners'     => '#partners',
        'faq'          => '#faq',
    ];
@endphp

<header class="cap-header sticky-top">
    <nav class="navbar navbar-expand-lg cap-navbar" aria-label="{{ __('site.nav.home') }}">
        <div class="container">
            {{-- Brand --}}
            <a class="navbar-brand cap-navbar__brand" href="{{ route('home') }}" aria-label="{{ __('site.brand') }}">
                <img src="{{ asset('images/capstation-logo.png') }}"
                     alt="{{ __('site.brand') }}" width="150" height="48"
                     class="cap-navbar__logo">
            </a>

            {{-- Mobile toggler --}}
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#capNav"
                    aria-controls="capNav" aria-label="{{ __('site.brand') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Collapsible / offcanvas content --}}
            <div class="offcanvas offcanvas-end cap-navbar__panel" tabindex="-1"
                 id="capNav" aria-labelledby="capNavLabel">
                <div class="offcanvas-header">
                    <span class="offcanvas-title wordmark" id="capNavLabel">
                        <span class="wordmark__cap">Cap</span><span class="wordmark__station">Station</span>
                    </span>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="{{ __('site.nav.home') }}"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav mx-lg-auto mb-3 mb-lg-0 gap-lg-1">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#top">
                                {{ __('site.nav.home') }}
                            </a>
                        </li>
                        @foreach ($links as $key => $anchor)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $anchor }}">{{ __("site.nav.$key") }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="cap-navbar__actions d-flex align-items-center gap-2">
                        {{-- Language switcher --}}
                        <a class="cap-navbar__lang" href="{{ $switchUrl }}"
                           hreflang="{{ $other }}" rel="alternate"
                           aria-label="{{ __('site.switch_language') }}">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <circle cx="12" cy="12" r="9"></circle>
                                <path d="M3 12h18M12 3c2.5 2.6 2.5 15.4 0 18M12 3c-2.5 2.6-2.5 15.4 0 18"></path>
                            </svg>
                            <span>{{ $switchLabel }}</span>
                        </a>

                        {{-- Primary CTA --}}
                        <a class="btn btn-primary" href="#join">{{ __('site.nav.cta') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
