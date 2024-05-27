<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {

        // $messages = ContactUs::all();
        $messages = ContactUs::latest( 'created_at' )->paginate( 10 );

        return view('admin.pages.contact.index', compact('messages'));
    }

    public function create()
    {

        return view('admin.pages.contact.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        ContactUs::create($validatedData);


        return redirect()->route('contacts.index')->with('success', 'Pesan berhasil dikirim!');
    }

    public function show(ContactUs $contactUs)
    {

        return view('admin.pages.contact.show', compact('contactUs'));
    }

    public function destroy(ContactUs $contactUs)
    {

        $contactUs->delete();

        return redirect()->route('contacts.index')->with('success', 'Pesan berhasil dihapus!');
    }
}
