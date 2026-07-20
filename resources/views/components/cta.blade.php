<section class="py-5 my-5 animate-on-scroll">
    <div class="container">
        <div class="card border-0 p-5 rounded-4 shadow-lg position-relative overflow-hidden premium-cta-wrapper">
            <!-- Decorative background shapes -->
            <div class="position-absolute"
                style="width: 300px; height: 300px; background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, transparent 70%); top: -30%; left: -10%; filter: blur(25px); pointer-events: none;">
            </div>
            <div class="position-absolute"
                style="width: 300px; height: 300px; background: radial-gradient(circle, rgba(168, 85, 247, 0.15) 0%, transparent 70%); bottom: -30%; right: -10%; filter: blur(25px); pointer-events: none;">
            </div>

            <div class="row align-items-center g-4 text-start position-relative z-index-2">
                <div class="col-lg-3 text-center text-lg-start">
                    <!-- Graduation cap illustration -->
                    <div class="premium-cta-icon-glow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none"
                            stroke="#a5b4fc" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                            <path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5" />
                        </svg>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h2 class="fw-bold mb-3 cta-title"
                        style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(1.8rem, 3vw, 2.4rem); letter-spacing: -0.5px;">
                        {{ $title ?? 'Ready to Find the Right Training Program?' }}
                    </h2>
                    <p class="mb-4 cta-description" style="font-size: 1.05rem; line-height: 1.6;">
                        {{ $description ?? 'Compare, analyze and choose the best training programs for your bright future.' }}
                    </p>

                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <a href="{{ $primaryLink ?? url('/summer-training-comparison') }}"
                            class="btn rounded-2 px-4 py-3 d-inline-flex align-items-center gap-2 text-white border-0"
                            style="background: linear-gradient(135deg, #6366f1, #a855f7); font-size: 0.95rem; font-weight: 600; box-shadow: 0 8px 24px rgba(99, 102, 241, 0.4); transition: all 0.3s;">
                            {{ $primaryText ?? 'Compare Programs Now' }} &rarr;
                        </a>
                        @if(isset($secondaryLink))
                            <a href="{{ $secondaryLink }}"
                                class="btn rounded-2 px-4 py-3 d-inline-flex align-items-center gap-2 border cta-secondary-btn"
                                style="font-size: 0.95rem; font-weight: 600; transition: all 0.3s;">
                                {{ $secondaryText ?? 'Explore Guides' }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>