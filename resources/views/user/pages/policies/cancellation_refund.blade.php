@extends('user.layout.master')
@section('title')
    <title>Cancellation and Refund Policy - RPKD Marketings</title>
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
                        <h1>Cancellation and Refund Policy</h1>
                        <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Cancellation & Refund Policy</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== POLICY CONTENT STARTS =======-->
    <div class="about1-section-area sp6 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="policy-content-area heading2">
                        <h2 class="text-anime-style-3">Cancellation Policy</h2>
                        <p>
                            At <strong>RPKD Marketings</strong>, we strive to deliver top-notch digital marketing services, including performance marketing, web design, and development. Below is our policy regarding the cancellation of services:
                        </p>

                        <h4>1. Digital Marketing Services (Performance Marketing, SEO, Social Media Management)</h4>
                        <ul>
                            <li>Cancellation requests must be made at least <strong>10 business days</strong> prior to the next billing cycle.</li>
                            <li>Ongoing paid advertising campaigns will run until the end of the current cycle, without any pro-rata refunds for unused portions.</li>
                            <li>Early termination of long-term service agreements may incur a cancellation fee equivalent to one month’s service.</li>
                        </ul>

                        <h4>2. Web Design & Development Services</h4>
                        <ul>
                            <li>Cancellations can be made at any project stage, but completed work will be billed as per the project milestones.</li>
                            <li>If the cancellation occurs after the design phase but before development begins, a <strong>50%</strong> cancellation fee will be applied.</li>
                            <li>Cancellations after development starts will incur a fee based on completed milestones, plus a <strong>25%</strong> termination fee.</li>
                        </ul>

                        <h2 class="text-anime-style-3">Refund Policy</h2>
                        <p>
                            We aim to ensure the highest levels of satisfaction. However, due to the nature of our services, refunds are handled as follows:
                        </p>

                        <h4>1. Digital Marketing Services (Performance Marketing, SEO, Social Media Management)</h4>
                        <ul>
                            <li>Refunds are not provided for completed or ongoing campaigns (Google Ads, Facebook Ads, etc.).</li>
                            <li>If dissatisfied, we will adjust strategies or offer additional services to resolve the issue.</li>
                        </ul>

                        <h4>2. Web Design & Development Services</h4>
                        <ul>
                            <li>No refunds will be issued for completed work or delivered projects.</li>
                            <li>If unsatisfied during the design phase, modifications will be made based on feedback, but refunds may be considered case-by-case before final approval.</li>
                        </ul>

                        <h4>3. Non-Refundable Services</h4>
                        <ul>
                            <li>Consultations, strategy sessions, and customized deliverables are non-refundable once rendered.</li>
                        </ul>

                        <h4>Requesting Cancellations or Refunds</h4>
                        <p>To request a cancellation or refund, please contact our support team via our <a href="{{ route('contact') }}">Contact Us</a> page. We will respond to all inquiries within <strong>5 business days</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== POLICY CONTENT ENDS =======-->

    <!--===== CTA AREA STARTS =======-->
    <x-cta />
    <!--===== CTA AREA ENDS =======-->
@endsection
