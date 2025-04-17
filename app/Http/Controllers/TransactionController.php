<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id_order',
            'order_proof' => 'required|image|mimes:jpeg,png,jpg',
        ]);
    
        $lastTransaction = Order::orderBy('id_transaction', 'desc')->first();
        $lastNumber = $lastTransaction ? intval(substr($lastTransaction->id_transaction, 4)) : 0;
        $newId = 'TRN-' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
    
        if (Order::where('id_transaction', $newId)->exists()) {
            return redirect()->route('checkout.index')->with('error', 'ID transaction already exists.');
        }
    
        $transaction = new Order();
        $transaction->id_transaction = $newId;
        $transaction->transaction_name = $request->transaction_name;
        $transaction->transaction_description = $request->transaction_description;

        if ($request->hasFile('transaction_img')) {
            $imageName = time() . '.' . $request->transaction_img->extension();
            $request->transaction_img->move(public_path('transaction_img'), $imageName);
            $transaction->transaction_img = 'transaction_img/' . $imageName;
        }

        $transaction->save();

        return redirect()->route('transaction.index')->with('success', 'Transaction successfully added!');
    }
}
