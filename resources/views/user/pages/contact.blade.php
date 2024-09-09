@extends('user.layout.master')
@section('title')
<title>Contact Us -RKPDMARKETING</title>
@endsection

@section('content')

<!--===== HERO AREA STARTS =======-->
<div class="about-header-area" style="background-image: url('{{ asset('frontend/assets/img/bg/inner-header.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <img src="{{ asset('frontend/assets/img/elements/elements1.png')}}" alt="" class="elements1 aniamtion-key-1">
    <img src="{{ asset('frontend/assets/img/elements/star2.png')}}" alt="" class="star2 keyframe5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1>Contact Us</h1>
                    <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Contact Us</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact-main-inner-area sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="heading2 contact-header">
                   <h5>Contact Us</h5>
                   <h2>Get in Touch with Us We Value Your Connection</h2>
                   <p>Our dedicated team is committed to providing prompt and effective support to ensure your needs are met. We believe in open communication and are always ready to listen. Reach out to us via phone, email, or live chat, or visit our office during business hours.</p>
                   <div class="space32"></div>
                   <div class="number-address-area">
                    <div class="phone-number">
                        <div class="img1">
                            <img src="{{ asset('frontend/assets/img/icons/phone3.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <p>Phone Number</p>
                            <a href="tel:+917667043372">+91 8583947437</a>
                        </div>
                    </div>

                    <div class="phone-number m-0">
                        <div class="img1">
                            <img src="{{ asset('frontend/assets/img/icons/email3.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <p>Email Address</p>
                            <a href="mailto:kushal@rpkdmarketings.com">kushal@rpkdmarketings.com</a>
                        </div>
                    </div>
                   </div>
                   <div class="space50"></div>
                   <div class="number-address-area2">
                    <div class="phone-number">
                        <div class="img1">
                            <img src="{{ asset('frontend/assets/img/icons/location3.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <a href="#">VIP ENCLAVE 1 BLOCK F FLAT NO 201, <br class="d-lg-block d-none">
                                Kolkata, India, West Bengal</a>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="contact-form-area">
                    <h4>Get In Touch</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="text" placeholder="First Name">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="text" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="number" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-area">
                              <textarea placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-area">
                             <button type="submit" class="header-btn1">Get In Touch <span><i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="mapouter">
  <div class="gmap_canvas">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4506257.120552435!2d88.67021924228865!3d21.954385721237916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1704088968016!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div> --}}
<!--===== CONTACT AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<x-cta />
<!--===== CTA AREA ENDS =======-->
@endsection
