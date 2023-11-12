@extends('admin.layouts.root-form')
@section('title')
    Tools | Edit
@endsection
@section('titleForm')
    Tools Page
@endsection
@section('routeback')
    {{ route('tools.index') }}
@endsection
@section('form')
	{{-- memunculkan pop up kalo ada message --}}
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
    <form method="POST" action="{{ route('tools.update', $tool->tool_id) }}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<table id="table-form" class="w-100">
			<tr>
				<td>
					<label for="tool_image_url">tool Image<br>(258x110 is recomended)</label>
				</td>
				<td>
					<div id="img-container" class="d-inline-block align-items-center py-2 px-3">
						@if (Str::contains($tool->tool_image_url, ['http', 'https']))
							<img id="preview-image" src="{{ $tool->tool_image_url }}" class="mb-2" alt="{{ $tool->tool_image_url }}" width="258" height="110">
						@else
							<img id="preview-image" src="{{ (  asset('storage/tools/' . $tool->tool_image_url)) }}" alt="{{ $tool->tool_image_url }}" width="258" height="110">
						@endif
						<label id="label-upload" for="img-upload" class="ms-3">
							<img src="{{ asset('../adminassets/img/global/action/iconUpload.svg') }}">
						</label>
						<input id="img-upload" type="file" class="d-none @error('tool_image_url') is-invalid @enderror" name="tool_image_url" onchange="document.getElementById('preview-image').src = window.URL.createObjectURL(this.files[0])">
						@if ($errors->has('tool_image_url'))
							<span class="tet-danger">{{ $errors->first('tool_image_url')}}</span>
						@endif
					</div>
					@if ($errors->has('tool_image_url'))
						<span class="text-danger">{{ $errors->first('tool_image_url') }}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td class="d-flex justify-content-end">
					<button type="submit" class="btn-action-form" value="update_tool">Update tool</button>
				</td>
			</tr>
		</table>
    </form>
@endsection