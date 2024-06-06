<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentPayment;

class StudentPaymentController extends Controller
{
    public function index()
    {
      $students=Student::with('departments')->get();
      return view(    'students.manage_students_fees.list_students'
      )->with('all_students',$students);
    }

    public function create(Student $student){
       
        
      $payments = StudentPayment::where('student_id', $student->id)->select('payment')->get();
      $student_payments = StudentPayment::where('student_id', $student->id)->get();
       
      $amount_paid = $payments->sum(function ($payment) {
          return $payment->payment ?? 0;
      });
      
      $amount_tobe_paid = ($student->fees) - $amount_paid;
      
      
  
      
     
 

       
      return view('students.manage_students_fees.add_fee',['student'=>$student,
      'amount_paid'=>$amount_paid,
      'amount_tobe_paid'=>$amount_tobe_paid ,
       'student_payments'=>$student_payments
    
    ]);


  }
}
