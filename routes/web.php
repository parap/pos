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
    return view('welcome');
});

Route::resource('/admin/products', \App\Http\Controllers\ProductController::class);

Route::get('/admin/payment-types', [\App\Http\Controllers\PaymentTypeController::class, 'index'])->name('payment-types.index');
Route::get('/admin/payment-types/update/{id}', [\App\Http\Controllers\PaymentTypeController::class, 'update'])->name('payment-types.update');

Route::get('/shop', function () {
    return view('welcome');
});

Route::get('/orders', [\App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');

Route::get('/show-order', function () {
    return view('welcome');
});

Route::get('/pay', function () {
    return view('welcome');
});

Route::get('/success', function () {
    return view('welcome');
});
