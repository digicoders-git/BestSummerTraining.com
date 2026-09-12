@extends('layouts.app')

@section('title', 'Guides & Career Blog | BestSummerTraining')
@section('meta_description', 'Unbiased guidance, tech reviews, and insights to help you choose the right summer training and internship programs.')

@section('content')
    <!-- Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => ['Home' => url('/'), 'Blogs' => url()->current()],
        'badge' => 'Blog & Career Guides',
        'title' => 'Latest Industry <span class="text-accent">Insights</span> & Guides',
        'description' => 'Unbiased research, tech comparisons, and expert advice to help you choose the perfect IT training program.',
        'primaryLink' => '#blog-list',
        'primaryBtnText' => 'Read Articles',
        'secondaryLink' => url('/summer-training-comparison'),
        'secondaryBtnText' => 'Compare Programs'
    ])

    <!-- Blog Posts Grid Section -->
    <section class="py-5" id="blog-list">
        <div class="container py-4">
            <div class="row g-4">
                @forelse ($posts as $slug => $post)
                    <div class="col-lg-4 col-md-6 fade-up animate-on-scroll">
                        <div class="why-feature-card h-100 d-flex flex-column overflow-hidden border-0" 
                             style="border-radius: 24px !important; transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);">
                            
                            <!-- Blog Image Container -->
                            <div class="position-relative overflow-hidden" style="aspect-ratio: 16 / 9; width: 100%; border-radius: 24px 24px 0 0;">
                                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-100 h-100 object-fit-cover blog-card-image" style="transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);">
                                <span class="position-absolute top-3 start-3 badge bg-primary text-white border-0 px-2.5 py-1 fw-semibold" style="border-radius: 30px; font-size: 0.72rem;">
                                    {{ $post['category'] }}
                                </span>
                            </div>

                            <!-- Blog Card Body -->
                            <div class="p-3.5 p-md-4 flex-grow-1 d-flex flex-column">
                                <div class="d-flex align-items-center gap-2 mb-2 text-muted" style="font-size: 0.78rem;">
                                    <span>{{ $post['date'] }}</span>
                                    <span>&bull;</span>
                                    <span>{{ $post['read_time'] }}</span>
                                </div>
                                
                                <h3 class="fw-bold mb-2 h6 hd-text-heading text-limit-2" style="font-size: 1.02rem; line-height: 1.35; transition: color 0.3s;">
                                    <a href="{{ url('/blog/' . $slug) }}" class="text-decoration-none text-reset stretched-link">
                                        {{ $post['title'] }}
                                    </a>
                                </h3>
                                
                                <p class="hd-text-body text-muted-custom small flex-grow-1 mb-3 text-limit-2" style="line-height: 1.5; font-size: 0.85rem;">
                                    {{ $post['excerpt'] }}
                                </p>

                                <div class="d-flex align-items-center justify-content-between pt-2.5 mt-auto border-top" style="border-color: rgba(0, 109, 171, 0.1) !important;">
                                    <div class="d-flex align-items-center gap-1 text-primary small fw-semibold text-truncate me-2" style="font-size: 0.78rem; max-width: 150px;">
                                        <i class="bi bi-person-fill"></i>
                                        <span class="text-truncate">{{ $post['author'] ?? 'DigiCoders Team' }}</span>
                                    </div>
                                    <span class="small fw-bold text-primary d-flex align-items-center gap-1" style="font-size: 0.8rem;">
                                        Read Article &rarr;
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="p-5 rounded-4 bg-body-tertiary border text-center">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="text-muted mb-3">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                            </svg>
                            <h4 class="fw-bold mb-2">No Articles Available Yet</h4>
                            <p class="text-muted small mb-0" style="max-width: 480px; margin: 0 auto;">
                                No blog articles are currently published for location <strong>bestsummertraining</strong>. Please check back soon as new articles are published regularly.
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Style overrides for blog card height and image scaling -->
    @push('styles')
    <style>
        .why-feature-card:hover .blog-card-image {
            transform: scale(1.08);
        }
        .text-limit-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    @endpush
@endsection
