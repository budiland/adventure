<?php

namespace App\Http\Controllers;

use App\Models\ShipMethod;
use App\Http\Requests\StoreShipMethodRequest;
use App\Http\Requests\UpdateShipMethodRequest;

class ShipMethodController extends Controller
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
     * @param  \App\Http\Requests\StoreShipMethodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShipMethodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShipMethod  $shipMethod
     * @return \Illuminate\Http\Response
     */
    public function show(ShipMethod $shipMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShipMethod  $shipMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(ShipMethod $shipMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShipMethodRequest  $request
     * @param  \App\Models\ShipMethod  $shipMethod
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShipMethodRequest $request, ShipMethod $shipMethod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShipMethod  $shipMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShipMethod $shipMethod)
    {
        //
    }
}
