<?php

use App\Http\Controllers\Admin\CatalogueController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $products = Product::query() -> latest('id')->limit(12)->get();
    return view('welcome', compact('products'));
})->name('welcome');

Route::get('/admin', function(){
    return 'Đây là admin';
});


// Auth::routes();
Route::get('auth/login', [LoginController::class , 'showFormLogin'] )->name('login');
Route::post('auth/login', [LoginController::class , 'login']);
Route::post('auth/logout', [LoginController::class , 'logout'] )->name('logout');


Route::get('auth/register', [RegisterController::class , 'showFormRegister'] )->name('register');
Route::post('auth/register', [RegisterController::class , 'register'] )->name('register');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Giỏ hàng
Route::get('product/{slug}', [App\Http\Controllers\ProductController::class, 'detail'])->name('product.detail');


//Mua
Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('cart/list', [CartController::class, 'list'])->name('cart.list');
Route::post('order/save', [OrderController::class, 'save'])->name('order.save');
