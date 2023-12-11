<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing.home');
})->name('home');

// Login Page
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Dashboard User
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {

    Route::get('/dashboard', function () {
        return view('user.dashboard.index');
    })->name('dashboard');
});

// Dashboard Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');
});
