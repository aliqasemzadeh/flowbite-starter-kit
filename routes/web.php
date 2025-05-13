<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Landing\Index::class)->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user/dashboard/index', \App\Livewire\User\Dashboard\Index::class)->name('user.dashboard.index');
});

require __DIR__.'/auth.php';
