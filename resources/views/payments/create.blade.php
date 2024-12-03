@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Payment</h1>
        <form action="{{ route('payments.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="enrollment_id" class="form-label">Enrollment</label>
                <select name="enrollment_id" class="form-select" required>
                    @foreach($enrollments as $enrollment)
                        <option value="{{ $enrollment->id }}">
                            {{ $enrollment->student->name }} - {{ $enrollment->course->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" name="amount" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Add Payment</button>
        </form>
    </div>
@endsection
