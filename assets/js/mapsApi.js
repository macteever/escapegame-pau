function initMap() {

				  // Specify features and elements to define styles.
				  var styleArray = [
            {
                "featureType": "all",
                "stylers": [
                    {
                        "saturation": 0
                    },
                    {
                        "hue": "#e7ecf0"
                    }
                ]
            },
            {
                "featureType": "road",
                "stylers": [
                    {
                        "saturation": -70
                    }
                ]
            },
            {
                "featureType": "transit",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "stylers": [
                    {
                        "visibility": "simplified"
                    },
                    {
                        "saturation": -60
                    }
                ]
            }
        ];

				  // Create a map object and specify the DOM element for display.
				  var map = new google.maps.Map(document.getElementById('map'), {
				    center: {lat: 44.8416139, lng: -0.5797607},
				    scrollwheel: false,
				    // Apply the map style array to the map.
				    styles: styleArray,
				    zoom: 15
				  });

				  var myLatLng = {lat: 44.8416139, lng: -0.5797607};

				  var marker = new google.maps.Marker({
				    map: map,
				    position: myLatLng,
						 icon :'../wp-content/themes/escapegame-pau/assets/img/mapmarker.png'
				  });


				  var secretMessage = 'No place like home';


				  var infowindow = new google.maps.InfoWindow({
				      content: secretMessage
				    });

				    marker.addListener('click', function() {
				      infowindow.open(marker.get('map'), marker);
				      map.setZoom(16);
				      map.setCenter(marker.getPosition());
				    });

}
