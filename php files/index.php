<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
  <div class="navcpy justify-content-between" style="font-weight:1000;">
    <ul class="nav nav-pills d-in" role="tablist">
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#home" style="color: #fff;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu1" style="color: #fff;">Why TASS?</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu2" style="color: #fff;">About Us</a>
      </li> -->
    </ul>
    <ul class="nav nav-pills justify-content-end">
      <li class="nav-item">
        <a class="nav-link" href="login.php" style="color: #fff;">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php" style="color: #fff;border:5px;">Sign Up</a>
      </li>
    </ul>
  </div>

  <div class="container-fluid">
    <div class="d-flex justify-content-end h-100">
      <div class="card">
        <div class="card-header">
          <h3>Sign In</h3>
        </div>
        <div class="card-body">
          <form method="post" action="index.php">
            <div class="input-group form-group">
              <div class="input-group-prepend" style="height:50px">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="username">

            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend" style="height:50px">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="password">
            </div>
            <div class="row  remember" style="line-height:30px;">
              <input type="checkbox">
              <h6 style="position: absolute;left:50px;top:3px;">Remember Me</h6>
            </div>
            <div class="form-group">
              <input type="submit" value="Login" id="login" class="btn-primary float-right login_btn">

            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center links" style="color:#000;">
            Don't have an account?<a href="signup.php">Sign Up</a>
          </div>
          <div class="d-flex justify-content-center">
            <a href="forgot_password.php">Forgot your password?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>