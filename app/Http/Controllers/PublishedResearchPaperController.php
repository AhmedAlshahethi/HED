<?php

namespace App\Http\Controllers;

use App\Models\PublishedResearchPaper;
use App\Models\ResearchPaper;
use App\Models\Seminar;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PublishedResearchPaperController extends Controller
{
    public function index()
    {
        // Retrieve seminar IDs with status = 1
        $seminarIds = Seminar::where('status', 1)->pluck('id');

        // Retrieve students from ResearchPaper table based on seminar IDs
        $students = ResearchPaper::whereIn('seminar_id', $seminarIds)
            ->with('seminar.students')
            ->get();
        return view('students_thesis.journals.list_students')->with('all_students', $students);
    }
    public function create(Student $student, ResearchPaper $researchPaper)
    {

        return view(
            'students_thesis.journals.add_journal',
            [
                'student' => $student,
                'seminar' => Seminar::where('student', $student->id)->first(),
                'research_id' => $researchPaper->id
            ]
        );
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'journal_name.*.journal_name' => 'required',
            'journal_link.*.journal_link' => 'required',
            'notes.*.notes' => 'nullable',
        ]);

        $validator->setCustomMessages([
            'journal_name.*.journal_name.required' => 'Please enter a journal name.',
            'journal_link.*.journal_link.required' => 'Please enter a journal link.',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        foreach ($request->journal_name as $index => $journalData) {
            $journal = new PublishedResearchPaper();
            $journal->journal_name = $journalData['journal_name'];
            $journal->link = $request->journal_link[$index]['journal_link'];
            $journal->notes = $request->notes[$index]['notes'] ?? '';
            $journal->reasearch_paper_id = $request->research_id;
            $journal->save();
        }

        $notification = [
            'message' => 'تمت إضافة بيانات المجلة العلمية بنجاح',
            'alert-type' => 'success'
        ];
        return redirect()->route('students_journals')->with($notification);
    }

    // public function edit(ResearchPaper $researchPaper)
    // {
    //     return view(
    //         'students_thesis.research_papers.edit_research_paper',
    //         [
    //             'researchPaper' => $researchPaper,
    //             'seminar' => Seminar::where('id', $researchPaper->id)->first(),
    //         ]
    //     );
    // }

    // public function update(Request $request)
    // {
    //     $data = $request->validate([
    //         'section_approvement_date' => 'required',
    //         'section_approvement_number' => 'required|numeric',
    //         'college_approvement_date' => 'required',
    //         'college_approvement_number' => 'required|numeric',
    //         'score' => 'required|numeric',
    //         'file_path' => 'nullable|file',
    //         'notes' => 'nullable',
    //         'seminar_id' => 'required',
    //     ]);

    //     if ($request->hasFile('file_path')) {
    //         $existingData = ResearchPaper::where('id', $request->id)->first();
    //         if ($existingData) {
    //             @unlink(public_path($existingData->file_path));
    //         }
    //         $file = $request->file('file_path');
    //         $filename = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
    //         $file->move(public_path('upload/files/research_paper'), $filename);
    //         $save_url = 'upload/files/research_paper/' . $filename;

    //         $data['file_path'] = $save_url;
    //     }
    //     $data['updated_at'] = Carbon::now();
    //     ResearchPaper::where('id', $request->id)->update($data);

    //     $notification = array(
    //         'message' => 'تم تحديث بيانات رسالة بنجاح',
    //         'alert-type' => 'success'
    //     );
    //     return redirect()->route('students_papers')->with($notification);
    // }
}
