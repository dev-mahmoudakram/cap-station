@php
    $explore = [
        'how_it_works' => '#how-it-works',
        'features'     => '#features',
        'partners'     => '#partners',
        'faq'          => '#faq',
    ];

    // Placeholder social links — replace with real handles.
    $socials = [
        'X'         => '#',
        'Instagram' => '#',
        'LinkedIn'  => '#',
        'WhatsApp'  => '#',
    ];
@endphp

<footer class="cap-footer">
    <div class="container">
        <div class="row g-4 g-lg-5">
            {{-- Brand + description + social --}}
            <div class="col-12 col-lg-5">
                <a href="{{ route('home') }}" class="cap-footer__brand wordmark" aria-label="{{ __('site.brand') }}">
                    <span class="wordmark__cap">Cap</span><span class="wordmark__station">Station</span>
                </a>
                <p class="cap-footer__desc mt-3">{{ __('site.footer.description') }}</p>

                <ul class="cap-footer__social list-unstyled d-flex gap-2 mt-3 mb-0">
                    @foreach ($socials as $name => $url)
                        <li>
                            <a href="{{ $url }}" class="cap-footer__social-link" aria-label="{{ $name }}">
                                <span class="cap-footer__social-initial" aria-hidden="true">{{ $name[0] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Explore --}}
            <div class="col-6 col-lg-3">
                <h2 class="cap-footer__heading">{{ __('site.footer.explore') }}</h2>
                <ul class="list-unstyled cap-footer__links">
                    <li><a href="{{ route('home') }}">{{ __('site.nav.home') }}</a></li>
                    @foreach ($explore as $key => $anchor)
                        <li><a href="{{ $anchor }}">{{ __("site.nav.$key") }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div class="col-6 col-lg-4">
                <h2 class="cap-footer__heading">{{ __('site.footer.contact') }}</h2>
                <ul class="list-unstyled cap-footer__links cap-footer__contact">
                    <li><a href="mailto:{{ __('site.footer.email') }}">{{ __('site.footer.email') }}</a></li>
                    <li><a href="tel:{{ preg_replace('/[^0-9+]/', '', __('site.footer.phone')) }}" dir="ltr">{{ __('site.footer.phone') }}</a></li>
                    <li class="cap-footer__location">{{ __('site.footer.location') }}</li>
                </ul>
                <a href="#join" class="btn btn-gold mt-2">{{ __('site.nav.cta') }}</a>
            </div>
        </div>

        <hr class="cap-footer__rule">

        <div class="cap-footer__bottom d-flex flex-column flex-md-row gap-2 justify-content-between align-items-md-center">
            <p class="mb-0 small">{{ __('site.footer.rights', ['year' => date('Y')]) }}</p>
            <p class="mb-0 small cap-footer__made">{{ __('site.footer.made_for') }}</p>
        </div>
    </div>
</footer>
