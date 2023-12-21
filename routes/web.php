<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderItemsController;


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


Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/create', [UserController::class, 'store']);
Route::get('/users/{user}', [UserController::class, 'edit']);
Route::post('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/delete/{user}', [UserController::class, 'delete']);

Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::get('/orders/create', [OrderController::class, 'create']);
Route::post('/orders/create', [OrderController::class, 'store']);
Route::get('/orders/{order}', [OrderController::class, 'edit']);
Route::post('/orders/{order}', [OrderController::class, 'update']);
Route::delete('/orders/delete/{order}', [OrderController::class, 'delete']);

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/create', [ProductController::class, 'store']);
Route::get('/products/{product}', [ProductController::class, 'edit']);
Route::post('/products/{product}', [ProductController::class, 'update']);
Route::delete('/products/delete/{product}', [ProductController::class, 'delete']);

