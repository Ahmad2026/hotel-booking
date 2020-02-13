<?php include "session.php";
include "header.php"; ?>

<div class="content">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Price </th>
        <th scope="col">Location</th>
        <th scope="col" style="padding-left: 4em;">Action</th>
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
      $sql = "SELECT * FROM packages LIMIT {$offset},{$limit}";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <tr>
            <th scope="row"><?php echo $row['package_id'] ?></th>
            <td><?php echo $row['package_name'] ?></td>
            <td><?php echo $row['package_price'] ?></td>
            <td><?php echo $row['package_location'] ?></td>
            <td>
              <div class="btn-group">
                <a class="btn btn-danger btn-sm" href="delete_packages.php?id=<?php echo $row['package_id'] ?>">Delete</a>
                <a class="btn btn-warning btn-sm" href="update_packages.php?id=<?php echo $row['package_id'] ?>">Update</a>
                <a class="btn btn-primary btn-sm" href="add_slider_package.php?id=<?php echo $row['package_id'] ?>">Add Slider Image</a>
              </div>
            </td>
          </tr>
      <?php }
      } ?>
    </tbody>
  </table>
  <div class="container" style="margin:0 30%;;">
    <?php

    $sql1 = "SELECT * FROM packages";
    $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

    if (mysqli_num_rows($result1) > 0) {

      $total_records = mysqli_num_rows($result1);

      $total_page = ceil($total_records / $limit);

      echo '<ul class="pagination">';
      if ($page > 1) {
        echo '<li class="page-item"><a class="page-link" href="view_packages.php?page=' . ($page - 1) . '">Prev</a></li>';
      }
      for ($i = 1; $i <= $total_page; $i++) {
        if ($i == $page) {
          $active = "active";
        } else {
          $active = "";
        }
        echo '<li class="page-item ' . $active . '"><a class="page-link" href="view_packages.php?page=' . $i . '">' . $i . '</a></li>';
      }
      if ($total_page > $page) {
        echo '<li class="page-item"><a class="page-link" href="view_packages.php?page=' . ($page + 1) . '">Next</a></li>';
      }

      echo '</ul>';
    }
    ?>
  </div>

  <?php include "footer.php" ?>