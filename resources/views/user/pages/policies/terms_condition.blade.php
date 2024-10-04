@extends('user.layout.master')
@section('title')
    <title>Terms & Conditions - RKPDMARKETING</title>
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
                        <h1>Terms & Conditions</h1>
                        <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Terms & Conditions</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== TERMS & CONDITIONS AREA STARTS =======-->
    <div class="terms-section-area sp6 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="terms-content heading2">
                        <h2>Terms & Conditions – RPKD Marketings</h2>
                        <p>This document outlines the Terms and Conditions under which visitors may access and use this website ("rpkdmarketings.com"). By accessing this site, you agree to comply with these Terms and Conditions. If you do not agree, please exit the website.</p>
                        <p>RPKD Marketings reserves the right to modify these Terms and Conditions at any time by updating this page. It is your responsibility to check these Terms periodically, as they are binding on all users.</p>
                        
                        <h3>Liability</h3>
                        <p>RPKD Marketings and its group companies, directors, officers, or employees shall not be liable for any direct or indirect damages arising from the use or inability to use the services provided on this website. This includes any loss of profits, data, or other intangible damages, even if RPKD Marketings has been advised of the possibility of such damages.</p>

                        <h3>Cancellation Policy</h3>
                        <p>To request a service cancellation, please contact us through the “Contact Us” page. Any cancellation request received later than 10 business days before the end of the current service period will be processed for the subsequent period.</p>

                        <h3>Refund Policy</h3>
                        <p>At RPKD Marketings, we strive to provide our clients with high-quality marketing services. In case a client is not fully satisfied with our services, we offer a refund. Refunds will be processed via the original payment method used at the time of purchase.</p>
                        <p>For any inquiries regarding cancellations or refunds, please contact our support team via our website.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== TERMS & CONDITIONS AREA ENDS =======-->
    
    <div class="space60"></div>

    <x-cta/>
    <!--===== CTA AREA ENDS =======-->
@endsection
