@props([
    'title' => 'Summer Training Fee Structure Comparison (45 Days)',
    'subtitle' => 'Transparent fee comparison for 45-day summer training programs across various technologies.',
    'primaryTitle' => 'DigiCoders (45 Days)',
    'secondaryTitle' => 'Typical Other Institutes'
])

<div class="premium-fee-table-wrapper my-5 animate-on-scroll">
    <div class="text-center mb-4">
        <div class="badge-premium d-inline-flex mb-2">Summer Training Fees</div>
        <h3 class="fw-bold mb-2 display-6" style="letter-spacing: -0.5px;">{{ $title }}</h3>
        <p class="text-body dark-text-light fw-medium mx-auto max-w-2xl opacity-75">{{ $subtitle }}</p>
    </div>

    <div class="premium-comparison-table-wrapper shadow-lg">
        <div class="table-responsive">
            <table class="premium-comparison-table text-start align-middle">
                <thead>
                    <tr>
                        <th scope="col" style="width: 35%;">Technology</th>
                        <th scope="col" class="col-primary" style="width: 30%;">{{ $primaryTitle }}</th>
                        <th scope="col" style="width: 35%;">{{ $secondaryTitle }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-feature" data-label="Technology">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                                Python
                            </span>
                        </td>
                        <td data-label="DigiCoders (45 Days)"><span class="table-price-primary">₹7,000</span></td>
                        <td data-label="Typical Other Institutes"><span class="table-price-secondary">₹8,500</span></td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Technology">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                PHP
                            </span>
                        </td>
                        <td data-label="DigiCoders (45 Days)"><span class="table-price-primary">₹7,000</span></td>
                        <td data-label="Typical Other Institutes"><span class="table-price-secondary">₹8,500</span></td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Technology">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path></svg>
                                Java
                            </span>
                        </td>
                        <td data-label="DigiCoders (45 Days)"><span class="table-price-primary">₹7,000</span></td>
                        <td data-label="Typical Other Institutes"><span class="table-price-secondary">₹9,000</span></td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Technology">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line></svg>
                                ASP.NET
                            </span>
                        </td>
                        <td data-label="DigiCoders (45 Days)"><span class="table-price-primary">₹7,000</span></td>
                        <td data-label="Typical Other Institutes"><span class="table-price-secondary">₹8,500</span></td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Technology">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                                Android
                            </span>
                        </td>
                        <td data-label="DigiCoders (45 Days)"><span class="table-price-primary">₹8,000</span></td>
                        <td data-label="Typical Other Institutes"><span class="table-price-secondary">₹9,000</span></td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Technology">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline></svg>
                                MERN Stack
                            </span>
                        </td>
                        <td data-label="DigiCoders (45 Days)"><span class="table-price-primary">₹8,000</span></td>
                        <td data-label="Typical Other Institutes"><span class="table-price-secondary">₹9,000</span></td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Technology">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><rect x="4" y="4" width="16" height="16" rx="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line></svg>
                                Embedded with IoT
                            </span>
                        </td>
                        <td data-label="DigiCoders (45 Days)"><span class="table-price-primary">₹7,000</span></td>
                        <td data-label="Typical Other Institutes"><span class="table-price-secondary">₹8,500</span></td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Technology">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><path d="M12 2a10 10 0 1 0 10 10H12V2z"></path></svg>
                                AI / ML
                            </span>
                        </td>
                        <td data-label="DigiCoders (45 Days)"><span class="table-price-primary">₹8,000</span></td>
                        <td data-label="Typical Other Institutes"><span class="table-price-secondary">₹9,000</span></td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Technology">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                Mechanical CAD
                            </span>
                        </td>
                        <td data-label="DigiCoders (45 Days)"><span class="table-price-primary">₹7,000</span></td>
                        <td data-label="Typical Other Institutes"><span class="table-price-secondary">₹8,500</span></td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Technology">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path></svg>
                                Civil CAD
                            </span>
                        </td>
                        <td data-label="DigiCoders (45 Days)"><span class="table-price-primary">₹7,000</span></td>
                        <td data-label="Typical Other Institutes"><span class="table-price-secondary">₹8,500</span></td>
                    </tr>
                    <tr>
                        <td class="col-feature" data-label="Technology">
                            <span class="d-inline-flex align-items-center gap-2 fw-bold text-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary-custom"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                Electrical CAD
                            </span>
                        </td>
                        <td data-label="DigiCoders (45 Days)"><span class="table-price-primary">₹7,000</span></td>
                        <td data-label="Typical Other Institutes"><span class="table-price-secondary">₹8,500</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
