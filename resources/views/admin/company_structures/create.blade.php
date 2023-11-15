@extends('admin.layouts.root-form')
@section('title')
Founders | Create
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
	<form method="POST" action="{{ route('founders.store') }}" enctype="multipart/form-data">
		@csrf
		<table id="table-form" class="w-100">
			<tr>
				<td>
					<label for="person_name">Name</label>
				</td>
				<td>
					<input type="text" class="form-control @error('person_name') is invalid @enderror" id="person_name"
						name="person_name" placeholder="Person Name">
					@if ($errors->has('person_name'))
					<span class="text-danger">{{ $errors->first('person_name') }}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>
					<label for="person_position">Position</label>
				</td>
				<td>
					<input type="text" class="form-control @error('person_position') is invalid @enderror"
						id="person_position" name="person_position" placeholder="Title/jabatan">
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
					<input type="file" class="form-control" id="person_image_url" name="person_image_url">
					@if ($errors->has('person_image_url'))
					<span class="text-danger">{{ $errors->first('person_image_url') }}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td class="d-flex justify-content-end">
					<button type="submit" class="btn-action-form" value="create_founder">Add founder</button>
				</td>
			</tr>
		</table>
	</form>
@endsection