@extends('user.layout.master')
@section('title')
    <title>Case Study -RKPDMARKETING</title>
@endsection

@section('content')
    <!--===== HERO AREA STARTS =======-->
    <div class="about-header-area"
        style="background-image: url('{{ asset('frontend/assets/img/bg/inner-header.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <img src="{{ asset('frontend/assets/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
        <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="about-inner-header heading9 text-center">
                        <h1>Our Story </h1>
                        <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> Case Study </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== CASE AREA STARTS =======-->
    <div class="case-inner-section-area sp1">
        <div class="container">

            <div class="row">
                <div class="col-lg-7 m-auto">
                    {{-- VIDEO URL --}}
                </div>


            </div>
        </div>
    </div>
    <!--===== CASE AREA ENDS =======-->


    <!--===== CTA AREA STARTS =======-->
    <x-cta />
    <!--===== CTA AREA ENDS =======-->
@endsection
