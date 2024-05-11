<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
  use HasFactory, HasApiTokens;
  protected $fillable = [
    'name',
    'gender',
    'city',
    'district',
    'birthdate',
    'birth_place',
    'Identity_type',
    'identity_number',
    'nationality',
    'nationality_country',
    'blood_type',
    'address',
    'phone_number',
    'email',
    'password',
    'high_school_name',
    'high_school_city',
    'high_school_district',
    'high_school_type',
    'high_school_graduation_year',
    'high_school_total_score',
    'blood_type',
    'high_school_max_score',
    'high_school_total_percentage',
    'high_school_exam_id',
    'english_name',
    'english_address',
    'english_birth_place',
    'last_degree', 'university',
    'college',
    'college_department',
    'major_name',
    'general_grade',
    'total_percentage',
    'graduation_year',
    'graduation_country',
    'registration_type',
    'department_id',
    'notes',
    'fees'
  ];
  protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

  public function departments()
  {
    return $this->belongsTo(Department::class, 'department_id');
  }

  public function marks()
  {
    return $this->hasMany(StudentSubjectScore::class);
  }

  public function documents()
  {
    return $this->hasMany(Document::class);
  }

  public function payments()
  {
    return $this->hasMany(StudentPayment::class);
  }
  public function seminars()
  {
    return $this->hasMany(Seminar::class, 'student');
  }
}
