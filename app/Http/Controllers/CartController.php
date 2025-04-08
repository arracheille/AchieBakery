<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id_product',
            'quantity' => 'required|integer|min:1',
        ]);
    
        $lastCart = Cart::orderBy('id_cart', 'desc')->first();
        $lastNumber = $lastCart ? intval(substr($lastCart->id_cart, 4)) : 0;
        $cartId = 'CAT-' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
    
        if (Cart::where('id_cart', $cartId)->exists()) {
            return redirect()->route('cart.index')->with('error', 'ID cart already exists.');
        }
    
        $cart = new Cart();
        $cart->id_cart = $cartId;
        $cart->user_id = Auth::user()->id_user;
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantity;

        $cart->save();

        return redirect()->route('cart.index')->with('success', 'Category successfully added!');
    }

    public function destroy(Cart $cart) {
        $cart->delete();
        return back();
    }

    public function edit(Cart $cart) {
        return view('cart.index', ['cart' => $cart]);
    }

    public function checklist(Request $request) {
        $dataCart = Cart::find($request->check_id);
    
        if ($dataCart) {
            $dataCart->is_checked = $request->is_checked;
            $dataCart->save();
    
            return response()->json([
               'message' => 'Berhasil simpan',
               'is_checked' => $request->is_checked,
            ]);
    
        } else {
            return response()->json([
              'message' => 'Gagal simpan'
            ]);
        }
    }

    public function quantity_update(Request $request)
    {
        $cart = Cart::find($request->id_cart);

        if ($cart) {
            $cart->quantity = $request->quantity;
            $cart->save();

            return response()->json([
                'message' => 'Quantity updated',
                'quantity' => $cart->quantity
            ]);
        }

        return response()->json([
            'message' => 'Cart item not found'
        ], 404);
    }

    public function check_all(Request $request)
    {
        $userId = Auth::user()->id_user;

        Cart::where('user_id', $userId)->update([
            'is_checked' => $request->is_checked
        ]);

        return response()->json([
            'message' => 'Berhasil update semua'
        ]);
    }
}
