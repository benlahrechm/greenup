function initialize() {
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  var marker=new google.maps.Marker({position: mapOptions['center'],
    animation: google.maps.Animation.BOUNCE
  });

  marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);