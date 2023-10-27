@extends('component.root')
@section('body')
    @include('component.hero')
    <div class="container">
        @include('component.about')
    
        @include('component.portfolios')
        
        @include('component.roles')
    
        @include('component.tools')
    
        @include('component.founders')
        
        @include('component.faqs')
        
        @include('component.testimonials')
        
        @include('component.contact')

    </div>
@endsection