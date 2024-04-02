<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{  
    protected $fillable = ['name', 'email','academic_level','gender','phone_number','department_id'];

    use HasFactory;

    public function getImageAttribute($img){
         
        return url('/images').'/'.$img;


    }
    public function departments(){
        return $this->belongsTo(Department::class,'department_id');


    }

}
