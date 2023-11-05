@extends('admin.layouts.root-admin')
@section('title')
    Roles
@endsection
@section('title-page')
    Roles
@endsection
@section('create-route')
    {{ route('roles.create') }}
@endsection
@section('table')
    <table class="table table-bordered">
        <thead class="table-light text-center align-middle">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td class="align-middle" style="font-weight: bold">{{ $role->role_name }}</td>
                    <td class="text-center align-middle">
                        <img src="{{ $role->role_image_url }}" alt="role" width="168" height="94">
                    </td>
                    <td class="text-center align-middle">
                        <a href="{{ route('roles.edit', $role->role_id) }}"><img src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
                        <a href=""><img src="{{ asset('../adminassets/img/global/action/iconActionDelete.svg') }}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $roles->links() }}
@endsection