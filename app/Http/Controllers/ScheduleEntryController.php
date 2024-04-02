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

            $class_rooms[] = $class_roomData['class_room']; // Access the nested ID
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
        
        if($scheduleEntry->save())
        $saved_entries_counter++;
                                            }
      
         if($saved_entries_counter!=$numberofentries){
           $deleted=0;
            $scheduleEntries_toBe_deleted= ScheduleEntry::where('schedule_id',$schedule->id)->get();
            foreach($scheduleEntries_toBe_deleted as $entrie){
               if($entrie->delete())
               $deleted++;

                
            }
             //return "recieved should be :".$numberofentries."</br>inserted:".$saved_entries_counter."</br>deleted".$deleted;
             if($deleted == $saved_entries_counter) {
                $schedule->delete();


                                                    }
              
         
             }

             
      

    
        
       

        // Now you have all instructor IDs in the $instructorIds array

        // Example: Display them
       
      

       
      
        return redirect()->route('schedules'); 



        
    
    }// end of if         
        
        
    }
        

}
