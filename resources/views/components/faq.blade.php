@php
    $id = 'faq-' . Str::random(5);
@endphp

<div class="accordion accordion-flush animate-on-scroll mb-3" id="{{ $id }}-parent">
    <div class="accordion-item glass-surface border rounded-4 overflow-hidden">
        <h2 class="accordion-header m-0">
            <button class="accordion-button collapsed bg-transparent text-heading fw-bold shadow-none p-4 d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $id }}-collapse" aria-expanded="false" aria-controls="{{ $id }}-collapse" style="font-size: 1.05rem;">
                {{ $question }}
                <span class="faq-icon d-flex align-items-center justify-content-center ms-3 rounded-circle bg-primary-light text-primary" style="min-width: 32px; height: 32px; transition: transform 0.3s ease;">
                    <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    <svg class="minus-icon d-none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                </span>
            </button>
        </h2>
        <div id="{{ $id }}-collapse" class="accordion-collapse collapse" data-bs-parent="#{{ $id }}-parent">
            <div class="accordion-body pt-0 pb-4 px-4 text-muted-custom" style="font-size: 0.95rem; line-height: 1.6;">
                {{ $answer }}
            </div>
        </div>
    </div>
</div>

<style>
    .accordion-button:not(.collapsed) .plus-icon { display: none; }
    .accordion-button:not(.collapsed) .minus-icon { display: block !important; }
    .accordion-button:not(.collapsed) .faq-icon {
        background: var(--primary) !important;
        color: white !important;
        transform: rotate(180deg);
    }
    .accordion-button::after { display: none !important; }
</style>
