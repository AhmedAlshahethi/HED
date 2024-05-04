<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Seminar extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'title', 'date', 'supervisor', 'sub_supervisor'];

    public function students()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function departments()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
