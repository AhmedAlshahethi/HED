<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Schedule;
use App\Models\ScheduleEntry;
use App\Models\Subject;
use Illuminate\Console\Scheduling\Schedule as SchedulingSchedule;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ScheduleEntryController extends Controller
{ 

    public function index(){
    

        $schedules = Schedule::get();

        return view('schedules.list_schedules')->with("schedules",$schedules);


    }

    public function view(Schedule $schedule){

        
        
        $scheduleEntries = ScheduleEntry::where('schedule_id',$schedule->id)->get();


        return view('schedules.view_schedule',['scheduleEntries'=> $scheduleEntries,
        'schedule' =>$schedule
    ]); 

    }

    
    public function create(){

                

     
        $instructors = Instructor::all(['id', 'name']);
        $subjects = Subject::all(['id', 'name']);
        $i = 0; // Initial value for row counter
    
        return view('schedules.add_schedule', compact('instructors', 'subjects', 'i'));
    }

    

    public function store(Request $request)
    {
       
       
     
          
         $schedule = new Schedule();
     $data = new Collection($request);
     $schedule->name =$data['name'];
     if($schedule->save()){
        $numberofentries=0;
        
      
     $instructorIds = [];
     $subjectIds=[];
     $days=[];
     $start_times=[];
     $class_rooms=[];


        foreach ($data['instructor_id'] as $instructorData) {
            $instructorIds[] = $instructorData['instructor_id'];
            $numberofentries++; // Access the nested ID
        } 
        
        foreach ($data['subject_id'] as $subjectData) {
            $subjectIds[] = $subjectData['subject_id'];
           
        } 
        
        foreach ($data['class_room'] as $class_roomData) {
            if($class_roomData['class_room']==null){
                $class_rooms[] ="undecided";
            }
            else{
                $class_rooms[] = $class_roomData['class_room']; // Access the nested ID

            }

        }
        foreach ($data['day'] as $dayData) {
            $days[] = $dayData['day']; // Access the nested ID
        }
        foreach ($data['start_time'] as $start_timeData) {
            $start_times[] = $start_timeData['start_time']; // Access the nested ID
        }

          
             $saved_entries_counter=0;

       for($x=0 ;$x<$numberofentries ;$x++){  //loop should start form zero
          
        $scheduleEntry =new ScheduleEntry();

        $scheduleEntry->schedule_id =$schedule->id;
        $scheduleEntry->instructor_id = $instructorIds[$x];
        $scheduleEntry->subject_id = $subjectIds[$x];
        $scheduleEntry->class_room = $class_rooms[$x];
        $scheduleEntry->day = $days[$x];
        $scheduleEntry->start_time = $start_times[$x];
        
          $scheduleEntry->save();
         
                                            }
            
             //return "recieved should be :".$numberofentries."</br>inserted:".$saved_entries_counter."</br>deleted".$deleted;
            return redirect()->route("schedules");
             

             
      

    
        
       

        // Now you have all instructor IDs in the $instructorIds array

        // Example: Display them
       
      

       
      
      



        
    
                             }// end of if         
        
        
    }
  
     

    public function edit(Schedule $schedule ){
        $subjects = Subject::get();
        $instructors = Instructor::get();
  

        $scheduleEntries = ScheduleEntry::where('schedule_id',$schedule->id)->get();
        $scheduleEntries_for_update = $scheduleEntries;

        $i = 0;


        return view('schedules.edit_schedule',['subjects'=> $subjects,
         'instructors'=>$instructors,
         'scheduleEntries' => $scheduleEntries,
         'schedule' => $schedule,
         'i' => $i
     ]); 


    }
    
 
    public function add_new( Request $request ,Schedule $schedule){

   
        $data = new Collection($request);  
       
        $instructorIds = [];
        $subjectIds=[];
        $days=[];
        $start_times=[];
        $class_rooms=[];
        $numberofentries =0;

        foreach($data["instructor_id"] as $inst){
             
            $instructorIds[]= $inst["instructor_id"];
            $numberofentries++;
       
    } 
    foreach ($data['subject_id'] as $subjectData) {
        $subjectIds[] = $subjectData['subject_id'];
       
    } 
    
    foreach ($data['class_room'] as $class_roomData) {
        if($class_roomData['class_room']==null){
            $class_rooms[] ="undecided";
        }
          else{
        $class_rooms[] = $class_roomData['class_room'] ;} // Access the nested ID
    }
    foreach ($data['day'] as $dayData) {
        $days[] = $dayData['day']; // Access the nested ID
    }
    foreach ($data['start_time'] as $start_timeData) {
        $start_times[] = $start_timeData['start_time']; // Access the nested ID
    } 
    for($x=0 ;$x<$numberofentries ;$x++){  //loop should start form zero
          
        $scheduleEntry =new ScheduleEntry();

        $scheduleEntry->schedule_id =$schedule->id;
        $scheduleEntry->instructor_id = $instructorIds[$x];
        $scheduleEntry->subject_id = $subjectIds[$x];
        $scheduleEntry->class_room = $class_rooms[$x];
        $scheduleEntry->day = $days[$x];
        $scheduleEntry->start_time = $start_times[$x];
        
        $scheduleEntry->save();
    
    }
       
   



    }
 
    public function update(Request $request ,Schedule $schedule){
         

        return  $request;
         

           
     
           
    

        $scheduleEntries = ScheduleEntry::where('schedule_id',$schedule->id)->get();    
          
        
        //return $scheduleEntries[];
        
       
        $data = new Collection($request); 
       
        $schedule->name= $data["name"];
        $schedule->update();
        $numberofold=0;
        foreach($scheduleEntries as $entry){
      

            $dataforupdate =  $data[$entry->id];
             
            $entry->instructor_id = $dataforupdate["instructor"];
            $entry->day = $dataforupdate["day"];
            $entry->class_room = $dataforupdate["class_room"];
            $entry->subject_id = $dataforupdate["subject_id"];
            $entry->start_time = $dataforupdate["start_time"];

            $entry->update();

           $numberofold++; 


        } 
        $numberofnew = $data->count();
       
        $numberofnew= $numberofnew-$numberofold;
        $numberofnew = $numberofnew-2;
        if($numberofnew ==0)
        return redirect()->route("schedules");
    else
      {
       
  
     
     $this->add_new($request,$schedule);
     return redirect()->route('schedules');
      
        

}        

       

        
    }
    
     public function delete($id)  {
   
        $scheduleEntries_toBe_deleted= ScheduleEntry::where('schedule_id',$id)->get();

        foreach($scheduleEntries_toBe_deleted as $entry){
         
            $entry->delete();

        }
        $schedule= Schedule::find($id);
        if($schedule->delete())
        return redirect()->route('schedules'); 
   

        
     }
     public function delete_entry($id)  {
   
        $scheduleEntry= ScheduleEntry::find($id);
       
        if($scheduleEntry != null){

            if($scheduleEntry->delete())
            //return redirect()->route('edit_schedule', $schedule); 
            return redirect()->back(); 

        }
        else{

            return redirect()->back(); 

        }
          

        
        
      
        

        
     }
 


}
