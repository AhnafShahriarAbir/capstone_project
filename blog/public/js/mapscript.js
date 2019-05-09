var map, marker, infoWindow
var locations = [
  { lat: -37.809389, lng: 144.9645 },
  { lat: -37.809489, lng: 144.9745 },
  { lat: -37.809589, lng: 144.9545 },
  { lat: -37.809689, lng: 144.9445 },
  { lat: -37.909389, lng: 144.7452 },
  { lat: -37.609389, lng: 144.9345 },
  { lat: -37.709389, lng: 144.9645 },
  { lat: -37.626389, lng: 144.9645 },
  { lat: -37.749389, lng: 144.9645 },
  
]


function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -37.809389, lng: 144.9645},
    
    zoom: 13
    });
    
    infoWindow = new google.maps.InfoWindow;
    
    //geoLocation();
    create_marker();
  }



function geoLocation(){
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      marker = new google.maps.Marker({position: pos, map: map, animation: google.maps.Animation.DROP});
      infoWindow.setContent('Location found.');
      marker.addListener('click', function () {
        infoWindow.open(map,marker);
      })
      marker.addListener('click', toggleBoune);

      map.setCenter(pos);
    }, function () {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
    'Error: The Geolocation service failed.' :
    'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);
}


function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}


function create_marker() {
  var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  for (var i = 0; i < labels.length; ++i) {
    var marker = locations.map(function (location, i){
      return marker = new google.maps.Marker({
      position: location,
      label: labels[i % labels.length],
      icon: 'http://maps.google.com/mapfiles/ms/micons/cabs.png'
      });
    
    });
    google.maps.event.addListener(marker, 'click', (function (marker, i) {
      return function () {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
    var markerCluster = new MarkerClusterer(map, marker, { imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m' });
  }
}

