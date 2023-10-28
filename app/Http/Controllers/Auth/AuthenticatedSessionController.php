<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Cart;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();



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
            session()->forget('cart');
        }
        return redirect()->intended("/");
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        session()->forget('cart');
        return redirect('/');
    }
}