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

//Register Page route sa Confession Website
Route::get('/register', function () {
    return view('Confession.Forms.register');
});