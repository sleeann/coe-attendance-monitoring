<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\GradesAndScoresController;
use App\Http\Controllers\DisplayAnnouncementController;
use App\Http\Controllers\Auth\LoginController;

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

Route::middleware(['auth'])->group(function () {

    Route::post('/user/logout', [LoginController::class, 'logout'])->name('user.logout');
    Route::get('/', [DashboardController::class, 'index'])->name('home.index');
    Route::get('/home', [DashboardController::class, 'index'])->name('home.index');

    Route::middleware(['role:Instructor'])->prefix('instructor')->group(function () {
        Route::get('/announcement', [AnnouncementController::class, 'index'])->name('instructor.announcement.index');
        Route::post('/announcement', [AnnouncementController::class, 'save'])->name('instructor.announcement.save');
        Route::get('/announcement-display', [AnnouncementController::class, 'display'])->name('instructor.announcement.display');
        Route::get('/announcement-edit/{id}', [AnnouncementController::class, 'edit'])->name('instructor.announcement.edit');
        Route::post('/announcement-update', [AnnouncementController::class, 'update'])->name('instructor.announcement.update');
        Route::delete('/announcement', [AnnouncementController::class, 'delete'])->name('instructor.announcement.delete');
        Route::get('/attendance', [AttendanceController::class, 'index'])->name('instructor.attendance.index');
        Route::get('/grades&scores', [GradesAndScoresController::class, 'list'])->name('instructor.grades_scores.list');
        Route::post('/grades', [GradesAndScoresController::class, 'save_grade'])->name('instructor.grades.save');
        Route::get('/grades-edit/{id}', [GradesAndScoresController::class, 'edit_grade'])->name('instructor.grades.edit');
        Route::post('/grades-update', [GradesAndScoresController::class, 'update_grade'])->name('instructor.grades.update');
        Route::delete('/grades', [GradesAndScoresController::class, 'delete_grade'])->name('instructor.grades.delete');
        Route::get('/grades-display', [GradesAndScoresController::class, 'display_grades'])->name('instructor.grades.display');
        Route::post('/exams', [GradesAndScoresController::class, 'save_exam'])->name('instructor.exams.save');
        Route::get('/exams-edit/{id}', [GradesAndScoresController::class, 'edit_exam'])->name('instructor.exams.edit');
        Route::post('/exams-update', [GradesAndScoresController::class, 'update_exam'])->name('instructor.exams.update');
        Route::delete('/exams', [GradesAndScoresController::class, 'delete_exam'])->name('instructor.exams.delete');
        Route::get('/exams-display', [GradesAndScoresController::class, 'display_exams'])->name('instructor.exams.display');
        Route::post('/quiz', [GradesAndScoresController::class, 'save_quiz'])->name('instructor.quiz.save');
        Route::get('/quiz-edit/{id}', [GradesAndScoresController::class, 'edit_quiz'])->name('instructor.quiz.edit');
        Route::post('/quiz-update', [GradesAndScoresController::class, 'update_quiz'])->name('instructor.quiz.update');
        Route::delete('/quiz', [GradesAndScoresController::class, 'delete_quiz'])->name('instructor.quiz.delete');
        Route::get('/quizzes-display', [GradesAndScoresController::class, 'display_quizzes'])->name('instructor.quizzes.display');
        Route::post('/assignment', [GradesAndScoresController::class, 'save_assignment'])->name('instructor.assignment.save');
        Route::get('/assignment-edit/{id}', [GradesAndScoresController::class, 'edit_assignment'])->name('instructor.assignment.edit');
        Route::post('/assignment-update', [GradesAndScoresController::class, 'update_assignment'])->name('instructor.assignment.update');
        Route::delete('/assignment', [GradesAndScoresController::class, 'delete_assignment'])->name('instructor.assignment.delete');
        Route::get('/assignments-display', [GradesAndScoresController::class, 'display_assignments'])->name('instructor.assignments.display');
        Route::post('/seatwork', [GradesAndScoresController::class, 'save_seatwork'])->name('instructor.seatwork.save');
        Route::get('/seatwork-edit/{id}', [GradesAndScoresController::class, 'edit_seatwork'])->name('instructor.seatwork.edit');
        Route::post('/seatwork-update', [GradesAndScoresController::class, 'update_seatwork'])->name('instructor.seatwork.update');
        Route::delete('/seatwork', [GradesAndScoresController::class, 'delete_seatwork'])->name('instructor.seatwork.delete');
        Route::get('/seatworks-display', [GradesAndScoresController::class, 'display_seatworks'])->name('instructor.seatworks.display');
        Route::post('/grades&score/upload', [GradesAndScoresController::class, 'upload'])->name('instructor.grades_score.upload');
    });

    Route::middleware(['role:Parent'])->prefix('parent')->group(function () {
        Route::get('/attendance', [AttendanceController::class, 'index'])->name('parent.attendance.index');
        Route::get('/announcement', [DisplayAnnouncementController::class, 'index'])->name('parent.announcement.index');
        Route::get('/grades&scores', [GradesAndScoresController::class, 'index'])->name('parent.grades_scores.index');
    });

    Route::middleware(['role:Administrator'])->prefix('administrator')->group(function () {
        Route::get('/dashboard-display', [DashboardController::class, 'display'])->name('administrator.dashboard.display');
        Route::post('/user', [UserController::class, 'save'])->name('administrator.user.save');
        Route::get('/user-display', [UserController::class, 'display'])->name('administrator.user.display');
        Route::get('/user-edit/{id}', [UserController::class, 'edit'])->name('administrator.user.edit');
        Route::put('/user', [UserController::class, 'update'])->name('administrator.user.update');
        Route::delete('/user', [UserController::class, 'delete'])->name('administrator.user.delete');
        Route::get('/user', [UserController::class, 'index'])->name('administrator.user.index'); 
    });

});


Auth::routes(['register' => false]);
