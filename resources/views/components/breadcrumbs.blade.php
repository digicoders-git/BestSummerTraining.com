@if(isset($breadcrumbs) && count($breadcrumbs) > 0)
<nav aria-label="breadcrumb" class="py-3 bg-primary-custom bg-opacity-10 border-bottom border-primary border-opacity-10" style="margin-top: 90px;">
    <div class="container">
        <ol class="breadcrumb mb-0">
            @foreach($breadcrumbs as $label => $url)
                @if($loop->last)
                    <li class="breadcrumb-item active text-primary-custom fw-medium" aria-current="page">{{ $label }}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{ $url }}" class="text-muted-custom text-decoration-none">{{ $label }}</a></li>
                @endif
            @endforeach
        </ol>
    </div>
</nav>

<!-- Breadcrumb JSON-LD -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "BreadcrumbList",
  "itemListElement": [
    @foreach($breadcrumbs as $label => $url)
    {
      "@@type": "ListItem",
      "position": {{ $loop->iteration }},
      "name": "{{ $label }}",
      "item": "{{ $url }}"
    }{{ !$loop->last ? ',' : '' }}
    @endforeach
  ]
}
</script>
@endif

