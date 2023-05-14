<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('./components/register');
})->name('register');

Route::get('/login', function () {
    return view('./components/login');
})->name('login');
Route::get('/', function () {
    return view('notFound');
});
