@extends('user.layout.master')
@section('title')
    <title>Portfolio - RPKD Marketings</title>
@endsection

@section('content')
<!--===== HERO AREA STARTS =======-->
<div class="about-header-area"
     style="background-image: url('{{ asset('frontend/assets/img/bg/inner-header.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <img src="{{ asset('frontend/assets/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
    <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1>My Portfolio</h1>
                    <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Portfolio</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== PORTFOLIO SECTION START =======-->
<div class="portfolio-section sp6">
    <div class="container">
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs justify-content-center mb-4" id="portfolioTabs" role="tablist">
            @foreach($categories as $index => $category)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $index === 0 ? 'active' : '' }}" id="tab-{{ $category['id'] }}"
                            data-bs-toggle="tab" data-bs-target="#category-{{ $category['id'] }}" type="button"
                            role="tab" aria-controls="category-{{ $category['id'] }}"
                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                        {{ $category['name'] }}
                    </button>
                </li>
            @endforeach
        </ul>

        <!-- Tabs Content with Portfolio Grid -->
        <div class="tab-content" id="portfolioTabsContent">
            @foreach($categories as $index => $category)
                <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="category-{{ $category['id'] }}" role="tabpanel"
                     aria-labelledby="tab-{{ $category['id'] }}">
                    <div class="row portfolio-grid">
                        @foreach($category['works'] as $work)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="portfolio-item">
                                    <img src="{{ asset('frontend/assets/img/portfolio/' . $work['image']) }}" alt="{{ $work['title'] }}" class="img-fluid mb-3">
                                    <h4>{{ $work['title'] }}</h4>
                                    <p>{{ $work['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--===== PORTFOLIO SECTION ENDS =======-->

<x-cta/>
@endsection

@push('styles')
    <style>
        .portfolio-grid {
            display: flex;
            flex-wrap: wrap;
        }
        .portfolio-item {
            text-align: center;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .portfolio-item img {
            max-width: 100%;
            border-radius: 5px;
        }
        .portfolio-item h4 {
            margin-top: 15px;
            font-size: 1.2rem;
        }
    </style>
@endpush
