@extends('layout')

@section('content')
    <div class="container mt-3">
        <h2>Create Merchant Category Code</h2>
        <form action="{{ route('merchant-category-codes.store') }}" method="POST">
            @csrf
            @include('merchant-category-codes.__form')
        </form>
    </div>
@endsection
