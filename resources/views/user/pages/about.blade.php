@extends('user.layout.master')
@section('title')
    <title>About -RKPDMARKETING</title>
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
                        <h1>About Us</h1>
                        <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>About Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== ABOUT AREA STARTS =======-->
    <div class="about1-section-area sp6 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="about-images">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('frontend/assets/img/all-images/about-img1.png') }}" alt="">
                        </figure>
                        <img src="{{ asset('frontend/assets/img/elements/star1.png') }}" alt=""
                            class="star1 keyframe5">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-content-area heading2">
                        <div class="arrow-circle">
                            <a href="about.html">
                                <img src="{{ asset('frontend/assets/img/elements/elements4.png') }}" alt=""
                                    class="elements4 keyframe5">
                                <img src="{{ asset('frontend/assets/img/icons/arrow.svg') }}" alt=""
                                    class="arrow">
                            </a>
                        </div>
                        <h2 class="text-anime-style-3">Strategic Marketing & Performance Solutions.</h2>
                        <p data-aos="fade-left" data-aos-duration="1000">Welcome to RPKD Marketings, your ultimate
                            partner for strategic marketing and performance-driven solutions. We specialize in
                            generating high-quality leads, enhancing your digital presence, and driving 5x ROI through
                            targeted Google and Facebook Ads, website development with compelling CTAs, and engaging
                            social media management.</p>
                        <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
                            <a href="#work" class="header-btn1">Know More<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="about-auhtor-images">
                        <img src="{{ asset('frontend/assets/img/elements/elements5.png') }}" alt=""
                            class="elements5 keyframe5">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('frontend/assets/img/all-images/about-img2.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== ABOUT AREA ENDS =======-->
    <div class="space60"></div>
    <!--===== TESTIMONIAL AREA STARTS =======-->
    <div class="slider-section-area slider-inner sp5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="sldier-head">
                        <p>Trusted by <br class="d-lg-block d-none"> Top Companies</p>
                    </div>
                </div>
               <x-company-slide/>
            </div>
        </div>
    </div>
    <!--===== TESTIMONIAL AREA ENDS =======-->

    <!--===== WORK AREA STARTS =======-->
    <div class="works-inner-section-area sp1" id="work">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="works-header-area heading2">
                        <h5>Why Choose Us</h5>
                        <h2>Experience the Advantage Why We're the Right Choice</h2>
                        <p>At SEOC we understand that you have many options when it comes to digital marketing services. So
                            why should you choose us? Here are a few reasons</p>
                        <div class="space32"></div>
                        <div class="works-content-box">
                            <div class="icons">
                                <img src="{{ asset('frontend/assets/img/icons/works-icons7.svg') }}" alt="">
                            </div>
                            <div class="content">
                                <a href="case.html">Proven Result</a>
                                <p>We have a track record of delivering tangible results for our clients. From increasing
                                    website traffic and improving search. </p>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="works-content-box">
                            <div class="icons">
                                <img src="{{ asset('frontend/assets/img/icons/works-icons8.svg') }}" alt="">
                            </div>
                            <div class="content">
                                <a href="case-single.html">Customized Solutions</a>
                                <p>We believe that one size does not fit all when it comes to digital marketing. That's why
                                    we take the time to understand your SEO. </p>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="works-content-box">
                            <div class="icons">
                                <img src="{{ asset('frontend/assets/img/icons/works-icons9.svg') }}" alt="">
                            </div>
                            <div class="content">
                                <a href="case-single.html">Dedicated Support</a>
                                <p>Your success is our top priority. That's why provide dedicated support and guidance every
                                    step of the way to running seo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-all-images-area">
                        <img src="{{ asset('frontend/assets/img/elements/elements14.png') }}" alt=""
                            class="elements12 keyframe5">
                        <img src="{{ asset('frontend/assets/img/elements/elements15.png') }}" alt=""
                            class="elements13 keyframe5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="img1 image-anime">
                                    <div class="space100"></div>
                                    <img src="{{ asset('frontend/assets/img/all-images/about-img6.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="img2 image-anime">
                                    <img src="{{ asset('frontend/assets/img/all-images/about-img5.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== WORK AREA ENDS =======-->

    <!--===== SERVICE AREA STARTS =======-->

    <div class="service2-section-area sp6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="service2-header heading2 text-center">
                        <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt=""
                            class="star2 keyframe5">
                        <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt=""
                            class="star3 keyframe5">
                        <h2 class="text-anime-style-3">Tailored Solutions, Proven Results, <br class="d-md-block d-none">
                            And Exceptional Service</h2>
                        <p data-aos="fade-up" data-aos-duration="1000">At RPKD Marketings, we pride ourselves on
                            delivering a unique value proposition that exceeds
                            expectations. Our <br class="d-md-block d-none">
                            approach focuses on deeply understanding your business to create strategies that deliver
                            impactful results.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="images-content-area" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="img1">
                            <img src="{{ asset('frontend/assets/img/all-images/service-img1.png') }}" alt="">
                        </div>
                        <div class="content-area">
                            <h5>Our Value</h5>
                            <a href="{{ route('services') }}" class="text text-anime-style-3">Explore Our Unique Value
                                Proposition & How We Drive Business Growth</a>
                            <p data-aos="fade-up" data-aos-duration="1000">Explore our unique approach and discover
                                how we drive substantial business growth by leveraging cutting-edge performance
                                marketing strategies and delivering measurable results.</p>

                        </div>
                        <div class="arrow-area">
                            <a href="{{ route('services') }}"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-all-boxes">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="service2-auhtor-boxarea" data-aos="zoom-out" data-aos-duration="1000">
                                    <div class="arrow">
                                        <a href="{{ route('services') }}"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                        <h5>Our Mission</h5>
                                        <a href="{ route('services') }}">We strive to be more than just a service
                                            provider;
                                            we aim to be trusted Partner </a>
                                        <p>We strive to be more than just a service provider; we aim to be a trusted
                                            partner. By staying true to our mission and values, we are dedicated to
                                            helping businesses of all sizes achieve their goals and maximize their
                                            potential through targeted and innovative marketing solutions.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="service2-auhtor2-boxarea" data-aos="zoom-out" data-aos-duration="1200">
                                    <div class="arrow">
                                        <a href="{{ route('services') }}"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                        <h5>Our Vision</h5>
                                        <a href="{{ route('services') }}">We aspire to create a world where every
                                            business
                                            owner feels empowered</a>
                                        <p>By staying true to our vision and values, we are committed to driving
                                            positive change and shaping a brighter future for businesses and
                                            communities.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== SERVICE AREA ENDS =======-->

    <!--===== SKILLS AREA STARTS =======-->
    <div class="skills-section-area sp2">
        <img src="{{ asset('frontend/assets/img/bg/cta-bg1.png') }}" alt="" class="cta-bg1 aniamtion-key-2">
        <img src="{{ asset('frontend/assets/img/bg/cta-bg2.png') }}" alt="" class="cta-bg2 aniamtion-key-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 m-auto">
                    <div class="skills-header text-center heading2">
                        <h5>Skills</h5>
                        <h2>Our Skills</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 m-auto">
                <div class="circle-progress-area">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="progresbar">
                                <div class="progressbar">
                                    <div class="circle" data-percent="90">
                                        <canvas></canvas>
                                        <div>90%</div>
                                    </div>
                                </div>
                                <p>Performance Marketing</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="progresbar">
                                <div class="progressbar">
                                    <div class="circle two" data-percent="87">
                                        <canvas></canvas>
                                        <div>87%</div>
                                    </div>
                                </div>
                                <p>Branding</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="progresbar">
                                <div class="progressbar">
                                    <div class="circle three" data-percent="90">
                                        <canvas></canvas>
                                        <div>90%</div>
                                    </div>
                                </div>
                                <p>Influencer Marketing</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="progresbar">
                                <div class="progressbar">
                                    <div class="circle four" data-percent="85">
                                        <canvas></canvas>
                                        <div>85%</div>
                                    </div>
                                </div>
                                <p>Social Media Marketing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== SKILLS AREA ENDS =======-->

    <!--===== TEAM AREA STARTS =======-->
    {{-- <div class="team-inner-section-area sp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="team2-header-area text-center heading2">
                        <h5>Our Team</h5>
                        <h2>Meet With Our Expert Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-boxarea">
                        <div class="img1">
                            <img src="{{ asset('frontend/assets/img/all-images/team-img1.png') }}" alt="">
                        </div>
                        <ul>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/facebook.svg') }}"
                                        alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/instagram.svg') }}"
                                        alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/linkedin.svg') }}"
                                        alt=""></a></li>
                            <li><a href="#" class="m-0"><img
                                        src="{{ asset('frontend/assets/img/icons/youtube.svg') }}" alt=""></a>
                            </li>
                        </ul>
                        <div class="content">
                            <a href="team.html">John Doe</a>
                            <p>CEO & Founder</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-boxarea">
                        <div class="img1">
                            <img src="{{ asset('frontend/assets/img/all-images/team-img2.png') }}" alt="">
                        </div>
                        <ul>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/facebook.svg') }}"
                                        alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/instagram.svg') }}"
                                        alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/linkedin.svg') }}"
                                        alt=""></a></li>
                            <li><a href="#" class="m-0"><img
                                        src="{{ asset('frontend/assets/img/icons/youtube.svg') }}" alt=""></a>
                            </li>
                        </ul>
                        <div class="content">
                            <a href="team.html">Jane Smith</a>
                            <p>Digital Marketing Officer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-boxarea">
                        <div class="img1">
                            <img src="{{ asset('frontend/assets/img/all-images/team-img3.png') }}" alt="">
                        </div>
                        <ul>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/facebook.svg') }}"
                                        alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/instagram.svg') }}"
                                        alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/linkedin.svg') }}"
                                        alt=""></a></li>
                            <li><a href="#" class="m-0"><img
                                        src="{{ asset('frontend/assets/img/icons/youtube.svg') }}" alt=""></a>
                            </li>
                        </ul>
                        <div class="content">
                            <a href="team.html">Sarah Thompson </a>
                            <p>Web Designer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-boxarea m-0">
                        <div class="img1">
                            <img src="{{ asset('frontend/assets/img/all-images/team-img4.png') }}" alt="">
                        </div>
                        <ul>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/facebook.svg') }}"
                                        alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/instagram.svg') }}"
                                        alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/linkedin.svg') }}"
                                        alt=""></a></li>
                            <li><a href="#" class="m-0"><img
                                        src="{{ asset('frontend/assets/img/icons/youtube.svg') }}" alt=""></a>
                            </li>
                        </ul>
                        <div class="content">
                            <a href="team.html">David Garcia</a>
                            <p>Content Writer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--===== TEAM AREA ENDS =======-->

    <!--===== TESTIMONIAL AREA STARTS =======-->
    <div class="testimonial1-section-area sp1 bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="testimonial-header heading2 text-center">
                        <img src="{{ asset('frontend/assets/img/elements/star7.png') }}" alt=""
                            class="star2 keyframe5">
                        <img src="{{ asset('frontend/assets/img/elements/star7.png') }}" alt=""
                            class="star3 keyframe5">
                        <h5>Testimonials</h5>
                        <h2>What Our Client Say <br class="d-md-block d-none"> On Google Reviews</h2>
                        <p>Don't just take our word for it. Hear what our satisfied clients <br class="d-md-block d-none">
                            have to say about their experience partnering with SEOC</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="testimonials-slider-area owl-carousel">
                        <div class="testimonial-boxarea">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="pera">
                                        <p>"Working with SEOC has been a game-changer for our business. Their expertise in
                                            SEO and digital marketing has helped us achieve remarkable results and
                                            significantly increase our online visibility.</p>
                                        <div class="space100"></div>
                                        <div class="space30"></div>
                                        <div class="list-area">
                                            <div class="list">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <a href="team.html">John Doe</a>
                                            </div>
                                            <img src="{{ asset('frontend/assets/img/icons/google.svg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="images">
                                        <img src="{{ asset('frontend/assets/img/all-images/testimonial-img1.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-boxarea">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="pera">
                                        <p>"Working with SEOC has been a game-changer for our business. Their expertise in
                                            SEO and digital marketing has helped us achieve remarkable results and
                                            significantly increase our online visibility.</p>
                                        <div class="space100"></div>
                                        <div class="space30"></div>
                                        <div class="list-area">
                                            <div class="list">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <a href="team.html">John Doe</a>
                                            </div>
                                            <img src="{{ asset('frontend/assets/img/icons/google.svg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="images">
                                        <img src="{{ asset('frontend/assets/img/all-images/testimonial-img2.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-boxarea">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="pera">
                                        <p>"Working with SEOC has been a game-changer for our business. Their expertise in
                                            SEO and digital marketing has helped us achieve remarkable results and
                                            significantly increase our online visibility.</p>
                                        <div class="space100"></div>
                                        <div class="space30"></div>
                                        <div class="list-area">
                                            <div class="list">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <a href="team.html">John Doe</a>
                                            </div>
                                            <img src="{{ asset('frontend/assets/img/icons/google.svg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="images">
                                        <img src="{{ asset('frontend/assets/img/all-images/testimonial-img2.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== TESTIMONIAL AREA ENDS =======-->

    <!--===== CTA AREA STARTS =======-->
    <x-cta/>
    <!--===== CTA AREA ENDS =======-->
@endsection
