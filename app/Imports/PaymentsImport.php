<?php

namespace App\Imports;

use App\Models\StudentPayment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\WithValidation;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class PaymentsImport implements ToModel, WithHeadingRow, WithUpserts, WithValidation, WithMapping
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

    public function map($row): array
    {
        $row['date'] = Date::excelToDateTimeObject($row['date']);
        return $row;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'payment' => 'required',
            'receipt' => 'required',
            'date' => 'required|date',
            'student' => 'required|exists:students,id',
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
