@extends('layouts.app')

@section('title', 'Cloud Computing & DevOps Training Comparison in Lucknow | DigiCoders vs Others')
@section('meta_description', 'Compare AWS, Linux, Docker & DevOps Cloud Computing training in Lucknow. Evaluate server deployment, CI/CD pipelines & hands-on labs.')
@section('canonical_url', url()->current())

@section('json_ld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Cloud Computing & DevOps Engineering Course",
  "description": "Cloud infrastructure training covering AWS Cloud Services, Linux System Administration, Docker Containers, Nginx, and CI/CD Automation.",
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
        'breadcrumbs' => ['Home' => url('/'), 'Cloud Computing Training' => url()->current()],
        'badge' => 'Cloud & DevOps Engineering',
        'title' => 'Compare <span class="text-primary-custom">Cloud Computing Training</span> objectively',
        'description' => 'Modern software operates on cloud infrastructure. Evaluate AWS, Docker, Nginx, Linux administration, and CI/CD pipeline training across institutes.',
        'primaryLink' => '#comparison-table',
        'primaryBtnText' => 'View Comparison Matrix',
        'secondaryLink' => url('/apprenticeship-comparison'),
        'secondaryBtnText' => 'Apprenticeship'
    ])

    <!-- 2. Program Overview -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <div class="badge-premium d-inline-flex mb-3">Cloud Infrastructure</div>
                    <h2 class="display-6 fw-bold mb-4">AWS, Linux & DevOps Practices</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        DigiCoders Cloud Computing course covers EC2 instance provisioning, S3 bucket storage, Nginx reverse proxy configuration, SSL installation, and Docker containerization.
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
                    <h2 class="display-6 fw-bold mb-4 text-center">Cloud Computing Comparison Matrix</h2>
                    
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
                                    <td class="fw-bold px-4 py-3">Cloud Platform Exposure</td>
                                    <td class="px-4 py-3">AWS (EC2, S3, RDS, Route53), Nginx web server, SSH terminal management</td>
                                    <td class="px-4 py-3">Slide deck overviews without live AWS console access</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">DevOps & Containers</td>
                                    <td class="px-4 py-3">Docker containerization, Docker Compose, Git GitHub Actions CI/CD workflows</td>
                                    <td class="px-4 py-3">No DevOps or CI/CD practical coverage</td>
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
                            'question' => 'What cloud platforms will I learn?',
                            'answer' => 'You will gain hands-on expertise with Amazon Web Services (AWS), Linux command line administration, and server deployment tools.',
                            'parent' => 'faqAccordion'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA -->
    @include('components.cta', [
        'title' => 'Master Cloud Engineering & DevOps',
        'description' => 'Learn how to deploy, scale, and secure production server infrastructure.',
        'primaryLink' => url('/contact'),
        'primaryText' => 'Enroll in Cloud Track',
        'secondaryLink' => url('/blog'),
        'secondaryText' => 'Read Blogs'
    ])
@endsection
