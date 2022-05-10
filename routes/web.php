<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BaseController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [RegisterController::class, 'index']);
Route::post('/login', [RegisterController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register',[RegisterController::class,'store']);
Route::get('/dashboard', [BaseController::class, 'index']) -> name('dashboard');
