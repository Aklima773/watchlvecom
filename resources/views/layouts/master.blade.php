<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content>
    <meta name="description" content>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ecommerce</title>
    <!--favicon-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/front/images/favicon.png">
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/front/css/bootstrap.min.css">
    <!--owl carousel css-->
    <link rel="stylesheet" type="text/css" href="/front/css/owl.carousel.min.css">
    <!--magnific popup css-->
    <link rel="stylesheet" type="text/css" href="/front/css/magnific-popup.css">
    <!--icomoon css-->
    <link rel="stylesheet" type="text/css" href="/front/css/icomoon.css">
    <!--icofont css-->
    <link rel="stylesheet" type="text/css" href="/front/css/icofont.min.css">
    <!--animate css-->
    <link rel="stylesheet" type="text/css" href="/front/css/animate.css">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="/front/css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" type="text/css" href="/front/css/responsive.css">

</head>

<body>
<div id="app">
<!-- <hello></hello> -->
    <!--Start Preloader-->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell align-middle">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!--End Preloader-->
    <!--start header-->
    @include('layouts.front.header')
    <!--end header-->

@yield('main')


    <!--start footer-->
    @include('layouts.front.footer')
    <!--end footer-->
    <!--jQuery js-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/front/js/jquery-3.3.1.min.js"></script>
    <!--proper js-->
    <script src="/front/js/popper.min.js"></script>
    <!--bootstrap js-->
    <script src="/front/js/bootstrap.min.js"></script>
    <!--magnic popup js-->
    <script src="/front/js/magnific-popup.min.js"></script>
    <!--owl carousel js-->
    <script src="/front/js/owl.carousel.min.js"></script>
    <!--scrollIt js-->
    <script src="/front/js/scrollIt.min.js"></script>
    <!--validator js-->
    <script src="/front/js/validator.min.js"></script>
    <!--contact js-->
    <script src="/front/js/contact.js"></script>
    <!--main js-->
    <script src="/front/js/custom.js"></script>

                                </div>
</body>

</html>
