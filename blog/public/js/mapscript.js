var map, marker, infoWindow, new_infowindow, messagewindow;;
var lat_Lang;
var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var image = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=C|FF0000|000000';
var pos;
var locations = [
        {lat: -37.803828, lng: 144.992846},
        {lat: -37.8041,   lng: 144.961947},
        {lat: -37.787822, lng: 144.968813},
        {lat: -37.785651, lng: 144.929331},
        {lat: -37.769912, lng: 144.997309},
        {lat: -37.819289, lng: 144.999369},
        {lat: -37.806982, lng: 144.959071},
        {lat: -37.805625, lng: 144.972375},
        {lat: -37.807397, lng: 144.966721}
      ]

	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: -37.809389, lng: 144.9645},
		zoom: 13
		});

		

      createMarkers();
      geoLocationInit();
      
	}

  function geoLocationInit(){
    infoWindow = new google.maps.InfoWindow;
    if(navigator.geolocation){
      navigator.geolocation.getCurrentPosition(function(position){
        pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        console.log(pos);

        infoWindow.setPosition(pos);
        infoWindow.setContent('Location Found');
        map.setCenter(pos);
        //map.setZoom(17);
        // infoWindow.setMarker(new google.maps.Marker({position: pos, map:map}));
        infoWindow.open(map);
        calculateDistance(pos);
      })
    }
     else {
      alert("Browser does not support geolocation");
      infoWindow.open(map);
            map.setCenter(map.getCenter());
    }
  }


   function calculateDistance(pos) {
        var bounds = new google.maps.LatLngBounds;
        var markersArray = [];

        var origin = pos; //Current location
        var destinationA = {lat: -37.803828, lng: 144.992846};
        var destinationB = {lat: -37.8041,   lng: 144.961947};
        var destinationC = {lat: -37.787822, lng: 144.968813};
        var destinationD = {lat: -37.785651, lng: 144.929331};
        var destinationE = {lat: -37.769912, lng: 144.997309};
        var destinationF = {lat: -37.819289, lng: 144.999369};
        var destinationG = {lat: -37.806982, lng: 144.959071};
        var destinationH = {lat: -37.805625, lng: 144.972375};
        var destinationI = {lat: -37.807397, lng: 144.966721};

        var destinationIcon = image;
        var originIcon = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=O|00FF00|000000';

        var geocoder = new google.maps.Geocoder;

        var service = new google.maps.DistanceMatrixService;

        service.getDistanceMatrix({
          origins: [origin],
          destinations: [destinationA, destinationB, destinationC, destinationD,
           destinationE, destinationF, destinationG, destinationH, destinationI],
          travelMode: 'DRIVING',
          unitSystem: google.maps.UnitSystem.METRIC,
          avoidHighways: false,
          avoidTolls: false
        }, function(response, status) {
          if (status !== 'OK') {
            alert('Error was: ' + status);
          } else {
            var originList = response.originAddresses;
            var destinationList = response.destinationAddresses;
            var outputDiv = document.getElementById('output');
            outputDiv.innerHTML = '';
            deleteMarkers(markersArray);

            var showGeocodedAddressOnMap = function(asDestination) {
              var icon = asDestination ? destinationIcon : originIcon;
              return function(results, status) {
                if (status === 'OK') {
                  map.fitBounds(bounds.extend(results[0].geometry.location));
                  markersArray.push(new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    icon: icon
                  }));
                } else {
                  alert('Geocode was not successful due to: ' + status);
                }
              };
            };

            for (var i = 0; i < originList.length; i++) {
              var results = response.rows[i].elements;
              geocoder.geocode({'address': originList[i]},
                  showGeocodedAddressOnMap(false));
              for (var j = 0; j < results.length; j++) {
               
                  geocoder.geocode({'address': destinationList[j]},
                    showGeocodedAddressOnMap(true));

                outputDiv.innerHTML += originList[i] + '   To   ' + destinationList[j] +
                    ': ' + results[j].distance.text + '   in   ' +
                    results[j].duration.text + '<br>';
                }
                
                
              
            }
          }
        });
      }

      function deleteMarkers(markersArray) {
        for (var i = 0; i < markersArray.length; i++) {
          markersArray[i].setMap(null);
        }
        markersArray = [];
      }


	

	function createMarkers(){
  	var markers = locations.map(function(location, i) {
  		return new google.maps.Marker({
  			position: location,
              icon: image
  		});
	});
	var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

	}


	