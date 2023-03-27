<?php

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

Route::get('/', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landing_page');
Auth::routes();
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/pengguna', [App\Http\Controllers\UserController::class, 'pengguna'])->name('pengguna');
    Route::get('/customer', [App\Http\Controllers\UserController::class, 'customer'])->name('customer');
    Route::get('/paket', [App\Http\Controllers\PaketKiloanController::class, 'paket'])->name('paket');


    Route::resource('outlet', App\Http\Controllers\OutletController::class);
    Route::get('isioutlet', [App\Http\Controllers\OutletController::class, 'isi']);

    Route::resource('paket-kiloan', App\Http\Controllers\PaketKiloanController::class);

    Route::resource('paket-satuan', App\Http\Controllers\PaketSatuanController::class);

    Route::resource('checkout-kiloan', App\Http\Controllers\CheckoutKiloanController::class);

    Route::resource('checkout-satuan', App\Http\Controllers\CheckoutSatuanController::class);

    Route::resource('transaksi', App\Http\Controllers\TransaksiController::class);
});
