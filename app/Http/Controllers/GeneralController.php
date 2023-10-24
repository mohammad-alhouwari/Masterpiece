<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = General::where('generalType', 'about')->get();
        return view('dash.about.aboutView', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.about.aboutAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|min:3',
            'text' => 'nullable|min:20|max:400',
            'media1' => [
                'nullable',
                function ($attribute, $value, $fail) use ($request) {
                    $mediaType1 = $request->input('mediaType1');

                    if ($mediaType1 == 'image' && !in_array($value->getClientOriginalExtension(), ['jpeg', 'png', 'jpg', 'gif', 'svg'])) {
                        $fail('The ' . $attribute . ' must be an image.');
                    }

                    if ($mediaType1 == 'video' && !in_array($value->getClientOriginalExtension(), ['mp4', 'avi', 'mov'])) {
                        $fail('The ' . $attribute . ' must be a video.');
                    }
                },
            ],
            'media2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'mediaType1' => 'nullable|in:image,video',
        ]);


        $about = new General();
        $about->generalType = 'about';
        $about->title = $request->input('title');
        $about->text = $request->input('text');
        $about->mediaType1 = $request->input('mediaType1');

        if ($request->hasFile('media1')) {
            $image1 = $request->file('media1');
            $destinationPath = 'media/';
            $profileImage = 'media/' . date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $profileImage);
            $about->media1 = $profileImage;
        }

        if ($request->hasFile('media2')) {
            $image2 = $request->file('media2');
            $destinationPath = 'media/';
            $profileMedia = 'media/' . date('YmdHis') + 1 . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileMedia);
            $about->media2 = $profileMedia;
        }

        $about->save();

        return redirect()->route('dashboard.about.index')->with('success', 'About page created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(General $general)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, General $general)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jeneral = General::where('id', $id)->first();
        if ($jeneral->jeneralType == 'about') {
            $message = 'About page';
        } else {
            $message = 'Invalid page';
        }
        $jeneral->delete();
        return redirect()->route('dashboard.about.index')->with('success', $message . ' deleted successfully.');
    }
}