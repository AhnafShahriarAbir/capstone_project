@extends('Layouts.master')

@section('content')

    <b>Mode of Travel: </b>
    <select id="mode">
      <option value="DRIVING">Driving</option>
      <option value="WALKING">Walking</option>
      <option value="BICYCLING">Bicycling</option>
      <option value="TRANSIT">Transit</option>
    </select>

<div class="iframe-container" >

	<div id="map">
		

	</div>
	
</div>
@foreach($cars->chunk(2) as $carChunk)
    <div class="row">
      @foreach($carChunk as $car)
        <div class="col-md-4">
          <div class="card mb-4 ">
            <div class="thumbnail">
              <img class="card-img-top" src="{{ $car->image }}" alt="...">
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
                  <img class="rounded float-left " src="{{ $car->image }}" alt="...">
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

@section('script')

  <script src="{{ asset('js/mapscript.js') }}" defer></script>
  <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
  
  <script type="text/javascript">
  var map, marker, marker1, marker2;
  var geoMarker2;
  lastWindow=null;
  var loc;
  var pos;
  var lat_lng;
  var markers = [];
var directionsDisplay,directionsService;

  function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -37.809389, lng: 144.9645},
          zoom: 13
          });
           var infowindow = new google.maps.InfoWindow();
            var car_id = 1;
            
            var MarkerContent  = '<div id="content">'+
                  '<div id="siteNotice">'+
                  '</div>'+
                  '<h1 id="firstHeading" class="firstHeading">'+car_id+'</h1>' +
                  '<div id="bodyContent">'+
                  '<h3><b> Price</b> : $ 50 <h3>' +
                  `<button onclick="myFunction('` + car_id + `')">Book</button>` +
                  '<button onclick="getDirection()">Get Direction</button>'+
                  '</div>';

           marker1 = addMarker("-37.809389","144.9645",map);
           var content = "Car: A" 
          addContent(map, marker1, MarkerContent, infowindow);

           marker2 = addMarker("-37.806389","144.9865",map);
           var content2 = "Car: B" 
          
          addContent(map, marker2, MarkerContent, infowindow);

          directionsDisplay = new google.maps.DirectionsRenderer;
          directionsService = new google.maps.DirectionsService;
          
          directionsDisplay.setMap(map);
          //geoLocation(infowindow);

          // @foreach($cars as $car)
          //     var lat = "{{ $car->Latitude }}";
          //     var lng = "{{ $car->Longitude }}";
          //     var make = "{{ $car->Make }}"
          //     var model = "{{ $car->Model }}"
          //     var year = "{{ $car->Year }}"
          //     var price = "{{ $car->Price }}"

          //     var MarkerContent  = '<div id="content">'+
          //         '<div id="siteNotice">'+
          //         '</div>'+
          //         '<h1 id="firstHeading" class="firstHeading">'+make +' '+ model +' '+ year+'</h1>' +
          //         '<div id="bodyContent">'+
          //         '<h3><b> Price</b> : $'+ price +'<h3>' +
          //         `<button onclick="myFunction('` +  make + model + year +`','` + price +  `')">Book</button>` +
          //         '<button onclick="getDirection()">Get Direction</button>'+
          //         '</div>';

          //     var infowindow = new google.maps.InfoWindow();

              
          //     marker = addMarker(lat,lng,map);
          //     markers.push(marker);
          //     var content = "Car: " + MarkerContent 
          //     addContent(map, marker, content, infowindow);
          //    geoLocation(infowindow);
            
          //   @endforeach
          
          }
      //   function hideAllInfoWindows(map) {
      //     markers.forEach(function(marker) {
      //     marker.infowindow.close(map, marker);
      //   });
      // }
      </script>


	

@endsection

