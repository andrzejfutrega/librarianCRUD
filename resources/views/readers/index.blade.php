@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Readers</h1>
        <a href="{{ route('readers.create') }}" class="btn btn-primary">Add New Reader</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Membership Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($readers as $reader)
                    <tr>
                        <td>{{ $reader->name }}</td>
                        <td>{{ $reader->email }}</td>
                        <td>{{ $reader->membership_date }}</td>
                        <td>
                            <a href="{{ route('readers.show', $reader) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('readers.edit', $reader->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('readers.destroy', $reader->id) }}" method="POST" style="display:inline;">
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
