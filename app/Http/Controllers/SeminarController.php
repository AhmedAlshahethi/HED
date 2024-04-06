<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Seminar;
use Illuminate\Http\Request;
use App\Models\Student;

class SeminarController extends Controller
{
    public function index()
  {
    $students=Student::with('departments')->get();
    return view('students_thesis.seminars.list_students')->with('all_students',$students);
  }
    public function create(Student $student){

        return view('students_thesis.seminars.add_seminar',
        ['student'=>$student ,
        'instructors' => Instructor::all(['id', 'name'])]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'supervisor' => 'required|exists:instructors,id',
            'sub_supervisor' => 'required|exists:instructors,id',
        ]);
        Seminar::create($data);

        $notification = array(
            'message' => 'تمت اضافة نوع سيمنار بنجاح',
            'alert-type' => 'success'
        );
        return redirect()->route('documents_type')->with($notification);
    }

}
