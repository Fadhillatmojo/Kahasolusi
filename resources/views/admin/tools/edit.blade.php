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
				<label for="tool_title">Title</label>
			</td>
			<td>
				<input type="text" class="form-control @error('tool_title') is invalid @enderror" id="tool_title"
					name="tool_title" placeholder="Title" value="{{ $tool->tool_title }}">
				@if ($errors->has('tool_title'))
				<span class="text-danger">{{ $errors->first('tool_title') }}</span>
				@endif
			</td>
		</tr>
		<tr>
			<td>
				<label for="tool_desc">Description</label>
			</td>
			<td>
				<input type="text" class="form-control @error('tool_desc') is invalid @enderror" id="tool_desc"
					name="tool_desc" placeholder="Description" value="{{ $tool->tool_desc }}">
				@if ($errors->has('tool_desc'))
				<span class="text-danger">{{ $errors->first('tool_desc') }}</span>
				@endif
			</td>
		</tr>
		<tr>
			<td>
				<label for="tool_image_url">tool Image<br>(100x100 is recomended)</label>
			</td>
			<td>
				<div id="img-container" class="d-inline-block align-items-center py-2 px-3">
					@if (Str::contains($tool->tool_image_url, ['http', 'https']))
					<img id="preview-image" src="{{ $tool->tool_image_url }}" class="mb-2"
						alt="{{ $tool->tool_image_url }}" width="100" height="100">
					@else
					<img id="preview-image" src="{{ (  asset('storage/tools/' . $tool->tool_image_url)) }}"
						alt="{{ $tool->tool_image_url }}" width="100" height="100">
					@endif
					<label id="label-upload" for="img-upload" class="ms-3">
						<img src="{{ asset('../adminassets/img/global/action/iconUpload.svg') }}">
					</label>
					<input id="img-upload" type="file" class="d-none @error('tool_image_url') is-invalid @enderror"
						name="tool_image_url"
						onchange="document.getElementById('preview-image').src = window.URL.createObjectURL(this.files[0])">
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