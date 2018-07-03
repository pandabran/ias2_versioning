<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
  }
  echo var_dump($_SESSION['id']);

require("connector.php");
$qry = mysqli_query($sql,
  "SELECT firstname,lastname,year,section,gwa FROM user JOIN student on user.user_id = student.student_id left join grade on student.student_id = grade.student_id where user.type='student'");
$qry1 = mysqli_query($sql,
  "SELECT lesson_plan.date_of_plan,venue,is_approved FROM `lesson_plan` Join subject on lesson_plan.subject_id = subject.subject_id join teacher on subject.subject_id = teacher.subject_id JOIN user on teacher.teacher_id= user.user_id WHERE user.user_id=".$_SESSION['id']);
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
          <li class="active ">
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
          <li>
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
            <a class="navbar-brand" href="#">Dashboard</a>
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
                  <a class='dropdown-item'>Logout</a>
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
          <div class="col-lg-7">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Class List</h5>
                <h4 class="card-title">Student Grades</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="grades.php">Edit Grades</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>Year</th>
                      <th>Section</th>
                      <th class="text-right">General Average</th>
                    </thead>
                    <tbody>
                      <?php 
                        while ($row = mysqli_fetch_array($qry)) {
                          echo "<tr>";
                          echo "<td>".$row[0]." ".$row[1]."</td>";
                          echo "<td align='center'>".$row[2]."</td>";
                          echo "<td align='center'>".$row[3]."</td>";
                          echo "<td align='center'>".$row[4]."</td>";
                          echo "</tr>";
                        }
                        
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"> Plan</h5>
                <h4 class="card-title">Lesson Plan</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="lesson.php">Create New Lesson Plan</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Date</th>
                      <th>Venue</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>7/3/2018</td>
                        <td>Quadrangle</td>
                        <td class="text-right">
                          <a href="lesson.php"><button type="button" aria-hidden="true" class="btn btn-warning">
                            <i class="now-ui-icons loader_gear"></i>
                          </button></a>
                          <button type="button" aria-hidden="true" class="btn btn-danger" onclick="demo.showNotification('top','right')">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>7/3/2018</td>
                        <td>Quadrangle</td>
                        <td class="text-right">
                          <a href="lesson.php"><button type="button" aria-hidden="true" class="btn btn-warning">
                            <i class="now-ui-icons loader_gear"></i>
                          </button></a>
                          <button type="button" aria-hidden="true" class="btn btn-danger" onclick="demo.showNotification('top','right')">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Grades</h5>
                <h4 class="card-title">Student Performance</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Schedule</h5>
                <h4 class="card-title"> School Year 2017-2018</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Monday</th>
                      <th>Tuesday</th>
                      <th>Wednesday</th>
                      <th>Thursday</th>
                      <th>Friday</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>6-Joy</td>
                        <td></td>
                        <td>6-Hope</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>6-Faith</td>
                        <td></td>
                        <td>6-Love</td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/javascript.js"></script>
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
