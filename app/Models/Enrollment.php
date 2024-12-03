<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    // Define the fillable attributes to prevent MassAssignmentException
    protected $fillable = [
        'student_id',  // Student ID associated with the enrollment
        'course_id',   // Course ID associated with the enrollment
    ];

    // Define the relationship to the Student model
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // Define the relationship to the Course model
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Define the relationship to the Payment model
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
