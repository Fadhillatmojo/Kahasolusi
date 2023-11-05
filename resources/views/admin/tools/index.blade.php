@extends('admin.layouts.root-admin')
@section('title')
    Tools
@endsection
@section('title-page')
    Tools
@endsection
@section('create-route')
    {{ route('tools.create') }}
@endsection
@section('table')
    <table class="table table-bordered">
        <thead class="table-light text-center align-middle">
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tools as $tool)
                <tr>
                    <td class="text-center align-middle">
                        <img src="{{ $tool->tool_image_url }}" alt="tool" width="168" height="94">
                    </td>
                    <td class="text-center align-middle">
                        <a href="{{ route('tools.edit', $tool->tool_id) }}"><img src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
                        <a href=""><img src="{{ asset('../adminassets/img/global/action/iconActionDelete.svg') }}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection