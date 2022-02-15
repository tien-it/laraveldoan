    <?php

use App\Http\Controllers\giohangController;
use Illuminate\Support\Facades\Route;

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



Route::prefix('/')->group(function () {

     Route::get('/', function () {
         return view('user.pages.home');
     })->name('home');
    Route::get('/account', function () {
        return view('user.pages.account');
    })->name('account');
    Route::get('/product', function () {
        return view('user.pages.products');
    })->name('product');
    Route::get('/contact', function () {
        return view('user.pages.contact');
    })->name('contact');

    // Route::get('/checkout', function () {
    //     return view('user.pages.checkout');
    // })->name('checkout');

    Route::get('/register', function () {
        return view('user.pages.register');
    })->name('register');
    Route::get('/single', function () {
        return view('user.pages.single');
    })->name('single');
    Route::get('/typo', function () {
        return view('user.pages.typo');
    })->name('typo');

    /* -----------              giỏ hàng           ------------*/
    Route::get('/gio-hang',[giohangController::class,'show'])
    ->name('gio-hang');
});