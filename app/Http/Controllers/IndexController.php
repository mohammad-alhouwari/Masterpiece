<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use App\Models\General;
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
        $productsNew = Product::orderBy('created_at', 'desc')->take(8)->get();
        return view('pages.index', compact('categories', 'productsNew'));
    }





    public function shop(Request $request, $category_id = null)
    {
        
        // dd($request);
        $perPage = $request->input('perPage') ? $request->input('perPage') : 6;
        $query = Product::query()->where('stock_quantity', '>', 0)->where('status', 1);

        $sort = $request->input('sort');

        if ($category_id !== null) {
            $query->where('category_id', $category_id);
        }

        // Price filtering logic
        $minPrice = $request->input('lowerValueFilter');
        $maxPrice = $request->input('upperValueFilter');

        if ($minPrice !== null && $maxPrice !== null) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        }

        if ($sort === 'az') {
            $query->orderBy('name', 'asc');
        } elseif ($sort === 'za') {
            $query->orderBy('name', 'desc');
        } elseif ($sort === 'high_price') {
            $query->orderBy('price', 'desc');
        } elseif ($sort === 'low_price') {
            $query->orderBy('price', 'asc');
        } elseif ($sort === 'newest') {
            $query->orderBy('created_at', 'asc');
        } elseif ($sort === 'oldest') {
            $query->orderBy('created_at', 'desc');
        }


        if ($request->has('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }

        
        $products = $query->paginate($perPage);


        $category = Category::find($category_id);

        return view('pages.shop', compact('products', 'category', 'category_id', 'sort', 'perPage' ,'maxPrice', 'minPrice'));
    }

    








    public function product($product_id)
    {
        $product = product::where('id', $product_id)->first();
        $related = Product::where('category_id', $product->category_id)->where('stock_quantity', '>', 0)->where('status', 1)->inRandomOrder()->take(6)->get();
        $category = Category::where('id', $product->category_id)->first();

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
        return view('pages.single-product', compact('product', 'category', 'hasBeenBought', 'Reviews', 'related'));
    }

    public function about()
    {
        $generals = general::all();
        return view('pages.about_us', compact('generals'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function orderConfirmation()
    {
        $user = auth::user();
        $order = $user->Order->last();
        return view('pages.orderConfirmation', compact('order', 'user'));
    }

}
