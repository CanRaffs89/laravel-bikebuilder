<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders', [OrderController:: class, 'index'])->name('orders.index')->middleware('auth');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{id}', [OrderController:: class, 'show'])->name('orders.show')->middleware('auth'); 
Route::delete('/orders/{id}', [OrderController:: class, 'destroy'])->name('orders.destroy')->middleware('auth');

Auth::routes([
    // Remove this to re-enable registration
    // 'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
