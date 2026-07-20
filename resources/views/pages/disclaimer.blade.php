@extends('layouts.app')

@section('title', 'Disclaimer | Educational Training Comparison Platform')
@section('meta_description', 'Read our Disclaimer to understand the educational nature of our content and limitations regarding training provider comparisons.')
@section('canonical_url', url()->current())

@section('content')
    @include('components.breadcrumbs', ['breadcrumbs' => ['Home' => url('/'), 'Disclaimer' => url()->current()]])

    <section class="py-5">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="premium-card p-4 p-md-5 bg-white dark-bg-dark border-0 shadow-sm">
                        <h1 class="fw-bold mb-4 text-primary-custom">Website Disclaimer</h1>
                        
                        <div class="alert alert-warning border-0 rounded-3 mb-5" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <strong>Important Notice:</strong> This website is intended for educational and informational purposes only.
                        </div>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">Educational Purpose</h4>
                            <p class="text-muted-custom">The information contained on this website is for general information and educational purposes only. The comparisons, guides, and reviews provided are intended to help students understand what factors they should consider when evaluating IT training institutes.</p>
                        </div>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">Information Accuracy & Updates</h4>
                            <p class="text-muted-custom">Comparisons are based on information available at the time of writing and the evaluation criteria described on the site. Training providers may update courses, fees, schedules, technologies, certifications, or services over time. We make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability with respect to the website or the information.</p>
                        </div>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">Student Responsibility</h4>
                            <p class="text-muted-custom">Students must strictly perform their own due diligence. You should verify important information—such as syllabus coverage, trainer credentials, placement records, and fee structures—directly with the respective training provider before making any financial or educational decisions.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="fw-bold mb-3">No Guarantees</h4>
                            <p class="text-muted-custom mb-0">This website and its administrators do not guarantee admissions, placements, job offers, certifications, or specific educational outcomes as a result of enrolling in any program mentioned on this platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
