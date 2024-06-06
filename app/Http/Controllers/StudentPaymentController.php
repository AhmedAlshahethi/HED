<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentPayment;
 use App\Events\StudentPaymentCompleted;
use PhpParser\Node\Stmt\Return_;

use function PHPUnit\Framework\returnSelf;

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
      
      $i =0;
      event(new StudentPaymentCompleted($student));

       
      return view('students.manage_students_fees.add_fee',['student'=>$student,
      'amount_paid'=>$amount_paid,
      'amount_tobe_paid'=>$amount_tobe_paid ,
       'student_payments'=>$student_payments,
      'i'=>$i
    
    ]);


  }

 
  public function store( Request $request){
   
     
   
    
    $total= count($request->all());

    $data =$request;
    
    if($total== 7){
     
      $returntype= $this->update($data);
      if($returntype==1){

        $notification = array(
          'message' => 'تم تعديل القسط بنجاح ',
          'alert-type' => 'success'
      );
      return redirect()->back()->with($notification);
      }else{
        $notification = array(
          'message' => 'لم يتم تعديل القسط ',
          'alert-type' => 'fail'
      );
         
      return redirect()->back()->with($notification);


      }

    }
    else{

      // data should be validated here in case of adding new 
   $number_of_entries = 0 ;

   $payments=[];
   $reciets= [];
   $dates= [];
   $notes=[];

          
    foreach($data['payment'] as $paymentdata){
      
      $payments[]= $paymentdata['payment'];
      $number_of_entries++;
      


    } 
    
    foreach($data['reciet'] as $recietdata ){

       $reciets[]= $recietdata['reciet'];
    }
     
    foreach( $data['date']as $datedata){

      $dates[]=$datedata['date'];


    }

    foreach($data['notes']as $notedata){
      $notes[]=$notedata['notes'];
      
    }

     $inserted=0;
       
     for($x=0;$x <$number_of_entries;$x++){


      $payment= new StudentPayment();
      $payment->student_id= $data['student_id'];
       $payment->payment = $payments[$x];
       $payment->reciet= $reciets[$x];
       $payment->date= $dates[$x];
       $payment->notes=$notes[$x];

       if($payment->save())
       $inserted++;
      
 

     }
     if($inserted==$number_of_entries){

      $notification = array(
        'message' => 'تم اضافة القسط بنجاح ',
        'alert-type' => 'success'
    );
     return redirect()->back()->with($notification);
     }
     
     
    }

  }


  public function update(Request $request) {

    $payment= StudentPayment::find($request->idofpayment);

    //need a validation for the request data input0 1 2 3;

    $payment->payment= $request->input_0;
    $payment->reciet= $request->input_1;
    $payment->date= $request->input_2;
    $payment->notes =$request->input_3;

    if($payment->save()){
   
return 1;
}

     else
    return 0;

   
    
  }


   public function delete($id){


    
    $payment = StudentPayment::find($id);


    if($payment != null){

      if($payment->delete())
     
            $notification = array(
                'message' => 'تم حذف القسط بنجاح',
                'alert-type' => 'success'
            );

            
      
       
      return redirect()->back()->with($notification);
    }
    else{

      return redirect()->back();

    }


   }
}
