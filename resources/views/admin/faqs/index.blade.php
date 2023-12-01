@extends('admin.layouts.root-admin')
@section('title')
FAQs
@endsection
@section('title-page')
FAQs
@endsection
@section('create-route')
{{ route('faqs.create') }}
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
            <p>Anda yakin ingin menghapus FAQ ini?</p>
            <button class="me-2 py-2 px-3 btn-cancel" onclick="hideDeleteConfirmation()">Batal</button>
            <button id="btnDelete" class="btn btn-danger">Hapus</button>
        </div>
    </div>
</div>
{{-- end konfirmasi penghapusan --}}

<table class="table rounded-corner">
    <thead class="table text-center align-middle">
        <tr>
            <th scope="col" class="index">Question</th>
            <th scope="col" class="index">Answer</th>
            <th scope="col" class="none-border-right index">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($faqs as $faq)
        <tr>
            <td class="align-middle index" style="font-weight: bold">{{ $faq->faq_title }}</td>
            <td class="align-middle index">{{ $faq->faq_answer }}</td>
            <td class="text-center align-middle none-border-right index">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('faqs.edit', $faq->faq_id) }}">
                        <img src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}">
                    </a>
                    <form id="deleteForm_{{ $faq->faq_id }}" action="{{ route('faqs.destroy', $faq->faq_id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" id="btn-delete"
                            onclick="showDeleteConfirmation('{{ $faq->faq_id }}')"><img
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
    function showDeleteConfirmation(faqId) {
        document.getElementById('popup-container-confirm').style.display = 'flex';
        document.getElementById('confirmation-popup').style.display = 'block';
        document.getElementById('btnDelete').onclick = function() {
            submitDeleteForm(faqId);
        };
    }

    function hideDeleteConfirmation(faqId) {
        document.getElementById('popup-container-confirm').style.display = 'none';
        document.getElementById('confirmation-popup').style.display = 'none';
    }

    function submitDeleteForm(faqId) {
        // Construct the form ID dynamically based on the portfolio ID
        var formId = 'deleteForm_' + faqId;
        // Submit the form with the constructed ID
        document.getElementById(formId).submit();
    }
</script>
@endpush
{{ $faqs->links() }}
@endsection