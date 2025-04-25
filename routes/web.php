<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route for displaying the signup form
Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

// Route for displaying the login form
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route for handling the signup form submission
Route::post('/register', function () {
    // Your registration logic will go here
    // This would typically call a controller method
    return redirect('/');
})->name('register');
