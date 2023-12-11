<!-- Start Testimonial Area -->
<div id="testimonials" class="testimonials-area carousel-shadow relative half-bg default-padding">
    <div class="circle-kanan-testi rounded-full d-none d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset">
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
                <div class="col-lg-10">
                    <div class="testimonial-carousel owl-carousel owl-theme testi">
                        <!-- mengambil data per item -->
                        @foreach ($testimonials as $testimonial)
                        <div class="item">
                            <div class="card-testi">
                                <div class="card-testi-item">
                                    <div class="col-lg-4">
                                        @if (Str::contains($testimonial->testimonial_image_url, ['http://',
                                        'https://']))
                                        <img src="{{ $testimonial->testimonial_image_url }}" class="card-img-top"
                                            alt="testimonial">
                                        @else
                                        @endif
                                    </div>
                                    <div class="card-testi-item-text col-lg-8">
                                        <b>
                                            What They Said About Us?
                                        </b>
                                        <p>
                                            {{ $testimonial->testimonial_desc }}
                                        </p>
                                        <div class="provider">
                                            <h5>{{ $testimonial->testimonial_client }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- end mengambil data per item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials Area  -->