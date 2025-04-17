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
    
        $category = new Category();
        $category->id_category = $newId;
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;

        if ($request->hasFile('category_img')) {
            $imageName = time() . '.' . $request->category_img->extension();
            $request->category_img->move(public_path('category_img'), $imageName);
            $category->category_img = 'category_img/' . $imageName;
        }

        $category->save();

        return redirect()->route('category.index')->with('success', 'Category successfully added!');
    }

    public function edit(Category $category)
    {
        return view('category.index', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'category_name' => 'required|string',
            'category_img' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);
    
        if ($request->hasFile('category_img')) {
            // hapus gambar lama kalau ada
            if ($category->category_img && file_exists(public_path($category->category_img))) {
                unlink(public_path($category->category_img));
            }
    
            $imageName = time().'.'.$request->category_img->extension();
            $request->category_img->move(public_path('category_img'), $imageName);
            $validated['category_img'] = 'category_img/'.$imageName;
        } else {
            // JANGAN ubah nilai category_img kalau tidak ada file baru
            unset($validated['category_img']);
        }
    
        $category->update($validated);
    
        return redirect()->route('category.index')->with('success', 'Kategori berhasil diubah');
    }    

    public function destroy(Category $category) {
        $category->delete();
        return back();
    }
}
