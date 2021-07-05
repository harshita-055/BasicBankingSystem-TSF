<?php

	$servername = "sql209.epizy.com";
	$username = "epiz_27946939";
	$password = "MM3zh0ioNOL";
	$dbname = "epiz_27946939_bankofindia";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
