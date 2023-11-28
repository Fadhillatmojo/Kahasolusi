@extends('admin.layouts.root-form')
@section('title')
Testimonials | Create
@endsection
@section('titleForm')
Testimonials Page
@endsection
@section('routeback')
{{ route('testimonials.index') }}
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
<form method="POST" action="{{ route('testimonials.store') }}" enctype="multipart/form-data">
    @csrf
    <table id="table-form" class="w-100">
        <tr>
            <td>
                <label for="testimonial_client">Nama</label>
            </td>
            <td>
                <input type="text" class="form-control @error('testimonial_client') is invalid @enderror"
                    id="testimonial_client" name="testimonial_client" placeholder="Client Name">
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
                <textarea class="form-control" placeholder="Description" id="testimonial_desc" name="testimonial_desc"
                    rows="5"></textarea>
                @if ($errors->has('testimonial_desc'))
                <span class="text-danger">{{ $errors->first('testimonial_desc') }}</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                <label for="testimonial_image_url">Image Testimonial<br>(150x150 is recomended)</label>
            </td>
            <td>
                <input type="file" class="form-control" id="testimonial_image_url" name="testimonial_image_url"
                    value="">
                @if ($errors->has('testimonial_image_url'))
                <span class="text-danger">{{ $errors->first('testimonial_image_url') }}</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td class="d-flex justify-content-end">
                <button type="submit" class="btn-action-form" value="create_testimonial">Add Testimonial</button>
            </td>
        </tr>
    </table>
</form>
@endsection