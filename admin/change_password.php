<?php include "session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


    <div class="card text-center col-lg-4 col-md-4 col-sm-4 container justify-content-center">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="form-group" >
    <input class="col-sm-4" type="password" class="form-control"   placeholder="Enter New Password" name="pass" required>
     </div>
     <input type="submit" value="change" name="submit" class="btn btn-primary">
  </form>
 
    

  </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
include "config.php";
// session_start();
$id = $_SESSION['user_id'];
$password = md5($_POST['pass']);
$sql = "UPDATE users SET password = '{$password}' WHERE user_id = {$id}";
if(mysqli_query($conn,$sql)){
    header("Location: index.php");
}
else{
//    echo mysqli_error($conn);
    echo "Query failed";
}}
?>