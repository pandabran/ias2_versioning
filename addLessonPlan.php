<?php

	include("connector.php");
  
  $id = mysqli_real_escape_string($sql, $_POST['id']);
  $venue = mysqli_real_escape_string($sql, $_POST['venue']);
  $datePlan = mysqli_real_escape_string($sql, $_POST['datePlan']);
  $datecreated = date("m/d/y");
  $date_created = date("Y-m-d", strtotime($datecreated));
  $dateupdated = date("m/d/y");
  $date_updated = date("Y-m-d", strtotime($dateupdated));
  $lessonOutline = mysqli_real_escape_string($sql, $_POST['lessonOutline']);
  $objectives = mysqli_real_escape_string($sql, $_POST['objectives']);
  $instruction = mysqli_real_escape_string($sql, $_POST['instructions']);
  $summary = mysqli_real_escape_string($sql, $_POST['lessonOutline']);
  $motivation = mysqli_real_escape_string($sql, $_POST['motivation']);
  $materials = mysqli_real_escape_string($sql, $_POST['materials']);

  //echo $id." ".$venue." ".$datePlan." ".$date_created." ".$date_updated." ".$lessonOutline." ".$objectives." ".$instruction." ".$summary." ".$motivation." ".$materials;

  $qry = mysqli_query($sql, "SELECT schedule.schedule_id, schedule.teacher_id, schedule.subject_id FROM schedule JOIN lesson_plan ON schedule.teacher_id = lesson_plan.teacher_id WHERE schedule.teacher_id = $id LIMIT 1");
  
  while($row=$qry->fetch_array()){
    $subject_id =  $row[2];
    $schedule_id = $row[0];
  } 

  $result = mysqli_query($sql,"INSERT INTO lesson_plan (subject_id, schedule_id, teacher_id, venue, date_created, date_of_plan, date_updated, lesson_outline, objectives, instruction, motivation, materials, coordinator_id) VALUES ('$subject_id','$schedule_id','$id','$venue', '$date_created', '$datePlan', '$date_updated','$lessonOutline', '$objectives', '$instruction', '$motivation', '$materials', '15100105')");

  if($result){
    echo "<script>alert('Successfully added Lesson Plan');</script>";
    header("refresh:0;url=home.php");
  }else{
    echo "<script>alert('Error: '. $result . '<br>' . $sql->error)</script>";
  }


?>