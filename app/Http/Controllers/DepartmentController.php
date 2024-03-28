<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function Index(){
        $departments = Department::get();
        //return redirect()->route('sections')->with('AllDeps', $departments);
        return view('sections.list_sections')->with('AllDeps', $departments);

    }

    public function create(){
       return view('sections.add_section');
    }
    public function Store(Request $request){
        $data = $request->validate([
            'name' => 'required',

        ]);
        $department =new Department();
        $department->name = $request->name;
        $department->description =$request->description;
        if($department->save())
            return redirect()->route('sections');
        else 
        return "no";
               // Department::create($data);

            }
    
}
