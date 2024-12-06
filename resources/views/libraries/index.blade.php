@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Libraries</h1>
        <a href="{{ route('libraries.create') }}" class="btn btn-primary mb-3">Create Library</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Established Year</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libraries as $library)
                    <tr>
                        <td>{{ $library->name }}</td>
                        <td>{{ $library->location }}</td>
                        <td>{{ $library->established_year }}</td>
                        <td>
                            <a href="{{ route('libraries.show', $library) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('libraries.edit', $library) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('libraries.destroy', $library) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
