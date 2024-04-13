<?php

namespace App\Imports;

use App\Enums\AcademicLevel;
use App\Enums\BloodType;
use App\Enums\Gender;
use App\Enums\HighSchoolType;
use App\Enums\IdentityType;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\WithValidation;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class StudentsImport implements ToModel, WithHeadingRow, WithValidation, WithUpserts
{
  /**
   * @param array $row
   *
   * @return \Illuminate\Database\Eloquent\Model|null
   */
  public function model(array $row)
  {
    if (is_int($row['department'])) {
      $department = Department::find($row['department']);
    } else {
      $department = Department::where('name', $row['department'])->first();
    }
    return new Student([
      'name' => $row['name'],
      'gender' => $row['gender'],
      'city' => $row['city'],
      'district' => $row['district'],
      'birthdate' => Date::excelToDateTimeObject($row['birthdate']),
      'birth_place' => $row['birth_place'],
      'Identity_type' => $row['identity_type'],
      'identity_number' => $row['identity_number'],
      'nationality' => $row['nationality'],
      'nationality_country' => $row['nationality_country'],
      'blood_type' => $row['blood_type'],
      'address' => $row['address'],
      'phone_number' => $row['phone_number'],
      'email' => $row['email'],
      'password' => Hash::make($row['password']),
      'high_school_name' => $row['high_school_name'],
      'high_school_city' => $row['high_school_city'],
      'high_school_district' => $row['high_school_district'],
      'high_school_type' => $row['high_school_type'],
      'high_school_graduation_year' => $row['high_school_graduation_year'],
      'high_school_total_score' => $row['high_school_total_score'],
      'high_school_max_score' => $row['high_school_max_score'],
      'high_school_total_percentage' => $row['high_school_total_percentage'],
      'high_school_exam_id' => $row['high_school_exam_id'],
      'english_name' => $row['english_name'],
      'english_birth_place' => $row['english_birth_place'],
      'english_address' => $row['english_address'],
      'notes' => $row['notes'],
      'last_degree' => $row['last_degree'],
      'university' => $row['university'],
      'college' => $row['college'],
      'college_department' => $row['college_department'],
      'major_name' => $row['major_name'],
      'general_grade' => $row['general_grade'],
      'total_percentage' => $row['total_percentage'],
      'graduation_year' => $row['graduation_year'],
      'registration_type' => $row['registration_type'],
      'department_id' => $department->id,
      'fees' => $row['fees'],
    ]);
  }

  /**
   * @return array
   */
  public function rules(): array
  {
    return [
      'name' => 'required',
      'gender' => 'required|in:' . join(",", Gender::values()),
      'city' => 'required',
      'district' => 'required',
      'birthdate' => 'required',
      'birth_place' => 'required',
      'identity_type' => 'required|in:' . join(",", IdentityType::values()),
      'identity_number' => 'required|numeric',
      'nationality' => 'required',
      'nationality_country' => 'required',
      'blood_type' => 'required|in:' . join(",", BloodType::values()),
      'address' => 'required',
      'phone_number' => 'required',
      'email' => 'nullable|unique:students,email',
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
      'registration_type' => 'required|in:' . join(",", AcademicLevel::values()),
      'department' => 'required|exists:departments,name',
      'fees' => 'required|numeric',
    ];
  }

  /**
   * @return string|array
   */
  public function uniqueBy()
  {
    return 'email';
  }
}
