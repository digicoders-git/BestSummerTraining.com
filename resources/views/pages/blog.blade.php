@extends('layouts.app')

@section('title', 'Guides & Career Blog | BestSummerTraining')
@section('meta_description', 'Unbiased guidance, tech reviews, and insights to help you choose the right summer training and internship programs.')

@section('content')
    <!-- Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => ['Home' => url('/'), 'Blog' => url()->current()],
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
                @foreach ($posts as $slug => $post)
                    <div class="col-lg-4 col-md-6 fade-up animate-on-scroll">
                        <div class="why-feature-card h-100 d-flex flex-column overflow-hidden border-0" 
                             style="border-radius: 24px !important; transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);">
                            
                            <!-- Blog Image Container -->
                            <div class="position-relative overflow-hidden" style="height: 185px; width: 100%; border-radius: 24px 24px 0 0;">
                                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-100 h-100 object-fit-cover blog-card-image" style="transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);">
                                <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.45));"></div>
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
                                    <div class="d-flex align-items-center gap-1 text-primary small fw-semibold" style="font-size: 0.78rem;">
                                        <i class="bi bi-patch-check-fill"></i>
                                        <span>Verified Guide</span>
                                    </div>
                                    <span class="small fw-bold text-primary d-flex align-items-center gap-1" style="font-size: 0.8rem;">
                                        Read Article &rarr;
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
