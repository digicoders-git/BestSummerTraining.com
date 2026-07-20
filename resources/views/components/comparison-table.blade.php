@props(['primaryTitle' => 'DigiCoders Summer Training (45 Days)', 'secondaryTitle' => 'Other Training Institutes'])

<div class="premium-comparison-table-wrapper mb-4 animate-on-scroll">
    <div class="table-responsive">
        <table class="premium-comparison-table">
            <thead>
                <tr>
                    <th scope="col" style="width: 25%;">Feature</th>
                    <th scope="col" class="col-primary" style="width: 37.5%;">{{ $primaryTitle }}</th>
                    <th scope="col" style="width: 37.5%;">{{ $secondaryTitle }}</th>
                </tr>
            </thead>
            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>

