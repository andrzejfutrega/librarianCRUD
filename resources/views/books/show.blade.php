@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <p><strong>Author:</strong> {{ $book->author }}</p>
        <p><strong>Year:</strong> {{ $book->publication_year }}</p>
        <p><strong>Genre:</strong> {{ $book->genre }}</p>
        <p><strong>Library:</strong> {{ $book->library->name }}</p>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
