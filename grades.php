<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
  }


  // $qry = mysqli_query($sql,
  // "SELECT * FROM user WHERE email = '".$email."'AND password='".$password."'");

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
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">
                    <b>Arts</b>
                    <br>
                    <small>School Year 2017 - 2018 </small>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Student Name</th>
                      <th>Activity Date</th>
                      <th>Grade</th>
                      <th>Activity Date</th>
                      <th>Grade</th>
                      <th class="text-right">Final Grade</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Russel Morquecho</td>
                        <td>2018-06-11</td>
                        <td>
                          <div class="col-md-4 px-1">
                            <input type="text" class="form-control" value="91">
                          </div>
                        </td>
                        <td>2018-06-13</td>
                        <td>
                          <div class="col-md-4 px-1">
                            <input type="text" class="form-control" value="89">
                          </div>
                        </td>
                        <td class="text-right">90</td>
                      </tr>
                      <tr>
                        <td>Malcolm Cada</td>
                        <td>2018-06-11</td>
                        <td>
                          <div class="col-md-4 px-1">
                            <input type="text" class="form-control" value="90">
                          </div>
                        </td>
                        <td>2018-06-13</td>
                        <td>
                          <div class="col-md-4 px-1">
                            <input type="text" class="form-control" value="91">
                          </div>
                        </td>
                        <td class="text-right">91</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group text-center">
                          <button type="submit" class="btn btn-warning btn-lg">Submit</button>
                        </div>
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
