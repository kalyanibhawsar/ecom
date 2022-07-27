<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/', [HomeController::class, 'index']);
Route::get('dashboard', [HomeController::class, 'redirect'])->middleware('auth');

// ----------Category-----------
Route::get('/view_category', [AdminController::class, 'view_category'])->name('view_category');
Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');
Route::get('/update_category/{id}', [AdminController::class, 'update_category'])->name('update_category');
Route::post('/edit_category/{id}', [AdminController::class, 'edit_category'])->name('edit_category');

// ----------Product-----------
Route::get('/view_product', [AdminController::class, 'view_product'])->name('view_product');
Route::post('/add_product', [AdminController::class, 'add_product'])->name('add_product');
Route::get('/show_product', [AdminController::class, 'show_product'])->name('show_product');
Route::get('/delete_product/{id}', [AdminController::class, 'delete_product'])->name('delete_product');
Route::get('/update_product/{id}', [AdminController::class, 'update_product'])->name('update_product');
Route::post('/edit_product/{id}', [AdminController::class, 'edit_product'])->name('edit_product');

// ----------Home-----------
Route::get('/product_details/{id}', [HomeController::class, 'product_details'])->name('product_details');
Route::get('/add_cart/{id}', [HomeController::class, 'add_cart'])->name('add_cart');
Route::get('/show_cart', [HomeController::class, 'show_cart'])->name('show_cart');
Route::get('/remove_cart', [HomeController::class, 'remove_cart'])->name('remove_cart');
Route::patch('/update_cart', [HomeController::class, 'update_cart'])->name('update_cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
