@extends('component.root')
@section('body')
<div class="container">
	<div id="portfolios" class="portfolios-area default-padding">
		<div class="container-portfolios-title">
		    <h5>PORTFOLIOS</h5>
		    <h2>Our Recent Project</h2>
		</div>
	 
		{{-- Section row portfolio --}}
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
							    <span>
								    {{ $portfolio->portfolio_desc }}
								</span>
							    <h4><a href="{{ $portfolio->portfolio_url }}" target="_blank">Go to link ></a></h4>
							</div>
						 </div>
					  </div>
					</div>
				   <!-- End Single Item -->
			    </div>
			@endforeach
		</div>
		{{-- END Section row portfolio --}}

		{{-- start section pagination --}}
		<div class="mt-5">
			{{ $portfolios->links() }}
		</div>
		{{-- end section pagination --}}
	</div>
</div>
@endsection