<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Main Page route sa Confession Website
Route::get('/home', function () {
    return view('Confession.main');
});

//Log in Page route sa Confession Website
Route::get('/login', function () {
    return view('Confession.Forms.login');
});
Route::post('/login', [App\Http\Controllers\UserConfessionController::class, 'login'])->name('login');


//Register Page route sa Confession Website
Route::get('/register', function () {
    return view('Confession.Forms.register');
});
Route::post('/register', [App\Http\Controllers\UserConfessionController::class, 'registration'])->name('registered');

//User's Confession Page route sa Confession Website
Route::get('/confession', function () {
    return view('Confession.Forms.confess');
});

//User's Dashboard Page route sa Confession Website
Route::get('/dashboard', [App\Http\Controllers\ConfessController::class, 'index'])->name('dashboard');

