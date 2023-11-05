@extends('admin.layouts.root-admin')
@section('title')
    Testimonials
@endsection
@section('title-page')
    Testimonials
@endsection
@section('create-route')
    {{ route('testimonials.create') }}
@endsection
@section('table')
    <table class="table table-bordered">
        <thead class="table-light text-center align-middle">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Rate</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $testimonial)
                <tr>
                    <td class="align-middle" style="font-weight: bold">{{ $testimonial->testimonial_client }}</td>
                    <td class="align-middle">{{ $testimonial->testimonial_desc }}</td>
                    <td class="text-center align-middle">
                        @for ($i = 0; $i < $testimonial->testimonial_rate; $i++)
                            <img src="{{ asset('../adminassets/img/global/iconStar.svg') }}" alt="">
                        @endfor
                        <br>
                        ({{ $testimonial->testimonial_rate }})
                    </td>
                    <td class="text-center align-middle">
                        <img src="{{ $testimonial->testimonial_image_url }}" alt="testimonial" width="168" height="94">
                    </td>
                    <td class="text-center align-middle">
                        <a href="{{ route('testimonials.edit', $testimonial->testimonial_id) }}"><img src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
                        <a href=""><img src="{{ asset('../adminassets/img/global/action/iconActionDelete.svg') }}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $testimonials->links() }}
@endsection