<?php

use App\Http\Controllers\CTSPController;
use Illuminate\Support\Facades\Route;
use App\Models\sanpham;
use App\Http\Controllers\SanPhamController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/product',[SanPhamController::class,'show'])->name('product');
Route::get('/',[SanPhamController::class,'index'])->name('home');
Route::get('/single/{id}', [SanPhamController::class,'find'])->name('single');
Route::prefix('/')->group(function () {
    Route::get('/account', function () {
        return view('user.pages.account');
    })->name('account');
    Route::get('/contact', function () {
        return view('user.pages.contact');
    })->name('contact');
    Route::get('/checkout', function () {
        return view('user.pages.checkout');
    })->name('checkout');
    Route::get('/register', function () {
        return view('user.pages.register');
    })->name('register');
    Route::get('/typo', function () {
        return view('user.pages.typo');
    })->name('typo');
});
