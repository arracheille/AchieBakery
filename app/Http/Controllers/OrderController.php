<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
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
    }
}
