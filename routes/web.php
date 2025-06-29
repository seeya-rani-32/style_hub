<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductBrowseController;
use App\Http\Controllers\ProductController;

Route::get('/',[HomeController::class,'showHomePage'])->name('home');
Route::get('/about-us',[HomeController::class,'showAboutPage'])->name('about-us');

Route::get('/contact-us', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');

// Show all categories
Route::get('/products', [ProductBrowseController::class, 'categories'])->name('products.categories');

// Show products in a category
Route::get('/products/category/{category}', [ProductBrowseController::class, 'productsByCategory'])->name('products.byCategory');

Route::get('/products/{product}', [ProductBrowseController::class, 'show'])->name('products.show');




Route::prefix('admin')->group(function () {
    Route::get('/accounts/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    });

    Route::middleware('auth:admin')->group(function () {
        //Categories Route
        Route::prefix('categories')->group(function () {
            Route::get('', [CategoryController::class, 'index'])->name('admin.categories.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
            Route::post('', [CategoryController::class, 'store'])->name('admin.categories.store');
            Route::get('/{category}', [CategoryController::class, 'show'])->name('admin.categories.show');
            Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
            Route::put('/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
            Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
        });

        //Products Route
        Route::prefix('products')->group(function () {
            Route::get('', [ProductController::class, 'index'])->name('admin.products.index');
            Route::get('/create', [ProductController::class, 'create'])->name('admin.products.create');
            Route::post('', [ProductController::class, 'store'])->name('admin.products.store');
            Route::get('/{product}', [ProductController::class, 'show'])->name('admin.products.show');
            Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
            Route::put('/{product}', [ProductController::class, 'update'])->name('admin.products.update');
            Route::delete('/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
        });
    });
});
