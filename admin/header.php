<?php
$bname = basename($_SERVER['PHP_SELF']);
$indexactive = "";
$addpackagesactive = "";
$addhotelactive = "";
$viewpackagesactive = "";
$title = "";
// switch ($bname) {
//   case "add_packages.php":
//     $active = "active";
//     break;
//   case "index.php":
//     $active = "active";
//     break;
//   default:
//     break;
// }
if ($bname === "index.php") {
  $indexactive = "active";
  $title = "Index";
} elseif ($bname === "add_packages.php") {
  $addpackagesactive = "active";
  $title = "Add Packages";
} elseif ($bname === "add_hotel.php") {
  $addhotelactive = "active";
  $title = "Add Hotel";
} elseif ($bname === "view_packages.php") {
  $viewpackagesactive = "active";
  $title = "View Packages";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="assets/img/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?= $title; ?>
  </title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="pagination.css"> -->
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="<?php echo $indexactive ?>">
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="<?= $addhotelactive ?>">
            <a href="add_hotel.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Add Hotel</p>
            </a>
          </li>
          <li class="<?php echo $addpackagesactive ?>">
            <a href="add_packages.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Add Packages</p>
            </a>
          </li>
          <li class="<?= $viewpackagesactive ?>">
            <a href="view_packages.php">
              <i class="nc-icon nc-bell-55"></i>
              <p>View Package</p>
            </a>
          </li>
          <li>
            <a href="./view_booked_hotel.php">
              <i class="nc-icon nc-single-02"></i>
              <p>Booked Hotel</p>
            </a>
          </li>
          <li>
            <a href="./view_booked_package.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Booked Package</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="index.php">Admin Panel</a>
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
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="change_password.php" id="navbarDropdownMenuLink" aria-expanded="false">
                  <i class="fa fa-key" aria-hidden="true"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="logout.php">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>
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
      <!-- <div class="panel-header panel-header-lg">
  
    <canvas id="bigDashboardChart"></canvas>
  
  
  </div> -->