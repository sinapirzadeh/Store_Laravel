<?php

use App\Http\Controllers\Admin\Categories\ProductsCategoryController;
use App\Http\Controllers\Admin\Comments\ProductCommentsController;
use App\Http\Controllers\Admin\DashbordController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/store', [HomeController::class, 'store']);
Route::get('/search-result', [HomeController::class, 'search']);
Route::get('/product/{slug}', [HomeController::class, 'showProduct'])->name('product_detail');


// show cart page
Route::get('/buy', [BuyController::class, 'index'])->middleware('auth');
Route::post('/buy/{product_id}', [BuyController::class, 'addItem'])->middleware('auth');
Route::post('/buy/{item_id}/delete', [BuyController::class, 'removeItem'])->middleware('auth');



Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/home', [DashbordController::class, 'index']);

    Route::resource('users', UserController::class)->name('index', 'users');

    Route::resource('products_category', ProductsCategoryController::class)->except('show', 'create')->parameters(['products_category' => 'slug']);

    Route::resource('products', ProductController::class)->except('create')->parameters(['products' => 'slug']);

    Route::resource('products_comment', ProductCommentsController::class)->except('edit', 'create', 'show')->parameters(['products_comment' => 'comment_id']);

});

Auth::routes();
