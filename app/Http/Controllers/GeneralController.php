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
        // Validation rules
        $rules = [
            'name' => 'nullable|string|min:3',
            'description' => 'nullable|string|min:20',
            'coverImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed image formats and max size
            'mediaType1' => 'nullable|string|in:image,video',
            'mediaImage' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'mediaVideo' => 'nullable|mimes:mp4,avi,mov', // Adjust allowed video formats and max size
        ];

        // Validate the request
        $request->validate($rules);

        // Create a new General model instance
        $general = new General;

        // Assign values from the request to the model
        $general->title = $request->input('name');
        $general->generalType = 'about';
        $general->text = $request->input('description');

        // Handle cover image
        if ($request->hasFile('coverImage')) {
            $coverImage = $request->file('coverImage');
            $coverImagePath = 'media/' . date('YmdHis') . "." . $coverImage->getClientOriginalExtension();
            $coverImage->move(public_path('media'), $coverImagePath);
            $general->media2 = $coverImagePath;
        }

        // Handle mediaType1 based on selected value
        if ($request->input('mediaType1') === 'image') {
            if ($request->hasFile('mediaImage')) {
                $mediaImage = $request->file('mediaImage');
                $mediaImagePath = 'media/' . date('YmdHis') . "_mediaImage." . $mediaImage->getClientOriginalExtension();
                $mediaImage->move(public_path('media'), $mediaImagePath);
                $general->media1 = $mediaImagePath;
                $general->mediaType1 = 'image';
            }
        } elseif ($request->input('mediaType1') === 'video') {
            if ($request->hasFile('mediaVideo')) {
                $mediaVideo = $request->file('mediaVideo');
                $mediaVideoPath = 'media/' . date('YmdHis') . "_mediaVideo." . $mediaVideo->getClientOriginalExtension();
                $mediaVideo->move(public_path('media'), $mediaVideoPath);
                $general->media1 = $mediaVideoPath;
                $general->mediaType1 = 'video';
            }
        }

        // Save the General model instance
        $general->save();

        // Redirect or respond as needed
        return redirect()->route('dashboard.general.about.index')->with('success', 'تم إضافة صفحة من نحن بنجاح');
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
    public function edit($general)
    {
        $about = General::where('generalType', 'about')->where('id', $general)->first();
        return view('dash.about.aboutEdit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, General $general)
    // {
    //     //
    // }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'nullable|string|min:3',
            'description' => 'nullable|string|min:20',
            'coverImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'mediaType1' => 'in:image,video,emptyMedia',
            'mediaImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'mediaVideo' => 'nullable|mimetypes:video/mp4,video/avi,video/mov|max:20480',
            'coverImageRemove' => 'nullable', // added for removing cover image
        ]);

        // Find the model instance
        $general = General::findOrFail($id);

        // Update the model with the new data
        $general->update([
            'title' => $request->input('name'),
            'text' => $request->input('description'),
            // Add other fields as needed

            // Handle cover image removal
            'media2' => $request->has('coverImageRemove') && $request->input('coverImageRemove') ? null : $general->media2,
        ]);

        // Handle cover image update
        if ($request->hasFile('coverImage')) {
            // Upload and save the new cover image
            $coverImage = $request->file('coverImage');
            $coverImagePath = 'media/' . date('YmdHis') . "." . $coverImage->getClientOriginalExtension();
            $coverImage->move(public_path('media'), $coverImagePath);

            // Update the model with the new cover image path
            $general->update(['media2' => $coverImagePath]);
        }

        // Handle mediaType1 update based on the selected value
        if ($request->input('mediaType1') === 'image' && $request->hasFile('mediaImage')) {
            // Upload and save the new image
            $mediaImage = $request->file('mediaImage');
            $mediaImagePath = 'media/' . date('YmdHis') . "_mediaImage." . $mediaImage->getClientOriginalExtension();
            $mediaImage->move(public_path('media'), $mediaImagePath);

            // Update the model with the new image path
            $general->update(['media1' => $mediaImagePath]);
            $general->update(['mediaType1' => 'image']);
        } elseif ($request->input('mediaType1') === 'video' && $request->hasFile('mediaVideo')) {
            // Upload and save the new video
            $mediaVideo = $request->file('mediaVideo');
            $mediaVideoPath = 'media/' . date('YmdHis') . "_mediaVideo." . $mediaVideo->getClientOriginalExtension();
            $mediaVideo->move(public_path('media'), $mediaVideoPath);

            // Update the model with the new video path
            $general->update(['media1' => $mediaVideoPath]);
            $general->update(['mediaType1' => 'video']);
        } elseif ($request->input('mediaType1') === 'emptyMedia') {
            // Remove the existing media
            $general->update(['media1' => null]);
            $general->update(['mediaType1' => null]);
        }

        // Redirect back or wherever you need to go after the update
        return redirect()->back()->with('success', 'تم التحديث بنجاح');
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
    public function Index_SliderView()
    {
        //
    }
    public function Index_SliderCreate()
    {
        //
    }
}
