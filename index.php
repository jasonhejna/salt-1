<?php
include 'dbc.php';
page_protect();

if (isset($_SESSION['user_id'])) {
	$goturid = $_SESSION['user_id'];
	echo $goturid; //save this for writing into happiness table

	?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Happy Data</title>
<link rel="stylesheet" href="css/960_24_col.css" />
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.23.custom.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>
	<!-- jquery for the happiness buttons http://docs.jquery.com/UI/Button#theming -->
	<script>
	
	$.fx.speeds._default = 700; //animation speed
	$(document).ready(function(){
		$("#radio").click(function(){
    		//$("#radio").hide();
    		$( "#dialog" ).dialog( "open" );
			return false;
  		});
  	});
	$(function() {
		$( "#radio" ).buttonset();

	});
	$(function() {
		$( "#dialog" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
	});	
	</script>
</head>
<body>
<div class="container_24">
	<div class="clear"></div>
<div class="grid_5 prefix_19">
<div class="myaccount">
  <a href="mysettings.php">Settings</a>
  <a href="logout.php">Logout </a>
</div>
</div>
<div class="grid_24">
	<p>At this moment, would you say you are</p>
	<form>
	<div id="radio">
		<input type="radio" id="radio1" name="radio" /><label for="radio1">very happy</label>
		<input type="radio" id="radio2" name="radio" /><label for="radio2">rather happy</label>
		<input type="radio" id="radio3" name="radio" /><label for="radio3">not very happy</label>
		<input type="radio" id="radio4" name="radio" /><label for="radio4">not at all happy</label>
	</div>
	</form>
</div>
<div class="clear"></div>
<div class="grid_24">
<div id="dialog" title="confirmation">
</div>
</div> <!--where I left 960 end div -->
</body>
</html>
<?php }

?>