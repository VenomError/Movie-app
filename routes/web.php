<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;

Route::prefix('/dashboard')->name('dashboard')->group(function () {
    Volt::route('/', 'dashboard.index');
});
