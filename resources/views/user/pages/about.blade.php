@extends('user.layout.master')
@section('title')
    <title>About -RKPDMARKETING</title>
@endsection

<style>
.why-choose-us {
    padding: 2rem 1rem;
    text-align: center;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

.section-heading {
    font-size: 1.25rem;
    color: #555;
    margin-bottom: 0.5rem;
}

h2 {
    font-size: 2rem;
    margin: 0.5rem 0 1rem;
}

.description {
    color: #777;
    font-size: 1rem;
    margin-bottom: 2rem;
}

.content-cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.card {
    padding: 1.5rem;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    text-align: left;
}

.card img {
    width: 40px;
    height: 40px;
    margin-bottom: 1rem;
}

.card h3 {
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
}

.card p {
    font-size: 1rem;
    color: #666;
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
                                <img src="{{ asset('frontend/assets/img/icons/arrow.svg') }}" alt="" class="arrow">
                            </a>
                        </div>
                        <h2 class="text-anime-style-3">Strategic Marketing & Performance Solutions.</h2>
                        <p data-aos="fade-left" data-aos-duration="1000">Welcome to RPKD Marketings, your ultimate
                            partner for strategic marketing and performance-driven solutions. We specialize in
                            generating high-quality leads, enhancing your digital presence, and driving 5x ROI through
                            targeted Google and Facebook Ads, website development with compelling CTAs, and engaging
                            social media management.</p>
                        <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
                            <a href="{{route('contact')}}" class="header-btn1">Know More<i
                                        class="fa-solid fa-arrow-right"></i></a>
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
                <x-company-slide />
            </div>
        </div>
    </div>
    <!--===== TESTIMONIAL AREA ENDS =======-->

    <!--===== WORK AREA STARTS =======-->
   
    <div class="why-choose-us">
        <div class="container">
            <h5 class="section-heading">Why Choose Us</h5>
            <p class="description">At SEOC we understand that you have many options for digital marketing services. So why should you choose us? Here are a few reasons:</p>
            
            <div class="content-cards">
                <div class="card">
                    <i class="fa-solid fa-chart-line" style="font-size: 40px; color: #007bff;"></i>
                    <h3>Research</h3>
                    <p>We have a track record of delivering tangible results for our clients, from increasing website traffic to improving search results.</p>
                </div>
                <div class="card">
                    <i class="fa-solid fa-bullseye" style="font-size: 40px; color: #007bff;"></i>
                    <h3>Plan</h3>
                    <p>One size doesn’t fit all in digital marketing. We take the time to understand your unique needs.</p>
                </div>
                <div class="card">
                    <i class="fa-solid fa-hands-helping" style="font-size: 40px; color: #007bff;"></i>
                    <h3>Kraft</h3>
                    <p>Your success is our priority, with dedicated support and guidance every step of the way.</p>
                </div>
                <div class="card">
                    <i class="fa-solid fa-cogs" style="font-size: 40px; color: #007bff;"></i>
                    <h3>Deliver</h3>
                    <p>We use the latest tools and technology to ensure optimal results for our clients.</p>
                </div>
            </div>
        </div>
    </div>
    
    

    <!--===== WORK AREA ENDS =======-->

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


    <!--===== TESTIMONIAL AREA STARTS =======-->
    @include('user.components.testimonial')
    <!--===== TESTIMONIAL AREA ENDS =======-->

@endsection
