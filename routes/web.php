<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Landing\Index::class)->name('home');
Route::get('/examples/modal', function () {
    return view('examples.modal-example');
})->name('examples.modal');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user/dashboard/index', \App\Livewire\User\Dashboard\Index::class)->name('user.dashboard.index');

    Route::get('/user/settings/profile', \App\Livewire\User\Settings\Profile::class)->name('user.settings.profile');
    Route::get('/user/settings/password', \App\Livewire\User\Settings\Password::class)->name('user.settings.password');
});

require __DIR__.'/auth.php';
