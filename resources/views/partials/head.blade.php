<head>

    <!--========= Basic Meta =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--========= Primary SEO =========-->
    <title>@yield('title', 'FusionLogic')</title>
    <meta name="description" content="@yield('meta_description', '')">
    <meta name="robots" content="index, follow">

    <!--========= Canonical =========-->
    <link rel="canonical" href="@yield('canonical', url()->current())">

    <!--========= Open Graph =========-->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('title')))">
    <meta property="og:description" content="@yield('og_description', trim($__env->yieldContent('meta_description')))">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta property="og:image" content="{{ asset('img/og-default.jpg') }}">

    <!--========= Twitter =========-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', trim($__env->yieldContent('title')))">
    <meta name="twitter:description" content="@yield('twitter_description', trim($__env->yieldContent('meta_description')))">
    <meta name="twitter:image" content="{{ asset('img/og-default.jpg') }}">

    <!--========= Favicon =========-->
    <link rel="shortcut icon" href="{{ asset('img/logo/fl-fav.svg') }}">

    <!--========= CSS =========-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mousecursor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
