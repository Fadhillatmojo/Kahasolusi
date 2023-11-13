@extends('admin.layouts.root-admin')
@section('title')
    Roles
@endsection
@section('title-page')
    Roles
@endsection
@section('create-route')
    {{ route('roles.create') }}
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
                <p>Anda yakin ingin menghapus Role ini?</p>
                <button class="me-2 py-2 px-3 btn-cancel" onclick="hideDeleteConfirmation()">Batal</button>
                <button id="btnDelete" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
    {{-- end konfirmasi penghapusan --}}

    {{-- table index roles --}}
    <table class="table table-bordered">
        <thead class="table-light text-center align-middle">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td class="align-middle" style="font-weight: bold">{{ $role->role_name }}</td>
                    <td class="text-center align-middle">
                        @if (Str::contains($role->role_image_url, ['http://', 'https://']))
                            <img src="{{ $role->role_image_url }}" alt="{{ $role->role_image_url }}" width="150" height="150">
                        @else
                            <img src="{{ (  asset('storage/roles/' . $role->role_image_url)) }}" alt="{{ $role->role_image_url }}" width="150" height="150">
                        @endif
                    </td>
                    <td class="text-center align-middle">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('roles.edit', $role->role_id) }}"><img src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
                            <form id="deleteForm_{{ $role->role_id }}" action="{{ route('roles.destroy', $role->role_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" id="btn-delete" onclick="showDeleteConfirmation('{{ $role->role_id }}')"><img src="{{ asset('../adminassets/img/global/action/iconActionDelete.svg') }}"></button>
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
            
            function showDeleteConfirmation(roleId) {
                document.getElementById('popup-container-confirm').style.display = 'flex';
                document.getElementById('confirmation-popup').style.display = 'block';
                document.getElementById('btnDelete').onclick = function() {
                    submitDeleteForm(roleId);
                };
            }

            function hideDeleteConfirmation(roleId) {
                document.getElementById('popup-container-confirm').style.display = 'none';
                document.getElementById('confirmation-popup').style.display = 'none';
            }

            function submitDeleteForm(roleId) {
                // Construct the form ID dynamically based on the portfolio ID
                var formId = 'deleteForm_' + roleId;
                // Submit the form with the constructed ID
                document.getElementById(formId).submit();
            }
        </script>
    @endpush

    {{ $roles->links() }}
@endsection