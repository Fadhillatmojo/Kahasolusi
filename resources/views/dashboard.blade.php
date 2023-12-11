@extends('component.root')
@section('body')
{{-- Bagian message popup --}}
@if (session('message'))
<div id="popup-container">
    <div id="popup-box">
        <p class="mb-0 mt-2 text-white">{{ session('message') }}</p>
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

@include('component.hero')

<div class="container-fluid overflow-hidden">
    <div class="container">
        @include('component.about')

        @include('component.portfolios')

        @include('component.roles')
    </div>
</div>
@include('component.tools')
<div class="container-fluid overflow-hidden">
    <div class="container">
        @include('component.founders')

        @include('component.faqs')

        @include('component.testimonials')

        @include('component.contact')
    </div>
</div>
@endsection