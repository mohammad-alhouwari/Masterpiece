<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        View::composer('*', function ($view) {
            $navCategories = Category::all();
            $user = Auth::user();
            $cart = [];

            if ($user) {
                $cart = Cart::where('user_id', $user->id)->get();
            } elseif (session()->has('cart')) {
                $cart = session('cart');
            }

            $view->with(compact('navCategories', 'cart'));
        });

    }
}