<?php

namespace App\Imports;

use App\Models\StudentPayment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\WithValidation;

class PaymentsImport implements ToModel, WithHeadingRow, WithUpserts, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new StudentPayment([
            'payment' => $row['payment'],
            'reciet' => $row['receipt'],
            'date' => $row['date'],
            'notes' => $row['notes'],
            'student_id' => $row['student'],
        ]);
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'payment' => 'required',
            'receipt' => 'required',
            'date' => 'required',
            'student' => 'required',
        ];
    }

    /**
     * @return string|array
     */
    public function uniqueBy()
    {
        return 'reciet';
    }
}
