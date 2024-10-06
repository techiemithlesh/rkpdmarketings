@extends('user.layout.master')
@section('title')
    <title>Portfolio - RPKD Marketings</title>
@endsection

<style>
    .portfolio_card {
        height: 460px;
        width: 100%;
        margin-bottom: 1rem;
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .portfolio_card:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .portfolio-item img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        overflow: hidden;
        border-radius: 4px;
    }

    .portfolio-info {
        padding: 10px 0;
    }

    .portfolio-info h4 {
        font-size: 1.1rem;
        margin: 0 0 5px;
    }

    .btn-primary {
        position: absolute;
        bottom: 10px;
        right: 10px;
    }
</style>

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
                    <h2>My Portfolio</h2>
                    <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Portfolio</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== PORTFOLIO TABS START =======-->
<div class="portfolio-section sp6">
    <div class="container">
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs justify-content-center mb-4" id="portfolioTabs" role="tablist">
            @foreach($categories as $index => $category)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $index === 0 ? 'active' : '' }}" id="tab-{{ $category->id }}"
                            data-bs-toggle="tab" data-bs-target="#category-{{ $category->id }}" type="button"
                            role="tab" aria-controls="category-{{ $category->id }}"
                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                        {{ $category->category_name }}
                    </button>
                </li>
            @endforeach
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content" id="portfolioTabsContent">
            @foreach($categories as $index => $category)
                <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="category-{{ $category->id }}" role="tabpanel"
                     aria-labelledby="tab-{{ $category->id }}">
                    <div class="row">
                        @foreach($category->works as $work)
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="portfolio_card shadow position-relative">
                                    <div class="portfolio-item">
                                        <img src="{{ asset($work->image) }}" alt="{{ $work->title }}" class="img-fluid">
                                        <div class="portfolio-info">
                                            <h4>{{ $work->title }}</h4>
                                            <p>{{ \Illuminate\Support\Str::words($work->description, 20, '...') }}</p>
                                        </div>
                                        @if($work->live_url)
                                            <a href="{{ $work->live_url }}" target="_blank" class="btn btn-primary">Visit Site</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--===== PORTFOLIO TABS ENDS =======-->

{{-- <x-cta/> --}}
@endsection
