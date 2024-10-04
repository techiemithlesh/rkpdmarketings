    <!--=====HEADER START=======-->
    <header>
        <div class="header-area homepage1 header header-sticky d-none d-lg-block " id="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-elements">
                            <div class="site-logo">
                                <x-logo />
                            </div>
                            <div class="main-menu">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home </a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('services') }}">Services </a> </li>
                                    {{-- <li><a href="{{ route('services') }}">Testimonial </a></li> --}}
                                    <li><a href="{{ route('portfolio') }}">Portfolio </a> </li>
                                    <li><a href="{{ route('casestudy') }}">Case Study </a> </li>
                                    {{-- <li><a href="#">Blogs</a> </li> --}}
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="btn-area">

                                <a href="https://calendly.com/kushal111203/30min" target="_blank" class="header-btn1">Free Consultation <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                            <div class="body-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--=====HEADER END =======-->

    <!--===== MOBILE HEADER STARTS =======-->
    <div class="mobile-header mobile-haeder1 d-block d-lg-none">
        <div class="container-fluid">
            <div class="col-12">
                <div class="mobile-header-elements">
                    <div class="mobile-logo">
                        <x-logo />
                    </div>
                    <div class="mobile-nav-icon dots-menu">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-sidebar mobile-sidebar1">
        <div class="logosicon-area">
            <div class="logos">
                <x-logo />
            </div>
            <div class="menu-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <div class="mobile-nav mobile-nav1">
            <ul class="mobile-nav-list nav-list1">
                <li><a href="{{ route('home') }}">Home </a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services </a> </li>
                <li><a href="{{ route('portfolio') }}">Portfolio </a> </li>
                <li><a href="{{ route('casestudy') }}">Case Study </a> </li>
                {{-- <li><a href="#">Blogs</a> </li> --}}

                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>

            <div class="allmobilesection">
                <a href="https://calendly.com/kushal111203/30min" target="_blank" class="header-btn1">Get Started <span>
                        <i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </div>
    <!--===== MOBILE HEADER STARTS =======-->
