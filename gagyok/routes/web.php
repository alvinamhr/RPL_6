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


Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('dashboard');
Route::get('/category', [App\Http\Controllers\User\CategoryController::class, 'index'])->name('category'); //ini untuk produk kategory keseluruhan

Route::get('category/{product_category}', [App\Http\Controllers\User\CategoryController::class, 'show']); //ini untuk menampilkan isi produk apa saja dalam satu kategori

// Route::get('/product', [App\Http\Controllers\User\ProductController::class, 'show']);
Route::get('produk/{product_id}', [App\Http\Controllers\ProductController::class, 'show']); //ini untuk detail produk sebelum dipesan
Route::get('cari', [App\Http\Controllers\ProductController::class, 'cari']); //ini untuk detail produk sebelum dipesan

Route::post('InsertCart/{product_id}', [App\Http\Controllers\User\CartController::class, 'store']); //ini untuk memasukkan keranjang

Route::get('cart', [App\Http\Controllers\User\CartController::class, 'index'])->name('cart'); //ini untuk masuk ke halaman keranjang
Route::get('cart/empty', [App\Http\Controllers\User\CartController::class, 'empty']); //ini untuk masuk ke halaman keranjang

Route::delete('cart/{id}', [App\Http\Controllers\User\CartController::class, 'delete']); // ini untuk melakukan delete isi keranjang
Route::post('cart/plus/{id}', [App\Http\Controllers\User\CartController::class, 'update']); // ini untuk melakukan delete isi keranjang

Route::get('/entertainment', [App\Http\Controllers\User\EntertainmentController::class, 'index'])->name('entertainment');
Route::get('/entertainment/{entertainment}', [App\Http\Controllers\User\EntertainmentController::class, 'show']);


//PROFIL
Route::get('/profile', [App\Http\Controllers\User\ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit', [App\Http\Controllers\User\ProfileController::class, 'show']);
Route::post('/profile/edit', [App\Http\Controllers\User\ProfileController::class, 'edit']);

// Address
Route::get('/noaddress', [App\Http\Controllers\User\AddressController::class, 'index'])->name('noadd');
Route::get('/address/edit', [App\Http\Controllers\User\AddressController::class, 'show']);
Route::post('/address/edit', [App\Http\Controllers\User\AddressController::class, 'update']);
Route::get('/address/create', [App\Http\Controllers\User\AddressController::class, 'create']);
Route::get('/address/list', [App\Http\Controllers\User\AddressController::class, 'list']);
Route::get('getCity',[App\Http\Controllers\User\AddressController::class, 'City']);
Route::get('getDistrict', [App\Http\Controllers\User\AddressController::class, 'District']);

// Checkout
Route::get('/checkout', [App\Http\Controllers\User\CheckoutController::class, 'index'])->name('checkout');
Route::post('/pesan', [App\Http\Controllers\User\CheckoutController::class, 'pesan']);

// Notification
Route::get('/notification', [App\Http\Controllers\User\NotifikasiController::class, 'index'])->name('notification');
Route::post('/notification', [App\Http\Controllers\User\NotifikasiController::class, 'edit']);

// Detail Pesanan
Route::get('/detailpesanan/{id}', [App\Http\Controllers\User\OrderController::class, 'show']);
Route::get('/status 0', [App\Http\Controllers\User\OrderController::class, 'nol']);
Route::get('/status1', [App\Http\Controllers\User\OrderController::class, 'satu']);

Route::get('/pembayaran0', [App\Http\Controllers\User\OrderController::class, 'pembayarannol']);
Route::get('/pembayaran1', [App\Http\Controllers\User\OrderController::class, 'pembayaransatu']);
Route::get('/pilih-pembayaran', [App\Http\Controllers\User\OrderController::class, 'choose']);

// Route::get('/detailpesanan', function () {
//     return view('user.detail-pesanan.show');
// });
// Route::get('/status0', function () {
//     return view('user.detail-pesanan.belum-bayar');
// });
// Route::get('/status1', function () {
//     return view('user.detail-pesanan.berhasil-bayar');
// });