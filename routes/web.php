<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return redirect('/register');
});
Route::get('/dashboard', function () {
    return redirect('/register');
});

use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'index_l'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'index_r'])->name('register');
Route::post('/register', [LoginController::class, 'store']);