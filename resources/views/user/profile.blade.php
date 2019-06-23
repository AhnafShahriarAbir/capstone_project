@extends('layouts.master')

@section('title')
  Car Share
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col">
          <div>
            <h1>Booked cars History</h1>
            <hr>
          </div>
            <div class="mt-4">
            @foreach($booked_cars as $booked_car)
                <div class="panel mt-3">
                    <div class="panel-body">
                        <ul class="list-group clearfix">
                            <li class="list-group-item bg-light">
                                
                                <span class="">Booked car: {{ $booked_car->Make }}  
                                                           {{ $booked_car->Model }} 
                                                           {{ $booked_car->Year }}
                                      
                                </span><br>
                                <span class="">
                                    Start Time was:   {{ $start_time }}  
                                </span>
                                <span class="badge badge-danger float-right">Price: ${{ $booked_car->Price }}</span>
                                
                            </li>
                        </ul>
                    </div>
                    
                    <button>Calculate total price</button>
                    <div class="panel-footer clearfix">
                       
                        <strong class="float-right mt-1">Total Price: </strong>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
        <button>Return car</button>
    </div>
@endsection
