<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Moment;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $moments = Moment::all();
    $products = Product::all();
    return view('welcome', compact('products', 'moments'));
})->name('welcome');

Route::get('/search', [HomeController::class, 'search'])->name('search.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/choose-your-moment', function () {
    $moments = Moment::all();
    return view('choose-your-moment', compact('moments'));
})->name('cym.index');

Route::get('/choose-your-moment/{moment}', function (Moment $moment) {
    return view('cym-item', compact('moment'));
})->name('cym.item');

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
    return view('product-preview', compact('product'));
})->name('product-preview.index');

Route::middleware('auth')->group(function () {
    Route::get('/my-orders', function (User $user) {
        $orders = Order::all();
        return view('my-orders', compact('orders', 'user'));
    })->name('my-orders.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
     
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
    

        $totalPrice = $checkedCarts->sum(function ($cart) {
            return $cart->product->product_price * $cart->quantity;
        });
    
        return response()->json([
            'checked' => $checked,
            'total' => $total,
            'total_price' => $totalPrice
        ]);
    })->name('cart.count.checked');

    Route::post('/cart-store', [CartController::class, 'store'])->name('cart.store');
    Route::delete('/cart-delete/{cart}', [CartController::class, 'destroy'])->name('cart.delete');

    Route::get('/cart-checklist/{checklist}', [CartController::class, 'edit'])->name('cart.edit');
    Route::put('/cart-checklist', [CartController::class, 'checklist'])->name('cart.checklist');
    Route::put('/cart-update-quantity', [CartController::class, 'quantity_update'])->name('cart.update.quantity');
    Route::put('/cart-check-all', [CartController::class, 'check_all'])->name('cart.check.all');

    Route::get('/checkout', function () {
        $userId = Auth::user()->id_user;

        $carts = Cart::with('product')
            ->where('user_id', $userId)
            ->where('is_checked', 1)
            ->get();
        
        $totalPrice = $carts->sum(function ($cart) {
            return $cart->product->product_price * $cart->quantity;
        });

        return view('checkout', [
            'total_price' => $totalPrice,
            'carts' => $carts,
        ]);
    })->name('checkout.index');

    Route::post('/checkout-store', [OrderController::class, 'store'])->name('checkout.store');
        
    Route::middleware('admin')->group(function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        })->name('welcome.admin');    
        
        Route::get('/admin/category', function () {
            $categories = Category::all();
            return view('admin.category', compact('categories'));
        })->name('category.index');    
        
        Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category-edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/category-edit/{category}', [CategoryController::class, 'update'])->name('category.edit');
        Route::delete('/category-delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
        
        Route::get('/admin/category/{category}', function (Category $category) {
            $products = Product::all();
            return view('admin.product', compact('category', 'products'));
        })->name('product.index');
    
        Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product-edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/product-edit/{product}', [ProductController::class, 'update'])->name('product.edit');
        Route::delete('/product-delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');
    
        Route::get('/admin/calendar', function (Request $request) {
            $orders = Order::all();
            return view('admin.calendar', compact('orders'));
        })->name('calendar.index');
            
        Route::get('/admin/order', function () {
            $orders = Order::all();
            return view('admin.orders', compact('orders'));
        })->name('admin-order.index');

        Route::get('/order-edit/{order}', [OrderController::class, 'edit'])->name('order.edit');
        Route::put('/order-edit/{order}', [OrderController::class, 'update'])->name('order.edit');
    
        Route::get('/admin/users', function () {
            $users = User::all();
            return view('admin.users', compact('users'));
        })->name('admin-user.index');
    });
});

require __DIR__.'/auth.php';
