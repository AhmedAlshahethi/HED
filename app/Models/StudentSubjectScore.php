<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSubjectScore extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_mark',
        'final_exam',
        'general_grade',
        'status',
        'subject_id',
        'student_id',
    ];
    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
