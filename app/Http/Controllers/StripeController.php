<?php

namespace App\Http\Controllers;

use App\Models\Stripe;
use Illuminate\Http\Request;

class StripeController extends Controller
{

    /**
     * Handle a checkout request.
     */
    public function checkout(Request $request){

        $stripePriceId = 'price_1Ps6Vb2KNPChNgPgIXb9Hgsw';

        $quantity = 1;


        return $request->user()->checkout([$stripePriceId => $quantity], [
            'success_url' => route('checkout-success'),
            'cancel_url' => route('checkout-failure'),
        ]);
    }


    /**
     * Handle a checkout request.
     */
    public function webhook(Request $request)
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Stripe $stripe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stripe $stripe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stripe $stripe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stripe $stripe)
    {
        //
    }
}
