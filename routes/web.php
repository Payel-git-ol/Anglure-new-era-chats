<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::redirect('/', '/chatify');
Route::redirect('/home', '/chatify');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
