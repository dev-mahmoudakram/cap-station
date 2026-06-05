@props([
    'name',
    'size' => 24,
])

@php
    // Curated line-icon set (24x24, stroke = currentColor). Keep shapes simple.
    $icons = [
        'target'       => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.4"/>',
        'compass'      => '<circle cx="12" cy="12" r="9"/><path d="M15.6 8.4 13.5 13.5 8.4 15.6 10.5 10.5z"/>',
        'map-pin'      => '<path d="M12 21s-6-5.3-6-10a6 6 0 0 1 12 0c0 4.7-6 10-6 10z"/><circle cx="12" cy="11" r="2.2"/>',
        'wallet'       => '<rect x="3" y="6" width="18" height="13" rx="2.5"/><path d="M3 10h18"/><circle cx="16.5" cy="14" r="1.3"/>',
        'bell'         => '<path d="M6 9a6 6 0 0 1 12 0c0 5 2 6 2 6H4s2-1 2-6z"/><path d="M10 20a2 2 0 0 0 4 0"/>',
        'headset'      => '<path d="M4 13v-1a8 8 0 0 1 16 0v1"/><rect x="3" y="13" width="3.4" height="5.5" rx="1.3"/><rect x="17.6" y="13" width="3.4" height="5.5" rx="1.3"/><path d="M20 18.5a3 3 0 0 1-3 3h-3"/>',
        'gift'         => '<rect x="3.5" y="8" width="17" height="4" rx="1"/><path d="M5 12v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-8"/><path d="M12 8v13"/><path d="M12 8C12 8 10.7 4 8.3 4.7 6.6 5.2 8 8 12 8z"/><path d="M12 8c0 0 1.3-4 3.7-3.3C17.4 5.2 16 8 12 8z"/>',
        'users'        => '<circle cx="9" cy="8" r="3.2"/><path d="M3 20a6 6 0 0 1 12 0"/><path d="M16.5 5.6a3 3 0 0 1 0 5.6"/><path d="M16 14.4a6 6 0 0 1 5 5.6"/>',
        'bolt'         => '<path d="M13 2 4 14h6l-1 8 9-12h-6z"/>',
        'sliders'      => '<path d="M4 8h16M4 16h16"/><circle cx="9" cy="8" r="2.2"/><circle cx="15" cy="16" r="2.2"/>',
        'chart-bar'    => '<path d="M4 4v16h16"/><rect x="7" y="12" width="2.6" height="5"/><rect x="12" y="9" width="2.6" height="8"/><rect x="17" y="6" width="2.6" height="11"/>',
        'shield-check' => '<path d="M12 3l7 3v5c0 4.5-3 7.6-7 9-4-1.4-7-4.5-7-9V6z"/><path d="M9 12l2 2 4-4"/>',
        'user-plus'    => '<circle cx="10" cy="8" r="3.2"/><path d="M3.5 20a6.6 6.6 0 0 1 12 -3.2"/><path d="M18 13v6M15 16h6"/>',
        'id-card'      => '<rect x="3" y="5" width="18" height="14" rx="2.4"/><circle cx="8.5" cy="11" r="2.1"/><path d="M5.6 16a3 3 0 0 1 5.8 0"/><path d="M14 10h4M14 13.2h4"/>',
        'inbox'        => '<path d="M4 13l2.4-7.2A2 2 0 0 1 8.3 4.5h7.4a2 2 0 0 1 1.9 1.3L20 13v4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2z"/><path d="M4 13h4l1.5 2.5h5L16 13h4"/>',
        'trending-up'  => '<path d="M4 16l5-5 3 3 6-7"/><path d="M16 7h4v4"/>',
        'clock'        => '<circle cx="12" cy="12" r="9"/><path d="M12 7.5V12l3 2"/>',
        'building'     => '<path d="M4 21V6a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v15"/><path d="M12 21V10a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v11"/><path d="M7 9h2M7 13h2M7 17h2M15 13h2M15 17h2"/><path d="M3 21h18"/>',
        'route'        => '<circle cx="6" cy="18" r="2.2"/><circle cx="18" cy="6" r="2.2"/><path d="M8 18h6a3 3 0 0 0 3-3V8.2"/>',
        'check'        => '<path d="M5 12.5l4.5 4.5L19 7"/>',
        'arrow-right'  => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'phone'        => '<path d="M6 3h3l1.5 5-2 1.5a12 12 0 0 0 6 6l1.5-2 5 1.5V21a2 2 0 0 1-2 2A18 18 0 0 1 4 5a2 2 0 0 1 2-2z"/>',
        'mail'         => '<rect x="3" y="5" width="18" height="14" rx="2.5"/><path d="m4 7.5 8 5.5 8-5.5"/>',
    ];

    $svg = $icons[$name] ?? '<circle cx="12" cy="12" r="3"/>';
@endphp

<svg {{ $attributes->merge(['class' => 'cap-icon']) }}
     width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24"
     fill="none" stroke="currentColor" stroke-width="1.7"
     stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
    {!! $svg !!}
</svg>
