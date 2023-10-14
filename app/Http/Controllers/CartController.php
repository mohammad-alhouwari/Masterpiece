<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.cart');
        
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cart $cart)
    {
        //
    }

    public function saveProductToSession(Request $request)
    {
        $valueToAdd = $request->input('productId');
        $quantity = $request->input('quantity');
        $cart = session()->get('cart', []);
        $product = Product::findOrFail($valueToAdd);
        if (isset($cart[$valueToAdd])) {
            $cart[$valueToAdd]['quantity'] +=$quantity;
        } else {
            $cart[$valueToAdd] = [
                "id" => $product->id,
                "name" => $product->name,
                "image" => $product->image,
                "price" => $product->price,
                'description' => $product->description,
                "quantity" => $quantity
            ];
        }

        if (Auth::check()) {
            $user = Auth::user();
            $cartproducts = Cart::where('user_id', $user->id)->get();

            foreach ($cart as $cartItem) {
                $existingCartItem = $cartproducts->where('product_id', $cartItem['id'])->first();
                if ($existingCartItem) {
                    // Update the quantity of the existing cart item
                    $existingCartItem->quantity += $quantity;
                    $existingCartItem->save();
                } else {
                    // Create a new cart item
                    Cart::create([
                        'user_id' => $user->id,
                        'product_id' => $cartItem['id'],
                        'quantity' => $cartItem['quantity'],
                    ]);
                }
            }
        } else {

            session()->put('cart', $cart);
        }
        // Push $valueToAdd onto the session array
        // return response()->json(['message' => 'Value added to session array successfully']);
        return redirect()->back()->with('success', 'تم إضافة المنتج بنجاح');
    }

    public function update2(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);

                if (Auth::check()) {
                    $user = Auth::user();
                    $cartItem = Cart::where('user_id', $user->id)
                        ->where('product_id', $request->id)
                        ->first();

                    if ($cartItem) {
                        if ($cartItem->quantity > 0) {
                            $cartItem->delete(); // Remove the record if quantity becomes zero
                        } else {
                            $cartItem->quantity = 0;
                            $cartItem->save(); // Update the quantity in the database
                        }
                    }
                }

                session()->flash('success', 'تم حذف المنتج من سلة المشتريات بنجاح');
            }
        }

        return redirect()->back();
    }







}