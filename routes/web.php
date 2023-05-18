<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/community', [DashboardController::class, 'index'])->name('community');

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

