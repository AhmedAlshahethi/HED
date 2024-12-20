<?php

namespace App\Http\Controllers;

use App\Models\PublishedResearchPaper;
use App\Models\ResearchPaper;
use App\Models\Seminar;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class PublishedResearchPaperController extends Controller
{
    public function index()
    {

        // Retrieve students from ResearchPaper table based on seminar IDs
        $students = Student::whereHas('seminars', function ($seminar) {
            return $seminar->whereHas("researchPaper", function ($paper) {
                return $paper->whereHas('discussion');
            });
        })->get();
        return view('students_thesis.journals.list_students')->with('all_students', $students);
    }
    public function create(Student $student)
    {
        $student->load('seminars.researchPaper');
        $seminar =
            $student->seminars->last();
        $journals = PublishedResearchPaper::where('reasearch_paper_id', $seminar->researchPaper->id)->get();

        return view(
            'students_thesis.journals.add_journal',
            [
                'student' => $student,
                'seminar' => $seminar,
                'research_id' => $seminar->researchPaper->id,
                'journals' => $journals,
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


    public function update(Request $request)
    {
        $journalId = $request->input('journal_id');
        $journal = PublishedResearchPaper::find($journalId);
        if ($journal) {
            $journal->journal_name = $request->input('journal_name');
            $journal->link = $request->input('journal_link');
            $journal->notes = $request->input('notes');
            $journal->save();
            // Optionally, you can add a success flash message or perform any other actions
        }

        // $notification = [
        //     'message' => 'تمت تعديل بيانات المجلة العلمية بنجاح',
        //     'alert-type' => 'success'
        // ];
        // return redirect()->back()->with($notification);

        return response()->json([
            'message' => 'تمت تعديل بيانات المجلة العلمية بنجاح',
            // 'delay' => 1000
        ]);
    }


    public function delete($id)
    {
        $journal = PublishedResearchPaper::find($id);

        // if (!$journal) {
        //     return Response::json(['error' => 'Journal not found.'], 404);
        // }

        $journal->delete();

        $notification = [
            'message' => 'تمت حذف بيانات المجلة العلمية بنجاح',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }
}
