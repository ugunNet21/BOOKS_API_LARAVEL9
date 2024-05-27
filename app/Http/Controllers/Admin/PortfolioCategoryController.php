<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        $categories = PortfolioCategory::all();
        return view('admin.pages.portfolio-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.pages.portfolio-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:aktif,tidak aktif',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = new PortfolioCategory();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->status = $request->status;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/category_pictures', $pictureName);
            $category->picture = $pictureName;
        }

        $category->save();

        return redirect()->route('portfolios_categries.index')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $category = PortfolioCategory::findOrFail($id);
        return view('admin.pages.portfolio-categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:aktif,tidak aktif',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = PortfolioCategory::findOrFail($id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->status = $request->status;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/category_pictures', $pictureName);
            $category->picture = $pictureName;
        }

        $category->save();

        return redirect()->route('portfolios_categries.index')->with('success', 'Category updated successfully.');
    }

    public function show($id)
    {
        $category = PortfolioCategory::findOrFail($id);
        return view('admin.pages.portfolio-categories.show', compact('category'));
    }

    public function destroy($id)
    {
        $category = PortfolioCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('portfolios_categries.index')->with('success', 'Category deleted successfully.');
    }
}
