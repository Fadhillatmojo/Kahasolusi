@extends('component.root')
@section('body')
    <!-- Start 404 
    ============================================= -->
    <div class="error-page-area default-padding text-center">
        <div class="container">
            <div class="error-box">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>4<span><img src="{{ asset('assets/img/illustration/10.png') }}" alt="illustration"></span>4</h1>
                        <h2>Sorry Page Was Not Found!</h2>
                        <p>
                            Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous it. Songs he on an widen me event truth.
                        </p>
                        {{--  <div class="search">
                            <div class="input-group">
                                <form action="#">
                                    <input type="text" placeholder="Search" class="form-control" name="text">
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>  
                                </form>
                            </div>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->
@endsection