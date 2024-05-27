<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     // Show the login form
     public function showLoginForm()
     {
         return view('auth.login');
     }

     // Handle the login request
     public function login(Request $request)
     {
         $request->validate([
             'email' => 'required|email',
             'password' => 'required|min:6',
         ]);

         $credentials = $request->only('email', 'password');

         if (Auth::attempt($credentials)) {
             // Authentication passed...
             return redirect()->intended('dashboard');
         }

         return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ]);
     }

     // Handle the logout request
     public function logout(Request $request)
     {
         Auth::logout();
         $request->session()->invalidate();
         $request->session()->regenerateToken();

         return redirect('/');
     }
}
