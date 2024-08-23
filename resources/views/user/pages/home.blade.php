@extends('user.layouts.master')

@section('content')
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="banner_content">
                        <h2>RPKD, We Build, We Grow—Your Success, Our Show!</h2>
                        <p class="paragraph">At RPKD Marketings, we don't just deliver results—we redefine the standards of success.</p>
                        <a class="get_started" href="contact.html">Get Started</a>
                        <a class="how_it_works" href="about.html">How It Works?</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-md-left text-center">
                    <div class="banner_wrapper">
                        <img src="{{ asset('frontend/assets/images/banner3-image1.jpg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- About -->
    <section class="digital_about-section" id="dropdown">
        <figure class="about-toplayer mb-0">
            <img src="{{ asset('frontent/assets/images/about-toplayer.png') }}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-12">
                    <div class="about_content">
                        <h5>About RKPD MARKETINGS</h5>
                        <h2>
                            Digital Marketing Agency That Help You Go
                            Ahead.

                        </h2>
                        <p class="text mb-0">
                            At RPKD, we are driven by a profound commitment to transforming brands and delivering extraordinary results.
                            Our approach is rooted in four fundamental principles: Research, Plan, Kraft, and Deliver.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-12">
                    <div class="about_wrapper">
                        <figure class="about-circularimage mb-0">
                            <img src="{{ asset('frontend/assets/images/about-circularimage.png') }}" alt="" class="img-fluid" />
                        </figure>
                        <figure class="about-image1 mb-0">
                            <img src="{{ asset('frontend/assets/images/about-image1.jpg') }}" alt="" class="img-fluid" />
                        </figure>
                    </div>
                </div>
            </div>
            <div class="lower-portion">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-6 col-12 order-sm-1 order-2">
                        <div class="about_wrapper">
                            <figure class="about-image2 mb-0">
                                <img src="{{ asset('frontend/assets/images/about-image2.jpg') }}" alt="" class="img-fluid" />
                            </figure>
                            <figure class="about-globalimage mb-0">
                                <img src="{{ asset('frontend/assets/images/about-globalimage.png') }}" alt="" class="img-fluid" />
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-12 order-sm-2 order-1">
                        <div class="about_content">
                            <ul class="list-unstyled">
                                <li>
                                    <i class="circle fa-duotone fa-check"></i>Advertising & Marketing
                                </li>
                                <li>
                                    <i class="circle fa-duotone fa-check"></i>Web Development
                                </li>
                                <li>
                                    <i class="circle fa-duotone fa-check"></i>Mobile App Development
                                </li>
                                <li>
                                    <i class="circle fa-duotone fa-check"></i>Search Engine Optimization
                                </li>
                            </ul>
                            <a class="learn_more" href="about.html">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service -->
    <section class="digital_service-section">
        <div class="container-fluid service_section">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12 col-12">
                    <div class="service_content">
                        <h5>Our Services</h5>
                        <h2>
                            We Offer The Best Service To Our Customer
                        </h2>
                        <p class="text mb-0">
                            Reduce marketing costs for your product.
                            Finding the best marketing solution for your
                            business.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 col-12">
                    <div class="service_wrapper">
                        <figure class="service-image mb-0">
                            <img src="{{ asset('frontend/assets/images/service3-image.png') }}" alt="" class="img-fluid" />
                        </figure>
                    </div>
                </div>
            </div>
            <div class="service_contentbox">
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="service-box service-box1">
                                <figure class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service3-icon1.png') }}" alt="" class="img-fluid" />
                                </figure>
                                <h4>Business Growth</h4>
                                <p class="text-size-18">
                                    Aaque ipsa quae ab illo inventorerg
                                    teritatis et quasi architecto beatae
                                    bitae nostrumEaque ipsa quae ab ill
                                    onventoreveritatis et quasi
                                    architect teataevitae nostrum......
                                </p>
                                <a class="read_more" href="service.html">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box service-box2">
                                <figure class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service3-icon2.png') }}" alt="" class="img-fluid" />
                                </figure>
                                <h4>SEO Optimization</h4>
                                <p class="text-size-18">
                                    PstrumEaque iEaque ipsa quae ab il
                                    vt quasi architecto beatae vitae nos
                                    srumEaque ipsa quae ab ill inventore
                                    ueritatis et quasi architect
                                    beataevit qe nostrumravtrad aavr.
                                </p>
                                <a class="read_more" href="service.html">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box service-box3">
                                <figure class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service3-icon3.png') }}" alt="" class="img-fluid" />
                                </figure>
                                <h4>Online Marketing</h4>
                                <p class="text-size-18">
                                    Eaque ipsa quae ab illo inventorerg
                                    veritatis et quasi architecto beatae
                                    vitae nostrumEaque ipsa quae ab ill
                                    inventoreveritatis et quasi
                                    architect bea......
                                </p>
                                <a class="read_more" href="service.html">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box service-box4">
                                <figure class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service3-icon4.png') }}" alt="" class="img-fluid" />
                                </figure>
                                <h4>PPC Services</h4>
                                <p class="text-size-18">
                                    ostrumEaque iEaque ipsa quae ab il
                                    et quasi architecto beatae vitae nos
                                    trumEaque ipsa quae ab ill inventore
                                    veritatis et quasi architect
                                    beataevit ae nostrum.
                                </p>
                                <a class="read_more" href="service.html">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box service-box1">
                                <figure class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service3-icon1.png') }}" alt="" class="img-fluid" />
                                </figure>
                                <h4>Business Growth</h4>
                                <p class="text-size-18">
                                    Aaque ipsa quae ab illo inventorerg
                                    teritatis et quasi architecto beatae
                                    bitae nostrumEaque ipsa quae ab ill
                                    onventoreveritatis et quasi
                                    architect teataevitae nostrum......
                                </p>
                                <a class="read_more" href="service.html">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box service-box2">
                                <figure class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service3-icon2.png') }}" alt="" class="img-fluid" />
                                </figure>
                                <h4>SEO Optimization</h4>
                                <p class="text-size-18">
                                    PstrumEaque iEaque ipsa quae ab il
                                    vt quasi architecto beatae vitae nos
                                    srumEaque ipsa quae ab ill inventore
                                    ueritatis et quasi architect
                                    beataevit qe nostrumravtrad aavr.
                                </p>
                                <a class="read_more" href="service.html">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box service-box3">
                                <figure class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service3-icon3.png') }}" alt="" class="img-fluid" />
                                </figure>
                                <h4>Online Marketing</h4>
                                <p class="text-size-18">
                                    Eaque ipsa quae ab illo inventorerg
                                    veritatis et quasi architecto beatae
                                    vitae nostrumEaque ipsa quae ab ill
                                    inventoreveritatis et quasi
                                    architect bea......
                                </p>
                                <a class="read_more" href="service.html">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box service-box4">
                                <figure class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service3-icon4.png') }}" alt="" class="img-fluid" />
                                </figure>
                                <h4>PPC Services</h4>
                                <p class="text-size-18">
                                    ostrumEaque iEaque ipsa quae ab il
                                    et quasi architecto beatae vitae nos
                                    trumEaque ipsa quae ab ill inventore
                                    veritatis et quasi architect
                                    beataevit ae nostrum.
                                </p>
                                <a class="read_more" href="service.html">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box service-box1">
                                <figure class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service3-icon1.png') }}" alt="" class="img-fluid" />
                                </figure>
                                <h4>Business Growth</h4>
                                <p class="text-size-18">
                                    Aaque ipsa quae ab illo inventorerg
                                    teritatis et quasi architecto beatae
                                    bitae nostrumEaque ipsa quae ab ill
                                    onventoreveritatis et quasi
                                    architect teataevitae nostrum......
                                </p>
                                <a class="read_more" href="service.html">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box service-box2">
                                <figure class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service3-icon2.png') }}" alt="" class="img-fluid" />
                                </figure>
                                <h4>SEO Optimization</h4>
                                <p class="text-size-18">
                                    PstrumEaque iEaque ipsa quae ab il
                                    vt quasi architecto beatae vitae nos
                                    srumEaque ipsa quae ab ill inventore
                                    ueritatis et quasi architect
                                    beataevit qe nostrumravtrad aavr.
                                </p>
                                <a class="read_more" href="service.html">Read More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product -->
    <section class="digital_product-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 px-0">
                    <div class="project_content">
                        <div class="content">
                            <div class="line"></div>
                            <h2>Have Project in Mind?</h2>
                            <p class="text">
                                Find Out How It Works And Ask Any
                                Question You May Have
                            </p>
                            <a class="get_started" href="contact.html">Let's Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 px-0">
                    <div class="product_content">
                        <div class="content">
                            <div class="line"></div>
                            <h2>Let’s Boost Your Product in Digital</h2>
                            <p class="text">
                                Finding the best marketing solution for
                                your business. Driven by data based on
                                human behavior.
                            </p>
                            <a class="get_in_touch" href="contact.html">Get In Touch With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work -->
    <section class="digital_work-section">
        <div class="container position-relative">
            <figure class="work-globalimage mb-0">
                <img src="{{ asset('frontend/assets/images/work-globalimage.png') }}" alt="" class="img-fluid" />
            </figure>
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h5>How It Works</h5>
                        <h2>We Focus on Marketing and Innovation</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="work_content">
                        <div class="image">
                            <figure class="icon icon1 mb-0">
                                <img src="{{ asset('frontend/assets/images/work-icon1.png') }}" alt="" class="img-fluid" />
                            </figure>
                            <span class="number">01</span>
                            <div class="circle circle1"></div>
                        </div>
                        <h4>Concept</h4>
                        <p class="text-size-18 mb-0">
                            Aaque ipsa quae ab illo invente rgteritatis
                            et quasi
                        </p>
                        <figure class="work-arrowimage mb-0">
                            <img src="{{ asset('frontend/assets/images/work-arrowimage.png') }}" alt="" class="img-fluid" />
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="work_content work_content2">
                        <div class="image">
                            <figure class="icon icon2 mb-0">
                                <img src="{{ asset('frontend/assets/images/work-icon2.png') }}" alt="" class="img-fluid" />
                            </figure>
                            <span class="number">02</span>
                            <div class="circle circle2"></div>
                        </div>
                        <h4>Budget</h4>
                        <p class="text-size-18 mb-0">
                            Inventorergteritatis quasi aitec to
                            beataebitae nos.
                        </p>
                        <figure class="work-arrowimage mb-0">
                            <img src="{{ asset('frontend/assets/images/work-arrowimage.png') }}" alt="" class="img-fluid" />
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="work_content">
                        <div class="image">
                            <figure class="icon icon3 mb-0">
                                <img src="{{ asset('frontend/assets/images/work-icon3.png') }}" alt="" class="img-fluid" />
                            </figure>
                            <span class="number">03</span>
                            <div class="circle circle3"></div>
                        </div>
                        <h4>Development</h4>
                        <p class="text-size-18 mb-0">
                            Ab illo inventoreritatis et qua architecto
                            beataebitae nos.
                        </p>
                        <figure class="work-arrowimage mb-0">
                            <img src="{{ asset('frontend/assets/images/work-arrowimage.png') }}" alt="" class="img-fluid" />
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="work_content">
                        <div class="image">
                            <figure class="icon icon4 mb-0">
                                <img src="{{ asset('frontend/assets/images/work-icon4.png') }}" alt="" class="img-fluid" />
                            </figure>
                            <span class="number">04</span>
                            <div class="circle circle4"></div>
                        </div>
                        <h4>Result</h4>
                        <p class="text-size-18 mb-0">
                            Quae ab illo inveng teritatis et quasi
                            architecata.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="digital_testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="testimonial_wrapper position-relative">
                        <figure class="testimonial-image mb-0">
                            <img src="{{ asset('frontend/assets/images/testimonial3-image.png') }}" alt="" class="img-fluid" />
                        </figure>
                        <figure class="testimonial-quote mb-0">
                            <img src="{{ asset('frontend/assets/images/testimonial3-quote.png') }}" alt="" class="img-fluid" />
                        </figure>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="testimonial_content">
                        <div class="content">
                            <h5>Testimonial</h5>
                            <h2>Check How Happy Our Users Are!</h2>
                        </div>
                        <div class="content_testimonial">
                            <div id="digitaltestimonialcarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="testimonial3_carousel position-relative">
                                    <div class="carousel-inner">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="carousel-item active">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="testimonial-box">
                                                                <figure class="image">
                                                                    <img class="img-fluid"
                                                                        src="{{ asset('frontend/assets/images/testimonial3-image1.jpg') }}"
                                                                        alt="" />
                                                                </figure>
                                                                <p class="text-size-18">
                                                                    Lorem
                                                                    ipsum
                                                                    dolor
                                                                    sit
                                                                    amet,
                                                                    co
                                                                    nsectetur
                                                                    adipiscing
                                                                    elit,
                                                                    seddo
                                                                    eiusmod
                                                                    tempor
                                                                    incididunt
                                                                    ut
                                                                    la
                                                                    bore
                                                                    et
                                                                    dolore
                                                                    magna
                                                                    aliquaqs
                                                                    uis
                                                                    ipsum
                                                                    suspendisse.
                                                                </p>
                                                                <span class="heading">Melissa
                                                                    Wilkins</span>
                                                                <span class="post">CEO-Company</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-sm-block d-none">
                                                            <div class="testimonial-box">
                                                                <figure class="image">
                                                                    <img class="img-fluid"
                                                                        src="{{ asset('frontend/assets/images/testimonial3-image2.jpg') }}"
                                                                        alt="" />
                                                                </figure>
                                                                <p class="text-size-18">
                                                                    Grem
                                                                    ipsum
                                                                    dolor
                                                                    sit
                                                                    ametrec
                                                                    fansectetur
                                                                    adipiscing
                                                                    eliadadt
                                                                    seddo
                                                                    eiusmod
                                                                    tempor
                                                                    incidif
                                                                    dunt
                                                                    ut
                                                                    la
                                                                    bore
                                                                    et
                                                                    dolore
                                                                    magna
                                                                    aliquaqs
                                                                    uis.
                                                                </p>
                                                                <span class="heading">Jhon
                                                                    Smith</span>
                                                                <span class="post">CEO-Company</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="testimonial-box">
                                                                <figure class="image">
                                                                    <img class="img-fluid"
                                                                        src="{{ asset('frontend/assets/images/testimonial3-image1.jpg') }}"
                                                                        alt="" />
                                                                </figure>
                                                                <p class="text-size-18">
                                                                    Lorem
                                                                    ipsum
                                                                    dolor
                                                                    sit
                                                                    amet,
                                                                    co
                                                                    nsectetur
                                                                    adipiscing
                                                                    elit,
                                                                    seddo
                                                                    eiusmod
                                                                    tempor
                                                                    incididunt
                                                                    ut
                                                                    la
                                                                    bore
                                                                    et
                                                                    dolore
                                                                    magna
                                                                    aliquaqs
                                                                    uis
                                                                    ipsum
                                                                    suspendisse.
                                                                </p>
                                                                <span class="heading">Melissa
                                                                    Wilkins</span>
                                                                <span class="post">CEO-Company</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-sm-block d-none">
                                                            <div class="testimonial-box">
                                                                <figure class="image">
                                                                    <img class="img-fluid"
                                                                        src="{{ asset('frontend/assets/images/testimonial3-image2.jpg') }}"
                                                                        alt="" />
                                                                </figure>
                                                                <p class="text-size-18">
                                                                    Grem
                                                                    ipsum
                                                                    dolor
                                                                    sit
                                                                    ametrec
                                                                    fansectetur
                                                                    adipiscing
                                                                    eliadadt
                                                                    seddo
                                                                    eiusmod
                                                                    tempor
                                                                    incidif
                                                                    dunt
                                                                    ut
                                                                    la
                                                                    bore
                                                                    et
                                                                    dolore
                                                                    magna
                                                                    aliquaqs
                                                                    uis.
                                                                </p>
                                                                <span class="heading">Jhon
                                                                    Smith</span>
                                                                <span class="post">CEO-Company</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination-outer">
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#digitaltestimonialcarousel" data-bs-slide="prev">
                                        <i class="fa-solid fa-arrow-left"></i>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#digitaltestimonialcarousel" data-bs-slide="next">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partner -->
    {{-- <section class="digital_partner-section">
        <div class="container">
            <h3>Trusted by over<span>30,000</span>Companies</h3>
            <ul class="mb-0 list-unstyled">
                <li>
                    <figure class="mb-0 partner">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/home3-partner1.png') }}" alt="" />
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 partner">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/home3-partner2.png') }}" alt="" />
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 partner">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/home3-partner3.png') }}" alt="" />
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 partner">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/home3-partner4.png') }}" alt="" />
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 partner">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/home3-partner5.png') }}" alt="" />
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 partner">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/home3-partner6.png') }}" alt="" />
                    </figure>
                </li>
            </ul>
        </div>
    </section> --}}
@endsection
