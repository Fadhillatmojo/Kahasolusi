@extends('admin.layouts.root-form')
@section('title')
    Portfolios | Create
@endsection
@section('titleForm')
    Portfolios Page
@endsection
@section('routeback')
    {{ route('portfolios.index') }}
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
    <form method="POST" action="{{ route('portfolios.store') }}" enctype="multipart/form-data">
        @csrf
        <table id="table-form" class="w-100">
            <tr>
                <td>
                    <label for="portfolio_title">Title</label>
                </td>
                <td>
                    <input type="text" class="form-control @error('portfolio_title') is invalid @enderror" id="portfolio_title" name="portfolio_title" placeholder="Title">
                    @if ($errors->has('portfolio_title'))
                        <span class="text-danger">{{ $errors->first('portfolio_title') }}</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label for="portfolio_desc">Description</label>
                </td>
                <td>
                    <textarea class="form-control" placeholder="Description" id="portfolio_desc" name="portfolio_desc" rows="5"></textarea>
                    @if ($errors->has('portfolio_desc'))
                        <span class="text-danger">{{ $errors->first('portfolio_desc') }}</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label for="portfolio_year">Year</label>
                </td>
                <td>
                    <input class="form-control" type="year" placeholder="2023" min="1900" max="2120" id="portfolio_year" name="portfolio_year">
                    @if ($errors->has('portfolio_year'))
                        <span class="text-danger">{{ $errors->first('portfolio_year') }}</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label for="portfolio_url">Portfolio URL</label>
                </td>
                <td>
                    <textarea class="form-control" placeholder="Portfolio URL" id="portfolio_url" name="portfolio_url" rows="3"></textarea>
                    @if ($errors->has('portfolio_url'))
                        <span class="text-danger">{{ $errors->first('portfolio_url') }}</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label for="portfolio_image_url">Photo Portfolio</label>
                </td>
                <td>
                    <input type="file" class="form-control" id="" name="portfolio_image_url" value="">
                    @if ($errors->has('portfolio_image_url'))
                        <span class="text-danger">{{ $errors->first('portfolio_image_url') }}</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td class="d-flex justify-content-end">
                    <button type="submit" class="btn-action-form" value="create_portfolio">Add Portfolio</button>
                </td>
            </tr>
        </table>
    </form>
@endsection

