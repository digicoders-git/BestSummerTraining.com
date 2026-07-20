@extends('layouts.app')

@section('title', (!empty($post['title']) ? $post['title'] : 'Article') . ' | BestSummerTraining')
@section('meta_description', !empty($post['meta_description']) ? $post['meta_description'] : ($post['excerpt'] ?? ''))
@section('meta_keywords', !empty($post['keywords']) ? $post['keywords'] : 'summer training, industrial training, best summer training institute, digicoders, IT courses')
@section('canonical_url', url('/blog/' . ($post['slug'] ?? '')))
@section('og_image', !empty($post['image']) ? $post['image'] : asset('assets/images/logos/logo.png'))
@section('og_type', 'article')

@section('json_ld')
@php
    $articleSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BlogPosting',
        'headline' => $post['title'] ?? '',
        'image' => [$post['image'] ?? ''],
        'datePublished' => isset($post['date']) ? date('c', strtotime($post['date'])) : date('c'),
        'dateModified' => isset($post['date']) ? date('c', strtotime($post['date'])) : date('c'),
        'author' => [
            '@type' => 'Person',
            'name' => $post['author'] ?? 'DigiCoders Team',
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'BestSummerTraining',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('assets/images/logos/logo.png'),
            ],
        ],
        'description' => strip_tags($post['excerpt'] ?? ''),
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => url('/blog/' . ($post['slug'] ?? '')),
        ],
    ];

    $faqEntities = [];
    if (!empty($post['faqs']) && is_array($post['faqs'])) {
        foreach ($post['faqs'] as $faq) {
            $q = $faq['question'] ?? $faq['q'] ?? $faq['title'] ?? '';
            $a = $faq['answer'] ?? $faq['a'] ?? $faq['content'] ?? '';
            if (!empty($q)) {
                $faqEntities[] = [
                    '@type' => 'Question',
                    'name' => $q,
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => strip_tags($a),
                    ],
                ];
            }
        }
    }
@endphp
<script type="application/ld+json">
{!! json_encode($articleSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@if(!empty($faqEntities))
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => $faqEntities,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endif
@endsection

@php
    $toc = [];
    $rawContent = $post['content'] ?? '';
    
    // Parse h2, h3, h4 tags to extract TOC items and inject IDs for smooth scrolling
    $processedContent = preg_replace_callback(
        '/<h([2-4])([^>]*)>(.*?)<\/h[2-4]>/i',
        function ($matches) use (&$toc) {
            $level = (int) $matches[1];
            $attrs = $matches[2];
            $titleHtml = $matches[3];
            $plainTitle = trim(strip_tags($titleHtml));
            
            if (empty($plainTitle)) {
                return $matches[0];
            }
            
            $id = \Illuminate\Support\Str::slug($plainTitle);
            if (empty($id)) {
                $id = 'section-' . (count($toc) + 1);
            }
            
            $toc[] = [
                'id' => $id,
                'title' => $plainTitle,
                'level' => $level,
            ];
            
            if (!str_contains($attrs, 'id=')) {
                $attrs .= ' id="' . $id . '" style="scroll-margin-top: 110px;"';
            }
            
            return "<h{$level}{$attrs}>{$titleHtml}</h{$level}>";
        },
        $rawContent
    );
@endphp

@section('content')
    <!-- Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => [
            'Home' => url('/'), 
            'Blog' => url('/blog'),
            'Article' => url()->current()
        ],
        'badge' => $post['category'],
        'title' => $post['title'],
        'description' => $post['excerpt'],
        'primaryLink' => '#article-body',
        'primaryBtnText' => 'Read Article',
        'secondaryLink' => url('/blog'),
        'secondaryBtnText' => 'Back to Blog'
    ])

    <!-- Article Content Section -->
    <div class="py-5" id="article-body">
        <div class="container">
            <div class="row g-4">
                
                <!-- Main Article Column -->
                <div class="col-lg-8">
                    <div class="why-feature-card p-4 p-md-5 border-0 overflow-hidden position-relative" style="border-radius: 24px !important;">
                        
                        <!-- Article Header Meta -->
                        <div class="d-flex flex-wrap align-items-center gap-3 mb-4 text-muted small pb-3 border-bottom" style="border-color: rgba(0, 109, 171, 0.1) !important;">
                            <div class="d-flex align-items-center gap-2 px-3 py-1.5 rounded-pill" style="background: rgba(0, 109, 171, 0.08); border: 1px solid rgba(0, 109, 171, 0.12);">
                                <i class="bi bi-patch-check-fill text-primary" style="font-size: 0.95rem;"></i>
                                <span class="fw-semibold text-primary" style="font-size: 0.82rem;">Verified Guide</span>
                            </div>
                            <div class="vr" style="height: 30px; opacity: 0.2;"></div>
                            <div>
                                <span class="d-block fw-semibold text-heading">{{ $post['date'] }}</span>
                                <span class="small" style="font-size: 0.75rem;">Published</span>
                            </div>
                            <div class="vr" style="height: 30px; opacity: 0.2;"></div>
                            <div>
                                <span class="d-block fw-semibold text-heading">{{ $post['read_time'] }}</span>
                                <span class="small" style="font-size: 0.75rem;">Reading Time</span>
                            </div>
                        </div>

                        <!-- Featured Image -->
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 16px; aspect-ratio: 4 / 3; width: 100%; max-height: 520px;">
                            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-100 h-100 object-fit-cover">
                            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(0,0,0,0.25));"></div>
                        </div>

                        <!-- Article Content -->
                        <div class="hd-text-body text-body-custom mt-4 entry-content" style="font-size: 1.05rem; line-height: 1.8;">
                            {!! $processedContent !!}
                        </div>

                        <!-- Article FAQs Section -->
                        @if (!empty($post['faqs']) && is_array($post['faqs']) && count($post['faqs']) > 0)
                            <div class="mt-5 pt-4 border-top" style="border-color: rgba(0, 109, 171, 0.12) !important;">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary-light text-primary px-3 py-1.5 rounded-pill fw-semibold" style="font-size: 0.8rem; background: rgba(0, 109, 171, 0.1);">
                                        Frequently Asked Questions
                                    </span>
                                </div>
                                <h4 class="fw-bold text-heading mb-4 h5" style="letter-spacing: -0.3px;">Questions Covered in This Guide</h4>
                                
                                <div class="accordion custom-faq-accordion" id="blogFaqAccordion">
                                    @foreach ($post['faqs'] as $index => $faq)
                                        @php
                                            $q = $faq['question'] ?? $faq['q'] ?? $faq['title'] ?? '';
                                            $a = $faq['answer'] ?? $faq['a'] ?? $faq['content'] ?? '';
                                        @endphp
                                        @if(!empty($q))
                                            <div class="accordion-item mb-3 border-0 overflow-hidden shadow-sm" style="border-radius: 16px !important; background: var(--bg-surface); border: 1px solid rgba(0, 109, 171, 0.14) !important;">
                                                <h2 class="accordion-header" id="headingFaq{{ $index }}">
                                                    <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }} fw-bold text-heading py-3.5 px-4" 
                                                            type="button" 
                                                            data-bs-toggle="collapse" 
                                                            data-bs-target="#collapseFaq{{ $index }}" 
                                                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                                                            aria-controls="collapseFaq{{ $index }}"
                                                            style="font-size: 0.98rem; border-radius: 16px !important;">
                                                        {{ $q }}
                                                    </button>
                                                </h2>
                                                <div id="collapseFaq{{ $index }}" 
                                                     class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                                                     aria-labelledby="headingFaq{{ $index }}" 
                                                     data-bs-parent="#blogFaqAccordion">
                                                    <div class="accordion-body px-4 pb-4 pt-1 text-heading opacity-90" style="font-size: 0.95rem; line-height: 1.7;">
                                                        {!! $a !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Share / Accent Block -->
                        <div class="mt-5 p-4 rounded-3 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3" 
                             style="background: rgba(10, 100, 213, 0.04); border: 1px solid rgba(10, 100, 213, 0.08);">
                            <div>
                                <h5 class="fw-bold text-heading mb-1" style="font-size: 1.1rem;">Found this article helpful?</h5>
                                <p class="text-muted-custom small mb-0">Share it with your friends or classmates who are searching for training institutes.</p>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="https://api.whatsapp.com/send?text={{ urlencode($post['title'] . ' - ' . url()->current()) }}" target="_blank" class="btn btn-success btn-sm px-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-1">
                                    WhatsApp
                                </a>
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($post['title']) }}&url={{ urlencode(url()->current()) }}" target="_blank" class="btn btn-dark btn-sm px-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-1">
                                    Twitter
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sticky Sidebar Column -->
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-4 blog-detail-sidebar">
                        
                        <!-- 1. Table of Contents (TOC) Card -->
                        @if(!empty($toc))
                            <div class="why-feature-card p-4 border-0 shadow-sm" style="border-radius: 24px !important;">
                                <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom" style="border-color: rgba(0,109,171,0.08) !important;">
                                    <i class="bi bi-list-nested text-primary fs-5"></i>
                                    <h5 class="fw-bold mb-0 text-heading" style="font-size: 1.05rem;">Table of Contents</h5>
                                </div>
                                <nav id="toc-nav" class="toc-navigation">
                                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2" style="font-size: 0.88rem;">
                                        @foreach($toc as $item)
                                            <li class="toc-item level-{{ $item['level'] }}" style="padding-left: {{ max(0, ($item['level'] - 2) * 12) }}px;">
                                                <a href="#{{ $item['id'] }}" class="toc-link text-decoration-none text-body dark-text-light opacity-90 d-flex align-items-center gap-2 py-1">
                                                    <span class="toc-dot rounded-circle bg-primary opacity-50" style="width: 6px; height: 6px; flex-shrink: 0; transition: all 0.2s;"></span>
                                                    <span class="toc-text text-truncate">{{ $item['title'] }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        @endif

                        <!-- 2. Recent Posts Card -->
                        <div class="why-feature-card p-4 border-0 shadow-sm" style="border-radius: 24px !important;">
                            <div class="d-flex align-items-center justify-content-between mb-4 pb-2 border-bottom" style="border-color: rgba(0,109,171,0.08) !important;">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-journal-text text-primary fs-5"></i>
                                    <h5 class="fw-bold mb-0 text-heading" style="font-size: 1.05rem;">Recent Posts</h5>
                                </div>
                                <span class="badge bg-primary text-white px-2.5 py-1 rounded-pill" style="font-size: 0.68rem;">Latest</span>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                @foreach (array_slice($allPosts, 0, 5, true) as $otherSlug => $otherPost)
                                    @if ($otherSlug !== $post['slug'])
                                        <a href="{{ url('/blog/' . $otherSlug) }}" class="text-decoration-none d-flex gap-3 group align-items-center pb-2.5 border-bottom border-light-subtle">
                                            <div class="overflow-hidden rounded-3 shadow-xs position-relative" style="width: 76px; aspect-ratio: 4 / 3; flex-shrink: 0;">
                                                <img src="{{ $otherPost['image'] }}" alt="{{ $otherPost['title'] }}" class="w-100 h-100 object-fit-cover transition-transform" style="transition: transform 0.4s;">
                                            </div>
                                            <div class="flex-grow-1 min-w-0">
                                                <span class="badge text-primary border-0 px-2 py-0.5 mb-1 d-inline-block fw-semibold" style="border-radius: 4px; font-size: 0.65rem; background: rgba(0, 109, 171, 0.08);">
                                                    {{ $otherPost['category'] }}
                                                </span>
                                                <h6 class="fw-bold text-heading mb-1 text-limit-2" style="font-size: 0.85rem; line-height: 1.35; transition: color 0.2s;">
                                                    {{ $otherPost['title'] }}
                                                </h6>
                                                <span class="small text-muted" style="font-size: 0.72rem;">{{ $otherPost['date'] }}</span>
                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <!-- 3. CTA Premium Card -->
                        <div class="why-feature-card p-4 border-0 text-white overflow-hidden position-relative shadow-sm" 
                             style="border-radius: 24px !important; background: var(--gradient-primary) !important;">
                            <!-- Glow background -->
                            <div class="position-absolute" style="width: 150px; height: 150px; background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 75%); top: -20px; right: -20px; filter: blur(20px); pointer-events: none;"></div>
                            
                            <h4 class="fw-bold mb-3 h5" style="letter-spacing: -0.2px;">Compare Training Institutes</h4>
                            <p class="small mb-4 text-white-50" style="line-height: 1.6;">
                                Don't rely on guesswork. Compare top-rated IT training programs in India side-by-side based on actual placement data, faculty profiles, and practical ratings.
                            </p>
                            <a class="btn btn-light text-primary fw-bold w-100 rounded-pill py-2.5 shadow-sm border-0 d-flex align-items-center justify-content-center gap-1" 
                               href="{{ url('/summer-training-comparison') }}" 
                               style="font-size: 0.88rem; transition: all 0.3s;">
                                Compare Programs &rarr;
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('styles')
    <style>
        .text-limit-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .entry-content p {
            margin-bottom: 1.5rem;
            color: var(--text-body);
        }
        .entry-content h4, .entry-content h3, .entry-content h2 {
            color: var(--text-heading);
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        .entry-content img {
            width: 100%;
            height: auto;
            aspect-ratio: 4 / 3;
            object-fit: cover;
            border-radius: 16px;
            margin: 1.5rem 0;
        }
        .group:hover img {
            transform: scale(1.08);
        }
        .group:hover h6 {
            color: var(--primary) !important;
        }

        /* Sticky Sidebar Styling */
        @media (min-width: 992px) {
            .blog-detail-sidebar {
                position: -webkit-sticky;
                position: sticky;
                top: 100px;
                z-index: 10;
            }
        }

        /* TOC Styling */
        .toc-link {
            transition: all 0.25s ease;
        }
        .toc-link:hover, .toc-link.active {
            color: var(--primary) !important;
            font-weight: 700 !important;
            transform: translateX(4px);
        }
        .toc-link.active .toc-dot {
            opacity: 1 !important;
            transform: scale(1.6);
            background-color: var(--primary) !important;
        }
    </style>
    @endpush

    @push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const tocLinks = document.querySelectorAll('.toc-link');
        if (tocLinks.length === 0) return;

        const sections = [];
        tocLinks.forEach(link => {
            const id = link.getAttribute('href').replace('#', '');
            const section = document.getElementById(id);
            if (section) sections.push(section);
        });

        if (sections.length > 0) {
            const observerOptions = {
                rootMargin: '-100px 0px -60% 0px',
                threshold: 0
            };

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        tocLinks.forEach(l => l.classList.remove('active'));
                        const activeLink = document.querySelector(`.toc-link[href="#${entry.target.id}"]`);
                        if (activeLink) activeLink.classList.add('active');
                    }
                });
            }, observerOptions);

            sections.forEach(section => observer.observe(section));
        }
    });
    </script>
    @endpush
@endsection
