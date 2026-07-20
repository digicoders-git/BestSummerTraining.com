@extends('layouts.app')

@section('title', 'Privacy Policy | Educational Training Comparison Platform')
@section('meta_description', 'Read our Privacy Policy to understand how we handle cookies, analytics, contact form submissions, and user data on our educational comparison platform.')
@section('canonical_url', url()->current())

@section('content')
    @include('components.breadcrumbs', ['breadcrumbs' => ['Home' => url('/'), 'Privacy Policy' => url()->current()]])

    <section class="py-5">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="premium-card p-4 p-md-5 bg-white dark-bg-dark border-0 shadow-sm">
                        <h1 class="fw-bold mb-4 text-primary-custom">Privacy Policy</h1>
                        <p class="text-muted-custom mb-5">Effective Date: {{ date('F d, Y') }}</p>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">1. Information Handling</h4>
                            <p class="text-muted-custom">We value your privacy. As a static educational comparison website, we collect minimal personal information. Any information collected is strictly used for the purpose it was provided, such as responding to your inquiries.</p>
                        </div>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">2. Contact Form Submissions</h4>
                            <p class="text-muted-custom">When you use our Contact page to report incorrect information, suggest improvements, or ask questions, we may collect your name, email address, and optionally your phone number. This information is securely transmitted and used only by our team to review your suggestions and provide a response if necessary.</p>
                        </div>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">3. Cookies</h4>
                            <p class="text-muted-custom">We use cookies to improve user experience, such as remembering your Dark/Light mode preference. These essential cookies do not track your personal identity across other websites.</p>
                        </div>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">4. Analytics (Placeholders)</h4>
                            <p class="text-muted-custom">We may implement privacy-friendly, anonymized analytics services (such as Google Analytics or Plausible) to understand website traffic patterns, which pages are most helpful, and how we can improve our educational content. This data is aggregated and not linked to personally identifiable information.</p>
                        </div>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">5. Third-Party Services</h4>
                            <p class="text-muted-custom">Our website may contain links to training providers, social media platforms, or external resources. We are not responsible for the privacy practices of these third-party websites. Please review their respective privacy policies.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="fw-bold mb-3">6. User Rights</h4>
                            <p class="text-muted-custom mb-0">You have the right to request the deletion of any personal communication data you have submitted to us via the contact form. To exercise these rights, please contact us at support@example.com.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
