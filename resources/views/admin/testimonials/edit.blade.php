@extends('admin.layouts.root-form')
@section('title')
    Testimonial | Edit
@endsection
@section('titleForm')
    Testimonial Page
@endsection
@section('routeback')
    {{ route('testimonials.index') }}
@endsection
@section('form')
	{{-- pop up message --}}
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
	{{-- End pop up message --}}

    <form method="POST" action="{{ route('testimonials.update', $testimonial->testimonial_id) }}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<table id="table-form" class="w-100">
			<tr>
				<td>
				    <label for="testimonial_client">Client Name</label>
				</td>
				<td>
				    <input type="text" class="form-control @error('testimonial_client') is invalid @enderror" id="testimonial_client" name="testimonial_client" placeholder="Client Name" value="{{ $testimonial->testimonial_client }}">
				    @if ($errors->has('testimonial_client'))
					   <span class="text-danger">{{ $errors->first('testimonial_client') }}</span>
				    @endif
				</td>
			</tr>
			<tr>
				<td>
				    <label for="testimonial_desc">Description</label>
				</td>
				<td>
				    <textarea class="form-control" placeholder="Description" id="testimonial_desc" name="testimonial_desc" rows="5">{{ $testimonial->testimonial_desc }}</textarea>
				    @if ($errors->has('testimonial_desc'))
					   <span class="text-danger">{{ $errors->first('testimonial_desc') }}</span>
				    @endif
				</td>
			</tr>
			<tr>
				<td>
				    <label for="testimonial_rate">Rating</label>
				</td>
				<td>
					<table id="table-radio" class="">
						<tr>
							@for ($i = 5; $i >= 1; $i--)
								<td>
									<input type="radio" id="star{{ $testimonial->testimonial_rate }}" name="testimonial_rate" value="{{ $i }}" {{ $testimonial->testimonial_rate == $i ? 'checked': '' }}>
								</td>
							@endfor
						</tr>
						<tr>
							@for ($i = 5; $i >= 1; $i--)
								<td>
									<label for="star{{ $testimonial->testimonial_rate }}">{{ $i }}</label>
								</td>
							@endfor
						</tr>
					</table>
					@if ($errors->has('testimonial_rate'))
						<span class="text-danger">{{ $errors->first('testimonial_rate') }}</span>
					@endif
				</td>
			 </tr>

			<tr>
				<td>
					<label for="testimonial_image_url">Testimonial Image<br>(150x150 is recomended)</label>
				</td>
				<td>
					<div id="img-container" class="d-inline-block align-items-center py-2 px-3">
						@if (Str::contains($testimonial->testimonial_image_url, ['http', 'https']))
							<img id="preview-image" src="{{ $testimonial->testimonial_image_url }}" class="mb-2" alt="{{ $testimonial->testimonial_image_url }}" width="150" height="150">
						@else
							<img id="preview-image" src="{{ (  asset('storage/testimonials/' . $testimonial->testimonial_image_url)) }}" alt="{{ $testimonial->testimonial_image_url }}" width="150" height="150">
						@endif
						<label id="label-upload" for="img-upload" class="ms-3">
							<img src="{{ asset('../adminassets/img/global/action/iconUpload.svg') }}">
						</label>
						<input id="img-upload" type="file" class="d-none @error('testimonial_image_url') is-invalid @enderror" name="testimonial_image_url" onchange="document.getElementById('preview-image').src = window.URL.createObjectURL(this.files[0])">
						@if ($errors->has('testimonial_image_url'))
							<span class="tet-danger">{{ $errors->first('testimonial_image_url')}}</span>
						@endif
					</div>
					@if ($errors->has('testimonial_image_url'))
						<span class="text-danger">{{ $errors->first('testimonial_image_url') }}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td class="d-flex justify-content-end">
					<button type="submit" class="btn-action-form" value="update_testimonial">Update testimonial</button>
				</td>
			</tr>
		</table>
    </form>
@endsection