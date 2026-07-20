@extends('layouts.app')

@section('title', 'Digital Marketing Course Comparison | DigiCoders vs Other Institutes')
@section('meta_description', 'Compare SEO, Social Media Marketing, Google Ads, Content Strategy, and Analytics training programs.')
@section('canonical_url', url()->current())

@section('content')
    <!-- 1. Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => ['Home' => url('/'), 'Digital Marketing Training' => url()->current()],
        'badge' => 'Growth & Marketing Performance',
        'title' => 'Compare <span class="text-primary-custom">Digital Marketing Training</span> objectively',
        'description' => 'Digital marketing powers customer acquisition in tech & business. Evaluate SEO audits, Google Ads campaigns, and Analytics tools across institutes.',
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
                    <div class="badge-premium d-inline-flex mb-3">Marketing Performance</div>
                    <h2 class="display-6 fw-bold mb-4">Practical SEO & Performance Marketing</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        DigiCoders Digital Marketing course focuses on technical SEO, On-Page & Off-Page optimization, Google Ads (PPC), Meta Ads manager, Google Search Console, and Analytics dashboards.
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
                    <h2 class="display-6 fw-bold mb-4 text-center">Digital Marketing Comparison Matrix</h2>
                    
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
                                    <td class="fw-bold px-4 py-3">Technical SEO & Audits</td>
                                    <td class="px-4 py-3">Schema markup, Canonical tags, PageSpeed optimization, Search Console indexing</td>
                                    <td class="px-4 py-3">Basic social media posting tips without technical SEO depth</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Paid Campaign Execution</td>
                                    <td class="px-4 py-3">Live budget allocation on Google Ads Search & Display, Facebook Lead Ads</td>
                                    <td class="px-4 py-3">Theoretical screenshot walkthroughs without real campaigns</td>
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
                            'question' => 'Will I manage live marketing campaigns?',
                            'answer' => 'Yes, students get hands-on exposure setting up real Google Search campaigns, Meta lead ads, and optimizing keyword rankings.',
                            'parent' => 'faqAccordion'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA -->
    @include('components.cta', [
        'title' => 'Master Digital Growth Strategies',
        'description' => 'Learn how to generate real organic traffic, leads, and brand awareness.',
        'primaryLink' => url('/contact'),
        'primaryText' => 'Book Demo Class',
        'secondaryLink' => url('/faq'),
        'secondaryText' => 'Read FAQs'
    ])
@endsection
