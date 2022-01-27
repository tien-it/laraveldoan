<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::group(['prefix' => '/'], function () {   
Route::get('login', [Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login.post');
Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.logout');
Route::get('/', function () {
    return view('admin.pages.home');
})->name('home');
Route::get('/billing', function () {
    return view('admin.pages.billing');
})->name('billing');
Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->name('dashboard');
Route::get('/profile', function () {
    return view('admin.pages.profile');
})->name('profile');
Route::get('/sign-in', function () {
    return view('admin.pages.sign-in');
})->name('sign-in');
Route::get('/sign-up', function () {
    return view('admin.pages.sign-up');
})->name('sign-up');
Route::get('/rtl', function () {
    return view('admin.pages.rtl');
})->name('rtl');
Route::get('/tables', function () {
    return view('admin.pages.tables');
})->name('tables');
Route::get('/virtual-reality', function () {
    return view('admin.pages.virtual-reality');
})->name('virtual-reality');
});