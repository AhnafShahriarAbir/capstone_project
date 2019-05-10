var map, marker, infoWindow
var locations = [
  [-37.809389,144.9645 ,"A "],
  [-37.809489,144.9745 ,"B "],
  [-37.809589,144.9545 ,"C "],
  [-37.809389,144.9645 ,"D "],
  [-37.809589,144.9545 ,"E "],
  [-37.809689, 144.9445 ,"F "],
  [-37.709389,144.9645 ,"G "],
  [-37.626389,144.9645 ,"H "],
  [-37.749389, 144.9645 ,"I "],
 
  // { lat:  },
  // { lat:  },
  // { lat: -37.909389, lng: 144.7452 },
  // { lat: -37.609389, lng: 144.9345 },
  // { lat: , lng:  },

]
var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';


function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -37.809389, lng: 144.9645},
    
    zoom: 13
    });
    
    infoWindow = new google.maps.InfoWindow;
    
    //geoLocation();
  
    for (var i = 0; i < locations.length; i++) {
      marker = newMarker(i);
      addInfo(marker, locations[i][2]);
      console.log(i);
    }

  // var carvalues = JSON.parse(document.getElementById('car').innerHTML);
  // marker = new google.maps.Marker({
  //   position: new google.maps.LatLng({ lat: carvalues[0][1], lng: carvalues[0][1] }),
  //   icon: 'http://maps.google.com/mapfiles/ms/micons/cabs.png',
  //   map: map,

  // });
  // console.log(carvalues[0][1]);
    
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

// function newMarker(){
//   var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//   //for (var i = 0; i < locations.length; i++) {
//     marker = new google.maps.Marker({
//       position: new google.maps.LatLng(locations[i]),
//       icon: 'http://maps.google.com/mapfiles/ms/micons/cabs.png',
//       map: map
//     });
//     console.log(labels[i]);
//     addInfo(marker, labels[i]);
//   //}
// }

function newMarker(i) {

  marker = new google.maps.Marker({
    position: new google.maps.LatLng({lat:locations[i][0], lng: locations[i][1]}),
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

function myFunction() {
  window.location='/login';
}

