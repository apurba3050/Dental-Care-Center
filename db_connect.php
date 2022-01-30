<?php
	
	$host="localhost";
	$user="root";
	$pass="";
	$db="dental";

	$con=mysqli_connect($host,$user,$pass,$db);
	if(!$con){
		die(mysqli_error());
	}
?>