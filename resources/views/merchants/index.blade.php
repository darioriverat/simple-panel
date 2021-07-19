@extends('layout')

@section('content')
    <div class="container mt-3">
        <h2>Index of Merchants</h2>
        <div class="d-flex flex-row-reverse mt-1 mb-2">
            <a href="{{ route('merchants.create') }}" class="btn btn-outline-primary">Create</a>
        </div>
        @if($merchants->count())
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>MCC</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($merchants as $merchant)
                    <tr>
                        <td>{{ $merchant->id }}</td>
                        <td>{{ $merchant->name }}</td>
                        <td>{{ $merchant->country->name }}</td>
                        <td>{{ $merchant->mcc->description }}</td>
                        <td>
                            <a href="{{ route('merchants.show', $merchant) }}" class="btn btn-outline-primary">View</a>
                            <a href="{{ route('merchants.edit', $merchant) }}" class="btn btn-outline-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <div class="alert alert-warning" role="alert">
                There are no merchants
            </div>
        @endif
    </div>
@endsection
