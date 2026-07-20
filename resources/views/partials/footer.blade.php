<footer class="footer-premium position-relative overflow-hidden mt-5">
    <!-- Decorative background glow for footer -->
    <div class="position-absolute"
        style="width: 400px; height: 400px; background: radial-gradient(circle, rgba(0, 109, 171, 0.08) 0%, transparent 70%); bottom: -10%; left: -10%; filter: blur(40px); pointer-events: none; z-index: 0;">
    </div>

    <div class="container position-relative z-index-1">
        <div class="row g-5">
            <!-- Brand Column -->
            <div class="col-lg-3 col-md-12 fade-up animate-on-scroll">
                <div class="mb-3">
                    <img src="{{ asset('assets/images/logos/logo.png') }}" alt="BestSummerTraining Logo" class="navbar-logo logo-light" style="height: 100px; width: auto; object-fit: contain;">
                    <img src="{{ asset('assets/images/logos/logo-dark.png') }}" alt="BestSummerTraining Logo" class="navbar-logo logo-dark" style="height: 100px; width: auto; object-fit: contain; display: none;">
                </div>
                <p class="text-muted-custom mb-4 small" style="line-height: 1.6; max-width: 280px;">
                    India's most transparent platform to compare training programs and make better career decisions.
                </p>
                <div class="d-flex gap-2">
                    <a href="https://www.facebook.com/digicoderstech" target="_blank" rel="noopener noreferrer"
                        class="footer-social-link d-flex align-items-center justify-content-center rounded-circle"
                        aria-label="Facebook"
                        style="width: 36px; height: 36px; background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); color: rgba(255,255,255,0.6); transition: all 0.2s;">
                        <i class="bi bi-facebook fs-6"></i>
                    </a>
                    <a href="https://www.instagram.com/digacoderstech" target="_blank" rel="noopener noreferrer"
                        class="footer-social-link d-flex align-items-center justify-content-center rounded-circle"
                        aria-label="Instagram"
                        style="width: 36px; height: 36px; background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); color: rgba(255,255,255,0.6); transition: all 0.2s;">
                        <i class="bi bi-instagram fs-6"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/digicoders/" target="_blank" rel="noopener noreferrer"
                        class="footer-social-link d-flex align-items-center justify-content-center rounded-circle"
                        aria-label="LinkedIn"
                        style="width: 36px; height: 36px; background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); color: rgba(255,255,255,0.6); transition: all 0.2s;">
                        <i class="bi bi-linkedin fs-6"></i>
                    </a>
                    <a href="https://www.youtube.com/@digicoders" target="_blank" rel="noopener noreferrer"
                        class="footer-social-link d-flex align-items-center justify-content-center rounded-circle"
                        aria-label="YouTube"
                        style="width: 36px; height: 36px; background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); color: rgba(255,255,255,0.6); transition: all 0.2s;">
                        <i class="bi bi-youtube fs-6"></i>
                    </a>
                    <a href="https://www.whatsapp.com/channel/0029VaDTIxW5EjxzOyubYT3l" target="_blank" rel="noopener noreferrer"
                        class="footer-social-link d-flex align-items-center justify-content-center rounded-circle"
                        aria-label="WhatsApp"
                        style="width: 36px; height: 36px; background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); color: rgba(255,255,255,0.6); transition: all 0.2s;">
                        <i class="bi bi-whatsapp fs-6"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="col-lg-1-8 col-md-4 col-sm-6 fade-up animate-on-scroll delay-1">
                <h6 class="fw-bold text-white mb-4" style="font-size: 0.9rem; letter-spacing: 0.3px;">Quick Links</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                    <li><a href="{{ url('/') }}" class="text-decoration-none footer-link small">Home</a></li>
                    <li><a href="{{ url('/summer-training-comparison') }}"
                            class="text-decoration-none footer-link small">Comparisons</a></li>
                    <li><a href="{{ url('/industrial-training-comparison') }}"
                            class="text-decoration-none footer-link small">Training Programs</a></li>
                    <li><a href="{{ url('/faq') }}" class="text-decoration-none footer-link small">Guides</a></li>
                    <li><a href="{{ url('/about') }}" class="text-decoration-none footer-link small">About Us</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-decoration-none footer-link small">Contact Us</a>
                    </li>
                </ul>
            </div>

            <!-- Popular Comparisons Column -->
            <div class="col-lg-1-8 col-md-4 col-sm-6 fade-up animate-on-scroll delay-2">
                <h6 class="fw-bold text-white mb-4" style="font-size: 0.9rem; letter-spacing: 0.3px;">Popular
                    Comparisons</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                    <li><a href="{{ url('/summer-training-comparison') }}"
                            class="text-decoration-none footer-link small">Summer Training</a></li>
                    <li><a href="{{ url('/internship-comparison') }}"
                            class="text-decoration-none footer-link small">Internship Programs</a></li>
                    <li><a href="{{ url('/industrial-training-comparison') }}"
                            class="text-decoration-none footer-link small">Industrial Training</a></li>
                    <li><a href="{{ url('/apprenticeship-comparison') }}"
                            class="text-decoration-none footer-link small">Apprenticeship</a></li>
                    <li><a href="{{ url('/python-training-comparison') }}"
                            class="text-decoration-none footer-link small">Python Training</a></li>
                    <li><a href="{{ url('/mern-stack-comparison') }}"
                            class="text-decoration-none footer-link small">MERN Stack</a></li>
                </ul>
            </div>

            <!-- Training Programs Column -->
            <div class="col-lg-1-8 col-md-4 col-sm-6 fade-up animate-on-scroll delay-3">
                <h6 class="fw-bold text-white mb-4" style="font-size: 0.9rem; letter-spacing: 0.3px;">Training Programs
                </h6>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                    <li><a href="{{ url('/web-development-training') }}"
                            class="text-decoration-none footer-link small">Web Development</a></li>
                    <li><a href="{{ url('/mobile-development-training') }}"
                            class="text-decoration-none footer-link small">Mobile Development</a></li>
                    <li><a href="{{ url('/data-science-training') }}"
                            class="text-decoration-none footer-link small">Data Science</a></li>
                    <li><a href="{{ url('/cloud-computing-training') }}"
                            class="text-decoration-none footer-link small">Cloud Computing</a></li>
                    <li><a href="{{ url('/digital-marketing-training') }}"
                            class="text-decoration-none footer-link small">Digital Marketing</a></li>
                    <li><a href="{{ url('/ui-ux-design-training') }}"
                            class="text-decoration-none footer-link small">UI/UX Design</a></li>
                </ul>
            </div>

            <!-- Resources Column -->
            <div class="col-lg-1-8 col-md-4 col-sm-6 fade-up animate-on-scroll delay-4">
                <h6 class="fw-bold text-white mb-4" style="font-size: 0.9rem; letter-spacing: 0.3px;">Resources</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                    <li><a href="{{ url('/blog') }}" class="text-decoration-none footer-link small">Career Guides</a>
                    </li>
                    <li><a href="{{ url('/blog/5-mistakes-choosing-summer-training') }}" class="text-decoration-none footer-link small">How to Choose</a></li>
                    <li><a href="{{ url('/about#reviews') }}" class="text-decoration-none footer-link small">Student Reviews</a>
                    </li>
                    <li><a href="{{ url('/faq') }}" class="text-decoration-none footer-link small">FAQs</a></li>
                    <li><a href="{{ url('/blog') }}" class="text-decoration-none footer-link small">Blog Hub</a></li>
                </ul>
            </div>

            <!-- Legal Column -->
            <div class="col-lg-1-8 col-md-4 col-sm-6 fade-up animate-on-scroll delay-5">
                <h6 class="fw-bold text-white mb-4" style="font-size: 0.9rem; letter-spacing: 0.3px;">Legal</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                    <li><a href="{{ url('/privacy-policy') }}" class="text-decoration-none footer-link small">Privacy
                            Policy</a></li>
                    <li><a href="{{ url('/terms-and-conditions') }}"
                            class="text-decoration-none footer-link small">Terms & Conditions</a></li>
                    <li><a href="{{ url('/disclaimer') }}" class="text-decoration-none footer-link small">Disclaimer</a>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="mt-5 mb-4" style="border-color: rgba(255, 255, 255, 0.08) !important;">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="text-muted small mb-0">&copy; {{ date('Y') }} CompareIT. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class="small text-muted">Made with <span style="color: #ef4444;">❤️</span> for Students</span>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Back to Top Button -->
<button id="back-to-top-btn" class="back-to-top-btn" aria-label="Back to top" type="button">
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="18 15 12 9 6 15" />
    </svg>
</button>

<!-- Floating Left Action Buttons (Call & WhatsApp) -->
<div class="floating-left-actions d-flex flex-column gap-3">
    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/919198483820?text=Hello%20DigiCoders,%20I%20want%20to%20know%20more%20about%20training%20courses." 
       target="_blank" 
       rel="noopener noreferrer" 
       class="floating-btn floating-btn-whatsapp d-flex align-items-center justify-content-center text-white shadow-lg" 
       aria-label="Chat on WhatsApp">
        <i class="bi bi-whatsapp fs-4"></i>
    </a>

    <!-- Call Floating Button -->
    <a href="tel:9198483820" 
       class="floating-btn floating-btn-call d-flex align-items-center justify-content-center text-white shadow-lg" 
       aria-label="Call Us">
        <i class="bi bi-telephone-fill fs-5"></i>
    </a>
</div>