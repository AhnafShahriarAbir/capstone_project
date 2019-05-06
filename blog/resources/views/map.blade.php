@extends('Layouts.master')

@section('content')
<div id="floating-panel">
  <strong>Start:</strong>
  <select id = "start">
    <option value="1">Car 1</option>
  </select>
</div>
<div class="iframe-container">

	<div id="map">
		

	</div>
	
</div>

<div id="output">
  <div ></div>
</div>
      
@endsection

<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxihPH_zFG348uy1ReJWBUTuQa5Zyc9g&callback=initMap"> </script>
<script src="{{ asset('js/mapscript.js') }}" defer></script>
