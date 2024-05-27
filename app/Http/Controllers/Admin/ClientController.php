<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('admin.pages.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.pages.clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            // 'state' => 'nullable|string|max:50',
            'country' => 'nullable|string|max:50',
            'postal_code' => 'nullable|string|max:20',
            'date_joined' => 'nullable|date',
            'last_login' => 'nullable|date',
            'is_active' => 'nullable|boolean',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->city = $request->city;
        // $client->state = $request->state;
        $client->country = $request->country;
        $client->postal_code = $request->postal_code;
        $client->date_joined = $request->date_joined;
        $client->last_login = $request->last_login;
        $client->is_active = $request->is_active;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/client_pictures', $pictureName);
            $client->picture = $pictureName;
        }

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client created successfully.');
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.pages.clients.show', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.pages.clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,'.$id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            // 'state' => 'nullable|string|max:50',
            'country' => 'nullable|string|max:50',
            'postal_code' => 'nullable|string|max:20',
            'date_joined' => 'nullable|date',
            'last_login' => 'nullable|date',
            'is_active' => 'nullable|boolean',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $client = Client::findOrFail($id);
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->city = $request->city;
        // $client->state = $request->state;
        $client->country = $request->country;
        $client->postal_code = $request->postal_code;
        $client->date_joined = $request->date_joined;
        $client->last_login = $request->last_login;
        $client->is_active = $request->is_active;

        if ($request->hasFile('picture')) {
            $pictureName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public/client_pictures', $pictureName);
            $client->picture = $pictureName;
        }

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
    }
}
