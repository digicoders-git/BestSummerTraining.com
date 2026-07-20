<section id="compare" class="py-5 my-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">{{ $title ?? 'Quick Comparison' }}</h2>
            <p class="text-muted-custom">{{ $description ?? 'See how DigiCoders compares to industry standards.' }}</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="premium-card p-0">
                    <div class="table-responsive comparison-table-wrapper">
                        <table class="table mb-0 comparison-table text-center align-middle">
                            <thead>
                                <tr>
                                    <th class="text-start" style="width: 30%;">Features</th>
                                    <th style="width: 35%; border-left: 1px solid var(--border-color); border-right: 1px solid var(--border-color);">
                                        <div class="text-primary-custom fs-5 mb-1">DigiCoders</div>
                                        <span class="badge bg-primary-custom bg-opacity-10 text-primary-custom fw-normal">Subject of Analysis</span>
                                    </th>
                                    <th style="width: 35%;">
                                        <div class="text-secondary-custom fs-5 mb-1">Other Institutes</div>
                                        <span class="badge bg-secondary bg-opacity-10 text-secondary fw-normal">Industry Average</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {!! $slot !!}
                            </tbody>
                        </table>
                    </div>
                </div>
                
                @if(isset($actionLink))
                <div class="text-center mt-4">
                    <a href="{{ $actionLink }}" class="btn btn-outline-custom">View Detailed Comparison &rarr;</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
