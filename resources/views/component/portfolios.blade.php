<div id="portfolios" class="portfolios-area default-padding">
    <div class="container-portfolios-title">
        <h5>PORTFOLIOS</h5>
        <h2>Our Recent Project</h2>
    </div>

    <div id="project" class="project-area overflow-hidden">
        <div class="container">
            <div class="project-items-area">
                <div class="masonary">
                    <div class="row row-cols-1 row-cols-lg-3">
                        @foreach ($portfolios as $portfolio)
                            <div class="col d-flex justify-content-center px-0 py-3 p-sm-3">
                                <!-- Single Item -->
                                <div class="pf-item">
                                    <div class="card m-0 m-sm-2">
                                        <div class="project-style-two">
                                            <div class="cover-info">
                                                @if (Str::contains($portfolio->portfolio_image_url, ['http://', 'https://']))
                                                    <img src="{{ $portfolio->portfolio_image_url }}"
                                                        class="card-img-top" alt="portfolio">
                                                @else
                                                    <img src="{{ asset('storage/portfolios/' . $portfolio->portfolio_image_url) }}"
                                                        class="card-img-top" alt="portfolio">
                                                @endif
                                                <div class="card-body">
                                                    <h5 class="card-title" style="word-wrap:break-word">
                                                        {{ $portfolio->portfolio_title }}
                                                    </h5>
                                                    <p class="text-center mb-0">
                                                        ({{ $portfolio->portfolio_year }})
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <span>
                                                    {{ $portfolio->portfolio_desc }}
                                                </span>
                                                @if ($portfolio->portfolio_url != null)
                                                    <h4><a href="{{ $portfolio->portfolio_url }}">Go to link ></a></h4>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        @endforeach
                    </div>
                    {{-- See more button --}}
                    <h4 id="see-more">
                        <a href="{{ route('seeMorePortfolio') }}">
                            See More >>
                        </a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- End Projects Area -->
</div>
