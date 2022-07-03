<?php

namespace App\Http\Controllers;

use App\Models\FactSale;
use App\Http\Requests\StoreFactSaleRequest;
use App\Http\Requests\UpdateFactSaleRequest;

class FactSaleController extends Controller
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
     * @param  \App\Http\Requests\StoreFactSaleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFactSaleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FactSale  $factSale
     * @return \Illuminate\Http\Response
     */
    public function show(FactSale $factSale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FactSale  $factSale
     * @return \Illuminate\Http\Response
     */
    public function edit(FactSale $factSale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFactSaleRequest  $request
     * @param  \App\Models\FactSale  $factSale
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFactSaleRequest $request, FactSale $factSale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FactSale  $factSale
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactSale $factSale)
    {
        //
    }
}
