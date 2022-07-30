<?php

namespace App\Http\Controllers;

use App\Models\Deliveries;
use App\Http\Requests\StoreDeliveriesRequest;
use App\Http\Requests\UpdateDeliveriesRequest;

class DeliveriesController extends Controller
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
     * @param  \App\Http\Requests\StoreDeliveriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeliveriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deliveries  $deliveries
     * @return \Illuminate\Http\Response
     */
    public function show(Deliveries $deliveries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deliveries  $deliveries
     * @return \Illuminate\Http\Response
     */
    public function edit(Deliveries $deliveries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeliveriesRequest  $request
     * @param  \App\Models\Deliveries  $deliveries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeliveriesRequest $request, Deliveries $deliveries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deliveries  $deliveries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deliveries $deliveries)
    {
        //
    }
}
