@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Enrollments</h1>
        <a href="{{ route('enrollments.create') }}" class="btn btn-primary">Add Enrollment</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Student</th>
                    <th>Course</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enrollments as $enrollment)
                    <tr>
                        <td>{{ $enrollment->student->name }}</td>
                        <td>{{ $enrollment->course->title }}</td>
                        <td>
                            <form action="{{ route('enrollments.destroy', $enrollment) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
