<?php

use Illuminate\Support\Facades\Route;


// Guest Routes

Route::get('/guest/auth/login', \App\Livewire\Guest\Auth\Login::class)->name('guest.auth.login');
Route::get('/guest/auth/register', \App\Livewire\Guest\Auth\Register::class)->name('guest.auth.register');
Route::get('/guest/auth/forget-password', \App\Livewire\Guest\Auth\ForgetPassword::class)->name('guest.auth.forget-password');


Route::get('/', function () {
    return view('welcome');
});
