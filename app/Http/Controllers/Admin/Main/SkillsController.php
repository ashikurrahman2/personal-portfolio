<?php
namespace App\Http\Controllers\admin\main;
use App\Http\Controllers\Controller;
use App\Models\skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills= skills::all();

        return view('backend.Admin.Skills.index', compact('skills'));
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
        skills::newskills($request);
        return back()->with('success', 'Skills info create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(skills $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(skills $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, skills $skill)
    {
        skills::updateskills($request, $skill);
        return back()->with('success', 'Skills info update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(skills $skill)
    {
        skills::deleteskills($skill);   
        return back()->with('success', 'Skills information deleted successfully.');
    }
}
