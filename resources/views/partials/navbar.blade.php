<!-- Premium Navbar — Pixel-Perfect Match -->
<nav class="navbar navbar-expand-lg fixed-top premium-navbar" id="main-navbar">
    <div class="container px-4">

    
        <!-- Brand -->
        <a class="navbar-brand py-0 d-flex align-items-center" href="{{ url('/') }}" title="BestSummerTraining Home" style="text-decoration: none;">
            <img src="{{ asset('assets/images/logos/logo.png') }}" alt="BestSummerTraining Logo" title="BestSummerTraining Logo - DigiCoders Technologies" class="navbar-logo logo-light" style="height: 72px; margin: -6px 0; width: auto; object-fit: contain;">
            <img src="{{ asset('assets/images/logos/logo-dark.png') }}" alt="BestSummerTraining Logo" title="BestSummerTraining Dark Logo - DigiCoders Technologies" class="navbar-logo logo-dark" style="height: 72px; margin: -6px 0; width: auto; object-fit: contain; display: none;">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler border-0 shadow-none p-2" type="button" id="mobile-toggle-btn"
            aria-label="Toggle navigation" style="background: transparent;">
            <div class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <!-- Desktop Menu (Center) -->
        <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex" id="desktopNavbar">
            <ul class="navbar-nav align-items-center" style="gap: 0.15rem;">
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 position-relative {{ request()->is('/') ? 'nav-active' : '' }}"
                        href="{{ url('/') }}"
                        style="font-size: 0.88rem; font-weight: 500; transition: opacity 0.2s;">Home</a>
                </li>
                <li class="nav-item dropdown nav-dropdown-hover">
                    <a class="nav-link px-3 py-2 d-flex align-items-center gap-1 dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.88rem; font-weight: 500;">
                        Comparisons
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" style="opacity: 0.6;">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg mt-2"
                        style="border-radius: 12px; padding: 0.4rem; min-width: 220px;">
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/summer-training-comparison') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Summer Training</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/internship-comparison') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Internships</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2"
                                href="{{ url('/industrial-training-comparison') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Industrial Training</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/apprenticeship-comparison') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Apprenticeships</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/professional-courses-comparison') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Professional Courses</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/career-programs-comparison') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Career Programs</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown nav-dropdown-hover">
                    <a class="nav-link px-3 py-2 d-flex align-items-center gap-1 dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.88rem; font-weight: 500;">
                        Training Programs
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" style="opacity: 0.6;">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg mt-2"
                        style="border-radius: 12px; padding: 0.4rem; min-width: 240px;">
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/summer-training-comparison') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Summer Training Course</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/industrial-training-comparison') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Industrial Training Course</a></li>
                        <li><hr class="dropdown-divider my-1"></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/web-development-training') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Web Development</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/python-training-comparison') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Python Training</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/mern-stack-comparison') }}"
                                style="font-size: 0.88rem; font-weight: 500;">MERN Stack</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/mobile-development-training') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Mobile Development</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/data-science-training') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Data Science</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/cloud-computing-training') }}"
                                style="font-size: 0.88rem; font-weight: 500;">Cloud Computing</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown nav-dropdown-hover">
                    <a class="nav-link px-3 py-2 d-flex align-items-center gap-1 dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.88rem; font-weight: 500;">
                        Guides
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" style="opacity: 0.6;">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg mt-2"
                        style="border-radius: 12px; padding: 0.4rem; min-width: 220px;">
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/faq') }}"
                                style="font-size: 0.88rem; font-weight: 500;">FAQ Hub</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-2" href="{{ url('/about') }}"
                                style="font-size: 0.88rem; font-weight: 500;">About Us</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 {{ request()->is('blog*') ? 'nav-active' : '' }}"
                        href="{{ url('/blog') }}" style="font-size: 0.88rem; font-weight: 500;">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 {{ request()->is('contact') ? 'nav-active' : '' }}"
                        href="{{ url('/contact') }}" style="font-size: 0.88rem; font-weight: 500;">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Right Side Actions -->
        <div class="d-none d-lg-flex align-items-center gap-3">

            <!-- Theme Toggle Button -->
            <button class="btn border-0 p-2 d-flex align-items-center justify-content-center theme-toggle-btn"
                onclick="window.toggleTheme && window.toggleTheme()"
                aria-label="Toggle theme"
                style="width: 40px; height: 40px; border-radius: 50%; background: rgba(255, 255, 255, 0.05); color: var(--text-heading); transition: all 0.3s;">
                <!-- Sun Icon (Shown in Dark Mode to switch to Light) -->
                <svg id="theme-icon-dark" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                    <circle cx="12" cy="12" r="5"></circle>
                    <line x1="12" y1="1" x2="12" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="23"></line>
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                    <line x1="1" y1="12" x2="3" y2="12"></line>
                    <line x1="21" y1="12" x2="23" y2="12"></line>
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                </svg>
                <!-- Moon Icon (Shown in Light Mode to switch to Dark) -->
                <svg id="theme-icon-light" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </button>

            <!-- CTA Button -->
            <a class="btn rounded-2 px-4 py-2 text-white border-0 d-flex align-items-center gap-1 nav-cta-btn"
                href="{{ url('/summer-training-comparison') }}"
                style="font-size: 0.85rem; font-weight: 600; transition: all 0.3s; letter-spacing: 0.2px;">
                Compare Programs &rarr;
            </a>
        </div>
    </div>
</nav>

<!-- Navbar Inline Styles -->
<style>
    /* Active nav indicator */
    .nav-active {
        color: var(--primary) !important;
        opacity: 1 !important;
        font-weight: 600 !important;
    }

    /* Dropdown hover open */
    @media (min-width: 992px) {
        .nav-dropdown-hover:hover>.dropdown-menu {
            display: block;
            animation: navDropIn 0.25s ease forwards;
        }

        .nav-dropdown-hover:hover>.nav-link {
            opacity: 1 !important;
        }
    }

    @keyframes navDropIn {
        from {
            opacity: 0;
            transform: translateY(8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- Premium Mobile Full-Screen Menu -->
<div class="mobile-menu-overlay" id="mobile-menu">

    {{-- Top Bar: Logo + Close --}}
    <div class="mob-menu-header">
        <a href="{{ url('/') }}" class="mob-brand">
            <img src="{{ asset('assets/images/logos/logo.png') }}" alt="BST Logo" class="mob-logo logo-light">
            <img src="{{ asset('assets/images/logos/logo-dark.png') }}" alt="BST Logo" class="mob-logo logo-dark">
        </a>
        <button id="mobile-close-btn" class="mob-close-btn" aria-label="Close">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>

    {{-- Scrollable Nav Area --}}
    <div class="mob-menu-body">

        {{-- Primary --}}
        <a href="{{ url('/') }}" class="mob-nav-link mob-home {{ request()->is('/') ? 'mob-active' : '' }}">
            <span class="mob-link-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </span>
            <span>Home</span>
            <svg class="mob-link-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>

        {{-- Section Label --}}
        <p class="mob-section-label">Comparisons</p>

        <a href="{{ url('/summer-training-comparison') }}" class="mob-nav-link {{ request()->is('summer-training-comparison') ? 'mob-active' : '' }}">
            <span class="mob-link-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            </span>
            <span>Summer Training</span>
            <svg class="mob-link-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <a href="{{ url('/internship-comparison') }}" class="mob-nav-link {{ request()->is('internship-comparison') ? 'mob-active' : '' }}">
            <span class="mob-link-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>
            </span>
            <span>Internships</span>
            <svg class="mob-link-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <a href="{{ url('/industrial-training-comparison') }}" class="mob-nav-link {{ request()->is('industrial-training-comparison') ? 'mob-active' : '' }}">
            <span class="mob-link-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20M6 20V10l6-6 6 6v10"/><path d="M10 20v-5h4v5"/></svg>
            </span>
            <span>Industrial Training</span>
            <svg class="mob-link-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <a href="{{ url('/apprenticeship-comparison') }}" class="mob-nav-link {{ request()->is('apprenticeship-comparison') ? 'mob-active' : '' }}">
            <span class="mob-link-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
            </span>
            <span>Apprenticeships</span>
            <svg class="mob-link-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <a href="{{ url('/professional-courses-comparison') }}" class="mob-nav-link {{ request()->is('professional-courses-comparison') ? 'mob-active' : '' }}">
            <span class="mob-link-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
            </span>
            <span>Professional Courses</span>
            <svg class="mob-link-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <a href="{{ url('/career-programs-comparison') }}" class="mob-nav-link {{ request()->is('career-programs-comparison') ? 'mob-active' : '' }}">
            <span class="mob-link-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            </span>
            <span>Career Programs</span>
            <svg class="mob-link-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>

        {{-- Section Label --}}
        <p class="mob-section-label">Resources</p>

        <a href="{{ url('/faq') }}" class="mob-nav-link {{ request()->is('faq') ? 'mob-active' : '' }}">
            <span class="mob-link-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            </span>
            <span>FAQ Hub</span>
            <svg class="mob-link-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <a href="{{ url('/about') }}" class="mob-nav-link {{ request()->is('about') ? 'mob-active' : '' }}">
            <span class="mob-link-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
            </span>
            <span>About Us</span>
            <svg class="mob-link-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <a href="{{ url('/blog') }}" class="mob-nav-link {{ request()->is('blog*') ? 'mob-active' : '' }}">
            <span class="mob-link-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
            </span>
            <span>Blogs</span>
            <svg class="mob-link-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <a href="{{ url('/contact') }}" class="mob-nav-link {{ request()->is('contact') ? 'mob-active' : '' }}">
            <span class="mob-link-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            </span>
            <span>Contact</span>
            <svg class="mob-link-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
    </div>

    {{-- CTA Footer --}}
    <div class="mob-menu-footer">
        <a href="{{ url('/summer-training-comparison') }}" class="mob-cta-btn">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
            Compare Programs
        </a>
    </div>
</div>