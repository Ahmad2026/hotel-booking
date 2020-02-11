<?php
include "session.php";
include "config.php";
if(empty($_FILES['new_image']['name'])){
    $file_name =$_POST['old_image'];
}
else{
        $error = array();

    $file_name = $_FILES['new_image']['name'];
    $file_size = $_FILES['new_image']['size'];
    $file_temp = $_FILES['new_image']['tmp_name'];
    $file_type = $_FILES['new_image']['type'];
    $file_extension = explode('.',$file_name);
    $file_ext =end($file_extension);
    // echo $file_ext;
    $extension = array("jpeg","jpg","png");
    if(in_array($file_ext,$extension)===false){
            $error[]="This Extension File Is Not Allowed, Please Choose jpeg,jpg,png File";
    }
    if($file_size>2097152){
        $error[]="File Size Must Be 2mb Or Lower";
    }
    if(empty($error)){
        move_uploaded_file($file_temp,"upload/".$file_name);
        // echo "hi";
    }
    else{
        print_r($error);
        die();
    }

}
// echo "hi";
// echo $file_name;
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$details = $_POST['details'];
// echo $_POST['details'];
$location = $_POST['location'];
echo $sql = "UPDATE  packages SET package_name = '{$name}',package_price={$price},package_details = '{$details}',package_location='{$location}',package_image = '{$file_name}' WHERE package_id ={$id}";
if(mysqli_query($conn,$sql)){
    header("Location: view_packages.php");
}
else{
    echo mysqli_error($conn);
    echo "Query Failed";
}