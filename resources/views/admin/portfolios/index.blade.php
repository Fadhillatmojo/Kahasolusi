@extends('admin.layouts.root-admin')
@section('title')
    Portfolios
@endsection
@section('title-page')
    Portfolios
@endsection
@section('create-route')
    {{ route('create') }}
@endsection
@section('table')
<table class="table table-bordered">
    <thead class="table-light text-center">
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
            <td>{{ $portfolio->portfolio_title }}</td>
            <td>{{ $portfolio->portfolio_desc }}</td>
            <td>
                <img src="{{ $portfolio->portfolio_image_url }}" alt="portfolio" width="168" height="94">
            </td>
            <td>{{ $portfolio->portfolio_year }}</td>
            <td>{{ $portfolio->portfolio_url }}</td>
            <td>
            <a href=""><img src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
            <a href=""><img src="{{ asset('../adminassets/img/global/action/iconActionDelete.svg') }}"></a>
        </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection