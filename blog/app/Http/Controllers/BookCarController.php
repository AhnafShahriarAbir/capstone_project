<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Stripe\Stripe;
use Stripe\Charge;
use App\Http\Controllers\Controller;
use App\Car;

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
    $cars = Car::all();
    
    \Stripe\Stripe::setApiKey('sk_test_4oRK0ymvlZsGau97drQf15E200b49MRDaS');

    try {
      $charge = Charge::create(array(
        "amount" => $cars->Price*100,
        "currency" => "aud",
        "source" => $request->input('stripeToken'),
        "description" => "Charge for test"
        ));

    } catch(\Exception $e) {
      return redirect()->route('checkout')->with('error' , $e->getMessage());
    }

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
