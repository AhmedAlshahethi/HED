<?php

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


Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware'=> ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],function(){

    Route::view('/login','login_page.login')->name('login');

    Route::view('/sections','sections.list_sections')->name('sections');

    Route::view('/add_section','sections.add_section')->name('add_section');

    Route::view('/edit_section','sections.edit_section')->name('edit_section');

    Route::view('/subjects','subjects.list_subjects')->name('subjects');

    Route::view('/add_subject','subjects.add_subject')->name('add_subject');

    Route::view('/edit_subject','subjects.edit_subject')->name('edit_subject');

    Route::view('/instructors','instructors.list_instructors')->name('instructors');

    Route::view('/add_instructor','instructors.add_instructor')->name('add_instructor');

    Route::view('/edit_instructor','instructors.edit_instructor')->name('edit_instructor');

    Route::view('/profile','instructors.profile_instructor')->name('profile_instructor');

    Route::view('/students_info','students.manage_students_info.list_students')->name('students_info');

    Route::view('/add_student','students.manage_students_info.add_student')->name('add_student');

    Route::view('/view_student','students.manage_students_info.view_student')->name('view_student');

    Route::view('/edit_student','students.manage_students_info.edit_student')->name('edit_student');

    Route::view('/students_documents','students.manage_students_doc.list_students')->name('students_documents');

    Route::view('/add_document','students.manage_students_doc.add_document')->name('add_document');

    Route::view('/view_document','students.manage_students_doc.view_document')->name('view_document');

    Route::view('/edit_document','students.manage_students_doc.edit_document')->name('edit_document');

    Route::view('/delete_document','students.manage_students_doc.delete_document')->name('delete_document');

    Route::view('/students_fees','students.manage_students_fees.list_students')->name('students_fees');

    Route::view('/add_fee','students.manage_students_fees.add_fee')->name('add_fee');

    Route::view('/view_fees','students.manage_students_fees.view_fee')->name('view_fee');

    Route::view('/edit_fees','students.manage_students_fees.edit_fee')->name('edit_fee');

    Route::view('/delete_fees','students.manage_students_fees.delete_fee')->name('delete_fee');

    Route::view('/students_marks','students.manage_students_marks.list_students')->name('students_marks');

    Route::view('/add_mark','students.manage_students_marks.add_mark')->name('add_mark');

    Route::view('/view_marks','students.manage_students_marks.view_mark')->name('view_mark');

    Route::view('/edit_marks','students.manage_students_marks.edit_mark')->name('edit_mark');

    Route::view('/delete_marks','students.manage_students_marks.delete_mark')->name('delete_mark');

    Route::view('/documents_type','documents.list_documents')->name('documents_type');

    Route::view('/add_document_type','documents.add_document')->name('add_document_type');

    Route::view('/edit_document_type','documents.edit_document')->name('edit_document_type');

    Route::view('/schedules','schedules.list_schedules')->name('schedules');

    Route::view('/add_schedule','schedules.add_schedule')->name('add_schedule');

    Route::view('/edit_schedule','schedules.edit_schedule')->name('edit_schedule');

    Route::view('/view_schedule','schedules.view_schedule')->name('view_schedule');

    Route::view('/users','users.list_users')->name('users');

    Route::view('/add_user','users.add_user')->name('add_user');

    Route::view('/edit_user','users.edit_user')->name('edit_user');

    Route::view('/archive_thesis','thesis.list_thesis')->name('archive_thesis');

    Route::View('/students_seminars','students_thesis.seminars.list_students')->name('students_seminars');

    Route::View('/add_seminar','students_thesis.seminars.add_seminar')->name('add_seminar');

    Route::View('/view_seminar','students_thesis.seminars.view_seminar')->name('view_seminar');

    Route::View('/edit_seminar','students_thesis.seminars.edit_seminar')->name('edit_seminar');

    Route::View('/delete_seminar','students_thesis.seminars.delete_seminar')->name('delete_seminar');

    Route::View('/students_papers','students_thesis.research_papers.list_students')->name('students_papers');

    Route::View('/add_research_paper','students_thesis.research_papers.add_research_paper')->name('add_research_paper');

    Route::View('/edit_research_paper','students_thesis.research_papers.edit_research_paper')->name('edit_research_paper');

    Route::View('/view_research_paper','students_thesis.research_papers.view_research_paper')->name('view_research_paper');

    Route::View('/delete_research_paper','students_thesis.research_papers.delete_research_paper')->name('delete_research_paper');

    Route::View('/students_discussions','students_thesis.research_discussions.list_students')->name('students_discussions');

    Route::View('/add_discussion','students_thesis.research_discussions.add_discussion')->name('add_discussion');

    Route::View('/edit_discussion','students_thesis.research_discussions.edit_discussion')->name('edit_discussion');

    Route::View('/view_discussion','students_thesis.research_discussions.view_discussion')->name('view_discussion');

    Route::View('/delete_discussion','students_thesis.research_discussions.delete_discussion')->name('delete_discussion');

    Route::View('/students_journals','students_thesis.journals.list_students')->name('students_journals');

    Route::View('/add_journal','students_thesis.journals.add_journal')->name('add_journal');

    Route::View('/edit_journal','students_thesis.journals.edit_journal')->name('edit_journal');

    Route::View('/view_journal','students_thesis.journals.view_journal')->name('view_journal');

    Route::View('/delete_journal','students_thesis.journals.delete_journal')->name('delete_journal');

    
});


