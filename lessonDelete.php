<?php
if (isset($_GET['pid'])){
	header("location:home.php");
	// DELETE DATA

	echo $_GET['pid'];
}
require("connector.php");
$res = mysqli_query($sql, "DELETE FROM lesson_plan WHERE plan_id = ".$_GET['pid']);


if($res){
	header("location:home.php");
	
}else{
	echo "Failed to Delete!";
	exit();
}
?>