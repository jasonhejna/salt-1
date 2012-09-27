<?php
include 'dbc.php';
page_protect();
$hap = $_POST['happz'];
$info = "INSERT INTO happy (`user_id`,`happiness`,`unix_time`) VALUES ('$goturid',$hap,'0')";
mysql_query($info) or die(mysql_error()); 
?>