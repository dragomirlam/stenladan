function initialize() {
	var myLatlng = new google.maps.LatLng(56.850609,14.827121);
	var mapOptions = {
		zoom: 16,
		center: myLatlng
	}

	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'STENladan'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);