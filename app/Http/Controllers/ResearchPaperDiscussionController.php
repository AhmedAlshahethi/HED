<?php

namespace App\Http\Controllers;

use App\Models\ResearchPaper;
use App\Models\Seminar;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResearchPaperDiscussionController extends Controller
{
    public function index()
    {
        $students = Seminar::where('status', '1')->with('departments')->with('students')->get();
        return view('students_thesis.research_discussions.list_students')->with('all_students', $students);
    }
    public function create()
    {

        return view('students_thesis.research_discussions.add_discussion');

        // return view(
        //     'students_thesis.research_discussions.add_discussions'
        //     [
        //         'student' => $student,
        //         'seminar' => Seminar::where('student', $student->id)->first(),
        //     ]
        // );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'section_approvement_date' => 'required',
            'section_approvement_number' => 'required|numeric',
            'college_approvement_date' => 'required',
            'college_approvement_number' => 'required|numeric',
            'score' => 'required|numeric',
            'file_path' => 'nullable|file',
            'notes' => 'nullable',
            'seminar_id' => 'required',
        ]);

        if ($request->file('file_path')) {
            $file = $request->file('file_path');
            $filename = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/files/research_paper'), $filename);
            $save_url = 'upload/files/research_paper/' . $filename;

            $data['file_path'] = $save_url;
        }
        ResearchPaper::create($data);

        $notification = array(
            'message' => 'تمت اضافة بيانات رسالة بنجاح',
            'alert-type' => 'success'
        );
        return redirect()->route('students_papers')->with($notification);
    }

    public function edit(ResearchPaper $researchPaper)
    {
        return view(
            'students_thesis.research_papers.edit_research_paper',
            [
                'researchPaper' => $researchPaper,
                'seminar' => Seminar::where('id', $researchPaper->id)->first(),
            ]
        );
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'section_approvement_date' => 'required',
            'section_approvement_number' => 'required|numeric',
            'college_approvement_date' => 'required',
            'college_approvement_number' => 'required|numeric',
            'score' => 'required|numeric',
            'file_path' => 'nullable|file',
            'notes' => 'nullable',
            'seminar_id' => 'required',
        ]);

        if ($request->hasFile('file_path')) {
            $existingData = ResearchPaper::where('id', $request->id)->first();
            if ($existingData) {
                @unlink(public_path($existingData->file_path));
            }
            $file = $request->file('file_path');
            $filename = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/files/research_paper'), $filename);
            $save_url = 'upload/files/research_paper/' . $filename;

            $data['file_path'] = $save_url;
        }
        $data['updated_at'] = Carbon::now();
        ResearchPaper::where('id', $request->id)->update($data);

        $notification = array(
            'message' => 'تم تحديث بيانات رسالة بنجاح',
            'alert-type' => 'success'
        );
        return redirect()->route('students_papers')->with($notification);
    }
}
