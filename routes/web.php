<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dashboard
Route::get('/dashboard', 'App\Http\Controllers\UserController@dashboard')->name('dashboard')->middleware('auth');

// User Profile Operations
Route::get('/profile', 'App\Http\Controllers\UserController@show')->name('profile.show')->middleware('auth');
Route::post('/profile/update', 'App\Http\Controllers\UserController@update')->name('profile.update')->middleware('auth');
Route::get('/profile/delete','App\Http\Controllers\UserController@deletePage')->middleware('auth');
Route::post('/profile/delete', 'App\Http\Controllers\UserController@destroy')->name('profile.delete')->middleware('auth');

Route::get('/profile/UserData', 'App\Http\Controllers\UserController@showData')->name('profile.UserData')->middleware('auth');
