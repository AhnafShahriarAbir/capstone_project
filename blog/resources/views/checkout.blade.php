@extends('layouts.master')


@section('content')
    <div class="row mt-5">
        <div class="col">
          <div class="clearfix">
              <h1 class="float-left">Checkout</h1>
              <h2 class="float-right text-success">AU$ Total</h2>
              <h2 class="float-right">Total Amount: &nbsp</h2>
            </div>
            <hr>
            @if($errors->any())
            <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'display-none' : ''  }}">
                {{ Session::get('error') }}
            </div>
            @endif
            

            <form action="{{ route('checkout') }}" method="post" id="checkout-form">

                <div class="form-row">
                  <h3 class="">User's Details:</h3>
                  <div class="w-100"></div>
                    <div class="form-group col-md-5">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your name" required>
                    </div>

                    <div class="form-group col-md-7">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" class="form-control" placeholder="Current address" required>
                    </div>
                    <div class="w-100 invisible"><hr></div>
                    <h3 class="">Payment Details:</h3>
                    <div class="w-100"></div>
                      <div class="form-group col-md-5">
                          <label for="card-name">Card Holder Name:</label>
                          <input type="text" id="card-name" class="form-control" placeholder="Name on card" required>
                      </div>

                      <div class="form-group col-md-6">
                          <label for="card-number">Card Number:</label>
                          <input type="text" id="card-number" class="form-control" placeholder="XXXX-XXXX-XXXX-XXXX 16-digits card number" required>
                      </div>

                      <div class="form-group col-md-1">
                          <label for="card-cvc">CVN:</label>
                          <input type="text" id="card-cvc" class="form-control" placeholder="XXX" required>
                      </div>
                      <div class="form-group col-md-2">
                          <label for="card-expiry-month">Exp. Month:</label>
                          <input type="text" id="card-expiry-month" class="form-control" placeholder="(MM) 2-digits" required>
                      </div>
                      <div class="form-group col-md-2 col-auto mr-auto">
                          <label for="card-expiry-year">Exp. Year:</label>
                          <input type="text" id="card-expiry-year" class="form-control" placeholder="(YYYY) 4-digits" required>
                      </div>
                      <div class="form-group align-self-end col-auto ml-auto">
                          <img src="{{ URL::to('/images/amex.png') }}" alt="..." class="card-img float-right pl-1 pr-1">
                          <img src="{{ URL::to('/images/master.png') }}" alt="..." class="card-img float-right pl-1 pr-1">
                          <img src="{{ URL::to('/images/visa.png') }}" alt="..." class="card-img float-right pl-1 pr-1">
                      </div>
                      <div class="w-100 mt-2"><hr></div>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-lg btn-block btn-success">Buy now</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>paypal.Buttons().render('body');</script>
@endsection