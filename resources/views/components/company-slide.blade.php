<div class="col-lg-10">
    <div class="slider-images-area owl-carousel">
        @php

            $companies = \App\Models\Company::where('status', 1)->get();
        @endphp

        @forelse($companies as $company)
            <div class="img1">
                <img src="{{ asset($company->company_logo) }}" alt="{{ $company->company_name }}">
            </div>
        @empty
            <p>No companies available.</p>
        @endforelse
    </div>
</div>
