<?php

namespace App\Http\Controllers\admin\main;
use App\Http\Controllers\Controller;

use App\Models\allcv;
use Illuminate\Http\Request;


class AllcvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mycv = allcv::all();
        // Pass the services data to the view
        return view('backend.Admin.CV.index', compact('mycv'));
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
       
        allcv::newallcv($request);
        return back()->with('success', 'CV info create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(allcv $allcv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(allcv $allcv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, allcv $allcv)
    {
        allcv::updateallcv($request, $allcv);
        return back()->with('success', 'CV info update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(allcv $allcv)
    {
        allcv:: deleteallcv($allcv);   
        return back()->with('success', 'CV information deleted successfully.');
    }
}
