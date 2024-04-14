<?php

namespace App\Http\Controllers;

use App\Exports\DocumentsExport;
use App\Exports\PaymentsExport;
use App\Exports\ScoresExport;
use App\Exports\StudentsExport;
use App\Imports\DocumentsImport;
use App\Imports\PaymentsImport;
use App\Imports\ScoresImport;
use App\Imports\StudentsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
  public function index($type)
  {
    return view('data.import')->with('type', $type);
  }

  public function import(Request $request, $type)
  {
    // dd($request->file('file')->path());
    try {
      $request->validate([
        'file' => 'required|mimes:xls,xlsx',
      ]);
      $model = null;
      $route = '';
      if ($type == 'students') {
        $model = new StudentsImport;
        $route = 'students_info';
      } else if ($type == 'marks') {
        $model = new ScoresImport;
        $route = 'students_marks';
      } else if ($type == 'documents') {
        $model = new DocumentsImport;
        $route = 'students_documents';
      } else if ($type == 'fees') {
        $model = new PaymentsImport;
        $route = 'students_fees';
      }

      Excel::import($model, $request->file('file'));
      return redirect()->route($route)->with('success', 'تمت الاضافة بنجاح');
    } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
      $failures = $e->failures();

      $errors = [];
      foreach ($failures as $failure) {
        if (!isset($errors[$failure->row()]))
          $errors[$failure->row()] = [];
        $errors[$failure->row()][] = implode(', ', $failure->errors());
      }
      foreach ($errors as $index => $error) {
        $errors[$index] = 'At row ' . $index . ': <br />&nbsp;&nbsp;&nbsp;&nbsp;- ' . implode('<br />&nbsp;&nbsp;&nbsp;&nbsp;- ', $error);
      }
      return back()->withErrors($errors)->withInput();
    }
  }

  public function download(Request $request, $type)
  {
    $model = null;
    if ($type == 'students') {
      $model = new StudentsExport;
    } else if ($type == 'marks') {
      $model = new ScoresExport($request->student_id);
    } else if ($type == 'documents') {
      $model = new DocumentsExport($request->student_id);
    } else if ($type == 'fees') {
      $model = new PaymentsExport($request->student_id);
    } else return abort(404);

    return Excel::download($model, $type . '.xlsx');
  }
}
