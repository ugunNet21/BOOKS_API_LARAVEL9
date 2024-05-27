<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BannerCategory;
use Illuminate\Http\Request;

class BannerCategoryController extends Controller
{
    public function index()
    {
        $bannerCategories = BannerCategory::all();
        return view('admin.pages.banner-category.index', compact('bannerCategories'));
    }

    public function create()
    {
        return view('admin.pages.banner-category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:aktif,tidak aktif',
        ]);
        $category = new BannerCategory();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->status = $request->status;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/category_banner', $pictureName);
            $category->picture = $pictureName;
        }

        $category->save();

        return redirect()->route('banner_categories.index')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $bannerCategory = BannerCategory::findOrFail($id);
        return view('admin.pages.banner-category.edit', compact('bannerCategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'picture' => 'nullable',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        $bannerCategory = BannerCategory::findOrFail($id);
        $bannerCategory->title = $request->title;
        $bannerCategory->description = $request->description;
        $bannerCategory->status = $request->status;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/category_banner', $pictureName);
            $bannerCategory->picture = $pictureName;
        }

        $bannerCategory->save();

        return redirect()->route('banner_categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy(BannerCategory $bannerCategory)
    {
        $bannerCategory->delete();

        return redirect()->route('banner_categories.index')->with('success', 'Category deleted successfully');
    }
}
