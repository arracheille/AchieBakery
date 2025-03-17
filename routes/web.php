<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');

Route::get('/category/{category}', function (Category $category) {
    $products = Product::all();
    return view('admin.product', compact('category', 'products'));
})->name('product.index');

// Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');

require __DIR__.'/auth.php';
