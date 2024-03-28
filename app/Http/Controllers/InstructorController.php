<?php

namespace App\Http\Controllers;

use App\Enums\AcademicLevel;
use App\Enums\Gender;
use App\Models\Department;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{ 

    public function index() {
   
        $instructors=Instructor::with('departments')->get();
        return view('instructors/list_instructors')->with('all_instructors',$instructors);

        
    }
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

    public function edit(Instructor $instructor)
{ 
    $departments = Department::get();


    return view('instructors.edit_instructor',['instructor'=> $instructor, 'Alldepartments'=>$departments,
    'genders' => Gender::array(),
    'academicLevels' => AcademicLevel::array()]); 
   
}
public function update(Request $request,Instructor $instructor){

   $data = $request->validate([
        'name' => 'required',
        'academic_level' => 'required|in:' . join(",", AcademicLevel::values()),
        'email' => 'nullable|email',
        'gender' => 'required|in:' . join(",", Gender::values()),
        'phone_number' => 'required',
        'department_id' => 'required|exists:departments,id',
   ]);
     
      
    $instructor->update($data);
     return redirect()->route('instructors')->with('success', 'تمت الاضافة بنجاح');
          
     
    
     


    
    
}


public function delete( $id)
{
    $instructor = Instructor::find($id);

   

    if( $instructor->delete())
    return redirect()->route('instructors')->with('success', 'تمت الاضافة بنجاح');
    





}

}
