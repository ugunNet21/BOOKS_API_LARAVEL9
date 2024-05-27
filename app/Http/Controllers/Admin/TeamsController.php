<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $projects = Project::all();
        return view('admin.pages.teams.index', compact('teams', 'projects'));
    }

    public function create()
    {
        $users = User::all();
        $projects = Project::all();
        return view('admin.pages.teams.create',compact('users', 'projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'user_id' => 'required|exists:users,id',
            'project_id' => 'nullable|exists:projects,id',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'position' => 'nullable',
            'skill' => 'nullable',
            'linked_in' => 'nullable',
            'github' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable|email',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        $team = new Team();
        $team->fill($request->except('picture'));

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/team_pictures', $pictureName);
            $team->picture = $pictureName;
        }

        $team->save();

        return redirect()->route('teams.index')->with('success', 'Team created successfully.');
    }
    public function show($id)
    {
        $team = Team::findOrFail($id);
        $projects = Project::all();
        return view('admin.pages.teams.show', compact('team', 'projects'));
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $users = User::all();
        $projects = Project::all();
        return view('admin.pages.teams.edit', compact('team', 'users', 'projects'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'user_id' => 'required|exists:users,id',
            'project_id' => 'nullable|exists:projects,id',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'position' => 'nullable',
            'skill' => 'nullable',
            'linked_in' => 'nullable',
            'github' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable|email',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        $team = Team::findOrFail($id);
        $team->fill($request->except('picture'));

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/team_pictures', $pictureName);
            $team->picture = $pictureName;
        }

        $team->save();

        return redirect()->route('teams.index')->with('success', 'Team updated successfully');
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team deleted successfully');
    }
}
