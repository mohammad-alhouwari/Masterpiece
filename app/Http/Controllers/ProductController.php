<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use App\Models\OrderItem;
use App\Models\Review;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $products = Product::with('category')->get();
        return view('dash.products.productView', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(); // Assuming you have a Category model
        return view('dash.products.productAdd', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:10',
            'description' => 'required',
            'longDescription' => 'required',
            'price' => 'required|min:1',
            'stock_quantity' => 'required|min:1',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image',
            'images.*' => 'image',
        ]);

        // All data that comes from the user are stored in the request
        $input = $request->all();

        // Handle the image upload
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = 'images/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }

        // Loop through the input fields for additional images (image1, image2, image3, image4, image5)
        // for ($i = 1; $i <= 5; $i++) {
        //     $inputName = 'images' . $i;

        //     if ($image = $request->file($inputName)) {
        //         $destinationPath = 'images/';
        //         $profileImage = 'images/' . date('YmdHis') . "-" . $i . "." . $image->getClientOriginalExtension();
        //         $image->move($destinationPath, $profileImage);
        //         $input[$inputName] = $profileImage;
        //         $input['image'. $i] = $profileImage;
        //     }
        // }

        $images = $request->file('images');
        $i = 1;
        if($images){
        foreach ($images as  $image) {
            $inputName = 'image' . $i;
            $destinationPath = 'images/';
            $profileImage = 'images/' . date('YmdHis') . "-" . $i . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input[$inputName] = $profileImage;
            $input['image' . $i] = $profileImage;
            $i++;
        }}
        

        // Add the category_id to the input before creating the product
        $input['category_id'] = $request->input('category_id');
       
        // dd($input);
        Product::create($input);

        return redirect()->route('dashboard.product.index')
            ->with('success', 'Product created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $categories = Category::all();
        return view('dash.products.productEdit', compact('product' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:10|min:3',
            'description' => 'required|string',
            'stock_quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:1',
            'category_id' => 'required|exists:categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
            'image1' => 'image|mimes:jpeg,png,jpg,gif',
            'image2' => 'image|mimes:jpeg,png,jpg,gif',
            'image3' => 'image|mimes:jpeg,png,jpg,gif',
            'image4' => 'image|mimes:jpeg,png,jpg,gif',
            'image5' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->stock_quantity = $request->input('stock_quantity');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = 'images/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $product->image = $profileImage;
        }

        for ($i = 1; $i <= 5; $i++) {
            $inputName = "image{$i}";

            if ($request->hasFile($inputName)) {
                $destinationPath = 'images/';
                $profileImage = 'images/' . date('YmdHis') . "-" . $i . "." . $request->file($inputName)->getClientOriginalExtension();
                $request->file($inputName)->move($destinationPath, $profileImage);
                $product->$inputName = $profileImage;
            }
        }

        $product->save();

        return redirect()->route('dashboard.product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();

        return redirect()->route('dashboard.product.index')->with('success', 'Product deleted successfully.');
    }



    //------------------------------- home page -------------------------------

    public function home(){
        $categories = Category::all();
        return view('pages.index' ,compact('categories'));
    }


    public function shop($category_id)
    {
        $products = product::where('category_id', $category_id)->get();
        $categories = Category::all();
        $categoryName = Category::where('id', $category_id)->first();
        return view('pages.shop',compact('products','categories','categoryName'));
    }

    public function product($product_id)
    {
        $product = product::where('id', $product_id)->first();

        $user =auth::user();
        $hasBeenBought = false;
        $Reviews = Review::where('product_id', $product_id)->get();
        foreach ($user->Order as $order) {
            foreach ($order->OrderItem as $item) {
                if ($item->product_id == $product_id) {
                    $hasBeenBought = true;
                }
            }
        }

        $category = Category::where('id', $product->category_id)->first();
        return view('pages.single-product',compact('product','category','hasBeenBought','Reviews'));
    }

}