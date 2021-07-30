<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Mail\RegistrationMailNotif;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::auth();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Exam Route
Route::get('/manage-exam', [App\Http\Controllers\ManageExamController::class, 'manageExam'])->name('manage-exam');
Route::post('/manage-exam/add-course', [App\Http\Controllers\ManageExamController::class, 'addCourse']);
Route::post('/add-or-update-exam', [App\Http\Controllers\ManageExamController::class, 'addOrUpdateExam'])->name('add-or-update-exam');
Route::get('/manage-exam/manage-exam-question/{id}', [App\Http\Controllers\ManageExamController::class, 'manageExamQuestion'])->name('manage-exam-question.id');
Route::get('/manage-exam/exam-report', [App\Http\Controllers\ManageExamController::class, 'examReport'])->name('exam-report');

Route::post('/manage-exam/manage-exam-question/add-questions', [App\Http\Controllers\QuestionController::class, 'addOrUpdateQuestions'])->name('add-questions');
Route::get('/start-exam/{id}', [App\Http\Controllers\ManageExamController::class, 'startExam'])->name('exam.id');
Route::get('/examination-list', [App\Http\Controllers\ManageExamController::class, 'listExam'])->name('list-exam');

Route::post('/start-exam/submit-exam', [App\Http\Controllers\QuestionController::class, 'submitAnswer']);
Route::get('/start-exam/submit-exam/result/{id}', [App\Http\Controllers\QuestionController::class, 'result'])->name('result.id');




// Registration route
Route::get('/register', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registration');
Route::get('/register/detail/{id}', [App\Http\Controllers\RegistrationController::class, 'getDetailRegister'])->name('detail.id');
Route::get('/register/confirm/{id}', [App\Http\Controllers\RegistrationController::class, 'confirmRegister'])->name('confirm.id');
Route::get('/student-registration', [App\Http\Controllers\RegistrationController::class, 'registrationStudent']);
Route::get('/student-registration/save', [App\Http\Controllers\RegistrationController::class, 'save']);


//biodata
Route::get('/home/biodata', [App\Http\Controllers\BiodataController::class, 'biodata'])->name('biodata');


//pengumuman

Route::get('/announcement', [App\Http\Controllers\AnnouncementController::class, 'index'])->name('announcement');
Route::post('/announcement/add-announcement', [App\Http\Controllers\AnnouncementController::class, 'add'])->name('add-announcement');


