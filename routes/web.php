<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Calendar;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::all();
    return view('welcome', compact('products'));
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cart', function () {
    $carts = Cart::all();
    return view('cart', compact('carts'));
})->name('cart.index');

Route::get('/cart-count', function () {
    $userId = Auth::user()->id_user;

    $checkedCarts = \App\Models\Cart::with('product')
        ->where('user_id', $userId)
        ->where('is_checked', 1)
        ->get();

    $checked = $checkedCarts->count();
    $total = \App\Models\Cart::where('user_id', $userId)->count();

    // Hitung total harga
    $totalPrice = $checkedCarts->sum(function ($cart) {
        return $cart->product->product_price * $cart->quantity;
    });

    return response()->json([
        'checked' => $checked,
        'total' => $total,
        'total_price' => $totalPrice
    ]);
})->name('cart.count.checked');

Route::get('/checkout', [OrderController::class, 'index'])->name('checkout');

Route::get('/choose-your-moment', function () {
    return view('choose-your-moment');
})->name('cym.index');

Route::get('/about', function () {
    return view('about');
})->name('about.index');

Route::get('/category', function () {
    $categories = Category::all();
    return view('category', compact('categories'));
})->name('user.category.index');

Route::get('/category/{category}', function (Category $category) {
    $products = Product::all();
    return view('category-item', compact('category', 'products'));
})->name('category-item.index');

Route::get('/product/{product}', function (Product $product) {
    // $products = Product::all();w
    return view('product-preview', compact('product'));
})->name('product-preview.index');

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

Route::post('/cart-store', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart-delete/{cart}', [CartController::class, 'destroy'])->name('cart.delete');

Route::get('/cart-checklist/{checklist}', [CartController::class, 'edit'])->name('cart.edit');
Route::put('/cart-checklist', [CartController::class, 'checklist'])->name('cart.checklist');
Route::put('/cart-update-quantity', [CartController::class, 'quantity_update'])->name('cart.update.quantity');
Route::put('/cart-check-all', [CartController::class, 'check_all'])->name('cart.check.all');

Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category-edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category-edit/{category}', [CategoryController::class, 'update'])->name('category.edit');

Route::post('/calendar-create', [OrderController::class, 'create'])->name('calendar.create');
Route::get('/calendar-edit/{calendar}', [OrderController::class, 'edit'])->name('calendar.edit');
Route::put('/calendar-edit/{calendar}', [OrderController::class, 'update'])->name('calendar.edit');
Route::delete('/calendar-delete/{calendar}', [OrderController::class, 'destroy'])->name('calendar.delete');
Route::post('/calendar-restore/{calendar}', [OrderController::class, 'restore'])->withTrashed()->name('calendar.restore');

require __DIR__.'/auth.php';
