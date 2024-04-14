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
        $students = Student::with('departments')->get();
        return view('students_thesis.seminars.list_students')->with('all_students', $students);
    }
    public function create(Student $student)
    {

        return view(
            'students_thesis.seminars.add_seminar',
            [
                'student' => $student,
                'instructors' => Instructor::all(['id', 'name'])
            ]
        );
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'student' => 'required',
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
        return redirect()->route('students_seminars')->with($notification);
    }

    public function edit(Student $student)
    {
        return view(
            'students_thesis.seminars.edit_seminar',
            [
                'student' => $student,
                'seminar' => Seminar::where('student', $student->id)->first(),
                'instructors' => Instructor::all(['id', 'name'])
            ]
        );
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'student' => 'required',
            'title' => 'required',
            'date' => 'required',
            'supervisor' => 'required|exists:instructors,id',
            'sub_supervisor' => 'required|exists:instructors,id',
            'status' => 'nullable',
        ]);
        $data['status'] = $request->has('status') ? 1 : 0;

        Seminar::where('id', $request->id)->update($data);

        $notification = array(
            'message' => 'تم تعديل بيانات سيمنار بنجاح',
            'alert-type' => 'success'
        );
        return redirect()->route('students_seminars')->with($notification);
    }
}
