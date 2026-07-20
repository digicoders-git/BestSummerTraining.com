@extends('layouts.app')

@section('title', 'Python Training & Full-Stack Comparison | DigiCoders vs Other Institutes')
@section('meta_description', 'Compare Python, Django, Data Analytics and Automation courses. Evaluate practical project learning and mentor credentials.')
@section('canonical_url', url()->current())

@section('content')
    <!-- 1. Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => ['Home' => url('/'), 'Python Training Comparison' => url()->current()],
        'badge' => 'Python & Django Development Guide',
        'title' => 'Compare <span class="text-primary-custom">Python Training</span> objectively',
        'description' => 'Python is the backbone of modern web applications, automation scripts, and data science pipelines. Evaluate how DigiCoders Technologies teaches Python compared to conventional institutes.',
        'primaryLink' => '#comparison-table',
        'primaryBtnText' => 'View Comparison Matrix',
        'secondaryLink' => url('/summer-training-comparison'),
        'secondaryBtnText' => 'Explore Summer Training'
    ])

    <!-- 2. Program Overview -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <div class="badge-premium d-inline-flex mb-3">Program Focus</div>
                    <h2 class="display-6 fw-bold mb-4">Why Python Training Matters</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        Python training at DigiCoders goes far beyond basic syntax loops. Students build real-world web backend APIs with Django & Flask, work with PostgreSQL databases, write automation tools, and deploy applications live on AWS cloud servers.
                    </div>

                    <div class="content-block text-muted-custom lead">
                        <p class="mb-4">
                            Many traditional institutes treat Python like basic high-school programming, focusing endlessly on console print statements and basic math operations. However, modern employers hire Python developers to build RESTful microservices, scrap big data, optimize database queries, and automate server deployment tasks.
                        </p>
                        <p class="mb-4">
                            Our comparison matrix helps students verify whether a training course teaches practical development workflows, Git branching models, ORM query optimizations, and unit testing techniques.
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
                    <h2 class="display-6 fw-bold mb-4 text-center">Python Course Comparison Matrix</h2>
                    
                    <div class="table-responsive shadow rounded-3 overflow-hidden bg-surface">
                        <table class="table table-hover align-middle mb-0" style="min-width: 800px;">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col" style="width: 25%;" class="py-3 px-4">Criteria</th>
                                    <th scope="col" style="width: 37.5%;" class="py-3 px-4">DigiCoders Technologies</th>
                                    <th scope="col" style="width: 37.5%;" class="py-3 px-4">Typical Institutes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Framework Coverage</td>
                                    <td class="px-4 py-3">Full Django, Django REST Framework (DRF), and Flask production APIs</td>
                                    <td class="px-4 py-3">Basic Python core scripts without web frameworks</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Database Integration</td>
                                    <td class="px-4 py-3">PostgreSQL, SQLite ORMs, raw SQL queries, indexing & migration management</td>
                                    <td class="px-4 py-3">Basic text-file storage or simple SQLite examples</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Live Projects</td>
                                    <td class="px-4 py-3">Hosted Web Applications (E-commerce backend, Portal APIs, Automation bots)</td>
                                    <td class="px-4 py-3">Terminal-based calculators, student management CLI scripts</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Git & Industry Tools</td>
                                    <td class="px-4 py-3">GitHub actions, environment variables (.env), Postman API testing & AWS deployment</td>
                                    <td class="px-4 py-3">Local execution in IDLE without version control</td>
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
                            'question' => 'Is Python suitable for complete beginners in coding?',
                            'answer' => 'Yes! Python features a clean, readable syntax that makes it ideal for beginners while remaining powerful enough for enterprise software development.',
                            'parent' => 'faqAccordion'
                        ])
                        @include('components.faq', [
                            'id' => 'faq2',
                            'question' => 'What career roles can I target after Python training?',
                            'answer' => 'You can apply for Python Backend Developer, Django Developer, Automation Engineer, Data Analyst, and Full-Stack Python Engineer roles.',
                            'parent' => 'faqAccordion'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA -->
    @include('components.cta', [
        'title' => 'Master Python Development',
        'description' => 'Join DigiCoders Python full-stack developer program and build production-ready applications under expert guidance.',
        'primaryLink' => url('/contact'),
        'primaryText' => 'Book Demo Class',
        'secondaryLink' => url('/faq'),
        'secondaryText' => 'Explore FAQs'
    ])
@endsection
