@extends('user.layout.master')
@section('title')
    <title>Shipping and Delivery Policy - RPKD Marketings</title>
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
                        <h1>Shipping and Delivery Policy</h1>
                        <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Shipping & Delivery Policy</span></a>
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
                        <h2 class="text-anime-style-3">Shipping and Delivery Policy</h2>
                        <p>
                            At <strong>RPKD Marketings</strong>, we provide various digital services, including performance marketing and web design & development. Since our services are mostly digital and non-tangible, the concept of shipping and delivery applies to certain deliverables such as physical products related to marketing materials or hardware setups (if applicable).
                        </p>

                        <h4>1. Delivery of Digital Services</h4>
                        <ul>
                            <li>For our digital marketing services, including SEO, performance marketing, and web development, deliverables are provided digitally.</li>
                            <li>All digital deliverables, such as reports, website files, and campaign analytics, will be delivered via email or through a secured online platform agreed upon with the client.</li>
                            <li>Delivery timelines for digital services vary based on the scope of the project. These timelines will be discussed and agreed upon during the project onboarding phase.</li>
                        </ul>

                        <h4>2. Shipping of Physical Products (if applicable)</h4>
                        <ul>
                            <li>If your service involves any physical product, such as promotional materials or marketing kits, we will arrange for shipping through a third-party courier.</li>
                            <li>Shipping costs, if applicable, will be detailed in the service agreement or invoice. We aim to provide accurate delivery timelines based on the courier service.</li>
                            <li>We are not responsible for any delays caused by the shipping provider but will assist you in tracking and resolving any issues with the shipment.</li>
                        </ul>

                        <h4>3. Shipping and Delivery Timelines</h4>
                        <ul>
                            <li>For digital products, typical delivery times range from <strong>1-2 business days</strong> after project completion or as per the schedule agreed during project discussions.</li>
                            <li>For physical shipments, delivery timelines vary based on your location and the chosen courier. Standard shipping may take <strong>5-7 business days</strong> within the country and <strong>10-15 business days</strong> for international deliveries.</li>
                        </ul>

                        <h4>4. Tracking Your Order</h4>
                        <ul>
                            <li>Once your digital deliverables or physical items are shipped, you will receive a confirmation email with tracking details.</li>
                            <li>For physical shipments, you will receive the courier tracking number, which you can use to track the progress of your delivery.</li>
                        </ul>

                        <h4>5. Delayed or Failed Deliveries</h4>
                        <ul>
                            <li>If there is a delay in the delivery of your digital product, please contact our support team for immediate assistance.</li>
                            <li>For physical shipments, if you do not receive the item within the specified timeline, kindly reach out to us and we will help coordinate with the courier for timely resolution.</li>
                        </ul>

                        <h4>Contact Us</h4>
                        <p>If you have any questions about our shipping and delivery processes, or if you encounter issues with receiving your order, please contact us via our <a href="{{ route('contact') }}">Contact Us</a> page.</p>
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
