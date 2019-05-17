

function geoLocation(infowindow){
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      marker = new google.maps.Marker({position: pos, map: map, animation: google.maps.Animation.DROP});
      infowindow.setContent('Location found.');
      marker.addListener('click', function () {
        infowindow.open(map,marker);
      })
      //marker.addListener('click', toggleBoune);

      map.setCenter(pos);
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
