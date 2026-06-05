@props([
    'value' => null,       // numeric target for count-up (e.g. 10, 250)
    'display' => null,      // non-numeric override (e.g. "24/7")
    'prefix' => '',         // e.g. "+"
    'suffix' => '',         // e.g. "K"
    'label',
    'icon' => null,
])

<div class="stat-card" data-animate="fade-up">
    @if ($icon)
        <span class="stat-card__icon"><x-icon :name="$icon" :size="22" /></span>
    @endif

    @if (! is_null($value))
        {{-- Final value is rendered now (no-JS / reduced-motion safe);
             counters.js animates from 0 to data-target in Phase 5. --}}
        <div class="stat-card__num tnum"
             data-counter
             data-target="{{ $value }}"
             data-prefix="{{ $prefix }}"
             data-suffix="{{ $suffix }}">
            {{ $prefix }}{{ number_format($value) }}{{ $suffix }}
        </div>
    @else
        <div class="stat-card__num tnum">{{ $display }}</div>
    @endif

    <div class="stat-card__label">{{ $label }}</div>
</div>
