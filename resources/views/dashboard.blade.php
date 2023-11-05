@extends('component.root')
@section('body')
    @include('component.hero')
    <div class="container-fluid">
        <div class="container">
            @include('component.about')
        
            @include('component.portfolios')
            
            @include('component.roles')
        </div>
    
        @include('component.tools')
        <div class="container">
            @include('component.founders')
            
            @include('component.faqs')
            
            @include('component.testimonials')
            
            @include('component.contact')

        </div>

    </div>
@endsection