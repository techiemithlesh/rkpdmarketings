@extends('user.layout.master')
@section('title')
    <title>Services -RKPDMARKETING</title>
@endsection

@section('content')
    <!--===== HERO AREA STARTS =======-->
    <div class="about-header-area"
        style="background-image: url('{{ asset('frontend/assets/img/bg/inner-header.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <img src="{{ asset('frontend/assets/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
        <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <div class="about-inner-header heading9 text-center">
                        <h1>Our Best Services</h1>
                        <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Services</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== SERVICE AREA STARTS =======-->
    <div class="service1-section-area sp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-all-boxes-area1">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="service-boxarea">
                                    <a href="#">Performance Marketing</a>
                                    <div class="space40"></div>
                                    <img src="{{ asset('frontend/assets/img/icons/service-icon1.svg') }}" alt="">
                                    <div class="space40"></div>
                                    <p>We drive measurable growth through data-driven strategies, maximizing your ROI with
                                        precision targeting, continuous optimization, and transparent reporting</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="service-boxarea">
                                    <a href="#">Branding</a>
                                    <div class="space40"></div>
                                    <img src="{{ asset('frontend/assets/img/icons/service-icon2.svg') }}" alt="">
                                    <div class="space40"></div>
                                    <p>We craft impactful brand identities that resonate with your audience, combining
                                        strategic design and messaging to set your business apart in the marketplace. </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="service-boxarea">
                                    <a href="#">Influencer Marketing</a>
                                    <div class="space66"></div>
                                    <img src="{{ asset('frontend/assets/img/icons/service-icon3.svg') }}" alt="">
                                    <div class="space30"></div>
                                    <p>We connect your brand with the right influencers to authentically promote your
                                        products, brand awareness and driving conversions through trusted partnerships</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="service-boxarea">
                                    <a href="#">Website Design and Development</a>
                                    <div class="space40"></div>
                                    <img src="{{ asset('frontend/assets/img/icons/service-icon4.svg') }}" alt="">
                                    <div class="space40"></div>
                                    <p>Make a lasting impression with a professionally designed and user-friendly website.
                                        Our web design and development services ensure.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="service-boxarea">
                                    <a href="#">Social Media Managment</a>
                                    <div class="space40"></div>
                                    <img src="{{ asset('frontend/assets/img/icons/service-icon15.svg') }}" alt="">
                                    <div class="space40"></div>
                                    <p>We amplify your brand’s voice on social media through tailored content strategies,
                                        targeted ads, and community engagement, driving meaningful connections and results.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="service-boxarea">
                                    <a href="service1.html">Email Marketing</a>
                                    <div class="space40"></div>
                                    <img src="{{ asset('frontend/assets/img/icons/service-icon16.svg') }}" alt="">
                                    <div class="space40"></div>
                                    <p>We design and implement effective email marketing campaigns to nurture leads, promote
                                        products or services, and drive conversions.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== SERVICE AREA ENDS =======-->

    
    <!--===== CTA AREA ENDS =======-->
@endsection
