<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Order;
use App\Models\OrderItem;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Support\Facades\Session;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $userId = auth()->user()->id;
        $orders = Order::where('user_id', $userId)->get();
        
        // $orderItems = [];

        // foreach ($orders as $item) {
        //     $orderItems[] = OrderItem::where('order_Id', $item->id)
        //         ->with('product')
        //         ->get();
        // }

        return view('pages.profile', [
            'user' => $request->user(),
            // 'orderItems' => $orderItems,
            'orders' => $orders,
        ]);
    
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        $user = $request->user();
        if ($image = $request->file('image')) {
            $destinationPath = 'profileImages/';
            $profileImage = 'profileImages/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $user->image = $profileImage;
        }
        $user->save();
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleHandle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('email', $user->email)->first();

            if (!$findUser) {
                $findUser = new User();
                $findUser->name = $user->name;
                $findUser->email = $user->email;
                $findUser->image = $user->avatar;
                $findUser->password = Hash::make('your_default_password');
                $findUser->save();
            }

            Auth::login($findUser);

            Session::put('id', $findUser->id);
            Session::put('type', $findUser->type);

            return redirect()->intended('/'); // Redirect to the intended URL after login

        } catch (Exception $e) {
            // Handle exceptions here
            dd($e->getMessage());
        }
    }

    

}
