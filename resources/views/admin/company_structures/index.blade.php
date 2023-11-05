@extends('admin.layouts.root-admin')
@section('title')
    Founders
@endsection
@section('title-page')
    Founders
@endsection
@section('create-route')
    {{ route('founders.create') }}
@endsection
@section('table')
    <table class="table table-bordered">
        <thead class="table-light text-center align-middle">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($founders as $founder)
                <tr>
                    <td class="align-middle" style="font-weight: bold">{{ $founder->person_name }}</td>
                    <td class="align-middle">{{ $founder->person_position }}</td>
                    <td class="text-center align-middle">
                        <img src="{{ $founder->person_image_url }}" alt="founder" width="168" height="94">
                    </td>
                    <td class="text-center align-middle">
                        <a href="{{ route('founders.edit', $founder->person_id) }}"><img src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
                        <a href=""><img src="{{ asset('../adminassets/img/global/action/iconActionDelete.svg') }}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $founders->links() }}
@endsection