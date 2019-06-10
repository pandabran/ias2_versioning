<?php
require("connector.php");

 if(!isset($_POST['dop']) || !isset($_POST['planid']) || !isset($_POST['venue']) || !isset($_POST['lessonout']) || !isset($_POST['instruction']) || !isset($_POST['motivation']) || !isset($_POST['objectives']) || !isset($_POST['materials'])){

	echo "No data passed!";
	exit();
}


$planid = $_POST['planid'];
$dop = $_POST['dop'];
$venue = $_POST['venue'];
$lessonout = $_POST['lessonout'];
$objectives = $_POST['objectives'];
$instruction = $_POST['instruction'];
$motivation = $_POST['motivation'];
$materials = $_POST['materials'];



$qry = mysqli_query($sql,
		"UPDATE lesson_plan
		 SET date_of_plan = '".$dop."', venue = '".$venue."', lesson_outline='".$lessonout."',objectives='".$objectives."', instruction = '".$instruction."',motivation = '".$motivation."', materials='".$materials."' 
		 WHERE plan_id =" .$planid);   
if($qry){
	header("location:home.php");
}else{
	echo "failed to update";
}

?>
