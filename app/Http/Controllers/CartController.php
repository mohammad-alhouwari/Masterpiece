<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    // 6. Implement User Authentication
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    // 1. Handle Adding to Cart
    public function addToCart(Request $request)
    {
        $product = Product::find($request->product_id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $cart = Cart::updateOrCreate(
            ['user_id' => auth()->user()->id, 'product_id' => $request->product_id],
            ['quantity' => $request->quantity]
        );

        return response()->json(['message' => 'Product added to cart', 'cart' => $cart]);
    }

    // 2. Handle Viewing Cart
    public function viewCart()
    {
        $cartItems = auth()->user()->Cart;
        $total = $this->calculateTotal($cartItems);

        return view('pages.cart', compact('cartItems', 'total'));
    }

    // 3. Handle Updating and Removing Items
    public function updateCartItem(Request $request)
    {
        $cart = Cart::where('user_id', auth()->user()->id)
            ->where('product_id', $request->product_id)
            ->first();

        if (!$cart) {
            return response()->json(['message' => 'Cart item not found'], 404);
        }

        if ($request->quantity == 0) {
            $cart->delete();
            return response()->json(['message' => 'Cart item removed']);
        }

        $cart->update(['quantity' => $request->quantity]);

        return response()->json(['message' => 'Cart item updated', 'cart' => $cart]);
    }

    // 4. Display Cart Total
    public function cartTotal()
    {
        $total = $this->calculateTotal(auth()->user()->Cart);

        return response()->json(['total' => $total]);
    }

    // 5. Display Checkout and Order Process (This can be a separate controller or action)

    // Helper method to calculate the cart total
    private function calculateTotal($cartItems)
    {
        return $cartItems->sum(function ($item) {
            return $item->Product->price * $item->quantity;
        });
    }
}