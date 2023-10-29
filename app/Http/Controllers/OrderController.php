<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


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
    public function orders()
    {

        $orders = order::all();
        return view('dash.order.orderView', compact('orders'));
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
        $total = 0;
        $totalPrice = 0;
        foreach ($userCart as $item) {
            $totalPrice += $item->quantity * $item->Product->price;
            $total += $item->quantity;
        }

        if ($request->input('payment_method') == 'PayPal') {
            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $paypalToken = $provider->getAccessToken();
            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('paypal_success'),
                    "cancel_url" => route('paypal_cancel')
                ],
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => $totalPrice
                        ]
                    ]
                ]
            ]);

            if (isset($response['id']) && $response['id'] != null) {
                foreach ($response['links'] as $link) {
                    if ($link['rel'] === 'approve') {
                        // Store specific data from the request in the session
                        session([
                            'paymentDetail' => [
                                'phone' => $request->input('phone'),
                                'country' => $request->input('country'),
                                'city' => $request->input('city'),
                                'street_address' => $request->input('street_address'),
                                'post_code' => $request->input('post_code'),
                                'discount_id' => $request->input('discount_id') ? $request->input('discount_id') : null,
                                'payment_method' => $request->input('payment_method'),
                            ]
                        ]);
                        return redirect()->away($link['href']);
                    }
                }

            } else {
                return redirect()->route('paypal_cancel');
            }


        }

        $order = order::create([
            'user_id' => $user->id,
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'note' => $request->input('note'),
            'street_address' => $request->input('street_address'),
            'post_code' => $request->input('post_code'),
            'discount_id' => $request->input('discount_id') ? $request->input('discount_id') : null,
            'payment_method' => $request->input('payment_method'),
            'total_quantity' => $total,
            'total_price' => $totalPrice,
            'status' => "onHold"
        ]);

        foreach ($userCart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->Product->price,
            ]);
            $item->Product->stock_quantity -= $item->quantity;
            $item->Product->save();
            $item->delete();
        }


        return redirect()->route('Confirmation')->with('success', 'تم عملية الشراء بنجاح');

    }
    public function success(Request $request)
    {
        $user = Auth::user();
        $userCart = Cart::where('user_id', $user->id)->get();
        $total = 0;
        $totalPrice = 0;

        foreach ($userCart as $item) {
            $totalPrice += $item->quantity * $item->Product->price;
            $total += $item->quantity;
        }

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        //dd($response);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // $payment = $_SESSION['paymentDetail'];
            $payment = session('paymentDetail');

            $order = order::create([
                'user_id' => $user->id,
                'phone' => $payment['phone'],
                'country' => $payment['country'],
                'city' => $payment['city'],
                'street_address' => $payment['street_address'],
                'post_code' => $payment['post_code'],
                'discount_id' => $payment['discount_id'] ? $payment['discount_id'] : null,
                'payment_method' => $payment['payment_method'],
                'total_quantity' => $total,
                'total_price' => $totalPrice,
                'status' => "onHold"
            ]);

            foreach ($userCart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'price' => $item->Product->price,
                ]);
                $item->Product->stock_quantity -= $item->quantity;
                $item->Product->save();
                $item->delete();
            }

            // unset($_SESSION['paymentDetail']);
            session()->forget('paymentDetail');

            return redirect()->route('Confirmation')->with('success', 'شكرا على المصاري معلم مافي ترجيع');
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function cancel()
    {
        return redirect()->route('home')->with('error', 'ول يا دح دح لويش تكنسل');

    }
}


