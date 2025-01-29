<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Homepage - Responsive Menu | CodeWithZubi</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    @livewireStyles
    <!-- Favicons -->
    <link href="{{ asset('front/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('front/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('front/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">


    @livewire('front.partials.front-header-component')

    {{ $slot }}

    @livewire('front.partials.front-footer-component')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @livewireScripts
    <!-- Vendor JS Files -->
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('front/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('front/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('front/js/main.js') }}"></script>

</body>

</html>
