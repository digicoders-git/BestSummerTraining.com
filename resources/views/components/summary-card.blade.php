@props(['icon', 'title', 'description'])

<div class="summary-card animate-on-scroll">
    <div class="summary-card-icon">
        {!! $icon !!}
    </div>
    <h4 class="fw-bold mb-2">{{ $title }}</h4>
    <p class="text-muted-custom small mb-0">{{ $description }}</p>
</div>
