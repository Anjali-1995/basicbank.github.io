<?php
	//Local Development Connection requirement
// 	$servername = "localhost";
// 	$username = "root";
// 	$password = "";
// 	$dbname = "tsf-bank";

$dbname="8OsSHp0px5";
$servername = "remotemysql.com";

$username = "8OsSHp0px5";
$password = "F4jScZyhkH";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
