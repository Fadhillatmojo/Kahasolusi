<div id="portfolios" class="portfolios-area default-padding">
    <div class="container-portfolios-title">
        <h5>PORTFOLIOS</h5>
        <h2>Our Recent Project</h2>
    </div>

    {{-- <div class="container-portofolios-content">
        <div class="card" style="width: 32%;flex-shrink: 0;">
            <div class="card-portfolios">
            <img src="assets/img/IDMC.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aplikasi Integrated Development Management Centre (IDMC)</h5>
                    <div class="portfolios-link">
                        <a href="#" class="btn btn-primary align-center">Visit Link</a>
                    </div>
                </div> 
            </div>
        </div>
    </div> --}}

    <div id="project" class="project-area overflow-hidden default-padding">
        <div class="container">
            <div class="project-items-area">
                <div class="masonary">
                    <div class="row row-cols-1 row-cols-lg-3" >
                        @foreach ($portfolios as $portfolio)
                            <div class="col d-flex justify-content-center">
                                <!-- Single Item -->
                                <div class="pf-item">
                                    <div class="card">
                                        <div class="project-style-two">
                                            <div class="cover-info">
                                                <img src="{{ $portfolio->portfolio_image_url }}" class="card-img-top" alt="portfolio">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        {{ $portfolio->portfolio_title }}
                                                    </h5>
                                                </div>
                                            </div>
                                            
                                            <div class="info">
                                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus iure repellat iste harum, asperiores excepturi nihil</span>
                                                <h4><a href="#">Link</a></h4>
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