@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Teacher</h1>
        <form action="{{ route('teachers.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Add Teacher</button>
        </form>
    </div>
@endsection
