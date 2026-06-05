@php
    $locale = app()->getLocale();
    $dir = config("locale.meta.$locale.dir", 'rtl');

    $metaTitle = trim($__env->yieldContent('title', __('site.meta.title')));
    $metaDesc  = trim($__env->yieldContent('meta_description', __('site.meta.description')));
    $canonical = url()->current();
    $ogImage   = asset('images/capstation-logo.png');
    $ogLocale  = $locale === 'ar' ? 'ar_SA' : 'en_US';

    $alternates = [];
    foreach (config('locale.supported', []) as $loc) {
        $alternates[$loc] = url('/'.$loc);
    }
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $dir }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#050807">

    <title>@yield('title', __('site.meta.title'))</title>
    <meta name="description" content="{{ $metaDesc }}">
    <link rel="canonical" href="{{ $canonical }}">

    {{-- hreflang alternates --}}
    @foreach ($alternates as $loc => $href)
        <link rel="alternate" hreflang="{{ $loc }}" href="{{ $href }}">
    @endforeach
    <link rel="alternate" hreflang="x-default" href="{{ $alternates[config('locale.default')] ?? $canonical }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ __('site.brand') }}">
    <meta property="og:title" content="{{ $metaTitle }}">
    <meta property="og:description" content="{{ $metaDesc }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:locale" content="{{ $ogLocale }}">
    <meta property="og:image" content="{{ $ogImage }}">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $metaTitle }}">
    <meta name="twitter:description" content="{{ $metaDesc }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    {{-- Organization JSON-LD --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context'    => 'https://schema.org',
        '@type'       => 'Organization',
        'name'        => __('site.brand'),
        'url'         => url('/'),
        'logo'        => $ogImage,
        'description' => $metaDesc,
        'areaServed'  => 'SA',
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>

    @stack('head')

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#main">{{ $locale === 'ar' ? 'تجاوز إلى المحتوى' : 'Skip to content' }}</a>

    <x-navbar />

    <main id="main">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
