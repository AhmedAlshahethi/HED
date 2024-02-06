<?php

namespace App\Http\Controllers;

use App\Models\DocumentType;
use Illuminate\Http\Request;

class DocumentTypeController extends Controller
{
    public function create(){
        return view('documents.add_document');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
        ]);
        DocumentType::create($data);
        return redirect()->route('documents_type')->with('success', 'تمت الاضافة بنجاح');
    }
}
