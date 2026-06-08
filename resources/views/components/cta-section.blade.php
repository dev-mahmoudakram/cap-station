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
            <div class="cta-section__inner">
                <h2 class="cta-section__title">{{ $title }}</h2>

                @if ($text)
                    <p class="cta-section__text">{{ $text }}</p>
                @endif

                <div class="cta-section__actions">
                    @if ($primary)
                        <a href="{{ $primary['href'] }}" class="btn btn-gold btn-lg"
                           @if (!empty($primary['target'])) target="{{ $primary['target'] }}" rel="noopener" @endif>{{ $primary['label'] }}</a>
                    @endif
                    @if ($secondary)
                        <a href="{{ $secondary['href'] }}" class="btn btn-outline-light btn-lg"
                           @if (!empty($secondary['target'])) target="{{ $secondary['target'] }}" rel="noopener" @endif>{{ $secondary['label'] }}</a>
                    @endif
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</section>
