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
  public function index()
  {
    $students = Student::with('departments')->get();
    return view('students.manage_students_info.list_students')->with('all_students', $students);
  }
  public function index_students_doc()
  {
    $students = Student::with('departments')->get();
    return view('students.manage_students_doc.list_students')->with('all_students', $students);
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
    //$student = new Student();
    $data  = $request->validate([
      'name' => 'required',
      'gender' => 'required|in:' . join(",", Gender::values()),
      'city' => 'required',
      'district' => 'required',
      'birthdate' => 'required',
      'birth_place' => 'required',
      'Identity_type' => 'required|in:' . join(",", IdentityType::values()),
      'identity_number' => 'required|numeric',
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
      'high_school_graduation_year' => 'required|numeric',
      'high_school_total_score' => 'required|numeric',
      'high_school_max_score' => 'required|numeric',
      'high_school_total_percentage' => 'required|numeric',
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
      'total_percentage' => 'required|numeric',
      'graduation_year' => 'required|numeric',
      // 'graduation_country' => 'required',
      'registration_type' => 'required|in:' . join(",", AcademicLevel::values()),
      'department_id' => 'required|exists:departments,id',
      'fees' => 'required|numeric',
    ]);

    $stu = Student::create($data);
    $stu->notes = $request->notes;
    $stu->english_address = $request->english_address;
    $stu->save();

    return redirect()->route('students_info')->with('success', 'تمت الاضافة بنجاح');
  }

  public function edit(Student $student)
  {
    $departments = Department::get();

    return view('students.manage_students_info.edit_student', [
      'student' => $student, 'departments' => $departments,
      'genders' => Gender::array(),
      'academicLevels' => AcademicLevel::array(),
      'identityTypes' => IdentityType::array(),
      'bloodTypes' => BloodType::array(),
      'highSchoolTypes' => HighSchoolType::array(),
      'generalGrades' => GeneralGrade::array()
    ]);
  }

  public function update(Request $request, Student $student)
  {
    $data  = $request->validate([
      'name' => 'required',
      'gender' => 'required|in:' . join(",", Gender::values()),
      'city' => 'required',
      'district' => 'required',
      'birthdate' => 'required',
      'birth_place' => 'required',
      'Identity_type' => 'required|in:' . join(",", IdentityType::values()),
      'identity_number' => 'required|numeric',
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
      'high_school_graduation_year' => 'required|numeric',
      'high_school_total_score' => 'required|numeric',
      'high_school_max_score' => 'required|numeric',
      'high_school_total_percentage' => 'required|numeric',
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
      'total_percentage' => 'required|numeric',
      'graduation_year' => 'required|numeric',
      // 'graduation_country' => 'required',
      'registration_type' => 'required|in:' . join(",", AcademicLevel::values()),
      'department_id' => 'required|exists:departments,id',
      'fees' => 'required|numeric',
    ]);

    $student->notes = $request->notes;
    $student->english_address = $request->english_address;
    $student->update($data);
    return redirect()->route('students_info')->with('success', 'تمت الاضافة بنجاح');
  }
  public function delete($id)
  {

    $student = Student::find($id);


    if ($student->delete())
      return redirect()->route('students_info')->with('success', 'تمت الاضافة بنجاح');
  }
  public function view(Student $student)
  {

    // $department = $instructor->departments->name;





    return view('students.manage_students_info.view_student', [
      'student' => $student
    ]);
  }
}
