<?php

	include("sql_connect.php");
	
	$venue = mysqli_real_escape_string($sql, $_POST['venue']);
	$datePlan = mysqli_real_escape_string($sql, $_POST['datePlan']);
  	$date_created = date("mm/dd/yyyy");
  	$date_updated = date("mm/dd/yyyy");
  	$lessonOutline = mysqli_real_escape_string($sql, $_POST['lessonOutline']);
  	$objectives = mysqli_real_escape_string($sql, $_POST['objectives']);
  	$instructions = mysqli_real_escape_string($sql, $_POST['instructions']);
  	$summary = mysqli_real_escape_string($sql, $_POST['lessonOutline']);
  	$motivation = mysqli_real_escape_string($sql, $_POST['motivation']);
  	$materials = mysqli_real_escape_string($sql, $_POST['materials']);



  	$result = $sql->query("INSERT INTO lesson_plan(venue, date_created, date_of_plan, date_updated, lesson_outline, objectives, instruction, motivation, materials) VALUES('$venue', '$date_created', 'datePlan', '$date_updated','$lessonOutline', '$objectives', '$instruction', '$motivation', '$materials')");


?>