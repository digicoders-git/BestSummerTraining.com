@props([
    'title' => 'Professional Courses Fee Structure Comparison',
    'subtitle' => 'Transparent investment details for 6-Month Career-Oriented Professional Certification Courses.',
    'primaryTitle' => 'DigiCoders Technologies',
    'secondaryTitle' => 'Other Training Institutes'
])

<div class="premium-fee-table-wrapper my-5 animate-on-scroll">
    <div class="text-center mb-4">
        <div class="badge-premium d-inline-flex mb-2">Professional Course Fees</div>
        <h3 class="fw-bold mb-2 display-6" style="letter-spacing: -0.5px;">{{ $title }}</h3>
        <p class="text-body dark-text-light fw-medium mx-auto max-w-2xl opacity-75">{{ $subtitle }}</p>
    </div>

    <div class="premium-comparison-table-wrapper shadow-lg">
        <div class="table-responsive">
            <table class="premium-comparison-table text-start align-middle">
                <thead>
                    <tr>
                        <th scope="col" style="width: 30%;">Course (6 Months)</th>
                        <th scope="col" class="col-primary" style="width: 32%;">{{ $primaryTitle }}</th>
                        <th scope="col" style="width: 38%;">{{ $secondaryTitle }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-feature" data-label="Course">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                                Data Analytics (6 Months)
                            </span>
                        </td>
                        <td data-label="DigiCoders Technologies"><span class="table-price-primary">₹30,000</span></td>
                        <td data-label="Other Training Institutes" class="fw-medium text-heading">Fees vary depending on curriculum depth, software tools, trainer experience, and city.</td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Course">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                                Graphic Designing (6 Months)
                            </span>
                        </td>
                        <td data-label="DigiCoders Technologies"><span class="table-price-primary">₹30,000</span></td>
                        <td data-label="Other Training Institutes" class="fw-medium text-heading">Pricing differs according to software coverage, portfolio projects, and institute reputation.</td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Course">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                                Digital Marketing & BDE (6 Months)
                            </span>
                        </td>
                        <td data-label="DigiCoders Technologies"><span class="table-price-primary">₹30,000</span></td>
                        <td data-label="Other Training Institutes" class="fw-medium text-heading">Fees vary across institutes depending on practical training, certifications, and marketing tools included.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
