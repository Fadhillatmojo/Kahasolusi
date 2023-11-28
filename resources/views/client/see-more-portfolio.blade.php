@extends('component.root')
@section('body')
<div class="container">
	<div id="portfolios" class="portfolios-area default-padding">
		<div class="header-more-porto row pb-5">
			<div class="col-lg-3 col-md-2 col-sm-0">
			</div>
			<div class="col-lg-6 col-md-8 col-sm-12">
				<h2 class="text-center">Proofs/Portfolios</h2>
			</div>
			<div class="col-lg-3 col-md-2 col-sm-0">
				<div class="d-flex justify-content-end">
					<div class="dropdown">
						<button class="dropdown-toggle py-2 px-3 rounded text-white" type="button"
							data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #F16724">
							Sort by Year
							<svg width="36" height="34" viewBox="0 0 36 34" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M22.4641 21.2691L24.8185 19.124L25.8608 20.0736L22.2488 23.3645L21.7269 23.84L21.2065 23.3658L17.5945 20.075L18.6369 19.124L20.9898 21.2691V10.3838H22.4641V21.2691ZM13.7659 12.6632V23.5485H15.2401V12.6632L17.5945 14.8083L18.6369 13.8586L15.0249 10.5678L14.5015 10.0923L13.9796 10.5678L10.3691 13.8586L11.4115 14.8083L13.7659 12.6632Z"
									fill="white" />
							</svg>
							<svg width="12" height="6" viewBox="0 0 12 6" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M0.642578 0.500488L6.19203 5.50049L11.7415 0.500488H0.642578Z"
									fill="white" />
							</svg>
						</button>
						<ul class="dropdown-menu w-100">
							<li>
								<a class="dropdown-item" href="{{ URL::current().'?sort=year_asc'}}">
									Ascending
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="{{ URL::current().'?sort=year_desc' }}">
									Descending
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
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