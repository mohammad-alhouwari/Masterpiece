<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = User::where('role', 1)->get();

        return view('dash.admin.adminView', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'sub_role' => 'required',
        ]);

        // Create a new admin user
        $admin = new User();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->sub_role = $request->input('sub_role');
        $admin->password = Hash::make($request->input('password'));
        $admin->role = true;
        $admin->save();


        // Redirect or respond with a success message
        return redirect()->route('dashboard.admin.index')->with('success', 'تم تسجيل المسؤول بنجاح.');
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
    public function update(Request $request, User $admin)
    {


        if ($image = $request->file('image')) {
            $destinationPath = 'profileImages/';
            $profileImage = 'profileImages/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $admin->image = $profileImage;
            $admin->save();
            return redirect()->route('dashboard.admin.index')->with('success', 'تم تعديل صورة المسؤول بنجاح.');
        }

        if ($request->password || $request->old_password || $request->password_confirmation) {

            $request->validate([
                'old_password' => 'required|string|min:8',
                'password' => 'required|string|min:8|confirmed',
            ]);
            if (!Hash::check($request->input('old_password'), $admin->password)) {
                return redirect()->back()->with('error', 'كلمة المرور القديمة غير صحيحة.');
            }
            $admin->password = Hash::make($request->input('password'));
            $admin->save();

            return redirect()->route('dashboard.admin.index')->with('success', 'تم تعديل كلمة المرور بنجاح.');

        }

        // dd($admin);
        if ($request->city || $request->phone || $request->street_address || $request->post_code) {
            $request->validate([
                'city' => 'nullable',
                'phone' => 'nullable',
                'street_address' => 'nullable',
                'post_code' => 'nullable',
            ]);
            $admin->city = $request->input('city');
            $admin->phone = $request->input('phone');
            $admin->street_address = $request->input('street_address');
            $admin->post_code = $request->input('post_code');
            $admin->save();
            return redirect()->route('dashboard.admin.index')->with('success', 'تم تعديل معلومات المسؤول الإضافية بنجاح .');
        }

        if ($request->name || $request->email || $request->sub_role) {

            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $admin->id,
                'sub_role' => 'required|in:0,1,2',
            ]);

            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            $admin->sub_role = $request->input('sub_role');
            $admin->save();

            return redirect()->route('dashboard.admin.index')->with('success', 'تم تعديل معلومات المسؤول الأساسية بنجاح .');

        }



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $admin)
    {
        // Find the user by ID
        if (Auth::user()->id == $admin->id) {
            return redirect()->route('dashboard.admin.index')->with('error', 'لا يمكنك خذف الحساب المسجل الدخول من خلالة');
        }
        $admin->delete();

        // Redirect back with a success message
        return redirect()->route('dashboard.admin.index')->with('success', 'تم حذف المسؤول بنجاح.');
    }

    public function updatePassword(Request $request)
    {


    }

}
