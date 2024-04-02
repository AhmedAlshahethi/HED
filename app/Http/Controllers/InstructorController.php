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


    public function upload_image($image){

        $image_name = time().'.'.$image->extension();
        $image->move(public_path('/images'),$image_name);

        return $image_name;


    }

    public function store(Request $request){
        
        $instructor= new Instructor();

       /* $data = $request->validate([
            'name' => 'required',
            'academic_level' => 'required|in:' . join(",", AcademicLevel::values()),
            'email' => 'nullable|email',
            'gender' => 'required|in:' . join(",", Gender::values()),
            'phone_number' => 'required',
            'department_id' => 'required|exists:departments,id',
        ]);
        
        Instructor::create($data);
       
        */
          

        $request->validate([
            'name' => 'required',
            'academic_level' => 'required|in:' . join(",", AcademicLevel::values()),
            'email' => 'nullable|email',
            'gender' => 'required|in:' . join(",", Gender::values()),
            'phone_number' => 'required',
             
            'department_id' => 'required|exists:departments,id',
        ]);
        
        // Assign validated fields to the instructor object:
        $instructor->name = $request->name;
        $instructor->academic_level = $request->academic_level;
        $instructor->gender = $request->gender;
        $instructor->phone_number = $request->phone_number;
        $instructor->email = $request->email;
        $instructor->department_id = $request->department_id;
        $instructor->description = $request->description;
     
        $instructor->image = $this->upload_image($request->file('image'));


        if($instructor->save())
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
   
     $request->validate([
        'name' => 'required',
        'academic_level' => 'required|in:' . join(",", AcademicLevel::values()),
        'email' => 'nullable|email',
        'gender' => 'required|in:' . join(",", Gender::values()),
        'phone_number' => 'required',
        'department_id' => 'required|exists:departments,id',
   ]);
 
   $instructor->name = $request->name;
        $instructor->academic_level = $request->academic_level;
        $instructor->gender = $request->gender;
        $instructor->phone_number = $request->phone_number;
        $instructor->email = $request->email;
        $instructor->department_id = $request->department_id;
        $instructor->description = $request->description;
     
        $instructor->image = $this->upload_image($request->file('image'));


     
      
    if( $instructor->update())
     return redirect()->route('instructors')->with('success', 'تمت الاضافة بنجاح');
          
     
    
     


    
    
}


public function delete( $id)
{
    $instructor = Instructor::find($id);

   

    if( $instructor->delete())
    return redirect()->route('instructors')->with('success', 'تمت الاضافة بنجاح');
    





}
public function profile(Instructor $instructor)
{  

     // $department = $instructor->departments->name;
    
    

      

    return view('instructors.profile_instructor',['instructor'=> $instructor
  ]); 
   
}

}
