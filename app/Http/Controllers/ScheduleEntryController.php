<?php

namespace App\Http\Controllers;

use App\Models\ScheduleEntry;
use Illuminate\Http\Request;

class ScheduleEntryController extends Controller
{
    public function create(){
        return view('schedules.add_schedule');
    }

    public function store(Request $request){
        $data = $request->validate([
            'day' => 'required',
            'start_time' => 'required',
            'subject_id' => 'required',
            'instructor_id' => 'required',
            'class_room' => 'nullable',
        ]);
        ScheduleEntry::create($data);
        return redirect()->route('schedules')->with('success', 'تمت الاضافة بنجاح');
    }
}
