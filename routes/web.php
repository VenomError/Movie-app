<?php

use Livewire\Volt\Volt;
use Illuminate\Http\Request;
use App\Services\LogoutService;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Volt::route('/login', 'auth.login')->name('login');
    Volt::route('/register', componentName: 'auth.register')->name('register');
});

Route::get('/logout', fn(Request $request) => LogoutService::handle($request))->middleware('auth')->name('logout');

Route::prefix('/dashboard')->middleware(['auth', 'role:admin'])->name('dashboard')->group(function () {
    Volt::route('/', 'dashboard.index');

    Volt::route('/account/{role}', 'dashboard.account.account-list')->name('.account.list');
    Volt::route('/movies', 'dashboard.movies.movie-list')->name('.movies.list');
    Volt::route('/movies/add', 'dashboard.movies.movie-add')->name('.movies.add');
    Volt::route('/movies/{id}', 'dashboard.movies.movie-detail')->name('.movies.detail');

    Volt::route('/cinemas', 'dashboard.cinemas.cinemas-add')->name('.cinemas.add');

});
