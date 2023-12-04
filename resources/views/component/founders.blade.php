<svg class="mask">
    <defs>
        <clipPath id="mask-founders" clipPathUnits="objectBoundingBox">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0 0.5C0 0.223858 0.223858 0 0.5 0V0C0.776142 0 1 0.223858 1 0.5V0.995984H0V0.5Z" fill="#D9D9D9"
                fill="black" />
        </clipPath>
    </defs>
</svg>

<!-- Start Services
    ============================================= -->
<div id="founders" class="services-style-two-area relative default-padding">
    <div class="container-founders-title">
        <div class="row">
            <h2>Founders</h2>
        </div>
    </div>
    <div class="container-full">
        <div class="services-tyle-two-box text-center">
            <div class="services-4-col-carousel owl-carousel owl-theme">
                @foreach ($founders as $founder)
                    <!-- Single Item -->
                    <div class="single-item">
                        @if (Str::contains($founder->person_image_url, ['http://', 'https://']))
                            <img src="{{ $founder->person_image_url }}" class="founder-img"
                                alt="founders{{ $founder->person_id }}">
                        @else
                            <img src="{{ asset('storage/founders/' . $founder->person_image_url) }}" class="founder-img"
                                alt="person">
                        @endif
                        <h4>{{ $founder->person_position }}</h4>
                        <div class="thumb"></div>
                    </div>
                @endforeach
                <!-- End Single Item -->

            </div>
        </div>
    </div>
</div>
<!-- End Services-->
