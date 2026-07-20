{{-- Premium Hero Section — 100vh, Adaptive Match to Light/Dark Mode --}}
<section class="hero-section position-relative w-100 d-flex flex-column overflow-hidden premium-hero"
    style="min-height: 100vh; padding-top: 90px;">
    
    {{-- Animated Background --}}
    <div class="position-absolute top-0 start-0 w-100 h-100 hero-stars" style="pointer-events: none; z-index: 0;">
        {{-- Purple glow top-left --}}
        <div class="position-absolute hero-orb-1" style="width: 600px; height: 600px; top: -15%; left: -10%; filter: blur(40px); animation: heroOrb1 18s ease-in-out infinite alternate;"></div>
        {{-- Blue glow top-right --}}
        <div class="position-absolute hero-orb-2" style="width: 500px; height: 500px; top: -10%; right: -8%; filter: blur(50px); animation: heroOrb2 22s ease-in-out infinite alternate-reverse;"></div>
        {{-- Subtle center glow --}}
        <div class="position-absolute hero-orb-2" style="width: 800px; height: 400px; top: 20%; left: 50%; transform: translateX(-50%); filter: blur(60px);"></div>
        
        {{-- Star dots --}}
        <div class="position-absolute" style="top: 12%; left: 18%; width: 2px; height: 2px; background: rgba(255,255,255,0.7); border-radius: 50%; box-shadow: 0 0 6px rgba(255,255,255,0.4);"></div>
        <div class="position-absolute" style="top: 22%; right: 22%; width: 2.5px; height: 2.5px; background: rgba(255,255,255,0.5); border-radius: 50%; box-shadow: 0 0 8px rgba(255,255,255,0.3);"></div>
        <div class="position-absolute" style="bottom: 40%; left: 12%; width: 2px; height: 2px; background: rgba(255,255,255,0.6); border-radius: 50%; box-shadow: 0 0 6px rgba(255,255,255,0.3);"></div>
        <div class="position-absolute" style="top: 35%; right: 10%; width: 1.5px; height: 1.5px; background: rgba(255,255,255,0.5); border-radius: 50%; box-shadow: 0 0 5px rgba(255,255,255,0.2);"></div>
        <div class="position-absolute" style="top: 55%; left: 30%; width: 2px; height: 2px; background: rgba(255,255,255,0.4); border-radius: 50%;"></div>
    </div>

    {{-- Floating Glass Card Left — Code Icon --}}
    <div class="position-absolute d-none d-xl-block" style="top: 22%; left: 3%; z-index: 2; pointer-events: none; animation: heroFloat1 9s ease-in-out infinite;">
        <div class="position-relative hero-float-card" style="width: 110px; height: 110px; border-radius: 20px; backdrop-filter: blur(12px); transform: rotate(-12deg); display: flex; align-items: center; justify-content: center;">
            <div class="position-absolute hero-float-card-glow" style="inset: -8px; filter: blur(15px); border-radius: 20px; z-index: -1;"></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
        </div>
    </div>

    {{-- Floating Glass Card Right — Chart Icon --}}
    <div class="position-absolute d-none d-xl-block" style="top: 28%; right: 4%; z-index: 2; pointer-events: none; animation: heroFloat2 11s ease-in-out infinite alternate;">
        <div class="position-relative hero-float-card" style="width: 110px; height: 110px; border-radius: 20px; backdrop-filter: blur(12px); transform: rotate(10deg); display: flex; align-items: center; justify-content: center;">
            <div class="position-absolute hero-float-card-glow" style="inset: -8px; filter: blur(15px); border-radius: 20px; z-index: -1;"></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
        </div>
    </div>

    {{-- Small floating sphere bottom-right --}}
    <div class="position-absolute d-none d-lg-block" style="bottom: 22%; right: 8%; z-index: 2; pointer-events: none; animation: heroFloat3 7s ease-in-out infinite;">
        <div style="width: 40px; height: 40px; background: radial-gradient(circle at 35% 35%, var(--accent) 0%, var(--primary) 60%, #1e1b4b 100%); border-radius: 50%; box-shadow: 0 0 30px var(--primary-glow);"></div>
    </div>

    {{-- Small floating sphere top-left --}}
    <div class="position-absolute d-none d-lg-block" style="top: 30%; left: 16%; z-index: 2; pointer-events: none; animation: heroFloat3 9s ease-in-out infinite reverse;">
        <div style="width: 22px; height: 22px; background: radial-gradient(circle at 35% 35%, var(--accent) 0%, var(--primary) 100%); border-radius: 50%; box-shadow: 0 0 20px var(--accent-glow); opacity: 0.7;"></div>
    </div>

    {{-- Main Content Area --}}
    <div class="container position-relative flex-grow-1 d-flex flex-column justify-content-center text-center px-4" style="z-index: 3; max-width: 1000px;">
        
        {{-- Top Badge --}}
        <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mx-auto mb-4 animate-on-scroll hero-badge" style="font-size: 0.82rem; font-weight: 500;">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
            India's Most Transparent Training Comparison Platform
        </div>
        
        {{-- Main Headline --}}
        <h1 class="mb-4 animate-on-scroll delay-1 hero-title" style="font-family: 'Plus Jakarta Sans', 'Inter', sans-serif; font-weight: 800; font-size: clamp(2rem, 4.5vw, 3.4rem); line-height: 1.15; letter-spacing: -1.5px; max-width: 900px; margin: 0 auto;">
            Compare Top IT Training Programs<br>& Make <span style="background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Smarter Career Decisions</span>
        </h1>
        
        {{-- Subheading --}}
        <p class="mb-4 animate-on-scroll delay-2 mx-auto hero-subheading" style="max-width: 720px; font-size: clamp(0.9rem, 1.2vw, 1.08rem); line-height: 1.65; font-weight: 400;">
            Compare Summer Training, Industrial Training, Internship, Apprenticeship and Professional Courses across <span style="color: var(--primary); font-weight: 600;">100+ factors</span> and choose the best program for your future.
        </p>
        
        {{-- CTA Buttons --}}
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center align-items-center mb-4 animate-on-scroll delay-3">
            <a href="#compare" class="btn rounded-2 px-4 py-3 d-inline-flex align-items-center gap-2 text-white border-0 hero-primary-btn" style="background: var(--gradient-primary); font-size: 0.95rem; font-weight: 600; box-shadow: 0 8px 28px var(--primary-glow); transition: all 0.3s;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 16v1a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v1"/><path d="M18 8h4a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-4"/><circle cx="8" cy="12" r="2"/></svg>
                Compare Programs Now &rarr;
            </a>
            <a href="#categories" class="btn rounded-2 px-4 py-3 d-inline-flex align-items-center gap-2 border hero-secondary-btn" style="font-size: 0.95rem; font-weight: 600; backdrop-filter: blur(8px); transition: all 0.3s;">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                Explore Guides
            </a>
        </div>

        {{-- Trust Avatars --}}
        <!-- <div class="d-flex align-items-center justify-content-center gap-3 mb-0 animate-on-scroll delay-4">
            <div class="d-flex align-items-center">
                <div class="rounded-circle overflow-hidden border hero-avatar-border" style="width: 32px; height: 32px; margin-right: -9px; z-index: 3;">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=75" alt="Student" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="rounded-circle overflow-hidden border hero-avatar-border" style="width: 32px; height: 32px; margin-right: -9px; z-index: 2;">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&q=75" alt="Student" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="rounded-circle overflow-hidden border hero-avatar-border" style="width: 32px; height: 32px; z-index: 1;">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&q=75" alt="Student" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div> -->
        <div class="d-flex align-items-center justify-content-center gap-2 mb-0 animate-on-scroll delay-4">

            <span class="hero-trust-text" style="font-size: 0.85rem; font-weight: 500;">Trusted by <span class="hero-trust-highlight fw-bold">10K+ students</span> every month</span>
        </div>
    </div>

    {{-- Bottom Stats Cards Row --}}
    <div class="container position-relative px-4" style="z-index: 3; margin-top: auto; padding-bottom: 2rem;">
        <div class="row g-3 animate-on-scroll delay-4">
            {{-- Card 1 --}}
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3 p-3 rounded-4 hero-stat-card-pill">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 hero-stat-icon" style="width: 42px; height: 42px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"/></svg>
                    </div>
                    <div>
                        <div class="fw-bold stat-number" style="font-size: 1.5rem; line-height: 1; letter-spacing: -0.5px;">45+</div>
                        <div class="stat-label" style="font-size: 0.78rem; font-weight: 500; margin-top: 2px;">Training Programs<br>Compared</div>
                    </div>
                </div>
            </div>
            {{-- Card 2 --}}
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3 p-3 rounded-4 hero-stat-card-pill">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 hero-stat-icon" style="width: 42px; height: 42px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><path d="m9 12 2 2 4-4"/></svg>
                    </div>
                    <div>
                        <div class="fw-bold stat-number" style="font-size: 1.5rem; line-height: 1; letter-spacing: -0.5px;">100+</div>
                        <div class="stat-label" style="font-size: 0.78rem; font-weight: 500; margin-top: 2px;">Comparison<br>Factors</div>
                    </div>
                </div>
            </div>
            {{-- Card 3 --}}
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3 p-3 rounded-4 hero-stat-card-pill">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 hero-stat-icon" style="width: 42px; height: 42px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <div>
                        <div class="fw-bold stat-number" style="font-size: 1.5rem; line-height: 1; letter-spacing: -0.5px;">10K+</div>
                        <div class="stat-label" style="font-size: 0.78rem; font-weight: 500; margin-top: 2px;">Students Helped<br>Monthly</div>
                    </div>
                </div>
            </div>
            {{-- Card 4 --}}
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3 p-3 rounded-4 hero-stat-card-pill">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 hero-stat-icon" style="width: 42px; height: 42px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                    </div>
                    <div>
                        <div class="fw-bold stat-number" style="font-size: 1.5rem; line-height: 1; letter-spacing: -0.5px;">Updated</div>
                        <div class="stat-label" style="font-size: 0.78rem; font-weight: 500; margin-top: 2px;">Regularly With<br>Latest Information</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

{{-- Hero Animations --}}
<style>
    @keyframes heroOrb1 {
        0% { transform: translate(0, 0) scale(1); }
        100% { transform: translate(3%, 4%) scale(1.06); }
    }
    @keyframes heroOrb2 {
        0% { transform: translate(0, 0) scale(1); }
        100% { transform: translate(-4%, 3%) scale(1.08); }
    }
    @keyframes heroFloat1 {
        0% { transform: translateY(0) rotate(-12deg); }
        50% { transform: translateY(-18px) rotate(-8deg) scale(1.03); }
        100% { transform: translateY(0) rotate(-12deg); }
    }
    @keyframes heroFloat2 {
        0% { transform: translateY(0) rotate(10deg); }
        50% { transform: translateY(-14px) rotate(16deg) scale(1.02); }
        100% { transform: translateY(0) rotate(10deg); }
    }
    @keyframes heroFloat3 {
        0% { transform: translateY(0); }
        50% { transform: translateY(-12px); }
        100% { transform: translateY(0); }
    }
    /* Hover effects */
    .hero-primary-btn:hover { transform: translateY(-2px); box-shadow: 0 12px 35px var(--primary-glow) !important; }
</style>