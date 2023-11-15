@extends('admin.layouts.root-form')
@section('title')
    FAQs | Edit
@endsection
@section('titleForm')
    FAQs Page
@endsection
@section('routeback')
    {{ route('faqs.index') }}
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
    <form method="POST" action="{{ route('faqs.update', $faq->faq_id) }}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<table id="table-form" class="w-100">
			<tr>
				<td>
					<label for="faq_title">Question</label>
				</td>
				<td>
				<textarea class="form-control" placeholder="Answer" id="faq_title" name="faq_title" rows="3">{{ $faq->faq_title }}</textarea>
				@if ($errors->has('faq_title'))
					<span class="text-danger">{{ $errors->first('faq_title') }}</span>
				@endif
				</td>
			</tr>
			<tr>
				<td>
					<label for="faq_answer">Answer</label>
				</td>
				<td>
				<textarea class="form-control" placeholder="Answer" id="faq_answer" name="faq_answer" rows="3">{{ $faq->faq_answer }}</textarea>
				@if ($errors->has('faq_answer'))
					<span class="text-danger">{{ $errors->first('faq_answer') }}</span>
				@endif
				</td>
			</tr>
			
			<tr>
				<td>
				</td>
				<td class="d-flex justify-content-end">
					<button type="submit" class="btn-action-form" value="update_role">Update FAQ</button>
				</td>
			</tr>
		</table>
    </form>
@endsection