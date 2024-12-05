@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Library</h1>
        <form action="{{ route('libraries.update', $library) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Library Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $library->name }}" required>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $library->location }}" required>
            </div>
            <div class="form-group">
                <label for="established_year">Year Established</label>
                <input type="number" class="form-control" id="established_year" name="established_year" value="{{ $library->established_year }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Library</button>
        </form>
    </div>
@endsection
