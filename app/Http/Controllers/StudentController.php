<?php

namespace App\Http\Controllers;

use App\Enums\AcademicLevel;
use App\Enums\BloodType;
use App\Enums\Gender;
use App\Enums\GeneralGrade;
use App\Enums\HighSchoolType;
use App\Enums\IdentityType;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{


   public function idenx( Request $request){
     


    
   }
  public function create()
  {
    return view('students.manage_students_info.add_student', [
      'academicLevels' => AcademicLevel::array(),
      'identityTypes' => IdentityType::array(),
      'genders' => Gender::array(),
      'bloodTypes' => BloodType::array(),
      'highSchoolTypes' => HighSchoolType::array(),
      'generalGrades' => GeneralGrade::array(),
      'departments' => Department::all(['id', 'name'])
    ]);
  }

  public function store(Request $request)
  {
      $data = $request->validate([
      'name' => 'required',
      'gender' => 'required|in:' . join(",", Gender::values()),
      'city' => 'required',
      'district' => 'required',
      'birthdate' => 'required|date',
      'birth_place' => 'required',
      'Identity_type' => 'required|in:' . join(",", IdentityType::values()),
      'identity_number' => 'required|number',
      'nationality' => 'required',
      'nationality_country' => 'required',
      'blood_type' => 'required|in:' . join(",", BloodType::values()),
      'address' => 'required',
      'phone_number' => 'required',
      'email' => 'nullable|email',
      'high_school_name' => 'required',
      'high_school_city' => 'required',
      'high_school_district' => 'required',
      'high_school_type' => 'required|in:' . join(",", HighSchoolType::values()),
      'high_school_graduation_year' => 'required|number',
      'high_school_total_score' => 'required|number',
      'high_school_max_score' => 'required|number',
      'high_school_total_percentage' => 'required|number',
      'high_school_exam_id' => 'required',
      'english_name' => 'required',
      'english_birth_place' => 'required',
      'last_degree' => 'required',
      'university' => 'required',
      'college' => 'required',
      'college_department' => 'required',
      'major_name' => 'required',
      'general_grade' => 'required',
      'total_percentage' => 'required|number',
      'graduation_year' => 'required|number',
      'graduation_country' => 'required',
      'registration_type' => 'required|in:' . join(",", AcademicLevel::values()),
      'department_id' => 'required|exists:departments,id',
      'fees' => 'required|number',
    ]);
    dd($data);
 
    Student::create($data);
    
    return redirect('/students_info')->with('success', 'تمت الاضافة بنجاح');
    
  }
}
