$(document).ready(function(){
	var HOTWIRE_API_KEY = 'nh66uu2cm4au5ytg4cecf2q4';
	var GOOGLE_MAPS_API_KEY = 'AIzaSyDxCFGOkAibs__awsnk_EycGB7FieUISOA';
	$('#search-form').submit(function(e) {
		e.preventDefault();
		
		$.ajax({
			url: 'http://api.hotwire.com/v1/deal/hotel?apikey=' + HOTWIRE_API_KEY + '&limit=10&dest=' + encodeURIComponent($('#dest').val()) + '&distance=*~25&sort=price&sortorder=' + sortOrder + '&starrating=' + starRating + '&format=jsonp', 
			dataType: 'jsonp', 
			success: function(data) {
				var mainDiv = document.getElementById('main-div');
				var mainStr = '';
				for(var i = 0; i < data.Result.length; i++) {
					var result = data.Result[i];
					mainStr += '<a href="javascript:getCoordinates(' + result.NeighborhoodLatitude + ',' + result.NeighborhoodLongitude + ')">';
					mainStr += '<div class="uk-card uk-card-default">';
					mainStr += '<div class="uk-card uk-card-body">';
					mainStr += '<h3 class="uk-card-title headline">' + result.Headline + '</h3>';
					mainStr += '<p>$' + Math.round(result.Price) + '</p>';
					mainStr += '</div>';
					mainStr += '</div>';
					mainStr += '</a>';
				}

				mainDiv.innerHTML = mainStr;
			}
		});
	});
	var url = window.location.href;
	var tail = url.split('?')[1];
	if(tail) {
		var mySearch = tail.split('=')[1];
		$('#dest').val(mySearch);
		$('#search-form').submit();
	}
	$('#price-select').change(setSortOrder);
	$('#star-select').change(setStarRating);
});
var sortOrder = 'asc';
var starRating = '3~*';

function setSortOrder() {
	var idx = $('#price-select')[0].selectedIndex;
	sortOrder = $('#price-select')[0].options[idx].value;
	$('#search-form').submit();
}

function setStarRating() {
	var idx = $('#star-select')[0].selectedIndex;
	starRating = $('#star-select')[0].options[idx].value;
	$('#search-form').submit();
}

var map;
var marker;
var circle;
function getCoordinates(lat, lng) {
	var latlng = new google.maps.LatLng(lat, lng);
	if(marker)
	marker.setMap(null)

	marker = new google.maps.Marker({
		position: latlng,
		map: map
	});
	
	if(circle)
	circle.setMap(null);
	
	circle = new google.maps.Circle({
		map: map,
		radius: 1609,
		fillColor: '#FF6B35',
		strokeWeight: 0
	});
	
	circle.bindTo('center', marker, 'position');
	map.panTo(latlng);
	map.setZoom(15);
	
	infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch({
        location: latlng,
        radius: 1609,
        type: ['amusement_park', 'museum', 'restaurant', 'art_gallery', 'park', 'stadium', 'night_club' ]
    },	callback);

    function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
			for (var i = 0; i < results.length; i++) {
				createMarker(results[i]);
			}
		}
    }

	function isInArray(a, b) {
		return !!~a.indexOf(b)
	}
		
    function createMarker(place) {
		var placeLoc = place.geometry.location;
		var placeIcon = 'https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png';
		if(isInArray(place.types, 'restaurant')){
			placeIcon = 'https://cdn4.iconfinder.com/data/icons/food-3-7/65/136-512.png';
		} else if(isInArray(place.types, 'amusement_park')) {
			placeIcon = 'http://www.myiconfinder.com/uploads/iconsets/a5485b563efc4511e0cd8bd04ad0fe9e.png';
		} else if(isInArray(place.types, 'museum')) {
			placeIcon = './img/marker-icons/museum.png';
		} else if(isInArray(place.types, 'art_gallery')) {
			placeIcon = './img/marker-icons/performing_arts.png';
		} else if(isInArray(place.types, 'park')) {
			placeIcon = './img/marker-icons/parks_and_rec.png';
		} else if(isInArray(place.types, 'stadium')) {
			placeIcon = './img/marker-icons/sporting_events.png';
		} else if(isInArray(place.types, 'night_club')) {
			placeIcon = './img/marker-icons/nightlife.png';
		}
        var marker = new google.maps.Marker({
			map: map,
			position: place.geometry.location,
			icon: placeIcon
        });

        google.maps.event.addListener(marker, 'click', function() {
			infowindow.setContent(place.name);
			infowindow.open(map, this);
        });
    }
	
	var iconBase = './img/marker-icons/';
	var icons = {
		amusement_park: {
			icon: iconBase + 'theme_park_icon.png'
		},
		museum: {
			icon: iconBase + 'museum.png'
		},
		restaurant: {
			icon: iconBase + 'food_and_drink.png'
		},
		//liveMusic: {
			//icon: iconBase + 'live_music.png'
		//},
		art_gallery: {
			icon: iconBase + 'performing_arts.png'
		},
		park: {
			icon: iconBase + 'parks_and_rec.png'
		},
		stadium: {
			icon: iconBase + 'sporting_events.png'
		},
		night_club: {
			icon: iconBase + 'nightlife.png'
		}
	};

	/* function addMarker(feature) {
		var marker = new google.maps.Marker({
			position: feature.position,
			icon: icons[feature.type].icon,
			map: map
		});
	} */
}

var mapDiv = document.getElementById('map-div');
//var LatLng = {lat: result.NeighborhoodLatitude, lng: result.NeighborhoodLongitude};
function initMap() {
	map = new google.maps.Map(mapDiv, {
		center: new google.maps.LatLng(37.09024, -95.712891),
		zoom: 4
	});
/* 		var marker = new google.maps.Marker({
			position: LatLng,
			map: map
		}); */
}