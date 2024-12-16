<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');;

Route::get('/criar-conta', function () {
    return view('create-account');
})->name('create-account');

Route::post('/criar-conta', function () {
    return 'validação e inserção de usuario';
})->name('insert-account');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    return 'validação e inserção de usuario';
})->name('auth');

Route::get('/esqueceu-senha', function () {
    // return view('login');
})->name('forgot-password');
