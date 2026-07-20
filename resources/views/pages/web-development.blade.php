@extends('layouts.app')

@section('title', 'Web Development Training Program | DigiCoders vs Other Institutes')
@section('meta_description', 'Compare full-stack web development courses covering HTML5, CSS3, JavaScript, PHP, Laravel, React, and MySQL.')
@section('canonical_url', url()->current())

@section('content')
    <!-- 1. Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => ['Home' => url('/'), 'Web Development Training' => url()->current()],
        'badge' => 'Full-Stack Web Engineering',
        'title' => 'Compare <span class="text-primary-custom">Web Development Training</span> objectively',
        'description' => 'Web development is the foundational skill for modern software careers. Compare hands-on project methodologies, framework training, and mentor support across institutes.',
        'primaryLink' => '#comparison-table',
        'primaryBtnText' => 'View Comparison Matrix',
        'secondaryLink' => url('/summer-training-comparison'),
        'secondaryBtnText' => 'Summer Training'
    ])

    <!-- 2. Program Overview -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <div class="badge-premium d-inline-flex mb-3">Course Overview</div>
                    <h2 class="display-6 fw-bold mb-4">Master Modern Web Development</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        Web development training at DigiCoders blends modern responsive UI design with robust backend engineering using PHP (Laravel), Node.js, and MySQL/PostgreSQL databases.
                    </div>

                    <div class="content-block text-muted-custom lead">
                        <p class="mb-4">
                            Students build real responsive websites, e-commerce platforms, and web dashboards with modern glassmorphism aesthetic principles, dynamic JavaScript logic, and RESTful API integrations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Comparison Matrix -->
    <section class="py-5 bg-glass border-top border-bottom border-light" id="comparison-table">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <h2 class="display-6 fw-bold mb-4 text-center">Web Development Comparison Matrix</h2>
                    
                    <div class="table-responsive shadow rounded-3 overflow-hidden bg-surface">
                        <table class="table table-hover align-middle mb-0" style="min-width: 800px;">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col" style="width: 25%;" class="py-3 px-4">Evaluation Criteria</th>
                                    <th scope="col" style="width: 37.5%;" class="py-3 px-4">DigiCoders Technologies</th>
                                    <th scope="col" style="width: 37.5%;" class="py-3 px-4">Typical IT Institutes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Front-End Standards</td>
                                    <td class="px-4 py-3">HTML5, CSS3, JavaScript ES6+, Bootstrap 5, Glassmorphism, Responsive layouts</td>
                                    <td class="px-4 py-3">Outdated non-responsive HTML/CSS templates</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Backend & Database</td>
                                    <td class="px-4 py-3">PHP 8.2+, Laravel 12, MySQL, Node.js REST APIs, Authentication & Session security</td>
                                    <td class="px-4 py-3">Basic procedural PHP without security or framework structure</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Live Projects</td>
                                    <td class="px-4 py-3">Full commercial web app hosted live on cloud servers with custom domains</td>
                                    <td class="px-4 py-3">Static sample pages saved locally</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. FAQs -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <h2 class="display-6 fw-bold mb-4 text-center">Frequently Asked Questions</h2>
                    <div class="accordion" id="faqAccordion">
                        @include('components.faq', [
                            'id' => 'faq1',
                            'question' => 'Do I need prior coding knowledge for Web Development?',
                            'answer' => 'No prior experience is required. The curriculum begins from fundamentals and progresses step-by-step to advanced full-stack development.',
                            'parent' => 'faqAccordion'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA -->
    @include('components.cta', [
        'title' => 'Start Building Web Applications Today',
        'description' => 'Transform your career with hands-on web development training at DigiCoders Technologies.',
        'primaryLink' => url('/contact'),
        'primaryText' => 'Book Free Demo',
        'secondaryLink' => url('/blog'),
        'secondaryText' => 'Read Tech Guides'
    ])
@endsection
