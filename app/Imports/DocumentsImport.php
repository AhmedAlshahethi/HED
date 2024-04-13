<?php

namespace App\Imports;

use App\Models\Document;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\WithValidation;

class DocumentsImport implements ToModel, WithHeadingRow, WithUpserts, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Document([
            'number' => $row['number'],
            'date' => $row['date'],
            'document_type_id' => $row['document_type'],
            'student_id' => $row['student'],
        ]);
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
