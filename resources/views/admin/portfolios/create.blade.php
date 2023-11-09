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
    <form method="POST" action="{{ route('portfolios.store') }}" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td >
                    <label for="portfolio_title" class="form-label">Title</label>
                </td>
                <td class="">
                    <input type="text" class="form-control @error('portfolio_title') is invalid @enderror" id="portfolio_title" name="portfolio_title" placeholder="Title">
                    @if ($errors->has('portfolio_title'))
                        <span class="text-danger">{{ $errors->first('portfolio_title') }}</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label for="portfolio_desc" class="form-label">Description</label>
                </td>
                <td class="">
                    <textarea class="form-control" placeholder="Description" id="portfolio_desc" name="portfolio_desc" rows="5"></textarea>
                    @if ($errors->has('portfolio_desc'))
                        <span class="text-danger">{{ $errors->first('portfolio_desc') }}</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label for="portfolio_year" class="form-label">Year</label>
                </td>
                <td>
                    <input type="year" placeholder="YYYY" min="1999" max="2500" id="portfolio_year" name="portfolio_year">
                    @if ($errors->has('portfolio_year'))
                        <span class="text-danger">{{ $errors->first('portfolio_year') }}</span>
                    @endif
                </td>
            </tr>
        </table>
    </form>
    {{-- <div class="mb-3">
        
        
    </div>
    <div class="mb-3">
        <label for="portfolio_desc" class="form-label">Description</label>
        <textarea class="form-control" placeholder="Description" id="portfolio_desc" name="portfolio_desc" rows="5"></textarea>
        @if ($errors->has('portfolio_desc'))
            <span class="text-danger">{{ $errors->first('portfolio_desc') }}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="portfolio_year" class="form-label">Year</label>
        <input type="year" placeholder="YYYY" min="1999" max="2500" id="portfolio_year" name="portfolio_year">
         --}}
        {{-- <input class="form-control" id="portfolio_year" name="portfolio_year" type="date"> --}}
        {{-- @if ($errors->has('portfolio_year'))
            <span class="text-danger">{{ $errors->first('portfolio_year') }}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="portfolio_url" class="form-label">Portfolio URL</label>
        <textarea class="form-control" placeholder="Portfolio URL" id="portfolio_url" name="portfolio_url" rows="3"></textarea>
        @if ($errors->has('portfolio_url'))
            <span class="text-danger">{{ $errors->first('portfolio_url') }}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="portfolio_image_url" class="form-label">Photo Portfolio</label>
        <input type="file" class="form-control" id="" name="portfolio_image_url" value="">
        @if ($errors->has('portfolio_image_url'))
            <span class="text-danger">{{ $errors->first('portfolio_image_url') }}</span>
        @endif
    </div>
    
    <div class="d-flex flex-column w-100 justify-content-evenly mt-4 align-items-center">
        <button type="submit" class="btn btn-primary" value="create_portfolio">Add Portfolio</button>
    </div> --}}
@endsection