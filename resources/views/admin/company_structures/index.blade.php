@extends('admin.layouts.root-admin')
@section('title')
Founders
@endsection
@section('title-page')
Founders
@endsection
@section('create-route')
{{ route('founders.create') }}
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
            <p>Anda yakin ingin menghapus Data ini?</p>
            <button class="me-2 py-2 px-3 btn-cancel" onclick="hideDeleteConfirmation()">Batal</button>
            <button id="btnDelete" class="btn btn-danger">Hapus</button>
        </div>
    </div>
</div>
{{-- end konfirmasi penghapusan --}}

<table class="table rounded-corner">
    <thead class="table text-center align-middle">
        <tr>
            <th scope="col" class="index">Position</th>
            <th scope="col" class="index">Image</th>
            <th scope="col" class="none-border-right index">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($founders as $founder)
        <tr>
            <td class="align-middle text-center index">{{ $founder->person_position }}</td>
            <td class="text-center align-middle index">
                @if (Str::contains($founder->person_image_url, ['http://', 'https://']))
                <img src="{{ $founder->person_image_url }}" alt="{{ $founder->person_image_url }}" width="250"
                    height="250">
                @else
                <img src="{{ (  asset('storage/founders/' . $founder->person_image_url)) }}"
                    alt="{{ $founder->person_image_url }}" width="250" height="250">
                @endif
            </td>
            <td class="text-center align-middle none-border-right index">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('founders.edit', $founder->person_id) }}"><img
                            src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
                    <form id="deleteForm_{{ $founder->person_id }}"
                        action="{{ route('founders.destroy', $founder->person_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" id="btn-delete"
                            onclick="showDeleteConfirmation('{{ $founder->person_id }}')"><img
                                src="{{ asset('../adminassets/img/global/action/iconActionDelete.svg') }}"></button>
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
            
            function showDeleteConfirmation(dataId) {
                document.getElementById('popup-container-confirm').style.display = 'flex';
                document.getElementById('confirmation-popup').style.display = 'block';
                document.getElementById('btnDelete').onclick = function() {
                    submitDeleteForm(dataId);
                };
            }

            function hideDeleteConfirmation(dataId) {
                document.getElementById('popup-container-confirm').style.display = 'none';
                document.getElementById('confirmation-popup').style.display = 'none';
            }

            function submitDeleteForm(dataId) {
                // Construct the form ID dynamically based on the portfolio ID
                var formId = 'deleteForm_' + dataId;
                // Submit the form with the constructed ID
                document.getElementById(formId).submit();
            }
</script>
@endpush

{{-- untuk pagination --}}
{{ $founders->links() }}
@endsection