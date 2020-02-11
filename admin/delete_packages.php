<?php
include "session.php";
include "config.php";
$id = $_GET['id'];
$sql = "DELETE FROM packages WHERE package_id = $id";
if(mysqli_query($conn,$sql)){    
    header("location: view_packages.php");
    // header('Location: '.$_SERVER['PHP_SELF']);
}
else{
    echo "Query Failed";
}
?>