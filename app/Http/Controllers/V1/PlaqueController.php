<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Plaque;
use Illuminate\Http\Request;

class PlaqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: Validate the request.
    }

    /**
     * Display the specified resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Plaque $plaque
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Plaque $plaque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Plaque $plaque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plaque $plaque)
    {
        // TODO: Validate the request.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Plaque $plaque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Plaque $plaque)
    {
        //
    }
}
