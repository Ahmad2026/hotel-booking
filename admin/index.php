<?php 
include "session.php";
include "header.php";

?>

      <div class="content">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Hotel Name</th>
              <th scope="col">Rooms Available</th>
              <th scope="col">Rating</th>
              <th scope="col" style="padding-left: 4em;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php include "config.php";
                      if(isset($_GET['page'])){
                    $page = $_GET['page'];
                  }else{
                    $page = 1;
                  }
                  $limit = 10;
                  $offset = ($page - 1) * $limit;
                $sql = "SELECT * FROM hotel_details LIMIT {$offset},{$limit}";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                  <th scope="row"><?php echo $row['hotel_id'] ?></th>
                  <td><?php echo $row['hotel_name'] ?></td>
                  <td><?php echo $row['total_rooms'] ?></td>
                  <td><?php echo $row['rating'] ?></td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['hotel_id'] ?>">Delete</a>
                      <a class="btn btn-warning btn-sm" href="update.php?id=<?php echo $row['hotel_id'] ?>">Update</a>
                    </div>
                  </td>
                </tr>
            <?php }
            } ?>
          </tbody>
        </table>
      </div>
       <div class="container" style="margin:0 30%;;">
         <?php
              
                $sql1 = "SELECT * FROM hotel_details";

                $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                if(mysqli_num_rows($result1) > 0){

                  $total_records = mysqli_num_rows($result1);

                  $total_page = ceil($total_records / $limit);

                  echo '<ul class="pagination">';
                  if($page > 1){
                    echo '<li class="page-item"><a class="page-link" href="index.php?page='.($page - 1).'">Prev</a></li>';
                  }
                  for($i = 1; $i <= $total_page; $i++){
                    if($i == $page){
                      $active = "active";
                    }else{
                      $active = "";
                    }
                    echo '<li class="page-item '.$active.'"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';
                  }
                  if($total_page > $page){
                    echo '<li class="page-item"><a class="page-link" href="index.php?page='.($page + 1).'">Next</a></li>';
                  }

                  echo '</ul>';
                }
                  ?>
                  </div>
 <?php include "footer.php" ?>