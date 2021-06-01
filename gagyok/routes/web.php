<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

// Authentication
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category'); //ini untuk produk kategory keseluruhan

Route::get('category/{product_category}', [App\Http\Controllers\CategoryController::class, 'detailCategory']); //ini untuk menampilkan isi produk apa saja dalam satu kategori

Route::get('produk/{product_id}', [App\Http\Controllers\OrderController::class, 'detailProduk']); //ini untuk detail produk sebelum dipesan

Route::post('order/{product_id}', [App\Http\Controllers\OrderController::class, 'keranjang']); //ini untuk memasukkan keranjang

Route::get('checkout', [App\Http\Controllers\OrderController::class, 'checkout']); //ini untuk masuk ke halaman checkout

Route::delete('checkout/{id}', [App\Http\Controllers\OrderController::class, 'delete']); // ini untuk melakukan delete isi keranjang

Route::get('profil', [App\Http\Controllers\OrderController::class, 'index']);


