<?php

namespace App\Http\Controllers;

use App\Models\Ordery;
use App\Http\Requests\StoreOrderyRequest;
use App\Http\Requests\UpdateOrderyRequest;

class OrderyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreOrderyRequest $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ordery $ordery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ordery $ordery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderyRequest $request, Ordery $ordery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ordery $ordery)
    {
        //
    }
}
