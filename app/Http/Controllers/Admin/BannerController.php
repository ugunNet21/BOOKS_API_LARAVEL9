<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\BannerCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.pages.banner.index', compact('banners'));
    }

    public function create()
    {
        $bannerCategories = BannerCategory::all();
        return view('admin.pages.banner.create', ['bannerCategories' => $bannerCategories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'address' => 'nullable|string',
            'banner_category_id' => 'required|exists:banners_categories,id',
            'status' => 'required|in:aktif,tidak aktif',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $banner = new Banner();
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->address = $request->address;
        $banner->banner_category_id = $request->banner_category_id;
        $banner->status = $request->status;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/banner_pictures', $pictureName);
            $banner->picture = $pictureName;
        }

        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner created successfully.');
    }
    public function show($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.pages.banner.show', ['banner' => $banner]);
    }

    public function edit( $id)
    {
        $banner = Banner::findOrFail($id);
        $categoriesBanner = BannerCategory::all();
        return view('admin.pages.banner.edit', ['banner' =>$banner , 'categoriesBanner'=>$categoriesBanner]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'address' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:aktif,tidak aktif',
            'banner_category_id' => 'required|exists:banners_categories,id',
        ]);

        $banner = Banner::findOrFail($id);
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->address = $request->address;
        $banner->status = $request->status;
        $banner->banner_category_id = $request->banner_category_id;

        if ($request->hasFile('picture')) {
            // Delete previous picture if exists
            if ($banner->picture) {
                Storage::delete('public/banner_pictures/' . $banner->picture);
            }

            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/banner_pictures', $pictureName);
            $banner->picture = $pictureName;
        }

        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        // Delete picture if exists
        if ($banner->picture) {
            Storage::delete('public/banner_pictures/' . $banner->picture);
        }

        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner deleted successfully.');
    }
}
