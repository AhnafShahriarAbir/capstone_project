@extends('layouts.master')

@section('title')
    Car Share
@endsection

@section('content')
  @if(Session::has('success'))
  <div class="row">
    <div class="col-md-12">
      <div id="charge-message" class="alert alert-success text-center">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif
  @foreach($cars->chunk(3) as $carChunk)
    <div class="row">
      @foreach($carChunk as $car)
        <div class="col-md-4">
          <div class="card mb-4 ">
            <div class="thumbnail">
              <img class="card-img-top" src="{{ $car->imagePath }}" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $car->Make }} {{ $car->Model }}</h5>
              
              <div class="float-right Price">AU ${{ $car->Price }}</div>
              <!--<p class="card-text description">{{ $car->description }}</p>-->
              <div class="clearfix">
                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#carModal-{{ $car->id }}">View</button>
                <a href="['id' => $car->id]) }}" class="btn btn-success ml-1 float-right">Book</a>
                
              </div>
            </div>
          </div>
        </div>


        <div class="modal fade" tabindex="-1" id="carModal-{{ $car->id }}" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">{{ $car->Make }} {{ $car->Model }}</h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="thumbnail ">
                  <img class="rounded float-left " src="{{ $car->imagePath }}" alt="...">
                  <div>
                    <h4 class="text-center">Description:</h4>
                    <hr>
                    <p class="text-center description">{{ $car->Description }}</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="['id' => $car->id]) }}" class="btn btn-success ml-1 float-right">Book</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach

@endsection
