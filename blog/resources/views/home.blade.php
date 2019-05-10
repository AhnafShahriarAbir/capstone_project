@extends('layouts.master')

@section('content')
<div class="container">
    <div class="car justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group">
                    @foreach($cars as $car)
                    
                        <li class="list-group-item active">{{ $car->Make }}</li>
                        <li class="list-group-item">{{ $car->Model }}</li>
                        <li class="list-group-item">{{ $car->Description }}</li>
                        <li class="list-group-item">{{ $car->Price }}</li>
                        <li class="list-group-item">{{ $car->Latitude }}</li>
                        <li class="list-group-item">{{ $car->Longitude }}</li>
                        </br>
                        
                        <?php
                             $make = $car->Make;
                             $lat =  $car->Latitude;
                             $lng =  $car->Longitude;
                            
                             $carvalues = [$make, $lat, $lng];
                            // echo 'price="' . $car->Price . '" ';
                            $json = json_encode($carvalues);
                            echo "<div id='car'  >" . $json . "</div";
                             # style='display: none;'
                        ?>
                       
                    @endforeach
                    </ul>
                    
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

