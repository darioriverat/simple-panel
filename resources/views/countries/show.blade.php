@extends('layout')

@section('content')
    <div class="container mt-3">
        <h2>Country</h2>
        <div class="d-flex flex-row-reverse mt-1 mb-2">
            <a href="{{ route('countries.index', $country) }}" class="btn btn-outline-primary">Index</a>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $country->name }}</h5>
                <div class="row mb-2">
                    <div class="col-sm-3">
                        <strong>Numeric code</strong>: {{ $country->numeric_code }}
                    </div>
                    <div class="col-sm-3">
                        <strong>Alpha3 code</strong>: {{ $country->alpha_3_code }}
                    </div>
                    <div class="col-sm-3">
                        <strong>Alpha2 code</strong>: {{ $country->alpha_2_code }}
                    </div>
                </div>
                <a href="{{ route('countries.edit', $country) }}" class="btn btn-outline-primary">Edit</a>
                <a href="#" onclick="document.getElementById('delete-country').submit()" class="btn btn-outline-danger">Delete</a>
                <form action="{{ route('countries.destroy', $country) }}" method="POST" id="delete-country">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
@endsection
