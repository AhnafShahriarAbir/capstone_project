@extends('layouts.app')

@section('title')
  3Bay.io
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col">
          <div>
            <h1>Order History</h1>
            <hr>
          </div>
            <div class="mt-4">
            @foreach($orders as $order)
                <div class="panel mt-3">
                    <div class="panel-body">
                        <ul class="list-group clearfix">
                            @foreach($order->cart->items as $item)
                            <li class="list-group-item bg-light">
                                <span class="">{{ $item['item']['title'] }} </span>
                                <span class="badge badge-danger float-right"> ${{ $item['price'] }}</span>
                                <span class="float-right font-weight-bold">{{ $item['qty'] }} Units |&nbsp</span>
                                  @endforeach
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer clearfix">
                        <h5><strong class="float-right text-success mt-1">&nbsp AU$ {{ $order->cart->totalPrice }}</strong></h5>
                        <strong class="float-right mt-1">Total Price: </strong>
                    </div>
                    @endforeach
                </div>

          </div>
        </div>
    </div>
@endsection
