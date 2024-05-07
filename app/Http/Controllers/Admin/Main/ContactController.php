<?php
namespace App\Http\Controllers\admin\main;
use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts= contact::all();

        return view('backend.Admin.contact.index', compact('contacts'));
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
        contact::newcontacts($request);
        return back()->with('success', 'contact info create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contacts)
    {
        contact::updatecontacts($request, $contacts);
        return back()->with('success', 'contact info update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        contact::deletecontacts($contact);   
        return back()->with('success', 'contact information deleted successfully.');
    }
}
