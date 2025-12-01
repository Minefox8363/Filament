<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('home');
});
