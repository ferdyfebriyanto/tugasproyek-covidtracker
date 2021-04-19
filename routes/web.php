<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PencegahanController;
use App\Http\Controllers\GejalaController;
use Admin\UserController;
use Admin\DashboardController;
use Admin\NewController;
use Admin\CategoryController;
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
Route::get('/pencegahan', [PencegahanController::class, 'index']);
//Route::get('/news', [NewsController::class, 'index']);
Route::get('/gejala', [GejalaController::class, 'index']);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');
// Route::get('/users', function () {
//     return view('admin.users');
// });

// Route::get('/news', function () {
//     return view('admin.news');
// });

// Route::get('/master', function () {
//     return view('layouts.master');
// });

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/news', NewController::class);
    Route::resource('/category', CategoryController::class);
});
