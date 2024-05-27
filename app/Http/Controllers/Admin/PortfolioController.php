<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.pages.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = PortfolioCategory::all();
        return view('admin.pages.portfolio.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:portfolio_categories,id',
            'status' => 'required|in:aktif,tidak aktif',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->category_id = $request->category_id;
        $portfolio->status = $request->status;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/portfolio_pictures', $pictureName);
            $portfolio->picture = $pictureName;
        }

        $portfolio->save();

        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully.');
    }

    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.pages.portfolio.show', compact('portfolio'));
    }

    public function edit($id)
    {

        $portfolio = Portfolio::findOrFail($id);
        $categories = PortfolioCategory::all();
        return view('admin.pages.portfolio.edit', compact('portfolio', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:portfolio_categories,id',
            'status' => 'required|in:aktif,tidak aktif',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->category_id = $request->category_id;
        $portfolio->status = $request->status;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/portfolio_pictures', $pictureName);
            $portfolio->picture = $pictureName;
        }

        $portfolio->save();

        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully.');
    }
}
