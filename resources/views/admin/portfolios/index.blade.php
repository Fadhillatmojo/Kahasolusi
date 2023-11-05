@extends('admin.layouts.root-admin')
@section('title')
    Portfolios
@endsection
@section('title-page')
    Portfolios
@endsection
@section('create-route')
    {{ route('portfolios.create') }}
@endsection
@section('table')
    <table class="table table-bordered">
        <thead class="table-light text-center align-middle">
            <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Years Added</th>
            <th scope="col">Link</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
            <tr>
                <td class="align-middle" style="font-weight: bold">{{ $portfolio->portfolio_title }}</td>
                <td>{{ $portfolio->portfolio_desc }}</td>
                <td class="align-middle">
                    <img src="{{ $portfolio->portfolio_image_url }}" alt="portfolio" width="168" height="94">
                </td>
                <td class="align-middle text-center">{{ $portfolio->portfolio_year }}</td>
                <td class="align-middle"><a href="{{ $portfolio->portfolio_url }}" target="_blank">{{ $portfolio->portfolio_url }}</a></td>
                <td class="text-center align-middle">
                    <a href="{{ route('portfolios.edit', $portfolio->portfolio_id) }}"><img src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
                    <a href=""><img src="{{ asset('../adminassets/img/global/action/iconActionDelete.svg') }}"></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $portfolios->links() }}
@endsection