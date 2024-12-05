@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Book</h1>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="form-group">
                <label for="publication_year">Publication Year</label>
                <input type="number" class="form-control" id="publication_year" name="publication_year" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" required>
            </div>
            <div class="form-group">
                <label for="library_id">Library</label>
                <select class="form-control" id="library_id" name="library_id" required>
                    @foreach ($libraries as $library)
                        <option value="{{ $library->id }}">{{ $library->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Book</button>
        </form>
    </div>
@endsection
