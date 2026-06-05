@php
    $explore = [
        'how_it_works' => '#how-it-works',
        'features'     => '#features',
        'partners'     => '#partners',
        'faq'          => '#faq',
    ];

    // Placeholder social links — replace href with real handles.
    $socials = [
        'X'         => ['url' => '#', 'path' => 'M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z'],
        'Instagram' => ['url' => '#', 'path' => 'M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z'],
        'LinkedIn'  => ['url' => '#', 'path' => 'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z'],
        'WhatsApp'  => ['url' => '#', 'path' => 'M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z'],
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
                    @foreach ($socials as $name => $social)
                        <li>
                            <a href="{{ $social['url'] }}" class="cap-footer__social-link" aria-label="{{ $name }}" rel="noopener">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
                                    <path d="{{ $social['path'] }}"></path>
                                </svg>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Explore --}}
            <div class="col-12 col-lg-3">
                <h2 class="cap-footer__heading">{{ __('site.footer.explore') }}</h2>
                <ul class="list-unstyled cap-footer__links">
                    <li><a href="{{ route('home') }}">{{ __('site.nav.home') }}</a></li>
                    @foreach ($explore as $key => $anchor)
                        <li><a href="{{ $anchor }}">{{ __("site.nav.$key") }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div class="col-12 col-lg-4">
                <h2 class="cap-footer__heading">{{ __('site.footer.contact') }}</h2>
                <ul class="list-unstyled cap-footer__links cap-footer__contact">
                    <li>
                        <span class="cap-footer__contact-icon"><x-icon name="mail" :size="18" /></span>
                        <a href="mailto:{{ __('site.footer.email') }}">{{ __('site.footer.email') }}</a>
                    </li>
                    <li>
                        <span class="cap-footer__contact-icon"><x-icon name="phone" :size="18" /></span>
                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', __('site.footer.phone')) }}"><span dir="ltr">{{ __('site.footer.phone') }}</span></a>
                    </li>
                    <li class="cap-footer__location">
                        <span class="cap-footer__contact-icon"><x-icon name="map-pin" :size="18" /></span>
                        <span>{{ __('site.footer.location') }}</span>
                    </li>
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
