@extends('component.root')
@section('body')
<div class="container">
	<div id="portfolios" class="portfolios-area default-padding">
		<div class="container-portfolios-title">
			<h2>Proofs/Portfolios</h2>
		</div>
		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
				aria-expanded="false">
				Dropdown button
			</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
			</ul>
		</div>

		{{-- Section row portfolio --}}
		<div class="row row-cols-1 row-cols-lg-3">
			@foreach ($portfolios as $portfolio)
			<div class="col d-flex justify-content-center">
				<!-- Single Item -->
				<div class="pf-item">
					<div class="card">
						<div class="project-style-two">
							<div class="cover-info">
								@if (Str::contains($portfolio->portfolio_image_url, ['http://', 'https://']))
								<img src="{{ $portfolio->portfolio_image_url }}" class="card-img-top"
									alt="portfolio">
								@else
								<img src="{{ asset('storage/portfolios/' . $portfolio->portfolio_image_url) }}"
									class="card-img-top" alt="portfolio">
								@endif
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
		{{-- END Section row portfolio --}}

		{{-- start section pagination --}}
		<div class="mt-5">
			{{ $portfolios->links() }}
		</div>
		{{-- end section pagination --}}
	</div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
	integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
	integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
@endpush