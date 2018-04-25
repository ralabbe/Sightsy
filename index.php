<?php
include('./inc/header.php');
?>
<body>
    <div id="fullpage">

    	<div id="one" class="section uk-light">

			<div class="uk-text-center uk-animation-fade uk-flex-center" uk-grid>
				<img src="../img/logo_w.png" alt="Sightsy Logo">
				<h3 class="uk-width-1-1@s uk-margin text-white">Make the most out of your adventure</h3>

        		<!-- Search Bar-->
				<div class="uk-margin uk-width-1-4@s uk-child-width-1-1@s" uk-grid>
					<form class="uk-search uk-search-default" id="home-search" action="./results.php" method="GET">
						<a href="#" class="uk-search-icon-flip" id="search_btn" uk-search-icon></a>
						<input class="uk-search-input uk-border-rounded uk-box-shadow-large text-white uk-padding-small" name="dest" id="dest" type="search" placeholder="Let's explore">
					</form>
				</div>
			</div>

    	</div> <!-- End Section 1 -->



	    <div id="two" class="section">

	        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
	              <div class="uk-card-media-left uk-cover-container">
	                  <img uk-cover class="" src="img/hotel.jpg" alt="hotels">
	              </div>
	          <div class=" uk-card uk-card-body">
	              <h3 class="uk-text-primary">FIND A HOTEL</h3>
	              <p>
	                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              </p>
	          </div>
	        </div>

	         <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
	              <div class="uk-card uk-card-body">
	                  <h3 class="uk-text-primary">EXPLORE THE AREA</h3>
	                  <p>
	                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	                  </p>
	              </div>
	              <div class="uk-card-media-right uk-cover-container">
	                  <img uk-cover src="img/places.jpeg" alt="places">
	              </div>
	        </div>

	    </div> <!-- End Section 2 -->



	    <div id="three" class="section uk-text-center">

	        <h2 class="text-white">FEATURED LOCATIONS</h2>

	        <div class="uk-child-width-1-2@s uk-child-width-1-4@l uk-margin-large-left uk-margin-large-right" uk-grid>
	            <div>
	                <div class="uk-card uk-card-default">
	                    <div class="uk-card-media-top">
	                        <img src="img/miami.jpg" alt="">
	                    </div>
	                    <div class="uk-card-body">
	                        <h3 class="uk-card-title">Miami, FL</h3>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
	                    </div>
	                    <div class="uk-card-footer">
							<a href="results.php?dest=miami" class="uk-button uk-button-default">Explore</a>
	                    </div>
	                </div>
	            </div>
	            <div>
	                <div class="uk-card uk-card-default">
	                    <div class="uk-card-media-top">
	                        <img src="img/denver.jpg" alt="">
	                    </div>
	                    <div class="uk-card-body">
	                        <h3 class="uk-card-title">Denver, CO</h3>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
	                    </div>
	                    <div class="uk-card-footer">
							<a href="results.php?dest=denver" class="uk-button uk-button-default">Explore</a>
	                    </div>
	                </div>
	            </div>
	            <div>
	                <div class="uk-card uk-card-default">
	                    <div class="uk-card-media-top">
	                        <img src="img/austin.jpg" alt="">
	                    </div>
	                    <div class="uk-card-body">
	                        <h3 class="uk-card-title">Austin, TX</h3>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
	                    </div>
	                    <div class="uk-card-footer">
							<a href="results.php?dest=austin" class="uk-button uk-button-default">Explore</a>
	                    </div>
	                </div>
	            </div>
	        </div>

	    </div> <!-- End Section 3 -->

    </div> <!-- End Fullpage Div -->


<?php
include('./inc/footer.php');
?>
