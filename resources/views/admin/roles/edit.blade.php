@extends('admin.layouts.root-form')
@section('title')
    Roles | Edit
@endsection
@section('titleForm')
    Roles Page
@endsection
@section('routeback')
    {{ route('roles.index') }}
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
    <form method="POST" action="{{ route('roles.update', $role->role_id) }}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<table id="table-form" class="w-100">
			<tr>
				<td>
				    <label for="role_name">Title</label>
				</td>
				<td>
				    <input type="text" class="form-control @error('role_name') is invalid @enderror" id="role_name" name="role_name" placeholder="Title" value="{{ $role->role_name }}">
				    @if ($errors->has('role_name'))
					   <span class="text-danger">{{ $errors->first('role_name') }}</span>
				    @endif
				</td>
			</tr>
			<tr>
				<td>
					<label for="role_image_url">Role Image<br>(150x150 is recomended)</label>
				</td>
				<td>
					<div id="img-container" class="d-inline-block align-items-center py-2 px-3">
						@if (Str::contains($role->role_image_url, ['http', 'https']))
							<img id="preview-image" src="{{ $role->role_image_url }}" class="mb-2" alt="{{ $role->role_image_url }}" width="150" height="150">
						@else
							<img id="preview-image" src="{{ (  asset('storage/roles/' . $role->role_image_url)) }}" alt="{{ $role->role_image_url }}" width="150" height="150">
						@endif
						<label id="label-upload" for="img-upload" class="ms-3">
							<img src="{{ asset('../adminassets/img/global/action/iconUpload.svg') }}">
						</label>
						<input id="img-upload" type="file" class="d-none @error('role_image_url') is-invalid @enderror" name="role_image_url" onchange="document.getElementById('preview-image').src = window.URL.createObjectURL(this.files[0])">
						@if ($errors->has('role_image_url'))
							<span class="tet-danger">{{ $errors->first('role_image_url')}}</span>
						@endif
					</div>
					@if ($errors->has('role_image_url'))
						<span class="text-danger">{{ $errors->first('role_image_url') }}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td class="d-flex justify-content-end">
					<button type="submit" class="btn-action-form" value="update_role">Update Role</button>
				</td>
			</tr>
		</table>
    </form>
@endsection