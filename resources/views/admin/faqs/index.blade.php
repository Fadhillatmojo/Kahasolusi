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
    <table class="table table-bordered">
        <thead class="table-light text-center align-middle">
            <tr>
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faqs as $faq)
                <tr>
                    <td class="align-middle" style="font-weight: bold">{{ $faq->faq_title }}</td>
                    <td class="align-middle">{{ $faq->faq_answer }}</td>
                    <td class="text-center align-middle">
                        <a href="{{ route('faqs.edit', $faq->faq_id) }}"><img src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection