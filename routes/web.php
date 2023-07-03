<?php

use Illuminate\Support\Facades\Route;

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
//removeProductToCart


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/add/cart/{product}', [App\Http\Controllers\CartController::class, 'addProductToCart'])->name('add.cart');
Route::put('/update/{product}/cart', [App\Http\Controllers\CartController::class, 'updateProductToCart'])->name('update.cart');
Route::delete('/remove/{product}/cart', [App\Http\Controllers\CartController::class, 'removeProductToCart'])->name('remove.cart');

Route::get('/Order-success', [App\Http\Controllers\OrderController::class, 'addOrder'])->name('add.Order');
// admin routes
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/logout', [App\Http\Controllers\AdminController::class, 'adminLogout'])->name('admin.logout');


Route::get('/admin/products', [App\Http\Controllers\ProductController::class, 'index'])->name('admin.products.index');
Route::post('/add/cart/{product}', [App\Http\Controllers\CartController::class, 'addProductToCart'])->name('add.cart');
Route::put('/update/{product}/cart', [App\Http\Controllers\CartController::class, 'updateProductToCart'])->name('update.cart');
Route::delete('/remove/{product}/cart', [App\Http\Controllers\CartController::class, 'removeProductToCart'])->name('remove.cart');

Route::put('/update/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('update.product');
Route::delete('/admin/products/{product}/remove', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/admin/products/add', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::get('admin/products/{product}/update', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit.product');

Route::post('/admin/products', [App\Http\Controllers\ProductController::class, 'store'])->name('store.product');

//orders routes
Route::get('admin/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('admin.orders');
Route::put('/update/{order->id}', [App\Http\Controllers\OrderController::class, 'update'])->name('update.order');
Route::delete('/admin/orders/{order}/remove', [App\Http\Controllers\OrderController::class, 'destroy'])->name('order.destroy');

//categories
Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('admin.categories.index');
Route::put('/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('update.category');

Route::delete('/admin/categories/{category}/remove', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/admin/categories/add', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::get('admin/categories/{category}/update', [App\Http\Controllers\CategoryController::class, 'edit'])->name('edit.category');

Route::post('/admin/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('store.category');
Route::get('/products/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
