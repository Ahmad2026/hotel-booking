<?php
include "config.php";
include "session.php";
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title></title>
  <style type="text/css">
    .card-group {
      margin-left: 150px;
      margin-top: 90px;


    }

    .card {
      margin-right: 50px;
      width: 50px;
    }

    .star {
      color: yellow;
    }

    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1
    }

    body {
      height: 1200px;
    }

    .price {
      font-size: 14px;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="index.php">TAAAS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="package.php">Packages</a>
        </li>
    </div>
    <form class="form-inline my-5 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btnutline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <a href="profile.php"><img src="img/user.png" alt="user" width='30' height='30' style='margin-left: 10px;'></a>
    </div>
  </nav>


  <div class="container-fluid">

    <div class="card-group">
      <?php
      $sql = "SELECT * FROM hotel_details";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $inc = 4;
          $inc = ($inc == 4)  ? 1 : $inc + 1;
          if ($inc == 4) echo "<div class='row'>";
      ?>
          <div class="col-xs-6 col-sm-6 col-lg-3">

            <div class="card" style="width:100%;margin-top:20px;box-shadow:3px 3px 8px 1px #00000020 ">
              <img class="card-img-top" src="./admin/upload/<?php echo $row['hotel_image']; ?>" height="200px">
              <div class="card-body">
                <h5 class="card-title" style="text-overflow: ellipsis;white-space: nowrap;overflow:hidden;"><?php echo $row['hotel_name'] ?></h5>
                <p class="card-text" style="text-overflow: ellipsis;white-space: nowrap;overflow:hidden;"> <?php echo $row['hotel_description'] ?> </p>
                <h5 class="price">
                  <div class="font-weight-bold d-inline">Price</div> <?php echo $row['price'] ?>
                </h5>
                <h5 class="price">
                  <div class="font-weight-bold d-inline">Location</div> <?php echo $row['hotel_location'] ?>
                </h5>
                <?php
                if ($row['rating'] == 1) {
                  for ($i = 0; $i < $row['rating']; $i++) {
                  }
                } else if ($row['rating'] == 2) {
                  for ($i = 0; $i < $row['rating']; $i++) {
                    echo "<i class='fa fa-star star'></i>";
                  }
                } else if ($row['rating'] == 3) {
                  for ($i = 0; $i < $row['rating']; $i++) {
                    echo "<i class='fa fa-star star'></i>";
                  }
                } else if ($row['rating'] == 4) {
                  for ($i = 0; $i < $row['rating']; $i++) {
                    echo "<i class='fa fa-star star'></i>";
                  }
                } else if ($row['rating'] == 5) {
                  for ($i = 0; $i < $row['rating']; $i++) {
                    echo "<i class='fa fa-star star'></i>";
                  }
                }
                ?>
                <br>
                <a href="date_picker.php?id=<?php echo $row['hotel_id'] ?>" class="btn btn-primary">Book Now</a>
              </div>
            </div>

          </div>
      <?php

          if ($inc == 4) echo "</div>";
        }
        if ($inc == 4) echo "<div class='col-sm-3><div class='col-sm-3></div>";
      }

      ?>
    </div>


    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center mt-5">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="http://localhost/hotel.php?#">1</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/hotel1.php?#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="http://localhost/hotel1.php?#">Next</a>
        </li>
      </ul>
    </nav>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>