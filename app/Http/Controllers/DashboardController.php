<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dash.index');
    }
    public function login()
    {
        return view('dash.sign-in');
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials) && auth()->user()->role) {
            // Authentication passed, and user has 'role' set to true
            return redirect()->intended('/dashboard');
        }

        // Authentication failed or user doesn't have the required role
        return back()->withErrors(['email' => 'Invalid credentials or insufficient permissions']);
    }
}
