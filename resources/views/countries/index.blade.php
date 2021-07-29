@extends('layout')

@section('content')
    <div class="container mt-3">
        <h2>Index of Countries</h2>
        <div class="d-flex flex-row-reverse mt-1 mb-2">
            <a href="{{ route('countries.create') }}" class="btn btn-outline-primary">Create</a>
        </div>
        @if($countries->count())
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Numeric code</th>
                    <th>Alpha3 code</th>
                    <th>Alpha2 code</th>
                </tr>
            </thead>
            <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->numeric_code }}</td>
                        <td>{{ $country->alpha_2_code }}</td>
                        <td>{{ $country->alpha_3_code }}</td>
                        <td>
                            <a href="{{ route('countries.show', $country) }}" class="btn btn-outline-primary">View</a>
                            <a href="{{ route('countries.edit', $country) }}" class="btn btn-outline-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $countries->links() }}
        @else
            <div class="alert alert-warning" role="alert">
                There are no countries
            </div>
        @endif
    </div>
@endsection
