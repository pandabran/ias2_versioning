<?php

	include("connector.php");
  
  session_start();
  if(!isset($_SESSION['id'])){
    header("location:index.php");
  }

  $id = $_SESSION['id'];
  $subject = mysqli_real_escape_string($sql, $_POST['subject']);
	$schedule = mysqli_real_escape_string($sql, $_POST['schedule']);
	$venue = mysqli_real_escape_string($sql, $_POST['venue']);
	$datePlan = mysqli_real_escape_string($sql, $_POST['date']);
  $date_created = date("mm/dd/yyyy");
  $date_updated = date("mm/dd/yyyy");
  $lessonOutline = mysqli_real_escape_string($sql, $_POST['lessonOutline']);
	$objectives = mysqli_real_escape_string($sql, $_POST['objectives']);
  $instructions = mysqli_real_escape_string($sql, $_POST['instructions']);
  $summary = mysqli_real_escape_string($sql, $_POST['lessonOutline']);
  $motivation = mysqli_real_escape_string($sql, $_POST['motivation']);
  $materials = mysqli_real_escape_string($sql, $_POST['materials']);

  $qry = mysqli_query($sql, "SELECT * 
    FROM subject 
    WHERE course_name=".$subject)->fetch_object()->qry;

  echo $qry; // <---- error pa ni

  // ABOVE QUERY means subject is retrieved from lesson.php //
  // So you access the subject id through course_name column //

  $result = $sql->query("INSERT INTO lesson_plan(plan_id, subject_id, schedule_id, venue, date_created, date_of_plan, date_updated, lesson_outline, objectives, instruction, motivation, materials, coordinator_id, is_approved) VALUES(,'$subjectID','//===== ADD SUBJECT ID HERE =====//','$venue', '$date_created', 'datePlan', '$date_updated','$lessonOutline', '$objectives', '$instruction', '$motivation', '$materials', '15100105','1')");


?>