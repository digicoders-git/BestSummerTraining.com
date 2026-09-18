@extends('layouts.app')

@section('title', 'UI/UX Design Course Comparison in Lucknow | DigiCoders vs Others')
@section('meta_description', 'Compare Figma, Wireframing, Prototyping & User Experience Design training in Lucknow. Build real design systems & portfolios at DigiCoders.')
@section('canonical_url', url()->current())

@section('json_ld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "UI/UX & User Interface Design Course",
  "description": "User Interface and User Experience design training using Figma, Adobe XD, wireframing, interactive prototyping, and design system engineering.",
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
        'breadcrumbs' => ['Home' => url('/'), 'UI/UX Design Training' => url()->current()],
        'badge' => 'User Experience & Interface Design',
        'title' => 'Compare <span class="text-primary-custom">UI/UX Design Training</span> objectively',
        'description' => 'Great products rely on intuitive user experience. Evaluate Figma design systems, wireframing, component design, and user research methodologies.',
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
                    <div class="badge-premium d-inline-flex mb-3">UI/UX Design</div>
                    <h2 class="display-6 fw-bold mb-4">Design Systems & Prototyping</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        DigiCoders UI/UX Design course teaches end-to-end product design in Figma — user personas, low & high-fidelity wireframes, interactive prototyping, typography, and developer handoff.
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
                    <h2 class="display-6 fw-bold mb-4 text-center">UI/UX Design Comparison Matrix</h2>
                    
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
                                    <td class="fw-bold px-4 py-3">Figma Design Systems</td>
                                    <td class="px-4 py-3">Auto-layout, Components, Variants, Color tokens, Interactive prototypes & Micro-animations</td>
                                    <td class="px-4 py-3">Basic graphic tool tutorials without UI/UX architecture principles</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Portfolio Projects</td>
                                    <td class="px-4 py-3">Complete Mobile & Web case studies published on Behance / Dribbble</td>
                                    <td class="px-4 py-3">Generic single-screen banner designs</td>
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
                            'question' => 'Do I need coding skills for UI/UX Design?',
                            'answer' => 'No coding is required. UI/UX design focuses on user research, wireframing, visual hierarchy, and prototyping in Figma.',
                            'parent' => 'faqAccordion'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA -->
    @include('components.cta', [
        'title' => 'Design Products People Love',
        'description' => 'Build a professional UI/UX portfolio with live mentor feedback at DigiCoders.',
        'primaryLink' => url('/contact'),
        'primaryText' => 'Book Free Workshop',
        'secondaryLink' => url('/blog'),
        'secondaryText' => 'Read Design Guides'
    ])
@endsection
