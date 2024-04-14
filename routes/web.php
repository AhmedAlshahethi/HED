<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentTypeController;
use App\Http\Controllers\FinalResultController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\PublishedResearchPaperController;
use App\Http\Controllers\ResearchPaperController;
use App\Http\Controllers\ResearchPaperDiscussionController;
use App\Http\Controllers\ScheduleEntryController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentPaymentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Models\DocumentType;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});
// new routes


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

  Route::view('/login', 'login_page.login')->name('login');

  Route::prefix('data')->group(function () {
    Route::get('/import/{type}', [ImportController::class, 'index'])->name('import_data');
    Route::post('/import/{type}', [ImportController::class, 'import'])->name('import_data');
    Route::get('/export/{type}', [ImportController::class, 'download'])->name('export_data');
  });

  Route::group(['prefix' => 'students'], function () {
    Route::get('/info', [StudentController::class, 'index'])->name('students_info');
    Route::get('/add', [StudentController::class, 'create'])->name('add_student');
    Route::post('/store', [StudentController::class, 'store'])->name('store_student');
    Route::get('/view/{student}', [StudentController::class, 'view'])->name('view_student');
    Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('edit_student');
    Route::get('/delete/{id}', [StudentController::class, 'delete'])->name('delete_student');
    Route::post('/update/{student}', [StudentController::class, 'update'])->name('update_student');
    Route::get('/documents', [StudentController::class, 'index_students_doc'])->name('students_documents');
  });

  Route::group(['prefix' => 'departments'], function () {
    //Route::view('/info', 'sections.list_sections')->name('sections');

    Route::get('/info', [DepartmentController::class, 'Index'])->name('sections');
    Route::get('/add', [DepartmentController::class, 'create'])->name('add_section');
    Route::post('/store', [DepartmentController::class, 'store'])->name('store_section');
    Route::view('/edit_section', 'sections.edit_section')->name('edit_section');
  });

  Route::group(['prefix' => 'subjects'], function () {
    //Route::view('/info','subjects.list_subjects')->name('subjects');
    Route::get('/info', [SubjectController::class, 'index'])->name('subjects');

    Route::get('/add', [SubjectController::class, 'create'])->name('add_subject');
    Route::post('/store', [SubjectController::class, 'store'])->name('store_subject');
    Route::get('/edit_subject/{subject}', [SubjectController::class, 'edit'])->name('edit_subject');
    Route::post('/update_subject/{subject}', [SubjectController::class, 'update'])->name('update_subject');
    Route::get('/delete_subject/{id}', [SubjectController::class, 'delete'])->name('delete_subject');
  });
  Route::group(['prefix' => 'instructors'], function () {
    Route::get('/info', [InstructorController::class, 'index'])->name('instructors');
    Route::get('/edit_instructor/{instructor}', [InstructorController::class, 'edit'])->name('edit_instructor');
    Route::get('/profile/{instructor}', [InstructorController::class, 'profile'])->name('profile_instructor');
    Route::get('/delete_instructor/{id}', [InstructorController::class, 'delete'])->name('delete_instructor');

    Route::post('/update_instructor/{instructor}', [InstructorController::class, 'update'])->name('update_instructor');

    Route::get('/add', [InstructorController::class, 'create'])->name('add_instructor');
    Route::post('/store', [InstructorController::class, 'store'])->name('store_instructor');
    // Route::view('/edit_instructor', 'instructors.edit_instructor')->name('edit_instructor');
    // Route::view('/profile', 'instructors.profile_instructor')->name('profile_instructor');
  });

  Route::group(['prefix' => 'documents'], function () {
    Route::view('/info', 'students.manage_students_doc.view_document')->name('documents');
    Route::get('/add', [DocumentController::class, 'create'])->name('add_document');
    Route::post('/store', [DocumentController::class, 'store'])->name('store_document');

    // Route::view('/add_document', 'students.manage_students_doc.add_document')->name('add_document');

    Route::view('/view_document', 'students.manage_students_doc.view_document')->name('view_document');

    Route::view('/edit_document', 'students.manage_students_doc.edit_document')->name('edit_document');

    Route::view('/delete_document', 'students.manage_students_doc.delete_document')->name('delete_document');
  });

  Route::group(['prefix' => 'fees'], function () {
    Route::get('/info', [StudentPaymentController::class, 'index'])->name('students_fees');
    Route::get('/add', [StudentPaymentController::class, 'create'])->name('add_fee');
    Route::post('/store', [StudentPaymentController::class, 'store'])->name('store_fee');
    Route::view('/edit_fees', 'students.manage_students_fees.edit_fee')->name('edit_fee');
    Route::view('/view_fees', 'students.manage_students_fees.view_fee')->name('view_fee');
    Route::view('/delete_fees', 'students.manage_students_fees.delete_fee')->name('delete_fee');

    // Route::view('/add_fee', 'students.manage_students_fees.add_fee')->name('add_fee');
  });

  Route::group(['prefix' => 'marks'], function () {
    Route::get('/info', [FinalResultController::class, 'index'])->name('students_marks');
    Route::get('/add', [FinalResultController::class, 'create'])->name('add_mark');
    Route::post('/store', [FinalResultController::class, 'store'])->name('store_mark');

    // Route::view('/add_mark', 'students.manage_students_marks.add_mark')->name('add_mark');

    Route::view('/view_marks', 'students.manage_students_marks.view_mark')->name('view_mark');

    Route::view('/edit_marks', 'students.manage_students_marks.edit_mark')->name('edit_mark');

    Route::view('/delete_marks', 'students.manage_students_marks.delete_mark')->name('delete_mark');
  });


  Route::group(['prefix' => 'documents_types'], function () {
    Route::get('/info', [DocumentTypeController::class, 'index'])->name('documents_type');
    Route::get('/add', [DocumentTypeController::class, 'create'])->name('add_document_type');
    Route::post('/store', [DocumentTypeController::class, 'store'])->name('store_document_type');


    // Route::view('/add_document_type', 'documents.add_document')->name('add_document_type');
    Route::get('/edit_document_type/{docs_type}', [DocumentTypeController::class, 'edit'])->name('edit_document_type');
    Route::post('/update_document_type/{docs_type}', [DocumentTypeController::class, 'update'])->name('update_document_type');

    Route::get('/delete_document_type/{id}', [DocumentTypeController::class, 'delete'])->name('delete_document_type');
  });

  Route::group(['prefix' => 'schedules'], function () {
    Route::get('/info', [ScheduleEntryController::class, 'index'])->name('schedules');
    Route::get('/add', [ScheduleEntryController::class, 'create'])->name('add_schedule');
    Route::post('/store', [ScheduleEntryController::class, 'store'])->name('store_schedule');

    // Route::view('/add_schedule', 'schedules.add_schedule')->name('add_schedule');

    Route::get('/edit_schedule/{schedule}', [ScheduleEntryController::class, 'edit'])->name('edit_schedule');
    Route::post('/edit_schedule/{schedule}', [ScheduleEntryController::class, 'update'])->name('update_schedule');


    Route::get('/view_schedule/{schedule}', [ScheduleEntryController::class, 'view'])->name('view_schedule');
    Route::get('/delete_schedule/{id}', [ScheduleEntryController::class, 'delete'])->name('delete_schedule');
    Route::get('/delete_schedule_entry/{id}', [ScheduleEntryController::class, 'delete_entry'])->name('delete_schedule_entry');
  });


  Route::group(['prefix' => 'users'], function () {
    Route::view('/info', 'users.list_users')->name('users');
    Route::get('/add', [UserController::class, 'create'])->name('add_user');
    Route::post('/store', [UserController::class, 'store'])->name('store_user');

    // Route::view('/add_user', 'users.add_user')->name('add_user');

    Route::view('/edit_user', 'users.edit_user')->name('edit_user');
  });

  Route::group(['prefix' => 'seminars'], function () {
    Route::get('/info', [SeminarController::class, 'index'])->name('students_seminars');
    Route::get('/add/{student}', [SeminarController::class, 'create'])->name('add_seminar');
    Route::post('/store', [SeminarController::class, 'store'])->name('store_seminar');

    // Route::View('/add_seminar', 'students_thesis.seminars.add_seminar')->name('add_seminar');

    Route::View('/view_seminar', 'students_thesis.seminars.view_seminar')->name('view_seminar');

    Route::get('/edit/{student}', [SeminarController::class, 'edit'])->name('edit_seminar');
    Route::post('/update', [SeminarController::class, 'update'])->name('update_seminar');

    Route::View('/delete_seminar', 'students_thesis.seminars.delete_seminar')->name('delete_seminar');
  });

  Route::group(['prefix' => 'research_papers'], function () {
    Route::get('/info', [ResearchPaperController::class, 'index'])->name('students_papers');
    Route::get('/add/{student}', [ResearchPaperController::class, 'create'])->name('add_research_paper');
    Route::post('/store', [ResearchPaperController::class, 'store'])->name('store_research_paper');

    // Route::View('/add_research_paper', 'students_thesis.research_papers.add_research_paper')->name('add_research_paper');

    Route::get('/edit/{researchPaper}', [ResearchPaperController::class, 'edit'])->name('edit_research_paper');
    Route::post('/update', [ResearchPaperController::class, 'update'])->name('update_research_paper');

    Route::View('/view_research_paper', 'students_thesis.research_papers.view_research_paper')->name('view_research_paper');

    Route::View('/delete_research_paper', 'students_thesis.research_papers.delete_research_paper')->name('delete_research_paper');
  });

  Route::group(['prefix' => 'discussions'], function () {
    Route::View('/info', 'students_thesis.research_discussions.list_students')->name('students_discussions');
    Route::get('/add', [ResearchPaperDiscussionController::class, 'create'])->name('add_discussion');
    Route::post('/store', [ResearchPaperDiscussionController::class, 'store'])->name('store_discussion');

    // Route::View('/add_discussion', 'students_thesis.research_discussions.add_discussion')->name('add_discussion');

    Route::View('/edit_discussion', 'students_thesis.research_discussions.edit_discussion')->name('edit_discussion');

    Route::View('/view_discussion', 'students_thesis.research_discussions.view_discussion')->name('view_discussion');

    Route::View('/delete_discussion', 'students_thesis.research_discussions.delete_discussion')->name('delete_discussion');
  });


  Route::group(['prefix' => 'journals'], function () {
    Route::View('/info', 'students_thesis.journals.list_students')->name('students_journals');
    Route::get('/add', [PublishedResearchPaperController::class, 'create'])->name('add_journal');
    Route::post('/store', [PublishedResearchPaperController::class, 'store'])->name('store_journal');

    // Route::View('/add_journal', 'students_thesis.journals.add_journal')->name('add_journal');

    Route::View('/edit_journal', 'students_thesis.journals.edit_journal')->name('edit_journal');

    Route::View('/view_journal', 'students_thesis.journals.view_journal')->name('view_journal');

    Route::View('/delete_journal', 'students_thesis.journals.delete_journal')->name('delete_journal');
  });



  Route::view('/archive_thesis', 'thesis.list_thesis')->name('archive_thesis');
});
 //Route::get('/courses',[SubjectController::class,'Index']);