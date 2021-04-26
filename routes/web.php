<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
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
    return view('web.home');
});

//Frontend
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/login_web', [LoginController::class, 'index']);
<<<<<<< HEAD
Route::get('/pencegahan', [PencegahanController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/gejala', [GejalaController::class, 'index']);

=======

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index']);
Route::get('/doctor', [App\Http\Controllers\DoctorController::class, 'index']);
Route::get('/pencegahan', [App\Http\Controllers\PencegahanController::class, 'index']);
Route::get('/gejala', [App\Http\Controllers\GejalaController::class, 'index']);
Route::get('/protect', [App\Http\Controllers\PencegahanController::class, 'protect']);
>>>>>>> 43b6dcd22a147ec3268950d8803c1fd0aefb8fab

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
