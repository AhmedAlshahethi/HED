<?php

namespace App\Http\Controllers;

use App\Enums\AcademicLevel;
use App\Models\Department;
use App\Models\Subject;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;
use LDAP\Result;
use App\Enums\Semester;

use PhpParser\Node\Stmt\Return_;

class SubjectController extends Controller
{
    public function index(){

         $subjects = Subject::with('departments')->get();
          
         return view('subjects.list_subjects')->with('Allsubjects',$subjects);
        // return view('subjects.list_subjects', compact('subjects'));  // Pass $subjects with key 'subjects'

          
  }


    public function create(){
        return view('subjects.add_subject',[
            'departments' => Department::all(['id', 'name'])
            ,'semesters' => Semester::array(),
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'hours' => 'required|numeric',
            'semester' =>'required|in:' . join(",", Semester::values()),
            'department_id' => 'required|exists:departments,id',
        ]);

        Subject::create($data);

        return redirect()->route('subjects')->with('success', 'تمت الاضافة بنجاح');
    }

    public function edit(Subject $subject)
    { 
        $departments = Department::get();
    
    
        return view('subjects.edit_subject',['subject'=> $subject, 'Alldepartments'=>$departments,'semesters'=>Semester::array()]); 
       
    }

    public function update(Request $request,Subject $subject){

        $data = $request->validate([
            'name' => 'required',
            'hours' => 'required|numeric',
            'semester' =>'required|in:' . join(",", Semester::values()),
             'department_id' => 'required|exists:departments,id',
        ]);
          
           
         if($subject->update($data))
          return redirect()->route('subjects')->with('success', 'تمت الاضافة بنجاح');
         else 
         return '2';  
         
     }

     public function delete( $id)
{
    $subject = Subject::find($id);

   

    if( $subject->delete())
    return redirect()->route('subjects')->with('success', 'تمت الاضافة بنجاح');
    



}

  
}
