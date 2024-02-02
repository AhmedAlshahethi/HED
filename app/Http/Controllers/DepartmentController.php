<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function create(){
       return view('sections.add_section');
    }
    public function Store(Request $request){
        $data = $request->validate([
            'name' => 'required',

        ]);
        Department::create($data);
        return redirect()->route('sections')->with('success', 'تمت الاضافة بنجاح');
    }
    
}
