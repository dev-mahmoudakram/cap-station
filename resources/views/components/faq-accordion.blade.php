@props([
    'items' => [],          // [ ['q' => '...', 'a' => '...'], ... ]
    'id' => 'faqAccordion',
])

<div class="accordion cap-faq" id="{{ $id }}">
    @foreach ($items as $i => $item)
        @php $collapseId = $id.'-'.$i; @endphp
        <div class="accordion-item cap-faq__item" data-animate="fade-up">
            <h3 class="accordion-header">
                <button class="accordion-button @if ($i > 0) collapsed @endif"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#{{ $collapseId }}"
                        aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                        aria-controls="{{ $collapseId }}">
                    {{ $item['q'] }}
                </button>
            </h3>
            <div id="{{ $collapseId }}"
                 class="accordion-collapse collapse @if ($i === 0) show @endif"
                 data-bs-parent="#{{ $id }}">
                <div class="accordion-body">{{ $item['a'] }}</div>
            </div>
        </div>
    @endforeach
</div>
