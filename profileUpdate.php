<?php
require("connector.php");

 if(!isset($_POST['email']) || !isset($_POST['fname']) || !isset($_POST['lname']) || !isset($_POST['address']) || !isset($_POST['city']) || !isset($_POST['country']) || !isset($_POST['pcode']) || !isset($_POST['id']) ){
	echo "No data passed!";
	exit();
}

$id = $_POST['id'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$pcode = $_POST['pcode'];


$qry = mysqli_query($sql,
		"UPDATE user
		 SET firstname = '".$fname."', lastname = '".$lname."', town='".$address."', city='".$city."', country = '".$country."',zipcode = '".$pcode."', email='".$email."' 
		 WHERE user_id =" .$id);   
if($qry){
	header("location:user.php");
}else{
	echo "failed to update";
}

?>
