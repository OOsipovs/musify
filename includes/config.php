<?php 
	ob_start();
	$timezone = date_default_timezone_set("Europe/Riga");
	$con = mysqli_connect("localhost", "root", "", "amusify");
	if(mysqli_connect_errno()){
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
