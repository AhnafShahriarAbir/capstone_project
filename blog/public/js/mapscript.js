var pos;
var loc2 = [];
var geoMarker;
var latitude, longitude;

function geoLocation(infowindow, marker1){
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
      pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      
      geoMarker = new google.maps.Marker({position: pos, map: map, animation: google.maps.Animation.DROP});
      // infowindow.setContent('Location found.');
      // geoMarker.addListener('click', function () {
      //   latitude = geoMarker.position.lat();
      //   longitude = geoMarker.position.lng();
      //   infowindow.open(map, geoMarker);
      // });
      //marker.addListener('click', toggleBoune);

      map.setCenter(pos);
      calculateAndDisplayRoute(directionsService, directionsDisplay, geoMarker, marker1 );
          document.getElementById('mode').addEventListener('change', function () {
            calculateAndDisplayRoute(directionsService, directionsDisplay, geoMarker, marker1);
      });

    }, function () {
      handleLocationError(true, infowindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infowindow, map.getCenter());
  }
  
}

function handleLocationError(browserHasGeolocation, infowindow, pos) {
  infowindow.setPosition(pos);
  infowindow.setContent(browserHasGeolocation ?
    'Error: The Geolocation service failed.' :
    'Error: Your browser doesn\'t support geolocation.');
  infowindow.open(map);
}


function addMarker(lat, lng, map) {
  marker = new google.maps.Marker({
    position: new google.maps.LatLng({ lat: parseFloat(lat), lng: parseFloat(lng) }),
    icon: 'http://maps.google.com/mapfiles/ms/micons/cabs.png',
    map: map,
  });
  return marker;
}

function addContent(map, marker, content, infowindow) {
  google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
    return function () {
      if (lastWindow) lastWindow.close();
      infowindow.setContent(content);
      infowindow.open(map, marker);
      lastWindow = infowindow;
      geoLocation(infowindow, marker)
    };
  })(marker, content, infowindow));
}

function myFunction() {
  window.location='/login';
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

function calculateAndDisplayRoute(directionsService, directionsDisplay, marker1, marker2) {

  var selectedMode = document.getElementById('mode').value;
  directionsService.route({
    origin: marker1.getPosition(),  // Haight.
    destination: marker2.getPosition(),  // Ocean Beach.
    // Note that Javascript allows us to access the constant
    // using square brackets and a string value as its
    // "property."
    travelMode: google.maps.TravelMode[selectedMode]
  }, function (response, status) {
    if (status == 'OK') {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });

}