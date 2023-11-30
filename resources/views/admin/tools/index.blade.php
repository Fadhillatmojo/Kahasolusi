@extends('admin.layouts.root-admin')
@section('title')
Tools
@endsection
@section('title-page')
Tools
@endsection
@section('create-route')
{{ route('tools.create') }}
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
            <p>Anda yakin ingin menghapus tool ini?</p>
            <button class="me-2 py-2 px-3 btn-cancel" onclick="hideDeleteConfirmation()">Batal</button>
            <button id="btnDelete" class="btn btn-danger">Hapus</button>
        </div>
    </div>
</div>
{{-- end konfirmasi penghapusan --}}

{{-- table index tools --}}
<table class="table rounded-corner">
    <thead class="table text-center align-middle">
        <tr>
            <th scope="col" class="index">Title</th>
            <th scope="col" class="index">Description</th>
            <th scope="col" class="index">Image</th>
            <th scope="col" class="none-border-right index">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tools as $tool)
        <tr>
            <td class="text-center align-middle index" style="font-weight: bold;">
                {{ $tool->tool_title }}
            </td>
            <td class="text-center align-middle index">
                {{ $tool->tool_desc }}
            </td>
            <td class="text-center align-middle index">
                @if (Str::contains($tool->tool_image_url, ['http://', 'https://']))
                <img src="{{ $tool->tool_image_url }}" alt="{{ $tool->tool_image_url }}" width="100" height="100">
                @else
                <img src="{{ (  asset('storage/tools/' . $tool->tool_image_url)) }}" alt="{{ $tool->tool_image_url }}"
                    width="100" height="100">
                @endif
            </td>
            <td class="text-center align-middle none-border-right index">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('tools.edit', $tool->tool_id) }}"><img
                            src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
                    <form id="deleteForm_{{ $tool->tool_id }}" action="{{ route('tools.destroy', $tool->tool_id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" id="btn-delete"
                            onclick="showDeleteConfirmation('{{ $tool->tool_id }}')"><img
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
    
    function showDeleteConfirmation(toolId) {
        document.getElementById('popup-container-confirm').style.display = 'flex';
        document.getElementById('confirmation-popup').style.display = 'block';
        document.getElementById('btnDelete').onclick = function() {
            submitDeleteForm(toolId);
        };
    }

    function hideDeleteConfirmation(toolId) {
        document.getElementById('popup-container-confirm').style.display = 'none';
        document.getElementById('confirmation-popup').style.display = 'none';
    }

    function submitDeleteForm(toolId) {
        // Construct the form ID dynamically based on the portfolio ID
        var formId = 'deleteForm_' + toolId;
        // Submit the form with the constructed ID
        document.getElementById(formId).submit();
    }
</script>
@endpush
@endsection