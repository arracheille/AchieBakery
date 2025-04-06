<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Calendar;
use App\Models\Category;
use App\Models\Order;
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

Route::get('/category', function () {
    $categories = Category::all();
    return view('category', compact('categories'));
})->name('user.category.index');

Route::get('/admin/category', function () {
    $categories = Category::all();
    return view('admin.category', compact('categories'));
})->name('category.index');    

Route::get('/admin/category/{category}', function (Category $category) {
    $products = Product::all();
    return view('admin.product', compact('category', 'products'));
})->name('product.index');

Route::get('/admin/calendar', function () {
    $products = Product::all();
    $orders = Order::all();
    return view('admin.calendar', compact('products', 'orders'));
})->name('calendar.index');

Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');

Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category-edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category-edit/{category}', [CategoryController::class, 'update'])->name('category.edit');

Route::post('/calendar-create', [OrderController::class, 'create'])->name('calendar.create');
Route::get('/calendar-edit/{calendar}', [OrderController::class, 'edit'])->name('calendar.edit');
Route::put('/calendar-edit/{calendar}', [OrderController::class, 'update'])->name('calendar.edit');
Route::delete('/calendar-delete/{calendar}', [OrderController::class, 'destroy'])->name('calendar.delete');
Route::post('/calendar-restore/{calendar}', [OrderController::class, 'restore'])->withTrashed()->name('calendar.restore');

require __DIR__.'/auth.php';
