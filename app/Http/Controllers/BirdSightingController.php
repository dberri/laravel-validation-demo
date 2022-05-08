<?php

namespace App\Http\Controllers;

use App\Models\BirdSighting;
use Illuminate\Http\Request;

class BirdSightingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sightings = BirdSighting::paginate();
        return response()->json($sightings, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $sighting = BirdSighting::create($request->all());
        return response()->json($sighting, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BirdSighting  $sighting
     * @return \Illuminate\Http\Response
     */
    public function show(BirdSighting $sighting)
    {
        return response()->json($sighting, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BirdSighting  $sighting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BirdSighting $sighting)
    {
        $sighting->update($request->all());
        return response()->json($sighting, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BirdSighting  $sighting
     * @return \Illuminate\Http\Response
     */
    public function destroy(BirdSighting $sighting)
    {
        $sighting->delete();
        return response()->json(null, 204);
    }
}
