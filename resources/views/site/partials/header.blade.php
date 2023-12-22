<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/assets/css/aos.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <title>{{env('APP_NAME')}}</title>
</head>

<body>

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav mb-5">
        <div class="pb-2 top-bar mb-3">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-lg-9">
                        <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2">{{env('APP_NAME')}}
                            </span><span class="d-none d-lg-inline-block">Have a questions?</span></a>
                        <a href="tel:{{config('company.phone1')}}" class="small mr-3"><span class="icon-phone mr-2"></span>
                            <span class="d-none d-lg-inline-block">+255 752 370 339</span></a>
                        <a href="mailto:{{config('company.email')}}" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block">{{config('company.email')}}</span></a>
                    </div>

                    <div class="col-6 col-lg-3 text-right">
                        <a href="login.html" class="small mr-3">
                            <span class="icon-lock"></span>
                            Log In
                        </a>
                        <a href="register.html" class="small">
                            <span class="icon-person"></span>
                            Register
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="sticky-nav js-sticky-header">
            <div class="container position-relative">
                <div class="site-navigation text-center">
                    <a href="{{route('home')}}" class="logo menu-absolute m-0">
                        <title>{{env('APP_NAME')}}</title>
                        <span class="text-primary">.</span>
                    </a>

                    <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li class="has-children">
                            <a href="#">Dropdown</a>
                            <ul class="dropdown">
                                <li><a href="{{route('home')}}">Elements</a></li>
                                <li class="has-children">
                                    <a href="#">Menu Two</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Sub Menu One</a></li>
                                        <li><a href="#">Sub Menu Two</a></li>
                                        <li><a href="#">Sub Menu Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Menu Three</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('home')}}">Our Staff</a></li>
                        <li><a href="{{route('home')}}">News</a></li>
                        <li><a href="{{route('home')}}">Gallery</a></li>
                        <li><a href="{{route('home')}}">About</a></li>
                        <li><a href="{{route('home')}}">Contact</a></li>
                    </ul>

                    <a href="#" class="btn-book btn btn-secondary btn-sm menu-absolute">Enroll Now</a>

                    <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>

                </div>
            </div>
        </div>
    </nav>