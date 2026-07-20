@extends('layouts.app')

@section('title', 'Best Summer Training Institute Comparison | DigiCoders Technologies vs Others')
@section('meta_description', 'Compare 45-day summer training, 6-month industrial training, internships, and professional courses in Lucknow & India. Honest fee comparison, live project training, and placement data.')
@section('meta_keywords', 'best summer training institute, summer training in lucknow, 45 days summer training fees, industrial training institute in lucknow, python summer training, mern stack training, php training, android app development, digicoders technologies')
@section('canonical_url', url('/'))
@section('og_image', asset('assets/images/logos/logo.png'))

@section('json_ld')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "BestSummerTraining - DigiCoders Comparison Platform",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('assets/images/logos/logo.png') }}",
  "description": "Comprehensive IT training comparison platform helping students choose the best 45-day summer training, 6-month apprenticeship, and professional courses in Lucknow & India.",
  "sameAs": [
    "https://www.facebook.com/digicoderstech",
    "https://www.instagram.com/digacoderstech",
    "https://www.linkedin.com/company/digicoders/",
    "https://www.youtube.com/@digicoders"
  ]
}
</script>
@endsection

@section('content')
    <!-- Hero Section -->
    @include('components.hero')

    <!-- Compare by Program Section -->
    <section class="py-5 compare-programs-section">
        <div class="container">
            <div class="text-center mb-5 fade-up animate-on-scroll">
                <div class="d-inline-flex align-items-center gap-2 badge-premium mb-3">
                    <span style="width: 6px; height: 6px; border-radius: 50%; background: var(--primary); display: inline-block;"></span>
                    <span class="small fw-semibold" style="color: var(--primary);">Explore Programs</span>
                    <span style="width: 6px; height: 6px; border-radius: 50%; background: var(--primary); display: inline-block;"></span>
                </div>
                <h2 class="fw-bold mb-2" style="font-size: 2rem;">Compare by Program</h2>
                <p class="text-muted-custom">Explore and compare the most in-demand training programs</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-6 g-3">
                <!-- Summer Training -->
                <div class="col fade-up animate-on-scroll">
                    <div class="program-card h-100 p-4 text-center d-flex flex-column align-items-center">
                        <div class="program-icon-wrap mb-3" style="background: rgba(255, 165, 0, 0.1); color: #f97316;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                        </div>
                        <h5 class="fw-bold mb-1 fs-6">Summer Training</h5>
                        <p class="text-muted-custom small mb-3" style="font-size: 0.78rem; line-height: 1.4;">45 Days intensive learning programs</p>
                        <a href="{{ url('/summer-training-comparison') }}" class="program-link mt-auto" style="color: #f97316;">Compare Now →</a>
                    </div>
                </div>
                <!-- Internship Programs -->
                <div class="col fade-up animate-on-scroll delay-1">
                    <div class="program-card h-100 p-4 text-center d-flex flex-column align-items-center">
                        <div class="program-icon-wrap mb-3" style="background: rgba(10, 100, 213, 0.1); color: #0a64d5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                        </div>
                        <h5 class="fw-bold mb-1 fs-6">Internship Programs</h5>
                        <p class="text-muted-custom small mb-3" style="font-size: 0.78rem; line-height: 1.4;">Gain practical industry experience</p>
                        <a href="{{ url('/internship-comparison') }}" class="program-link mt-auto" style="color: #0a64d5;">Compare Now →</a>
                    </div>
                </div>
                <!-- Industrial Training -->
                <div class="col fade-up animate-on-scroll delay-2">
                    <div class="program-card h-100 p-4 text-center d-flex flex-column align-items-center">
                        <div class="program-icon-wrap mb-3" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 21H2V3l7 4 7-4 6 4v14z"></path><path d="M14 21V11h4v10"></path></svg>
                        </div>
                        <h5 class="fw-bold mb-1 fs-6">Industrial Training</h5>
                        <p class="text-muted-custom small mb-3" style="font-size: 0.78rem; line-height: 1.4;">Industry oriented skill development</p>
                        <a href="{{ url('/industrial-training-comparison') }}" class="program-link mt-auto" style="color: #10b981;">Compare Now →</a>
                    </div>
                </div>
                <!-- Apprenticeship Training -->
                <div class="col fade-up animate-on-scroll delay-3">
                    <div class="program-card h-100 p-4 text-center d-flex flex-column align-items-center">
                        <div class="program-icon-wrap mb-3" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </div>
                        <h5 class="fw-bold mb-1 fs-6">Apprenticeship Training</h5>
                        <p class="text-muted-custom small mb-3" style="font-size: 0.78rem; line-height: 1.4;">Earn while you learn with certified programs</p>
                        <a href="{{ url('/apprenticeship-comparison') }}" class="program-link mt-auto" style="color: #8b5cf6;">Compare Now →</a>
                    </div>
                </div>
                <!-- Professional Courses -->
                <div class="col fade-up animate-on-scroll delay-4">
                    <div class="program-card h-100 p-4 text-center d-flex flex-column align-items-center">
                        <div class="program-icon-wrap mb-3" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                        </div>
                        <h5 class="fw-bold mb-1 fs-6">Professional Courses</h5>
                        <p class="text-muted-custom small mb-3" style="font-size: 0.78rem; line-height: 1.4;">Job-ready professional certification courses</p>
                        <a href="{{ url('/professional-courses-comparison') }}" class="program-link mt-auto" style="color: #f59e0b;">Compare Now →</a>
                    </div>
                </div>
                <!-- Career Programs -->
                <div class="col fade-up animate-on-scroll delay-5">
                    <div class="program-card h-100 p-4 text-center d-flex flex-column align-items-center">
                        <div class="program-icon-wrap mb-3" style="background: rgba(236, 72, 153, 0.1); color: #ec4899;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.25-2.5 3.5-2.5 3.5s2.25-1 3.5-2.5M12 3C8 3 5 6 5 10c0 3.5 3 6.5 7 6.5s7-3 7-6.5c0-4-3-7-7-7zM9 15l-3 3M15 15l3 3M12 7.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"></path></svg>
                        </div>
                        <h5 class="fw-bold mb-1 fs-6">Career Programs</h5>
                        <p class="text-muted-custom small mb-3" style="font-size: 0.78rem; line-height: 1.4;">Advance your career with specialized programs</p>
                        <a href="{{ url('/career-programs-comparison') }}" class="program-link mt-auto" style="color: #ec4899;">Compare Now →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Compare Section — Premium Feature Cards Design -->
    <section class="why-compare-premium-section py-5 my-3">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center fade-up animate-on-scroll">
                    <div class="d-inline-flex align-items-center gap-2 badge-premium mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                        Informed Decision Making
                    </div>
                    <h2 class="fw-bold mb-3">Why Compare Training Options?</h2>
                    <p class="why-compare-text mx-auto" style="max-width: 640px;">Choosing the right training program determines your career path. Compare lab environments, curriculum depth, trainer profiles, and real project exposure before you commit.</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-lg-3 fade-up animate-on-scroll">
                    <div class="why-feature-card h-100 p-4">
                        <div class="why-feature-icon mb-3" style="background: rgba(10, 100, 213, 0.1); color: #0a64d5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div>
                        <h5 class="fw-bold mb-2">Learning Environments</h5>
                        <p class="why-feature-text">Understand different lab setups, batch sizes, and how each institute structures hands-on coding sessions for students.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fade-up animate-on-scroll delay-1">
                    <div class="why-feature-card h-100 p-4">
                        <div class="why-feature-icon mb-3" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                        </div>
                        <h5 class="fw-bold mb-2">Project Exposure</h5>
                        <p class="why-feature-text">Evaluate how many real-world projects you'll build and whether they'll be production-grade or purely academic exercises.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fade-up animate-on-scroll delay-2">
                    <div class="why-feature-card h-100 p-4">
                        <div class="why-feature-icon mb-3" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h5 class="fw-bold mb-2">Mentoring Quality</h5>
                        <p class="why-feature-text">Compare trainer expertise, direct mentor availability, and how each institute supports you throughout your learning journey.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fade-up animate-on-scroll delay-3">
                    <div class="why-feature-card h-100 p-4">
                        <div class="why-feature-icon mb-3" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                        </div>
                        <h5 class="fw-bold mb-2">Technology Stack</h5>
                        <p class="why-feature-text">Review which technologies are covered, how current the curriculum is, and whether it aligns with real industry demands.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="section-divider">

    <!-- DigiCoders Overview Section — Stats + Feature List Design -->
    <section class="digicoders-overview-section py-5 my-3">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Left: Heading + Stats Grid -->
                <div class="col-lg-5 fade-up animate-on-scroll">
                    <div class="d-inline-flex align-items-center gap-2 badge-premium mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                        About DigiCoders
                    </div>
                    <h2 class="fw-bold mb-4">DigiCoders Technologies Overview</h2>
                    <p class="why-compare-text mb-4">An IT training &amp; software development company based in Lucknow — bridging the gap between college syllabus and industry requirements since inception.</p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="digi-stat-card p-3 text-center">
                                <div class="digi-stat-number">500+</div>
                                <div class="digi-stat-label">Students Trained</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="digi-stat-card p-3 text-center">
                                <div class="digi-stat-number">20+</div>
                                <div class="digi-stat-label">Technologies</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="digi-stat-card p-3 text-center">
                                <div class="digi-stat-number">100%</div>
                                <div class="digi-stat-label">Practical Learning</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="digi-stat-card p-3 text-center">
                                <div class="digi-stat-number">5+</div>
                                <div class="digi-stat-label">Program Types</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right: Feature List -->
                <div class="col-lg-7 fade-up animate-on-scroll">
                    <div class="digi-feature-item d-flex align-items-start gap-3 mb-4">
                        <div class="digi-feature-check flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <div>
                            <strong class="digi-feature-title d-block mb-1">Practical Coding Approach</strong>
                            <span class="why-compare-text">Students write real code and build production applications — not just slide-based theory classes or passive learning exercises.</span>
                        </div>
                    </div>
                    <div class="digi-feature-item d-flex align-items-start gap-3 mb-4">
                        <div class="digi-feature-check flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <div>
                            <strong class="digi-feature-title d-block mb-1">Modern Tech Stack Coverage</strong>
                            <span class="why-compare-text">Python, Java, PHP, Laravel, React, Android — programs cover current industry-demanded technologies with live project work.</span>
                        </div>
                    </div>
                    <div class="digi-feature-item d-flex align-items-start gap-3 mb-4">
                        <div class="digi-feature-check flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <div>
                            <strong class="digi-feature-title d-block mb-1">Live Project Deployment</strong>
                            <span class="why-compare-text">Portfolio-ready projects deployed live — helping students demonstrate real capabilities to employers during campus placements.</span>
                        </div>
                    </div>
                    <div class="digi-feature-item d-flex align-items-start gap-3">
                        <div class="digi-feature-check flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <div>
                            <strong class="digi-feature-title d-block mb-1">Structured Career Preparation</strong>
                            <span class="why-compare-text">Resume guidance, technical interview prep, and daily lab access for self-practice — supporting students at every step of the journey.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="section-divider">




    <!-- ═══════════════════════════════════════════════
         Unified Programs Comparison Matrix Section
    ═══════════════════════════════════════════════ -->
    <section class="py-5 my-3 matrix-section" id="compare-matrix">
        <div class="container">
            <div class="text-center mb-5 fade-up animate-on-scroll">
                <div class="section-dot-badge mb-3">
                    <span class="dot-dec"></span>Unified Comparison Matrix<span class="dot-dec"></span>
                </div>
                <h2 class="fw-bold mb-3 matrix-heading">Compare All Programs Side-by-Side</h2>
                <p class="text-muted-custom mx-auto" style="max-width: 650px;">
                    An objective educational comparison of the 5 main training formats available. Evaluate duration, suitability, project exposure, and career outcomes.
                </p>
                <div class="d-lg-none mt-3">
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill small d-inline-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        Swipe left/right to view full table
                    </span>
                </div>
            </div>

            <div class="fade-up animate-on-scroll">
                <div class="matrix-table-wrapper premium-card p-0 shadow-lg border">
                    <div class="table-responsive">
                        <table class="table matrix-table table-hover align-middle mb-0 text-center">
                            <thead>
                                <tr>
                                    <th class="text-start col-criteria">Comparison Criteria</th>
                                    <th class="col-program">
                                        <div class="prog-h-badge" style="background: rgba(249, 115, 22, 0.1); color: #f97316;">Summer Training</div>
                                        <span class="prog-dur d-block mt-1">45 Days</span>
                                    </th>
                                    <th class="col-program">
                                        <div class="prog-h-badge" style="background: rgba(10, 100, 213, 0.1); color: #0a64d5;">Internship</div>
                                        <span class="prog-dur d-block mt-1">2-3 Months</span>
                                    </th>
                                    <th class="col-program">
                                        <div class="prog-h-badge" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">Industrial Training</div>
                                        <span class="prog-dur d-block mt-1">6 Months</span>
                                    </th>
                                    <th class="col-program">
                                        <div class="prog-h-badge" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;">Apprenticeship</div>
                                        <span class="prog-dur d-block mt-1">6-12 Months</span>
                                    </th>
                                    <th class="col-program">
                                        <div class="prog-h-badge" style="background: rgba(236, 72, 153, 0.1); color: #ec4899;">Professional Course</div>
                                        <span class="prog-dur d-block mt-1">3-6 Months</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold text-start col-criteria">Suitable For</td>
                                    <td>1st &amp; 2nd Year Students</td>
                                    <td>Students seeking project experience</td>
                                    <td>Final Year (B.Tech/BCA/MCA)</td>
                                    <td>Passouts &amp; Job Seekers</td>
                                    <td>Career Switchers &amp; Upskillers</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start col-criteria">Learning Focus</td>
                                    <td>Coding Basics &amp; Syntax</td>
                                    <td>Task-based execution</td>
                                    <td>Full-Stack Architectures</td>
                                    <td>Enterprise-grade workflows</td>
                                    <td>Specific domain skills</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start col-criteria">Practical Ratio</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1">70% Practical</span></td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1">80% Practical</span></td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1">90% Practical</span></td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1">100% Practical</span></td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1">85% Practical</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start col-criteria">Project Complexity</td>
                                    <td>1 Basic-Intermediate Project</td>
                                    <td>1-2 industry modules</td>
                                    <td>1 Full-Stack Production App</td>
                                    <td>Multiple Enterprise Apps</td>
                                    <td>Portfolio-specific designs</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start col-criteria">Placement Support</td>
                                    <td>Study material &amp; path</td>
                                    <td>Resume guidance &amp; prep</td>
                                    <td>Mock interviews &amp; HR prep</td>
                                    <td>Min. 10 Job Interviews Setup</td>
                                    <td>Career placement guidance</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start col-criteria">Certification</td>
                                    <td>Course Completion Certificate</td>
                                    <td>Internship Letter + Experience</td>
                                    <td>Project Completion Letter</td>
                                    <td>Apprenticeship Exp. Letter</td>
                                    <td>Professional Skill Certificate</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start col-criteria">Lab Practice</td>
                                    <td>Daily 2 Hours Lab Access</td>
                                    <td>Daily 3 Hours Lab Access</td>
                                    <td>Unlimited Daily Lab Access</td>
                                    <td>Unlimited Lab + Dedicated Desk</td>
                                    <td>Daily 2-3 Hours Lab Access</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive Comparison Sections -->
    <!-- Summer Training Section -->
    <section class="py-5" id="compare-summer">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 fade-up animate-on-scroll">
                    <div class="d-inline-flex align-items-center gap-2 badge-premium mb-3">
                        <span class="badge-dot" style="width: 8px; height: 8px; border-radius: 50%; background-color: var(--primary);"></span>
                        45 Days Duration
                    </div>
                    <h2 class="fw-bold mb-4">Summer Training Comparison</h2>
                    <p class="text-muted-custom mb-4" style="line-height: 1.7;">
                        Unlike standard institutes that only offer basic theoretical classes, DigiCoders provides a complete <strong>Foundation Course</strong> along with specialized technologies and real-world project work.
                    </p>
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-4">
                        <li class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--success)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <span class="fw-medium">C, HTML, CSS, JS, Bootstrap Included</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--success)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <span class="fw-medium">Live Project &amp; Project Report</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7 fade-up animate-on-scroll delay-1">
                    <div class="comparison-table-wrapper premium-card p-0 shadow-lg">
                        <table class="table comparison-table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 30%;">Comparison Criteria</th>
                                    <th style="width: 35%; background: linear-gradient(135deg, #006DAB, #38BDF8) !important;" class="text-center">DigiCoders Technologies</th>
                                    <th style="width: 35%; background: var(--text-muted) !important;" class="text-center">Other Institutes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-medium text-start">Foundation Course</td>
                                    <td class="text-center"><span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">Included Free</span></td>
                                    <td class="text-center text-muted-custom">Often skipped or theory-only</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium text-start">Technology Options</td>
                                    <td class="text-center fw-medium">Python, PHP, Java, Android, MERN, AI/ML, Embedded IoT</td>
                                    <td class="text-center text-muted-custom">Limited standard options (C++, Core Java)</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium text-start">Project Work</td>
                                    <td class="text-center">Live Project Included</td>
                                    <td class="text-center text-muted-custom">Basic assignments</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium text-start">Extra Curriculars</td>
                                    <td class="text-center">Resume Building, Live Hosting</td>
                                    <td class="text-center text-muted-custom">Not usually provided</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Summer Training Fee Structure Comparison Table -->
            <x-summer-fee-comparison-table />

            {{-- Summer Training Disclaimer Card --}}
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12">
                    <div class="p-3 p-md-4 rounded-3 border animate-on-scroll" style="background: var(--bg-surface); border-color: var(--border) !important; box-shadow: var(--shadow-sm);">
                        <p class="text-muted-custom small mb-0 lh-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-2 text-primary-custom align-middle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                            <strong>Disclaimer:</strong> The comparison is based on publicly available course information and commonly observed training practices. Facilities, curriculum, and support may differ across institutes. Students are encouraged to verify the latest course details directly with the respective training provider before making a decision.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Career-Oriented Professional Courses Section -->
    <section class="py-5 bg-surface border-top border-bottom border-secondary border-opacity-10" id="compare-industrial">
        <div class="container">
            <div class="row align-items-center g-5 flex-lg-row-reverse">
                <div class="col-lg-5 fade-up animate-on-scroll">
                    <div class="d-inline-flex align-items-center gap-2 badge-premium mb-3">
                        <span class="badge-dot" style="width: 8px; height: 8px; border-radius: 50%; background-color: var(--accent);"></span>
                        6 Months Duration
                    </div>
                    <h2 class="fw-bold mb-4">Career-Oriented Professional Courses Comparison</h2>
                    <p class="text-muted-custom mb-4" style="line-height: 1.7;">
                        DigiCoders offers structured 6-month <strong>Career-Oriented Professional Courses</strong> designed for technical &amp; non-technical students. Master Data Analytics, Graphic Designing, and Digital Marketing &amp; BDE with practical, portfolio-driven learning.
                    </p>
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-4">
                        <li class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--success)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <span class="fw-medium">Data Analytics, Graphic Design, Digital Marketing &amp; BDE</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--success)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <span class="fw-medium">Resume, LinkedIn, Mock Interviews &amp; Experience Letter Support</span>
                        </li>
                    </ul>
                    <a href="{{ url('/professional-courses-comparison') }}" class="btn btn-outline-custom">View Detailed Professional Courses Matrix →</a>
                </div>
                <div class="col-lg-7 fade-up animate-on-scroll delay-1">
                    <div class="comparison-table-wrapper premium-card p-0 shadow-lg">
                        <table class="table comparison-table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 30%;">Comparison Criteria</th>
                                    <th style="width: 35%; background: linear-gradient(135deg, #006DAB, #38BDF8) !important;" class="text-center">DigiCoders Technologies</th>
                                    <th style="width: 35%; background: var(--text-muted) !important;" class="text-center">Other Institutes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-medium text-start">Program Objective</td>
                                    <td class="text-center"><span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">100% Practical &amp; Job-Oriented</span></td>
                                    <td class="text-center text-muted-custom">Standard theory lecturing</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium text-start">Data Analytics Tools</td>
                                    <td class="text-center fw-medium">Excel, SQL, Python (Pandas/NumPy), Power BI</td>
                                    <td class="text-center text-muted-custom">Basic Excel or partial tools</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium text-start">Graphic Design Suite</td>
                                    <td class="text-center">Illustrator, Photoshop, Premiere Pro, Figma</td>
                                    <td class="text-center text-muted-custom">Basic photo editing only</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium text-start">Digital Marketing &amp; BDE</td>
                                    <td class="text-center">SEO, Google Ads, WordPress, Shopify, Lead Gen</td>
                                    <td class="text-center text-muted-custom">Generic social media introduction</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Professional Fee Structure Comparison Table Component -->
            <x-professional-fee-comparison-table />

            {{-- Professional Disclaimer Card --}}
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12">
                    <div class="p-3 p-md-4 rounded-3 border animate-on-scroll" style="background: var(--bg-surface); border-color: var(--border) !important; box-shadow: var(--shadow-sm);">
                        <p class="text-muted-custom small mb-0 lh-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-2 text-primary-custom align-middle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                            <strong>Disclaimer:</strong> The "Other Training Institutes" column presents general industry observations. Course content, project work, certifications, pricing, placement support, and additional facilities differ from one institute to another. Students are encouraged to verify the latest information directly with the institute before making any enrollment decision.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Apprenticeship & Internship Training Section -->
    <section class="py-5 my-5" id="compare-apprentice">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 fade-up animate-on-scroll">
                    <div class="d-inline-flex align-items-center gap-2 badge-premium mb-3">
                        <span class="badge-dot" style="width: 8px; height: 8px; border-radius: 50%; background-color: var(--primary);"></span>
                        6 Months Duration
                    </div>
                    <h2 class="fw-bold mb-4">6 Months Apprenticeship &amp; Internship Comparison</h2>
                    <p class="text-muted-custom mb-4" style="line-height: 1.7;">
                        Get job-ready with a structured 6-month Apprenticeship and Internship program. Master Full Stack Web &amp; App Development with advanced APIs, live project experience, and dedicated career preparation.
                    </p>
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-4">
                        <li class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--success)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <span class="fw-medium">Advanced APIs &amp; Live Server Hosting</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--success)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <span class="fw-medium">Multiple Tech Domains (Python, MERN, Flutter, Android, Java, PHP, ASP.NET)</span>
                        </li>
                    </ul>
                    <a href="{{ url('/internship-comparison') }}" class="btn btn-outline-custom">View Detailed 29-Point Comparison →</a>
                </div>
                <div class="col-lg-7 fade-up animate-on-scroll delay-1">
                    <div class="comparison-table-wrapper premium-card p-0 shadow-lg border border-primary border-opacity-25">
                        <table class="table comparison-table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 30%;">Comparison Criteria</th>
                                    <th style="width: 35%; background: linear-gradient(135deg, #006DAB, #38BDF8) !important;" class="text-center">DigiCoders Technologies</th>
                                    <th style="width: 35%; background: var(--text-muted) !important;" class="text-center">Other Institutes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-medium text-start">Program Focus</td>
                                    <td class="text-center"><span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">100% Job-Oriented Full Stack</span></td>
                                    <td class="text-center text-muted-custom">Faculty-dependent basic syllabus</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium text-start">Advanced Modules</td>
                                    <td class="text-center fw-medium">jQuery, AJAX, Payment Gateway, SMS/Email/Chat APIs</td>
                                    <td class="text-center text-muted-custom">Core syntax without integrations</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium text-start">Live Projects &amp; Hosting</td>
                                    <td class="text-center">2 Major Projects + Live Server Deployment</td>
                                    <td class="text-center text-muted-custom">Localhost or mini projects</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium text-start">Career &amp; Placement Support</td>
                                    <td class="text-center">Resume, LinkedIn, HR Prep &amp; Mock Interviews</td>
                                    <td class="text-center text-muted-custom">Basic completion certificate only</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Fee Structure Comparison Table -->
            <x-fee-comparison-table />

            {{-- Disclaimer Card --}}
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12">
                    <div class="p-3 p-md-4 rounded-3 border animate-on-scroll" style="background: var(--bg-surface); border-color: var(--border) !important; box-shadow: var(--shadow-sm);">
                        <p class="text-muted-custom small mb-0 lh-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-2 text-primary-custom align-middle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                            <strong>Disclaimer:</strong> The "Other Training Institutes" column represents general industry observations. Training content, pricing, placement support, certification policies, and additional services vary across institutes. Students should verify the latest details directly with the respective institute before making enrollment decisions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="section-divider">

    <!-- How the Comparison Works -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center animate-on-scroll">
                    <div class="badge-premium d-inline-flex mb-3">Educational Roadmap</div>
                    <h2 class="display-6 fw-bold mb-3">How to Choose the Right Training Program</h2>
                    <p class="text-muted-custom lead">A simple, transparent process to find your ideal program.</p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                {{-- Step 1 --}}
                <div class="col-lg-3 col-md-6 process-step-col animate-on-scroll delay-1">
                    <div class="process-step-card h-100 text-center">
                        <div class="process-icon-wrapper">
                            <span class="process-badge">1</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        </div>
                        <h5 class="fw-bold text-heading mb-3">Explore</h5>
                        <p class="text-muted-custom small mb-0">Begin by browsing our categorized comparison tables. Analyze the different training formats and compare metrics like technology stacks and practical ratios. Verify how programs align with your experience.</p>
                    </div>
                </div>
                {{-- Step 2 --}}
                <div class="col-lg-3 col-md-6 process-step-col animate-on-scroll delay-2">
                    <div class="process-step-card h-100 text-center">
                        <div class="process-icon-wrapper">
                            <span class="process-badge">2</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        </div>
                        <h5 class="fw-bold text-heading mb-3">Review</h5>
                        <p class="text-muted-custom small mb-0">Examine the specific curriculum modules, instructor portfolios, and live student projects. Check if the institute provides real-world development experience or legacy classroom lecturing.</p>
                    </div>
                </div>
                {{-- Step 3 --}}
                <div class="col-lg-3 col-md-6 process-step-col animate-on-scroll delay-3">
                    <div class="process-step-card h-100 text-center">
                        <div class="process-icon-wrapper">
                            <span class="process-badge">3</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                        </div>
                        <h5 class="fw-bold text-heading mb-3">Understand</h5>
                        <p class="text-muted-custom small mb-0">Identify key differences in doubt-solving support, placement guidance, and lab facilities. Many institutes offer basic certificate validation, but you must understand practical outcomes.</p>
                    </div>
                </div>
                {{-- Step 4 --}}
                <div class="col-lg-3 col-md-6 process-step-col animate-on-scroll delay-4">
                    <div class="process-step-card h-100 text-center">
                        <div class="process-icon-wrapper">
                            <span class="process-badge">4</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <h5 class="fw-bold text-heading mb-3">Choose</h5>
                        <p class="text-muted-custom small mb-0">Select the training program that fits your university criteria and future job goals. Plan your batch timing, visit the training facility physically to check labs, and speak with active students.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-5 trust-section trust-section-wrapper">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                {{-- Left column - critical warning findings --}}
                <div class="col-lg-5 animate-on-scroll">
                    <div class="badge-premium d-inline-flex mb-3" style="background: rgba(239, 68, 68, 0.1); border-color: rgba(239, 68, 68, 0.15); color: #f87171;">Critical Warnings</div>
                    <h2 class="hd-text-heading display-6 mb-4">Understanding Other Training Institutes</h2>

                    <div class="trust-accent-card mb-4">
                        <p class="text-muted-custom small mb-4" style="line-height: 1.6;">
                            When conducting a training institute comparison, students must understand that standard educational practices vary significantly across providers. Be aware of these common limitations:
                        </p>

                        <div class="trust-bullet-item">
                            <span class="trust-bullet-icon">✕</span>
                            <div>
                                <h6 class="fw-bold text-heading mb-1">Purely Academic Models</h6>
                                <p class="text-muted-custom small mb-0">Many training institutes utilize pre-recorded lectures or slide-based presentations instead of interactive live-coding sessions.</p>
                            </div>
                        </div>

                        <div class="trust-bullet-item">
                            <span class="trust-bullet-icon">✕</span>
                            <div>
                                <h6 class="fw-bold text-heading mb-1">Non-developer Instructors</h6>
                                <p class="text-muted-custom small mb-0">Training is often delivered by academic staff who do not build commercial software, leading to legacy stack knowledge.</p>
                            </div>
                        </div>

                        <div class="trust-bullet-item">
                            <span class="trust-bullet-icon">✕</span>
                            <div>
                                <h6 class="fw-bold text-heading mb-1">Vague Career Support</h6>
                                <p class="text-muted-custom small mb-0">Many centers treat training as an academic exercise, leaving placement assistance and resume builds completely unsupported.</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('/contact') }}" class="btn btn-primary-custom d-inline-flex align-items-center gap-2">
                        Get Personalized Advice
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>

                {{-- Right column - 4 premium evaluation metric cards --}}
                <div class="col-lg-7 animate-on-scroll">
                    <h5 class="fw-bold mb-3 text-heading">Essential Evaluation Parameters</h5>
                    <p class="text-muted-custom hd-text-body mb-4">
                        Before selecting a software training program, students should analyze multiple core factors to determine the quality of the learning environment. Choosing a training center is a significant investment of time and money, and an objective comparison prevents common mistakes. Use the four key metrics below to guide your initial institute evaluation:
                    </p>

                    <div class="row g-4">
                        {{-- Metric 1: Learning Styles --}}
                        <div class="col-sm-6">
                            <div class="trust-metric-card h-100">
                                <div class="trust-metric-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"/></svg>
                                </div>
                                <h6 class="fw-bold text-heading mb-2">1. Compare Learning Styles</h6>
                                <p class="text-muted-custom small mb-0">A premium program devotes at least 70% of training duration to live coding labs. Check whether the institute delivers actual coding tasks or relies on slides.</p>
                            </div>
                        </div>
                        {{-- Metric 2: Project Quality --}}
                        <div class="col-sm-6">
                            <div class="trust-metric-card h-100">
                                <div class="trust-metric-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                </div>
                                <h6 class="fw-bold text-heading mb-2">2. Evaluate Live Projects</h6>
                                <p class="text-muted-custom small mb-0">Check if students build commercial-grade applications hosted on cloud servers, or simply submit basic text scripts. Real project quality is crucial.</p>
                            </div>
                        </div>
                        {{-- Metric 3: Modern Tech Stack --}}
                        <div class="col-sm-6">
                            <div class="trust-metric-card h-100">
                                <div class="trust-metric-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                </div>
                                <h6 class="fw-bold text-heading mb-2">3. Review Technologies</h6>
                                <p class="text-muted-custom small mb-0">Ensure the curriculum includes modern frameworks like Laravel, React, or Node.js. Legacy stacks are insufficient for today's software engineering market.</p>
                            </div>
                        </div>
                        {{-- Metric 4: Program Suitability --}}
                        <div class="col-sm-6">
                            <div class="trust-metric-card h-100">
                                <div class="trust-metric-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                </div>
                                <h6 class="fw-bold text-heading mb-2">4. Identify Program Fit</h6>
                                <p class="text-muted-custom small mb-0">Evaluate whether a short-term Summer Training or an immersive final-year Industrial Training program matches your university criteria and career goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="section-divider">

    <!-- Featured Guides -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Featured Comparison Guides</h2>
                <p class="text-muted-custom">Educational resources to assist your decision-making.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4 fade-up animate-on-scroll">
                    <div class="premium-card p-4 h-100 d-flex flex-column border shadow-sm bg-white dark-bg-dark">
                        <span class="badge bg-secondary bg-opacity-10 text-secondary align-self-start mb-3">Guide</span>
                        <h5 class="fw-bold mb-3">How to Choose a Summer Training Program</h5>
                        <p class="text-muted-custom small mb-4 flex-grow-1">Selecting a 4-week summer training requires looking beyond marketing brochures. This guide analyzes how to evaluate course syllabus depth, check lab facilities, and ensure you get dedicated daily coding practice. Use this comparison to make your break productive and build foundational coding skills.</p>
                        <a href="{{ url('/summer-training-comparison') }}" class="text-primary-custom fw-semibold text-decoration-none">Read Guide &rarr;</a>
                    </div>
                </div>
                <div class="col-md-4 fade-up animate-on-scroll delay-1">
                    <div class="premium-card p-4 h-100 d-flex flex-column border shadow-sm bg-white dark-bg-dark">
                        <span class="badge bg-secondary bg-opacity-10 text-secondary align-self-start mb-3">Comparison</span>
                        <h5 class="fw-bold mb-3">Internship vs Industrial Training</h5>
                        <p class="text-muted-custom small mb-4 flex-grow-1">Understand the core differences in duration, project complexity, and mentorship depth between internships and industrial placements. This comparison helps final-year students choose the correct format to satisfy university criteria and build job readiness. Discover which program fits your current skill level best.</p>
                        <a href="{{ url('/industrial-training-comparison') }}" class="text-primary-custom fw-semibold text-decoration-none">Read Guide &rarr;</a>
                    </div>
                </div>
                <div class="col-md-4 fade-up animate-on-scroll delay-2">
                    <div class="premium-card p-4 h-100 d-flex flex-column border shadow-sm bg-white dark-bg-dark">
                        <span class="badge bg-secondary bg-opacity-10 text-secondary align-self-start mb-3">Analysis</span>
                        <h5 class="fw-bold mb-3">Apprenticeship Explained</h5>
                        <p class="text-muted-custom small mb-4 flex-grow-1">An educational analysis of how modern apprenticeship models function in the IT sector. Learn about structured learning plans, clean coding standards, and how these programs differ from conventional training modules. Identify if an apprenticeship matches your career goals and provides active placement guidance.</p>
                        <a href="{{ url('/apprenticeship-comparison') }}" class="text-primary-custom fw-semibold text-decoration-none">Read Guide &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== UNIFIED COMPARISON MATRIX ===== --}}
    <section class="matrix-section py-5">
        <div class="container py-4">

            {{-- Section header --}}
            <div class="text-center mb-5 fade-up animate-on-scroll">
                <span class="matrix-badge-label">Side-by-Side Comparison</span>
                <h2 class="matrix-heading fw-bold mt-3 mb-3">Which Training Program Is Right for You?</h2>
                <p class="matrix-subheading mx-auto">
                    Compare all five major IT training tracks across the dimensions that matter most—duration, projects,
                    placement support, and more—so you can make a confident, informed decision.
                </p>
            </div>

            {{-- Mobile swipe hint --}}
            <div class="matrix-scroll-hint d-flex d-lg-none align-items-center justify-content-center gap-2 mb-3">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
                <span>Swipe to compare all programs</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>

            {{-- Table wrapper --}}
            <div class="matrix-table-wrapper">
                <table class="matrix-table">
                    <thead>
                        <tr>
                            <th class="col-criteria">Feature</th>
                            <th>
                                <div class="prog-h-badge prog-summer">
                                    <span class="prog-icon">☀️</span>
                                    <span class="prog-name">Summer Training</span>
                                    <span class="prog-duration">4–6 Weeks</span>
                                </div>
                            </th>
                            <th>
                                <div class="prog-h-badge prog-internship">
                                    <span class="prog-icon">💼</span>
                                    <span class="prog-name">Internship</span>
                                    <span class="prog-duration">1–3 Months</span>
                                </div>
                            </th>
                            <th>
                                <div class="prog-h-badge prog-industrial">
                                    <span class="prog-icon">🏭</span>
                                    <span class="prog-name">Industrial Training</span>
                                    <span class="prog-duration">6 Months</span>
                                </div>
                            </th>
                            <th>
                                <div class="prog-h-badge prog-apprentice">
                                    <span class="prog-icon">🔧</span>
                                    <span class="prog-name">Apprenticeship</span>
                                    <span class="prog-duration">6–12 Months</span>
                                </div>
                            </th>
                            <th>
                                <div class="prog-h-badge prog-professional">
                                    <span class="prog-icon">🎓</span>
                                    <span class="prog-name">Professional Course</span>
                                    <span class="prog-duration">3–6 Months</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="matrix-row">
                            <td class="criteria-cell"><span class="criteria-icon">🎯</span> Suitable For</td>
                            <td><span class="matrix-tag tag-blue">1st–3rd Year Students</span></td>
                            <td><span class="matrix-tag tag-purple">Any Year Student</span></td>
                            <td><span class="matrix-tag tag-green">Pre-Final / Final Year</span></td>
                            <td><span class="matrix-tag tag-orange">Recent Graduates</span></td>
                            <td><span class="matrix-tag tag-red">Working Professionals</span></td>
                        </tr>
                        <tr class="matrix-row">
                            <td class="criteria-cell"><span class="criteria-icon">📚</span> Learning Focus</td>
                            <td>Foundational Concepts &amp; Basics</td>
                            <td>Project-Based Skill Development</td>
                            <td>Advanced Full-Stack Development</td>
                            <td>Professional Coding Standards</td>
                            <td>Specialized Technology Stack</td>
                        </tr>
                        <tr class="matrix-row">
                            <td class="criteria-cell"><span class="criteria-icon">⚗️</span> Practical Ratio</td>
                            <td><div class="matrix-bar"><div class="bar-fill bar-60"></div><span>60%</span></div></td>
                            <td><div class="matrix-bar"><div class="bar-fill bar-70"></div><span>70%</span></div></td>
                            <td><div class="matrix-bar"><div class="bar-fill bar-85"></div><span>85%</span></div></td>
                            <td><div class="matrix-bar"><div class="bar-fill bar-90"></div><span>90%</span></div></td>
                            <td><div class="matrix-bar"><div class="bar-fill bar-75"></div><span>75%</span></div></td>
                        </tr>
                        <tr class="matrix-row">
                            <td class="criteria-cell"><span class="criteria-icon">🗂️</span> Project Complexity</td>
                            <td>
                                <div class="complexity-stars">
                                    <span class="star filled">★</span><span class="star filled">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                                    <small>Basic</small>
                                </div>
                            </td>
                            <td>
                                <div class="complexity-stars">
                                    <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star">★</span><span class="star">★</span>
                                    <small>Intermediate</small>
                                </div>
                            </td>
                            <td>
                                <div class="complexity-stars">
                                    <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star">★</span>
                                    <small>Advanced</small>
                                </div>
                            </td>
                            <td>
                                <div class="complexity-stars">
                                    <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span>
                                    <small>Expert</small>
                                </div>
                            </td>
                            <td>
                                <div class="complexity-stars">
                                    <span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star filled">★</span><span class="star">★</span>
                                    <small>Advanced</small>
                                </div>
                            </td>
                        </tr>
                        <tr class="matrix-row">
                            <td class="criteria-cell"><span class="criteria-icon">🤝</span> Placement Support</td>
                            <td><span class="matrix-pill pill-partial">Basic Resume Help</span></td>
                            <td><span class="matrix-pill pill-partial">Mock Interviews</span></td>
                            <td><span class="matrix-pill pill-full">Full Placement Drive</span></td>
                            <td><span class="matrix-pill pill-full">Developer Mentorship</span></td>
                            <td><span class="matrix-pill pill-partial">Job Referrals</span></td>
                        </tr>
                        <tr class="matrix-row">
                            <td class="criteria-cell"><span class="criteria-icon">📜</span> Certification</td>
                            <td>
                                <div class="matrix-check yes">
                                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13.5 2.5L6 10l-3.5-3.5L1 8l5 5 9-9-1.5-1.5z"/></svg>
                                    Completion Certificate
                                </div>
                            </td>
                            <td>
                                <div class="matrix-check yes">
                                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13.5 2.5L6 10l-3.5-3.5L1 8l5 5 9-9-1.5-1.5z"/></svg>
                                    Internship Certificate
                                </div>
                            </td>
                            <td>
                                <div class="matrix-check yes">
                                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13.5 2.5L6 10l-3.5-3.5L1 8l5 5 9-9-1.5-1.5z"/></svg>
                                    Industry Certificate
                                </div>
                            </td>
                            <td>
                                <div class="matrix-check yes">
                                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13.5 2.5L6 10l-3.5-3.5L1 8l5 5 9-9-1.5-1.5z"/></svg>
                                    Professional Certificate
                                </div>
                            </td>
                            <td>
                                <div class="matrix-check yes">
                                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13.5 2.5L6 10l-3.5-3.5L1 8l5 5 9-9-1.5-1.5z"/></svg>
                                    Course Certificate
                                </div>
                            </td>
                        </tr>
                        <tr class="matrix-row">
                            <td class="criteria-cell"><span class="criteria-icon">🖥️</span> Lab Practice</td>
                            <td>
                                <div class="matrix-check yes">
                                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13.5 2.5L6 10l-3.5-3.5L1 8l5 5 9-9-1.5-1.5z"/></svg>
                                    Daily Lab Sessions
                                </div>
                            </td>
                            <td>
                                <div class="matrix-check yes">
                                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13.5 2.5L6 10l-3.5-3.5L1 8l5 5 9-9-1.5-1.5z"/></svg>
                                    Project-Based Labs
                                </div>
                            </td>
                            <td>
                                <div class="matrix-check yes">
                                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13.5 2.5L6 10l-3.5-3.5L1 8l5 5 9-9-1.5-1.5z"/></svg>
                                    Intensive Lab Hours
                                </div>
                            </td>
                            <td>
                                <div class="matrix-check yes">
                                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13.5 2.5L6 10l-3.5-3.5L1 8l5 5 9-9-1.5-1.5z"/></svg>
                                    Live Dev Environment
                                </div>
                            </td>
                            <td>
                                <div class="matrix-check partial">
                                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M8 1a7 7 0 100 14A7 7 0 008 1zm0 2a5 5 0 110 10A5 5 0 018 3z"/></svg>
                                    Varies by Course
                                </div>
                            </td>
                        </tr>
                        <tr class="matrix-row">
                            <td class="criteria-cell"><span class="criteria-icon">💰</span> Fee Range</td>
                            <td><span class="matrix-fee">₹3,000 – ₹8,000</span></td>
                            <td><span class="matrix-fee">₹5,000 – ₹15,000</span></td>
                            <td><span class="matrix-fee">₹8,000 – ₹25,000</span></td>
                            <td><span class="matrix-fee">₹10,000 – ₹30,000</span></td>
                            <td><span class="matrix-fee">₹5,000 – ₹20,000</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Bottom CTA --}}
            <div class="text-center mt-5 fade-up animate-on-scroll">
                <p class="text-muted-custom mb-4 small">Explore detailed comparisons for each program type below</p>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <a href="{{ url('/summer-training-comparison') }}" class="btn-matrix-cta cta-summer">☀️ Summer Training</a>
                    <a href="{{ url('/internship-comparison') }}" class="btn-matrix-cta cta-internship">💼 Internship</a>
                    <a href="{{ url('/industrial-training-comparison') }}" class="btn-matrix-cta cta-industrial">🏭 Industrial Training</a>
                    <a href="{{ url('/apprenticeship-comparison') }}" class="btn-matrix-cta cta-apprentice">🔧 Apprenticeship</a>
                </div>
            </div>

        </div>
    </section>
    {{-- ===== END UNIFIED COMPARISON MATRIX ===== --}}

    <!-- FAQ Section -->
    <section class="py-5 trust-section">
        <div class="container py-4">
            <div class="text-center mb-5 fade-up animate-on-scroll">
                <h2 class="fw-bold mb-3">Frequently Asked Questions</h2>
                <p class="text-muted-custom max-w-3xl mx-auto mb-0" style="max-width: 750px; margin-left: auto; margin-right: auto; line-height: 1.7;">
                    We have compiled this comprehensive list of frequently asked questions to address common queries students have when comparing IT training programs. Making an informed choice requires understanding how curricula, project requirements, and placement assistance differ across providers. Use this educational guide to evaluate your options systematically before enrolling.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-6 fade-up animate-on-scroll">
                            @include('components.faq', [
                                'question' => 'How does the comparison process work?',
                                'answer' => 'We review available data, curriculum structures, and pedagogical approaches of various institutes—including DigiCoders Technologies—and compare them against general industry standards. This independent evaluation helps students identify key differences in practical learning, technology stack exposure, and mentorship hours. We recommend verifying these parameters directly with providers before making any final enrollment or financial commitments. This ensures clear expectations.'
                            ])
                            @include('components.faq', [
                                'question' => 'What is the main difference between Summer Training and Industrial Training?',
                                'answer' => 'Summer training is a short-term program typically lasting 4 to 6 weeks, focusing on introductory coding concepts and foundational programming during semester breaks. In contrast, Industrial Training is an immersive, semester-long program lasting up to 6 months, designed for final-year students. Industrial programs require the development of a comprehensive, full-stack major project and cover advanced technology stacks, database configurations, and live server deployment.'
                            ])
                            @include('components.faq', [
                                'question' => 'How does DigiCoders Technologies compare to the average training institute?',
                                'answer' => 'DigiCoders Technologies operates as a software development company that also provides training, allowing them to offer practical learning on live projects. Many traditional training institutes focus heavily on academic theory or slide-based lectures. Students should verify the exact ratio of lab practice to lectures at other centers, as standard options vary by institute. Some facilities may have legacy technology coverage compared to DigiCoders\' focus on modern frameworks.'
                            ])
                            @include('components.faq', [
                                'question' => 'Can I transfer university credits from these training programs?',
                                'answer' => 'Credit transfer availability depends entirely on your university\'s guidelines and approval. Most colleges require completion certificates and a project report from a registered IT organization for Summer Training or Industrial Training. Students should verify with their college academic department before enrolling to ensure the chosen training provider meets all administrative criteria. Many institutes provide completion certificates, but official university recognition must be confirmed beforehand.'
                            ])
                            @include('components.faq', [
                                'question' => 'What should I check regarding trainer experience before joining any center?',
                                'answer' => 'Students should verify whether instructors have active software development experience or are purely academic trainers. Active developers bring current industry workflows, clean code standards, and modern debugging methods to the classroom. Academic instructors may rely on theoretical curriculum guidelines. Do not hesitate to ask for the trainer\'s professional portfolio or Git profile during a demo class to ensure you receive quality technical guidance.'
                            ])
                            @include('components.faq', [
                                'question' => 'Are placement guarantees offered by training institutes legitimate?',
                                'answer' => 'No training institute can legitimately guarantee a job, as hiring decisions depend on your individual skills, interview performance, and market demand. Genuine career guidance involves structured resume building, coding practice, and mock interviews to prepare you for selection rounds. Students should be cautious of centers that make absolute placement promises. Verify their actual placement preparation support and check reviews from past batches.'
                            ])
                        </div>
                        <div class="col-md-6 fade-up animate-on-scroll delay-1">
                            @include('components.faq', [
                                'question' => 'What is an IT Apprenticeship and how does it differ from an Internship?',
                                'answer' => 'An IT apprenticeship is a long-term, highly structured program that emphasizes continuous skill accumulation and clean coding practices under professional developer supervision. It often mimics actual developer roles. Internships are typically shorter, project-based programs focused on implementing academic theory. While internships help build initial portfolios, apprenticeships offer deeper immersion into agile workflows and code reviews. Students should verify the daily schedule of each format before enrolling.'
                            ])
                            @include('components.faq', [
                                'question' => 'How important is project-based learning in software training?',
                                'answer' => 'Project-based learning is the most critical component of software training because employers evaluate candidates based on their practical capabilities. Writing basic script files in a classroom is insufficient for building developer portfolios. Students should look for programs that require building full-stack applications with database integration and API configurations. Ensure that you host your projects live so you can share verifiable URLs with hiring managers.'
                            ])
                            @include('components.faq', [
                                'question' => 'What technology stacks should I look for in a modern IT training program?',
                                'answer' => 'A relevant IT training program must cover modern, in-demand programming languages and frameworks rather than legacy systems. Look for courses teaching stacks like React, Node.js, Python with Django, Java with Spring Boot, or PHP with Laravel. Students should verify if legacy technologies are included in the syllabus. Legitimate providers continuously update their technology coverage to align with current developer roles and software industry demands.'
                            ])
                            @include('components.faq', [
                                'question' => 'Can beginners with no coding background join summer training?',
                                'answer' => 'Yes, summer training programs are designed to accommodate beginners and students with limited programming experience. The curriculum starts with foundational logic, syntax basics, and fundamental concepts. However, students should check if the provider offers preparatory materials or introductory support. Selecting a program that begins with basic concepts helps build coding confidence before moving to practical projects. Many institutes offer introductory batches during semester vacations.'
                            ])
                            @include('components.faq', [
                                'question' => 'How do offline classes compare to online classes for IT training?',
                                'answer' => 'Offline classes provide a structured environment and immediate face-to-face support from lab mentors, which is highly beneficial for resolving complex coding doubts. Online classes offer flexibility and self-paced learning, but require strong self-discipline. The effectiveness of the format varies by institute. Students should verify if the provider offers daily live support for online learners or if the model relies purely on pre-recorded video lectures.'
                            ])
                            @include('components.faq', [
                                'question' => 'How are student doubts resolved during practical coding labs?',
                                'answer' => 'Doubt resolution methods differ across providers. Some centers offer dedicated lab mentors who assist students individually with syntax errors and logical bugs during lab slots. Other institutes expect students to search for solutions independently. Students should verify the level of personal support available. Daily doubt-solving assistance is crucial for beginners to prevent them from getting stuck on minor coding errors during project development.'
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    @include('components.cta', [
        'title' => 'Ready to Compare Training Options?',
        'description' => 'Explore our detailed comparison tables to choose the right IT training program for your career path. Whether you are looking for a short-term Summer Training Comparison, a structured Internship Comparison, or a comprehensive 6-month Industrial Training Comparison, our independent platform provides the objective insights you need. Check curriculum structures, technology stacks, and practical hours before making your decision. Visit training facilities physically, speak with current students, and make an educated choice to build a strong software engineering portfolio.',
        'primaryLink' => url('/summer-training-comparison'),
        'primaryText' => 'Compare Summer Training',
        'secondaryLink' => url('/internship-comparison'),
        'secondaryText' => 'Explore Internship Comparison'
    ])

@endsection
