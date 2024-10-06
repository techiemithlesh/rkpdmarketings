@extends('user.layout.master')
@section('title')
    <title>RKPDMARKETING - Digital Marketing Agency</title>
@endsection

@section('content')
    <!--===== HERO AREA STARTS =======-->
    <div class="hero1-section-area" style="background-image: url('{{ asset('frontend/assets/img/bg/header-bg1.png') }}');">
        <img src="{{ asset('frontend/assets/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-main-content heading1">
                        <h5><img src="{{ asset('frontend/assets/img/icons/logo-icons.svg') }}" alt="">Top
                            #1
                            Perormance Marketing Agency
                        </h5>
                        <h2 class="text-anime-style-3">"RKPD, We Build We Grow <br />
                            Your Success, Our Show!"
                        </h2>
                        <p data-aos="fade-left" data-aos-duration="1000">At RPKD Marketings, we don't just deliver results —
                            <br class="d-lg-block d-none"> we redefine the standards of success.
                        </p>
                        <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
                            <a href="{{ route('contact') }}" class="header-btn1">Free Consultation <i
                                    class="fa-solid fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-images-area">
                        <div class="main-images-area">
                            <div class="img1">
                                {{-- <img src="{{ asset('frontend/assets/img/all-images/header-img1.png') }}" alt=""
                                    data-aos="zoom-in" data-aos-duration="1000"> --}}
                                <img src="{{ asset('frontend/assets/img/all-images/header-img-new.png') }}" alt=""
                                    data-aos="zoom-in" data-aos-duration="1000">    
                            </div>
                            <div class="img2">
                                <img src="{{ asset('frontend/assets/img/bg/header-imgbg.png') }}" alt="">
                            </div>
                            <div class="icons-area">
                                <img src="{{ asset('frontend/assets/img/icons/sound-icons1.svg') }}" alt=""
                                    class="sound-icons1 aniamtion-key-1">
                                <img src="{{ asset('frontend/assets/img/icons/lite-icons1.svg') }}" alt=""
                                    class="lite-icons1 aniamtion-key-1">
                            </div>
                            <div class="auhtor-icons">
                                <img src="{{ asset('frontend/assets/img/elements/elements2.png') }}" alt=""
                                    class="elements2">
                                <img src="{{ asset('frontend/assets/img/elements/elements3.png') }}" alt=""
                                    class="elements3">
                            </div>
                            <div class="auhtor-images">
                                <img src="{{ asset('frontend/assets/img/all-images/header-author-img1.png') }}"
                                    alt="" class="header-author-img1 aniamtion-key-2">
                                {{-- <img src="{{ asset('frontend/assets/img/all-images/header-author-img2.png') }}"
                                    alt="" class="header-author-img2 aniamtion-key-2"> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== TESTIMONIAL AREA STARTS =======-->
    <div class="slider-section-area sp5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="sldier-head">
                        <p>Trusted by <br class="d-lg-block d-none"> Top Companies</p>
                    </div>
                </div>
                <x-company-slide />
            </div>
        </div>
    </div>
    <!--===== TESTIMONIAL AREA ENDS =======-->
    <div class="all-section-bg"
        style="background-image: url('{{ asset('frontend/assets/img/bg/pages-bg1.png') }}'); background-repeat: no-repeat; background-size: cover;">
        <!--===== ABOUT AREA STARTS =======-->
       
        <!--===== ABOUT AREA ENDS =======-->

        <!--===== SERVICE AREA STARTS =======-->
        <div class="service1-section-area sp9">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="service-header-area heading2 text-center">
                            <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt=""
                                class="star2 keyframe5">
                            <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt=""
                                class="star3 keyframe5">
                            <h2 class="text-anime-style-3">Popular Digital Marketing Services <br
                                    class="d-md-block d-none"> To Grow Your Business</h2>
                            <p data-aos="fade-up" data-aos-duration="1000">Our expert team specializes in
                                delivering
                                tailored solutions designed to elevate <br class="d-md-block d-none"> your brand
                                and
                                drive measurable results. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-all-boxes-area">


                            <div class="service-boxarea box" data-aos="zoom-in" data-aos-duration="1000">
                                <a href="service1.html">Performance marketing</a>
                                <div class="space40"></div>
                                <img src="{{ asset('frontend/assets/img/icons/service-icon2.svg') }}" alt="">
                                <div class="space40"></div>
                                <p>We drive measurable growth through data-driven strategies, maximizing your ROI with
                                    precision targeting, continuous optimization, and transparent reporting. {all types of
                                    ads, google, Facebook ads}</p>
                            </div>

                            <div class="service-boxarea box2" data-aos="zoom-in" data-aos-duration="800">
                                <a href="service1.html">Branding</a>
                                <div class="space40"></div>
                                <img src="{{ asset('frontend/assets/img/icons/service-icon1.svg') }}" alt="">
                                <div class="space40"></div>
                                <p>We craft impactful brand identities that resonate with your audience, combining strategic
                                    design and messaging to set your business
                                    apart in the marketplace.</p>
                            </div>

                            <div class="service-boxarea box3" data-aos="zoom-in" data-aos-duration="1200">
                                <a href="service1.html">Social Media Managment</a>
                                <div class="space66"></div>
                                <img src="{{ asset('frontend/assets/img/icons/service-icon3.svg') }}" alt="">
                                <div class="space40"></div>
                                <p>We amplify your brand’s voice on social media through tailored content strategies, and
                                    community engagement, driving meaningful
                                    connections and results.</p>
                            </div>

                            <div class="service-boxarea box4" data-aos="zoom-in" data-aos-duration="1400">
                                <a href="service1.html">Influencer Marketing</a>
                                <div class="space40"></div>
                                <img src="{{ asset('frontend/assets/img/icons/service-icon4.svg') }}" alt="">
                                <div class="space40"></div>
                                <p>We connect your brand with the right influencers to authentically promote your products,
                                    enhancing brand awareness and driving
                                    conversions through trusted partnerships</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===== SERVICE AREA ENDS =======-->

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
                            <h2 class="text-anime-style-3">Tailored Solutions, Proven Results, <br
                                    class="d-md-block d-none"> And Exceptional Service</h2>
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
                                <a href="{{ route('services') }}" class="text text-anime-style-3">Explore Our Unique
                                    Value
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

        <!--===== TESTIMONIAL AREA STARTS =======-->
        @include('user.components.testimonial')

        <!--===== TESTIMONIAL AREA ENDS =======-->

        <!--===== CONTACT AREA STARTS =======-->
        <div class="contact1-section-area sp6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="contact-header-area text-center heading2">
                            <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt=""
                                class="star2 keyframe5">
                            <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt=""
                                class="star3 keyframe5">
                            <h2 class="text-anime-style-3">Get In Touch With Us Today</h2>
                            <p>We're here to help! If you have any questions or would like to discuss <br
                                    class="d-md-block d-none"> how our performance and branding services can
                                benefit
                                your business,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5" data-aos="zoom-out" data-aos-duration="1000">
                        <div class="contact-info-area">
                            <h3>Contact Info</h3>
                            <p>We're here to help! If you have any questions or would like to discuss how our Performance
                                and
                                branding services can benefit your business,</p>
                            <div class="space32"></div>
                            <div class="contact-auhtor-box">
                                <div class="icons">
                                    <img src="{{ asset('frontend/assets/img/icons/location2.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h4>Our Location</h4>
                                    <a href="#">VIP ENCLAVE 1 BLOCK F FLAT NO 201, <br class="d-lg-block d-none">
                                        Kolkata, India, West Bengal</a>
                                </div>
                            </div>
                            <div class="space40"></div>
                            <div class="contact-auhtor-box">
                                <div class="icons">
                                    <img src="{{ asset('frontend/assets/img/icons/phone2.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h4>Phone Number</h4>
                                    <a href="tel:+917667043372">+91 8583947437</a>
                                </div>
                            </div>
                            <div class="space40"></div>
                            <div class="contact-auhtor-box">
                                <div class="icons">
                                    <img src="{{ asset('frontend/assets/img/icons/email2.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h4>Email Address</h4>
                                    <a href="mailto:kushal@rpkdmarketings.com">kushal@rpkdmarketings.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="zoom-out" data-aos-duration="1200">
                        <div class="contact-boxarea">
                            <h3>Get In Touch</h3>
                            <p>We're here to help! If you have any questions or would like to discuss <br
                                    class="d-lg-block d-none"> how our SEO and digital marketing services can
                                benefit
                                your business,</p>

                            <form action="{{ route('submit.enquiry') }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-area">
                                            <input type="text" name="first_name" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-area">
                                            <input type="text" name="last_name" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-area">
                                            <input type="email" name="email" placeholder="Email Address" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="input-area">
                                            <input type="number" name="phone" placeholder="Phone Number" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="input-area">
                                            <textarea name="message" placeholder="Your Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-area">
                                            <button class="header-btn1">Free Consultation <i
                                                    class="fa-solid fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===== CONTACT AREA ENDS =======-->

        <!--===== CTA AREA STARTS =======-->
        {{-- <x-cta /> --}}

        <!--===== CTA AREA ENDS =======-->
    </div>
@endsection
