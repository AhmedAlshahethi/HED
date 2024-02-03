<?php

namespace App\Http\Controllers;

use App\Enums\AcademicLevel;
use App\Enums\Gender;
use App\Models\Department;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function create(){
        return view('instructors.add_instructor',[
            'departments' => Department::all(['id', 'name']),
            'genders' => Gender::array(),
            'academicLevels' => AcademicLevel::array(),
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'academic_level' => 'required|in:' . join(",", AcademicLevel::values()),
            'email' => 'nullable|email',
            'gender' => 'required|in:' . join(",", Gender::values()),
            'phone_number' => 'required',
            'department_id' => 'required|exists:departments,id',
        ]);

        Instructor::create($data);
        return redirect()->route('instructors')->with('success', 'تمت الاضافة بنجاح');
    }
}
