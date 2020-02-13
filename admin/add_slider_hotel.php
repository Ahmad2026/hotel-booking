<?php include "config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4  rounded px-4">
                <h4 class="text-center p-1">Select Image to Upload</h4>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id">
                    <div class="form-group">
                        <input type="file" name="fileToUpload" id="form-control p-1">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="upload" class="btn btn-primary btn-block" value="upload image">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['upload'])) {
    if (isset($_FILES['fileToUpload'])) {
        $error = array();

        $file_name = $_FILES['fileToUpload']['name'];
        $file_size = $_FILES['fileToUpload']['size'];
        $file_temp = $_FILES['fileToUpload']['tmp_name'];
        $file_type = $_FILES['fileToUpload']['type'];
        $file_extension = explode('.', $file_name);
        $file_ext = end($file_extension);
        $extension = array("jpeg", "jpg", "png");
        if (in_array($file_ext, $extension) === false) {
            $error[] = "This Extension File Is Not Allowed, Please Choose jpeg,jpg,png File";
        }
        if ($file_size > 2097152) {
            $error[] = "File Size Must Be 2mb Or Lower";
        }
        if (empty($error)) {
            move_uploaded_file($file_temp, "hotel_slider/" . $file_name);
            // echo "hi";
        } else {
            print_r($error);
            die();
        }
        $id = $_POST['id'];
        $sql = "INSERT INTO hotel_slider (hotel_slider_id, hotel_slider_image) VALUES ($id, '$file_name')";
        if (mysqli_query($conn, $sql)) {
            header("location: add_slider_hotel.php?id={$id}");
        } else {
            echo mysqli_error($conn);
            echo "<div class='alert alert-danger'>Quer Failed</div>";
        }
    }
}
?>