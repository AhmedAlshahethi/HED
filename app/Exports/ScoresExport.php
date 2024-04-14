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

class ScoresExport implements FromCollection, WithMapping, ShouldAutoSize, WithStyles
{
  protected $students;
  protected $rowIndexes = [];
  protected $rowCount = 1;
  protected $failedRows = [];

  public function __construct($id = null)
  {
    $query = Student::with(['marks', 'marks.subject'])->when($id, function ($query) use ($id) {
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
      $this->rowIndexes[$this->rowCount] = $this->rowCount + 1 + count($row->marks);
    } else {
      $this->rowIndexes[1] = $this->rowCount + 1 + count($row->marks);
    }

    $startRow = $this->rowCount + 2;
    $this->rowCount = $this->rowCount + 3 + count($row->marks);

    return [
      ['Student Name:', $row->name],
      [
        'Subject',
        'Class Mark',
        'Final Exam',
        'Total',
        'Grade',
        'Status',
      ],
      ...$row->marks->map(function ($mark) use (&$startRow) {
        $total = $mark->class_mark + $mark->final_exam;
        if ($total < 50) {
          $this->failedRows[] = $startRow;
        }
        $startRow++;

        return [
          'subject' => $mark->subject->name,
          'class_mark' => $mark->class_mark,
          'final_exam' => $mark->final_exam,
          'total' => $total,
          'grade' => $mark->general_grade,
          'status' => $mark->status,
        ];
      })->toArray(),
      []
    ];
  }

  public function styles(Worksheet $sheet)
  {
    foreach ($this->rowIndexes as $start => $end) {
      $sheet->mergeCells('B' . $start . ':F' . $start);
      $sheet->getStyle('B' . $start)->getFont()->setBold(true);
      $header = $sheet->getStyle('A' . $start + 1 . ':F' . $start + 1);
      $header->getFont()->setBold(true);
      $header->getFill()->setFillType(Fill::FILL_SOLID);
      $header->getFill()->getStartColor()->setRGB('2673FB');
      $marks = $sheet->getStyle('A' . $start + 2 . ':F' . $end);
      $marks->applyFromArray([
        'borders' => [
          'allBorders' => [
            'borderStyle' => Border::BORDER_THIN
          ]
        ]
      ]);

      $sheet->getStyle('A' . $start . ':F' . $end)->applyFromArray([
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

    foreach ($this->failedRows as $row) {
      $sheet->getStyle('D' . $row)->applyFromArray([
        'font' => [
          'bold' => true
        ],
        'fill' => [
          'fillType' => Fill::FILL_SOLID,
          'startColor' => [
            'rgb' => 'FF0000'
          ]
        ]
      ]);
    }
  }
}
