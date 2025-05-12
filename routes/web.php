<?php

use Illuminate\Support\Facades\Route;


Route::get('/', App\Livewire\Home::class)->name('home');


// User Panel
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard/index', App\Livewire\User\Dashboard\Index::class)->name('user.dashboard.index');
});


require __DIR__.'/auth.php';
