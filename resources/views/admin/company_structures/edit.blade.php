@extends('admin.layouts.root-form')
@section('title')
Founders | Edit
@endsection
@section('titleForm')
Founders Page
@endsection
@section('routeback')
{{ route('founders.index') }}
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
<form method="POST" action="{{ route('founders.update', $founder->person_id) }}" enctype="multipart/form-data">
	@method('PUT')
	@csrf
	<table id="table-form" class="w-100">
		<tr>
			<td>
				<label for="person_position">Position</label>
			</td>
			<td>
				<input type="text" class="form-control @error('person_position') is invalid @enderror"
					id="person_position" name="person_position" placeholder="Position"
					value="{{ $founder->person_position }}">
				@if ($errors->has('person_position'))
				<span class="text-danger">{{ $errors->first('person_position') }}</span>
				@endif
			</td>
		</tr>
		<tr>
			<td>
				<label for="person_image_url">Founder Image<br>(250x250 is recomended)</label>
			</td>
			<td>
				<div id="img-container" class="d-inline-block align-items-center py-2 px-3">
					@if (Str::contains($founder->person_image_url, ['http', 'https']))
					<img id="preview-image" src="{{ $founder->person_image_url }}" class="mb-2"
						alt="{{ $founder->person_image_url }}" width="150" height="150">
					@else
					<img id="preview-image" src="{{ (  asset('storage/founders/' . $founder->person_image_url)) }}"
						alt="{{ $founder->person_image_url }}" width="150" height="150">
					@endif
					<label id="label-upload" for="img-upload" class="ms-3">
						<img src="{{ asset('../adminassets/img/global/action/iconUpload.svg') }}">
					</label>
					<input id="img-upload" type="file"
						class="d-none @error('person_image_url') is-invalid @enderror" name="person_image_url"
						onchange="document.getElementById('preview-image').src = window.URL.createObjectURL(this.files[0])">
					@if ($errors->has('person_image_url'))
					<span class="tet-danger">{{ $errors->first('person_image_url')}}</span>
					@endif
				</div>
				@if ($errors->has('person_image_url'))
				<span class="text-danger">{{ $errors->first('person_image_url') }}</span>
				@endif
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td class="d-flex justify-content-end">
				<button type="submit" class="btn-action-form" value="update_founder">Update Founder</button>
			</td>
		</tr>
	</table>
</form>
@endsection