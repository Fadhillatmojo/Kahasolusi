@extends('admin.layouts.root-form')
@section('title')
    Roles | Create
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
    <form method="POST" action="{{ route('roles.store') }}" enctype="multipart/form-data">
        @csrf
        <table id="table-form" class="w-100">
            <tr>
                <td>
                    <label for="role_name">Title</label>
                </td>
                <td>
                    <input type="text" class="form-control @error('role_name') is invalid @enderror" id="role_name" name="role_name" placeholder="Title">
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
                    <input type="file" class="form-control" id="role_image_url" name="role_image_url" value="">
                    @if ($errors->has('role_image_url'))
                        <span class="text-danger">{{ $errors->first('role_image_url') }}</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td class="d-flex justify-content-end">
                    <button type="submit" class="btn-action-form" value="create_role">Add Role</button>
                </td>
            </tr>
        </table>
    </form>
@endsection

