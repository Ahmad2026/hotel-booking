<?php include "header.php";
include "config.php"; ?>
<div class="content">
<div class="container">
<h1 class="display-4" >Update Hotel Detail</h1>
    <form action="save_update_hotel.php" method ="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
    <?php
    $id = $_GET['id'];
$sql = "SELECT * FROM hotel_details WHERE hotel_id = {$id}";
    $result = mysqli_query($conn,$sql) or die("Query Falied");
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){

    ?>    
  <div class="form-group ">
    <label for="exampleFormControlInput1">Hote Name</label>
    <input name="hotelname" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['hotel_name'] ?>" require>
  </div>

   <div class="form-group ">
    <label for="exampleFormControlInput1">Rooms</label>
    <input name="rooms" type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['total_rooms'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Rating</label>
    <select name="rating" class="form-control" id="exampleFormControlSelect1" require>
    <option diable> Select Rating</option>
    <?php 
    $i =0;
      while($i++<5){
                                      if($row['rating']==$i){
                                        $selected ="selected";
                                      }
                                      else{
                                        $selected="";
                                      }
                                      echo "<option {$selected} value='{$i}'>{$i}</option>";
                                  }
                                  ?>
    </select>
  </div>
  
  <div class="form-group">
                <label for="">Hotel image</label>
                <input type="file" name="new_image">
                <img  src="./upload/<?php echo $row['hotel_image'];?>" height="150px">
                <input type="hidden" name="old_image" value="<?php echo $row['hotel_image'];?>">
            </div>
   <button name="submit" type="submit" class="btn btn-primary mb-2">Submit</button>
  </div>
        <?php }}?>
</form>
</div>
</div>
</div>



<?php include "footer.php"?>