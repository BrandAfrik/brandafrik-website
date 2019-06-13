//Initialize Google Maps
function initMap() {
	var cos = {lat: 6.673177, lng: -1.567065};

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 20,
		center: cos
	});

	var marker = new google.maps.Marker({position: cos, map: map});
}