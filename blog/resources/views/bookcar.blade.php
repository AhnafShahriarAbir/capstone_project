@extends('Layouts.master')



@section('content')
<h1>Book cars</h1>


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

	<h6>Pick-UP date:</h6>
		
	<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form method="post">
     <div class="form-group ">
      <label class="control-label " for="date">
       Date
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-calendar">
        </i>
       </div>
       <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="date1">
       Date
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-calendar">
        </i>
       </div>
       <input class="form-control" id="date1" name="date1" placeholder="MM/DD/YYYY" type="text"/>
      </div>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-success " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>

	<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]');
var date_input1=$('input[name="date1"]');
 //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
@endsection