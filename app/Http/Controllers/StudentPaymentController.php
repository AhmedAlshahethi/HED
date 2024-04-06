<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentPaymentController extends Controller
{
    public function index()
    {
      $students=Student::with('departments')->get();
      return view(    'students.manage_students_fees.list_students'
      )->with('all_students',$students);
    }
}
