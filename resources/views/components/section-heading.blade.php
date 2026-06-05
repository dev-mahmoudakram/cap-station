@props([
    'eyebrow' => null,
    'title',
    'lead' => null,
    'align' => 'center',   // center | start
    'light' => false,      // white text for dark sections
    'id' => null,          // optional anchor target
])

<div @class([
        'section-intro',
        'section-intro--start' => $align === 'start',
        'is-light' => $light,
    ])
    @if ($id) id="{{ $id }}" @endif>

    @if ($eyebrow)
        <span class="text-eyebrow d-block mb-2" data-animate="fade-up">{{ $eyebrow }}</span>
    @endif

    <h2 class="section-title" data-animate="fade-up">{{ $title }}</h2>

    @if ($lead)
        <p class="lead mt-3 mb-0" data-animate="fade-up">{{ $lead }}</p>
    @endif
</div>
