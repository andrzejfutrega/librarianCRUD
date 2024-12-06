@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Loans</h1>
        <a href="{{ route('loans.create') }}" class="btn btn-primary mb-3">Create Loan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Reader</th>
                    <th>Book</th>
                    <th>Loan Date</th>
                    <th>Return Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($loans as $loan)
                    <tr>
                        <td>{{ $loan->reader->name }}</td>
                        <td>{{ $loan->book->title }}</td>
                        <td>{{ $loan->loan_date }}</td>
                        <td>{{ $loan->return_date }}</td>
                        <td>
                            <a href="{{ route('loans.show', $loan) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('loans.edit', $loan) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('loans.destroy', $loan) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()">
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
