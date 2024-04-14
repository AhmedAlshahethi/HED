<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class FinalResultController extends Controller
{
    //
    public function index()
    {
      $students=Student::with('departments')->get();
      return view('students.manage_students_marks.list_students'
      )->with('all_students',$students);
    }
}
