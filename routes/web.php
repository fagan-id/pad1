<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('content.home');
})->name('home');

Route::get('/posts', function () {
    return view('content.posts');
})->name('posts');

Route::get('/alumni', function () {
    return view('content.alumni');
})->name('alumni');

Route::get('/companies', function () {
    return view('content.companies');
})->name('companies');

Route::get('/profile', function () {
    return view('content.profile');
})->name('profile');
