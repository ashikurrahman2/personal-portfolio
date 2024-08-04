<?php

namespace App\Http\Controllers\admin\main;

use App\Http\Controllers\Controller;
use App\Models\Allcv;
use Illuminate\Http\Request;

class AllcvController extends Controller
{
    public function index()
    {
        $mycv = Allcv::all();
        return view('backend.Admin.CV.index', compact('mycv'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Allcv::newallcv($request);
        return back()->with('success', 'CV info created successfully.');
    }

    public function show(Allcv $allcv)
    {
        //
    }

    public function edit(Allcv $allcv)
    {
        //
    }

    public function update(Request $request, Allcv $allcv)
    {
        Allcv::updateallcv($request, $allcv);
        return back()->with('success', 'CV info updated successfully.');
    }

    public function destroy(Allcv $allcv)
    {
        Allcv::deleteallcv($allcv);
        return back()->with('success', 'CV information deleted successfully.');
    }
}
