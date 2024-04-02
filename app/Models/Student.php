<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
public function departments(){
    return $this->belongsTo(Department::class,'department_id');

}

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
        'fees'
    ];

}
