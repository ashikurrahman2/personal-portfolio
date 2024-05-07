<?php
 namespace App\Http\Controllers\admin\main;
use App\Http\Controllers\Controller;
use App\Models\link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links= link::all();

          // Pass the services data to the view
          return view('backend.Admin.Accounts.link', compact('links'));
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
    link::newlink($request);
    return back()->with('success', 'Account link created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, link $link)
    {
        link::updatelink($request, $link);
        return back()->with('success', 'Account link update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(link $link)
    {
        link::deletelink($link);   
        return back()->with('success', 'Account link deleted successfully.');
    }
}
