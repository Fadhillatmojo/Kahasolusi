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
    <table class="table rounded-corner">
        <thead class="table text-center align-middle">
            <tr>
                <th scope="col"class="index">Question</th>
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
                        <a href="{{ route('faqs.edit', $faq->faq_id) }}"><img src="{{ asset('../adminassets/img/global/action/iconActionEdit.svg') }}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection