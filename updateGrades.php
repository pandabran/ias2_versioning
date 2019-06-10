<?php
  require("connector.php");
  $query = "UPDATE activity SET grade = ".$_POST['first_grade']." WHERE activity_id = ".$_POST['first_activity_id'];
  $query2 = "UPDATE activity SET grade = ".$_POST['second_grade']." WHERE activity_id = ".$_POST['second_activity_id'];
  if(mysqli_query($sql, $query) && mysqli_query($sql, $query2)){
    echo "Success!";
  }else{
    echo "Failed!";
  }

?>
