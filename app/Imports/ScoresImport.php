<?php

namespace App\Imports;

use App\Enums\GeneralGrade;
use App\Enums\ScoreStatus;
use App\Models\StudentSubjectScore;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\WithValidation;

class ScoresImport implements ToModel, WithHeadingRow, WithUpserts, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new StudentSubjectScore([
            'class_mark' => $row['class_mark'],
            'final_exam' => $row['final_mark'],
            'general_grade' => $row['general_grade'],
            'status' => $row['status'],
            'subject_id' => $row['subject'],
            'student_id' => $row['student'],
        ]);
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'class_mark' => 'required|numeric|between:0,100',
            'final_mark' => 'required|numeric|between:0,100',
            'general_grade' => 'required|in:' . join(",", GeneralGrade::values()),
            'status' => 'required|in:' . join(",", ScoreStatus::values()),
            'subject' => 'required|exists:subjects,id',
            'student' => 'required|exists:students,id',
        ];
    }

    /**
     * @return string|array
     */
    public function uniqueBy()
    {
        return ['subject_id', 'student_id'];
    }
}
