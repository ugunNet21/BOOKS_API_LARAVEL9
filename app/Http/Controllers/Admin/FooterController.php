<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        return view('admin.pages.footers.index', compact('footers'));
    }

    public function create()
    {

        return view('admin.pages.footers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'country' => 'nullable|string',
            'address' => 'nullable|string',
            'facebook' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'twitter' => 'required|string|max:255',
            'youtube' => 'required|string|max:255',
            'github' => 'nullable|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'telp' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'open_hours_start' => 'nullable|date_format:H:i',
            'open_hours_end' => 'nullable|date_format:H:i|after_or_equal:open_hours_start',
            'open_days' => 'nullable|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            $data['logo'] = str_replace('public/', '', $logoPath);
        }

        Footer::create($data);

        return redirect()->route('footers.index')->with('success', 'Footer created successfully.');
    }

    public function show(Footer $footer)
    {
        return view('admin.pages.footers.show', compact('footer'));
    }

    public function edit(Footer $footer)
    {

        return view('admin.pages.footers.edit', compact('footer'));
    }

    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'country' => 'nullable|string',
            'address' => 'nullable|string',
            'facebook' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'twitter' => 'required|string|max:255',
            'youtube' => 'required|string|max:255',
            'github' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'telp' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'open_hours_start' => 'nullable|date_format:H:i',
            'open_hours_end' => 'nullable|date_format:H:i|after_or_equal:open_hours_start',
            'open_days' => 'nullable|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {

            if ($footer->logo) {
                Storage::delete('public/' . $footer->logo);
            }
            $logoPath = $request->file('logo')->store('public/logos');
            $data['logo'] = str_replace('public/', '', $logoPath);
        }

        $footer->update($data);

        return redirect()->route('footers.index')->with('success', 'Footer updated successfully.');
    }

    public function destroy(Footer $footer)
    {
        $footer->delete();

        return redirect()->route('footers.index')->with('success', 'Footer deleted successfully.');
    }
}
