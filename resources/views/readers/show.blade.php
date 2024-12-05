@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $reader->name }}</h1>
        <p><strong>Email:</strong> {{ $reader->email }}</p>
        <p><strong>Membership Date:</strong> {{ $reader->membership_date }}</p>
        <a href="{{ route('readers.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
