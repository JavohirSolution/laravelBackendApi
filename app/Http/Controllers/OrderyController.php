<?php

namespace App\Http\Controllers;

use App\Models\Ordery;

use App\Http\Requests\StoreOrderyRequest;
use App\Http\Requests\UpdateOrderyRequest;
use App\Models\Product;
use App\Models\User;
use App\Models\UserAddress;
use Faker\Provider\UserAgent;
use Illuminate\Http\RedirectResponse;

class OrderyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return auth()->user()->orders()->get();
    }

    public function store(StoreOrderyRequest $request):RedirectResponse
    {
        // $sum = 0;
        // $products = Product::query()->limit(2)->get();
        // $address = UserAddress::find($request->address_id);

        // dd($address);

        // auth()->user()->orders()->create([
        //     'comment' => $request->comment,
        //      "delivery_method_id" => $request->delivery_method_id,
        //      "payment_type_id" => $request->payment_type_id,
        //      "sum" => $sum,
        //      "address_id" => $address,
        //      "products"=> $products,
        // ]);
        // return "success";

        dd($users);
    }

    public function show(Ordery $ordery)
    {
        return $ordery;
    }


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
