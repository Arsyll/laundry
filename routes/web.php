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

Route::get('/', function () {
    return view('landing_page');
});

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::resource('outlet', App\Http\Controllers\OutletController::class)->name('outlet');
Route::resource('paket-kiloan', App\Http\Controllers\PaketKiloanController::class)->name('paket-kiloan');
Route::resource('paket-satuan', App\Http\Controllers\PaketSatuanController::class)->name('paket-satuan');
Route::resource('checkout-kiloan', App\Http\Controllers\CheckoutKiloanController::class)->name('checkout-kiloan');
Route::resource('checkout-satuan', App\Http\Controllers\CheckoutSatuanController::class)->name('checkout-satuan');
Route::resource('transaksi', App\Http\Controllers\TransaksiController::class)->name('transaksi');
