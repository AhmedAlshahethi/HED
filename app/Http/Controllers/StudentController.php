<?php

namespace App\Http\Controllers;

use App\Enums\Gender;
use App\Enums\IdentityType;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function create()
  {
    return view('students.manage_students_info.add_student');
  }

  public function store(Request $request)
  {
    dd($request->all());
    /*
    name
gender
city
district
birthdate
birth_place
Identity_type
identity_number
nationality
blood_type
address
phone_number
high_school_name
high_school_city
high_school_district
high_school_type
high_school_graduation_year
high_school_total_score
high_school_max_score
high_school_total_percentage
high_school_exam_id
english_name
english_birth_place
english_address
notes
last_degree
university
college
college_department
major_name
general_grade
total_percentage
graduation_year
registration_type
department_id
fees
    */
    $data = $request->validate([
      'name' => 'required',
      'gender' => 'required|in:' + Gender::values(),
      'city' => 'required',
      'district' => 'required',
      'birthdate' => 'required|date',
      'birth_place' => 'required',
      'Identity_type' => 'required|in:' + IdentityType::values(),
      'identity_number' => 'required|number',
      'nationality' => 'required',
      'blood_type' => 'required',
      'address' => 'required',
      'phone_number' => 'required',
      'high_school_name' => 'required',
      'high_school_city' => 'required',
      'high_school_district' => 'required',
      'high_school_type' => 'required',
      'high_school_graduation_year' => 'required',
      'high_school_total_score' => 'required',
      'high_school_max_score' => 'required',
      'high_school_total_percentage' => 'required',
      'high_school_exam_id' => 'required',
      'english_name' => 'required',
      'english_birth_place' => 'required',
      'english_address' => 'required',
      'notes' => 'required',
      'last_degree' => 'required',
      'university' => 'required',
      'college' => 'required',
      'college_department' => 'required',
      'major_name' => 'required',
      'general_grade' => 'required',
      'total_percentage' => 'required',
      'graduation_year' => 'required',
      'registration_type' => 'required',
      'department_id' => 'required',
      'fees' => 'required',
    ]);
  }
}
