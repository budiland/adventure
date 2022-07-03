<?php

namespace App\Http\Controllers;

use App\Models\FactProduction;
use App\Http\Requests\StoreFactProductionRequest;
use App\Http\Requests\UpdateFactProductionRequest;

class FactProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFactProductionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFactProductionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FactProduction  $factProduction
     * @return \Illuminate\Http\Response
     */
    public function show(FactProduction $factProduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FactProduction  $factProduction
     * @return \Illuminate\Http\Response
     */
    public function edit(FactProduction $factProduction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFactProductionRequest  $request
     * @param  \App\Models\FactProduction  $factProduction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFactProductionRequest $request, FactProduction $factProduction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FactProduction  $factProduction
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactProduction $factProduction)
    {
        //
    }
}
