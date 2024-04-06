<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Instructor;


class ResearchPaperController extends Controller
{
    public function index()
    {
        $students = Seminar::where('status', '1')->with('departments')->with('students')->get();
        return view('students_thesis.research_papers.list_students')->with('all_students', $students);
    }
    public function create(Student $student)
    {

        return view(
            'students_thesis.research_papers.add_research_paper',
            [
                'student' => $student,
                'instructors' => Instructor::all(['id', 'name'])
            ]
        );
    }
}
