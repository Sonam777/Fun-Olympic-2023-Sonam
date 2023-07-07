<!doctype html>
<html lang="zxx">


<!--  36:22-->

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
        $profile = \Modules\Setting\Entities\CompanyProfile::first();
    @endphp
    @yield('style')
    <link rel="icon" type="image/x-icon" href="{{ asset('upload/images/settings/' . $profile->favicon) }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/smartmenus.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

</head>

<body class="home">
    <div class="ritekhela-wrapper">
