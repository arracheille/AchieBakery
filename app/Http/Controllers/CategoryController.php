<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'category_img' => 'required|image|mimes:jpeg,png,jpg',
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

        if ($request->hasFile('category_img')) {
            $imageName = time() . '.' . $request->category_img->extension();
            $request->category_img->move(public_path('category_img'), $imageName);
            $category->category_img = 'category_img/' . $imageName;
        }
    
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
        return view('category.index', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $categories = $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'required|string',
        ]);

        $categories['category_name'] = strip_tags($categories['category_name']);        
        $categories['category_description'] = strip_tags($categories['category_description']);
        $category->update($categories);
        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
