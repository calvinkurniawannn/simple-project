<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('content.home');
});

// in routes/web.php
Route::get('/shop', [NavigationController::class, 'viewShop'])->name('content.shop');

Route::get('/product/{id}', [NavigationController::class, 'viewProductDetail'])->name('product.detail');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');