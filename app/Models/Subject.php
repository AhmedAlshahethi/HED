<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  use HasFactory;

  protected $fillable = ['name', 'hours', 'semester', 'department_id'];
  protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

  public function departments()
  {
    return $this->belongsTo(Department::class, 'department_id');
  }

  public function scheduleEntries()
  {
    return $this->hasMany(ScheduleEntry::class, 'subject_id');
  }
}
