<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.pages.abouts.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.pages.abouts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'address' => 'required',
            'projects_completed' => 'required',
            'happy_clients' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        $about = new About();
        $about->fill($request->except('picture'));

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/about_pictures', $pictureName);
            $about->picture = $pictureName;
        }
        // dd($about);

        $about->save();

        return redirect()->route('abouts.index')->with('success', 'About created successfully.');
    }

    public function show($id)
    {
        $about = About::findOrFail($id);
        return view('admin.pages.abouts.show', compact('about'));
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.pages.abouts.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'address' => 'required',
            'projects_completed' => 'required',
            'happy_clients' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        $about = About::findOrFail($id);
        $about->fill($request->except('picture'));

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/about_pictures', $pictureName);
            $about->picture = $pictureName;
        }

        $about->save();

        return redirect()->route('abouts.index')->with('success', 'About updated successfully');
    }

    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->route('abouts.index')->with('success', 'About deleted successfully');
    }
}
