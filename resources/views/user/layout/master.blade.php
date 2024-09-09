<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @yield('title')

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/logo/fav-logo1.png') }}" type="image/x-icon">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/owlcarousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">

    <!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!--=====  JS SCRIPT LINK =======-->
    <script src="{{ asset('frontend/assets/js/plugins/jquery-3-6-0.min.js') }}"></script>
</head>

<body class="homepage1-body">

    <!--===== PRELOADER STARTS =======-->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('frontend/assets/img/logo/preloader.png') }}')}}" alt="">
            </div>
        </div>
    </div>
    <!--===== PRELOADER ENDS =======-->

    <!--===== PROGRESS STARTS=======-->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>
    <!--===== PROGRESS ENDS=======-->

    @include('user.layout.header')

    <main>
        @yield('content')
        <!--===== FOOTER AREA STARTS =======-->
        @include('user.layout.footer')
        <!--===== FOOTER AREA ENDS =======-->
    </main>

    <!--===== JS SCRIPT LINK =======-->
    <script src="{{ asset('frontend/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/fontawesome.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/counter.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/Splitetext.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/sidebar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/mobilemenu.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/owlcarousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/gsap-animation.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/nice-select.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/slick-slider.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/circle-progress.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right", // Position can be changed to top-left, bottom-right, etc.
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    @if (session('message'))
        toastr.success('{{ session('message') }}');
    @endif
</script>


</body>


</html>
