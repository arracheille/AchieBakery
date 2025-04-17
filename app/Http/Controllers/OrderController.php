<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'total_price' => 'required|integer',
            'status' => 'required',
            'method' => 'required',
            'delivery_date' => 'required|date',
            'note' => 'nullable|string',

            'latitude' => 'required',
            'longitude' => 'required',
            'location_address' => 'required',
        ]);

        // Generate Order ID
        $lastOrder = Order::orderBy('id_order', 'desc')->first();
        $lastNumber = $lastOrder ? intval(substr($lastOrder->id_order, 4)) : 0;
        $orderId = 'ORD-' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);

        if (Order::where('id_order', $orderId)->exists()) {
            return redirect()->route('checkout.index')->with('error', 'ID order already exists.');
        }

        // Create new order
        $order = new Order();
        $order->id_order = $orderId;
        $order->user_id = Auth::user()->id_user;
        $order->total_price = $request->total_price;
        $order->method = $request->method;
        $order->delivery_date = $request->delivery_date;
        $order->note = $request->note;
        $order->status = $request->status;

        // Handle address
        if (Address::where('user_id', Auth::user()->id_user)->exists()) {
            $address = Address::where('user_id', Auth::user()->id_user)->first();
            $order->address_id = $address->id_address;
        } else {
            $lastAddress = Address::orderBy('id_address', 'desc')->first();
            $lastNumber = $lastAddress ? intval(substr($lastAddress->id_address, 4)) : 0;
            $addressId = 'ADR-' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);

            if (Address::where('id_address', $addressId)->exists()) {
                return redirect()->route('checkout.index')->with('error', 'ID address already exists.');
            }

            $address = Address::create([
                'id_address' => $addressId,
                'user_id' => Auth::user()->id_user,
                'location_name' => 'Rumah',
                'location_address' => $request->location_address,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
            ]);

            $order->address_id = $address->id_address;
        }

        $order->save();

        // Ambil produk yang is_checked = 1 dari cart
        $carts = Cart::where('user_id', Auth::user()->id_user)
            ->where('is_checked', 1)
            ->get();

        foreach ($carts as $cart) {
            $lastOrderproduct = OrderProduct::orderBy('id_order_product', 'desc')->first();
            $lastNumber = $lastOrderproduct ? intval(substr($lastOrderproduct->id_order_product, 4)) : 0;
            $orderproductId = 'OPI-' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
    
            if (OrderProduct::where('id_order_product', $orderproductId)->exists()) {
                return redirect()->route('checkout.index')->with('error', 'ID order already exists.');
            }

            OrderProduct::create([
                'id_order_product' => $orderproductId,
                'order_id' => $order->id_order, // ID order yang baru dibuat
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
            ]);
        }

        // Hapus produk dari cart setelah dipindahkan
        Cart::where('user_id', Auth::user()->id_user)
            ->where('is_checked', 1)
            ->delete();

        return redirect()->route('user-profile.index')->with('success', 'Order successfully created!');
    }

    public function edit(Order $order)
    {
        return view('admin-order.index', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $orders = $request->validate([
            'status' => 'required',
        ]);

        $orders['status'] = strip_tags($orders['status']);
        $order->update($orders);
        return redirect(route('admin-order.index'));
    }
}
