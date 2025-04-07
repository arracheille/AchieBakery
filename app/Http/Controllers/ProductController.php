<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id_category',
            'product_name' => 'required|string',
            'product_description' => 'required|string',
            'product_price' => 'required|integer',
            'product_size' => 'required|string',
            'product_img' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $lastProduct = Product::orderBy('id_product', 'desc')->first();
        $lastNumber = $lastProduct ? intval(substr($lastProduct->id_product, 4)) : 0;
        $productId = 'PRD-' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);

        // Simpan data produk
        $product = new Product();
        $product->id_product = $productId;
        $product->category_id = $request->category_id;
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_price = $request->product_price;
        $product->product_size = $request->product_size;

        // Cek apakah ada gambar yang diunggah
        if ($request->hasFile('product_img')) {
            $imageName = time() . '.' . $request->product_img->extension();
            $request->product_img->move(public_path('product_img'), $imageName);
            $product->product_img = 'product_img/' . $imageName;
        }

        $product->save();

        return back()->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
