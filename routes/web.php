<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/courses', [CoursesController::class, 'index']);

Route::get('/detail_course/{course}', [CoursesController::class, 'detailCourse']);

//Challenge
Route::get('/challenge', [ChallengeController::class, 'index']);
Route::get('/challenge/detail/{challenge:id}', [ChallengeController::class, 'detail']);
Route::get('/challenge/detail/{challenge:id}/{challengeTaken}', [ChallengeController::class, 'detailTaken'])->middleware('auth');
Route::post('/challenge-taken', [ChallengeController::class, 'join']);
Route::post('/challenge-answer', [ChallengeController::class, 'challengeSubmit']);

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

//Learning
Route::post('/join', [LearningController::class, 'join']);
Route::post('/continue', [LearningController::class, 'continue']);
Route::get('/summary/{learning:id}', [LearningController::class, 'summary'])->middleware('auth');
Route::get('/content/{detailLearning:id}', [LearningController::class, 'content'])->middleware('auth');

//Materi
Route::post('/prev', [LearningController::class, 'prev']);
Route::post('/next', [LearningController::class, 'next']);
Route::post('/finish', [LearningController::class, 'finish']);

//quiz
Route::post('/start-quiz', [QuizController::class, 'taken']);
Route::post('/prev-quest', [QuizController::class, 'prev']);
Route::post('/next-quest', [QuizController::class, 'next']);
Route::get('/content/quiz/{quizTaken:id}', [QuizController::class, 'index'])->middleware('auth');
Route::get('/content/quiz/{quizTaken:id}/{detailQuizTaken}', [QuizController::class, 'quiz'])->middleware('auth');
Route::post('/answer-quiz', [QuizController::class, 'answer']);
Route::get('/content/quiz-result/{detailLearning:id}/{quizTaken}', [QuizController::class, 'result']);

//eval
Route::get('/content/{detailLearning:id}/evaluation', [EvaluationController::class, 'index'])->middleware('auth');
Route::post('/eval-submit', [EvaluationController::class, 'evalSubmit']);

//certificate
Route::get('/content/{detailLearning:id}/certificate', [LearningController::class, 'certificate'])->middleware('auth');

//Auth
Route::get('/daftar', [RegistrationController::class, 'index'])->middleware('guest');
Route::post('/daftar', [RegistrationController::class, 'store']);
Route::get('/masuk', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/masuk', [LoginController::class, 'authenticate']);
Route::post('/keluar', [LoginController::class, 'signout']);

//Admin
Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.route')->middleware('admin');
Route::get('/admin/evaluation', [AdminController::class, 'evaluation'])->middleware('admin');
Route::post('/admin/evaluation/update', [AdminController::class, 'evaluationUpdate']);
Route::get('/admin/evaluation/detail/{evaluationTaken:id}', [AdminController::class, 'evaluationDetail'])->middleware('admin');
Route::get('/admin/evaluation/detail/download/{evaluationTaken:id}', [AdminController::class, 'download'])->middleware('admin');
Route::get('/admin/challenge', [AdminController::class, 'challenge'])->middleware('admin');
Route::get('/admin/challenge/detail/{challengeTaken:id}', [AdminController::class, 'challengeDetail'])->middleware('admin');
Route::get('/admin/challenge/detail/download/{challengeTaken:id}', [AdminController::class, 'challengeDownload'])->middleware('admin');
Route::post('/admin/challenge/update', [AdminController::class, 'challengeUpdate']);
