@extends('component.root')
@section('body')
<!-- Start 404 
    ============================================= -->
<div class="error-page-area default-padding text-center">
    <div class="container">
        <div class="error-box">
            <div class="row">
                <div class="col-lg-8">
                    <h1>404</h1>
                    {{-- <span><img src="{{ asset('assets/img/illustration/10.png') }}" alt="illustration"></span> --}}
                    <h2>Sorry Page Was Not Found!</h2>
                    <p>
                        Oops! The page you're trying to reach at Kahasolusi seems to have vanished. Double-check the
                        URL or explore other sections of the site.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End 404 -->
@endsection