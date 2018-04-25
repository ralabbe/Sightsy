$(document).ready(function(){

	// Submit home page search with icon
	$("#search_btn").on("click",function(x) {
		x.preventDefault();
		$("#home-search").submit();

	});

	// Initialize fullpage
	$('#fullpage').fullpage({
		scrollOverflow: true,
	});
	
	var HOTWIRE_API_KEY = 'nh66uu2cm4au5ytg4cecf2q4';
	var GOOGLE_MAPS_API_KEY = 'AIzaSyDxCFGOkAibs__awsnk_EycGB7FieUISOA';
	var hotelImg = ["room01.jpg", "room02.jpg", "room03.jpg", "room04.jpg", "room05.jpg","room06.jpg", "room07.jpg", "room08.jpg", "room09.jpg", "room10.jpg", "room11.jpg","room12.jpg", "room13.jpg", "room14.jpg","room15.jpg", "room16.jpg", "room17.jpg"];
	
	// Search form submit
	$('#search-form').submit(function(e) {
		e.preventDefault();
		
		$.ajax({
			url: 'http://api.hotwire.com/v1/deal/hotel?apikey=' + HOTWIRE_API_KEY + '&limit=18&dest=' + encodeURIComponent($('#dest').val()) + '&distance=*~25&sort=price&sortorder=' + sortOrder + '&starrating=' + starRating + '&format=jsonp', 
			dataType: 'jsonp', 
			success: function(data) {
				var mainDiv = $("#main-div");
				mainDiv.html('');
				var mainStr = '';
				for(var i = 0; i < data.Result.length; i++) {

					var randPic = hotelImg[Math.floor(Math.random()*hotelImg.length)];
					var result = data.Result[i];
					mainStr += '<li>'; // Create list item
					mainStr += '<img src="">'; // Append img
					mainStr += '<div class="uk-card uk-card-small uk-margin">'; // Create card div
					mainStr += '<a href="javascript:getCoordinates(' + result.NeighborhoodLatitude + ',' + result.NeighborhoodLongitude + ')">'; // Create map coordinates link
					mainStr += '<div class="uk-card-media-top">'; // Card image div
					mainStr += '<img src="img/rooms/' + randPic + '" alt="Hotel">'; // Card image
					mainStr += '</div>'; // End image div
					mainStr += '<div class="uk-card-body">'; // Hotel name div
					mainStr += '<h3 class="uk-card-title">' + result.Headline + '</h3>'; // Hotel info
					mainStr += '</div>'; // End hotel name div
					mainStr += '</a>'; // End map coordinates link
					mainStr += '<div class="uk-card-footer">'; // Footer div
					mainStr += '<a href="' + result.Url + '" class="uk-button uk-button-default" target="_blank">Book Hotel</a>'; // Explore link
					mainStr += '</div></div>';// End footer div and card div
					mainStr += '</li>'; // End list item
				}

				mainDiv.append(mainStr);
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
	var placeIcon = './img/marker.png';
	
	var latlng = new google.maps.LatLng(lat, lng);
	if(marker)
	marker.setMap(null)

	marker = new google.maps.Marker({
		position: latlng,
		map: map,
		icon: placeIcon
	});
	
	if(circle)
	circle.setMap(null);
	
	circle = new google.maps.Circle({
		map: map,
		radius: 3000,
		fillColor: '#FF6B35',
		strokeWeight: 0
	});
	
	circle.bindTo('center', marker, 'position');
	map.panTo(latlng);
	map.setZoom(14);
	
	infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch({
        location: latlng,
        radius: 3000,
        type: ['restaurant']
    },	callback);

    function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
        	var avoid = ["accounting","airport","atm","bicycle_store","bus_station","car_dealer","car_rental","car_repair","car_wash","cemetery","church","city_hall","convenience_store","courthouse","dentist","doctor","electrician","embassy","electronics_store","fire_station","funeral_home","gas_station","gym","hair_care","hardware_store","hindu_temple","hospital","insurance_agency","laundry","lawyer","local_government_office","locksmith","lodging","mosque","moving_company","painter","parking","pharmacy","physiotherapist","plumber","police","post_office","pet_store","real_estate_agency","roofing_contractor","rv_park","school","storage","subway_station","synagogue","taxi_stand","train_station","transit_station","travel_agency","veterinary_care"];
			for (var i = 0; i < results.length; i++) {
				for (x = 1; x < avoid.length; x++){
		    		var typefilter = avoid[x];
		    		if(results[i].types.includes("test")){
		    			console.log(results[i]);
		    			console.log("Found: " + typefilter);
			    		return;
			    	} else {
			    		createMarker(results[i]);
			    	}
		    	}
			}
		}
    }

	function isInArray(a, b) {
		return !!~a.indexOf(b)
	}
		
    function createMarker(place) {

	/*	if(isInArray(place.types, 'restaurant')){
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
		}*/
        var marker = new google.maps.Marker({
			map: map,
			position: place.geometry.location,
        });

        google.maps.event.addListener(marker, 'click', function() {
			infowindow.setContent(place.name);
			infowindow.open(map, this);
        });
    }
}

var mapDiv = document.getElementById('map-div');
//var LatLng = {lat: result.NeighborhoodLatitude, lng: result.NeighborhoodLongitude};
function initMap() {
	map = new google.maps.Map(mapDiv, {
		center: new google.maps.LatLng(37.09024, -95.712891),
		zoom: 6
	});
/* 		var marker = new google.maps.Marker({
			position: LatLng,
			map: map
		}); */
}