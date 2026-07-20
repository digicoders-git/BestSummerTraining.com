<!-- SEO Meta Tags -->
<title>@yield('title', 'Best Summer Training Institute Comparison | DigiCoders vs Others')</title>
<meta name="description" content="@yield('meta_description', 'Compare summer training, industrial training, 6-month internships, and professional IT courses in India. Honest fee structure, curriculum, and placement comparison.')">
<meta name="keywords" content="@yield('meta_keywords', 'best summer training institute, summer training in lucknow, industrial training, python summer training, mern stack training, php summer training, 45 days summer training, 6 months internship, digicoders technologies, best IT training institute')">
<meta name="author" content="BestSummerTraining">

<!-- Favicons -->
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

<!-- Canonical URL -->
<link rel="canonical" href="@yield('canonical_url', url()->current())">

<!-- Open Graph / Facebook / WhatsApp Link Sharing Preview -->
<meta property="og:type" content="@yield('og_type', 'website')">
<meta property="og:url" content="@yield('canonical_url', url()->current())">
<meta property="og:title" content="@yield('title', 'Best Summer Training Institute Comparison | DigiCoders vs Others')">
<meta property="og:description" content="@yield('meta_description', 'Compare summer training, industrial training, 6-month internships, and professional IT courses in India. Honest fee structure, curriculum, and placement comparison.')">
<meta property="og:image" content="@yield('og_image', asset('assets/images/logos/og-image.png'))">
<meta property="og:image:secure_url" content="@yield('og_image', asset('assets/images/logos/og-image.png'))">
<meta property="og:image:type" content="image/png">
<meta property="og:site_name" content="BestSummerTraining">
<meta property="og:locale" content="en_US">

<!-- Twitter Card Link Sharing Preview -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="@yield('canonical_url', url()->current())">
<meta name="twitter:title" content="@yield('title', 'Best Summer Training Institute Comparison | DigiCoders vs Others')">
<meta name="twitter:description" content="@yield('meta_description', 'Compare summer training, industrial training, 6-month internships, and professional IT courses in India.')">
<meta name="twitter:image" content="@yield('og_image', asset('assets/images/logos/og-image.png'))">

<!-- Robots & Indexing -->
<meta name="robots" content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">
<meta name="googlebot" content="index, follow">

<!-- JSON-LD Structured Data -->
@if(View::hasSection('json_ld'))
    @yield('json_ld')
@else
@php
    $defaultSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'BestSummerTraining',
        'url' => url('/'),
        'description' => 'Comprehensive IT summer training and internship comparison platform.',
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'BestSummerTraining',
            'logo' => asset('assets/images/logos/og-image.png'),
        ],
    ];
@endphp
<script type="application/ld+json">
{!! json_encode($defaultSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endif
