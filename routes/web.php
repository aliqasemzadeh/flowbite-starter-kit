<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Landing\Index::class)->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user/dashboard/index', function () {})->name('user.dashboard.index');
});

require __DIR__.'/auth.php';
