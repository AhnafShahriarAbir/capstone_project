@extends('Layouts.master')

@section('content')

<div class="iframe-container">

	<div id="map">
		

	</div>
	
</div>
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

@section('script')

  <script src="{{ asset('js/mapscript.js') }}" defer></script>
  <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfVh4DjXDehml8bNOj0d6ph58uOLQumpA&callback=initMap"> </script>
    @foreach($cars as $car)
        <script type="text/javascript">
          
        var lat = "{{ $car->Latitude }}"
        var lng = "{{ $car->Longitude }}"
        var content = "{{ $car->Make }}"
        var map, marker, infoWindow

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -37.809389, lng: 144.9645},
            
            zoom: 13
            });
            
            infoWindow = new google.maps.InfoWindow;
            
            //geoLocation();
            marker = addMarker();
            addInfo(marker, content)
          }

          function addMarker() {
              marker = new google.maps.Marker({
              position: new google.maps.LatLng({lat: parseFloat(lat), lng: parseFloat(lng)}),
              icon: 'http://maps.google.com/mapfiles/ms/micons/cabs.png',
              map: map,

              });
            return marker;
          }
          
          function addInfo(marker, content){
            infowindow = new google.maps.InfoWindow({
              content: '<p> Title '+
              content +
              '</p> ' +
              '<button onclick="myFunction();">Book</button>'
            });
            marker.addListener('click', function() {
              infowindow.open(map, marker);
            });
          }

          //addInfo(marker, "{{ $car->Make }}")
        </script>

	 @endforeach

@endsection

