<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Landing\Index::class)->name('home');

require __DIR__.'/auth.php';
