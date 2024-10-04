@extends('user.layout.master')
@section('title')
    <title>Privacy Policy - RKPDMARKETING</title>
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
                        <h1>Privacy Policy</h1>
                        <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Privacy Policy</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== PRIVACY POLICY AREA STARTS =======-->
    <div class="privacy-policy-section-area sp6 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="privacy-policy-content heading2">
                        <h2>Privacy Policy – RPKD Marketings</h2>
                        <p>This Privacy Policy is an electronic record in the form of an electronic contract formed under the Information Technology Act, 2000, and the rules made thereunder, along with the amended provisions pertaining to electronic documents/records in various statutes as amended by the Information Technology Act, 2000. This Privacy Policy does not require any physical, electronic, or digital signature.</p>
                        
                        <h3>USER INFORMATION</h3>
                        <p>To provide our services, we may request certain personal information from users during the registration process. This information may include:</p>
                        <ul>
                            <li>Name</li>
                            <li>Email address</li>
                            <li>Contact number</li>
                            <li>Occupation</li>
                            <li>Interests and preferences</li>
                        </ul>
                        <p>The information you provide allows us to enhance your experience on our platform, improve our services, and develop new offerings. We ensure that your data is used only for the intended purposes, and we maintain strict confidentiality.</p>
                        <p>This information will not be considered sensitive if it is freely available in the public domain or is provided under any applicable law.</p>

                        <h3>COOKIES</h3>
                        <p>To enhance the responsiveness of our website, we may use cookies or similar tools to gather information and assign each visitor a unique User Identification (User ID). Cookies help us better understand your preferences and provide a personalized experience. The information collected via cookies is completely anonymous unless you voluntarily provide personal information.</p>
                        <p>Our advertising partners may also assign cookies to your browser when you interact with their ads. Please note that we do not control these third-party cookies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== PRIVACY POLICY AREA ENDS =======-->
    
    <div class="space60"></div>

    <x-cta/>
    <!--===== CTA AREA ENDS =======-->
@endsection
