@extends('layout')

@section('content')
    <div class="container mt-3">
        <h2>Merchant</h2>
        <div class="d-flex flex-row-reverse mt-1 mb-2">
            <a href="{{ route('merchants.index', $merchant) }}" class="btn btn-outline-primary">Index</a>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $merchant->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $merchant->brand }}</h6>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <strong>Country</strong>: {{ $merchant->country->name }}
                    </div>
                    <div class="col-sm-6">
                        <strong>MCC</strong>: {{ $merchant->mcc->description }}
                    </div>
                </div>
                <a href="{{ route('merchants.edit', $merchant) }}" class="btn btn-outline-primary">Edit</a>
                <a href="#" onclick="document.getElementById('delete-merchant').submit()" class="btn btn-outline-danger">Delete</a>
                <form action="{{ route('merchants.destroy', $merchant) }}" method="POST" id="delete-merchant">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
@endsection
