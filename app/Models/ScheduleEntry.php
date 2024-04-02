<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleEntry extends Model
{
    use HasFactory;
    protected $fillable = ['day', 'start_time','class_room','department_id','schedule_id','subject_id','instructor_id',''];



     public function schedule(){

     return $this->belongsTo(Schedule::class,'schedule_id');



     }
     public function subject(){


        return $this->hasOne(Subject::class , 'subject_id');
     }
     public function instructor(){


        return $this->hasOne(Instructor::class , 'Instructor_id');
     }
    

}
