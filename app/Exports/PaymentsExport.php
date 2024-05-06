<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PaymentsExport implements FromCollection, WithMapping, ShouldAutoSize, WithStyles
{
    protected $students;
    protected $rowIndexes = [];
    protected $rowCount = 1;

    public function __construct($id = null)
    {
        $query = Student::with(['payments'])->when($id, function ($query) use ($id) {
            return $query->where('id', $id);
        });
        $this->students = $query->get();
    }

    public function collection()
    {
        return $this->students;
    }

    public function map($row): array
    {
        if ($this->rowCount) {
            $this->rowIndexes[$this->rowCount] = $this->rowCount + 1 + count($row->payments);
        } else {
            $this->rowIndexes[1] = $this->rowCount + 1 + count($row->payments);
        }

        $this->rowCount = $this->rowCount + 3 + count($row->payments);

        return [
            ['Student Name:', $row->name],
            [
                'Amount',
                'Receipt Number',
                'Date',
                'notes',
            ],
            ...$row->payments->map(function ($payment) {
                return [
                    $payment->payment,
                    $payment->reciet,
                    str_replace('-', '/', $payment->date),
                    $payment->notes,
                ];
            })->toArray(),
            []
        ];
    }

    public function styles(Worksheet $sheet)
    {
        foreach ($this->rowIndexes as $start => $end) {
            $sheet->mergeCells('B' . $start . ':D' . $start);
            $sheet->getStyle('B' . $start)->getFont()->setBold(true);
            $header = $sheet->getStyle('A' . $start + 1 . ':D' . $start + 1);
            $header->getFont()->setBold(true);
            $header->getFill()->setFillType(Fill::FILL_SOLID);
            $header->getFill()->getStartColor()->setRGB('2673FB');
            $marks = $sheet->getStyle('A' . $start + 2 . ':D' . $end);
            $marks->applyFromArray([
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN
                    ]
                ]
            ]);

            $sheet->getStyle('A' . $start . ':D' . $end)->applyFromArray([
                'borders' => [
                    'outline' => [
                        'borderStyle' => Border::BORDER_THIN
                    ]
                ],
                'font' => [
                    'name' => 'Arial'
                ]
            ]);
        }
    }
}
