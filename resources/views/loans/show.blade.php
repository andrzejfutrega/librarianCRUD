@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Loan Details</h1>
        <p><strong>Reader:</strong> {{ $loan->reader->name }}</p>
        <p><strong>Book:</strong> {{ $loan->book->title }}</p>
        <p><strong>Loan Date:</strong> {{ $loan->loan_date }}</p>
        <p><strong>Return Date:</strong> {{ $loan->return_date }}</p>
        <a href="{{ route('loans.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
