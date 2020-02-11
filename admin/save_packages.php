<?php
include "config.php";
include "session.php";
    if(isset($_FILES ['fileToUpload']))
{
    $error = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_temp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_extension = explode('.',$file_name);
    $file_ext =end($file_extension);
    $extension = array("jpeg","jpg","png");
    if(in_array($file_ext,$extension)===false){
            $error[]="This Extension File Is Not Allowed, Please Choose jpeg,jpg,png File";
    }
    if($file_size>2097152){
        $error[]="File Size Must Be 2mb Or Lower";
    }
    if(empty($error)){
    //    echo "hi";   
        move_uploaded_file($file_temp,"upload/".$file_name);
   
    }
    else{
        print_r($error);
        die();
    }
   
$name = mysqli_real_escape_string($conn,$_POST['name']);
$price = mysqli_real_escape_string($conn,$_POST['price']);
$details = mysqli_real_escape_string($conn,$_POST['details']);
$location = mysqli_real_escape_string($conn,$_POST['location']);
$sql = "INSERT INTO packages (package_name, package_price,package_details,package_location,package_image) VALUES('{$name}',{$price},'{$details}','{$location}','{$file_name}')";
if(mysqli_query($conn,$sql)){
  header("location: index.php");
  
    }
else{
    echo mysqli_error($conn);
   echo "<div class='alert alert-danger'>Query Failed</div>";
}

}

?>
