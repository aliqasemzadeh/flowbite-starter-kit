<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


// User Panel
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard/index', App\Livewire\User\Dashboard\Index::class)->name('user.dashboard.index');
});


require __DIR__.'/auth.php';
