<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
<style>
body{
  margin: 0;
  padding: 0;
  background: #487eb0;
}
.signup-form{
  width: 300px;
  padding: 20px;
  text-align: center;
  background: url(bg.png);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  overflow: hidden;
}
.signup-form h1{
  margin-top: 100px;
  font-family: 'Permanent Marker', cursive;
  color: #fff;
  font-size: 40px;
}
.signup-form input{
  display: block;
  width: 100%;
  padding: 0 16px;
  height: 44px;
  text-align: center;
  box-sizing: border-box;
  outline: none;
  border: none;
  font-family: "montserrat",sans-serif;
}
.txtb{
  margin: 20px 0;
  background: rgba(255,255,255,.5);
  border-radius: 6px;
}
.signup-btn{
  margin-top: 60px;
  margin-bottom: 20px;
  background: #487eb0;
  color: #fff;
  border-radius: 44px;
  cursor: pointer;
  transition: 0.8s;
}
.signup-btn:hover{
  transform: scale(0.96);
}
.signup-form a{
  text-decoration: none;
  color: #fff;
  font-family: "montserrat",sans-serif;
  font-size: 14px;
  padding: 10px;
  transition: 0.8s;
  display: block;
}
.signup-form a:hover{
  background: rgba(0,0,0,.3);
}

</style>
    </head>
  <body>  
    <div class="signup-form">
      <form class="" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <h1>Sign Up</h1>
        <input type="text" placeholder="First Name" class="txtb" name="firstname" required>
        <input type="text" placeholder="Last Name" class="txtb" name="lastname" required>
        <input type="text" placeholder="Username" class="txtb" name="username" required>
        <input type="password" placeholder="Password" class="txtb" name="password" required>
        <input type="submit" value="Create Account" class="signup-btn" name="submit" required>
        <a href="login.php">Already Have one ?</a>
      </form>
    </div>
  </body>
</html>
<?php
include "config.php";
if(isset($_POST['submit'])){
$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,md5($_POST['password']));
$sql = "INSERT INTO users (firstname,lastname,username,password) values ('{$firstname}','{$lastname}','{$username}','{$password}')";
if( mysqli_query($conn,$sql)){
  ?>
  <script>
  alert("User Registerd");
  </script>
<?php
header("location: login.php");
}
else{
  ?>
   <script>
  alert("Something Went Wrong");
  </script>
<?php
}
}
?>
