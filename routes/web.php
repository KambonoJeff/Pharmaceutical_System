<?php

use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('components.register');
});
Route::get('/login', [UserController::class, 'login' ] )->name('login');
Route::get('/', function () {
    return view('notFound');
});


Route::post('/register',[UserController::class, 'store'])->name('register');

Route::post('/login', [UserController::class, 'store' ] )->name('login');
Route::post('/logout', [UserController::class, 'logout' ] )->name('logout');

