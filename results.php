<?php
include('./inc/header.php');
include('./inc/nav.php');
?>
<body>
	<form id="search-form" action="">
		<label for="dest">Destination</label><br>
		<input name="dest" id="dest" type="text"/>
		<input type="submit" value="Search"/>
	</form>
	
	<div id="main-div">
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
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="./js/results.js" type="text/javascript"></script>
<?php
include('./inc/footer.php');
?>