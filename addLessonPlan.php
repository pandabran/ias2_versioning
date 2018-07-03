<?php

	include("sql_connect.php");

	$datePlan = mysqli_real_escape_string($sql, $_POST['datePlan']);
  	$venue = mysqli_real_escape_string($sql, $_POST['venue']);
  	$lessonOutline = mysqli_real_escape_string($sql, $_POST['lessonOutline']);
  	$objectives = mysqli_real_escape_string($sql, $_POST['objectives']);
  	$instructions = mysqli_real_escape_string($sql, $_POST['instructions']);
  	$summary = mysqli_real_escape_string($sql, $_POST['lessonOutline']);
  	$motivation = mysqli_real_escape_string($sql, $_POST['motivation']);
  	$materials = mysqli_real_escape_string($sql, $_POST['materials']);



  	$result = $sql->query("INSERT INTO lesson_plan(venue, date_created, date_of_plan, date_updated, lesson_outline, objectives, instruction, motivation, materials) VALUES('$venue', '$employee_type', '$employee_dob', '$shift_time','$lessonOutline', '$objectives', '$instruction', '$motivation', '$materials')");


?>