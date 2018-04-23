<?php
include('./inc/header.php');
?>
<body>

	    <div id="fullpage">

	    	<div id="one" class="section uk-light" >
	        <!-- Navbar-->
	        <nav class="uk-navbar-container uk-margin uk-navbar-transparent uk-position-top" uk-navbar>
	            <div class="uk-navbar-left">
	              <a class="uk-navbar-item uk-logo uk-margin-large-left uk-margin-top" href="#">Logo</a>
	            </div>
	        </nav>
	        <!-- Search Bar-->
	        <div class="uk-text-center uk-animation-fade">
	          <h1 class=" uk-text-bold ">Name Here</h1>
	          <h2 class=" uk-text-bold ">Make the most out of your adventure</h2>
	          <form id="search-form" action="results.php" class="uk-search" uk-scrollspy="cls: uk-animation-fade; target: > input; delay: 700; repeat: false" method="get">
	              <input name="dest" id="dest" class="uk-input uk-border-rounded uk-box-shadow-large" type="text" placeholder="Where are you going?" >
	              <button type="submit" value="Search" class="uk-button uk-box-shadow-large uk-border-rounded">Submit</button>
	          </form>
	        </div>
	      </div>



	    	<div id="two" class="section ">

	        <div class="card uk-child-width-expand@s uk-margin-large-left uk-margin-large-right" uk-grid>
	              <div class="uk-card uk-card-body uk-card-default uk-cover-container" >
	                  <img uk-cover class="uk-margin-large-right" src="img/hotel.jpg">
	              </div>
	          <div class=" uk-card uk-card-body uk-grid-item-match ">
	              <h3>FIND A HOTEL</h3>
	              <p>
	                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              </p>
	          </div>
	        </div>

	        <div class="uk-child-width-expand@s card uk-margin-large-left uk-margin-large-right" uk-grid>
	              <div class="uk-card uk-card-body uk-grid-item-match">
	                  <h3 >EXPLORE THE AREA</h3>
	                  <p>
	                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	                  </p>
	              </div>
	              <div class="uk-card uk-card-body uk-card-default uk-cover-container">
	                  <img uk-cover  src="img/places.jpeg">
	              </div>
	        </div>
	      </div>



	    	<div id="three" class="section">
	        <h2 class="uk-position-top-center uk-margin-large-top">FEATURED LOCATIONS</h2>

	        <div class="uk-child-width-1-3@m uk-margin-large-left uk-margin-large-right" uk-grid>
	            <div>
	                <div class="uk-card uk-card-default">
	                    <div class="uk-card-media-top">
	                        <img src="img/miami.jpg" alt="">
	                    </div>
	                    <div class="uk-card-body">
	                        <h3 class="uk-card-title">Miami, FL</h3>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
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
	                </div>
	            </div>
	        </div>
	      </div>
	    </div>
	<!-- Scripts -->
	<!-- jQuery CDN -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<!-- jQuery UI CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<!-- fullPage.js -->
	<script type="text/javascript" src="./js/scrolloverflow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js"></script>
	<!--UI Kit JS-->
	<script src="./js/uikit.min.js" type="text/javascript"></script>
	<!--custom js-->
	
	<script text="javascript">
		$('#fullpage').fullpage({
			scrollOverflow: true,
		});
	</script>
</body>
</html>
