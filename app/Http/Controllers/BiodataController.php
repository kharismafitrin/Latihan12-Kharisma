<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodata = Biodata::all();
        return view("biodata.index")->with("biodata", $biodata);
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
        // dd($request->all());
        Biodata::create($request->all());
        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $manusia = Biodata::find($id);
    //     $biodata = Biodata::all();
    //     dd($manusia, $biodata);
    //     return view("biodata.index")->with("manusia", $manusia)->with("biodata", $biodata);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manusia = Biodata::find($id);
        $biodata = Biodata::all();
        // dd($manusia, $biodata);
        return view("biodata.index")->with("manusia", $manusia)->with("biodata", $biodata);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Biodata::find($id)->update($request->all());
        return redirect()->route('biodata.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Biodata::find($id)->delete();
        return redirect()->route('biodata.index');
    }
}
