<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::view('/login', 'login');
Route::view('/registrasi', 'registrasi');
Route::post('/registrasi/processing', [RegistrasiController::class, 'createAccount'])->name('create.account');
Route::post('/login/processing', [LoginController::class, 'loginAccount'])->name('login.account');