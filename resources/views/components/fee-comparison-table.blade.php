@props([
    'title' => '6-Month Fee Structure Comparison',
    'subtitle' => 'Transparent fee comparison for 6-month apprenticeship and internship training programs across technologies.',
    'primaryTitle' => 'DigiCoders Technologies',
    'secondaryTitle' => 'Other Training Institutes'
])

<div class="premium-fee-table-wrapper my-5 animate-on-scroll">
    <div class="text-center mb-4">
        <div class="badge-premium d-inline-flex mb-2">6-Month Course Fees</div>
        <h3 class="fw-bold mb-2 display-6" style="letter-spacing: -0.5px;">{{ $title }}</h3>
        <p class="text-body dark-text-light fw-medium mx-auto max-w-2xl opacity-75">{{ $subtitle }}</p>
    </div>

    <div class="premium-comparison-table-wrapper shadow-lg">
        <div class="table-responsive">
            <table class="premium-comparison-table text-start align-middle">
                <thead>
                    <tr>
                        <th scope="col" style="width: 30%;">Course / Domain (6 Months)</th>
                        <th scope="col" class="col-primary" style="width: 32%;">{{ $primaryTitle }}</th>
                        <th scope="col" style="width: 38%;">{{ $secondaryTitle }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-feature" data-label="Course">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                                Python (6 Months)
                            </span>
                        </td>
                        <td data-label="DigiCoders Technologies"><span class="table-price-primary">₹25,000</span></td>
                        <td data-label="Other Training Institutes" class="fw-medium text-heading">Fees vary depending on curriculum, trainer experience, city, and institute reputation.</td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Course">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                PHP (6 Months)
                            </span>
                        </td>
                        <td data-label="DigiCoders Technologies"><span class="table-price-primary">₹25,000</span></td>
                        <td data-label="Other Training Institutes" class="fw-medium text-heading">Pricing differs across institutes based on course coverage and project training.</td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Course">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                                Java (6 Months)
                            </span>
                        </td>
                        <td data-label="DigiCoders Technologies"><span class="table-price-primary">₹25,000</span></td>
                        <td data-label="Other Training Institutes" class="fw-medium text-heading">Course fees vary depending on technologies included and training duration.</td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Course">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                                ASP.NET (6 Months)
                            </span>
                        </td>
                        <td data-label="DigiCoders Technologies"><span class="table-price-primary">₹25,000</span></td>
                        <td data-label="Other Training Institutes" class="fw-medium text-heading">Fees differ according to institute offerings and Microsoft technology coverage.</td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Course">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                                Flutter (6 Months)
                            </span>
                        </td>
                        <td data-label="DigiCoders Technologies"><span class="table-price-primary">₹30,000</span></td>
                        <td data-label="Other Training Institutes" class="fw-medium text-heading">Flutter course pricing varies depending on project work and mobile development curriculum.</td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Course">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><rect x="3" y="11" width="18" height="10" rx="2"></rect><circle cx="12" cy="5" r="2"></circle><path d="M12 7v4"></path></svg>
                                Android (6 Months)
                            </span>
                        </td>
                        <td data-label="DigiCoders Technologies"><span class="table-price-primary">₹30,000</span></td>
                        <td data-label="Other Training Institutes" class="fw-medium text-heading">Android training fees depend on technologies covered, trainer expertise, and institute policies.</td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Course">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                MERN Stack (6 Months)
                            </span>
                        </td>
                        <td data-label="DigiCoders Technologies"><span class="table-price-primary">₹30,000</span></td>
                        <td data-label="Other Training Institutes" class="fw-medium text-heading">MERN Stack pricing varies widely based on project quality, deployment training, and overall curriculum depth.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
