<?php
include 'dbc.php';
page_protect();

if (isset($_SESSION['user_id'])) {?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Happy Data</title>
<link rel="stylesheet" href="css/960_24_col.css" />

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
<div class="grid_5 prefix_9 suffix_10">
	<p>centerish</p>
</div>

</div> <!--where I left 960 end div -->
</body>
</html>
<?php }

?>