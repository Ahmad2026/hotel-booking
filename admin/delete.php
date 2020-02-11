<?php
include "session.php";
include "config.php";
$id = $_GET['id'];
$sql = "DELETE FROM hotel_details WHERE hotel_id = $id";
if(mysqli_query($conn,$sql)){
    header("location: index.php");
}
else{
    echo "Query Failed";
}
?>