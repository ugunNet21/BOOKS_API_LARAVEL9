<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\LayananCategory;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        return view('admin.pages.layanan.index', compact('layanans'));
    }

    public function create()
    {
        $categories = LayananCategory::all();
        return view('admin.pages.layanan.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:aktif,tidak aktif',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'layanans_category_id' => 'required|exists:layanans_categories,id',
        ]);

        $layanan = new Layanan();
        $layanan->title = $request->title;
        $layanan->description = $request->description;
        $layanan->status = $request->status;
        $layanan->layanans_category_id = $request->layanans_category_id;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/layanan_pictures', $pictureName);
            $layanan->picture = $pictureName;
        }

        $layanan->save();

        return redirect()->route('layanans.index')->with('success', 'Layanan created successfully.');
    }

    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        $categories = LayananCategory::all();
        return view('admin.pages.layanan.edit', compact('layanan', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:aktif,tidak aktif',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'layanans_category_id' => 'required|exists:layanans_categories,id',
        ]);

        $layanan = Layanan::findOrFail($id);
        $layanan->title = $request->title;
        $layanan->description = $request->description;
        $layanan->status = $request->status;
        $layanan->layanans_category_id = $request->layanans_category_id;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/layanan_pictures', $pictureName);
            $layanan->picture = $pictureName;
        }

        $layanan->save();

        return redirect()->route('layanans.index')->with('success', 'Layanan updated successfully.');
    }

    public function show($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('admin.pages.layanan.show', compact('layanan'));
    }

    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();

        return redirect()->route('layanans.index')->with('success', 'Layanan deleted successfully.');
    }
}
