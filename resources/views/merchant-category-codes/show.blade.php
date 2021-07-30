@extends('layout')

@section('content')
    <div class="container mt-3">
        <h2>Merchant Category Code</h2>
        <div class="d-flex flex-row-reverse mt-1 mb-2">
            <a href="{{ route('merchant-category-codes.index') }}" class="btn btn-outline-primary">Index</a>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $merchantCategoryCode->code }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $merchantCategoryCode->description }}</h6>
                <a href="{{ route('merchant-category-codes.edit', $merchantCategoryCode) }}" class="btn btn-outline-primary">Edit</a>
                <a href="#" onclick="document.getElementById('delete-mcc').submit()" class="btn btn-outline-danger">Delete</a>
                <form action="{{ route('merchant-category-codes.destroy', $merchantCategoryCode) }}" method="POST" id="delete-mcc">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
@endsection
