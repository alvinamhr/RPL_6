<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

// Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Authentication
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'store']);
Auth::routes();

// Home
Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('dashboard');

// Category
Route::get('/category', [App\Http\Controllers\User\CategoryController::class, 'index'])->name('category');
Route::get('/category/{category}', [App\Http\Controllers\User\CategoryController::class, 'show']);

// Entertainment
Route::get('/entertainment', [App\Http\Controllers\User\EntertainmentController::class, 'index'])->name('entertainment');
Route::get('/entertainment/{entertainment}', [App\Http\Controllers\User\EntertainmentController::class, 'show']);

// Cart
Route::get('/cart', [App\Http\Controllers\User\CartController::class, 'index'])->name('cart');

// Profile
Route::get('/profile', [App\Http\Controllers\User\ProfileController::class, 'index'])->name('profile');
Route::get('/profile/{profile}/edit', [App\Http\Controllers\User\ProfileController::class, 'edit']);

// Address
Route::get('/noaddress', [App\Http\Controllers\User\AddressController::class, 'index'])->name('noadd');
Route::get('/address/{address}/edit', [App\Http\Controllers\User\AddressController::class, 'edit']);
Route::get('/address/create', [App\Http\Controllers\User\AddressController::class, 'create']);

// Checkout
Route::get('/checkout', [App\Http\Controllers\User\CheckoutController::class, 'index'])->name('checkout');

// Notification
Route::get('/notification', [App\Http\Controllers\User\NotifikasiController::class, 'index'])->name('notification');

