@extends('component.root')
@section('body')
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area top-pad-extra text-regular right-shape content-less">
        <div id="bootcarousel" class="carousel text-light slide animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active bg-cover" style="background-image: url(assets/img/2440x1578.png);">
                    <div class="box-table">
                        <div class="box-cell shadow gradient">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">Best Cleaning Service</h4>
                                            <h2 data-animation="animated slideInLeft">Amazing quality cleaning service agency</h2>
                                            <div class="bottom" data-animation="animated slideInUp">
                                                <a class="btn btn-theme primary effect btn-md" href="#">Book a Schedule</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item bg-cover" style="background-image: url(assets/img/2440x1578.png);">
                    <div class="box-table">
                        <div class="box-cell shadow gradient">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="content">
                                            <h4 data-animation="animated slideInRight">Professional Sanitizing</h4>
                                            <h2 data-animation="animated slideInLeft">Disinfecting & Deodorizing Spray Services</h2>
                                            <div class="bottom" data-animation="animated slideInUp">
                                                <a class="btn btn-theme primary effect btn-md" href="#">Book a Schedule</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    @include('component.about')

    @include('component.portfolios')
    
    <!-- Start Services Types 
    ============================================= -->
    <div id="services" class="services-types-area shadow overflow-hidden bg-theme text-light default-padding">
        <!-- Shape -->
        <div class="fixed-shape">
            <img src="assets/img/shape/28.png" alt="Shape">
        </div>
        <!-- Shape -->
        <div class="container">
            <div class="row align-center">
                <!-- Buble Shape -->
                <div class="buble-shape">
                    <img src="assets/img/shape/bubble-light.png" alt="Bubble">
                </div>
                <!-- Buble Shape -->
                <div class="col-lg-12">
                    <div class="services-type-items services-type-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row align-center">
                                <div class="col-lg-6 content">
                                    <h5>One Time / Recurring</h5>
                                    <h2>Residential Cleaning</h2>
                                    <p>
                                        Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection.
                                    </p>
                                    <ul>
                                        <li>Kitchen</li>
                                        <li>Bathrooms</li>
                                        <li>Bedrooms Living Rooms</li>
                                        <li>Extra Services</li>
                                        <li>Seasonal</li>
                                        <li>Move in/out</li>
                                        <li>Post construction</li>
                                        <li>Еxpress</li>
                                    </ul>
                                    <a class="btn btn-theme secondary effect btn-md" href="contact.html">Free Estimate</a>
                                </div>
                                <div class="col-lg-6">
                                    <div class="thumb">
                                        <img src="assets/img/800x800.png" alt="Thumb">
                                        <h4><strong><span>29%</span> Off</strong> For the new customers</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row align-center">
                                <div class="col-lg-6 content">
                                    <h5>One Time / Recurring</h5>
                                    <h2>Commercial Cleaning</h2>
                                    <p>
                                        Prevailed mr tolerably discourse assurance estimable applauded to points.
                                    </p>
                                    <ul>
                                        <li>Office</li>
                                        <li>Shops</li>
                                        <li>Medical facilities</li>
                                        <li>Factories</li>
                                        <li>Restaurants</li>
                                        <li>Airports</li>
                                        <li>Government facilities</li>
                                        <li>Showrooms</li>
                                    </ul>
                                    <a class="btn btn-theme secondary effect btn-md" href="contact.html">Free Estimate</a>
                                </div>
                                <div class="col-lg-6">
                                    <div class="thumb">
                                        <img src="assets/img/800x800.png" alt="Thumb">
                                        <h4><strong><span>38%</span> Off</strong> For the new customers</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Services Types Area -->

    <!-- Start Features Area 
    ============================================= -->
    <div id="features" class="features-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>What we do</h4>
                        <h2>Our Most Popular <br> Cleaning Services For You</h2>
                        <div class="devider"></div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id tenetur temporibus, distinctio iste recusandae magni provident nam fuga perferendis molestiae et hic non expedita eos velit maxime libero quos? Et.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="features-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="feature-style-three col-lg-4 col-md-6">
                        <div class="item">
                            <div class="top">
                                <i class="flaticon-house-1"></i>
                                <h4><a href="#">House Cleaning</a></h4>
                            </div>
                            <p>
                                Buscipit tincidunt duis antino gravidia tellusy nascetur neque vulpuits pointings scelerisque ultrces muscle mass pers order commounication pointing.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="feature-style-three col-lg-4 col-md-6">
                        <div class="item">
                            <div class="top">
                                <i class="flaticon-kitchen"></i>
                                <h4><a href="#">Kitchen Cleaning</a></h4>
                            </div>
                            <p>
                                Buscipit tincidunt duis antino gravidia tellusy nascetur neque vulpuits pointings scelerisque ultrces muscle mass pers order commounication pointing.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="feature-style-three col-lg-4 col-md-6">
                        <div class="item">
                            <div class="top">
                                <i class="flaticon-office-desk"></i>
                                <h4><a href="#">Office Cleaning</a></h4>
                            </div>
                            <p>
                                Buscipit tincidunt duis antino gravidia tellusy nascetur neque vulpuits pointings scelerisque ultrces muscle mass pers order commounication pointing.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="feature-style-three col-lg-4 col-md-6">
                        <div class="item">
                            <div class="top">
                                <i class="flaticon-window-cleaning"></i>
                                <h4><a href="#">Window Cleaning</a></h4>
                            </div>
                            <p>
                                Buscipit tincidunt duis antino gravidia tellusy nascetur neque vulpuits pointings scelerisque ultrces muscle mass pers order commounication pointing.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="feature-style-three col-lg-4 col-md-6">
                        <div class="item">
                            <div class="top">
                                <i class="flaticon-commercial-structures"></i>
                                <h4><a href="#">Residential Cleaning</a></h4>
                            </div>
                            <p>
                                Buscipit tincidunt duis antino gravidia tellusy nascetur neque vulpuits pointings scelerisque ultrces muscle mass pers order commounication pointing.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="feature-style-three col-lg-4 col-md-6">
                        <div class="item">
                            <div class="top">
                                <i class="flaticon-carpet-1"></i>
                                <h4><a href="#">Carpet Cleaning</a></h4>
                            </div>
                            <p>
                                Buscipit tincidunt duis antino gravidia tellusy nascetur neque vulpuits pointings scelerisque ultrces muscle mass pers order commounication pointing.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area bg-theme text-light">

        <!-- Shape -->
        <div class="shape">
            <img src="assets/img/illustration/11.png" alt="Shape">
        </div>
        <!-- End Shape -->
        
        <div class="container">
            <div class="fun-fact-items text-center default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="1267" data-speed="5000">1267</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Orders</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="846" data-speed="5000">846</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Trusted Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="36" data-speed="5000">36</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Years Of Experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url(assets/img/shape/29.png);"></div>
        <!-- Fixed BG -->
    </div>
    <!-- End Fun Factor Area -->

    <!-- Start Process Area
    ============================================= -->
    <div class="work-process-area shadow-less text-center default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Work Process</h4>
                        <h2>How it Works</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="process-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <span>01</span>
                            </div>
                            <h5>Book Online Form</h5>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <span>02</span>
                            </div>
                            <h5>Get expert cleaner</h5>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <span>03</span>
                            </div>
                            <h5>Relax & enjoy cleanin</h5>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Process Area -->

    <!-- Start Appoinment Area
    ============================================= -->
    <div id="appoinment" class="appoinment-area bg-theme">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <div class="thumb">
                        <img src="assets/img/illustration/6.png" alt="illustration">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 form-content">
                    <div class="form-items">
                        <h2>Free Estimate</h2>
                        <p>
                            Get a quick response within 24 hours
                        </p>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Chose Subject</option>
                                            <option value="2">Computer Engineering</option>
                                            <option value="4">Accounting Technologies</option>
                                            <option value="5">Web Development</option>
                                            <option value="6">Machine Language</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn-animation dark border" type="submit" name="submit" id="submit">
                                        <span>Get Estimate <i class="fas fa-angle-right"></i></span>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Appoinment Area -->

    <!-- Start Projects Area 
    ============================================= -->
    <div class="projects-area default-padding-top">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h5>Successful Project</h5>
                        <h2>
                            Keep your vision to our latest projects. 
                        </h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <p>
                            Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fill">
            <div class="project-items project-carousel owl-carousel owl-theme">
                <!-- Single Item -->
                <div class="project-style-one">
                    <img src="assets/img/2440x1578.png" alt="Thumb">
                    <div class="info">
                        <h4><a href="project-details.html">Door Cleaning</a></h4>
                        <span>House, Office</span>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="project-style-one">
                    <img src="assets/img/2440x1578.png" alt="Thumb">
                    <div class="info">
                        <h4><a href="project-details.html">Garden Cleaning</a></h4>
                        <span>Apartment</span>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="project-style-one">
                    <img src="assets/img/2440x1578.png" alt="Thumb">
                    <div class="info">
                        <h4><a href="project-details.html">Bedroom Cleaning</a></h4>
                        <span>Residential, Office</span>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="project-style-one">
                    <img src="assets/img/2440x1578.png" alt="Thumb">
                    <div class="info">
                        <h4><a href="project-details.html">House Cleaning</a></h4>
                        <span>Home, Apartment</span>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="project-style-one">
                    <img src="assets/img/2440x1578.png" alt="Thumb">
                    <div class="info">
                        <h4><a href="project-details.html">Furniture Cleaning</a></h4>
                        <span>Office, House</span>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Projects Area Area -->

    <!-- Start Pricing Area 
    ============================================= -->
    <div id="pricing" class="pricing-area shadow default-padding bottom-less">
        <!-- Fixed Shape -->
        <div class="fixed-sahpe-bottom">
            <img src="assets/img/shape/19.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Cleaning Plans</h4>
                        <h2>Take a look of our Pricing and <br> select Your Choice</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pricing pricing-simple">
                <div class="row">
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Residential</h4>
                            </div>
                            <div class="price">
                                <h2><sup>$</sup>20</h2>
                                <p>
                                    For Homes
                                </p>
                            </div>
                            <ul>
                                <li>Profetional Cleaner <i class="fas fa-check-circle"></i></li>
                                <li>2 Bedrroms Cleaning <i class="fas fa-check-circle"></i></li>
                                <li>Kitchen Cleaning <i class="fas fa-times-circle"></i></li>
                                <li>2 Bathroom Cleaning <i class="fas fa-check-circle"></i></li>
                                <li>Roof Cleaning   <i class="fas fa-check-circle"></i></li>
                            </ul>
                            <a class="btn btn-dark effect btn-sm" href="contact.html">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item active">
                            <div class="pricing-header">
                                <h4>Commercial</h4>
                            </div>
                            <div class="price">
                                <h2><sup>$</sup>36</h2>
                                <p>
                                    For Business
                                </p>
                            </div>
                            <ul>
                                <li>Profetional Cleaner <i class="fas fa-check-circle"></i></li>
                                <li>Windows Cleaning  <i class="fas fa-check-circle"></i></li>
                                <li>Kitchen Cleaning <i class="fas fa-check-circle"></i></li>
                                <li>2 Bathroom Cleaning <i class="fas fa-check-circle"></i></li>
                                <li>Roof Cleaning   <i class="fas fa-times-circle"></i></li>
                            </ul>
                            <a class="btn btn-theme secondary effect btn-sm" href="contact.html">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Ressort</h4>
                            </div>
                            <div class="price">
                                <h2><sup>$</sup>49</h2>
                                <p>
                                    For Strata
                                </p>
                            </div>
                            <ul>
                                <li>Profetional Cleaner <i class="fas fa-check-circle"></i></li>
                                <li>2 Livingroom Cleaning <i class="fas fa-check-circle"></i></li>
                                <li>Kitchen Cleaning <i class="fas fa-times-circle"></i></li>
                                <li>2 Bathroom Cleaning <i class="fas fa-check-circle"></i></li>
                                <li>Roof Cleaning   <i class="fas fa-check-circle"></i></li>
                            </ul>
                            <a class="btn btn-dark effect btn-sm" href="contact.html">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->

    <!-- Start Testimonials Area 
    ============================================= -->
    <div class="testimonials-area carousel-shadow relative half-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Testimonials</h4>
                        <h2>What’s Client’s Say About Us</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="testimonial-items">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Signle Item -->
                            <div class="item">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <div class="content">
                                    <img src="assets/img/shape/quote.png" alt="Quote">
                                    <p>
                                        Friendly bachelor entrance to on by. Extremity as if breakfast agreement. Off now mistress provided out horrible opinions. Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection. Everything melancholy uncommonly but solicitude inhabiting projection. discourse assurance estimable applauded to points.
                                    </p>
                                    <div class="provider">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <h5>Mulias Prosva</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Signle Item -->
                            <!-- Signle Item -->
                            <div class="item">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <div class="content">
                                    <img src="assets/img/shape/quote.png" alt="Quote">
                                    <p>
                                        Best bachelor entrance to on by. Extremity as if breakfast agreement. Off now mistress provided out horrible opinions. Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection. Everything melancholy uncommonly but solicitude inhabiting projection. discourse assurance estimable applauded to points.
                                    </p>
                                    <div class="provider">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <h5>Mulias Prosva</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Signle Item -->
                            <!-- Signle Item -->
                            <div class="item">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <div class="content">
                                    <img src="assets/img/shape/quote.png" alt="Quote">
                                    <p>
                                        Best bachelor entrance to on by. Extremity as if breakfast agreement. Off now mistress provided out horrible opinions. Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection. Everything melancholy uncommonly but solicitude inhabiting projection. discourse assurance estimable applauded to points.
                                    </p>
                                    <div class="provider">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <h5>Mulias Prosva</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Signle Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area  -->

    <!-- Start Blog 
    ============================================= -->
    <div id="blog" class="blog-area grid-style default-padding bottom-less bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>From the blog</h4>
                        <h2>Latest News & Articles</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                                <div class="date">Jul <strong>21</strong></div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                   <ul>
                                       <li>
                                           <span>By </span>
                                           <a href="#">John Baus</a>
                                       </li>
                                       <li>
                                           <span>In </span>
                                           <a href="#">Agency</a>
                                       </li>
                                   </ul>
                                </div>
                                <h4><a href="blog-single-with-sidebar.html">Discovery incommode earnestly commanded mentions.</a></h4>
                                <p>
                                    Etensive repulsive belonging depending promotion be zealously as. Preference point inquietude ask now are dispatched.
                                </p>
                                <a href="blog-single-with-sidebar.html" class="btn-simple"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                                <div class="date">Aug <strong>18</strong></div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                   <ul>
                                       <li>
                                           <span>By </span>
                                           <a href="#">Monus Botha</a>
                                       </li>
                                       <li>
                                           <span>In </span>
                                           <a href="#">Agency</a>
                                       </li>
                                   </ul>
                                </div>
                                <h4><a href="blog-single-with-sidebar.html">Everything melancholy uncommonly but solicitude.</a></h4>
                                <p>
                                    Etensive repulsive belonging depending promotion be zealously as. Preference point inquietude ask now are dispatched.
                                </p>
                                <a href="blog-single-with-sidebar.html" class="btn-simple"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                                <div class="date">Sep <strong>15</strong></div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                   <ul>
                                       <li>
                                           <span>By </span>
                                           <a href="#">Mills Paul</a>
                                       </li>
                                       <li>
                                           <span>In </span>
                                           <a href="#">Agency</a>
                                       </li>
                                   </ul>
                                </div>
                                <h4><a href="blog-single-with-sidebar.html">Providing top quality cleaning and related services charms.</a></h4>
                                <p>
                                    Etensive repulsive belonging depending promotion be zealously as. Preference point inquietude ask now are dispatched.
                                </p>
                                <a href="blog-single-with-sidebar.html" class="btn-simple"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area  -->    
@endsection