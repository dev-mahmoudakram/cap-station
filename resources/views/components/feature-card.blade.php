@props([
    'title',
    'text' => null,
    'icon' => null,
    'accent' => null,   // 'gold' tints the icon chip
])

<div class="cap-card cap-card--feature" data-animate="fade-up">
    @if ($icon)
        <span @class(['cap-card__icon', 'cap-card__icon--gold' => $accent === 'gold'])>
            <x-icon :name="$icon" :size="24" />
        </span>
    @endif

    <h3 class="cap-card__title">{{ $title }}</h3>

    @if ($text)
        <p class="cap-card__text">{{ $text }}</p>
    @endif

    {{ $slot }}
</div>
