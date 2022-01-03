<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//ProductTypes
Route::get('ProductTypes/DanhSach', [SanPhamCtroller::class,'LayDanhSach']);
Route::get('ProductTypes/{id}', [SanPhamCtroller::class,'find']);
Route::post('ProductTypes/ThemMoi', [SanPhamCtroller::class,'create']);
Route::patch('ProductTypes/edit/{id}', [SanPhamCtroller::class,'edit']);
Route::delete('ProductTypes/delete/{id}', [SanPhamCtroller::class,'delete']);
//Pricing
Route::get('Pricing/DanhSach', [SanPhamCtroller::class,'LayDanhSach']);
Route::get('Pricing/{id}', [SanPhamCtroller::class,'find']);
Route::post('Pricing/ThemMoi', [SanPhamCtroller::class,'create']);
Route::patch('Pricing/edit/{id}', [SanPhamCtroller::class,'edit']);
Route::delete('Pricing/delete/{id}', [SanPhamCtroller::class,'delete']);
