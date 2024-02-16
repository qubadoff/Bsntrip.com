<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="icon" href="{{ asset('/') }}assets/images/sm-logo.svg" type="image/gif" sizes="20x20">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/all.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/summernote.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/swiper-bundle.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/slick.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/select2.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/datepicker.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">
</head>
<body class="bg-wight">
<div class="eg-preloder">
</div>

@include('frontend.layouts.includes.header')

@yield('content')

@include('frontend.layouts.includes.footer')

<script src="{{ asset('/') }}assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/') }}assets/js/jquery-ui.js"></script>
<script src="{{ asset('/') }}assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}assets/js/swiper-bundle.min.js"></script>
<script src="{{ asset('/') }}assets/js/slick.js"></script>
<script src="{{ asset('/') }}assets/js/summernote.min.js"></script>
<script src="{{ asset('/') }}assets/js/jquery.nice-select.js"></script>
<script src="{{ asset('/') }}assets/js/jquery.fancybox.min.js"></script>
<script src="{{ asset('/') }}assets/js/summernote.min.js"></script>
<script src="{{ asset('/') }}assets/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('/') }}assets/js/counterup.js"></script>
<script src="{{ asset('/') }}assets/js/select2.min.js"></script>
<script src="{{ asset('/') }}assets/js/viewport.jquery.js"></script>
<script src="{{ asset('/') }}assets/js/jquery.nice-number.min.js"></script>
<script src="{{ asset('/') }}assets/js/main.js"></script>
</body>
</html>
