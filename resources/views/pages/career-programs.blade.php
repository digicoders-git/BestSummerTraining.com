@extends('layouts.app')

@section('title', 'Long-Term Career IT Programs Comparison in Lucknow | DigiCoders vs Others')
@section('meta_description', 'Compare long-term job-oriented IT career programs in Lucknow. Evaluate full-stack engineering tracks, 100% placement support & live projects.')
@section('canonical_url', url()->current())

@section('json_ld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Full-Stack Career Placement Program in Lucknow",
  "description": "Comprehensive long-term job guarantee career program covering full-stack software development, software engineering workflows, and job placement.",
  "provider": {
    "@type": "Organization",
    "name": "DigiCoders Technologies",
    "sameAs": "https://thedigicoders.com"
  }
}
</script>
@endsection

@section('content')
    <!-- 1. Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => ['Home' => url('/'), 'Career Programs Comparison' => url()->current()],
        'badge' => 'Long-Term Career Programs Guide',
        'title' => 'Compare <span class="text-primary-custom">Career Programs</span> objectively',
        'description' => 'Career programs offer deep immersion into software engineering workflows. This educational guide outlines the differences between full-stack career programs at DigiCoders Technologies and traditional training institutes.',
        'primaryLink' => '#comparison-table',
        'primaryBtnText' => 'View Comparison Table',
        'secondaryLink' => url('/summer-training-comparison'),
        'secondaryBtnText' => 'Explore Summer Training'
    ])

    <!-- 2. What Are Career Programs? -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <div class="badge-premium d-inline-flex mb-3">Program Overview</div>
                    <h2 class="display-6 fw-bold mb-4">What Are Career Programs?</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        Career programs are comprehensive 6 to 12-month educational paths designed for job aspirants. They cover a full engineering cycle, starting from basic coding syntax up to system design, database architecture, team collaborations, and live project deployments.
                    </div>

                    <div class="content-block text-muted-custom lead">
                        <p class="mb-4">
                            Unlike brief summer training programs, career courses offer a deep dive. They cover a wide array of front-end tech, back-end development, SQL/NoSQL databases, cloud administration, and containerization.
                        </p>
                        <p class="mb-4">
                            Students undergo structured sprints, coding assessments, and work directly under senior tech leads. This simulates a real corporate environment, enabling students to gain equivalent industry developer experience even before entering their first job.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Comparison Table -->
    <section class="py-5 bg-glass border-top border-bottom border-light" id="comparison-table">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <h2 class="display-6 fw-bold mb-4 text-center">Detailed Comparison Matrix</h2>
                    
                    <div class="table-responsive shadow rounded-3 overflow-hidden bg-surface">
                        <table class="table table-hover align-middle mb-0" style="min-width: 800px;">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col" style="width: 25%;" class="py-3 px-4">Evaluation Criteria</th>
                                    <th scope="col" style="width: 37.5%;" class="py-3 px-4">DigiCoders Technologies</th>
                                    <th scope="col" style="width: 37.5%;" class="py-3 px-4">Typical IT Training Institutes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Duration & Depth</td>
                                    <td class="px-4 py-3">6 to 12 months deep-dive, spanning front-end, back-end, database, and DevOps</td>
                                    <td class="px-4 py-3">Short generic courses crammed together without practical connection</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Code Quality Checks</td>
                                    <td class="px-4 py-3">Regular Pull Request review sessions focusing on industry-standard clean code and design patterns</td>
                                    <td class="px-4 py-3">No code reviews; students write ad-hoc logic without testing or optimization structure</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Team Project Immersion</td>
                                    <td class="px-4 py-3">Collaborative projects built via Git, replicating software team dynamics and sprints</td>
                                    <td class="px-4 py-3">Solo standard academic assignments that ignore teamwork workflows</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Placement Assistance</td>
                                    <td class="px-4 py-3">Dedicated recruitment drives, continuous career coaching, and tech mock interviews</td>
                                    <td class="px-4 py-3">Standard resume submission templates with general company listings</td>
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
                            'question' => 'Who should enroll in a career program?',
                            'answer' => 'Career programs are ideal for B.Tech, BCA, MCA graduates or career switchers who want to build high-end software development skills and enter the IT sector as full-stack engineers.',
                            'parent' => 'faqAccordion'
                        ])
                        @include('components.faq', [
                            'id' => 'faq2',
                            'question' => 'Is there any project internship included?',
                            'answer' => 'Yes, all career programs conclude with a live developer project phase where students work under senior developers to deploy a full-scale industrial product.',
                            'parent' => 'faqAccordion'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Final CTA -->
    @include('components.cta', [
        'title' => 'Launch Your Career in Tech',
        'description' => 'Review our career syllabus tracks, talk to our counselors, and schedule a customized career pathway discussion.',
        'primaryLink' => url('/contact'),
        'primaryText' => 'Talk to Career Counselor',
        'secondaryLink' => url('/blog'),
        'secondaryText' => 'Read Blogs & Guides'
    ])
@endsection
