@extends('layout')

@section('content')
<div class="container mt-3">
    <h2>Create Merchant</h2>
    <form action="{{ route('merchants.store') }}" method="POST">
        @csrf
        @include('merchants.__form')
    </form>
</div>
@endsection
