<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EnrollmentController;
use App\Models\Category;

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

Route::get('/',[EnrollmentController::class,'index'])->middleware('auth')->name('enrollment');
Route::post('/save-enrollments',[EnrollmentController::class, 'save_enrollments'])->name('saveEnrollments');
Route::get('/delete-enrollments/{id}', [EnrollmentController::class, 'delete_enrollments'])->name('removeEnrollments');
Route::get('/update-enrollments/{id}', [EnrollmentController::class, 'update_enrollments'])->name('updateEnrollments');
Route::post('/save-updated-enrollments', [EnrollmentController::class, 'save_updated_enrollments'])->name('saveUpdatedEnrollments');

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.submit');
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');

Route::get('/register',[AuthController::class,'registration'])->name('registration');
Route::post('/register',[AuthController::class,'register'])->name('register');