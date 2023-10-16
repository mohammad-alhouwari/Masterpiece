<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            if (Auth::user()) {
                return view('pages/checkout');
            }
            return redirect()->back()->with('error', 'يتوجب عليك تسجيل الدخول');

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
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }


    public function pay(Request $request)
    {

        $user = Auth::user();
        $userCart = Cart::where('user_id', $user->id)->get();
        $total =0;
        foreach ($userCart as $item) {
           $total += $item->quantity;
        }
        $order = order::create([
            'user_id' => $user->id,
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'note' => $request->input('note'),
            'street_address' => $request->input('street_address'),
            'post_code' => $request->input('post_code'),
            'discount_id' => $request->input('discount_id') ? $request->input('discount_id') : null ,
            'payment_method' => $request->input('payment_method'),
            'total-quantity' => $total,
            'status' => "onHold"
        ]);
        
        foreach ($userCart as $item) {
            OrderItem::create([
                'order_id'=> $order->id,
                'product_id'=> $item->product_id,
                'quantity'=> $item->quantity,
                'price'=> $item->Product->price,
            ]);
           
            $item->delete();
        }

        
        return redirect()->route('home')->with('success','تم عملية الشراء بنجاح');

    }
}