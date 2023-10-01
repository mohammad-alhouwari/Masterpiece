<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('dash.users.usersView');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('dash.users.usersAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'confirm' => 'required|string|min:8|same:password',
            'phone' => 'nullable|string|max:15',
            'city' => 'nullable|string|max:255',
            'street_address' => 'nullable|string|max:255',
            'post_code' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'role' => 'nullable',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images'); // This stores the image in the `storage/app/images` directory
        } else {
            $imagePath = null;
        }

        // Create the user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'street_address' => $request->input('street_address'),
            'post_code' => $request->input('post_code'),
            'role' => $request->has('role'),
            'image' => $imagePath,
        ]);

        // Redirect or return a response
        return redirect()->route('dashboard.user.index')->with('success', 'User created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}