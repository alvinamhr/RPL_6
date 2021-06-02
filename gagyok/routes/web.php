<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'store']);
Auth::routes();


Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('dashboard');
Route::get('/category', [App\Http\Controllers\User\CategoryController::class, 'index'])->name('category'); //ini untuk produk kategory keseluruhan

Route::get('category/{product_category}', [App\Http\Controllers\User\CategoryController::class, 'show']); //ini untuk menampilkan isi produk apa saja dalam satu kategori

Route::get('produk/{product_id}', [App\Http\Controllers\OrderController::class, 'detailProduk']); //ini untuk detail produk sebelum dipesan

Route::post('order/{product_id}', [App\Http\Controllers\OrderController::class, 'keranjang']); //ini untuk memasukkan keranjang

Route::get('cart', [App\Http\Controllers\User\CartController::class, 'index'])->name('cart'); //ini untuk masuk ke halaman keranjang

Route::delete('cart/{id}', [App\Http\Controllers\User\CartController::class, 'delete']); // ini untuk melakukan delete isi keranjang

Route::get('/entertainment', [App\Http\Controllers\User\EntertainmentController::class, 'index'])->name('entertainment');
Route::get('/entertainment/{entertainment}', [App\Http\Controllers\User\EntertainmentController::class, 'show']);

Route::get('/profile', [App\Http\Controllers\User\ProfileController::class, 'index'])->name('profile');
Route::get('/checkout', [App\Http\Controllers\User\CheckoutController::class, 'index'])->name('checkout');



