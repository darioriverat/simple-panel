@extends('layout')

@section('content')
    <div class="container mt-3">
        <h2>Update Merchant</h2>
        <div class="d-flex flex-row-reverse mt-1 mb-2">
            <a href="{{ route('merchants.show', $merchant) }}" class="btn btn-outline-primary">Back</a>
        </div>
        <form action="{{ route('merchants.update', $merchant) }}" method="POST">
            @csrf
            @method('PATCH')
            @include('merchants.__form')
        </form>
    </div>
@endsection
