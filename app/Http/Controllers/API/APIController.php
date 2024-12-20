<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class APIController extends Controller
{
  public function login(Request $request)
  {
    try {
      $validator = Validator::make(
        $request->all(),
        [
          'email' => 'required|email',
          'password' => 'required',
        ]
      );
      if ($validator->fails()) {
        return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
      }
      $student = Student::where('email', $request->email)->first();

      if (!$student || !Hash::check($request->password, $student->password)) {
        return response()->json(['success' => false, 'errors' => ['email' => ['الإيميل أو كلمة السر غير صحيحة']]], 401);
      }
      $token = $student->createToken('AccessToken')->plainTextToken;
      $student->save();
      return response()->json([
        'token' => 'Bearer ' . $token,
        'success' => true
      ]);
    } catch (Exception $e) {
      return response()->json(['success' => false], 500);
    }
  }

  public function logout(Request $request)
  {
    try {
      $student = Student::find($request->user()->id);
      $student->tokens()->delete();
      return response()->json(['success' => true]);
    } catch (Exception $e) {
      return response()->json(['success' => false], 500);
    }
  }

  public function info(Request $request)
  {
    $student = Student::find($request->user()->id);
    return response()->json([
      'success' => true, 'info' => [
        'name' => $student->name,
        'department' => $student->departments->name,
        'registration_type' => $student->registration_type
      ]
    ]);
  }

  public function marks(Request $request)
  {
    $student = Student::find($request->user()->id);
    return response()->json(['success' => true, 'marks' => $student->marks->map(fn ($mark) => [
      'subject' => $mark->subject->name,
      'term' => $mark->subject->semester,
      'class_mark' => $mark->class_mark,
      'final_exam' => $mark->final_exam,
      'grade' => $mark->general_grade
    ])]);
  }

  public function schedule(Request $request)
  {
    $days = [
      1 => 'السبت',
      2 => 'الأحد',
      3 => 'الأثنين',
      4 => 'الثلاثاء',
      5 => 'الأربعاء',
      6 => 'الخميس',
      7 => 'الجمعة'
    ];
    $schedule = Student::find($request->user()->id)->departments->subjects->load(['scheduleEntries.schedule', 'scheduleEntries.instructor']);
    return response()->json([
      'success' => true,
      'schedule' => collect(array_merge(...$schedule->map(fn ($subject) => $subject->scheduleEntries->map(fn ($entry) => [
        'day_number' => $entry->day,
        'day' => $days[$entry->day],
        'time' => $entry->start_time,
        'subject' => $subject->name,
        'room' => $entry->class_room,
        'instructor' => $entry->instructor->name,
        'schedule' => $entry->schedule->name
      ]))->toArray()))->sortBy('day_number')->groupBy('schedule')
    ]);
  }

  public function instructors(Request $request)
  {
    $instructors = Instructor::all();

    return response()->json(['success' => true, 'instructors' => $instructors->map(fn ($instructor) => [
      'id' => $instructor->id,
      'img' => $instructor->image,
      'name' => $instructor->name,
      'position' => $instructor->academic_level
    ])]);
  }

  public function instructor(Instructor $instructor)
  {
    return response()->json(['success' => true, 'instructor' => [
      'name' => $instructor->name,
      'email' => $instructor->email,
      'position' => $instructor->academic_level,
      'img' => $instructor->image,
      'department' => $instructor->departments->name,
      'description' => $instructor->description
    ]]);
  }

  public function files()
  {
    $files = array_map(fn ($file) => basename($file), glob(public_path('WebsiteFiles') . '/*'));
    return response()->json(['success' => true, 'files' => $files]);
  }

  public function downloadFile($file)
  {
    if (!file_exists(public_path('WebsiteFiles') . '/' . $file)) {
      abort(404);
    }
    return response()->file(public_path('WebsiteFiles') . '/' . $file);
  }
}
