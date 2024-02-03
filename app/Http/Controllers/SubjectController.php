<?php

namespace App\Http\Controllers;

use App\Enums\AcademicLevel;
use App\Models\Department;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function create(){
        return view('subjects.add_subject',[
            'departments' => Department::all(['id', 'name'])
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'hours' => 'required|numeric',
            'semester' => 'required|numeric',
            'department_id' => 'required',
        ]);

        Subject::create($data);

        return redirect()->route('subjects')->with('success', 'تمت الاضافة بنجاح');
    }
}
