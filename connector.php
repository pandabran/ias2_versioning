<?php 

	$sql = mysqli_connect("localhost","root","","finals");

	if(!$sql){
		echo "Error Connecting to DB!";
		exit();
	}
?>