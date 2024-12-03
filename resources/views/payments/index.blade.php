@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Payments</h1>
        <a href="{{ route('payments.create') }}" class="btn btn-primary">Add Payment</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Enrollment</th>
                    <th>Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->enrollment->student->name }} - {{ $payment->enrollment->course->title }}</td>
                        <td>{{ $payment->amount }}</td>
                        <td>
                            <form action="{{ route('payments.destroy', $payment) }}" method="POST" style="display:inline;">
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
