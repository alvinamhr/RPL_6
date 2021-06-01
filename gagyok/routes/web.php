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
Route::get('/category', [App\Http\Controllers\User\CategoryController::class, 'index'])->name('category');
Route::get('/category/{category}', [App\Http\Controllers\User\CategoryController::class, 'show']);
Route::get('/entertainment', [App\Http\Controllers\User\EntertainmentController::class, 'index'])->name('entertainment');
Route::get('/entertainment/{entertainment}', [App\Http\Controllers\User\EntertainmentController::class, 'show']);
Route::get('/cart', [App\Http\Controllers\User\CartController::class, 'index'])->name('cart');
Route::get('/profile', [App\Http\Controllers\User\ProfileController::class, 'index'])->name('profile');
Route::get('/checkout', [App\Http\Controllers\User\CheckoutController::class, 'index'])->name('checkout');

