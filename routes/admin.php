<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\CTSPController;
use App\Http\Controllers\LoaiSanPhamController;
//Product 
Route::get('/tables', [SanPhamController::class, 'tables'])->name('tables');
Route::get('/tables/{id}', [CTSPController::class, 'index'])->name('tables.detail');
Route::post('/tables/create', [SanPhamController::class, 'create'])->name('tables.create');
Route::get('/tables/edit/{id}', [SanPhamController::class, 'edit'])->name('tables.edit');
Route::post('/tables/update/{id}', [SanPhamController::class, 'update'])->name('tables.update');
Route::get('/tables/delete/{id}', [SanPhamController::class, 'delete'])->name('tables.delete');
Route::get('/prdcreate', [SanPhamController::class, 'prdcreate'])->name('prdcreate');
Route::get('/prdD/{id}', [SanPhamController::class, 'prdD'])->name('prdD');
//product types
Route::get('/producttype', [LoaiSanPhamController::class, 'index'])->name('producttype');
Route::get('/producttype/{id}', [LoaiSanPhamController::class, 'detail'])->name('producttype.detail');
Route::post('/producttype/create', [LoaiSanPhamController::class, 'create'])->name('producttype.create');
Route::get('/producttype/edit/{id}', [LoaiSanPhamController::class, 'edit'])->name('producttype.edit');
Route::post('/producttype/update/{id}', [LoaiSanPhamController::class, 'update'])->name('producttype.update');
Route::get('/producttype/delete/{id}', [LoaiSanPhamController::class, 'delete'])->name('producttype.delete');
Route::get('/prdtcreate', [LoaiSanPhamController::class, 'prdtcreate'])->name('prdtcreate');
//login
Route::group(['prefix' => '/'], function () {   
Route::get('login', [Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login.post');
Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.logout');
Route::get('index', [Admin\LoginController::class, 'index'])->name('admin.index');
Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/home', function () {
        return view('admin.pages.home');
    })->name('admin.home');
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
Route::get('/virtual-reality', function () {
    return view('admin.pages.virtual-reality');
})->name('virtual-reality');
});
});