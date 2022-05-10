<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\TeacherController;
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

Route::get('/login', [RegisterController::class, 'index'])->name('login');
Route::post('/login', [RegisterController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register',[RegisterController::class,'store']);
Route::get('/dashboard', [BaseController::class, 'index']) -> name('dashboard');
Route::get('/create_course',[BaseController::class, 'course_create']) -> name('create_course');
Route::get('/verify',[TeacherController::class, 'verify']) -> name('verify');
Route::get('/', [BaseController::class, 'index']) ->middleware('auth')-> name('dashboard');
