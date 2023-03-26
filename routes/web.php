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
Route::resource('outlet', App\Http\Controllers\OutletController::class);
Route::resource('paket-kiloan', App\Http\Controllers\PaketKiloanController::class);
Route::resource('paket-satuan', App\Http\Controllers\PaketSatuanController::class);
Route::resource('checkout-kiloan', App\Http\Controllers\CheckoutKiloanController::class);
Route::resource('checkout-satuan', App\Http\Controllers\CheckoutSatuanController::class);
Route::resource('transaksi', App\Http\Controllers\TransaksiController::class);
