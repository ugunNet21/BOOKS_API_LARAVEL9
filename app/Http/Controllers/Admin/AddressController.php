<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        return view('admin.pages.addresses.index', compact('addresses'));
    }

    public function create()
    {
        // Jika Anda memiliki formulir untuk membuat alamat baru, Anda dapat menambahkan logika di sini.
        $users = User::all();
        return view('admin.pages.addresses.create', compact('users'));
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'street' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'postal_code' => 'required|string',
            'country' => 'required|string',
        ]);

        Address::create($request->all());

        return redirect()->route('addresses.index')->with('success', 'Address created successfully.');
    }

    public function show($id)
    {
        $address = Address::findOrFail($id);
        return view('admin.pages.addresses.show', compact('address'));
    }

    public function edit($id)
    {
        $address = Address::findOrFail($id);
        $users = User::all();
        return view('admin.pages.addresses.edit', compact('address', 'users'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'street' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'postal_code' => 'required|string',
            'country' => 'required|string',
        ]);

        $address = Address::findOrFail($id);

        $address->update($request->all());

        return redirect()->route('addresses.index')->with('success', 'Address updated successfully.');
    }

    public function destroy($id)
    {

        $address = Address::findOrFail($id);
        $address->delete();

        return redirect()->route('addresses.index')->with('success', 'Address deleted successfully.');
    }
}
