<?php
  session_start();

  if(!isset($_SESSION['id'])){
      header("location:index.php");
  }

  $id = $_SESSION['id'];
  require("connector.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>University of Saint Charles</title>
  <link rel="icon" type="image/png" href="img/icon.png">

  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <!-- CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />

  <style>
    .grade-input{
      margin-top: 5px;
    }
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
          <img src="img/logo.png">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="home.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="schedule.php">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Schedule</p>
            </a>
          </li>
          <li>
            <a href="lesson.php">
              <i class="now-ui-icons education_agenda-bookmark"></i>
              <p>Lesson Plan</p>
            </a>
          </li>
          <li class="active ">
            <a href="grades.php">
              <i class="now-ui-icons design-2_ruler-pencil"></i>
              <p>Grades</p>
            </a>
          </li>
          <li>
            <a href="notifications.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="user.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="list.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Class List</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Grades</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Settings</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">About</a>
                  <a class="dropdown-item" href="index.php">Logout</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user.php">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-chart">
              <div class="card-header">
                <h4 class="card-title">
                    <b>
                      <?php
                        $query = "SELECT subject.subject_id, subject.course_name FROM user JOIN teacher ON user.user_id = teacher.teacher_id JOIN subject ON teacher.subject_id = subject.subject_id WHERE user_id =".$id;
                        $result = mysqli_query($sql, $query);
                        $row = mysqli_fetch_assoc($result);
                        echo $row["course_name"];
                        echo "<input id='subject_id' type='text' value='".$row['subject_id']."' hidden>";
                      ?>
                    </b>
                    <br>
                    <small>School Year 2017 - 2018 </small>
                </h4>
              </div>
              <div class="dropdown">
                <button type="button" class="btn btn-neutral btn-icon btn-round btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                </button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Student Name</th>
                      <th>Grade</th>
                    </thead>
                    <tbody>
                      <tr>
                        <?php
                          $records = mysqli_query($sql, "SELECT user_id, firstname, lastname FROM user WHERE type='student'");
                          while($row = mysqli_fetch_assoc($records)){
                            echo "<tr>";
                            echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
                            echo "<div class='form-group text-center'>";
                            echo "<td><button class='btn btn-primary viewBtn' type='button' data-toggle='modal' data-target='#viewGrades' value='". $row['user_id'] ."'>
                                  View</button></td>";
                            echo "<tr>";
                          }
                        ?>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- MODAL -->
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="viewGrades">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Grade</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Student Name</th>
                        <th id="first_date">2018-06-11</th>
                        <th id="second_date">2018-06-13</th>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                              echo "<input id='student_id' type='text' value='' hidden>";
                              echo "<tr>";
                              echo "<td id='name'></td>";
                              echo "<td>";
                              echo "<div class='col-md-5 pr-1'>";
                              echo "<div class='form-group'>";
                              echo "<input id='first_grade_id' type='text' value='' hidden>";
                              echo "<input id='first_grade' type='text' class='form-control grade-input' value=''>";
                              echo "</div>";
                              echo "</div>";
                              echo "</td>";
                              echo "<td>";
                              echo "<div class='col-md-5 pr-1'>";
                              echo "<div class='form-group'>";
                              echo "<input id='second_grade_id' type='text' value='' hidden>";
                              echo "<input id='second_grade' type='text' class='form-control grade-input' value=''>";
                              echo "</div>";
                              echo "</div>";
                              echo "</td>";
                              echo "</tr>";
                          ?>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="updateBtn">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js"></script>
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/plugin/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="js/plugin/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
  <script>

  </script>
</body>
</html>
<script src="js/jquery-3.1.1.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".viewBtn").click(function(){
      var student_id = $(this).attr('value');
      var subject_id = $("#subject_id").val();
      $.ajax({
        type: "POST",
        url: "getGrades.php",
        data: {student_id: student_id, subject_id: subject_id, order: "ASC"}, // replace with actual subject id (dynamically)
        dataType: "json",
        success: function(data){
          $("#name").html(data["firstname"] + ' ' + data["lastname"]);
          $("#first_date").html(data["date_of_plan"]); // change to date
          $("#first_grade").val(data["grade"]);
          $("#student_id").val(data["student_id"]);
          $("#first_grade_id").val(data["activity_id"]);
        },
        error: function(){
          console.log("error");
        }
      });

      $.ajax({
        type: "POST",
        url: "getGrades.php",
        data: {student_id: student_id, subject_id: subject_id, order: "DESC"}, // replace with actual subject id (dynamically)
        dataType: "json",
        success: function(data){
          $("#second_date").html(data["date_of_plan"]); // change to date
          $("#second_grade").val(data["grade"]);
          $("#second_grade_id").val(data["activity_id"]);
        },
        error: function(){
          console.log("error");
        }
      });
    });

    $("#updateBtn").click(function(){
      var student_id = $("#student_id").val();
      var first_grade = $("#first_grade").val();
      var second_grade = $("#second_grade").val();
      var first_activity_id = $("#first_grade_id").val();
      var second_activity_id = $("#second_grade_id").val();
      $.ajax({
        type: "POST",
        url: "updateGrades.php",
        data: {student_id: student_id, first_grade: first_grade, second_grade: second_grade, first_activity_id: first_activity_id, second_activity_id: second_activity_id},
        dataType: "text",
        success: function(data){
          console.log("Change " + data);
        },
        error: function(){
          console.log("error");
        }
      });
    });
  });
</script>
