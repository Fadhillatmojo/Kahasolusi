@extends('admin.layouts.root-form')
@section('title')
Tools | Create
@endsection
@section('titleForm')
Tools Page
@endsection
@section('routeback')
{{ route('tools.index') }}
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
<form method="POST" action="{{ route('tools.store') }}" enctype="multipart/form-data">
    @csrf
    <table id="table-form" class="w-100">
        <tr>
            <td>
                <label for="tool_title">Title</label>
            </td>
            <td>
                <input type="text" class="form-control @error('tool_title') is invalid @enderror" id="tool_title"
                    name="tool_title" placeholder="Title">
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
                    name="tool_desc" placeholder="Description">
                @if ($errors->has('tool_desc'))
                <span class="text-danger">{{ $errors->first('tool_desc') }}</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                <label for="tool_image_url">Tool Image<br>(100x100 is recomended)</label>
            </td>
            <td>
                <input type="file" class="form-control" id="tool_image_url" name="tool_image_url">
                @if ($errors->has('tool_image_url'))
                <span class="text-danger">{{ $errors->first('tool_image_url') }}</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td class="d-flex justify-content-end">
                <button type="submit" class="btn-action-form" value="create_tool">Add tool</button>
            </td>
        </tr>
    </table>
</form>
@endsection