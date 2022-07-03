<?php

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');




Route::get('admin/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit']);


Route::post('admin/update', [App\Http\Controllers\HomeController::class, 'update']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard']);


Route::get('admin/login', function () {
    return view('admin.auth.login');
});

Route::get('admin/register', function () {
    return view('admin.auth.register');
});
