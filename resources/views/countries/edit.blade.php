@extends('layout')

@section('content')
    <div class="container mt-3">
        <h2>Update Country</h2>
        <div class="d-flex flex-row-reverse mt-1 mb-2">
            <a href="{{ route('countries.show', $country) }}" class="btn btn-outline-primary">Back</a>
        </div>
        <form action="{{ route('countries.update', $country) }}" method="POST">
            @csrf
            @method('PATCH')
            @include('countries.__form')
        </form>
    </div>
@endsection
