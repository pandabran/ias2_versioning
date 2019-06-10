<?php
  require("connector.php");
  $query = "SELECT firstname, lastname, activity.*, subject_id, date_of_plan FROM activity JOIN user ON student_id = user_id JOIN lesson_plan ON activity.plan_id = lesson_plan.plan_id WHERE student_id = ".$_POST['student_id']." AND subject_id = ".$_POST['subject_id']." ORDER BY activity_id ".$_POST['order'];

  $result = mysqli_query($sql, $query);
  $row = mysqli_fetch_assoc($result);
  //echo json_encode($row);
  echo json_encode($row);
?>
