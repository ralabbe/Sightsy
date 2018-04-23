<?php
include('./inc/header.php');
include('./inc/nav.php');
?> 
<html>
<body>
	<form id="search-form" action="">
		<label for="dest">Destination</label><br>
		<input name="dest" id="dest" type="text"/>
		<input type="submit" value="Search"/>
	</form>
	<div class="uk-button uk-form-select" data-uk-form-select>
		<label>Price</label>
		<select id="price-select">
			<option value=""></option>
			<option value="asc">Low to High</option>
			<option value="desc">High to Low</option>
		</select>
	</div>
	<div class="uk-button uk-form-select" data-uk-form-select>
		<label>Star Rating</label>
		<select id="star-select">
			<option value=""></option>
			<option value="5">5 Stars</option>
			<option value="4">4 Stars</option>
			<option value="3">3 Stars</option>
			<option value="2">2 Stars</option>
			<option value="1">1 Star</option>
		</select>
	</div>
	<div class="uk-button uk-form-select" data-uk-form-select>
		<label></label>
	</div>
	<div class="wrapper" style="display:flex;">
		<div id="main-div" style="width: 50%;">
			<!-- <div class="uk-card uk-card-default">
				<div class="uk-card-media-top">
					<img src="" alt="">
				</div>
				<div class="uk-card uk-card-body">
					<h3 class="uk-card-title headline"></h3>
					<p></p>
				</div>
			</div> -->
		</div>
		<div id="map-div" style="width: 50%;">
		
		</div>
	</div>
	<!-- Scripts -->
	<!-- jQuery CDN -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<!-- jQuery UI CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="./js/results.js" type="text/javascript"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxCFGOkAibs__awsnk_EycGB7FieUISOA&libraries=places&callback=initMap" type="text/javascript"></script>
	<!-- fullPage.js -->
	<script type="text/javascript" src="./js/scrolloverflow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js"></script>
	<!--UI Kit JS-->
	<script src="./js/uikit.min.js" type="text/javascript"></script>
	<!--custom js-->
</body>
</html>