@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $library->name }}</h1>
        <p><strong>Location:</strong> {{ $library->location }}</p>
        <p><strong>Established Year:</strong> {{ $library->established_year }}</p>
        <a href="{{ route('libraries.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
