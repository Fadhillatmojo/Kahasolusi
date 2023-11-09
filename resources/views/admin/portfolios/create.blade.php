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
        <div class="mb-3">
            <label for="portfolio_title" class="form-label">Title</label>
            <input type="text" class="form-control @error('portfolio_title') is invalid @enderror" id="portfolio_title" name="portfolio_title" placeholder="Title">
            @if ($errors->has('portfolio_title'))
                <span class="text-danger">{{ $errors->first('portfolio_title') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="portfolio_desc" class="form-label">Description</label>
            <textarea class="form-control" placeholder="Description" id="portfolio_desc" name="portfolio_desc"></textarea>
            <div id="descriptionHelp" class="form-text">Place Your Portfolio Description Here</div>
            @if ($errors->has('portfolio_desc'))
                <span class="text-danger">{{ $errors->first('portfolio_desc') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="portfolio_year" class="form-label">Year</label>
            <textarea class="form-control" placeholder="Year" id="portfolio_year" name="portfolio_year"></textarea>
            <div id="descriptionHelp" class="form-text">Place Your Portfolio Description Here</div>
            @if ($errors->has('portfolio_year'))
                <span class="text-danger">{{ $errors->first('portfolio_year') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="portfolio_url" class="form-label">Portfolio URL</label>
            <textarea class="form-control" placeholder="Description" id="portfolio_url" name="portfolio_url"></textarea>
            <div id="descriptionHelp" class="form-text">Portfolio Url</div>
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
        </div>
    </form>
@endsection