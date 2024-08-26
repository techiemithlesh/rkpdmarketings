<!DOCTYPE html>
<html lang="zxx">

<head>
    @yield('title')
    <!-- /SEO Ultimate -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend/assets/images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend/assets/images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('frontend/assets/images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset('frontend/assets/images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('frontend/assets/images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('frontend/assets/images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('frontend/assets/images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('frontend/assets/images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('frontend/assets/images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('frontend/assets/images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend/assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('frontend/assets/images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend/assets/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/assets/images/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('frontend/../ms-icon-144x144.html') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('frontend/assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/js/bootstrap.min.js') }}">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/css/custom-style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/css/special-classes.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/magnific-popup.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>

<body>

    <!-- Header -->
    <!-- Back to top button -->
    <a id="button"></a>

    @include('user.layouts.header')

    <main>
     @yield('content')
    </main>


    <!-- Footer -->
    @include('user.layouts.footer')
    <!-- PRE LOADER -->
    <div class="js">
        <div class="preloader-orbit-loading">
            <div class="cssload-inner cssload-one"></div>
            <div class="cssload-inner cssload-two"></div>
            <div class="cssload-inner cssload-three"></div>
        </div>
    </div>
    <!-- Latest compiled JavaScript -->
    <script src="{{ asset('/frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/video_link.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/video.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/counter.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/custom-carousel.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/custom.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/animation_links.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/animation.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/search.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/back-to-top-button.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/preloader.js') }}"></script>
</body>

</html>
