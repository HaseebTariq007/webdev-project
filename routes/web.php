<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('index');
});

Route::get('/index',[PagesController::class, 'index'] );

Route::get('/about',[PagesController::class, 'about']);

Route::get('/contact',[PagesController::class, 'contact']);

Route::get('/products',[PagesController::class, 'products']);

Route::get('/promotions',[PagesController::class, 'promotions']);

Route::get('/blog',[PagesController::class, 'blog']);

Route::get('/user',[PagesController::class, 'user']);
Route::post('/user',[PagesController::class, 'create']);



// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// name('products.store');
