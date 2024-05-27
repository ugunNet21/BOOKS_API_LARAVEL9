<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MySkill;
use Illuminate\Http\Request;

class MySkillController extends Controller
{
    public function index()
    {
        $skills = MySkill::all();
        return view('admin.pages.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.pages.skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
        ]);

        $skill = new MySkill();
        $skill->fill($request->except('picture'));

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/skill_pictures', $pictureName);
            $skill->picture = $pictureName;
        }

        $skill->save();

        return redirect()->route('skills.index')->with('success', 'Skill created successfully.');
    }

    public function show($id)
    {
        $skill = MySkill::findOrFail($id);
        return view('admin.pages.skills.show', compact('skill'));
    }

    public function edit($id)
    {
        $skill = MySkill::findOrFail($id);
        return view('admin.pages.skills.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
        ]);

        $skill = MySkill::findOrFail($id);
        $skill->fill($request->except('picture'));

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/skill_pictures', $pictureName);
            $skill->picture = $pictureName;
        }

        $skill->save();

        return redirect()->route('skills.index')->with('success', 'Skill updated successfully');
    }

    public function destroy(MySkill $skill)
    {
        $skill->delete();

        return redirect()->route('skills.index')->with('success', 'Skill deleted successfully');
    }
}
