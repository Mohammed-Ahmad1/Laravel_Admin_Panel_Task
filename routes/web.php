<?php

use Illuminate\Support\Facades\Route;

// Dashboard Page
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Form Page
Route::get('/form', function () {
    return view('form');
})->name('form');

// Table Page
Route::get('/table', function () {
    return view('table');
})->name('table');

// Starter / New Page
Route::get('/new', function () {
    return view('new');
})->name('new');
