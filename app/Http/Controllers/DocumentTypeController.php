<?php

namespace App\Http\Controllers;

use App\Models\DocumentType;
use Illuminate\Http\Request;

class DocumentTypeController extends Controller
{
    public function index(){
        $docs_types = DocumentType::get();
        //return redirect()->route('sections')->with('AllDeps', $departments);
        return view('documents.list_documents')->with('documents_type',$docs_types);

    }
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

    public function edit(DocumentType $docs_type)
    { 
       
    
    
        return view('documents.edit_document')->with('documentType',$docs_type); 

    }


    public function update(Request $request,DocumentType $docs_type){

        $data = $request->validate([
            'name' => 'required',
        ]);
          
           
         if($docs_type->update($data))
          return redirect()->route('documents_type')->with('success', 'تمت الاضافة بنجاح');
         else 
         return '2';  
         
     }

     public function delete( $id)
{
    $documentType = DocumentType::find($id);

   

    if( $documentType->delete())
    return redirect()->route('documents_type')->with('success', 'تمت الاضافة بنجاح');
    



}
}
