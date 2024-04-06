<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    
    public function create(){
        return view('students.manage_students_doc.add_document');
    }

    public function store(Request $request){
        $data = $request->validate([
            'number' => 'required',
            'date' => 'required',
            'document_type_id' => 'required',
            'student_id' => 'required',
            'file_path' => 'nullable',
        ]);
    }
}
