@extends('user.layouts.master')

@section('title')
    <title>RKPDMARKETING - Contact</title>
@endsection

<style>
    .contact_info-section {

    padding: 145px 0 100px !important;
}
</style>

@section('content')



    <!-- Contact info -->
    <section class="contact_info-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h5>Contact Information</h5>
                        <h2>Get In Touch With Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="contact-box">
                        <figure class="contact-icon py-4">
                            <img src="{{ asset('frontend/assets/images/contact-icon1.png') }}" alt="" class="img-fluid">
                        </figure>
                        <h4>Location</h4>
                        <div class="text">
                            <p class="mb-0 text-size-18">VIP ENCLAVE 1 BLOCK F FLAT NO 201, Kolkata, India, West Bengal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="contact-box">
                        <figure class="contact-icon py-4">
                            <img src="{{ asset('frontend/assets/images/contact-icon2.png') }}" alt="" class="img-fluid">
                        </figure>
                        <h4>Phone</h4>
                        <div class="text">
                            <a href="tel:+918583947437" class="mb-0 text-decoration-none text-size-18">+91 3 8583947437</a>

                        </div>
                        <span>Call Now</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="contact-box">
                        <figure class="contact-icon py-4">
                            <img src="{{ asset('frontend/assets/images/contact-icon3.png') }}" alt="" class="img-fluid">
                        </figure>
                        <h4>Email</h4>
                        <div class="text">
                            <a href="mailto:kushal@rpkdmarketings.com"class="mb-0 text-decoration-none text-size-18">kushal@rpkdmarketings.com</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
