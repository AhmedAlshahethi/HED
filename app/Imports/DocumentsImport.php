<?php

namespace App\Imports;

use App\Models\Document;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\WithValidation;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class DocumentsImport implements ToModel, WithHeadingRow, WithUpserts, WithValidation, WithMapping
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row['date']);
        return new Document([
            'number' => $row['number'],
            'date' => $row['date'],
            'document_type_id' => $row['document_type'],
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
            'number' => 'required|numeric',
            'date' => 'required|date',
            'document_type' => 'required|exists:document_types,id',
            'student' => 'required|exists:students,id',
        ];
    }

    /**
     * @return string|array
     */
    public function uniqueBy()
    {
        return 'number';
    }
}
