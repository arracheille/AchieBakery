<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
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
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'required|string',
        ]);
    
        $lastCategory = Category::orderBy('id_category', 'desc')->first();
        $lastNumber = $lastCategory ? intval(substr($lastCategory->id_category, 4)) : 0;
        $newId = 'CAT-' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
    
        if (Category::where('id_category', $newId)->exists()) {
            return redirect()->route('categories.index')->with('error', 'ID category already exists.');
        }
    
        $category = Category::create([
            'id_category' => $newId,
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
        ]);
    
        return redirect()->route('category.index')->with('success', 'Category successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
