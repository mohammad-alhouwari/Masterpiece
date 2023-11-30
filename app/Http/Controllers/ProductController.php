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
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;



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


    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required',
            'longDescription' => 'required',
            'price' => 'required|min:1',
            'stock_quantity' => 'required|min:1',
            'category_id' => 'required|exists:categories,id',
            'image_data' => 'required',
            'status' => 'nullable',
        ]);

        // All data that comes from the user are stored in the request
        $input = $request->all();

        if ($request->has('status')) {
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }

        // Save the image to your storage (you may need to configure storage settings)
        $imageData = $request->input('image_data');
        $imageData = substr($imageData, strpos($imageData, ',') + 1);
        $imageData = base64_decode($imageData);
        $filename = time() . '_' . Str::random(10) . '.jpg';
        file_put_contents(public_path('images/' . $filename), $imageData);

        // Add the category_id to the input before creating the product
        $input['category_id'] = $request->input('category_id');
        $input['image'] = 'images/' . $filename;

        // Create a new Product model instance
        Product::create($input);

        return redirect()->route('dashboard.product.index')->with('success', 'Product created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return view('dash.products.productShow', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $categories = Category::all();
        return view('dash.products.productEdit', compact('product', 'categories'));
    }



    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required',
            'longDescription' => 'required',
            'price' => 'required|min:1',
            'stock_quantity' => 'required|min:1',
            'category_id' => 'required|exists:categories,id',
            'image_data' => 'nullable', // Make image_data optional for updates
            'status' => 'nullable',
        ]);
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Update the product data
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->longDescription = $request->input('longDescription');
        $product->price = $request->input('price');
        $product->stock_quantity = $request->input('stock_quantity');
        $product->category_id = $request->input('category_id');

        // Update the status based on the checkbox
        if ($request->has('status')) {
            $product->status = 1;
        } else {
            $product->status = 0;
        }

        // Update the image if provided
        if ($request->image_data) {
            $imageData = $request->input('image_data');
            $imageData = substr($imageData, strpos($imageData, ',') + 1);
            $imageData = base64_decode($imageData);
            $filename = time() . '_' . Str::random(10) . '.jpg';
            file_put_contents(public_path('images/' . $filename), $imageData);

            // Delete the old image if it exists
            if (File::exists(public_path($product->image))) {
                File::delete(public_path($product->image));
            }

            $product->image = 'images/' . $filename;
        }

        // Save the updated product
        $product->save();

        return redirect()->route('dashboard.product.index')->with('success', 'تم تحديث .');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        
        if ($product->status == 1) {
            $product->status = 0;
            $product->update(['status' => 0]);
            return redirect()->route('dashboard.product.index')->with('success', 'لقد أصبحت حالة المنتج غير نشطة لتأكيد الحذف قم بإجراء عملية الحذف مرة أخرى');
        }
        $product->delete();

        return redirect()->route('dashboard.product.index')->with('success', 'تم خذف المنتج بنجاح.');
    }

    public function imageDelete(Request $request)
    {
        $product = Product::where('id', $request->productId)->first();
        $imageKey = $request->imageKey;

        if ($product) {
            $product->update([$imageKey => null]);
            return redirect()->back()->with('success', 'تم حذف الصورة بنجاح');
        } else {
            return redirect()->back()->with('error', 'لم يتم العثور على صورة لتتم عملية الحذف');
        }
    }
    public function imageAddPage($id)
    {
        return view('dash.products.productAddImage', compact('id'));
    }
    public function imageStore(Request $request, Product $product)
    {

        $request->validate([
            'image_data' => 'required',
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $inputName = "image{$i}";

            if (!$product->$inputName) {
                $imageData = $request->input('image_data');
                $imageData = substr($imageData, strpos($imageData, ',') + 1);
                $imageData = base64_decode($imageData);
                $filename = time() . '_' . Str::random(10) . '.jpg';
                file_put_contents(public_path('images/' . $filename), $imageData);
                $product->$inputName = 'images/' . $filename;
                break;
            }
        }

        // dd($product);
        $product->save();
        session::flash('success', 'تم إضافة الصورة بنجاح');
        return redirect()->route('dashboard.product.show', $product->id);
        // return view('dash.products.productShow', compact('product'))->with('success', 'تم إضافة الصورة بنجاح');
    }

}