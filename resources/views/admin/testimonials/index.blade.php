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
{{-- Bagian message popup --}}
@if(session('message'))
    <div id="popup-container">
        <div id="popup-box">
            <p class="mb-0 mt-2">{{ session('message') }}</p>
            <span id="close-popup" onclick="hidePopUp()">&times;</span>
        </div>
    </div>
    @endif
    {{-- end bagian message popup --}}

    {{-- Bagian untuk konfirmasi penghapusan --}}
    <div id="popup-container-confirm">
        <div id="confirmation-popup" class="confirmation-popup">
            <div class="confirmation-content">
                <p>Anda yakin ingin menghapus Portfolio ini?</p>
                <button class="me-2 py-2 px-3 btn-cancel" onclick="hideDeleteConfirmation()">Batal</button>
                <button id="btnDelete" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
    {{-- end konfirmasi penghapusan --}}

    {{-- Table testimonials --}}
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
                    <td class="align-middle text-center" style="font-weight: bold">{{ $testimonial->testimonial_client }}</td>
                    <td class="align-middle">{{ $testimonial->testimonial_desc }}</td>
                    <td class="text-center align-middle">
                        @for ($i = 0; $i < $testimonial->testimonial_rate; $i++)
                            <img src="{{ asset('../adminassets/img/global/iconStar.svg') }}" alt="">
                        @endfor
                        <br>
                        ({{ $testimonial->testimonial_rate }})
                    </td>
                    <td class="align-middle text-center">
                        @if (Str::contains($testimonial->testimonial_image_url, ['http://', 'https://']))
                            <img src="{{ $testimonial->testimonial_image_url }}" alt="{{ $testimonial->testimonial_image_url }}" width="150" height="150">
                        @else
                            <img src="{{ (  asset('storage/testimonials/' . $testimonial->testimonial_image_url)) }}" alt="{{ $testimonial->testimonial_image_url }}" width="150" height="150">
                        @endif
                    </td>
                    <td class="text-center align-middle">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('testimonials.edit', $testimonial->testimonial_id) }}"><img src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
                            <form id="deleteForm_{{ $testimonial->testimonial_id }}" action="{{ route('testimonials.destroy', $testimonial->testimonial_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" id="btn-delete" onclick="showDeleteConfirmation('{{ $testimonial->testimonial_id }}')"><img src="{{ asset('../adminassets/img/global/action/iconActionDelete.svg') }}"></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- scripts js --}}
    @push('scripts')
        <script>
            function hidePopUp() {
                // Sembunyikan pop-up
                document.getElementById('popup-container').style.display = 'none';
            }
            function showDeleteConfirmation(portfolioId) {
                document.getElementById('popup-container-confirm').style.display = 'flex';
                document.getElementById('confirmation-popup').style.display = 'block';
                document.getElementById('btnDelete').onclick = function() {
                    submitDeleteForm(portfolioId);
                };
            }

            function hideDeleteConfirmation(portfolioId) {
                document.getElementById('popup-container-confirm').style.display = 'none';
                document.getElementById('confirmation-popup').style.display = 'none';
            }

            function submitDeleteForm(portfolioId) {
                // Construct the form ID dynamically based on the portfolio ID
                var formId = 'deleteForm_' + portfolioId;
                // Submit the form with the constructed ID
                document.getElementById(formId).submit();
            }
        </script>
    @endpush
    {{ $testimonials->links() }}
@endsection