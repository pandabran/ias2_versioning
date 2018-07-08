<?php 

	$sql = mysqli_connect("localhost","root","","brans");

	if(!$sql){
		echo "Error Connecting to DB!";
		exit();
	}
?>