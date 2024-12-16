<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController; // Ensure this class exists in the specified namespace

Route::get('/', function () {
    return view('home');
})->name('home');;

Route::get('/criar-conta', [UserController::class, 'create'])->name('create-account');

Route::post('/criar-conta', [UserController::class, 'store'])->name('insert-account');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'loginAttempt'])->name('auth');
Route::get('/logout', [AuthController::class, 'index'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::get('/esqueceu-senha', function () {
    // return view('login');
})->name('forgot-password');
