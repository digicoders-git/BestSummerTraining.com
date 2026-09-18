@extends('layouts.app')

@section('title', (!empty($post['meta_title']) ? $post['meta_title'] : (!empty($post['title']) ? $post['title'] : 'Article')) . ' | BestSummerTraining')
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
                'width' => 250,
                'height' => 60,
            ],
        ],
        'description' => strip_tags($post['excerpt'] ?? ''),
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => url('/blog/' . ($post['slug'] ?? '')),
        ],
    ];

    $breadcrumbSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => url('/'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Blog',
                'item' => url('/blog'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => $post['title'] ?? 'Article',
                'item' => url('/blog/' . ($post['slug'] ?? '')),
            ],
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
<script type="application/ld+json">
{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
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

    // Auto-inject alt, title, and loading=lazy attributes into content img tags if missing
    $processedContent = preg_replace_callback(
        '/<img([^>]*)>/i',
        function ($imgMatches) use ($post) {
            $imgAttrs = $imgMatches[1];
            $postTitle = e($post['title'] ?? 'Blog Image');
            if (!str_contains($imgAttrs, 'alt=')) {
                $imgAttrs .= ' alt="' . $postTitle . '"';
            }
            if (!str_contains($imgAttrs, 'title=')) {
                $imgAttrs .= ' title="' . $postTitle . '"';
            }
            if (!str_contains($imgAttrs, 'loading=')) {
                $imgAttrs .= ' loading="lazy"';
            }
            return "<img{$imgAttrs}>";
        },
        $processedContent
    );
@endphp

@section('content')
    <!-- Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => [
            'Home' => url('/'), 
            'Blogs' => url('/blog'),
            'Article' => url()->current()
        ],
        'badge' => $post['category'],
        'title' => $post['title'],
        'description' => $post['excerpt'],
        'primaryLink' => '#article-body',
        'primaryBtnText' => 'Read Article',
        'secondaryLink' => url('/blog'),
        'secondaryBtnText' => 'Back to Blogs'
    ])

    <!-- Article Content Section -->
    <div class="py-5" id="article-body">
        <div class="container">
            <div class="row g-4">
                
                <!-- Main Article Column -->
                <div class="col-lg-8">
                    <div class="why-feature-card p-4 p-md-5 border-0 overflow-hidden position-relative" style="border-radius: 24px !important;">
                        
                        <!-- Article Header Meta -->
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4 text-muted small pb-3 border-bottom" style="border-color: rgba(0, 109, 171, 0.1) !important;">
                            <div class="d-flex flex-wrap align-items-center gap-3">
                                <div class="d-flex align-items-center gap-2 px-3 py-1.5 rounded-pill" style="background: rgba(0, 109, 171, 0.08); border: 1px solid rgba(0, 109, 171, 0.12);">
                                    <i class="bi bi-person-fill text-primary" style="font-size: 0.95rem;"></i>
                                    <span class="fw-semibold text-primary" style="font-size: 0.82rem;">{{ $post['author'] ?? 'DigiCoders Team' }}</span>
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
                                <div class="vr" style="height: 30px; opacity: 0.2;"></div>
                                <div>
                                    <span class="d-block fw-semibold text-heading"><i class="bi bi-eye-fill text-primary me-1"></i>{{ number_format($post['views_count'] ?? 0) }}</span>
                                    <span class="small" style="font-size: 0.75rem;">Views</span>
                                </div>
                            </div>

                            <!-- Top Share Links -->
                            <div class="d-flex align-items-center gap-1.5">
                                <span class="fw-semibold text-heading me-1 small" style="font-size: 0.78rem;">Share:</span>
                                <a href="https://api.whatsapp.com/send?text={{ urlencode($post['title'] . ' - ' . url()->current()) }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-light border-0 rounded-circle text-success shadow-xs d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background: rgba(37, 211, 102, 0.1);" title="Share on WhatsApp">
                                    <i class="bi bi-whatsapp" style="font-size: 0.9rem;"></i>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-light border-0 rounded-circle text-primary shadow-xs d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background: rgba(24, 119, 242, 0.1);" title="Share on Facebook">
                                    <i class="bi bi-facebook" style="font-size: 0.9rem;"></i>
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-light border-0 rounded-circle text-info shadow-xs d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background: rgba(10, 102, 194, 0.1);" title="Share on LinkedIn">
                                    <i class="bi bi-linkedin" style="font-size: 0.9rem;"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($post['title']) }}&url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-light border-0 rounded-circle text-dark shadow-xs d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background: rgba(0, 0, 0, 0.08);" title="Share on X (Twitter)">
                                    <i class="bi bi-twitter-x" style="font-size: 0.9rem;"></i>
                                </a>
                                <a href="javascript:void(0)" onclick="if(navigator.clipboard){navigator.clipboard.writeText(window.location.href);alert('Article link copied to clipboard! You can share it on Instagram.');}" class="btn btn-sm btn-light border-0 rounded-circle text-danger shadow-xs d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background: rgba(225, 48, 108, 0.1);" title="Share on Instagram">
                                    <i class="bi bi-instagram" style="font-size: 0.9rem;"></i>
                                </a>
                            </div>
                        </div>

                        @if(!empty($post['excerpt']))
                            <!-- Short Description / Excerpt -->
                            <div class="blog-short-description mb-4 p-3.5 rounded-3" style="background: rgba(0, 109, 171, 0.04); border-left: 4px solid var(--primary); font-size: 1.02rem; line-height: 1.6; color: var(--text-heading);">
                                <p class="mb-0 fw-medium opacity-90">{{ $post['excerpt'] }}</p>
                            </div>
                        @endif

                        <!-- Featured Image -->
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 16px; aspect-ratio: 16 / 9; width: 100%; max-height: 520px; background: rgba(0,0,0,0.03);">
                            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-100 h-100 object-fit-cover">
                        </div>

                        <!-- Article Content Container with Read More Toggle -->
                        <div class="position-relative mt-4 mb-2">
                            <div id="blog-content-wrapper" class="blog-content-collapsed">
                                <div class="hd-text-body text-body-custom entry-content" style="font-size: 1.05rem; line-height: 1.8;">
                                    {!! $processedContent !!}
                                </div>
                            </div>
                            
                            <!-- Gradient Fade Overlay -->
                            <div id="blog-content-fade" class="blog-content-fade-overlay"></div>

                            <!-- Read More / Read Less Toggle Button -->
                            <div id="read-more-wrapper" class="text-center mt-3 pt-2 position-relative" style="z-index: 5;">
                                <button type="button" 
                                        id="btn-toggle-read-more" 
                                        onclick="toggleBlogContentReadMore()" 
                                        class="btn btn-primary rounded-pill px-4 py-2.5 fw-semibold shadow-sm d-inline-flex align-items-center gap-2"
                                        style="font-size: 0.92rem; letter-spacing: 0.2px;">
                                    <span id="read-more-btn-text">Read More</span>
                                    <i class="bi bi-chevron-down fw-bold ms-1" id="read-more-btn-icon" style="transition: transform 0.3s ease;"></i>
                                </button>
                            </div>
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
                            <div class="d-flex flex-wrap gap-2">
                                <a href="https://api.whatsapp.com/send?text={{ urlencode($post['title'] . ' - ' . url()->current()) }}" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-sm px-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-1">
                                    <i class="bi bi-whatsapp"></i> WhatsApp
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm px-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-1">
                                    <i class="bi bi-facebook"></i> Facebook
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="btn btn-info text-white btn-sm px-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-1">
                                    <i class="bi bi-linkedin"></i> LinkedIn
                                </a>
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($post['title']) }}&url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="btn btn-dark btn-sm px-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-1">
                                    <i class="bi bi-twitter-x"></i> 
                                </a>
                                <a href="javascript:void(0)" onclick="if(navigator.clipboard){navigator.clipboard.writeText(window.location.href);alert('Article link copied to clipboard! You can share it on Instagram.');}" class="btn btn-danger btn-sm px-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-1">
                                    <i class="bi bi-instagram"></i> Instagram
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
                                            <div class="overflow-hidden rounded-3 shadow-xs position-relative" style="width: 84px; aspect-ratio: 16 / 9; flex-shrink: 0;">
                                                <img src="{{ $otherPost['image'] }}" alt="{{ $otherPost['title'] }}" class="w-100 h-100 object-fit-cover transition-transform" style="transition: transform 0.4s;">
                                            </div>
                                            <div class="flex-grow-1 min-w-0">
                                                <span class="badge text-primary border-0 px-2 py-0.5 mb-1 d-inline-block fw-semibold" style="border-radius: 4px; font-size: 0.65rem; background: rgba(0, 109, 171, 0.08);">
                                                    {{ $otherPost['category'] }}
                                                </span>
                                                <h6 class="fw-bold text-heading mb-1 text-limit-2" style="font-size: 0.85rem; line-height: 1.35; transition: color 0.2s;">
                                                    {{ $otherPost['title'] }}
                                                </h6>
                                                <div class="d-flex align-items-center gap-2 small text-muted" style="font-size: 0.72rem;">
                                                    <span>{{ $otherPost['date'] }}</span>
                                                    <span>&bull;</span>
                                                    <span><i class="bi bi-eye-fill text-primary"></i> {{ number_format($otherPost['views_count'] ?? 0) }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <!-- 3. Sidebar Callback Inquiry Form -->
                        <div class="why-feature-card p-4 border-0 shadow-sm" style="border-radius: 24px !important; background: var(--bg-surface);">
                            <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom" style="border-color: rgba(0,109,171,0.08) !important;">
                                <i class="bi bi-telephone-inbound-fill text-primary fs-5"></i>
                                <h5 class="fw-bold mb-0 text-heading" style="font-size: 1.05rem;">Request Callback</h5>
                            </div>
                            <p class="text-muted-custom small mb-3" style="font-size: 0.82rem; line-height: 1.5;">
                                Want expert guidance for summer training? Leave your details below and we will call you back.
                            </p>
                            
                            <form id="sidebarCallbackForm" onsubmit="return handleSidebarLeadSubmit(event)">
                                <div class="mb-3">
                                    <label for="sidebarLeadName" class="form-label small fw-semibold text-heading mb-1" style="font-size: 0.8rem;">Your Name</label>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text bg-transparent border-end-0 text-muted"><i class="bi bi-person"></i></span>
                                        <input type="text" 
                                               class="form-control form-control-sm border-start-0 ps-0" 
                                               id="sidebarLeadName" 
                                               name="name" 
                                               placeholder="Enter your full name" 
                                               required 
                                               style="font-size: 0.85rem;">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="sidebarLeadMobile" class="form-label small fw-semibold text-heading mb-1" style="font-size: 0.8rem;">Mobile Number</label>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text bg-transparent border-end-0 text-muted"><i class="bi bi-phone"></i></span>
                                        <input type="tel" 
                                               class="form-control form-control-sm border-start-0 ps-0" 
                                               id="sidebarLeadMobile" 
                                               name="mobile" 
                                               placeholder="10-digit mobile number" 
                                               required 
                                               pattern="[6-9][0-9]{9}" 
                                               maxlength="10" 
                                               title="Mobile number must start with 6, 7, 8, or 9 and be exactly 10 digits"
                                               oninput="this.value = this.value.replace(/[^0-9]/g, ''); if(this.value.length > 10) this.value = this.value.slice(0, 10);"
                                               style="font-size: 0.85rem;">
                                    </div>
                                    <div class="form-text text-muted" style="font-size: 0.72rem;">Must start with 6, 7, 8, or 9 (10 digits)</div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-sm w-100 rounded-pill py-2.5 fw-semibold d-flex align-items-center justify-content-center gap-1 shadow-xs" style="font-size: 0.85rem;">
                                    <i class="bi bi-send-fill" style="font-size: 0.75rem;"></i> Request Callback
                                </button>
                                <div id="sidebarLeadSuccess" class="alert alert-success p-2 mt-2 text-center small d-none mb-0" style="font-size: 0.78rem;">
                                    <i class="bi bi-check-circle-fill me-1"></i> Thank you! Request submitted.
                                </div>
                            </form>
                        </div>

                        <!-- 4. Direct Counseling Call & WhatsApp CTA Card -->
                        <div class="why-feature-card p-4 border-0 text-white overflow-hidden position-relative shadow-sm text-center" 
                             style="border-radius: 24px !important; background: var(--gradient-primary) !important;">
                            <!-- Glow background -->
                            <div class="position-absolute" style="width: 150px; height: 150px; background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 75%); top: -20px; right: -20px; filter: blur(20px); pointer-events: none;"></div>
                            
                            <h4 class="fw-bold mb-2 h5" style="letter-spacing: -0.2px;">Need Instant Guidance?</h4>
                            <p class="small mb-4 text-white-50" style="line-height: 1.6;">
                                Connect directly with our training counselors for instant assistance, course syllabus, and fee details.
                            </p>

                            <div class="d-flex align-items-center justify-content-center gap-3">
                                <a href="tel:9198483820" 
                                   class="btn btn-light text-primary rounded-circle shadow-sm d-flex align-items-center justify-content-center flex-shrink-0" 
                                   style="width: 50px; height: 50px; transition: transform 0.3s;" 
                                   title="Call Counselor">
                                    <i class="bi bi-telephone-fill fs-5"></i>
                                </a>
                                <a href="https://wa.me/919198483820?text=Hello%20DigiCoders,%20I%20want%20information%20regarding%20summer%20training%20courses." 
                                   target="_blank" 
                                   rel="noopener noreferrer" 
                                   class="btn btn-success text-white rounded-circle shadow-sm d-flex align-items-center justify-content-center flex-shrink-0" 
                                   style="width: 50px; height: 50px; background-color: #25d366; border: none; transition: transform 0.3s;" 
                                   title="WhatsApp Counselor">
                                    <i class="bi bi-whatsapp fs-5"></i>
                                </a>
                            </div>
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
            aspect-ratio: 16 / 9;
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

        /* TOC Styling & Internal Scrollability */
        .toc-navigation {
            max-height: 300px;
            overflow-y: auto;
            padding-right: 6px;
            scroll-behavior: smooth;
        }
        .toc-navigation::-webkit-scrollbar {
            width: 5px;
        }
        .toc-navigation::-webkit-scrollbar-track {
            background: rgba(0, 109, 171, 0.05);
            border-radius: 4px;
        }
        .toc-navigation::-webkit-scrollbar-thumb {
            background: rgba(0, 109, 171, 0.25);
            border-radius: 4px;
        }
        .toc-navigation::-webkit-scrollbar-thumb:hover {
            background: var(--primary);
        }
        .toc-link {
            transition: all 0.25s ease;
        }
        .toc-link:hover, .toc-link.active {
            color: var(--primary) !important;
            font-weight: 700 !important;
            transform: translateX(4px);
        }
        /* Read More Expander & Fade Overlay Styling */
        .blog-content-collapsed {
            max-height: 480px;
            overflow: hidden;
            position: relative;
            transition: max-height 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .blog-content-expanded {
            max-height: 50000px !important;
            overflow: visible;
            transition: max-height 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .blog-content-fade-overlay {
            position: absolute;
            bottom: 45px;
            left: 0;
            right: 0;
            height: 180px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.95) 60%, var(--bg-surface, #ffffff) 100%);
            pointer-events: none;
            z-index: 4;
            transition: opacity 0.4s ease, visibility 0.4s ease;
        }

        [data-bs-theme="dark"] .blog-content-fade-overlay {
            background: linear-gradient(to bottom, rgba(15, 23, 42, 0) 0%, rgba(15, 23, 42, 0.95) 60%, var(--bg-surface, #0f172a) 100%);
        }

        .blog-content-fade-hidden {
            opacity: 0 !important;
            visibility: hidden !important;
        }
    </style>
    @endpush

    @push('scripts')
    <script>
    function handleSidebarLeadSubmit(event) {
        event.preventDefault();
        const form = document.getElementById('sidebarCallbackForm');
        const nameInput = document.getElementById('sidebarLeadName');
        const mobileInput = document.getElementById('sidebarLeadMobile');
        const successAlert = document.getElementById('sidebarLeadSuccess');
        const submitBtn = form ? form.querySelector('button[type="submit"]') : null;
        
        if (!nameInput || !mobileInput) return false;

        const name = nameInput.value.trim();
        const mobile = mobileInput.value.trim();

        const mobileRegex = /^[6-9]\d{9}$/;
        if (!mobileRegex.test(mobile)) {
            alert('Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9.');
            mobileInput.focus();
            return false;
        }

        if (!name) {
            alert('Please enter your name.');
            nameInput.focus();
            return false;
        }

        const originalBtnText = submitBtn ? submitBtn.innerHTML : '';
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Submitting...';
        }

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
        
        fetch('{{ route('inquiry.store') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                name: name,
                mobile: mobile,
                page_url: window.location.href
            })
        })
        .then(response => response.json())
        .then(data => {
            if (successAlert) {
                successAlert.classList.remove('d-none');
            }
            nameInput.value = '';
            mobileInput.value = '';
            setTimeout(() => {
                if (successAlert) successAlert.classList.add('d-none');
            }, 6000);
        })
        .catch(err => {
            console.error('Email inquiry dispatch error:', err);
            alert('Submission failed. Please try again.');
        })
        .finally(() => {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        });

        return false;
    }

    function toggleBlogContentReadMore() {
        const wrapper = document.getElementById('blog-content-wrapper');
        const fade = document.getElementById('blog-content-fade');
        const btnText = document.getElementById('read-more-btn-text');
        const btnIcon = document.getElementById('read-more-btn-icon');

        if (!wrapper) return;

        if (wrapper.classList.contains('blog-content-collapsed')) {
            wrapper.classList.remove('blog-content-collapsed');
            wrapper.classList.add('blog-content-expanded');
            if (fade) fade.classList.add('blog-content-fade-hidden');
            if (btnText) btnText.textContent = 'Read Less';
            if (btnIcon) {
                btnIcon.classList.remove('bi-chevron-down');
                btnIcon.classList.add('bi-chevron-up');
            }
        } else {
            wrapper.classList.remove('blog-content-expanded');
            wrapper.classList.add('blog-content-collapsed');
            if (fade) fade.classList.remove('blog-content-fade-hidden');
            if (btnText) btnText.textContent = 'Read More';
            if (btnIcon) {
                btnIcon.classList.remove('bi-chevron-up');
                btnIcon.classList.add('bi-chevron-down');
            }

            const articleBody = document.getElementById('article-body');
            if (articleBody) {
                articleBody.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Auto expand if article content height is already less than or equal to 500px
        const wrapper = document.getElementById('blog-content-wrapper');
        const fade = document.getElementById('blog-content-fade');
        const btnWrapper = document.getElementById('read-more-wrapper');
        const entryContent = wrapper ? wrapper.querySelector('.entry-content') : null;

        if (entryContent && wrapper && entryContent.scrollHeight <= 500) {
            wrapper.classList.remove('blog-content-collapsed');
            wrapper.classList.add('blog-content-expanded');
            if (fade) fade.style.display = 'none';
            if (btnWrapper) btnWrapper.style.display = 'none';
        }

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
