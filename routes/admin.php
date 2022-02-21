<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\BillingDetailController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\CTSPController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\AccountController;
//Account
Route::get('/accountadmin', [AccountController::class, 'index'])->name('accountadmin');
Route::get('/accountadmin/{id}', [AccountController::class, 'detail'])->name('accountadmin.detail');
Route::post('/accountadmin/create', [AccountController::class, 'create'])->name('accountadmin.create');
Route::get('/accountadmin/edit/{id}', [AccountController::class, 'edit'])->name('accountadmin.edit');
Route::post('/accountadmin/update/{id}', [AccountController::class, 'update'])->name('accountadmin.update');
Route::get('/accountadmin/delete/{id}', [AccountController::class, 'delete'])->name('accountadmin.delete');
Route::get('/acccreate', [AccountController::class, 'acccreate'])->name('acccreate');
//Billing
Route::get('/billing', [BillingController::class, 'index'])->name('billing');
Route::get('/billing/{id}', [BillingController::class, 'detail'])->name('billing.detail');
Route::post('/billing/create', [BillingController::class, 'create'])->name('billing.create');
Route::get('/billing/edit/{id}', [BillingController::class, 'edit'])->name('billing.edit');
Route::post('/billing/update/{id}', [BillingController::class, 'update'])->name('billing.update');
Route::get('/billing/delete/{id}', [BillingController::class, 'delete'])->name('billing.delete');
Route::get('/billcreate', [BillingController::class, 'billcreate'])->name('billcreate');
//Billing Detail
Route::get('/detailbilling', [BillingDetailController::class, 'index'])->name('detailbilling');
Route::get('/detailbilling/{id}', [BillingDetailController::class, 'detail'])->name('detailbilling.detail');
Route::post('/detailbilling/create', [BillingDetailController::class, 'create'])->name('detailbilling.create');
Route::get('/detailbilling/edit/{id}', [BillingDetailController::class, 'edit'])->name('detailbilling.edit');
Route::post('/detailbilling/update/{id}', [BillingDetailController::class, 'update'])->name('detailbilling.update');
Route::get('/detailbilling/delete/{id}', [BillingDetailController::class, 'delete'])->name('detailbilling.delete');
Route::get('/dbilling', [BillingDetailController::class, 'billdcreate'])->name('billdcreate');
//Product 
Route::get('/tables', [SanPhamController::class, 'tables'])->name('tables');
Route::get('/tables/{id}', [SanPhamController::class, 'detail'])->name('tables.detail');
Route::post('/tables/create', [SanPhamController::class, 'create'])->name('tables.create');
Route::get('/tables/edit/{id}', [SanPhamController::class, 'edit'])->name('tables.edit');
Route::post('/tables/update/{id}', [SanPhamController::class, 'update'])->name('tables.update');
Route::get('/tables/delete/{id}', [SanPhamController::class, 'delete'])->name('tables.delete');
Route::get('/prdcreate', [SanPhamController::class, 'prdcreate'])->name('prdcreate');
//Product Detail
Route::get('/PRDDetail/{id}', [CTSPController::class, 'detail'])->name('PRDDetail.detail');
Route::post('/PRDDetail/create', [CTSPController::class, 'create'])->name('PRDDetail.create');
Route::get('/PRDDetail/edit/{id}', [CTSPController::class, 'edit'])->name('PRDDetail.edit');
Route::post('/PRDDetail/update/{id}', [CTSPController::class, 'update'])->name('PRDDetail.update');
Route::get('/PRDDetail/delete/{id}', [CTSPController::class, 'delete'])->name('PRDDetail.delete');
Route::get('/prddcreate', [CTSPController::class, 'prddcreate'])->name('prddcreate');
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
    Route::get('/', function () {
        return view('admin.pages.home');
    })->name('admin.home');
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