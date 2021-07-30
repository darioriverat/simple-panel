@extends('layout')

@section('content')
    <div class="container mt-3">
        <h2>Update Merchant Category Code</h2>
        <div class="d-flex flex-row-reverse mt-1 mb-2">
            <a href="{{ route('merchant-category-codes.show', $merchantCategoryCode) }}" class="btn btn-outline-primary">Back</a>
        </div>
        <form action="{{ route('merchant-category-codes.update', $merchantCategoryCode) }}" method="POST">
            @csrf
            @method('PATCH')
            @include('merchant-category-codes.__form')
        </form>
    </div>
@endsection
