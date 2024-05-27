<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.pages.testimonials.index', compact('testimonials'));
    }


    public function create()
    {
        return view('admin.pages.testimonials.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'author_name' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author_position' => 'required',
        ]);

        $testimonial = new Testimonial();
        $testimonial->content = $request->input('content');
        $testimonial->rating = $request->input('rating');
        $testimonial->author_name = $request->input('author_name');

        // Handle image upload
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $testimonial->picture = $imageName;
        }

        $testimonial->author_position = $request->input('author_position');
        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }


    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.pages.testimonials.show', compact('testimonial'));
    }


    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.pages.testimonials.edit', compact('testimonial'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'author_name' => 'required',
            'author_position' => 'required',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->content = $request->input('content');
        $testimonial->rating = $request->input('rating');
        $testimonial->author_name = $request->input('author_name');
        $testimonial->author_position = $request->input('author_position');

        // Handle image update
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $testimonial->picture = $imageName;
        }

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }


    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
