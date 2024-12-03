<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Define the fillable attributes to prevent MassAssignmentException
    protected $fillable = [
        'enrollment_id', // The ID of the enrollment associated with the payment
        'amount',        // The amount paid
    ];

    // Define the relationship to the Enrollment model
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
