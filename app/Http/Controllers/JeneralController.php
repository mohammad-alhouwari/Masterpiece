<?php

namespace App\Http\Controllers;

use App\Models\Jeneral;
use Illuminate\Http\Request;

class JeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = Jeneral::where('jeneralType', 'about')->get();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jeneral $jeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jeneral $jeneral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jeneral $jeneral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jeneral $jeneral)
    {
        //
    }
}
