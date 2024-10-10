<?php

namespace App\Http\Controllers;

use App\Models\division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = division::all();
        return view('division.index', compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('division.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'name_division' => 'required|string|max:255',
        ]);

        division::create([
            'id' => $request->id,
            'name_division' => $request->name_division,
        ]);
        return redirect()->route('division.index')->with('success', 'Division created successfully');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(division $division)
    {
        return view('division.show', compact('division'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(division $division)
    {
        return view('division.edit', compact('division'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, division $division)
    {
        $request->validate([
            'id' => 'required|integer',
            'name_division' => 'required|string|max:255',
        ]);

        $division->update([
            'id' => $request->id,
            'name_division' => $request->name_division,
        ]);
        return redirect()->route('division.index')->with('success', 'category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(division $division)
    {
        //
        $division->delete();
        return redirect()->route('division.index')->with('success', 'Division deleted successfully');
    }
}
