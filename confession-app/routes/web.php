<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfNotAuthenticated;

Route::get('/', function () {
    return view('welcome');
});

//Main Page route sa Confession Website
Route::get('/home', function () {
    return view('Confession.main');
})->name('home');

//Log in Page route sa Confession Website
Route::get('/logging-page', function () {
    return view('Confession.Forms.login');
})->name('logging-page');
Route::post('/login', [App\Http\Controllers\UserConfessionController::class, 'login'])->name('login');


//Register Page route sa Confession Website
Route::get('/register', [App\Http\Controllers\UserConfessionController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\UserConfessionController::class, 'registration'])->name('registered.user');

//User's Confession Page route sa Confession Website
Route::get('/confession', function () {
    return view('Confession.Forms.confess');
});




Route::post('/logout', [App\Http\Controllers\UserConfessionController::class, 'logout'])->name('logout');


// Protected routes
Route::middleware([RedirectIfNotAuthenticated::class])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\ConfessController::class, 'index'])->name('dashboard');
});