<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function search(Request $request) 
    {
        $products = Product::query();

        if ($request->filled('search')) {
            $searchbar = $request->search;
            $products->where(function($query) use ($searchbar) {
                $query->where('id_product', 'like', '%' . $searchbar . '%')
                      ->orWhere('product_name', 'like', '%' . $searchbar . '%');
            });
        }

        $products = $products->get();

        return view('search', compact('products'));    
    }
}
