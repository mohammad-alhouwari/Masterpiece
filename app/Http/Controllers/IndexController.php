<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use App\Models\OrderItem;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{



    public function home()
    {
        $categories = Category::all();
        return view('pages.index', compact('categories'));
    }


    public function shop($category_id)
    {
        $products = product::where('category_id', $category_id)->get();
        $categories = Category::all();
        $categoryName = Category::where('id', $category_id)->first();
        return view('pages.shop', compact('products', 'categories', 'categoryName'));
    }

    public function product($product_id)
    {
        $product = product::where('id', $product_id)->first();

        $user = auth::user();
        $hasBeenBought = false;
        $Reviews = Review::where('product_id', $product_id)->get();
        if ($user) {
            foreach ($user->Order as $order) {
                foreach ($order->OrderItem as $item) {
                    if ($item->product_id == $product_id) {
                        $hasBeenBought = true;
                    }
                }
            }
        }
        ;
        $category = Category::where('id', $product->category_id)->first();
        return view('pages.single-product', compact('product', 'category', 'hasBeenBought', 'Reviews'));
    }

    public function about () 
    {
        return view('pages.about_us');
    }

}
