<?php

namespace App\Exports;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
  private $students;

  public function __construct(Request $request)
  {
    $query = Student::when(
      $request->search,
      fn ($query) => $query->where(
        fn ($q) =>
        $q->whereRaw("LOWER(name) like '%" . strtolower($request->search) . "%'")
          ->orWhere('academic_number', 'like', '"%' . $request->search . '%"')
      )
    )
      ->when(
        $request->department,
        fn ($query) => $query->where('department_id', $request->department)
      )
      ->when(
        $request->level,
        fn ($query) => $query->where('registration_type', $request->level)
      );
    $this->students = $query->get();
  }

  public function collection()
  {
    return $this->students->map(fn ($student) => [
      $student->name,
      $student->academic_number,
      $student->gender,
      $student->city,
      $student->district,
      str_replace('-', '/', $student->birthdate),
      $student->birth_place,
      $student->Identity_type,
      $student->identity_number,
      $student->nationality,
      $student->nationality_country,
      $student->blood_type,
      $student->address,
      $student->phone_number,
      $student->email,
      $student->high_school_name,
      $student->high_school_city,
      $student->high_school_district,
      $student->high_school_type,
      $student->high_school_graduation_year,
      $student->high_school_total_score,
      $student->high_school_max_score,
      $student->high_school_total_percentage,
      $student->high_school_exam_id,
      $student->english_name,
      $student->english_birth_place,
      $student->english_address,
      $student->notes,
      $student->last_degree,
      $student->university,
      $student->college,
      $student->college_department,
      $student->major_name,
      $student->general_grade,
      $student->total_percentage,
      $student->graduation_year,
      $student->graduation_country,
      $student->registration_type,
      Department::find($student->department_id)->name,
      $student->fees,
    ]);
  }

  public function headings(): array
  {
    return [
      'Name',
      'Academic Number',
      'Gender',
      'City',
      'District',
      'Birthdate',
      'Birth Place',
      'Identity Type',
      'Identity Number',
      'Nationality',
      'Nationality Country',
      'Blood Type',
      'Address',
      'Phone_number',
      'Email',
      'High School Name',
      'High School City',
      'High School District',
      'High School Type',
      'High School Graduation Year',
      'High School Total Score',
      'High School Max Score',
      'High School Total Percentage',
      'High School Exam ID',
      'English Name',
      'English Birth Place',
      'English Address',
      'Notes',
      'Last Degree',
      'University',
      'College',
      'College Department',
      'major Name',
      'General Grade',
      'Total Percentage',
      'Graduation Year',
      'Graduation Country',
      'Registration Type',
      'Department',
      'Fees',
    ];
  }
}
