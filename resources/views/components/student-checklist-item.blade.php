@props(['title', 'description' => null])

<div class="checklist-item animate-on-scroll">
    <div class="checklist-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
    </div>
    <div class="ms-3">
        <h5 class="fw-bold mb-1">{{ $title }}</h5>
        @if($description)
            <p class="text-muted-custom small mb-0">{{ $description }}</p>
        @endif
        {{ $slot }}
    </div>
</div>
