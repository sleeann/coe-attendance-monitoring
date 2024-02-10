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
        Route::post('/grades', [GradesAndScoresController::class, 'save'])->name('instructor.grades.save');
        Route::post('/grades/upload', [GradesAndScoresController::class, 'upload'])->name('instructor.grades.upload');
        Route::get('/grades-display', [GradesAndScoresController::class, 'display'])->name('instructor.grades.display');
        Route::get('/grades-edit/{id}', [GradesAndScoresController::class, 'edit'])->name('instructor.grades.edit');
        Route::post('/grades-update', [GradesAndScoresController::class, 'update'])->name('instructor.grades.update');
        Route::delete('/grades', [GradesAndScoresController::class, 'delete'])->name('instructor.grades.delete');
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
