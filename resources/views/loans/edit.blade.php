@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Loan</h1>
        <form action="{{ route('loans.update', $loan) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="reader_id">Reader</label>
                <select class="form-control" id="reader_id" name="reader_id" required>
                    @foreach ($readers as $reader)
                        <option value="{{ $reader->id }}" {{ $loan->reader_id == $reader->id ? 'selected' : '' }}>
                            {{ $reader->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="book_id">Book</label>
                <select class="form-control" id="book_id" name="book_id" required>
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}" {{ $loan->book_id == $book->id ? 'selected' : '' }}>
                            {{ $book->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="loan_date">Loan Date</label>
                <input type="date" class="form-control" id="loan_date" name="loan_date" value="{{ $loan->loan_date }}" required>
            </div>
            <div class="form-group">
                <label for="return_date">Return Date</label>
                <input type="date" class="form-control" id="return_date" name="return_date" value="{{ $loan->return_date }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Loan</button>
        </form>
    </div>
@endsection
