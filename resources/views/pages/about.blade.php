@extends('layouts.app')

@section('title', 'About Us | TrainingCompare India')
@section('meta_description', 'Learn about our methodology for comparing IT training institutes in India objectively and transparently.')

@section('content')
    <!-- Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => ['Home' => url('/'), 'About' => url()->current()],
        'badge' => 'About Us',
        'title' => 'Redefining IT Training <span class="text-accent">Transparency</span>',
        'description' => 'Our mission is to bring transparency, objectivity, and data-driven insights to the IT training and placement sector in India.',
        'primaryLink' => '#about-content',
        'primaryBtnText' => 'Learn Our Methodology',
        'secondaryLink' => url('/summer-training-comparison'),
        'secondaryBtnText' => 'View Comparisons'
    ])

    <!-- Core Mission & Values -->
    <section class="py-5" id="about-content">
        <div class="container py-4">
            <x-section-header 
                badge="Core Values"
                title="Our Mission & Principles"
                subtitle="We operate on a set of core principles designed to keep our analysis unbiased, transparent, and focused entirely on student success."
                divider="true"
            />

            <div class="row g-4">
                <!-- Value Card 1 -->
                <div class="col-lg-4 col-md-6 fade-up animate-on-scroll">
                    <div class="premium-card p-4 h-100 bg-white dark-bg-dark border d-flex flex-column">
                        <div class="bg-primary-custom bg-opacity-10 text-primary-custom rounded-circle p-3 mb-4 d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-shield-check fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Absolute Objectivity</h4>
                        <p class="text-muted-custom mb-0 flex-grow-1">
                            We don't accept sponsorships or payment from institutes to alter scores or boost rankings. All evaluation metrics are derived from verifiable data points.
                        </p>
                    </div>
                </div>

                <!-- Value Card 2 -->
                <div class="col-lg-4 col-md-6 fade-up animate-on-scroll delay-1">
                    <div class="premium-card p-4 h-100 bg-white dark-bg-dark border d-flex flex-column">
                        <div class="bg-primary-custom bg-opacity-10 text-primary-custom rounded-circle p-3 mb-4 d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-eye fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Complete Transparency</h4>
                        <p class="text-muted-custom mb-0 flex-grow-1">
                            From instructor profiles to live project URLs and curriculum updates, we focus on sharing concrete facts and ratios over generic promotional marketing.
                        </p>
                    </div>
                </div>

                <!-- Value Card 3 -->
                <div class="col-lg-4 col-md-12 fade-up animate-on-scroll delay-2">
                    <div class="premium-card p-4 h-100 bg-white dark-bg-dark border d-flex flex-column">
                        <div class="bg-primary-custom bg-opacity-10 text-primary-custom rounded-circle p-3 mb-4 d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-person-fill-check fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Student-First Approach</h4>
                        <p class="text-muted-custom mb-0 flex-grow-1">
                            Our platform is structured specifically to help students cut through marketing noise, find genuine reviews, and make informed choices for their career path.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why TrainingCompare Matters (Alternating Content) -->
    <section class="py-5 bg-primary-custom bg-opacity-10 border-top border-bottom border-primary border-opacity-10">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 fade-up animate-on-scroll">
                    <span class="badge-premium mb-3">Why it Matters</span>
                    <h3 class="fw-bold mb-4">Cutting Through the Marketing Clutter</h3>
                    <p class="text-muted-custom mb-4">
                        TrainingCompare India was created to solve a specific problem: the overwhelming and often misleading marketing found in the IT education sector. We aim to provide an objective lens through which students can view and assess their options.
                    </p>
                    <p class="text-muted-custom mb-0">
                        Instead of choosing based on flashy pamphlets or unverifiable placement promises, we allow you to compare structural parameters: practical time, technology relevancy, instructor developers portfolio, and actual live-hosted projects.
                    </p>
                </div>
                <div class="col-lg-6 fade-up animate-on-scroll delay-1">
                    <div class="premium-card p-4 bg-white dark-bg-dark border p-md-5">
                        <div class="row g-4 text-center">
                            <div class="col-6">
                                <div class="p-3 bg-primary-custom bg-opacity-10 rounded-3">
                                    <h2 class="fw-bold text-primary-custom mb-1">4+</h2>
                                    <span class="text-muted-custom small">Comparison Streams</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-primary-custom bg-opacity-10 rounded-3">
                                    <h2 class="fw-bold text-primary-custom mb-1">10+</h2>
                                    <span class="text-muted-custom small">Institutes Audited</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-primary-custom bg-opacity-10 rounded-3">
                                    <h2 class="fw-bold text-primary-custom mb-1">100%</h2>
                                    <span class="text-muted-custom small">Independent</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-primary-custom bg-opacity-10 rounded-3">
                                    <h2 class="fw-bold text-primary-custom mb-1">Verifiable</h2>
                                    <span class="text-muted-custom small">Data Ratios</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Methodology framework -->
    <section class="py-5">
        <div class="container py-4">
            <x-section-header 
                badge="Evaluation"
                title="Our Evaluation Framework"
                subtitle="We evaluate every IT training program on four core metrics to ensure absolute compliance with current market expectations."
                divider="true"
            />

            <div class="row g-4">
                <!-- Factor 1 -->
                <div class="col-md-6 fade-up animate-on-scroll">
                    <div class="premium-card p-4 bg-white dark-bg-dark border h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary-custom bg-opacity-10 text-primary-custom rounded p-2 me-3">
                                <i class="bi bi-clock-history fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-0">Hands-on Time</h5>
                        </div>
                        <p class="text-muted-custom mb-0 small">
                            We calculate the exact ratio of practical live coding to theoretical lectures. A premium training standard requires at least 70% of the program duration to be spent on active labs.
                        </p>
                    </div>
                </div>

                <!-- Factor 2 -->
                <div class="col-md-6 fade-up animate-on-scroll delay-1">
                    <div class="premium-card p-4 bg-white dark-bg-dark border h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary-custom bg-opacity-10 text-primary-custom rounded p-2 me-3">
                                <i class="bi bi-journal-code fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-0">Curriculum Reality</h5>
                        </div>
                        <p class="text-muted-custom mb-0 small">
                            We cross-verify syllabus modules with real-world requirements. We search for outdated stacks and give priority to programs integrating current standards like RESTful APIs, Git, and modern frameworks.
                        </p>
                    </div>
                </div>

                <!-- Factor 3 -->
                <div class="col-md-6 fade-up animate-on-scroll">
                    <div class="premium-card p-4 bg-white dark-bg-dark border h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary-custom bg-opacity-10 text-primary-custom rounded p-2 me-3">
                                <i class="bi bi-people fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-0">Trainer Background</h5>
                        </div>
                        <p class="text-muted-custom mb-0 small">
                            We check whether trainers are active software engineers or purely academic. Active developers bring industry best practices, clean code habits, and modern architectural insights.
                        </p>
                    </div>
                </div>

                <!-- Factor 4 -->
                <div class="col-md-6 fade-up animate-on-scroll delay-1">
                    <div class="premium-card p-4 bg-white dark-bg-dark border h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary-custom bg-opacity-10 text-primary-custom rounded p-2 me-3">
                                <i class="bi bi-code-square fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-0">Project Quality</h5>
                        </div>
                        <p class="text-muted-custom mb-0 small">
                            We measure final project outputs. Rather than static offline code folders, we verify if students host their projects live, use cloud services, and build functional end-to-end applications.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Disclaimer box -->
            <div class="alert alert-info bg-primary-custom bg-opacity-10 border-0 text-primary-custom mt-5 fade-up animate-on-scroll p-4 rounded-3 border-start border-primary border-4">
                <div class="d-flex gap-3">
                    <i class="bi bi-info-circle-fill fs-3"></i>
                    <div>
                        <strong class="d-block mb-1">Disclaimer:</strong> 
                        This is an independent educational platform. While we compare specific entities like DigiCoders Technologies against industry averages to provide a baseline, we encourage students to conduct their own independent research and visit centers physically before making financial commitments.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Review Timeline -->
    <section class="py-5 bg-primary-custom bg-opacity-10 border-top border-bottom border-primary border-opacity-10">
        <div class="container py-4">
            <x-section-header 
                badge="Process"
                title="Our Research Process"
                subtitle="Here is how we continuously audit and verify the training data displayed on our platform."
                divider="true"
            />

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="timeline">
                        <div class="timeline-item fade-up animate-on-scroll">
                            <div class="timeline-icon">
                                <i class="bi bi-search"></i>
                            </div>
                            <div class="timeline-content">
                                <h5 class="fw-bold text-heading">1. Data Gathering</h5>
                                <p class="text-muted-custom small mb-0">
                                    We collect curriculum files, lab timings, instructor profiles, and standard brochures directly from providers and student reviews.
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item fade-up animate-on-scroll delay-1">
                            <div class="timeline-icon">
                                <i class="bi bi-sliders"></i>
                            </div>
                            <div class="timeline-content">
                                <h5 class="fw-bold text-heading">2. Cross-Verification</h5>
                                <p class="text-muted-custom small mb-0">
                                    We verify instructor LinkedIn profiles, GitHub repositories, and check whether student projects are hosted live on platforms like Netlify, Vercel, or GitHub Pages.
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item fade-up animate-on-scroll delay-2">
                            <div class="timeline-icon">
                                <i class="bi bi-bar-chart"></i>
                            </div>
                            <div class="timeline-content">
                                <h5 class="fw-bold text-heading">3. Benchmark Scoring</h5>
                                <p class="text-muted-custom small mb-0">
                                    We compile the metrics, evaluate practical vs theory ratios, and score them against the regional industry average benchmarks.
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item fade-up animate-on-scroll delay-3">
                            <div class="timeline-icon">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                            <div class="timeline-content">
                                <h5 class="fw-bold text-heading">4. Continuous Audits</h5>
                                <p class="text-muted-custom small mb-0">
                                    Every semester, we re-evaluate course curriculums and update ratios to ensure our comparisons stay accurate as technologies evolve.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    @include('components.cta', [
        'title' => 'Ready to Compare IT Training Programs?',
        'description' => 'Explore our granular comparison tables for Summer Training, Internships, and Industrial placements.',
        'primaryLink' => url('/summer-training-comparison'),
        'primaryText' => 'Compare Summer Training',
        'secondaryLink' => url('/company-overview'),
        'secondaryText' => 'View Institutes Overview'
    ])
@endsection
