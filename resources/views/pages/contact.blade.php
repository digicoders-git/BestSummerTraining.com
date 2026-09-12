@extends('layouts.app')

@section('title', 'Contact Us | Call & WhatsApp DigiCoders Support')
@section('meta_description', 'Get in touch with DigiCoders Technologies via Call or WhatsApp. Reach us directly at +91 9198483820, +91 6394296293, or +91 9801017529 for course counseling and support.')
@section('canonical_url', url()->current())

@section('content')
    <!-- Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => ['Home' => url('/'), 'Contact' => url()->current()],
        'badge' => 'Direct Support & Counseling',
        'title' => 'Get in Touch <span class="text-primary-custom">Via Call & WhatsApp</span>',
        'description' => 'Have questions about summer training, internships, or professional courses? Call or WhatsApp our counselors directly for instant assistance and detailed course guidance.',
        'primaryLink' => 'tel:9198483820',
        'primaryBtnText' => 'Call +91 9198483820',
        'secondaryLink' => 'https://wa.me/919198483820?text=Hello%20DigiCoders,%20I%20want%20to%20know%20more%20about%20training%20courses.',
        'secondaryBtnText' => 'WhatsApp Us'
    ])

    <!-- Direct Contact Numbers & Support Cards Section -->
    <section class="py-5 bg-primary-custom bg-opacity-10 border-top border-bottom border-primary border-opacity-10" id="contact-numbers">
        <div class="container py-4">
            <div class="text-center mb-5 fade-up animate-on-scroll">
                <div class="badge-premium d-inline-flex mb-2">Direct Contact Numbers</div>
                <h2 class="display-6 fw-bold mb-3">Reach Our Team Immediately</h2>
                <p class="text-muted-custom lead mx-auto max-w-2xl">Connect directly with our training advisors for admissions, course syllabus, fee structures, and batch timings.</p>
            </div>

            <div class="row g-4 justify-content-center">
                {{-- Phone Number 1: 9198483820 --}}
                <div class="col-lg-4 col-md-6 fade-up animate-on-scroll">
                    <div class="premium-card p-4 text-center h-100 bg-white dark-bg-dark border shadow-sm rounded-4 position-relative overflow-hidden">
                        <div class="badge bg-primary bg-opacity-10 text-primary-custom px-3 py-2 rounded-pill mb-3 fw-semibold">Primary Helpline</div>
                        <div class="rounded-circle bg-primary-custom bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px;">
                            <i class="bi bi-telephone-fill fs-3 text-primary-custom"></i>
                        </div>
                        <h4 class="fw-bold mb-2">+91 9198483820</h4>
                        <p class="text-muted-custom small mb-4">Official Helpline &amp; Admission Counseling</p>

                        <div class="d-flex gap-2 justify-content-center">
                            <a href="tel:9198483820" class="btn btn-primary-custom rounded-pill px-3 py-2 small d-inline-flex align-items-center gap-2">
                                <i class="bi bi-telephone-outbound"></i> Call Now
                            </a>
                            <a href="https://wa.me/919198483820?text=Hello%20DigiCoders,%20I%20want%20information%20regarding%20training%20programs." target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill px-3 py-2 small d-inline-flex align-items-center gap-2" style="background-color: #25d366; border: none;">
                                <i class="bi bi-whatsapp"></i> WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Phone Number 2: 6394296293 --}}
                <div class="col-lg-4 col-md-6 fade-up animate-on-scroll delay-1">
                    <div class="premium-card p-4 text-center h-100 bg-white dark-bg-dark border shadow-sm rounded-4 position-relative overflow-hidden">
                        <div class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3 fw-semibold">Counseling &amp; Guidance</div>
                        <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px;">
                            <i class="bi bi-headset fs-3 text-success"></i>
                        </div>
                        <h4 class="fw-bold mb-2">+91 6394296293</h4>
                        <p class="text-muted-custom small mb-4">Course Details &amp; Career Consultation</p>

                        <div class="d-flex gap-2 justify-content-center">
                            <a href="tel:6394296293" class="btn btn-primary-custom rounded-pill px-3 py-2 small d-inline-flex align-items-center gap-2">
                                <i class="bi bi-telephone-outbound"></i> Call Now
                            </a>
                            <a href="https://wa.me/916394296293?text=Hello,%20I%20need%20counseling%20for%20training%20courses." target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill px-3 py-2 small d-inline-flex align-items-center gap-2" style="background-color: #25d366; border: none;">
                                <i class="bi bi-whatsapp"></i> WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Phone Number 3: 9801017529 --}}
                <div class="col-lg-4 col-md-6 fade-up animate-on-scroll delay-2">
                    <div class="premium-card p-4 text-center h-100 bg-white dark-bg-dark border shadow-sm rounded-4 position-relative overflow-hidden">
                        <div class="badge bg-info bg-opacity-10 text-info px-3 py-2 rounded-pill mb-3 fw-semibold">Student Support</div>
                        <div class="rounded-circle bg-info bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px;">
                            <i class="bi bi-person-lines-fill fs-3 text-info"></i>
                        </div>
                        <h4 class="fw-bold mb-2">+91 9801017529</h4>
                        <p class="text-muted-custom small mb-4">Student Support &amp; General Inquiries</p>

                        <div class="d-flex gap-2 justify-content-center">
                            <a href="tel:9801017529" class="btn btn-primary-custom rounded-pill px-3 py-2 small d-inline-flex align-items-center gap-2">
                                <i class="bi bi-telephone-outbound"></i> Call Now
                            </a>
                            <a href="https://wa.me/919801017529?text=Hello,%20I%20have%20an%20inquiry%20regarding%20courses." target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill px-3 py-2 small d-inline-flex align-items-center gap-2" style="background-color: #25d366; border: none;">
                                <i class="bi bi-whatsapp"></i> WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Channels -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5 fade-up animate-on-scroll">
                <h3 class="fw-bold mb-3">Connect With Us On Social Media</h3>
                <p class="text-muted-custom">Follow our social channels for course updates, success stories, and educational content.</p>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-3 fade-up animate-on-scroll">
                <a href="https://www.facebook.com/digicoderstech" target="_blank" rel="noopener noreferrer" class="premium-card text-decoration-none d-flex align-items-center bg-white dark-bg-dark px-4 py-3 rounded-pill border">
                    <i class="bi bi-facebook text-primary-custom fs-5 me-2"></i>
                    <span class="text-body fw-medium">Facebook</span>
                </a>
                <a href="https://www.instagram.com/digacoderstech" target="_blank" rel="noopener noreferrer" class="premium-card text-decoration-none d-flex align-items-center bg-white dark-bg-dark px-4 py-3 rounded-pill border">
                    <i class="bi bi-instagram text-primary-custom fs-5 me-2"></i>
                    <span class="text-body fw-medium">Instagram</span>
                </a>
                <a href="https://www.linkedin.com/company/digicoders/" target="_blank" rel="noopener noreferrer" class="premium-card text-decoration-none d-flex align-items-center bg-white dark-bg-dark px-4 py-3 rounded-pill border">
                    <i class="bi bi-linkedin text-primary-custom fs-5 me-2"></i>
                    <span class="text-body fw-medium">LinkedIn</span>
                </a>
                <a href="https://www.youtube.com/@digicoders" target="_blank" rel="noopener noreferrer" class="premium-card text-decoration-none d-flex align-items-center bg-white dark-bg-dark px-4 py-3 rounded-pill border">
                    <i class="bi bi-youtube text-primary-custom fs-5 me-2"></i>
                    <span class="text-body fw-medium">YouTube</span>
                </a>
                <a href="https://www.whatsapp.com/channel/0029VaDTIxW5EjxzOyubYT3l" target="_blank" rel="noopener noreferrer" class="premium-card text-decoration-none d-flex align-items-center bg-white dark-bg-dark px-4 py-3 rounded-pill border">
                    <i class="bi bi-whatsapp text-success fs-5 me-2"></i>
                    <span class="text-body fw-medium">WhatsApp Channel</span>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-primary-custom bg-opacity-10 border-top border-bottom border-primary border-opacity-10">
        <div class="container py-4">
            <x-section-header 
                badge="FAQ"
                title="Frequently Asked Questions"
                subtitle="Common questions about contacting our educational training team."
                divider="true"
            />

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-6 fade-up animate-on-scroll">
                            @include('components.faq', [
                                'question' => 'How can I connect with DigiCoders counselors?',
                                'answer' => 'You can call or WhatsApp our counselors directly at +91 9198483820, +91 6394296293, or +91 9801017529 for instant assistance.'
                            ])
                            @include('components.faq', [
                                'question' => 'What are the office hours for call support?',
                                'answer' => 'Our counseling team is available from Monday to Saturday, between 9:00 AM and 7:00 PM.'
                            ])
                            @include('components.faq', [
                                'question' => 'Can I get course details on WhatsApp?',
                                'answer' => 'Yes! Click any of the WhatsApp buttons above to start a conversation and receive detailed course brochures, syllabus PDFs, and fee details directly on WhatsApp.'
                            ])
                        </div>
                        <div class="col-md-6 fade-up animate-on-scroll delay-1">
                            @include('components.faq', [
                                'question' => 'How do I book a free demo class?',
                                'answer' => 'Simply send a WhatsApp message or call +91 9198483820 to reserve your slot for an upcoming live demo session.'
                            ])
                            @include('components.faq', [
                                'question' => 'Are offline and online training options available?',
                                'answer' => 'Yes, DigiCoders offers both classroom training at our center and live interactive online training batches.'
                            ])
                            @include('components.faq', [
                                'question' => 'Can I visit the office in person?',
                                'answer' => 'Yes, you can visit our training center during office hours to meet our faculty and explore our lab facilities.'
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Callback Request Form Section -->
    @include('components.callback-section', ['formId' => 'contactCallbackForm'])

    <!-- CTA Section -->
    @include('components.cta', [
        'title' => 'Ready to Find the Right Training Program?',
        'description' => 'Speak with our expert counselors today or compare our programs online to make an informed decision.',
        'primaryLink' => 'tel:9198483820',
        'primaryText' => 'Call +91 9198483820',
        'secondaryLink' => url('/summer-training-comparison'),
        'secondaryText' => 'Explore Summer Training'
    ])

@endsection
