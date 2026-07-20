{{-- Compact Page Hero — For all inner pages (not homepage) --}}
@props([
    'breadcrumbs' => [],
    'badge' => '',
    'title' => '',
    'description' => '',
    'primaryLink' => '#',
    'primaryBtnText' => '',
    'secondaryLink' => '#',
    'secondaryBtnText' => '',
    'icon' => ''
])

<section class="page-hero position-relative w-100 d-flex flex-column overflow-hidden"
    style="padding-top: 110px; padding-bottom: 3.5rem;">
    
    {{-- Animated Gradient Mesh Background --}}
    <div class="position-absolute top-0 start-0 w-100 h-100 page-hero-bg" style="pointer-events: none; z-index: 0;">
        {{-- Primary glow --}}
        <div class="position-absolute page-hero-glow-1" style="width: 500px; height: 500px; top: -30%; left: -5%; filter: blur(60px); animation: pageHeroGlow1 15s ease-in-out infinite alternate;"></div>
        {{-- Accent glow --}}
        <div class="position-absolute page-hero-glow-2" style="width: 400px; height: 400px; top: -20%; right: -5%; filter: blur(70px); animation: pageHeroGlow2 18s ease-in-out infinite alternate-reverse;"></div>
        {{-- Subtle center glow --}}
        <div class="position-absolute page-hero-glow-3" style="width: 600px; height: 300px; top: 30%; left: 50%; transform: translateX(-50%); filter: blur(80px);"></div>
    </div>

    {{-- Grid pattern overlay --}}
    <div class="position-absolute top-0 start-0 w-100 h-100 page-hero-grid" style="pointer-events: none; z-index: 1;"></div>

    {{-- Bottom fade gradient --}}
    <div class="position-absolute bottom-0 start-0 w-100 page-hero-bottom-fade" style="height: 120px; pointer-events: none; z-index: 1;"></div>

    {{-- Decorative floating dots --}}
    <div class="position-absolute d-none d-lg-block page-hero-dot" style="top: 25%; left: 8%; width: 6px; height: 6px; border-radius: 50%; animation: pageHeroDot 6s ease-in-out infinite;"></div>
    <div class="position-absolute d-none d-lg-block page-hero-dot" style="top: 40%; right: 12%; width: 4px; height: 4px; border-radius: 50%; animation: pageHeroDot 8s ease-in-out infinite reverse;"></div>
    <div class="position-absolute d-none d-lg-block page-hero-dot" style="bottom: 30%; left: 15%; width: 5px; height: 5px; border-radius: 50%; animation: pageHeroDot 7s ease-in-out infinite 1s;"></div>

    {{-- Decorative line accents --}}
    <div class="position-absolute d-none d-xl-block" style="top: 20%; right: 6%; z-index: 2; pointer-events: none; opacity: 0.15;">
        <svg width="120" height="120" viewBox="0 0 120 120" fill="none">
            <circle cx="60" cy="60" r="55" stroke="var(--primary)" stroke-width="1" stroke-dasharray="6 8" opacity="0.5"/>
            <circle cx="60" cy="60" r="35" stroke="var(--accent)" stroke-width="1" stroke-dasharray="4 6" opacity="0.3"/>
        </svg>
    </div>
    <div class="position-absolute d-none d-xl-block" style="bottom: 20%; left: 5%; z-index: 2; pointer-events: none; opacity: 0.1;">
        <svg width="80" height="80" viewBox="0 0 80 80" fill="none">
            <rect x="10" y="10" width="60" height="60" rx="12" stroke="var(--primary)" stroke-width="1" stroke-dasharray="5 7"/>
        </svg>
    </div>

    {{-- Main Content Area --}}
    <div class="container position-relative d-flex flex-column align-items-center text-center px-4" style="z-index: 3;">
        
        {{-- Breadcrumbs inside Page Hero --}}
        @if(isset($breadcrumbs) && count($breadcrumbs) > 0)
        <nav aria-label="breadcrumb" class="w-100 mb-3 align-self-start text-start animate-on-scroll">
            <ol class="breadcrumb mb-0" style="font-size: 0.82rem; font-weight: 500;">
                @foreach($breadcrumbs as $label => $url)
                    @if($loop->last)
                        <li class="breadcrumb-item active text-primary-custom" aria-current="page" style="color: var(--primary) !important;">{{ $label }}</li>
                    @else
                        <li class="breadcrumb-item"><a href="{{ $url }}" class="text-muted-custom text-decoration-none" style="opacity: 0.75; transition: opacity 0.2s;">{{ $label }}</a></li>
                    @endif
                @endforeach
            </ol>
        </nav>
        @endif
        
        {{-- Top Badge --}}
        @if($badge)
        <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mx-auto mb-3 animate-on-scroll page-hero-badge" style="font-size: 0.8rem; font-weight: 600; letter-spacing: 0.02em;">
            <span class="page-hero-badge-dot"></span>
            {{ $badge }}
            <span class="page-hero-badge-dot"></span>
        </div>
        @endif

        {{-- Main Headline --}}
        <h1 class="mb-3 animate-on-scroll delay-1 page-hero-title" style="font-family: 'Plus Jakarta Sans', 'Inter', sans-serif; font-weight: 800; font-size: clamp(1.75rem, 4vw, 2.8rem); line-height: 1.18; letter-spacing: -1.2px; max-width: 800px; margin: 0 auto;">
            {!! $title !!}
        </h1>

        {{-- Description --}}
        @if($description)
        <p class="mb-4 animate-on-scroll delay-2 mx-auto page-hero-desc" style="max-width: 680px; font-size: clamp(0.88rem, 1.1vw, 1rem); line-height: 1.7; font-weight: 400;">
            {{ $description }}
        </p>
        @endif

        {{-- CTA Buttons --}}
        @if($primaryBtnText || $secondaryBtnText)
        <div class="d-flex flex-wrap gap-3 justify-content-center align-items-center animate-on-scroll delay-3">
            @if($primaryBtnText)
            <a href="{{ $primaryLink }}" class="btn rounded-2 px-4 py-2 d-inline-flex align-items-center gap-2 text-white border-0 page-hero-primary-btn" style="background: var(--gradient-primary); font-size: 0.9rem; font-weight: 600; box-shadow: 0 6px 22px var(--primary-glow); transition: all 0.3s;">
                {{ $primaryBtnText }}
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
            @endif
            @if($secondaryBtnText)
            <a href="{{ $secondaryLink }}" class="btn rounded-2 px-4 py-2 d-inline-flex align-items-center gap-2 border page-hero-secondary-btn" style="font-size: 0.9rem; font-weight: 600; backdrop-filter: blur(8px); transition: all 0.3s;">
                {{ $secondaryBtnText }}
            </a>
            @endif
        </div>
        @endif
    </div>
</section>

{{-- Page Hero Animations --}}
<style>
    @keyframes pageHeroGlow1 {
        0% { transform: translate(0, 0) scale(1); }
        100% { transform: translate(2%, 3%) scale(1.04); }
    }
    @keyframes pageHeroGlow2 {
        0% { transform: translate(0, 0) scale(1); }
        100% { transform: translate(-3%, 2%) scale(1.06); }
    }
    @keyframes pageHeroDot {
        0% { transform: translateY(0); opacity: 0.4; }
        50% { transform: translateY(-8px); opacity: 0.8; }
        100% { transform: translateY(0); opacity: 0.4; }
    }
    .page-hero-primary-btn:hover { transform: translateY(-2px); box-shadow: 0 10px 30px var(--primary-glow) !important; }
</style>
