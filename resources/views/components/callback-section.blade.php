@props([
    'title' => 'Need Free Course Counseling & Guidance?',
    'subtitle' => 'Enter your name and 10-digit mobile number below to request an instant callback from our senior training counselors.',
    'formId' => 'pageCallbackForm'
])

<section class="py-5 bg-light-subtle position-relative overflow-hidden" id="callback-counseling-section">
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card border-0 shadow-lg overflow-hidden position-relative" style="border-radius: 28px; background: var(--bg-surface, #ffffff);">
                    <!-- Decorative background accents -->
                    <div class="position-absolute top-0 end-0 bg-primary opacity-10 rounded-circle" style="width: 220px; height: 220px; margin-top: -80px; margin-right: -80px; pointer-events: none; filter: blur(40px);"></div>
                    <div class="position-absolute bottom-0 start-0 bg-info opacity-10 rounded-circle" style="width: 180px; height: 180px; margin-bottom: -60px; margin-left: -60px; pointer-events: none; filter: blur(30px);"></div>

                    <div class="card-body p-4 p-md-5 position-relative">
                        <div class="text-center mb-4">
                            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold mb-2" style="font-size: 0.82rem;">
                                <i class="bi bi-telephone-inbound-fill me-1"></i> Quick Callback Request
                            </span>
                            <h3 class="fw-bold text-heading mb-2 h4">{{ $title }}</h3>
                            <p class="text-muted-custom small mb-0 mx-auto" style="max-width: 520px; font-size: 0.88rem; line-height: 1.6;">
                                {{ $subtitle }}
                            </p>
                        </div>

                        <form id="{{ $formId }}" onsubmit="return handleCallbackFormSubmit(event, '{{ $formId }}')" class="max-w-xl mx-auto">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="{{ $formId }}_name" class="form-label small fw-semibold text-heading mb-1" style="font-size: 0.82rem;">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted px-3"><i class="bi bi-person"></i></span>
                                        <input type="text" 
                                               class="form-control border-start-0 ps-0 py-2.5" 
                                               id="{{ $formId }}_name" 
                                               name="name" 
                                               placeholder="Enter your full name" 
                                               required 
                                               style="font-size: 0.9rem;">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="{{ $formId }}_mobile" class="form-label small fw-semibold text-heading mb-1" style="font-size: 0.82rem;">Mobile Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted px-3"><i class="bi bi-phone"></i></span>
                                        <input type="tel" 
                                               class="form-control border-start-0 ps-0 py-2.5" 
                                               id="{{ $formId }}_mobile" 
                                               name="mobile" 
                                               placeholder="10-digit mobile number" 
                                               required 
                                               pattern="[6-9][0-9]{9}" 
                                               maxlength="10" 
                                               title="Mobile number must start with 6, 7, 8, or 9 and be exactly 10 digits"
                                               oninput="this.value = this.value.replace(/[^0-9]/g, ''); if(this.value.length > 10) this.value = this.value.slice(0, 10);"
                                               style="font-size: 0.9rem;">
                                    </div>
                                    <div class="form-text text-muted" style="font-size: 0.72rem;">Must start with 6, 7, 8, or 9 (10 digits)</div>
                                </div>

                                <div class="col-12 mt-4 text-center">
                                    <button type="submit" class="btn btn-primary rounded-pill px-5 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center justify-content-center gap-2" style="font-size: 0.95rem; min-width: 220px;">
                                        <i class="bi bi-send-fill" style="font-size: 0.85rem;"></i> Request Callback
                                    </button>
                                </div>

                                <div class="col-12">
                                    <div id="{{ $formId }}_success" class="alert alert-success p-2.5 mt-3 text-center small d-none mb-0" style="font-size: 0.82rem; border-radius: 12px;">
                                        <i class="bi bi-check-circle-fill me-1"></i> Thank you! Your callback request has been submitted.
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@once
    @push('scripts')
    <script>
    function handleCallbackFormSubmit(event, formId) {
        event.preventDefault();
        const form = document.getElementById(formId);
        const nameInput = document.getElementById(formId + '_name');
        const mobileInput = document.getElementById(formId + '_mobile');
        const successAlert = document.getElementById(formId + '_success');
        const submitBtn = form ? form.querySelector('button[type="submit"]') : null;
        
        if (!nameInput || !mobileInput) return false;

        const name = nameInput.value.trim();
        const mobile = mobileInput.value.trim();

        const mobileRegex = /^[6-9]\d{9}$/;
        if (!mobileRegex.test(mobile)) {
            alert('Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9.');
            mobileInput.focus();
            return false;
        }

        if (!name) {
            alert('Please enter your full name.');
            nameInput.focus();
            return false;
        }

        const originalBtnText = submitBtn ? submitBtn.innerHTML : '';
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Submitting...';
        }

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
        
        fetch('{{ route('inquiry.store') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                name: name,
                mobile: mobile,
                page_url: window.location.href
            })
        })
        .then(response => response.json())
        .then(data => {
            if (successAlert) {
                successAlert.classList.remove('d-none');
            }
            nameInput.value = '';
            mobileInput.value = '';
            setTimeout(() => {
                if (successAlert) successAlert.classList.add('d-none');
            }, 6000);
        })
        .catch(err => {
            console.error('Email inquiry dispatch error:', err);
            alert('Submission failed. Please try again.');
        })
        .finally(() => {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        });

        return false;
    }
    </script>
    @endpush
@endonce
