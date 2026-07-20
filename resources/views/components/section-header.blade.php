@props([
    'badge' => null,
    'title',
    'subtitle' => null,
    'divider' => false,
])

<div class="text-center mb-5 fade-up animate-on-scroll">
    @if($badge)
        <span class="badge-premium mb-3">{{ $badge }}</span>
    @endif
    <h2 class="fw-bold mb-3">{{ $title }}</h2>
    @if($subtitle)
        <p class="text-muted-custom max-w-2xl mx-auto mb-0" style="max-w: 600px; margin-left: auto; margin-right: auto;">{{ $subtitle }}</p>
    @endif
    @if($divider)
        <div class="w-12 h-1 bg-primary-custom mx-auto mt-4 rounded-pill" style="width: 50px; height: 3px;"></div>
    @endif
</div>