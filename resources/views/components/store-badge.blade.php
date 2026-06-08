@props([
    'store',        // 'apple' | 'google'
    'href' => '#',
])

@php
    $isApple = $store === 'apple';
    $top  = $isApple ? __('site.store.apple_top')  : __('site.store.google_top');
    $name = $isApple ? __('site.store.apple_name') : __('site.store.google_name');
@endphp

<a href="{{ $href }}" target="_blank" rel="noopener"
   class="store-badge store-badge--{{ $store }}"
   aria-label="{{ $top }} {{ $name }}">
    <span class="store-badge__logo" aria-hidden="true">
        @if ($isApple)
            <svg viewBox="0 0 24 24" fill="currentColor" focusable="false">
                <path d="M16.365 1.43c0 1.14-.467 2.22-1.22 3.01-.77.81-2.03 1.43-3.1 1.35-.13-1.06.42-2.18 1.13-2.91.77-.81 2.13-1.41 3.19-1.45zM20.5 17.04c-.55 1.27-.82 1.84-1.53 2.96-.99 1.56-2.39 3.51-4.12 3.52-1.54.01-1.94-1.01-4.03-1-2.09.01-2.53 1.02-4.07 1.01-1.73-.01-3.05-1.76-4.04-3.32-2.77-4.37-3.06-9.5-1.35-12.23 1.21-1.94 3.12-3.08 4.92-3.08 1.83 0 2.98 1.01 4.49 1.01 1.47 0 2.36-1.01 4.48-1.01 1.6 0 3.3.87 4.51 2.38-3.96 2.17-3.32 7.82.27 9.78z"/>
            </svg>
        @else
            <svg viewBox="0 0 512 512" focusable="false">
                <path d="M48 59.49v393a4.33 4.33 0 0 0 7.37 3.07L260 256 55.37 56.42A4.33 4.33 0 0 0 48 59.49Z" fill="#00e3ff"/>
                <path d="M345.8 174 89.22 32.64l-.16-.09c-4.42-2.4-8.62 3.58-5 7.06l201.13 192.32Z" fill="#00f076"/>
                <path d="M285.19 280.08 84.06 472.39c-3.61 3.48.59 9.46 5 7.06l.16-.09L345.8 338l-60.61-57.92Z" fill="#ff3346"/>
                <path d="M449.38 231.91 374.59 191l-66.56 65 66.56 65 74.79-40.91a25.86 25.86 0 0 0 0-44.18Z" fill="#ffc900"/>
            </svg>
        @endif
    </span>
    <span class="store-badge__text">
        <span class="store-badge__top">{{ $top }}</span>
        <span class="store-badge__name">{{ $name }}</span>
    </span>
</a>
