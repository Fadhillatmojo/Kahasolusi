@extends('admin.layouts.root-admin')
@section('title')
    Portfolios
@endsection
@section('title-page')
    Portfolios
@endsection
@section('create-route')
    {{ route('portfolios.create') }}
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

    {{-- Table index portfolio --}}
    <table class="table rounded-corner">
        <thead class="table text-center align-middle">
            <tr>
                <th scope="col" class="index">Title</th>
                <th scope="col" class="index" >Description</th>
                <th scope="col" class="index" >Image</th>
                <th scope="col" class="index" >Years Added</th>
                <th scope="col" class="index" >Link</th>
                <th scope="col" class="none-border-right index">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
            <tr>
                <td class="align-middle text-center index" style="font-weight: bold">{{ $portfolio->portfolio_title }}</td>
                <td class="align-middle index">{{ $portfolio->portfolio_desc }}</td>
                <td class="align-middle text-center index">
                    @if (Str::contains($portfolio->portfolio_image_url, ['http://', 'https://']))
                        <img src="{{ $portfolio->portfolio_image_url }}" alt="{{ $portfolio->portfolio_image_url }}" width="200" height="150">
                    @else
                        <img src="{{ (  asset('storage/portfolios/' . $portfolio->portfolio_image_url)) }}" alt="{{ $portfolio->portfolio_image_url }}" width="200" height="150">
                    @endif
                </td>
                <td class="align-middle text-center index">{{ $portfolio->portfolio_year }}</td>
                <td class="align-middle text-center index"><a href="{{ $portfolio->portfolio_url }}" target="_blank">{{ $portfolio->portfolio_url }}</a></td>
                <td class="text-center align-middle none-border-right index">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('portfolios.edit', $portfolio->portfolio_id) }}"><img src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
                        <form id="deleteForm_{{ $portfolio->portfolio_id }}" action="{{ route('portfolios.destroy', $portfolio->portfolio_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" id="btn-delete" onclick="showDeleteConfirmation('{{ $portfolio->portfolio_id }}')"><img src="{{ asset('../adminassets/img/global/action/iconActionDelete.svg') }}"></button>
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
    {{ $portfolios->links() }}
@endsection