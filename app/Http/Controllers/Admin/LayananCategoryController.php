<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LayananCategory;
use Illuminate\Http\Request;

class LayananCategoryController extends Controller
{
    public function index()
    {
        $categories = LayananCategory::all();
        return view('admin.pages.layanan-category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.pages.layanan-category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:aktif,tidak aktif',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = new LayananCategory();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->status = $request->status;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/category_pictures', $pictureName);
            $category->picture = $pictureName;
        }

        $category->save();

        return redirect()->route('layanans_categories.index')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $category = LayananCategory::findOrFail($id);
        return view('admin.pages.layanan-category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:aktif,tidak aktif',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = LayananCategory::findOrFail($id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->status = $request->status;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/category_pictures', $pictureName);
            $category->picture = $pictureName;
        }

        $category->save();

        return redirect()->route('layanans_categories.index')->with('success', 'Category updated successfully.');
    }

    public function show($id)
    {
        $category = LayananCategory::findOrFail($id);
        return view('admin.pages.layanan-category.show', compact('category'));
    }

    public function destroy($id)
    {
        $category = LayananCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('layanans_categories.index')->with('success', 'Category deleted successfully.');
    }
}
