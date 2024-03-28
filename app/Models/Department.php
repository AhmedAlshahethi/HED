<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    use HasFactory;


    public function subjects(){
        return $this->hasMany(Subject::class, 'department_id');
    }

    public function instructors(){
        return $this->hasMany(Instructor::class,'department_id');
    }
 
}
