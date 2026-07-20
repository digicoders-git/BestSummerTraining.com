@extends('layouts.app')

@section('title', 'MERN Stack Developer Program Comparison | DigiCoders vs Other Institutes')
@section('meta_description', 'Compare MongoDB, Express.js, React.js, and Node.js (MERN) Full-Stack courses. Evaluate live project mentorship.')
@section('canonical_url', url()->current())

@section('content')
    <!-- 1. Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => ['Home' => url('/'), 'MERN Stack Comparison' => url()->current()],
        'badge' => 'Full-Stack JavaScript Track',
        'title' => 'Compare <span class="text-primary-custom">MERN Stack Training</span> objectively',
        'description' => 'MERN (MongoDB, Express, React, Node) is the most sought-after full-stack technology stack in modern startups and tech corporates. Compare training models and live project exposure.',
        'primaryLink' => '#comparison-table',
        'primaryBtnText' => 'View Comparison Matrix',
        'secondaryLink' => url('/internship-comparison'),
        'secondaryBtnText' => 'Explore Internships'
    ])

    <!-- 2. Program Overview -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <div class="badge-premium d-inline-flex mb-3">MERN Stack Overview</div>
                    <h2 class="display-6 fw-bold mb-4">Why Choose MERN Stack?</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        The MERN stack enables developers to use JavaScript across the entire software application — from front-end user interfaces in React to back-end Node.js microservices and NoSQL MongoDB databases.
                    </div>

                    <div class="content-block text-muted-custom lead">
                        <p class="mb-4">
                            Building enterprise MERN applications requires mastering asynchronous JavaScript, Redux / Context API state management, RESTful API design, JWT authentication, and Vercel/Render server deployments.
                        </p>
                        <p class="mb-4">
                            DigiCoders ensures students build real commercial-grade web products with clean component architectures, robust error handling middleware, and MongoDB schema validations.
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
                    <h2 class="display-6 fw-bold mb-4 text-center">MERN Stack Comparison Matrix</h2>
                    
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
                                    <td class="fw-bold px-4 py-3">React Ecosystem</td>
                                    <td class="px-4 py-3">Hooks, Custom Hooks, Redux Toolkit, React Router v6, Tailwind / Glassmorphism</td>
                                    <td class="px-4 py-3">Basic HTML/JS with minimal React component examples</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Backend Architecture</td>
                                    <td class="px-4 py-3">Express.js REST APIs, JWT tokens, bcrypt encryption, CORS & Rate limiting</td>
                                    <td class="px-4 py-3">Simple Node scripts without security standards</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Database Layer</td>
                                    <td class="px-4 py-3">MongoDB Mongoose ORM, Aggregation pipelines, Data relationships</td>
                                    <td class="px-4 py-3">Static JSON files or basic database inserts</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Live Deployment</td>
                                    <td class="px-4 py-3">Full-stack live deployment on Vercel, Netlify, Render & Mongo Atlas</td>
                                    <td class="px-4 py-3">Localhost-only demonstrations</td>
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
                            'question' => 'How long does it take to learn MERN Stack?',
                            'answer' => 'A structured MERN stack program takes around 3 to 6 months including intensive live project hands-on coding.',
                            'parent' => 'faqAccordion'
                        ])
                        @include('components.faq', [
                            'id' => 'faq2',
                            'question' => 'Are MERN developers in high demand?',
                            'answer' => 'Yes, full-stack JavaScript developers are among the highest-paid engineering roles in both startups and established product organizations.',
                            'parent' => 'faqAccordion'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA -->
    @include('components.cta', [
        'title' => 'Become a Full-Stack MERN Developer',
        'description' => 'Build high-performance web applications and kickstart your IT career with DigiCoders.',
        'primaryLink' => url('/contact'),
        'primaryText' => 'Enroll in MERN Track',
        'secondaryLink' => url('/blog'),
        'secondaryText' => 'Read Tech Articles'
    ])
@endsection
