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
        <link rel="shortcut icon" href="/storage/logo/logo.png">

        <meta name="description" content="" />
        <meta name="keywords" content="bootstrap, bootstrap4" />

        <link
            href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap"
            rel="stylesheet">


        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="/assets/css/line.css">

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
        <style>
        .success {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            /* Adjust the z-index as needed to ensure it's above other content */
            padding: 15px;
            /* Adjust padding to style the notification box */
            text-align: center;
            /* Center the text horizontally */
            width: 300px;
            /* Set a width for the notification box */
            background-color: #4CAF50;
            border: 1px solid #fff;
            /* Background color for success */
            color: #fff;
            /* Text color */
            border-radius: 5px;
            /* Rounded corners for the box */
        }

        .error {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            /* Adjust the z-index as needed to ensure it's above other content */
            padding: 15px;
            /* Adjust padding to style the notification box */
            text-align: center;
            /* Center the text horizontally */
            width: 300px;
            /* Set a width for the notification box */
            background-color: rgba(224, 0, 3, 1.00);
            border: 1px solid #fff;
            /* Background color for success */
            color: #fff;
            /* Text color */
            border-radius: 5px;
            /* Rounded corners for the box */
        }
        </style>
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
                            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2">
                                </span><span class="d-none d-lg-inline-block">Have a questions?</span></a>
                            <a href="tel:{{config('company.phone1')}}" class="small mr-3"><span
                                    class="icon-phone mr-2"></span>
                                <span class="d-none d-lg-inline-block">+255 752 370 339</span></a>
                            <a href="mailto:{{config('company.email')}}" class="small mr-3"><span
                                    class="icon-envelope mr-2"></span> <span
                                    class="d-none d-lg-inline-block">{{config('company.email')}}</span></a>
                        </div>

                        <div class="col-6 col-lg-3 text-right">
                            <a href="{{route('filament.admin.pages.dashboard')}}" class="small mr-3">
                                <span class="icon-lock"></span>
                                Log In
                            </a>
                            <!-- <a href="register.html" class="small">
                                <span class="icon-person"></span>
                                Register
                            </a> -->
                        </div>

                    </div>
                </div>
            </div>
            <div class="sticky-nav js-sticky-header">
                <div class="container position-relative">
                    <div class="site-navigation text-center">
                        <a href="{{route('home')}}" class="logo menu-absolute m-0">
                            {{config('company.name')}}
                            <span class="text-primary">.</span>
                        </a>

                        <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('staff')}}">Our Staff</a></li>
                            <li><a href="{{route('news')}}">News</a></li>
                            <li><a href="{{route('gallery')}}">Gallery</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>

                        <!-- <a href="#" class="btn-book btn btn-secondary btn-sm menu-absolute">Enroll Now</a> -->

                        <a href="#"
                            class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                            data-toggle="collapse" data-target="#main-navbar">
                            <span></span>
                        </a>

                    </div>
                </div>
            </div>
        </nav>