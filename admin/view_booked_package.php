<?php include "session.php";
include "header.php"; ?>

<div class="content">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ORDER ID</th>
                <th scope="col">AMOUNT</th>
                <th scope="col">STATUS</th>
                <th scope="col">PACKAGE ID</th>
                <th scope="col">USER ID</th>
                <th scope="col">EMAIL</th>
                <th scope="col">DATE</th>
                <th scope="col" style="padding-left: 1em;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php include "config.php";
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $limit = 10;
            $offset = ($page - 1) * $limit;
            $sql = "SELECT * FROM booked_package  LIMIT {$offset},{$limit}";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <th scope="row"><?php echo $row['order_id'] ?></th>
                        <td><?php echo $row['amount'] ?></td>
                        <td><?php echo $row['status1'] ?></td>
                        <?php
                        $sql1 = "SELECT * FROM packages WHERE package_id ={$row['package_id']}";
                        $result1 = mysqli_query($conn, $sql1) or die("Query1 Failed");
                        $row1 = mysqli_fetch_assoc($result1);
                        ?>
                        <td><?php echo $row1['package_name'] ?></td>
                        <td><?php echo $row['uid'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['starting_date'] ?></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-warning btn-sm" href="update_booked_package.php?id=<?php echo $row['order_id'] ?>">Update</a>
                            </div>
                        </td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
    <div class="container sticky-footer" style="margin:0 30%;">
        <?php

        $sql1 = "SELECT * FROM booked_package";
        $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

        if (mysqli_num_rows($result1) > 0) {

            $total_records = mysqli_num_rows($result1);

            $total_page = ceil($total_records / $limit);

            echo '<ul class="pagination">';
            if ($page > 1) {
                echo '<li class="page-item"><a class="page-link" href="view_booked_package.php?page=' . ($page - 1) . '">Prev</a></li>';
            }
            for ($i = 1; $i <= $total_page; $i++) {
                if ($i == $page) {
                    $active = "active";
                } else {
                    $active = "";
                }
                echo '<li class="page-item ' . $active . '"><a class="page-link" href="view_booked_package.php?page=' . $i . '">' . $i . '</a></li>';
            }
            if ($total_page > $page) {
                echo '<li class="page-item"><a class="page-link" href="view_booked_package.php?page=' . ($page + 1) . '">Next</a></li>';
            }

            echo '</ul>';
        }
        ?>
    </div>

    <?php include "footer.php" ?>