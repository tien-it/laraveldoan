<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

Route::group(['prefix' => '/'], function () {   
Route::get('login', [User\LoginController::class, 'showLoginForm'])->name('user.login');
Route::post('login', [User\LoginController::class, 'login'])->name('user.login.post');
Route::get('logout', [User\LoginController::class, 'logout'])->name('user.logout');
Route::get('index', [User\LoginController::class, 'index'])->name('user.index');
Route::group(['middleware' => ['auth:user']], function () {
    Route::get('/', function () {
        return view('user.pages.home');
    })->name('home');
});
});