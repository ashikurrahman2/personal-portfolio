<?php
namespace App\Http\Controllers\admin\main;

use App\Http\Controllers\Controller;

use App\Models\ressume;
use Illuminate\Http\Request;

class RessumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ressumes = ressume::all();
        
        // Pass the services data to the view
        return view('backend.Admin.ressume.index', compact('ressumes'));
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
        ressume::newressumes($request);
        return back()->with('success', 'Ressume info create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ressume $ressume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ressume $ressume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ressume $ressume)
    {
        ressume::updateressumes($request, $ressume);
        return back()->with('success', 'Ressume info update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ressume $ressume)
    {
        ressume::deleteressumes($ressume);   
        return back()->with('success', 'Ressume information deleted successfully.');
    }
}
