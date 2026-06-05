@props([
    'title',
    'text' => null,
    'primary' => null,      // ['label' => '', 'href' => '']
    'secondary' => null,    // ['label' => '', 'href' => '']
    'id' => 'join',
])

<section class="section cta-section" id="{{ $id }}">
    <div class="container">
        <div class="cta-section__panel" data-animate="fade-up">
            {{-- Decorative route line (animated in Phase 5) --}}
            <svg class="cta-section__road" viewBox="0 0 600 120" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0 90 C 150 30, 320 110, 600 40" fill="none"
                      stroke="rgba(255,255,255,0.25)" stroke-width="2" />
                <path d="M0 90 C 150 30, 320 110, 600 40" fill="none"
                      stroke="var(--brand-secondary)" stroke-width="2"
                      stroke-dasharray="2 16" stroke-linecap="round" />
            </svg>

            <div class="cta-section__inner">
                <h2 class="cta-section__title">{{ $title }}</h2>

                @if ($text)
                    <p class="cta-section__text">{{ $text }}</p>
                @endif

                <div class="cta-section__actions">
                    @if ($primary)
                        <a href="{{ $primary['href'] }}" class="btn btn-gold btn-lg">{{ $primary['label'] }}</a>
                    @endif
                    @if ($secondary)
                        <a href="{{ $secondary['href'] }}" class="btn btn-outline-light btn-lg">{{ $secondary['label'] }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
