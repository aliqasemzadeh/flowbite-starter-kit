<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Landing\Index::class)->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/panel/dashboard/index', \App\Livewire\Panel\Dashboard\Index::class)->name('panel.dashboard.index');

    Route::get('/panel/settings/profile', \App\Livewire\Panel\Settings\Profile::class)->name('panel.settings.profile');
    Route::get('/panel/settings/password', \App\Livewire\Panel\Settings\Password::class)->name('panel.settings.password');


    Route::get('admin/dashboard/index', \App\Livewire\Admin\Dashboard\Index::class)->name('admin.dashboard.index');
    Route::get('admin/user/index', \App\Livewire\Admin\User\Index::class)->name('admin.user.index');
});

require __DIR__.'/auth.php';
