@extends('layouts.app')

@section('title', 'Page Not Found | 404 Error')
@section('meta_description', 'The page you are looking for does not exist on our educational comparison platform.')
@section('robots', 'noindex, follow')

@section('content')
<section class="py-5 bg-primary-custom bg-opacity-10 d-flex align-items-center min-vh-100">
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Large Illustration Placeholder -->
                <div class="mb-5">
                    <div class="d-inline-block bg-white dark-bg-dark rounded-circle p-5 shadow-sm border border-primary border-opacity-10">
                        <i class="bi bi-compass text-primary-custom" style="font-size: 6rem;"></i>
                    </div>
                </div>
                
                <h1 class="display-1 fw-bold text-primary-custom mb-3">404</h1>
                <h2 class="fw-bold mb-4">Page Not Found</h2>
                <p class="text-muted-custom mb-5 fs-5">We couldn't find the page you were looking for. It may have been moved, deleted, or you may have mistyped the address.</p>
                
                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                    <a href="{{ url('/') }}" class="btn btn-primary px-4 py-3 fw-medium">
                        <i class="bi bi-house me-2"></i> Back to Homepage
                    </a>
                    <a href="{{ url('/summer-training-comparison') }}" class="btn btn-outline-secondary px-4 py-3 fw-medium bg-white dark-bg-dark">
                        Explore Comparisons
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
