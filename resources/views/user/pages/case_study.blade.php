@extends('user.layout.master')
@section('title')
    <title>Case Study -RKPDMARKETING</title>
@endsection

@section('content')
    <!--===== HERO AREA STARTS =======-->
    <div class="about-header-area"
        style="background-image: url('{{ asset('frontend/assets/img/bg/inner-header.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <img src="{{ asset('frontend/assets/img/elements/elements1.png')}}" alt="" class="elements1 aniamtion-key-1">
        <img src="{{ asset('frontend/assets/img/elements/star2.png')}}" alt="" class="star2 keyframe5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="about-inner-header heading9 text-center">
                        <h1>Social Media Marketing</h1>
                        <a href="index.html">Home <i class="fa-solid fa-angle-right"></i> Case Study <i
                                class="fa-solid fa-angle-right"></i> <span>Social Media Marketing</span></a>
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
                <div class="col-lg-4 m-auto">
                    <div class="case-header text-center heading2">
                        <h5>Case Study</h5>
                        <h2>Our Case Studies</h2>
                    </div>
                    <div class="space50 d-lg-block d-none"></div>
                    <div class="space30 d-lg-none d-block"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="tabs-area text-center">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-email-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="false">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-hyper-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Branding</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-delivary-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Digital PR</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-inbox-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-inbox" type="button" role="tab" aria-controls="pills-inbox"
                                    aria-selected="true">PPC</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-marketing" type="button" role="tab"
                                    aria-controls="pills-marketing" aria-selected="true">Marketing</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="pills-seo-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-seo" type="button" role="tab" aria-controls="pills-seo"
                                    aria-selected="true">SEO</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link m-0" id="pills-web-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-web" type="button" role="tab" aria-controls="pills-web"
                                    aria-selected="true">Web</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tabs-content-area">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-home" role="tabpanel">
                                <div class="tabs-contents">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img9.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="case-single.html" class="tags">#SEO</a>
                                                        <a href="case-single.html" class="head">Comprehensive SEO
                                                            Audit</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img10.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="case-single.html" class="tags">#Web</a>
                                                        <a href="case-single.html" class="head">Keyword Research &
                                                            Analysis</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img11.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="case-single.html" class="tags">#PPC</a>
                                                        <a href="case-single.html" class="head">One Page
                                                            Optimization</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img12.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="case-single.html" class="tags">#Branding Marketing</a>
                                                        <a href="case-single.html" class="head">Online Media
                                                            Management</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img13.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Web </a>
                                                        <a href="case-single.html" class="head">Online Management</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img14.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Branding, Marketing</a>
                                                        <a href="case-single.html" class="head">Online Media
                                                            Management</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img15.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags"># Branding, SEO</a>
                                                        <a href="case-single.html" class="head">Domain Migration</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img16.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Marketing, Web</a>
                                                        <a href="case-single.html" class="head">Content Marketing</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img17.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Digital, PR</a>
                                                        <a href="case-single.html" class="head">Content Strategy</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                <div class="tabs-contents">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img12.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Branding Marketing</a>
                                                        <a href="case-single.html" class="head">Online Media
                                                            Management</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img14.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Branding, Marketing</a>
                                                        <a href="case-single.html" class="head">Online Media
                                                            Management</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img15.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags"># Branding, SEO</a>
                                                        <a href="case-single.html" class="head">Domain Migration</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel">
                                <div class="tabs-contents">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img17.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Digital, PR</a>
                                                        <a href="case-single.html" class="head">Content Strategy</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img15.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags"># Branding, SEO</a>
                                                        <a href="case-single.html" class="head">Domain Migration</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-inbox" role="tabpanel"
                                aria-labelledby="pills-inbox-tab">
                                <div class="tabs-contents">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img11.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#PPC</a>
                                                        <a href="case-single.html" class="head">One Page
                                                            Optimization</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-marketing" role="tabpanel"
                                aria-labelledby="pills-marketing-tab">
                                <div class="tabs-contents">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img12.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Branding Marketing</a>
                                                        <a href="case-single.html" class="head">Online Media
                                                            Management</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img14.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Branding, Marketing</a>
                                                        <a href="case-single.html" class="head">Online Media
                                                            Management</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img16.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Marketing, Web</a>
                                                        <a href="case-single.html" class="head">Content Marketing</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab">
                                <div class="tabs-contents">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img9.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#SEO</a>
                                                        <a href="case-single.html" class="head">Comprehensive SEO
                                                            Audit</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img15.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags"># Branding, SEO</a>
                                                        <a href="case-single.html" class="head">Domain Migration</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                                <div class="tabs-contents">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img10.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Web</a>
                                                        <a href="case-single.html" class="head">Keyword Research &
                                                            Analysis</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img13.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Web </a>
                                                        <a href="case-single.html" class="head">Online Management</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="case-inner-box">
                                                <div class="img1 image-anime">
                                                    <img src="{{ asset('frontend/assets/img/all-images/case-img16.png')}}" alt="">
                                                </div>
                                                <div class="content-area">
                                                    <div class="link-area">
                                                        <a href="#" class="tags">#Marketing, Web</a>
                                                        <a href="case-single.html" class="head">Content Marketing</a>
                                                    </div>
                                                    <div class="arrow">
                                                        <a href="case-single.html"><i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pagination-area">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa-solid fa-angle-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CASE AREA ENDS =======-->


    <!--===== CTA AREA STARTS =======-->
    <div class="cta-section-area">
        <img src="{{ asset('frontend/assets/img/bg/cta-bg1.png')}}" alt="" class="cta-bg1 aniamtion-key-2">
        <img src="{{ asset('frontend/assets/img/bg/cta-bg2.png')}}" alt="" class="cta-bg2 aniamtion-key-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="cta-header-area text-center sp4 heading2">
                        <h2>Ready To Take Your SEO To <br class="d-md-block d-none"> The Next Level</h2>
                        <p>Effective SEO strategies not only elevate a website's visibility but also drive <br
                                class="d-md-block d-none"> targeted traffic, enhance user experience,</p>
                        <div class="btn-area text-center">
                            <a href="contact.html" class="header-btn1">Free Consultation <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CTA AREA ENDS =======-->
@endsection
