<?php
include('./inc/header.php');
?>

<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container uk-padding-small uk-position-relative" uk-navbar style="z-index: 980;">
		<div class="uk-navbar-left" id="nav-logo">
			<a href="index.php"><img src="./img/logo_ws.png" alt="logo"></a>
		</div>

    	<div class="uk-navbar-right">
			<form class="uk-search uk-search-default" method="GET" action="" id="search-form">
				<input class="uk-search-input uk-border-rounded uk-text-capitalize" name="dest" id="dest" type="search" placeholder="Let's explore" >
				<a href="#" class="uk-search-icon-flip" id="search_btn" uk-search-icon></a>
			</form>
		</div>
    </nav>
</div>



<div id="map-div"></div>

<div class="results-div">

	<div class="uk-padding-large">
		<!-- Sorting Filters -->
		<h2>Hotels</h2>
		<div class="uk-margin">
			<div class="uk-display-inline" data-uk-form-select>
				<label>Price</label>
				<select id="price-select">
					<option value=""></option>
					<option value="asc">Low to High</option>
					<option value="desc">High to Low</option>
				</select>
			</div>

			<div class="uk-display-inline" data-uk-form-select>
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
		</div>

		<!-- Hotel Results -->
		<div class="uk-position-relative uk-visible-toggle" uk-slider="sets: true">
		    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m uk-child-width-1-5@l uk-child-width-1-6@xl uk-grid" id="main-div">
		        
			</ul>
			<a class="uk-position-center-left uk-position-small uk-hidden-hover slider-button" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
		    <a class="uk-position-center-right uk-position-small uk-hidden-hover slider-button" href="#" uk-slidenav-next uk-slider-item="next"></a>

		    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
		</div>
	</div>

	<!-- Events Results -->
	<div class="uk-padding-large">
		<div class="uk-position-relative uk-visible-toggle" uk-slider="sets: true">
			<h2>Nearby Events</h2>
		    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m uk-child-width-1-5@l uk-child-width-1-6@xl uk-grid" id="event-div">
		        
			</ul>
			<a class="uk-position-center-left uk-position-small uk-hidden-hover slider-button" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
		    <a class="uk-position-center-right uk-position-small uk-hidden-hover slider-button" href="#" uk-slidenav-next uk-slider-item="next"></a>

		    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
		</div>
	</div>

</div>

<?php include('./inc/footer.php'); ?>