@extends('Layouts.master')

@section('content')
<h1>Book cars</h1>

<div class="container">
	<h6>Pick-up location: </h6>
	<h6>Drop off location: </h6>
	<h6>Choose car: </h6>

		<div class="form-group">
			<select name="make" id="make" class="form-control input-sm dynamic" data-dependent="model">
			<option value="">Select car Make</option>
			@foreach($cars as $car)
				<option value="">{{ $car->Make }}</option>
			@endforeach
			</select>
		</div>

		<div class="form-group">
			<select name="model" id="model" class="form-control input-sm">
			<option value="">Select car Model</option>
			@foreach($cars as $car)
				<option value="">{{ $car->Model }}</option>
			@endforeach
			</select>
		</div>
		{{ csrf_field() }}

  <br/>
  <div class="col-md-2">
  <input type="text" name="From" id="From" class="form-control" placeholder="Pick up Date"/>
  </div>
  <div class="col-md-2">
  <input type="text" name="to" id="to" class="form-control" placeholder="To Date"/>
  </div>
  <div class="col-md-8">
  <input type="button" name="range" id="range" value="Range" class="btn btn-success"/>
  </div>

  
  
@endsection
<>

