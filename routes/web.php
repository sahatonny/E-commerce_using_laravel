<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('profile', ProfileController::class);
Route::middleware('auth')->group(function () {
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::get('profile/{profile}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('product', ProductController::class);
Route::middleware('auth')->group(function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
    });
Route::resource('category', CategoryController::class);
Route::middleware('auth')->group(function () {
        Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/category/{category}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
        });

Route::middleware('auth')->group(function () {
    //Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    //Route::get('/cart/add', [CartController::class, 'add'])->name('cart.add');
    //Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    //Route::get('cart/{cart}/edit', [CartController::class, 'edit'])->name('cart.edit');
    //Route::put('cart/{cart}/update', [CartController::class, 'update'])->name('cart.update');
    //Route::delete('cart/{cart}/destroy', [CartController::class, 'remove'])->name('cart.remove');

    //Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
    //Route::get('/cart/add', [CartController::class, 'add'])->name('cart.add');
    //Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');

});

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
});


Route::middleware(['auth'])->group(function () {

    //Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
    Route::post('/payment/store', [PaymentController::class, 'store'])->name('payment.store');
    Route::get('/payment/process', [PaymentController::class, 'show'])->name('payment.process');
    Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process.submit');
});


//Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
//Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

// Payment Route



Route::middleware(['auth'])->group(function () {
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/confirm', [OrderController::class, 'confirm'])->name('orders.confirm');
    //Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::post('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');

});








Route::get('/user/{id}/profile', [UserProfileController::class, 'show'])->name('user.profile');




require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
