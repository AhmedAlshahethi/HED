<?php

namespace App\Http\Controllers;

use App\Enums\BloodType;
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
      'blood_type' => 'required|in:' + BloodType::values(),
      'address' => 'required',
      'phone_number' => 'required',
      'high_school_name' => 'required',
      'high_school_city' => 'required',
      'high_school_district' => 'required',
      'high_school_type' => 'required',
      'high_school_graduation_year' => 'required|number',
      'high_school_total_score' => 'required|number',
      'high_school_max_score' => 'required|number',
      'high_school_total_percentage' => 'required|number',
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
      'total_percentage' => 'required|number',
      'graduation_year' => 'required|number',
      'registration_type' => 'required',
      'department_id' => 'required|exists:departments,id',
      'fees' => 'required|number',
    ]);
    dd($data);
  }
}
