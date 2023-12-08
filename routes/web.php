<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ParentsController;

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

// PARENTS ROUTES
Route::get('/', [ParentsController::class, 'home']);
Route::get('/parent/home', [ParentsController::class, 'home'])->name('parent.home');
Route::get('/parent/announcements', [ParentsController::class, 'announcements'])->name('parent.announcements');
Route::get('/parent/attendance', [ParentsController::class, 'attendance'])->name('parent.attendance');
Route::get('/parent/grades&score', [ParentsController::class, 'grades_score'])->name('parent.grades_score');

Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement.index');
Route::post('/announcement', [AnnouncementController::class, 'save'])->name('announcement.save');
Route::get('/announcement-display', [AnnouncementController::class, 'display'])->name('announcement.display');
Route::get('/announcement-edit/{id}', [AnnouncementController::class, 'edit'])->name('announcement.edit');
Route::post('/announcement-update', [AnnouncementController::class, 'update'])->name('announcement.update');
Route::delete('/announcement', [AnnouncementController::class, 'delete'])->name('announcement.delete');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard-display', [DashboardController::class, 'display'])->name('dashboard.display');


Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user', [UserController::class, 'save'])->name('user.save');
Route::get('/user-display', [UserController::class, 'display'])->name('user.display');
Route::get('/user-edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user', [UserController::class, 'update'])->name('user.update');
Route::delete('/user', [UserController::class, 'delete'])->name('user.delete');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
