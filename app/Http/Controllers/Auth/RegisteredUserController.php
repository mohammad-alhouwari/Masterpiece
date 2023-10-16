<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Cart;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $sessionCart = session('cart');

        if ($sessionCart != null) {
            $cartproducts = cart::where('user_id', auth()->user()->id);

            foreach ($sessionCart as $cartItem) {
                $existingCartItem = $cartproducts->where('product_id', $cartItem['id'])->first();
                if ($existingCartItem) {
                    $existingCartItem->quantity += $cartItem['quantity'];
                    $existingCartItem->save();
                } else {
                    cart::create([
                        'product_id' => $cartItem['id'],
                        'user_id' => auth()->user()->id,
                        'quantity' => $cartItem['quantity']
                    ]);
                }

            }
        }

        // return redirect(RouteServiceProvider::HOME);
        return redirect('/Islamiyat');

    }
}