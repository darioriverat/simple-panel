@extends('layout')

@section('content')
    <div class="container mt-3">
        <h2>Index of Merchant Category Codes</h2>
        <div class="d-flex flex-row-reverse mt-1 mb-2">
            <a href="{{ route('merchant-category-codes.create') }}" class="btn btn-outline-primary">Create</a>
        </div>
        @if($merchantCategoryCodes->count())
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($merchantCategoryCodes as $merchantCategoryCode)
                    <tr>
                        <td>{{ $merchantCategoryCode->id }}</td>
                        <td>{{ $merchantCategoryCode->code }}</td>
                        <td>{{ $merchantCategoryCode->description }}</td>
                        <td>
                            <a href="{{ route('merchant-category-codes.show', $merchantCategoryCode) }}" class="btn btn-outline-primary">View</a>
                            <a href="{{ route('merchant-category-codes.edit', $merchantCategoryCode) }}" class="btn btn-outline-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $merchantCategoryCodes->links() }}
        @else
            <div class="alert alert-warning" role="alert">
                There are no merchant category codes
            </div>
        @endif
    </div>
@endsection
