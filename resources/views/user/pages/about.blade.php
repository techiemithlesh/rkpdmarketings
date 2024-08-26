@extends('user.layouts.master')

@section('title')
    <title>RKPDMARKETING -About</title>
@endsection

<style>
    .about-banner-section {
        padding: 24px 0 89px !important;
    }

    .about_grow-section {
        padding-top: 0px;
    }

    .web_grow-section {
        padding-top: 0px;
    }

    .banner_content h1 {
        color: #000000;
        font-size: 20px;
        margin-top: 30px;
    }

    .banner_content .paragraph{
        font-size: 17px;
    }
</style>


@section('content')
    <section class="about-banner-section">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="banner_content">
                        <h1>About Us</h1>
                        <p class="paragraph">At RPKD, we are driven by a profound

                            commitment to transforming brands and delivering extraordinary results. Our approach is rooted
                            in four fundamental principles: Research, Plan, Kraft, and Deliver. These are not just steps in
                            a process—they are the pillars of our philosophy</p>
                    </div>
                    <div class="banner_content">
                        <h1>Our Vision</h1>
                        <p class="paragraph">RPKD Marketings aims to redefine how brands
                            connect with their audiences, driving 5x ROI and
                            creating lasting relationships built on trust and
                            excellence.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="banner_wrapper position-relative">
                        <figure class="subbanner-image mb-0">
                            <img src="{{ asset('frontend/assets/images/about-bannerimage.jpg') }}" class="img-fluid"
                                alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Team -->
    <section class="about_team-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h5>OUR TEAM Members</h5>
                        <h2>Meet Our Talented Creatives</h2>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="image">
                        <figure class="team-image mb-0">
                            <img src="{{ asset('frontend/assets/images/team-image1.png') }}" class="img-fluid"
                                alt="">
                        </figure>
                        <div class="box-content">
                            <div class="content">
                                <ul class="list-unstyled mb-0">
                                    <li class="icons"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li class="icons"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li class="icons"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <h4>Alexandra Sander</h4>
                                <span class="text-size-16">Creative Head</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="image">
                        <figure class="team-image mb-0">
                            <img src="{{ asset('frontend/assets/images/team-image2.png') }}" class="img-fluid"
                                alt="">
                        </figure>
                        <div class="box-content">
                            <div class="content">
                                <ul class="list-unstyled mb-0">
                                    <li class="icons"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li class="icons"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li class="icons"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <h4>Alexandra Sander</h4>
                                <span class="text-size-16">Creative Head</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="image">
                        <figure class="team-image mb-0">
                            <img src="{{ asset('frontend/assets/images/team-image3.png') }}" class="img-fluid"
                                alt="">
                        </figure>
                        <div class="box-content">
                            <div class="content">
                                <ul class="list-unstyled mb-0">
                                    <li class="icons"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li class="icons"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li class="icons"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                                <h4>Alexandra Sander</h4>
                                <span class="text-size-16">Creative Head</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="image">
                        <figure class="team-image mb-0">
                            <img src="{{ asset('frontend/assets/images/team-image4.png') }}" class="img-fluid"
                                alt="">
                        </figure>
                        <div class="box-content">
                            <div class="content">
                                <ul class="list-unstyled mb-0">
                                    <li class="icons"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li class="icons"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li class="icons"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                                <h4>Alexandra Sander</h4>
                                <span class="text-size-16">Creative Head</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner -->
    {{-- <section class="about_partner-section">
        <div class="container">
            <h3>Trusted by over<span>30,000</span>Companies</h3>
            <ul class="mb-0 list-unstyled">
                <li>
                    <figure class="mb-0 partner">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/partner1.png') }}" alt="">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 partner">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/partner2.png') }}" alt="">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 partner">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/partner3.png') }}" alt="">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 partner">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/partner4.png') }}" alt="">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 partner">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/partner5.png') }}" alt="">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 partner">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/partner6.png') }}" alt="">
                    </figure>
                </li>
            </ul>
        </div>
    </section> --}}
@endsection
