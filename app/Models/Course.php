<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Define the fillable attributes to allow mass assignment
    protected $fillable = [
        'title',        // Title of the course
        'description',  // Description of the course
        'teacher_id',   // Teacher ID related to the course
    ];

    // Define the relationship to the Teacher model
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    // Define the relationship to the Enrollment model
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
