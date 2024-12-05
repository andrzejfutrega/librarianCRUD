@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Reader</h1>

        <form action="{{ route('readers.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="membership_date" class="form-label">Membership Date</label>
                <input type="date" name="membership_date" id="membership_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
