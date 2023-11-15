<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Kahasolusi - Segala Solusi dalam Genggaman Anda">

        <!-- ========== Page Title ========== -->
        <title>Kahasolusi | Company Profile</title>

        <!-- ========== Favicon Icon ========== -->
        <link rel="shortcut icon" href="assets/img/LogoKahaHead.png" type="image/x-icon">
        {{-- <link rel="icon" href="data:," type=""> --}}

        <!-- ========== Start Stylesheet ========== -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/elegant-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/style-custom.css') }}" rel="stylesheet" />
        <!-- ========== End Stylesheet ========== -->

    </head>

    <body>
        <!-- Preloader Start -->
        <div class="se-pre-con"></div>
        <!-- Preloader Ends -->

        <!-- Start Header Top 
        ============================================= -->
        <div class="top-bar-area multi-content bg-dark text-light">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-3 logo">
                        <a href="/">
                            <img src="{{ asset('assets/img/KahaLogo.png')}}" class="logo" alt="Logo">
                        </a>
                    </div>
                    <div class="col-lg-9 info item-flex space-between">
                        <ul>
                            <li>
                                <i class="fas fa-clock"></i> Working Hours: 9:00 AM – 5:00 PM
                            </li>
                        </ul>
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/icon/ic_baseline-facebook.png') }}">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/icon/formkit_instagram.png') }}">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/icon/ic_twitter.png') }}">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header 
        ============================================= -->
        <header id="header">

            <div class="container box-nav">
                <div class="row">
                    <!-- Start Navigation -->
                    <nav class="navbar top-less logo-less white navbar-default navbar-fixed dark bootsnav on no-full nav-box no-background">
                        <div class="container nav-container">
                            <div class="row">
                                <!-- Start Header Navigation -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <a class="navbar-brand" href="/">
                                        <img src="assets/img/KahaLogo.png" class="logo" alt="Logo">
                                    </a>
                                </div>
                                <!-- End Header Navigation -->

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                
                                    <div class="collapse navbar-collapse" id="navbar-menu">
                                        <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                            <li>
                                                {{-- nyoba scrool view navbar tapi masih belom --}}
                                                {{-- <a class="active smooth-menu" href="#header">Home</a> --}}
                                                <a class="smooth-menu" href="#header">Home</a>
                                            </li>
                                            <li>
                                                <a class="smooth-menu" href="#about">About</a>
                                            </li>
                                            <li>
                                                <a class="smooth-menu" href="#portfolios">Portfolios</a>
                                            </li>
                                            <li>
                                                <a class="smooth-menu" href="#roles">Roles</a>
                                            </li>
                                            <li>
                                                <a class="smooth-menu" href="#tools">Tools</a>
                                            </li>
                                            <li>
                                                <a class="smooth-menu" href="#founders">Founders</a>
                                            </li>
                                            <li>
                                                <a class="smooth-menu" href="#faqs">FAQs</a>
                                            </li>
                                            <li>
                                                <a class="smooth-menu" href="#testimonials">Testimonials</a>
                                            </li>
                                            <li>
                                                <a class="smooth-menu" href="#contact">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                
                                <!-- /.navbar-collapse -->
                            </div>

                        </div>
                    </nav>
                    <!-- End Navigation -->
                </div>
            </div>

        </header>
        <!-- End Header -->
        
        @yield('body')

        {{--  start footer  --}}
        @include('component.footer')
        {{--  end footer  --}}
        
        <!-- jQuery Frameworks and JS
        ============================================= -->
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/count-to.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.event.move.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.twentytwenty.js') }}"></script>
        <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>