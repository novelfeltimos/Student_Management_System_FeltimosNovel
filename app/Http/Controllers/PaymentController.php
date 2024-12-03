<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        // Retrieve all payments with their associated enrollment
        $payments = Payment::with('enrollment')->get();
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        // Get all enrollments to display in the form
        $enrollments = Enrollment::all();
        return view('payments.create', compact('enrollments'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'enrollment_id' => 'required|exists:enrollments,id',
            'amount' => 'required|numeric|min:0',
        ]);

        // Only pass the valid fields to avoid mass-assignment issues
        $paymentData = $request->only(['enrollment_id', 'amount']);

        // Create the payment
        Payment::create($paymentData);

        return redirect()->route('payments.index')->with('success', 'Payment added successfully!');
    }

    public function destroy(Payment $payment)
    {
        // Delete the payment
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'Payment deleted successfully!');
    }
}
