@extends('layout')

@section('content')
<div class="container mt-3">
    <h2>Create Country</h2>
    <form action="{{ route('countries.store') }}" method="POST">
        @csrf
        @include('countries.__form')
    </form>
</div>
@endsection
