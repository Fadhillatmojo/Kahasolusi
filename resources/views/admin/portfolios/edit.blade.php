@extends('admin.layouts.root-form')
@section('title')
    Portfolios | Edit
@endsection
@section('titleForm')
    Portfolios Page
@endsection
@section('routeback')
    {{ route('portfolios.index') }}
@endsection
@section('form')
	@if(session('message'))
		<div id="popup-container">
			<div id="popup-box">
				<p class="mb-0 mt-2">{{ session('message') }}</p>
				<span id="close-popup" onclick="hidePopUp()">&times;</span>
			</div>
		</div>
		@push('scripts')
			<script>
				function hidePopUp() {
					// Sembunyikan pop-up
					document.getElementById('popup-container').style.display = 'none';
				}
			</script>
		@endpush
	@endif
    <form method="POST" action="{{ route('portfolios.update', $portfolio->portfolio_id) }}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<table id="table-form" class="w-100">
			<tr>
				<td>
					<label for="portfolio_title">Title</label>
				</td>
				<td>
					<input type="text" class="form-control @error('portfolio_title') is invalid @enderror" id="portfolio_title" name="portfolio_title" placeholder="Title" value="{{ $portfolio->portfolio_title }}">
					@if ($errors->has('portfolio_title'))
						<span class="text-danger">{{ $errors->first('portfolio_title') }}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>
					<label for="portfolio_desc">Description</label>
				</td>
				<td>
					<textarea class="form-control" placeholder="Description" id="portfolio_desc" name="portfolio_desc" rows="5">{{ $portfolio->portfolio_desc }}</textarea>
					@if ($errors->has('portfolio_desc'))
						<span class="text-danger">{{ $errors->first('portfolio_desc') }}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>
					<label for="portfolio_year">Year</label>
				</td>
				<td>
					<input class="form-control" type="year" placeholder="2023" min="1900" max="2120" id="portfolio_year" name="portfolio_year" value="{{ $portfolio->portfolio_year }}">
					@if ($errors->has('portfolio_year'))
						<span class="text-danger">{{ $errors->first('portfolio_year') }}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>
					<label for="portfolio_url">Portfolio URL</label>
				</td>
				<td>
				<textarea class="form-control" placeholder="Portfolio URL" id="portfolio_url" name="portfolio_url" rows="3">{{ $portfolio->portfolio_url }}</textarea>
				@if ($errors->has('portfolio_url'))
					<span class="text-danger">{{ $errors->first('portfolio_url') }}</span>
				@endif
				</td>
			</tr>
			<tr>
				<td>
					<label for="portfolio_image_url">Image</label>
				</td>
				<td>
				<div id="img-container" class="d-inline-block align-items-center py-2 px-3">
					@if (Str::contains($portfolio->portfolio_image_url, ['http', 'https']))
						<img id="preview-image" src="{{ $portfolio->portfolio_image_url }}" class="mb-2" alt="{{ $portfolio->portfolio_image_url }}" width="168" height="94">
					@else
						<img id="preview-image" src="{{ (  asset('storage/portfolios/' . $portfolio->portfolio_image_url)) }}" alt="{{ $portfolio->portfolio_image_url }}" width="168" height="94">
					@endif
					<label id="label-upload" for="img-upload" class="ms-3">
						<img src="{{ asset('../adminassets/img/global/action/iconUpload.svg') }}">
					</label>
					<input id="img-upload" type="file" class="d-none @error('portfolio_image_url') is-invalid @enderror" name="portfolio_image_url" onchange="document.getElementById('preview-image').src = window.URL.createObjectURL(this.files[0])">
					@if ($errors->has('portfolio_image_url'))
						<span class="tet-danger">{{ $errors->first('portfolio_image_url')}}</span>
					@endif
				</div>
				@if ($errors->has('portfolio_image_url'))
					<span class="text-danger">{{ $errors->first('portfolio_image_url') }}</span>
				@endif
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td class="d-flex justify-content-end">
					<button type="submit" class="btn-action-form" value="update_portfolio">Update Portfolio</button>
				</td>
			</tr>
		</table>
    </form>
@endsection