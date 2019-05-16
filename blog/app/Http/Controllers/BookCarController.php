<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Stripe\Stripe;
use Stripe\Charge;
use App\Http\Controllers\Controller;

class BookCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getCheckout(){
        // if(!Session::has('cart')) {
        // return view('shop.shopping-cart', ['products' => null]);
        // }
        // $oldCart = Session::get('cart');
        // $cart = new Cart($oldCart);
        // $total = $cart->totalPrice;
        return view('checkout');
    }
    public function postCheckout(Request $request)
  {
   
    // Set your secret key: remember to change this to your live secret key in production
    // See your keys here: https://dashboard.stripe.com/account/apikeys
    \Stripe\Stripe::setApiKey('sk_test_4oRK0ymvlZsGau97drQf15E200b49MRDaS');

    // Token is created using Checkout or Elements!
    // Get the payment token ID submitted by the form:

            // Create a Customer:
    $customer = \Stripe\Customer::create([
        'source' => 'tok_mastercard',
        'email' => 'paying.user@example.com',
    ]);

    // Charge the Customer instead of the card:
    $charge = \Stripe\Charge::create([
        'amount' => 1000,
        'currency' => 'usd',
        'customer' => 1,
    ]);

    // YOUR CODE: Save the customer ID and other info in a database for later.

    // When it's time to charge the customer again, retrieve the customer ID.
    $charge = \Stripe\Charge::create([
        'amount' => 1500, // $15.00 this time
        'currency' => 'usd',
        'customer' => 1, // Previously stored, then retrieved
    ]);

    $token = $_POST['stripeToken'];
    $charge = \Stripe\Charge::create([
        'amount' => 999,
        'currency' => 'aud',
        'description' => 'Example charge',
        'source' => $token,
    ]);
    //Session::forget('cart');
    return redirect()->route('home')->with('success','Successfully purchased. Thanks!');
  }
    public function index()
    {
        
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
