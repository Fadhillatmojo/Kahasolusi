@extends('component.root')
@section('body')
<div class="container">
	<div id="portfolios" class="portfolios-area default-padding">
		<div class="container-portfolios-title">
		    <h5>PORTFOLIOS</h5>
		    <h2>Our Recent Project</h2>
		</div>
	 
		{{--  Ini aku udah nyoba yang ngambil data dari si model via controller dashboardclientcontroller  --}}
		<div class="row row-cols-1 row-cols-lg-3" >
		    @foreach ($portfolios as $portfolio)
			   <div class="col d-flex justify-content-center">
				  <div class="card">
					 <div class="card-portfolios">
						<img src="{{ $portfolio->portfolio_image_url }}" class="card-img-top" alt="portfolio">
						<div class="card-body">
						    <h5 class="card-title">
							   {{ $portfolio->portfolio_title }}
						    </h5>
						</div> 
					 </div>
				  </div>
			   </div>
			@endforeach
		</div>
		<div class="mt-5">
			{{ $portfolios->links() }}
		</div>
	</div>
</div>
@endsection