<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DocumentType;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function edit(Student $student)
    {
        $doc_types = DocumentType::get();
        return view('students.manage_students_doc.edit_document')->with([
            'student' => $student,
            'documents' => $student->documents,
            'doc_types' => $doc_types,
        ]);
    }

    public function store(Request $request)
    {
  
        return response($request);
        $data = $request->validate([
            'number' => 'required',
            'date' => 'required',
            'document_type_id' => 'required',
            'student_id' => 'required',
            'file_path' => 'nullable',
        ]);

        
        $data = new Collection($request);
        $numberOfEntries = 0;
        $doc_numbers = [];
        $dates = [];
        $doc_types = [];
        $doc_paths = [];

        foreach ($data['number'] as $numberData) {
            $doc_numbers[] = $numberData['number'];
            $numberOfEntries++; // Access the nested ID
        }
        foreach ($data['date'] as $dateData) {
            $dates[] = $dateData['date'];
        }
        foreach ($data['document_type_id'] as $doc_typeData) {
            $doc_types[] = $doc_typeData['document_type_id']; // Access the nested ID
        }
        foreach ($data['file_path'] as $doc_pathData) {
            $doc_paths[] = $doc_pathData['file_path']; // Access the nested ID
        }

        for ($x = 0; $x < $numberOfEntries; $x++) {  //loop should start form zero
            $Document = new Document();
            $Document->student_id = $data['student_id'];
            $Document->file_path = $doc_paths[$x];
            $Document->number = $doc_numbers[$x];
            $Document->date = $dates[$x];
            $Document->document_type_id = $doc_types[$x];
            $Document->save();
        }
        if ($Document->save())
            return redirect()->route('students_documents');
    }
}
