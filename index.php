<?php
require("connector.php");
if(isset($_POST['email']) && isset($_POST['password'])){


$email = $_POST['email'];
$password = $_POST['password'];

$qry = mysqli_query($sql,
	"SELECT * FROM user WHERE email = '".$email."'AND password='".$password."'");
	if($qry){
		$x = mysqli_num_rows($qry);
		if($x==1){
			$id = mysqli_fetch_row($qry);
			session_start();
			$_SESSION['user_id']=$id[0];
			header("location:home.php");
		}
	}

}

?>



<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>University of Saint Charles</title>
  <link rel="icon" type="image/png" href="img/icon.png">

  <!-- CSS Files -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  
    <img src="img/logo.png" class="image">
  

  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>

		<form class="form" method="POST" action='index.php' autocomplete="off">
			<input name="email"  required='required' type="text" placeholder="Email">
			<input name="password" required='required' type="password" placeholder="Password">
			<button id="login-button">Login</button>
		</form>
	</div>

	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

</body>

</html>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/javascript.js"></script>
