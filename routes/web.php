<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;

Route::prefix('/dashboard')->name('dashboard')->group(function () {
    Volt::route('/', 'dashboard.index');

    Volt::route('/account/{role}', 'dashboard.account.account-list')->name('.account.list');
    Volt::route('/movies', 'dashboard.movies.movie-list')->name('.movies.list');
    Volt::route('/movies/add', 'dashboard.movies.movie-add')->name('.movies.add');
    Volt::route('/movies/{id}', 'dashboard.movies.movie-detail')->name('.movies.detail');
});
