<?php

use Illuminate\Support\Facades\Route;


Route::get('/', App\Livewire\Home::class)->name('home');


// User Panel
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard/index', App\Livewire\User\Dashboard\Index::class)->name('user.dashboard.index');

    Route::get('/user/profile/change-information', App\Livewire\User\Profile\ChangeInformation::class)->name('user.profile.change-information');
    Route::get('/user/profile/change-password', App\Livewire\User\Profile\ChangePassword::class)->name('user.profile.change-password');
    Route::get('/user/profile/delete-account', App\Livewire\User\Profile\DeleteAccount::class)->name('user.profile.delete-account');;
});


require __DIR__.'/auth.php';
