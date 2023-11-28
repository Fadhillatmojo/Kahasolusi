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
    {{--
    <link rel="icon" href="data:," type=""> --}}

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}?v=1.2" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}?v=1.2" rel="stylesheet" />
    <link href="{{ asset('assets/css/themify-icons.css') }}?v=1.2" rel="stylesheet" />
    <link href="{{ asset('assets/css/elegant-icons.css') }}?v=1.2" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}?v=1.2" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}?v=1.2" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}?v=1.2" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}?v=1.2" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}?v=1.2" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}?v=1.2" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}?v=1.2" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}?v=1.2" rel="stylesheet">
    <link href="{{ asset('css/style-custom.css') }}?v=1.2" rel="stylesheet" />
    <link href="{{ asset('css/style-2.css') }}?v=1.2" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->
    @stack('link')

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
                        <img src="{{ asset('assets/img/KahaLogo.png') }}" class="logo" alt="Logo">
                    </a>
                </div>
                <div class="col-lg-9 info item-flex space-between pr-0">
                    <ul>
                        <li>
                            <i class="fas fa-clock"></i> Working Hours: 9:00 AM – 5:00 PM
                        </li>
                    </ul>
                    <div class="social">
                        <ul>
                            <li>
                                <a href="https://www.google.com/search?q=info@kahasolusi.com">
                                    <svg width="35" height="30" viewBox="0 0 49 39" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M43.5 0.5H5.5C2.8875 0.5 0.77375 2.6375 0.77375 5.25L0.75 33.75C0.75 36.3625 2.8875 38.5 5.5 38.5H43.5C46.1125 38.5 48.25 36.3625 48.25 33.75V5.25C48.25 2.6375 46.1125 0.5 43.5 0.5ZM43.5 10L24.5 21.875L5.5 10V5.25L24.5 17.125L43.5 5.25V10Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                        viewBox="0 0 46 46" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M23.0002 3.83325C12.4144 3.83325 3.8335 12.4142 3.8335 22.9999C3.8335 26.6224 4.83975 30.0149 6.58966 32.9053L4.88 38.7166C4.78183 39.0502 4.77537 39.4042 4.8613 39.7412C4.94722 40.0782 5.12235 40.3859 5.36828 40.6318C5.61422 40.8777 5.92186 41.0529 6.25888 41.1388C6.5959 41.2247 6.94984 41.2182 7.2835 41.1201L13.0948 39.4104C16.0823 41.218 19.5084 42.1713 23.0002 42.1666C33.5859 42.1666 42.1668 33.5857 42.1668 22.9999C42.1668 12.4142 33.5859 3.83325 23.0002 3.83325ZM18.6647 27.3373C22.5421 31.2128 26.2432 31.7246 27.5503 31.7725C29.5379 31.8453 31.4737 30.3273 32.227 28.5659C32.3221 28.3468 32.3566 28.1062 32.3269 27.8691C32.2973 27.6321 32.2045 27.4074 32.0583 27.2185C31.008 25.8768 29.5877 24.9128 28.2001 23.9544C27.9104 23.7541 27.5543 23.6737 27.2066 23.7302C26.8589 23.7866 26.5466 23.9755 26.3352 24.2573L25.1852 26.011C25.1247 26.1053 25.0305 26.1729 24.9218 26.2C24.8131 26.2271 24.6982 26.2116 24.6006 26.1567C23.8205 25.7101 22.6839 24.9511 21.8674 24.1346C21.0509 23.3181 20.3379 22.2333 19.9373 21.503C19.8877 21.4102 19.8733 21.3026 19.8969 21.2C19.9205 21.0975 19.9805 21.007 20.0657 20.9453L21.8367 19.6304C22.0895 19.4107 22.2526 19.1056 22.295 18.7734C22.3374 18.4412 22.2562 18.105 22.0667 17.8288C21.2081 16.5714 20.2076 14.9729 18.7567 13.913C18.5694 13.7773 18.3501 13.6927 18.1202 13.6675C17.8903 13.6423 17.6579 13.6774 17.4457 13.7693C15.6823 14.5244 14.1567 16.4603 14.2295 18.4517C14.2774 19.7588 14.7892 23.4599 18.6647 27.3373Z"
                                            fill="white" />
                                    </svg>
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
                <nav
                    class="navbar top-less logo-less white navbar-default navbar-fixed dark bootsnav on no-full nav-box no-background d-flex align-items-center">
                    <div class="container nav-container">
                        <div class="row">
                            <!-- Start Header Navigation -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#navbar-menu">
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
                                        <a href="/#header" class="smooth-menu">Home</a>
                                    </li>
                                    <li>
                                        <a href="/#about" class="smooth-menu">About</a>
                                    </li>
                                    <li>
                                        <a href="/#portfolios" class="smooth-menu">Portfolios</a>
                                    </li>
                                    <li>
                                        <a href="/#roles" class="smooth-menu">Roles</a>
                                    </li>
                                    <li>
                                        <a href="/#tools" class="smooth-menu">Tools</a>
                                    </li>
                                    <li>
                                        <a href="/#founders" class="smooth-menu">Founders</a>
                                    </li>
                                    <li>
                                        <a href="/#faqs" class="smooth-menu">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="/#testimonials" class="smooth-menu">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="/#contact" class="smooth-menu">Contact</a>
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

    {{-- start footer --}}
    @include('component.footer')
    {{-- end footer --}}

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
    @stack('scripts')
</body>

</html>
