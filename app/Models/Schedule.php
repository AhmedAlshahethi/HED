<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{ protected $fillable = ['name'];
    
    

    public function ScheduleEntries(){

        $this->hasMany( ScheduleEntry::class,'schedule_id');
    } 
    
    

    use HasFactory;
}
