
<?php
include "session.php";
include "config.php";
    if(isset($_FILES ['fileToUpload']))
{
    $error = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_temp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_extension = explode('.',$file_name);
    $file_ext =end($file_extension);
    echo $file_ext;
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
$hotelname = mysqli_real_escape_string($conn,$_POST['hotelname']);
$rooms = mysqli_real_escape_string($conn,$_POST['rooms']);
$rating = mysqli_real_escape_string($conn,$_POST['rating']);
echo $sql = "INSERT INTO hotel_details (hotel_name, total_rooms,rating,hotel_image) VALUES('{$hotelname}',{$rooms},$rating,'{$file_name}');";
if(mysqli_query($conn,$sql)){
     header("location: index.php");
}
else{
    echo mysqli_error($conn);
    echo "<div class='alert alert-danger'>Quer Failed</div>";
}

}


?>
