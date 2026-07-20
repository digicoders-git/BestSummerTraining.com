@extends('layouts.app')

@section('title', '500 Server Error | TrainingCompare India')
@section('meta_description', 'An unexpected error occurred on our end. We are working to fix it.')

@section('content')
<section class="py-5 my-5 text-center fade-up animate-on-scroll">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="display-1 fw-bold text-primary-custom mb-4">500</div>
                <h1 class="display-6 fw-bold mb-4">Internal Server Error</h1>
                <p class="lead text-muted-custom mb-5">
                    Oops! Something went wrong on our end. Our team has been notified and we are working to resolve the issue as quickly as possible.
                </p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ url('/') }}" class="btn btn-primary-custom btn-lg">Return to Homepage</a>
                    <a href="{{ url('/contact') }}" class="btn btn-outline-custom btn-lg">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
