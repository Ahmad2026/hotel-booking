<?php
include "config.php";
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Hdesc.css">
    <title>Book Hotel</title>
    <style type="text/css">
        /* .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1
        } */
        /* 
        body {
            height: 1200px;
        } */

        .price {
            font-size: 14px;
        }

        .carousel-inner img {
            width: 80%;
            height: 100%;
        }

        .n- img {
            width: 100%;
            height: 100%;
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

    <div id="main-content">
        <div class="container">
            <?php
            $sql = "SELECT * FROM packages WHERE package_Id = {$_GET['id']}";
            $result = mysqli_query($conn, $sql) or die("Quer Failed1 ");
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-4">
                        <h4><?= $row['package_name']; ?> </h1>

                    </div>
                    <div id="demo" class="carousel slide mt-5" data-ride="carousel">
                        <?php
                        $sql1 = "SELECT * FROM package_slider WHERE package_slider_id ={$_GET['id']}";
                        $result1 = mysqli_query($conn, $sql1);
                        //$row1 = mysqli_fetch_assoc($result1);
                        ?>
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <?php
                            $i = 0;
                            foreach ($result1 as $row1) {
                                $active = "";
                                if ($i == 0) {
                                    $active = "active";
                                }

                            ?>

                                <li data-target="#demo" data-slide-to="<?php echo $i ?>" class="<?php echo $active ?>"></li>
                            <?php $i++;
                            } ?>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <?php
                            $i = 0;
                            foreach ($result1 as $row1) {
                                $active = "";
                                if ($i == 0) {
                                    $active = "active";
                                }

                            ?>
                                <div class="carousel-item <?= $active ?>">
                                    <img src="./admin/package_slider/<?= $row1['package_slider_image'] ?>" alt="Los Angeles" width="100%" height="400">
                                </div>
                            <?php $i++;
                            } ?>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>

                    <section>
                        <div class=" box-body" style="font-size:30px;padding:10px  ">
                            <div class="d-flex flex-row bd-highlight mb-3">
                                <div class="fa fa-wifi">free wifi</div>
                                <div class="fa fa-bathtub">Bathtub</div>
                                <i class="fas fa-parking"></i>
                                <i class="fa fa-snowflake-o">Air conditioned</i>
                                <i class="fa fa-taxi">Airport Transfer</i>
                            </div>

                        </div>

                    </section>
                    <div class="mt-4">
                        <p>
                            <?= $row['package_details']; ?>
                        </p>
                    </div>
                    <div class="mt-4">
                        <p>Location<br> <?= $row['package_location']; ?></p>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <p>Price <?= $row['package_price'] ?></p>
            </div>
            <div class="mt-4">
                <p>Days <?= $row['days'] ?></p>
            </div>
            <div class="mt-4">
                <p> <?= $row['starting_date'] ?></p>
            </div>
            <div class="mt-4 p-4">
                <div class="mt-4">
                    <?php
                    if (isset($_SESSION['hotel_id'])) {
                        unset($_SESSION['hotel_id']);
                    }
                    ?>
                    <?php $_SESSION['package_id'] = $row['package_id'] ?>
                    <?php $_SESSION['starting_date'] = $row['starting_date'] ?>
                    <form method="post" action="paytm/PaytmKit/pgRedirect.php">
                        <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>">

                        <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?= $_SESSION['user_id']; ?>">

                        <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                        <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                        <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<?= $row['package_price'] ?>">
                        <input type="hidden" title="HOTEL_ID" tabindex="10" type="text" name="HOTEL_ID" value="<?= $row['package_id']; ?>">
                        <input value="Make Payment" type="submit" onclick="" class="btn btn-primary">
                        <!-- * - Mandatory Fields -->
                    </form>
                    <!-- <a class="btn btn-primary" href="checkout_hotel.php?id=&amount=">Make Payment</a> -->
                </div>
            </div>
        </div>

    </div>

</body>

</html>