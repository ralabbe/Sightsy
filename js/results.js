$(document).ready(function(){
	var HOTWIRE_API_KEY = 'nh66uu2cm4au5ytg4cecf2q4';
	$('#search-form').submit(function(e) {
		e.preventDefault();
		
		$.ajax({
			url: 'http://api.hotwire.com/v1/deal/hotel?apikey=' + HOTWIRE_API_KEY + '&limit=10&dest=' + $('#dest').value + '&distance=*~30&starrating=4~*&sort=price&format=jsonp', 
			dataType: 'jsonp', 
			success: function(data) {
				var mainDiv = document.getElementById('main-div');
				var mainStr = '';
				for(var i = 0; i < data.Result.length; i++) {
					var result = data.Result[i];
					mainStr += '<a href="javascript:getCoordinates(' + result.NeighborhoodLatitude+ ',' + result.NeighborhoodLongitude + ')">';
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
});
//     $('#button').click(function(){
//         $.ajax({
//             url:"http://api.hotwire.com/v1/deal/hotel?apikey=nh66uu2cm4au5ytg4cecf2q4&limit=3&dest=NYC&distance=*~30&starrating=4~*&sort=price&format=jsonp",
//             method: 'GET',
// 			crossDomain: true,
// 		//	type: 'GET',
//             //xhrFields: {
//               //  withCredentials: true
//        //     },
//             dataType: 'jsonp',
//             success:function(results){
//                 console.log('success!');
//                 let headline = results.Result[0].Headline;
// 				console.log(results.Result[0].Headline);
//                 let price = results.Result[0].Price;
// 				console.log(results.Result[0].Price);
//                 //let city = results.Result[0].City;
//                 //let state = results.Result[0].StateCode;
//                 //let starRating = results.Result[0].StarRating;
             
// 				document.getElementById('display').innerHTML = headline;
// 				document.getElementById('price').innerHTML = price;
				
// 				//for (var i = 0; i <
				
// 				//new card
// 				var  newCard = $('<div>');
// 				newCard.addClass('uk-card uk-card-default');
				
// 				//card img, title and text wrappers
// 				var cardImgWrap = $('<div>').addClass('uk-card-media-top');
// 				var cardBodyWrap = $('<div>').addClass('uk-card uk-card-body');
				
// 				//elements for inside the wrappers
// 				//img
// 				var cardImg = $('<img>').addClass('hotel-img').attr('src', location.imageURL);
// 				cardImgWrap.append(cardImg);
// 				newCard.append(cardImgWrap);
				
// 				//text
// 				var 
// 			}
//         });
//     })
// })