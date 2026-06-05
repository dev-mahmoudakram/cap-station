@php
    $locale = app()->getLocale();
    $dir = config("locale.meta.$locale.dir", 'rtl');
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $dir }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SEO meta, Open Graph, JSON-LD are added in Phase 6 --}}
    <title>@yield('title', 'CapStation')</title>

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
