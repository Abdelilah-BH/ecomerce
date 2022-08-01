<?php

namespace App\Http\Controllers;

use App\Models\product_cart;
use App\Http\Requests\Storeproduct_cartRequest;
use App\Http\Requests\Updateproduct_cartRequest;

class ProductCartController extends Controller
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
     * @param  \App\Http\Requests\Storeproduct_cartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeproduct_cartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_cart  $product_cart
     * @return \Illuminate\Http\Response
     */
    public function show(product_cart $product_cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_cart  $product_cart
     * @return \Illuminate\Http\Response
     */
    public function edit(product_cart $product_cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateproduct_cartRequest  $request
     * @param  \App\Models\product_cart  $product_cart
     * @return \Illuminate\Http\Response
     */
    public function update(Updateproduct_cartRequest $request, product_cart $product_cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_cart  $product_cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_cart $product_cart)
    {
        //
    }
}
