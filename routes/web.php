<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Dashboard Page
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');
