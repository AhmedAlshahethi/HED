<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Seminar extends Model
{
    use HasFactory;
    protected $fillable = ['student', 'title', 'date', 'supervisor', 'sub_supervisor'];

    public function students()
    {
        return $this->belongsTo(Student::class, 'student', 'id');
    }

    public function departments()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
