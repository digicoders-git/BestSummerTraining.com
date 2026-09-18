@extends('layouts.app')

@section('title', 'Mobile App Development Training Comparison in Lucknow | DigiCoders vs Others')
@section('meta_description', 'Compare Flutter, React Native & Android App Development training in Lucknow. Evaluate Play Store deployment & live project exposure.')
@section('canonical_url', url()->current())

@section('json_ld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Mobile App Development Course (Flutter & Android)",
  "description": "Cross-platform and native mobile app development training covering Flutter, Dart, Kotlin, REST APIs, and Google Play Store deployment.",
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
        'breadcrumbs' => ['Home' => url('/'), 'Mobile Development Training' => url()->current()],
        'badge' => 'Android & iOS App Engineering',
        'title' => 'Compare <span class="text-primary-custom">Mobile App Development</span> objectively',
        'description' => 'Mobile applications drive global digital interactions. Evaluate Flutter, React Native, and Android app development courses across institutes.',
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
                    <div class="badge-premium d-inline-flex mb-3">App Engineering</div>
                    <h2 class="display-6 fw-bold mb-4">Cross-Platform & Native App Development</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        DigiCoders mobile app development tracks focus on building cross-platform apps using Flutter & React Native as well as native Android apps using Kotlin and Firebase.
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
                    <h2 class="display-6 fw-bold mb-4 text-center">Mobile Development Comparison Matrix</h2>
                    
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
                                    <td class="fw-bold px-4 py-3">Technologies Covered</td>
                                    <td class="px-4 py-3">Flutter (Dart), React Native, Kotlin, Firebase Auth & Firestore, REST API Integration</td>
                                    <td class="px-4 py-3">Outdated Java Android XML templates</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Publishing & Play Store</td>
                                    <td class="px-4 py-3">APK compilation, APK signing, Play Store publishing guidelines & release builds</td>
                                    <td class="px-4 py-3">Emulator testing only without APK build knowledge</td>
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
                            'question' => 'Which framework is better: Flutter or React Native?',
                            'answer' => 'Both are highly in-demand. Flutter offers fast performance with compiled C++ engines, while React Native lets web developers leverage React skills.',
                            'parent' => 'faqAccordion'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA -->
    @include('components.cta', [
        'title' => 'Build Mobile Apps That Reach Millions',
        'description' => 'Enroll in DigiCoders mobile app development track and build your first Android/iOS app.',
        'primaryLink' => url('/contact'),
        'primaryText' => 'Get Started',
        'secondaryLink' => url('/faq'),
        'secondaryText' => 'FAQ Hub'
    ])
@endsection
