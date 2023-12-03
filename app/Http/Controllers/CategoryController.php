<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all(); // Assuming you have a Category model

        return view('dash.categories.categoryView', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('dash.categories.categoryAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'video' => 'required|mimes:mp4,mov,avi',
            'description' => 'nullable|string',
        ]);


        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');

        // Handle file upload
        if ($video = $request->file('video')) {
            $destinationPath = 'videos/';
            $fileName = time() . '_' . $video->getClientOriginalName();
            $video->move($destinationPath, $fileName);
            $category->video = $fileName;
        }



        $category->save();

        return redirect()->route('dashboard.category.index')->with('success', 'Category created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dash.categories.categoryEdit', compact('category'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'video' => 'nullable|mimes:mp4,mov,avi',
            'description' => 'nullable|string',
        ]);

        $category->name = $request->input('name');
        $category->description = $request->input('description');


        if ($video = $request->file('video')) {
            $destinationPath = 'videos/';
            $fileName = time() . '_' . $video->getClientOriginalName();
            $video->move($destinationPath, $fileName);
            $category->video = $fileName;
        }

        $category->save();

        return redirect()->route('dashboard.category.index')->with('success', 'Category updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if (!$category->Product->isEmpty()) {
            return redirect()->route('dashboard.category.index')->with('error', 'يجب ان تكون الفئة فارغة من المنتجات أولاً');
        }

        $category->delete();

        return redirect()->route('dashboard.category.index')->with('success', 'تم حذف الفئة بنجاح');
    }

}

